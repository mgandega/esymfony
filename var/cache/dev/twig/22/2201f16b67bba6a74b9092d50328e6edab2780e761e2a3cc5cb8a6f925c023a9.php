<?php

/* EcommerceEcommerceBundle:Ecommerce:menu.html.twig */
class __TwigTemplate_f7c42faf70f718caa87e9b9e33c9417e5f0c3fa76b5b4e88abada2e0e61f7e02 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:menu.html.twig"));

        // line 1
        echo "<div class=\"span3\">
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Panier</li>
            <li>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_panier");
        echo "\">
                    ";
        // line 7
        if (((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 7, $this->source); })()) == 0)) {
            // line 8
            echo "
                        Aucun article dans votre panier
                    ";
        } elseif ((        // line 10
(isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 10, $this->source); })()) == 1)) {
            // line 11
            echo "                        ";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\DumpExtension']->dump($this->env, $context, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 11, $this->source); })()));
            echo "
                        1 article dans votre panier
                    ";
        } else {
            // line 14
            echo "
                        ";
            // line 15
            echo twig_escape_filter($this->env, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 15, $this->source); })()), "html", null, true);
            echo " articles dans votre panier
                    ";
        }
        // line 17
        echo "                </a>
            </li>
        </ul>
    </div>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 17,  58 => 15,  55 => 14,  48 => 11,  46 => 10,  42 => 8,  40 => 7,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"span3\">
    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li class=\"nav-header\">Panier</li>
            <li>
                <a href=\"{{ path('ecommerce_panier') }}\">
                    {% if articles == 0 %}

                        Aucun article dans votre panier
                    {% elseif articles == 1 %}
                        {{ dump(articles) }}
                        1 article dans votre panier
                    {% else %}

                        {{ articles }} articles dans votre panier
                    {% endif %}
                </a>
            </li>
        </ul>
    </div>
</div>
", "EcommerceEcommerceBundle:Ecommerce:menu.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/menu.html.twig");
    }
}
