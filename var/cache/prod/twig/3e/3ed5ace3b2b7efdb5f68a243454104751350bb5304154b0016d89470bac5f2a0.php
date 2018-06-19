<?php

/* ::col-left-co.html.twig */
class __TwigTemplate_8c0d2d6f40ff964c734376ce16708b2669d796b8173ed391669508095d273dcb extends Twig_Template
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
        echo "<div class=\"span3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
        echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
        echo "\">Modifier mon profil</a>
            </li>
             <li>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
        echo "\">Changer de mot de passe</a>
            </li>
            <li>
                <a href=\"facture.php\">Mes factures</a>
            </li>
            <li>
               <a href=\"adresses.php\">Mes adresses</a>
            </li>
        </ul>
    </div>
    
</div>";
    }

    public function getTemplateName()
    {
        return "::col-left-co.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 12,  36 => 9,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::col-left-co.html.twig", "/var/www/html/esymfony/app/Resources/views/col-left-co.html.twig");
    }
}
