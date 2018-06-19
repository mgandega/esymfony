<?php

namespace Ecommerce\EcommerceBundle\Controller;

use Ecommerce\EcommerceBundle\Entity\Commandes;
use Ecommerce\EcommerceBundle\Form\CommandesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Commande controller.
 *
 */
class CommandesAdminController extends Controller
{
    /**
     * Lists all commande entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commandes = $em->getRepository('EcommerceEcommerceBundle:Commandes')->findAll();

        return $this->render('EcommerceEcommerceBundle:commandes:index.html.twig', array(
            'commandes' => $commandes,
        ));
    }

    /**
     * Creates a new commande entity.
     *
     */
 /*   public function newAction(Request $request)
    {
        $commande = new Commandes();

        $form = $this->createForm('Ecommerce\EcommerceBundle\Form\CommandesType', $commande);
        $form->handleRequest($request);



        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($commande);
            $em->flush();

            return $this->redirectToRoute('admin_commandes_show', array('id' => $commande->getId()));
        }

        return $this->render('EcommerceEcommerceBundle:commandes:new.html.twig', array(
            'commande' => $commande,
            'form' => $form->createView(),
        ));
    }
*/
    /**
     * Finds and displays a commande entity.
     *
     */
    public function showAction(Commandes $commande)
    {
        $deleteForm = $this->createDeleteForm($commande);

        return $this->render('EcommerceEcommerceBundle:commandes:show.html.twig', array(
            'commande' => $commande,
            'delete_form' => $deleteForm->createView(),
        ));
    }



}
