<?php
namespace Ecommerce\EcommerceBundle\Services;

use Symfony\Component\Security\Core\SecurityContextInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Security;

 // include('../vendor/html2pdf/lib/Html2Pdf/Html2Pdf.php');
//  require '../vendor/html2pdf/lib/Html2Pdf/Html2Pdf.php';
//require '../vendor/autoload.php';
//use spipu\Html2Pdf\Html2Pdf;


class GetFacture
{
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }
    
    public function facture($facture)
    {
        $html = $this->container->get('templating')->render('EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig', array('facture' => $facture));
        
        $html2pdf = new \Html2Pdf('P','A4','fr');

        $html2pdf->pdf->SetAuthor('Cheikhbi');
        $html2pdf->pdf->SetTitle('Facture '.$facture->getReference());
        $html2pdf->pdf->SetSubject('Facture Cheikhbi');
        $html2pdf->pdf->SetKeywords('facture,cheikhbi');
        $html2pdf->pdf->SetDisplayMode('real');
        $html2pdf->writeHTML($html);


        return $html2pdf;
    }
}