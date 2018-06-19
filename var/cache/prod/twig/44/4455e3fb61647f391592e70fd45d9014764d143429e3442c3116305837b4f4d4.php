<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_e073d2af53bca2d418c540c58dc481bbf8f629dd8d313d8eb040a5ee2ffe15a2 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 5)->display($context);
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  36 => 5,  33 => 4,  27 => 3,  24 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:request.html.twig", "/var/www/html/esymfony/app/Resources/FOSUserBundle/views/Resetting/request.html.twig");
    }
}
