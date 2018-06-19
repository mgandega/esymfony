<?php

/* :email:password_resetting.html.twig */
class __TwigTemplate_e7ae7ff821428e43962deb7a234db30e8bbeebc54e642d818b223800586402e4 extends Twig_Template
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
        echo "Bonjour, 
Votre mot de passe va bientot est reinitiatise, vous pouvez vous rendre sur le site pour vous conecter !!!";
    }

    public function getTemplateName()
    {
        return ":email:password_resetting.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":email:password_resetting.html.twig", "/var/www/html/esymfony/app/Resources/views/email/password_resetting.html.twig");
    }
}
