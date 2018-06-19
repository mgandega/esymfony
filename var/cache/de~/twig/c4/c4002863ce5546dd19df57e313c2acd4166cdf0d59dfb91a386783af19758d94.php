<?php

/* EcommerceEcommerceBundle:Ecommerce:produit.html.twig */
class __TwigTemplate_fea497a9f4833b5879fb6ca60abdd8850ff90184f982e549d0958a30939e7738 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:produit.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:produit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:produit.html.twig"));

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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 2, $this->source); })()), "nom", array()), "html", null, true);
        echo " ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
            <?php include '../layout/col-left.php'; ?>
\t\t\t
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span5\">
\t\t\t\t";
        // line 13
        echo "
\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 14, $this->source); })()), "image", array()), "AssetPath", array()), "produits_thumb"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 14, $this->source); })()), "image", array()), "name", array()))), "html", null, true);
        echo "\" width=\"470\" height=\"310\">
\t\t\t\t\t</div>
    ";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 16, $this->source); })()), "id", array()), array(), "array", true, true)) {
            // line 17
            echo "\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h4>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 18, $this->source); })()), "nom", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 19, $this->source); })()), "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<h4>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 20, $this->source); })()), "prix", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<form action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, (isset($context["rep"]) || array_key_exists("rep", $context) ? $context["rep"] : (function () { throw new Twig_Error_Runtime('Variable "rep" does not exist.', 21, $this->source); })()), "id", array()))), "html", null, true);
            echo "\" method=\"get\"> 
\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<select name=\"qte\" class=\"span1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 26
                echo "\t\t\t\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 27
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t </option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "

\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter au panier</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t
";
            // line 47
            echo "\t
\t\t\t\t\t</div>
         ";
        } else {
            // line 50
            echo "\t            \t<nav class=\"btn btn-danger\"> Le produit est deja au panier</nav>
\t\t<a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_homepage");
            echo "\">Retourner aux produits</a>
\t";
        }
        // line 53
        echo "
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 53,  155 => 51,  152 => 50,  147 => 47,  136 => 30,  127 => 27,  122 => 26,  118 => 25,  111 => 21,  107 => 20,  103 => 19,  99 => 18,  96 => 17,  94 => 16,  87 => 14,  84 => 13,  74 => 4,  65 => 3,  45 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
 {% block motscles %} {{rep.nom}} {% endblock %} 
{%block body%}

\t<div class=\"container\">
\t\t<div class=\"row\">
            <?php include '../layout/col-left.php'; ?>
\t\t\t
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span5\">
\t\t\t\t{#\t\t<img src=\"{{asset('uploads/' ~ rep.image.path) }}\" alt=\"DevAndClick\" width=\"270\" height=\"310\"> #}

\t\t\t\t\t\t<img src=\"{{ rep.image.AssetPath|imagine_filter('produits_thumb') }}\" alt=\"{{asset('uploads/' ~ rep.image.name) }}\" width=\"470\" height=\"310\">
\t\t\t\t\t</div>
    {% if panier[rep.id] is not defined %}
\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h4>{{rep.nom}}</h4>
\t\t\t\t\t\t\t\t\t<p>{{rep.description}}</p>
\t\t\t\t\t\t<h4>{{rep.prix}}</h4>
\t\t\t\t\t\t\t<form action=\"{{path('ecommerce_ajouter',  {'id' : rep.id} )}}\" method=\"get\"> 
\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<select name=\"qte\" class=\"span1\">
\t\t\t\t\t\t\t\t\t\t{% for i in 1..10 %}
\t\t\t\t\t\t\t\t\t\t\t <option value=\"{{i}}\">
\t\t\t\t\t\t\t\t\t\t\t\t {{i}}
\t\t\t\t\t\t\t\t\t\t\t </option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}


\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter au panier</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t
{#\t\t\t\t\t\t
\t\t\t\t\t\t

\t\t\t\t\t\t<form method=\"POST\" action=\"produit.html.twig\">

\t\t\t\t\t\t      {{form(formulaire)}}
\t\t\t\t\t\t
\t\t\t\t\t\t</form>
#}\t
\t\t\t\t\t</div>
         {% else %}
\t            \t<nav class=\"btn btn-danger\"> Le produit est deja au panier</nav>
\t\t<a href=\"{{ path('ecommerce_homepage') }}\">Retourner aux produits</a>
\t{% endif %}

\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
{%endblock%}", "EcommerceEcommerceBundle:Ecommerce:produit.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/produit.html.twig");
    }
}
