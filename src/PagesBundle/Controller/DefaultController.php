<?php

namespace PagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PagesBundle:Default:index.html.twig');
    }

    public function menuAction()
    {
    	$em = $this->getDoctrine()->getManager();
        $pages= $em->getRepository('PagesBundle:Pages')->findAll();

    	return $this->render("PagesBundle:Default:menu.html.twig", array('pages' => $pages));
    }

    public function pagesAction($slug)
    {
        $em = $this->getDoctrine()->getManager();
        $pages= $em->getRepository('PagesBundle:Pages')->findOneBy(array('slug'=>$slug));


        return $this->render("PagesBundle:Default:pages.html.twig", array('page' => $pages));
    }
}
