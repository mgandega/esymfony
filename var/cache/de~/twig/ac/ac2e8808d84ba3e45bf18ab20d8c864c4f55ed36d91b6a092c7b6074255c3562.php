<?php

/* EcommerceEcommerceBundle:Ecommerce:panier.html.twig */
class __TwigTemplate_1c0f8d653e10cecfbacda51049267751603ffa25ca70d2acefbd7bd3fd03db1b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:panier.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:panier.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:panier.html.twig"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monpanier"]) || array_key_exists("monpanier", $context) ? $context["monpanier"] : (function () { throw new Twig_Error_Runtime('Variable "monpanier" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["monp"]) {
            // line 7
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 7, $this->source); })()), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 11
        echo "
    \t<div class=\"container\">
\t\t<div class=\"row\">
            <div class=\"span3\">
           <div class=\"well\">
            <ul class=\"nav nav-list\">
                <li class=\"nav-header\">Nos produits</li>
                <li class=\"active\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Ecommerce:categories"));
        echo "
                </li>
                ";
        // line 29
        echo "            </ul>
           </div>
            </div>

\t\t\t\t<div class=\"span9\">
                    ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 34, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 35
            echo "                        <div class=\"alert alert-success\">
                        ";
            // line 36
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 40, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "notification"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 41
            echo "                        <div class=\"alert alert-success\">
                            ";
            // line 42
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "
                    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 46, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "ajout"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 47
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 48
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "

                    <h2>Votre parnier</h2>

                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>

";
        // line 66
        if ((twig_length_filter($this->env, (isset($context["monpanier"]) || array_key_exists("monpanier", $context) ? $context["monpanier"] : (function () { throw new Twig_Error_Runtime('Variable "monpanier" does not exist.', 66, $this->source); })())) == 0)) {
            echo " ";
            // line 67
            echo "                            <tr>
                                <td colspan=\"4\" style=\"text-align:center\">Aucun articles dans votre panier</td>
                            </tr>

";
        }
        // line 72
        echo "
                                                    ";
        // line 74
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["monpanier"]) || array_key_exists("monpanier", $context) ? $context["monpanier"] : (function () { throw new Twig_Error_Runtime('Variable "monpanier" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["monp"]) {
            // line 75
            echo "
                                <tr>

                                    <form action=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, $context["monp"], "id", array()))), "html", null, true);
            echo "\" method=\"get\" >
                                            <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monp"], "nom", array()), "html", null, true);
            echo "</td>
                                            <td>
                                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\" >
                                                    ";
            // line 82
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 83
                echo "                                                        <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\" ";
                if (($context["i"] == twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 83, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["monp"], "id", array()), array(), "array"))) {
                    echo "  selected = \"selected\"  ";
                }
                echo " >
                                                            ";
                // line 84
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
                                                        </option>
                                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 87
            echo "
                                                </select>&nbsp;
                                                <a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_supprimer", array("id" => twig_get_attribute($this->env, $this->source, $context["monp"], "id", array()))), "html", null, true);
            echo " \"><i class=\"icon-trash\"></i></a>

                                            </td>
                                            <td> ";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()), "html", null, true);
            echo " </td>
                                            <td> ";
            // line 93
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 93, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["monp"], "id", array()), array(), "array")), "html", null, true);
            echo " </td>

                                    </form>
                                </tr>
                            ";
            // line 97
            $context["totalHT"] = ((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 97, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 97, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["monp"], "id", array()), array(), "array")));
            // line 98
            echo "                            ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 98, $this->source); })()) + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension']->priceFilter((twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 98, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["monp"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "multiplicate", array())));
            // line 99
            echo "                            ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 99, $this->source); })()), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "valeur", array())) => $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension']->montantTva((twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 99, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["monp"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "multiplicate", array()))));
            // line 100
            echo "
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 102
        echo "
                        </tbody>
                    </table>
    ";
        // line 105
        if ((twig_length_filter($this->env, (isset($context["monpanier"]) || array_key_exists("monpanier", $context) ? $context["monpanier"] : (function () { throw new Twig_Error_Runtime('Variable "monpanier" does not exist.', 105, $this->source); })())) != 0)) {
            // line 106
            echo "
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
            // line 108
            echo twig_escape_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 108, $this->source); })()), "html", null, true);
            echo " €</dd>

                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
                // line 111
                echo "                    <dt>TVA ";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo " :</dt><dd>";
                echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
                echo " €</dd>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "
                <dt>Total TTC :</dt><dd>";
            // line 114
            echo twig_escape_filter($this->env, (isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 114, $this->source); })()), "html", null, true);
            echo " €</dd>
            </dl>
            <div class=\"clearfix\"></div>

                <a href=\"";
            // line 118
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_livraison");
            echo "\" class=\"btn btn-success pull-right\">Valider mon panier</a>
    ";
        }
        // line 120
        echo "                <a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_homepage");
        echo "\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:panier.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 120,  295 => 118,  288 => 114,  285 => 113,  274 => 111,  270 => 110,  265 => 108,  261 => 106,  259 => 105,  254 => 102,  247 => 100,  244 => 99,  241 => 98,  239 => 97,  232 => 93,  228 => 92,  222 => 89,  218 => 87,  209 => 84,  200 => 83,  196 => 82,  190 => 79,  186 => 78,  181 => 75,  176 => 74,  173 => 72,  166 => 67,  163 => 66,  146 => 51,  137 => 48,  134 => 47,  130 => 46,  127 => 45,  118 => 42,  115 => 41,  111 => 40,  108 => 39,  99 => 36,  96 => 35,  92 => 34,  85 => 29,  80 => 19,  70 => 11,  61 => 10,  51 => 1,  45 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% set totalHT = 0 %}
{% set totalTTC = 0 %}
{% set refTva = {} %}
{% for monp in monpanier %}
    {% set refTva = refTva|merge({('%' ~ monp.tva.valeur) : 0}) %} {# on a concatene avec ~ ('%' avec monp.tva.valeur) #}
{% endfor %}

{%block body%}

    \t<div class=\"container\">
\t\t<div class=\"row\">
            <div class=\"span3\">
           <div class=\"well\">
            <ul class=\"nav nav-list\">
                <li class=\"nav-header\">Nos produits</li>
                <li class=\"active\">
                    {{render(controller('EcommerceEcommerceBundle:Ecommerce:categories'))}}
                </li>
                {#
                      <li class=\"active\">
                          <a href=\"index.php\">LÃ©gumes</a>
                      </li>
                      <li>
                          <a href=\"index.php\">Fruits</a>
                      </li>
                  #}
            </ul>
           </div>
            </div>

\t\t\t\t<div class=\"span9\">
                    {% for flashMessage in app.session.flashbag.get('succes') %}
                        <div class=\"alert alert-success\">
                        {{ flashMessage }}
                        </div>
                    {% endfor %}

                    {% for flashMessage in app.session.flashbag.get('notification') %}
                        <div class=\"alert alert-success\">
                            {{ flashMessage }}
                        </div>
                    {% endfor %}

                    {% for flashMessage in app.session.flashbag.get('ajout') %}
                    <div class=\"alert alert-success\">
                        {{ flashMessage }}
                    </div>
                    {% endfor %}


                    <h2>Votre parnier</h2>

                    <table class=\"table table-striped table-hover\">
                        <thead>
                            <tr>
                                <th>Références</th>
                                <th>Quantité</th>
                                <th>Prix unitaire</th>
                                <th>Total HT</th>
                            </tr>
                        </thead>
                        <tbody>

{% if monpanier|length == 0 %} {#si le nombre de ligne est egal a 0 #}
                            <tr>
                                <td colspan=\"4\" style=\"text-align:center\">Aucun articles dans votre panier</td>
                            </tr>

{% endif %}

                                                    {# quantite de produits selectionnee  monpanier[monp.id] #}
                        {% for monp in monpanier %}

                                <tr>

                                    <form action=\"{{ path('ecommerce_ajouter', {'id' :monp.id}) }}\" method=\"get\" >
                                            <td>{{monp.nom}}</td>
                                            <td>
                                                <select name=\"qte\" class=\"span1\" onChange=\"this.form.submit()\" >
                                                    {% for i in 1..10 %}
                                                        <option value=\"{{i}}\" {% if i == panier[monp.id] %}  selected = \"selected\"  {% endif %} >
                                                            {{i}}
                                                        </option>
                                                    {% endfor %}

                                                </select>&nbsp;
                                                <a href=\"{{ path('ecommerce_supprimer', {'id' :monp.id})}} \"><i class=\"icon-trash\"></i></a>

                                            </td>
                                            <td> {{monp.prix}} </td>
                                            <td> {{monp.prix * panier[monp.id] }} </td>

                                    </form>
                                </tr>
                            {%  set totalHT = totalHT + (monp.prix * panier[monp.id]) %}
                            {%  set totalTTC = totalTTC + (monp.prix * panier[monp.id])|price(monp.tva.multiplicate) %}
                            {%  set refTva   = refTva|merge({ ('%' ~ monp.tva.valeur): (monp.prix * panier[monp.id])|montantTva(monp.tva.multiplicate)  }) %}

                        {% endfor %}

                        </tbody>
                    </table>
    {% if monpanier|length != 0 %}

            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>

                {% for key, tva in refTva %}
                    <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                {% endfor %}

                <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
            </dl>
            <div class=\"clearfix\"></div>

                <a href=\"{{path('ecommerce_livraison')}}\" class=\"btn btn-success pull-right\">Valider mon panier</a>
    {% endif %}
                <a href=\"{{ path('ecommerce_homepage') }}\" class=\"btn btn-primary\">Continuer mes achats</a>
            </div>
\t\t
\t\t</div>
\t</div>
{%endblock%}", "EcommerceEcommerceBundle:Ecommerce:panier.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/panier.html.twig");
    }
}
