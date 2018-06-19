<?php

/* EcommerceEcommerceBundle:Ecommerce:motdepasseperdu.html.twig */
class __TwigTemplate_404ee2f36162abdd6bda0ef0733f7cf2d1c7634b71d7af9a6e8a0d843ff6198f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:motdepasseperdu.html.twig", 1);
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
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Vous avez perdu votre mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, un email vous seras envoyé.<br />
                            Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"nouveau-mot-de-passe.php\">
                            <label>Adresse email</label>
                            <input type=\"text\" name=\"email\" id=\"email\">
                            <br />
                            <button class=\"btn btn-primary\">Envoyer</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:motdepasseperdu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:motdepasseperdu.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/motdepasseperdu.html.twig");
    }
}
