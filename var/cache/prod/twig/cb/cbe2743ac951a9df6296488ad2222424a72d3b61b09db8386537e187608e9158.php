<?php

/* ::navigation.html.twig */
class __TwigTemplate_7af91e22a9214afbfe670eeab2e054070ad272b9c0f7160a995564a990fbf4bc extends Twig_Template
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
 ";
        // line 19
        echo "


";
        // line 22
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 23
            echo "    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
            // line 26
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_show");
            echo "\">Mes informations</a>
            </li>
            <li>
                <a href=\"";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_profile_edit");
            echo "\">Editer mes informations</a>
            </li>
            <li>
                <a href=\"";
            // line 32
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_change_password");
            echo "\">Changer mon mot de passe</a>
            </li>
            <li>
                <a href=\"";
            // line 35
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_facture");
            echo "\">Mes factures</a>
            </li>

            <li>
                <a href=\"";
            // line 39
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_logout");
            echo "\">Se deconnecter</a>
            </li>

        </ul>
    </div>


";
        } else {
            // line 47
            echo "
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_login");
            echo "\">Se connecter</a>
            </li>
            <li>
                <a href=\"";
            // line 54
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
            echo "\">S'inscrire</a>
            </li>
        </ul>
    </div>
";
        }
        // line 59
        echo "
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            <li class=\"active\">
            ";
        // line 64
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Ecommerce:categories"));
        echo "
            </li>
      ";
        // line 74
        echo "        </ul>
    </div>
</div>

 




";
    }

    public function getTemplateName()
    {
        return "::navigation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 74,  101 => 64,  94 => 59,  86 => 54,  80 => 51,  74 => 47,  63 => 39,  56 => 35,  50 => 32,  44 => 29,  38 => 26,  33 => 23,  31 => 22,  26 => 19,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::navigation.html.twig", "/var/www/html/esymfony/app/Resources/views/navigation.html.twig");
    }
}
