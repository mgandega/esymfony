<?php

/* EcommerceEcommerceBundle:Ecommerce:recherche.html.twig */
class __TwigTemplate_f3bee6a08d50f361b1c9fd9cf48faf637c8476deec957b4685f14b6df23ffe98 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:recherche.html.twig"));

        // line 1
        echo "

  <form action=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_recherchetraitement");
        echo "\" method=\"POST\" class=\"navbar-form form-search pull-right\"> 
\t\t\t  ";
        // line 4
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new Twig_Error_Runtime('Variable "formulaire" does not exist.', 4, $this->source); })()), "recherche", array()), 'widget');
        echo " 
\t\t\t             ";
        // line 6
        echo "\t\t\t            <input type=\"submit\" class=\"btn\" value=\"Rechercher..\">
            ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["formulaire"]) || array_key_exists("formulaire", $context) ? $context["formulaire"] : (function () { throw new Twig_Error_Runtime('Variable "formulaire" does not exist.', 7, $this->source); })()), 'widget');
        echo "

          ";
        // line 10
        echo "                ";
        // line 11
        echo "  </form> 

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  48 => 11,  46 => 10,  41 => 7,  38 => 6,  34 => 4,  30 => 3,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("

  <form action=\"{{path('ecommerce_recherchetraitement')}}\" method=\"POST\" class=\"navbar-form form-search pull-right\"> 
\t\t\t  {{form_widget(formulaire.recherche)}} 
\t\t\t             {#       {{form(formulaire)}} #}
\t\t\t            <input type=\"submit\" class=\"btn\" value=\"Rechercher..\">
            {{form_widget(formulaire)}}

          {#  <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\"> #}
                {#   <input type=\"submit\" class=\"btn\" value=\"Rechercher..\"><nav>Rechercher..</nav> #}
  </form> 

", "EcommerceEcommerceBundle:Ecommerce:recherche.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/recherche.html.twig");
    }
}
