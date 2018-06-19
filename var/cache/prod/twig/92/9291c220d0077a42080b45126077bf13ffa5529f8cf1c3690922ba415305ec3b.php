<?php

/* EcommerceEcommerceBundle:Ecommerce:moncompte.html.twig */
class __TwigTemplate_db8b59ed12f65edc03104817422e26cc5d799a580c5224e998ab975bc7d940f8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:moncompte.html.twig", 1);
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
        
        ";
        // line 6
        $this->loadTemplate("::col-left-co.html.twig", "EcommerceEcommerceBundle:Ecommerce:moncompte.html.twig", 6)->display($context);
        // line 7
        echo "        
        <div class=\"span9\">
            <h2>Mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Modifier mes informations</h4>
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
                            <button class=\"btn btn-primary\">Modifier</button>
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
        return "EcommerceEcommerceBundle:Ecommerce:moncompte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 7,  40 => 6,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:moncompte.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/moncompte.html.twig");
    }
}
