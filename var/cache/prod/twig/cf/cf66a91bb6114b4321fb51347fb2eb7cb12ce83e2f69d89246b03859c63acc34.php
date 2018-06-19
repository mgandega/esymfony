<?php

/* PagesBundle:Default:pages.html.twig */
class __TwigTemplate_f44ff8239b349897ebbcd08e66c84a3c3c480e69257cd1240637112c4ef63853 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "PagesBundle:Default:pages.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "titre", array());
        echo "<br/>
";
        // line 5
        echo twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "contenu", array());
        echo "
";
    }

    public function getTemplateName()
    {
        return "PagesBundle:Default:pages.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "PagesBundle:Default:pages.html.twig", "/var/www/html/esymfony/src/PagesBundle/Resources/views/Default/pages.html.twig");
    }
}
