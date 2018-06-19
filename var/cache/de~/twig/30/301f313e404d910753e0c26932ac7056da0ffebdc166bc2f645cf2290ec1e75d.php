<?php

/* :produits:index.html.twig */
class __TwigTemplate_99ac0f2618950b5faafff99c64186884a064855658b7d88a75d8aef71dee181d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":produits:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":produits:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":produits:index.html.twig"));

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
        echo "
    \t<div class=\"container\">
\t\t<div class=\"row\">
  <div class=\"span3\">
                      <div class=\"well\">
\t\t            <ul class=\"nav nav-list\">
\t\t                <li class=\"nav-header\">Nos produits</li>
\t\t                <li class=\"active\">
\t\t                     ";
        // line 12
        $this->loadTemplate("::menuAdmin.html.twig", ":produits:index.html.twig", 12)->display($context);
        // line 13
        echo "\t\t                </li>
\t\t                ";
        // line 22
        echo "\t\t            </ul>
           \t      </div>
   </div>

<div class=\"span9\">

        <div> <h1>liste des Produits</h1></div>




            <table class=\"table table-striped table-hover\">


        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 49, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 50
            echo "            <tr>
                <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "disponible", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>

\t\t    <ul>
\t\t        <li>
\t\t            <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_new");
        echo "\">Create a new produit</a>
\t\t        </li>
\t\t    </ul>
          </div>
     </div>
     </div>
     </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return ":produits:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 75,  163 => 70,  151 => 64,  145 => 61,  134 => 57,  128 => 56,  122 => 55,  118 => 54,  114 => 53,  110 => 52,  104 => 51,  101 => 50,  97 => 49,  68 => 22,  65 => 13,  63 => 12,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %} 

{% block body %}

    \t<div class=\"container\">
\t\t<div class=\"row\">
  <div class=\"span3\">
                      <div class=\"well\">
\t\t            <ul class=\"nav nav-list\">
\t\t                <li class=\"nav-header\">Nos produits</li>
\t\t                <li class=\"active\">
\t\t                     {%  include \"::menuAdmin.html.twig\" %}
\t\t                </li>
\t\t                {#
\t\t                      <li class=\"active\">
\t\t                          <a href=\"index.php\">Legumes</a>
\t\t                      </li>
\t\t                      <li>
\t\t                          <a href=\"index.php\">Fruits</a>
\t\t                      </li>
\t\t                  #}
\t\t            </ul>
           \t      </div>
   </div>

<div class=\"span9\">

        <div> <h1>liste des Produits</h1></div>




            <table class=\"table table-striped table-hover\">


        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for produit in produits %}
            <tr>
                <td><a href=\"{{ path('admin_produits_show', { 'id': produit.id }) }}\">{{ produit.id }}</a></td>
                <td>{{ produit.nom }}</td>
                <td>{{ produit.description }}</td>
                <td>{{ produit.prix }}</td>
                <td>{% if produit.created %}{{ produit.created|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if produit.updated %}{{ produit.updated|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{% if produit.disponible %}Yes{% else %}No{% endif %}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('admin_produits_show', { 'id': produit.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('admin_produits_edit', { 'id': produit.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

\t\t    <ul>
\t\t        <li>
\t\t            <a href=\"{{ path('admin_produits_new') }}\">Create a new produit</a>
\t\t        </li>
\t\t    </ul>
          </div>
     </div>
     </div>
     </div>
{% endblock %}", ":produits:index.html.twig", "/var/www/html/esymfony/app/Resources/views/produits/index.html.twig");
    }
}
