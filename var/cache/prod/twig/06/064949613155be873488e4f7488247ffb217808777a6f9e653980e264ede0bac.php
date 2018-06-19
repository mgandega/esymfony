<?php

/* EcommerceEcommerceBundle:Ecommerce:menu.html.twig */
class __TwigTemplate_4388d646698a9bacf77446114d6e98e5f7e3a3ba69886e502a122a9930bcdef1 extends Twig_Template
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
            echo twig_escape_filter($this->env, twig_var_dump($this->env, $context, (isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new Twig_Error_Runtime('Variable "articles" does not exist.', 11, $this->source); })())), "html", null, true);
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
        return array (  60 => 17,  55 => 15,  52 => 14,  45 => 11,  43 => 10,  39 => 8,  37 => 7,  33 => 6,  26 => 1,);
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
