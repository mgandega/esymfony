<?php
 namespace Ecommerce\EcommerceBundle\Twig\Extension;

 class TvaExtension extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }

    public function priceFilter($pht , $ttc)
    {
    	return round($pht/$ttc,2) ;
    }

/*    public function getName()
  {

  }
*/
}

