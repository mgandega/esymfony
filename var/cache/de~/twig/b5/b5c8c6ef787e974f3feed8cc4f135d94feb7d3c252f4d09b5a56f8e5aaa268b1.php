<?php

/* EcommerceEcommerceBundle:Ecommerce:index.html.twig */
class __TwigTemplate_6050edb166d1eddfd35d99d0a6bccb173ac8b916dfca7a4120ee230e39760836 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  ";
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "mysuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"alert alert-success\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span3\" style=\"margin-right: 20px;\">

            ";
        // line 14
        echo twig_include($this->env, $context, "::navigation.html.twig");
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Ecommerce:menu"));
        echo "
        </div>


        <div class=\"span8\">

            <ul class=\"thumbnails\">

                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new Twig_Error_Runtime('Variable "ind" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 24
            echo "
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                     ";
            // line 28
            echo "                    
                    ";
            // line 30
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["index"], "image", array()), "AssetPath", array()), "index_thumb"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["index"], "image", array()), "name", array()), "html", null, true);
            echo "\" width=\"300\" height=\"200\" > 
                            <div class=\"caption\">
                                <h4>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "nom", array()), "html", null, true);
            echo "</h4>
                                 <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension']->priceFilter(twig_get_attribute($this->env, $this->source, $context["index"], "prix", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["index"], "tva", array()), "multiplicate", array())), "html", null, true);
            echo " €</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["index"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                    ";
            // line 35
            if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, $context["index"], "id", array()), array(), "array", true, true)) {
                // line 36
                echo "                                <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, $context["index"], "id", array()))), "html", null, true);
                echo "\">Ajouter au panier</a>
                    ";
            } else {
                // line 38
                echo "                                <nav class=\"btn btn-danger\"> deja au panier</nav>
                    ";
            }
            // line 40
            echo "
                        
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </ul>

        </div>

        <div class=\"navigation\" style=\"text-align: center\">
            ";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["ind"]) || array_key_exists("ind", $context) ? $context["ind"] : (function () { throw new Twig_Error_Runtime('Variable "ind" does not exist.', 51, $this->source); })()));
        echo "
        </div>
       ";
        // line 65
        echo "    </div>



</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 65,  155 => 51,  148 => 46,  137 => 40,  133 => 38,  127 => 36,  125 => 35,  121 => 34,  117 => 33,  113 => 32,  105 => 30,  102 => 28,  97 => 24,  93 => 23,  82 => 15,  78 => 14,  72 => 10,  63 => 7,  60 => 6,  55 => 5,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"::base.html.twig\" %}

{%block body%}
  {#  {{ 'Bonjour tout le monde'|trans }} #}
    {% for flashMessage in app.session.flashbag.get('mysuccess') %}
        <div class=\"alert alert-success\">
            {{ flashMessage }}
        </div>
    {% endfor %}
<div class=\"container\">
    <div class=\"row\">
        <div class=\"span3\" style=\"margin-right: 20px;\">

            {{   include(\"::navigation.html.twig\") }}
            {{   render(controller(\"EcommerceEcommerceBundle:Ecommerce:menu\")) }}
        </div>


        <div class=\"span8\">

            <ul class=\"thumbnails\">

                {% for index in ind %}

                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                     {#     <img src=\"{{asset('uploads/' ~ index.image.path) }}\" alt=\"Omega Vision\" width=\"300\" height=\"300\" > #}
                    
                    {# ici on a pas besoin de faire un asset() car le filtre le gere tout seul #}
                            <img src=\"{{ index.image.AssetPath|imagine_filter('index_thumb') }}\" alt=\"{{index.image.name  }}\" width=\"300\" height=\"200\" > 
                            <div class=\"caption\">
                                <h4>{{index.nom}}</h4>
                                 <p>{{index.prix|price(index.tva.multiplicate)}} €</p>
                                <a class=\"btn btn-primary\" href=\"{{path('ecommerce_produit', {'id' : index.id})}}\">Plus d'infos</a>
                    {% if panier[index.id] is not defined %}
                                <a class=\"btn btn-success\" href=\"{{path('ecommerce_ajouter',  {'id' : index.id})}}\">Ajouter au panier</a>
                    {% else %}
                                <nav class=\"btn btn-danger\"> deja au panier</nav>
                    {% endif %}

                        
                            </div>
                        </div>
                    </li>
                {% endfor %}
            </ul>

        </div>

        <div class=\"navigation\" style=\"text-align: center\">
            {{ knp_pagination_render(ind) }}
        </div>
       {#     <div class=\"pagination\">
                <ul>
                    <li class=\"disabled\"><span>Précédent</span></li>
                    <li class=\"disabled\"><span>1</span></li>
                    <li><a href=\"#\">2</a></li>
                    <li><a href=\"#\">3</a></li>
                    <li><a href=\"#\">4</a></li>
                    <li><a href=\"#\">5</a></li>
                    <li><a href=\"#\">Suivant</a></li>
                </ul>
        </div>
#}
    </div>



</div>
{%endblock%}", "EcommerceEcommerceBundle:Ecommerce:index.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/index.html.twig");
    }
}
