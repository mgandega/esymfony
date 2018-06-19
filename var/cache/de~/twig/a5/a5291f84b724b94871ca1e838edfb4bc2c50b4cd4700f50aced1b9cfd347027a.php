<?php

/* EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig */
class __TwigTemplate_4d4e3e66bbd36f8e8426af3764c495f4f55a12d76d5eb21bbe8b6d3dc609508a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
       ";
        // line 5
        $this->loadTemplate("::navigation.html.twig", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig", 5)->display($context);
        echo " 
          <div class=\"span9\">

           <ul class=\"thumbnails\">

\t           ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 10, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 11
            echo "\t                <li >
\t                    <div class=\"thumbnail\">
\t                    ";
            // line 14
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categ"], "image", array()), "path", array()))), "html", null, true);
            echo "\" alt=\"Omega Vision\" width=\"300\" height=\"300\" >
\t                        <div class=\"caption\">
\t                            <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categ"], "nom", array()), "html", null, true);
            echo "</h4>
\t                            <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categ"], "prix", array()), "html", null, true);
            echo "</p>
                                ";
            // line 22
            echo "                                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["categ"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                ";
            // line 23
            if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, $context["categ"], "id", array()), array(), "array", true, true)) {
                // line 24
                echo "                                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, $context["categ"], "id", array()))), "html", null, true);
                echo "\">Ajouter au panier</a>
                                ";
            } else {
                // line 26
                echo "                                    <nav class=\"btn btn-danger\"> deja au panier</nav>
                                ";
            }
            // line 28
            echo "\t                        </div>
\t                    </div>
\t                </li>
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul> 
          </div>

        <div class=\"navigation\" style=\"text-align: center\">
            ";
        // line 36
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, (isset($context["cat"]) || array_key_exists("cat", $context) ? $context["cat"] : (function () { throw new Twig_Error_Runtime('Variable "cat" does not exist.', 36, $this->source); })()));
        echo "
        </div>
";
        // line 53
        echo "    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 53,  119 => 36,  113 => 32,  104 => 28,  100 => 26,  94 => 24,  92 => 23,  87 => 22,  83 => 17,  79 => 16,  73 => 14,  69 => 11,  65 => 10,  57 => 5,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{%extends \"::base.html.twig\" %}
{%block body%}
<div class=\"container\">
    <div class=\"row\">
       {% include \"::navigation.html.twig\" %} 
          <div class=\"span9\">

           <ul class=\"thumbnails\">

\t           {% for categ in cat %}
\t                <li >
\t                    <div class=\"thumbnail\">
\t                    {#   <img src=\" {{categ.image.path}} \" alt=\"{{categ.image.alt}}\" width=\"250\" height=\"250\" /> #}
                            <img src=\"{{asset('uploads/' ~ categ.image.path) }}\" alt=\"Omega Vision\" width=\"300\" height=\"300\" >
\t                        <div class=\"caption\">
\t                            <h4>{{categ.nom}}</h4>
\t                            <p>{{categ.prix}}</p>
                                {#
\t                            <a class=\"btn btn-primary\" href=\"{{path('ecommerce_produit', {'id' : categ.id})}}\">Plus d'infos</a>
\t                            <a class=\"btn btn-success\" href=\"{{path('ecommerce_panier')}}\">Ajouter au panier</a>
                                #}
                                <a class=\"btn btn-primary\" href=\"{{path('ecommerce_produit', {'id' : categ.id})}}\">Plus d'infos</a>
                                {% if panier[categ.id] is not defined %}
                                    <a class=\"btn btn-success\" href=\"{{path('ecommerce_ajouter',  {'id' : categ.id})}}\">Ajouter au panier</a>
                                {% else %}
                                    <nav class=\"btn btn-danger\"> deja au panier</nav>
                                {% endif %}
\t                        </div>
\t                    </div>
\t                </li>
\t            {% endfor %}
            </ul> 
          </div>

        <div class=\"navigation\" style=\"text-align: center\">
            {{ knp_pagination_render(cat) }}
        </div>
{#
            <div class=\"pagination\">
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
{%endblock%}", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/mescategories.html.twig");
    }
}
