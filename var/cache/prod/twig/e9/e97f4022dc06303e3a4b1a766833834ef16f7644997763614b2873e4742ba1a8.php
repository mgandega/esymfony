<?php

/* EcommerceEcommerceBundle:Ecommerce:adresses.html.twig */
class __TwigTemplate_14e1d5f1eba3f0fd1fb156241200c37527f1256bbba64ce7c7d0a35ced731737 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
              
        <div class=\"span9\">

        ";
        // line 8
        $this->loadTemplate("::navigation.html.twig", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig", 8)->display($context);
        echo "      
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                                <div class=\"span4\">
                                    <form action=\"validation.php\">
                                        <h4 class=\"radio\">Adresses de livraisons</h4>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                    </form>
                                </div>

\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Code postal</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
                                        
\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
                                        
\t\t\t\t\t\t\t\t\t\t<label>Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">                                        
                                        
                                        <br />
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
                </div>
            </div>
                        
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/adresses.html.twig");
    }
}
