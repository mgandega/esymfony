<?php

/* :email:password_resetting.email.twig */
class __TwigTemplate_5f0f18e95a3cdb0baad0d6962da39eaed6b74025d6793fed9de26a348178826d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('subject', $context, $blocks);
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('body_text', $context, $blocks);
        // line 15
        echo "
";
        // line 16
        $this->displayBlock('body_html', $context, $blocks);
    }

    // line 3
    public function block_subject($context, array $blocks = array())
    {
        echo "Resetting your password";
    }

    // line 5
    public function block_body_text($context, array $blocks = array())
    {
        // line 7
        echo "Hello ";
        echo twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array());
        echo " !

You can reset your password by accessing ";
        // line 9
        echo ($context["confirmationUrl"] ?? null);
        echo "

Greetings,
the App team
";
    }

    // line 16
    public function block_body_html($context, array $blocks = array())
    {
        // line 22
        $this->loadTemplate("email/password_resetting.html.twig", ":email:password_resetting.email.twig", 22)->display($context);
    }

    public function getTemplateName()
    {
        return ":email:password_resetting.email.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 22,  67 => 16,  58 => 9,  52 => 7,  49 => 5,  43 => 3,  39 => 16,  36 => 15,  34 => 5,  31 => 4,  29 => 3,  26 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":email:password_resetting.email.twig", "/var/www/html/esymfony/app/Resources/views/email/password_resetting.email.twig");
    }
}
