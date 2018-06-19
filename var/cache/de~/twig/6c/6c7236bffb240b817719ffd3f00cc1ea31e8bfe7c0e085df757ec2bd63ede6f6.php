<?php

/* EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig */
class __TwigTemplate_2dbd049bf97cf5cd14ea31ec06848da894fb50a193184b8163ef4c80d8a9ced9 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig", 1);
        $this->blocks = array(
            'motscles' => array($this, 'block_motscles'),
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_motscles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motscles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motscles"));

        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 3, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marepo"]) {
            // line 4
            echo "\t     ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marepo"], "nom", array()), "html", null, true);
            echo " 
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marepo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["marepo"]) {
            // line 12
            echo "\t    ";
            // line 13
            echo "
\t\t\t";
            // line 14
            if ((isset($context["mapage"]) || array_key_exists("mapage", $context) ? $context["mapage"] : (function () { throw new Twig_Error_Runtime('Variable "mapage" does not exist.', 14, $this->source); })())) {
                // line 15
                echo "\t\t\t    ";
                if ((twig_get_attribute($this->env, $this->source, $context["marepo"], "disponible", array()) == 1)) {
                    // line 16
                    echo "\t\t\t            <ul class=\"thumbnails\">
\t\t\t                ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 17, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                        // line 18
                        echo "\t\t\t                    <li class=\"span3\">
\t\t\t                        <div class=\"thumbnail\">
\t\t\t                      ";
                        // line 21
                        echo "\t\t\t                  <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["marepo"], "image", array()), "AssetPath", array()), "index_thumb"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["marepo"], "image", array()), "name", array()), "html", null, true);
                        echo "\" width=\"300\" height=\"200\" >
\t\t\t                            <div class=\"caption\">
\t\t\t                                <h4>";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marepo"], "nom", array()), "html", null, true);
                        echo "</h4>
\t\t\t                                <p>";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marepo"], "prix", array()), "html", null, true);
                        echo " €</p>
\t\t\t                                <a class=\"btn btn-primary\" href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["marepo"], "id", array()))), "html", null, true);
                        echo "\">Plus d'infos</a>
\t\t\t                                <a class=\"btn btn-success\" href=\"";
                        // line 26
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_panier", array("id" => twig_get_attribute($this->env, $this->source, $context["marepo"], "id", array()))), "html", null, true);
                        echo "\">Ajouter au panier</a>
\t\t\t                            </div>
\t\t\t                        </div>
\t\t\t                    </li>
\t\t\t                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "\t\t\t            </ul>

\t\t\t    ";
                }
                // line 34
                echo "

            ";
            }
            // line 37
            echo "


\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marepo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t   

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 42,  155 => 37,  150 => 34,  145 => 31,  134 => 26,  130 => 25,  126 => 24,  122 => 23,  114 => 21,  110 => 18,  106 => 17,  103 => 16,  100 => 15,  98 => 14,  95 => 13,  93 => 12,  89 => 11,  85 => 9,  76 => 8,  59 => 4,  54 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block motscles %}
\t{% for marepo in cat %}
\t     {{marepo.nom}} 
\t{% endfor %}
{% endblock %}

{%block body%}


\t{% for marepo in cat %}
\t    {# dump(marepo) #}

\t\t\t{% if mapage %}
\t\t\t    {% if marepo.disponible == 1 %}
\t\t\t            <ul class=\"thumbnails\">
\t\t\t                {% for index in cat %}
\t\t\t                    <li class=\"span3\">
\t\t\t                        <div class=\"thumbnail\">
\t\t\t                      {#      <img src=\"{{marepo.image.path}} \" alt=\"DevAndClick\" width=\"300\" height=\"300\" > #}
\t\t\t                  <img src=\"{{ marepo.image.AssetPath|imagine_filter('index_thumb') }}\" alt=\"{{marepo.image.name  }}\" width=\"300\" height=\"200\" >
\t\t\t                            <div class=\"caption\">
\t\t\t                                <h4>{{marepo.nom}}</h4>
\t\t\t                                <p>{{marepo.prix}} €</p>
\t\t\t                                <a class=\"btn btn-primary\" href=\"{{path('ecommerce_produit', {'id' : marepo.id})}}\">Plus d'infos</a>
\t\t\t                                <a class=\"btn btn-success\" href=\"{{path('ecommerce_panier', {'id' : marepo.id})}}\">Ajouter au panier</a>
\t\t\t                            </div>
\t\t\t                        </div>
\t\t\t                    </li>
\t\t\t                {% endfor %}
\t\t\t            </ul>

\t\t\t    {% endif %}


            {% endif %}



\t
\t{% endfor %}

\t   

{% endblock %}", "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/recherchetraitement.html.twig");
    }
}
