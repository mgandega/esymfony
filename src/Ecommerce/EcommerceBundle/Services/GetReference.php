<?php
namespace Ecommerce\EcommerceBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;

class GetReference 
{
    public function __construct($securityContext, $entityManager)
    {
        $this->securityContext = $securityContext;
    //    $this->securityContext = $container->get('security.token_storage');
        $this->em = $entityManager;
    }
    
    public function reference()
    {
        $reference = $this->em->getRepository('EcommerceEcommerceBundle:Commandes')->findOneBy(array('valider' => 1), array('id' => 'DESC'),1,1);


        if (!$reference)
            return 1;
        else 
            return $reference->getReference() +1;
    }
}