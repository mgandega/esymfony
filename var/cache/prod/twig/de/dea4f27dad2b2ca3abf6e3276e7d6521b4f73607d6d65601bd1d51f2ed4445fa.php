<?php

/* ::navigation.html.twig */
class __TwigTemplate_2594bef6803f8b82558719642c8b0ca49112146df66610276866e2e6c2e9219f extends Twig_Template
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
        return array (  109 => 74,  104 => 64,  97 => 59,  89 => 54,  83 => 51,  77 => 47,  66 => 39,  59 => 35,  53 => 32,  47 => 29,  41 => 26,  36 => 23,  34 => 22,  29 => 19,  26 => 1,);
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
