<?php

/* EcommerceEcommerceBundle:Ecommerce:connexion.html.twig */
class __TwigTemplate_7bbdf3cfd3418314f5c49aa22013d7a6e3f8700351e03e7f4e63cf23d6ad98d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:connexion.html.twig", 1);
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
        echo "
<div class=\"container\">
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
                        <br /><br />
                        <a href=\"inscription.php\" class=\"btn btn-primary\">S'inscrire</a>
                        
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"mon-compte.php\">
                            <label>Nom d'utilisateur</label>
                            <input type=\"text\" name=\"email\" id=\"email\">
                            
                            <label>Mot de passe</label>
                            <input type=\"text\" name=\"password\" id=\"password\">
                            <br />
                            <button class=\"btn btn-primary\">Connexion</button>
                        </form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"mot-de-passe-perdu.php\">Mot de passe perdu ?</a>
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
        return "EcommerceEcommerceBundle:Ecommerce:connexion.html.twig";
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
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:connexion.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/connexion.html.twig");
    }
}
