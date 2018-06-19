<?php
namespace AppBundle\Serializer\Listener;


use JMS\Serializer\EventDispatcher\Events;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;

use JMS\Serializer\EventDispatcher\ObjectEvent;


class ArticleListener implements EventSubscriberInterface

{

    public static function getSubscribedEvents()

    {

        return [

            [

                'event' => Events::POST_SERIALIZE,

                'format' => 'json',

                'class' => 'AppBundle\Entity\Article', //la class qui doit être serialiser

                'method' => 'onPostSerialize',

            ]

        ];

    }


    public static function onPostSerialize(ObjectEvent $event)

    {

        // Possibilité de récupérer l'objet qui a été sérialisé

        $object = $event->getObject();


        $date = new \Datetime();

        // Possibilité de modifier le tableau après sérialisation

        $event->getVisitor()->addData('delivered_at', $date->format('l jS \of F Y h:i:s A'));

    }

}