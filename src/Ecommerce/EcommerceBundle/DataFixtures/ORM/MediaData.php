<?php
namespace Ecommerce\EcommerceBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Ecommerce\EcommerceBundle\Entity\Media;

class MediaData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $media1 = new Media();
        $media1->setPath('http://cp.lakanal.free.fr/exercices/jeux/memory/legumes/legumes.png');
        $media1->setAlt('Légumes');
        $manager->persist($media1);
        
        $media2 = new Media();
        $media2->setPath('http://img0.mxstatic.com/wallpapers/238cdfc903a19ad39ea901619dd55d47_large.jpeg');
        $media2->setAlt('Fruits');
        $manager->persist($media2);

        $media3 = new Media();
        $media3->setPath('http://www.lorand-nature.fr/images/Image/poivron_rouge_001_1403099063.jpg');
        $media3->setAlt('Poivron rouge');
        $manager->persist($media3);   
            
        $media4 = new Media();
        $media4->setPath('https://img2.topsante.com/var/topsante/storage/images/medecine/cancers/cancer-de-la-prostate/prevenir/le-piment-bienfaiteur-de-la-prostate-365/86918-2-fre-FR/Le-piment-bienfaiteur-de-la-prostate_width1024.jpg');
        $media4->setAlt('Piment');
        $manager->persist($media4);              
        
        $media5 = new Media();
        $media5->setPath('http://www.niffylux.com/image-gratuite/Tomate__7_4b71e7e13f85b.jpg');
        $media5->setAlt('Tomate');
        $manager->persist($media5);
        
        $media6 = new Media();
        $media6->setPath('http://www.leshallesdelodie.fr/medias/images/poivrons-verts.jpg');
        $media6->setAlt('Poivron vert');
        $manager->persist($media6);
        
        $media7 = new Media();
        $media7->setPath('http://www.boitearecettes.com/fruits_legumes/raisins-6.gif');
        $media7->setAlt('Raisin');
        $manager->persist($media7);
        
        $media8 = new Media();
        $media8->setPath('http://www.orangeclaire.com/images/oce_orange_01.jpg');
        $media8->setAlt('Orange');
        $manager->persist($media8);
        
        $manager->flush();
        
        $this->addReference('media1', $media1);
        $this->addReference('media2', $media2);
        $this->addReference('media3', $media3);
        $this->addReference('media4', $media4);
        $this->addReference('media5', $media5);        
        $this->addReference('media6', $media6);
        $this->addReference('media7', $media7);        
        $this->addReference('media8', $media8);
    }
    
    public function getOrder()
    {
        return 1;
    }
}