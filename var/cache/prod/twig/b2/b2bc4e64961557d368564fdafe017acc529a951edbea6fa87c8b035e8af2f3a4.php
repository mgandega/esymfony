<?php

/* FOSUserBundle:Resetting:check_email.html.twig */
class __TwigTemplate_6ddfd4f48ebaa4c8e45706c3548a5a4b343ef5f56a60736f9dfca9ec196fe8fb extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Resetting:check_email.html.twig", 1);
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

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "
<p>Nous vous avons envoyer un lien que vous devrez cliquer pour acceder a votre compte</p>\t
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 8,  32 => 7,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:check_email.html.twig", "/var/www/html/esymfony/app/Resources/FOSUserBundle/views/Resetting/check_email.html.twig");
    }
}
