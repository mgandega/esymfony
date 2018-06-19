<?php

/* EcommerceEcommerceBundle:Ecommerce:inscription.html.twig */
class __TwigTemplate_be55ecd8b5cd905d9f9f93f3b6ae6d33dd9a72faac782ce5456b0febdead80d9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:inscription.html.twig", 1);
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
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Inscription</h4>
                        <form>
                            <label>Nom d'utilisateur</label>
                            <input type=\"text\" name=\"email\" id=\"email\">
                            
                            <label>Adresse email</label>
                            <input type=\"text\" name=\"email\" id=\"email\">
                            
                            <label>Mot de passe</label>
                            <input type=\"text\" name=\"email\" id=\"email\">
                            
                            <label>Confirmer</label>
                            <input type=\"text\" name=\"password\" id=\"password\">
                            <br />
                            <button class=\"btn btn-primary\">Inscription</button>
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
        return "EcommerceEcommerceBundle:Ecommerce:inscription.html.twig";
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
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:inscription.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/inscription.html.twig");
    }
}
