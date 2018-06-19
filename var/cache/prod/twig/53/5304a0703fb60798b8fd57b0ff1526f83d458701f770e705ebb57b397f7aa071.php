<?php

/* EcommerceEcommerceBundle:Ecommerce:recherche.html.twig */
class __TwigTemplate_7340a860d24eba8f499ae0c16733ffde88507a9f7c6d44f675449af7b77976c5 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "

  <form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_recherchetraitement");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\"> 
\t\t\t  ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, ($context["formulaire"] ?? null), "recherche", array()), 'widget');
        echo " 
\t\t\t             ";
        // line 6
        echo "\t\t\t            <input type=\"submit\" class=\"btn\" value=\"Rechercher..\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["formulaire"] ?? null), 'widget');
        echo "

          ";
        // line 10
        echo "                ";
        // line 11
        echo "  </form> 

";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:recherche.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 11,  43 => 10,  38 => 7,  35 => 6,  31 => 4,  27 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:recherche.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/recherche.html.twig");
    }
}
