<?php

/* EcommerceEcommerceBundle:Ecommerce:nouveaumotdepasse.html.twig */
class __TwigTemplate_08886e10979ca1ad497e7c4a9a8a4f573d068a045b2f942ba8e5877c149aa0e7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:nouveaumotdepasse.html.twig", 1);
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
                        <h4>Récupération du mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, votre mot de passe sera alors réinitialiser.<br /><br />
                            Une fois validé, vous devrez utiliser le nouveau mot de passe que vous avez défini.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"nouveau-mot-de-passe.php\">
                            <label>Nouveau mot de passe</label>
                            <input type=\"password\">
                            <label>Confirmer</label>
                            <input type=\"password\">
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
        return "EcommerceEcommerceBundle:Ecommerce:nouveaumotdepasse.html.twig";
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
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:nouveaumotdepasse.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/nouveaumotdepasse.html.twig");
    }
}
