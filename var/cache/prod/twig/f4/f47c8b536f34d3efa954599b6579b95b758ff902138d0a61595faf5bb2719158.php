<?php

/* PagesBundle:Default:menu.html.twig */
class __TwigTemplate_3b29b86d49ff8de881e0c3c6958f636ac36a13387bc5b903ced5d5e3f8f2cae5 extends Twig_Template
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
 ";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
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
        return array (  44 => 7,  33 => 4,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PagesBundle:Default:menu.html.twig", "/var/www/html/esymfony/src/PagesBundle/Resources/views/Default/menu.html.twig");
    }
}
