<?php
namespace Ecommerce\EcommerceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Ecommerce\EcommerceBundle\Entity\Produits;
use Ecommerce\EcommerceBundle\Entity\Recherche;
use Ecommerce\EcommerceBundle\Form\ProduitsType;
use Ecommerce\EcommerceBundle\Entity\UtilisateursAdresses;
use Ecommerce\EcommerceBundle\Form\UtilisateursAdressesType;
use Ecommerce\EcommerceBundle\Form\RechercheType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\Security\Core\Security;

use Symfony\Component\DependencyInjection\ContainerInterface;



class EcommerceController extends Controller
{

    public function cronAction()
    {

       $rep = $this->container->get('oc_platform.bigbrother.message_listener')->listenermail();

        return new Response('ok');

    }
    public function indexAction(Request $request)
    {

        $salutations = 'Hello' ;
        $session = $request->getSession();

        $em = $this->getDoctrine()->getManager();
        $prod = $em->getRepository('EcommerceEcommerceBundle:Produits')->findBy(array('disponible' => 1));


        if ($session->has('panier')) {

            $panier = $session->get('panier');
        } else {

            $panier = false;

        }


        $ind  = $this->get('knp_paginator');
        $ind = $ind->paginate(
            $prod,
            $request->query->get('page', 1)/*page number*/,
            4/*limit per page*/
        );


        return $this->render('EcommerceEcommerceBundle:Ecommerce:index.html.twig', array('ind' => $ind, 'panier' => $panier, 'salutations' =>$salutations));

    }

    public function inscriptionAction()
    {
        return $this->render('EcommerceEcommerceBundle:Ecommerce:inscription.html.twig');
    }

    public function adressesAction()
    {
        return $this->render('EcommerceEcommerceBundle:Ecommerce:adresses.html.twig');
    }

    public function connexionAction()
    {

        return $this->render('EcommerceEcommerceBundle:Ecommerce:connexion.html.twig');
    }


    public function mescategoriesAction($category, Request $request)
    {
        $session = $request->getSession();

        $em = $this->getDoctrine()->getManager();
        $categ = $em->getRepository('EcommerceEcommerceBundle:Produits')->categ($category);
        //  var_dump($cat);
        if ($session->has('panier')) {
            $panier = $session->get('panier');
        } else {
            $panier = false;
        }

        $cat  = $this->get('knp_paginator');
        $cat = $cat->paginate($categ,
            $request->query->get('page', 1)/*page number*/,
            4/*limit per page*/
        );
        return $this->render('EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig', array('cat' => $cat, 'panier' => $panier));
    }


    public function produitAction($id, Request $request)
    {

        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();
        $rep = $em->getRepository('EcommerceEcommerceBundle:Produits')->find($id);
        if ($session->has('panier')) {
            $panier = $session->get('panier');
        } else {
            $panier = false;


                    }

        return $this->render('EcommerceEcommerceBundle:Ecommerce:produit.html.twig', array('rep' => $rep, 'panier' => $panier));

    }

    public function moncompteAction()
    {
        return $this->render('EcommerceEcommerceBundle:Ecommerce:moncompte.html.twig');
    }

    public function motdepasseperduAction()
    {
        return $this->render('EcommerceEcommerceBundle:Ecommerce:motdepasseperdu.html.twig');
    }

    public function nouveaumotdepasseAction()
    {
        return $this->render('EcommerceEcommerceBundle:Ecommerce:nouveaumotdepasse.html.twig');
    }


    public function texteAction()
    {
        return $this->render('EcommerceEcommerceBundle:Ecommerce:texte.html.twig');
    }

    public function categoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $cat = $em->getRepository('EcommerceEcommerceBundle:Categories')->findAll();
        //var_dump($cat);
        return $this->render('EcommerceEcommerceBundle:Ecommerce:categories.html.twig', array('cat' => $cat));
    }

    public function rechercheAction()
    {
        $monform = new Recherche();
        //   var_dump($monform);
        $formulaire = $this->get('form.factory')->create(RechercheType::Class, $monform);
        //  var_dump(get_class_methods($formulaire));

        //    var_dump(get_class_methods($this->createForm(new RechercheType())));
        //    $formulaire = $this->createForm(new RechercheType());

        /*
        if ($request->isMethod('POST') && $formulaire->handleRequest($request)->isValid())
          {
           $em= $this->get('doctrine')->getManager();

           $rep=$em->getRepository('EcommerceBundle:Produits')->findAll();
          // var_dump($rep);

             $modif= $rep->setNom();

          //  var_dump(get_class_methods($modif));
           $em->persist($modif);
          $em->flush();

          }




               $em = $this->getDoctrine()->getManager();
               $rech = $em->getRepository('EcommerceEcommerceBundle:Produits')->findAll();
             //  var_dump($cat);
       */
//return $this->render('EcommerceEcommerceBundle:Ecommerce:recherche.html.twig', array('formulaire'=> $ormulaire->createView()));

//  var_dump(get_class_methods($formulaire->createView()));
//    var_dump($formulaire->createView());

        return $this->render('EcommerceEcommerceBundle:Ecommerce:recherche.html.twig',
            array('formulaire' => $formulaire->createView()));

    }

    public function recherchetraitementAction(Request $request)
    {
        $monform = new Recherche();
        //   var_dump($monform);
        $formulaire = $this->get('form.factory')->create(RechercheType::Class, $monform);

        if ($request->isMethod('POST') && $formulaire->handleRequest($request)->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $cat = $em->getRepository('EcommerceEcommerceBundle:Produits')->recherche($formulaire['recherche']->getData());
            // var_dump(get_class_methods($formulaire['recherche']));
            //  var_dump($formulaire) ;
            $mapage = $formulaire['recherche']->getData();

        }
        else {
            throw $this->createNotFoundException('la page n\'existe pas');
        }

            return $this->render('EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig', array('cat' => $cat, 'mapage' => $mapage));

    }

    public function supprimerAction($id, Request $request)
    {
        $session = $request->getSession();
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            unset($panier[$id]);
            $session->set('panier', $panier);
            $session->getFlashBag()->add('succes', 'produit supprime');
        }

        return $this->redirectToRoute('ecommerce_panier');

    }


    public function ajouterAction($id, Request $request)
    {
        
        $session = $request->getSession();

        if (!$session->has('panier')) $session->set('panier',array());
        $panier = $session->get('panier');

        if (array_key_exists($id, $panier)) {
            if ($request->get('qte') != null)   $panier[$id] = $request->get('qte');
            $this->get('session')->getFlashBag()->add('success','Quantité modifié avec succès');
        } else {
            if ($request->get('qte') != null)
                $panier[$id] = $request->get('qte');
            else
                $panier[$id] = 1;

            $this->get('session')->getFlashBag()->add('success','Article ajouté avec succès');
        }

        $session->set('panier',$panier);


        return $this->redirectToRoute('ecommerce_panier');
    }

    public function panierAction(Request $request)
    {
        $session = $request->getSession();

        if (!$session->has('panier')) {
            $session->set('panier', array());
        }
        else
        {
            $em = $this->getDoctrine()->getManager();

            $monpanier = $em->getRepository("EcommerceEcommerceBundle:Produits")->monArray(array_keys($session->get('panier')));

            return $this->render('EcommerceEcommerceBundle:Ecommerce:panier.html.twig', array('monpanier' => $monpanier,
                'panier' => $session->get('panier')));
        }

    }

    public function menuAction(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('panier'))
            $articles = 0;
        else
            $articles = count($session->get('panier'));

        return $this->render('EcommerceEcommerceBundle:Ecommerce:menu.html.twig', array('articles' => $articles));

    }

    public function livraionAdresseSuppressionAction($id, Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EcommerceEcommerceBundle:UtilisateursAdresses')->find($id);

        if ($this->container->get('security.token_storage')->getToken()->getUser() != $entity->getUtilisateur() || !$entity) {
            return $this->redirectToRoute('ecommerce_livraison');
        }
        $em->remove($entity);
        $em->flush();

        return $this->redirectToRoute('ecommerce_livraison');
    }

    public function livraisonAction(Request $request)
    {
        $utilisateur = $this->container->get('security.token_storage')->getToken()->getUser();
        $entity = new UtilisateursAdresses();

        /*
          $advert = new Advert();
    $form   = $this->get('form.factory')->create(AdvertType::class, $advert);
         */
        /*
          if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
      $em = $this->getDoctrine()->getManager();
      $em->persist($advert);
      $em->flush();
         */

        $form = $this->get('form.factory')->create(UtilisateursAdressesType::class, $entity);
        if ($request->isMethod('POST') && $form->handleRequest($request)->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity->setUtilisateur($utilisateur);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('ecommerce_livraison'));
        }



        //    var_dump(get_class_methods($utilisateur));
        //   var_dump(get_class_methods($utilisateur->getAdresses()));
        return $this->render('EcommerceEcommerceBundle:Ecommerce:livraison.html.twig', array('utilisateur' => $utilisateur,
            'form' => $form->createView()));
    }

    public function setLivraisonOnSession(Request $request)
    {
        $session = $request->getSession();
        if (!$session->has('adresse')) {
            $session->set('adresse', array());
        }
        else{
            $adresse = $session->get('adresse');
        }

        if ($request->get('livraison') != null && $request->get('facturation') != null) {
            $adresse['livraison'] = $request->get('livraison');
            $adresse['facturation'] = $request->get('facturation');

        } else {
            return $this->redirectToRoute('ecommerce_validation');
        }

        $session->set('adresse', $adresse);

        return $this->redirectToRoute('ecommerce_validation');
    }

    public function validationAction(Request $request)
    {

    if ($request->isMethod('POST')) {
        $this->setLivraisonOnSession($request);
    }
        $em = $this->getDoctrine()->getManager();
        $prepareCommande = $this->forward('EcommerceEcommerceBundle:Commandes:prepareCommande'); // je recupere l'id de la commande


        $commande = $em->getRepository('EcommerceEcommerceBundle:Commandes')->find($prepareCommande->getContent());

        return $this->render("EcommerceEcommerceBundle:Ecommerce:validation.html.twig", array('commande'=>$commande ));
    /*
     $em = $this->getDoctrine()->getManager();
     $session = $request->getSession();
     $adresse = $session->get('adresse');


        $produits = $em->getRepository("EcommerceEcommerceBundle:Produits")->monArray(array_keys($session->get('panier')));
        $livraison = $em->getRepository("EcommerceEcommerceBundle:UtilisateursAdresses")->find($adresse['livraison']);

        $facturation = $em->getRepository("EcommerceEcommerceBundle:UtilisateursAdresses")->find($adresse['facturation']);


        return $this->render("EcommerceEcommerceBundle:Ecommerce:validation.html.twig", array('produits'=>$produits,
                                                                                                   'livraison'=>$livraison,
                                                                                                   'facturation'=>$facturation,
                                                                                                   'panier' => $session->get('panier')
                                                                                                      ));
    */

    }


    public function factureAction()
    {
        $em = $this->getDoctrine()->getManager();

        $factures = $em->getRepository("EcommerceEcommerceBundle:Commandes")->byFacture($this->getuser());

        return $this->render("EcommerceEcommerceBundle:Ecommerce:facture.html.twig", array('factures' => $factures));

    }


    public function facturesPDFAction($id)
    {

        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceEcommerceBundle:Commandes')->findOneBy(array('utilisateur' => $this->getUser(),
            'valider' => 1,
            'id' => $id));

        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('ecommerce_facture'));
        }


        $html = $this->renderView('EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig', array('facture' => $facture));

        $html2pdf =  new \Html2Pdf_Html2Pdf('P','A4','fr');
        //   die();
      //   $html2pdf =  new \Html2Pdf('P','A4','fr'); 
        $html2pdf =  new \HTML2PDF('P','A4','fr');
        $html2pdf->pdf->SetAuthor('DevAndClick');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture DevAndClick');
        $html2pdf->pdf->SetKeywords('facture,devandclick');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);
        $html2pdf->Output('Facture.pdf');

        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');

        return $response;


    }

/*
    public function facturesPDFAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $facture = $em->getRepository('EcommerceEcommerceBundle:Commandes')->findOneBy(array('utilisateur' => $this->getUser(),
            'valider' => 1,
            'id' => $id));

        if (!$facture) {
            $this->get('session')->getFlashBag()->add('error', 'Une erreur est survenue');
            return $this->redirect($this->generateUrl('admin_commandes_index    '));
        }


        $this->container->get('setNewFacture')->facture($facture)->Output('Facture.pdf');
        $response = new Response();
        $response->headers->set('Content-type' , 'application/pdf');

        return $response;
    }
*/
}