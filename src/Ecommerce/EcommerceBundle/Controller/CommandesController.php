<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Util\SecureRandom;

class CommandesController extends Controller
{
    public function facture(Request $request)
    {
        $em = $this->getDoctrine()->getManager();

        //    $random = new SecureRandom();
        //    $generator = $random->nextBytes(32);
        //    $generator = $this->container->get('security.secure_random');
        $generator = random_bytes(20);

        //    var_dump($generator);
        //    die();

        $session = $request->getSession();
        $adresse = $session->get('adresse');
        $panier = $session->get('panier');
        $commande = array();
        $totalHT = 0;
        $totalTVA = 0;

        $facturation = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresse['facturation']);
        $livraison = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($adresse['livraison']);
        $produits = $em->getRepository('EcommerceEcommerceBundle:Produits')->monArray(array_keys($session->get('panier')));

        foreach ($produits as $produit) {
            $prixHT = ($produit->getPrix() * $panier[$produit->getId()]);
            $prixTTC = ($produit->getPrix() * $panier[$produit->getId()] / $produit->getTva()->getMultiplicate());
            $totalHT += $prixHT;


            if (!isset($commande['tva']['%' . $produit->getTva()->getValeur()])) {
                $commande['tva']['%' . $produit->getTva()->getValeur()] = round($prixTTC - $prixHT, 2);
                $totalTVA += round($prixTTC - $prixHT, 2);
            } else {
                $commande['tva']['%' . $produit->getTva()->getValeur()] += round($prixTTC - $prixHT, 2);
                $totaTVA += round($prixTTC - $prixHT, 2);
            }

            $commande['produit'][$produit->getId()] = array('reference' => $produit->getNom(),
                'quantite' => $panier[$produit->getId()],
                'prixHT' => round($produit->getPrix(), 2),
                'prixTTC' => round($produit->getPrix() / $produit->getTva()->getMultiplicate(), 2));


        }

        $commande['livraison'] = array('prenom' => $livraison->getPrenom(),
            'nom' => $livraison->getNom(),
            'telephone' => $livraison->getTelephone(),
            'adresse' => $livraison->getAdresse(),
            'cp' => $livraison->getCp(),
            'ville' => $livraison->getVille(),
            'pays' => $livraison->getPays(),
            'complement' => $livraison->getComplement());

        $commande['facturation'] = array('prenom' => $facturation->getPrenom(),
            'nom' => $facturation->getNom(),
            'telephone' => $facturation->getTelephone(),
            'adresse' => $facturation->getAdresse(),
            'cp' => $facturation->getCp(),
            'ville' => $facturation->getVille(),
            'pays' => $facturation->getPays(),
            'complement' => $facturation->getComplement());

        $commande['prixHT'] = round($totalHT, 2);
        $commande['prixTTC'] = round($totalHT + $totalTVA, 2);
        //    $commande['token'] = bin2hex($generator->nextBytes(20));
        $commande['token'] = bin2hex($generator);

        return $commande;
    }

    public function prepareCommandeAction(Request $request)
    {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        if (!$session->has('commande')) {
            $commande = new Commandes();
        } else {

            $commande = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($session->get('commande')->getId());
                 // $session->get('commande') => a revoir
        }
        $commande->setDate(new \DateTime());
        $commande->setUtilisateur($this->container->get('security.token_storage')->getToken()->getUser());
        $commande->setValider(0);
        $commande->setReference(0);
        $commande->setCommande($this->facture($request)); // $this->facture($request) recupere le tableau $commande

        if (!$session->has('commande')) {
            $em->persist($commande);
            $session->set('commande', $commande);

        }

        $em->flush();

        return new Response($commande->getId());
    }


    /*
     * Cette methode remplace l'api banque.
     */
    public function validationCommandeAction($id, Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $commande = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($id);


        if (!$commande || $commande->getValider() == 1) {
            throw $this->createNotFoundException('La commande n\'existe pas');
        }
        $commande->setValider(1);
        $commande->setReference($this->container->get('setNewReference')->reference()); //Service
        $em->flush();

        $session = $request->getSession();
        $session->remove('adresse');
        $session->remove('panier');
        $session->remove('commande');

        /***************************************************************************************************/

        $message = \Swift_Message::newInstance() 
            ->setSubject('Validation de votre commande')
            ->setFrom(array("mgandega@gmail.com" => "Cheikhbi"))
            ->setTo($commande->getUtilisateur()->getEmailCanonical())
            ->setCharset('utf-8')
            ->setContentType('text/html')
            ->setBody($this->renderView('EcommerceEcommerceBundle:Email:registration.html.twig',array('utilisateur' => $commande->getUtilisateur())));

        $this->get('mailer')->send($message);

        /*************************************************************************************************/

                $this->get('session')->getFlashBag()->add('mysuccess', 'Votre commande est validé avec succès');
                return $this->redirect($this->generateUrl('ecommerce_facture'));

            }

}