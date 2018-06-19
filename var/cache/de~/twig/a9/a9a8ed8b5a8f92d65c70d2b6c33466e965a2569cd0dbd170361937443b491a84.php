<?php

/* ::navigation.html.twig */
class __TwigTemplate_80bea0725bb6878101ec879d7d9606f62be5a4f0c1adbf9ffe12d2ccf6899951 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::navigation.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  112 => 74,  107 => 64,  100 => 59,  92 => 54,  86 => 51,  80 => 47,  69 => 39,  62 => 35,  56 => 32,  50 => 29,  44 => 26,  39 => 23,  37 => 22,  32 => 19,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">
 {#
    <div class=\"well\">
        <div class=\"dropdown\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                <i class=\"icon-shopping-cart\"></i>
                3 item - 54,27 €
                <b class=\"caret\"></b></a>
            </a>
            <div class=\"dropdown-menu well\" role=\"menu\" aria-labelledby=\"dLabel\">
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <p>Item x 1 <span class=\"pull-right\">18,09 €</span></p>
                <a href=\"panier.php\" class=\"btn btn-primary\">Mon Panier</a>
            </div>
        </div>
    </div>
#}



{% if is_granted('IS_AUTHENTICATED_FULLY') %}
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{ path('fos_user_profile_show') }}\">Mes informations</a>
            </li>
            <li>
                <a href=\"{{ path('fos_user_profile_edit') }}\">Editer mes informations</a>
            </li>
            <li>
                <a href=\"{{ path('fos_user_change_password') }}\">Changer mon mot de passe</a>
            </li>
            <li>
                <a href=\"{{path('ecommerce_facture')}}\">Mes factures</a>
            </li>

            <li>
                <a href=\"{{path('fos_user_security_logout')}}\">Se deconnecter</a>
            </li>

        </ul>
    </div>


{% else %}

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{path('fos_user_security_login')}}\">Se connecter</a>
            </li>
            <li>
                <a href=\"{{path('fos_user_registration_register')}}\">S'inscrire</a>
            </li>
        </ul>
    </div>
{% endif %}

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Nos produits</li>
            <li class=\"active\">
            {{render(controller('EcommerceEcommerceBundle:Ecommerce:categories'))}}
            </li>
      {#
            <li class=\"active\">
                <a href=\"index.php\">Légumes</a>
            </li>
            <li>
                <a href=\"index.php\">Fruits</a>
            </li>
        #}
        </ul>
    </div>
</div>

 




", "::navigation.html.twig", "/var/www/html/esymfony/app/Resources/views/navigation.html.twig");
    }
}
