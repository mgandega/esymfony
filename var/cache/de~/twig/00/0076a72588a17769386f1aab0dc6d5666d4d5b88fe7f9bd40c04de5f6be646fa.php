<?php

/* EcommerceEcommerceBundle:Commandes:index.html.twig */
class __TwigTemplate_3b9e4dfa34bef0aac250dcca5468a43f5c08f0a6d0a86ab31d5cf6c6479682be extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EcommerceEcommerceBundle:Commandes:index.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Commandes:index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Commandes:index.html.twig"));

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

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-7 col-lg-offset-4\" > <h1>Liste des Commandes</h1></div>
    </div>

    <div class=\"row\">

        ";
        // line 13
        $this->loadTemplate("::menuAdmin.html.twig", "EcommerceEcommerceBundle:Commandes:index.html.twig", 13)->display($context);
        // line 14
        echo "
        <div class=\"col-lg-9\">


            <table class=\"table table-striped table-hover\">
        <thead>
            <tr  >
                <th>Date</th>
                <th>Reference</th>
                <th>Client</th>
                <th>Action</th>
             ";
        // line 26
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) || array_key_exists("commandes", $context) ? $context["commandes"] : (function () { throw new Twig_Error_Runtime('Variable "commandes" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 30
            echo "
            <tr>
       ";
            // line 33
            echo "                <td>";
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "reference", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "utilisateur", array()), "username", array())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "utilisateur", array()), "username", array()), "html", null, true);
            }
            echo "</td>

         ";
            // line 38
            echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_facturesPDF", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

        </div>
    </div>
</div>



";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 48,  115 => 41,  110 => 38,  103 => 35,  99 => 34,  92 => 33,  88 => 30,  84 => 29,  79 => 26,  66 => 14,  64 => 13,  53 => 4,  44 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block body %}


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-7 col-lg-offset-4\" > <h1>Liste des Commandes</h1></div>
    </div>

    <div class=\"row\">

        {%  include \"::menuAdmin.html.twig\" %}

        <div class=\"col-lg-9\">


            <table class=\"table table-striped table-hover\">
        <thead>
            <tr  >
                <th>Date</th>
                <th>Reference</th>
                <th>Client</th>
                <th>Action</th>
             {#   <th>Commande</th> #}
            </tr>
        </thead>
        <tbody>
        {% for commande in commandes %}

            <tr>
       {#         <td><a href=\"{{ path('admin_commandes_show', { 'id': commande.id }) }}\">{{ commande.id }}</a></td> #}
                <td>{% if commande.date %}{{ commande.date|date('Y-m-d H:i:s') }}{% endif %}</td>
                <td>{{ commande.reference }}</td>
                <td> {% if commande.utilisateur.username %}{{ commande.utilisateur.username }}{% endif %}</td>

         {#     <td>{% if commande.commande %}{{ commande.commande|join(', ') }}{% endif %}</td> #}
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('ecommerce_facturesPDF', {'id': commande.id}) }}\">show</a>
                        </li>

                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

        </div>
    </div>
</div>



{% endblock %}", "EcommerceEcommerceBundle:Commandes:index.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Commandes/index.html.twig");
    }
}
