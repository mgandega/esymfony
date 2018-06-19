<?php

/* PagesBundle:Default:menu.html.twig */
class __TwigTemplate_d07fb96af0bd0661a708c8aa653bf4b828cb6499219c263fb13eef9a5fd00b10 extends Twig_Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PagesBundle:Default:menu.html.twig"));

        // line 1
        echo "
 ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new Twig_Error_Runtime('Variable "pages" does not exist.', 2, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["mespages"]) {
            echo " 

      <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("page", array("slug" => twig_get_attribute($this->env, $this->source, $context["mespages"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["mespages"], "titre", array());
            echo "</a> <br/>

 ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['mespages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 7,  36 => 4,  29 => 2,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("
 {% for mespages in pages %} 

      <a href=\"{{path('page', {'slug':mespages.slug})}}\">{{mespages.titre|raw}}</a> <br/>

 {% endfor %}


", "PagesBundle:Default:menu.html.twig", "/var/www/html/esymfony/src/PagesBundle/Resources/views/Default/menu.html.twig");
    }
}
