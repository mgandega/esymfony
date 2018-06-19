<?php


namespace AppBundle\Controller;


use AppBundle\Entity\Article;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class ArticleController extends Controller

{

    /**

     * @Route("/articles/{id}", name="article_show")

     */

    public function showAction()

    {

        $article = new Article();

        $article

            ->setTitle('Mon premier article')

            ->setContent('Le contenu de mon article.')

        ;

        $data = $this->get('jms_serializer')->serialize($article, 'json');


        $response = new Response($data);

        $response->headers->set('Content-Type', 'application/json');


        return $response;

    }

    /**

     * @Route("/articles", name="article_create")

     * @Method({"POST"})

     */

    public function createAction(Request $request)

    {

        $data = $request->getContent();

        $article = $this->get('jms_serializer')->deserialize($data, 'AppBundle\Entity\Article', 'json');


        $em = $this->getDoctrine()->getManager();

        $em->persist($article);

        $em->flush();


        return new Response('', Response::HTTP_CREATED);

    }

}