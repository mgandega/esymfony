<?php
namespace AppBundle\Serializer\Handler;

use JMS\Serializer\GraphNavigator;
use JMS\Serializer\Handler\SubscribingHandlerInterface;
use AppBundle\Entity\Article;
use JMS\Serializer\JsonSerializationVisitor;
use JMS\Serializer\JsonDeserializationVisitor;
use JMS\Serializer\SerializationContext as Context;


class ArticleHandler implements SubscribingHandlerInterface
{
    public static function getSubscribingMethods()
    {
        return [
            [
                'direction' => GraphNavigator::DIRECTION_SERIALIZATION,
                'format' => 'json',
                'type' => 'AppBundle\Entity\Article',
                'method' => 'serialize',
            ],
            [
                'direction' => GraphNavigator::DIRECTION_DESERIALIZATION,
                'format' => 'json',
                'type' => 'AppBundle\Entity\Article',
                'method' => 'deserialize',
            ]
        ];
    }

    public function serialize(JsonSerializationVisitor $visitor, Article $article, array $type, Context $context)
    {
        $date = new \Datetime();
        $data = [
            'title' => $article->getTitle(),
            'content' => $article->getContent(),
            'delivered_at' => $date->format('l jS \of F Y h:i:s A'),
        ];
        return $visitor->visitArray($data, $type, $context);
    }

    public function deserialize(JsonDeserializationVisitor $visitor, $data)
    {
        return new Article($data);
    }
}