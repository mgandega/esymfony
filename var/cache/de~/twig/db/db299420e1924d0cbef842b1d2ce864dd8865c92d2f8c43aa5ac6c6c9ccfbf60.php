<?php

/* @EcommerceEcommerce/Ecommerce/validation.html.twiggggggg */
class __TwigTemplate_0d93c668f651d906520ad1809a72d76cb35dbccb315b46fe2ff8d75e7ae7e6b1 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@EcommerceEcommerce/Ecommerce/validation.html.twiggggggg", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/Ecommerce/validation.html.twiggggggg"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EcommerceEcommerce/Ecommerce/validation.html.twiggggggg"));

        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 6, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 7, $this->source); })()), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
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
        echo "    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                ";
        // line 15
        $this->loadTemplate("::navigation.html.twig", "@EcommerceEcommerce/Ecommerce/validation.html.twiggggggg", 15)->display($context);
        // line 16
        echo "            </div>

            <div class=\"span9\">

                ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 20, $this->source); })()), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                    <div class=\"alert alert-success\">
                        ";
            // line 22
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "
                <h2>Valider mon panier</h2>
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
        // line 37
        if ((twig_length_filter($this->env, (isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 37, $this->source); })())) == 0)) {
            // line 38
            echo "                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    ";
        }
        // line 42
        echo "
                    ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["produits"]) || array_key_exists("produits", $context) ? $context["produits"] : (function () { throw new Twig_Error_Runtime('Variable "produits" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 44
            echo "                        <tr>
                            <form action=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\" method=\"get\">
                                <td>";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                                <td>
                                    ";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 48, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array"), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 51, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")), "html", null, true);
            echo " €</td>
                            </form>
                        </tr>
                        ";
            // line 54
            $context["totalHT"] = ((isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 54, $this->source); })()) + (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")));
            // line 55
            echo "                        ";
            $context["totalTTC"] = ((isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 55, $this->source); })()) + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension']->priceFilter((twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 55, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "multiplicate", array())));
            // line 56
            echo "                        ";
            $context["refTva"] = twig_array_merge((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 56, $this->source); })()), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())) => (twig_get_attribute($this->env, $this->source, (isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 56, $this->source); })()), ("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())), array(), "array") + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension']->montantTva((twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * twig_get_attribute($this->env, $this->source, (isset($context["panier"]) || array_key_exists("panier", $context) ? $context["panier"] : (function () { throw new Twig_Error_Runtime('Variable "panier" does not exist.', 56, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), array(), "array")), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "multiplicate", array())))));
            // line 57
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "                    </tbody>
                </table>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["totalHT"]) || array_key_exists("totalHT", $context) ? $context["totalHT"] : (function () { throw new Twig_Error_Runtime('Variable "totalHT" does not exist.', 62, $this->source); })()), "html", null, true);
        echo " €</dd>

                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["refTva"]) || array_key_exists("refTva", $context) ? $context["refTva"] : (function () { throw new Twig_Error_Runtime('Variable "refTva" does not exist.', 64, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 65
            echo "                        <dt>TVA ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " :</dt><dd>";
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</dd>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "
                    <dt>Total TTC :</dt><dd>";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["totalTTC"]) || array_key_exists("totalTTC", $context) ? $context["totalTTC"] : (function () { throw new Twig_Error_Runtime('Variable "totalTTC" does not exist.', 68, $this->source); })()), "html", null, true);
        echo " €</dd>
                </dl>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de livraison</h4></dt>
                        <dt>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new Twig_Error_Runtime('Variable "livraison" does not exist.', 74, $this->source); })()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new Twig_Error_Runtime('Variable "livraison" does not exist.', 74, $this->source); })()), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new Twig_Error_Runtime('Variable "livraison" does not exist.', 75, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new Twig_Error_Runtime('Variable "livraison" does not exist.', 76, $this->source); })()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new Twig_Error_Runtime('Variable "livraison" does not exist.', 76, $this->source); })()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["livraison"]) || array_key_exists("livraison", $context) ? $context["livraison"] : (function () { throw new Twig_Error_Runtime('Variable "livraison" does not exist.', 76, $this->source); })()), "pays", array()), "html", null, true);
        echo "</dt>
                    </dl>
                </div>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de facturation</h4></dt>
                        <dt>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facturation"]) || array_key_exists("facturation", $context) ? $context["facturation"] : (function () { throw new Twig_Error_Runtime('Variable "facturation" does not exist.', 83, $this->source); })()), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facturation"]) || array_key_exists("facturation", $context) ? $context["facturation"] : (function () { throw new Twig_Error_Runtime('Variable "facturation" does not exist.', 83, $this->source); })()), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facturation"]) || array_key_exists("facturation", $context) ? $context["facturation"] : (function () { throw new Twig_Error_Runtime('Variable "facturation" does not exist.', 84, $this->source); })()), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facturation"]) || array_key_exists("facturation", $context) ? $context["facturation"] : (function () { throw new Twig_Error_Runtime('Variable "facturation" does not exist.', 85, $this->source); })()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facturation"]) || array_key_exists("facturation", $context) ? $context["facturation"] : (function () { throw new Twig_Error_Runtime('Variable "facturation" does not exist.', 85, $this->source); })()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facturation"]) || array_key_exists("facturation", $context) ? $context["facturation"] : (function () { throw new Twig_Error_Runtime('Variable "facturation" does not exist.', 85, $this->source); })()), "pays", array()), "html", null, true);
        echo "</dt>
                    </dl>
                </div>

                <div class=\"clearfix\"></div>
                <a href=\"";
        // line 90
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("prepareCommande");
        echo "\" class=\"btn btn-success pull-right\">Payer</a>
                <a href=\"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_livraison");
        echo "\" class=\"btn btn-primary\">retour</a>
            </div>

        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EcommerceEcommerce/Ecommerce/validation.html.twiggggggg";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 91,  254 => 90,  242 => 85,  238 => 84,  232 => 83,  218 => 76,  214 => 75,  208 => 74,  199 => 68,  196 => 67,  185 => 65,  181 => 64,  176 => 62,  170 => 58,  164 => 57,  161 => 56,  158 => 55,  156 => 54,  150 => 51,  146 => 50,  141 => 48,  136 => 46,  132 => 45,  129 => 44,  125 => 43,  122 => 42,  116 => 38,  114 => 37,  100 => 25,  91 => 22,  88 => 21,  84 => 20,  78 => 16,  76 => 15,  70 => 11,  61 => 10,  51 => 1,  45 => 7,  41 => 6,  39 => 5,  37 => 4,  35 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% set totalHT = 0 %}
{% set totalTTC = 0%}
{% set refTva = {} %}
{% for produit in produits %}
    {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : 0 }) %}
{% endfor %}

{% block body %}
    <div class=\"container\">
        <div class=\"row\">

            <div class=\"span3\">
                {% include '::navigation.html.twig' %}
            </div>

            <div class=\"span9\">

                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success\">
                        {{ flashMessage }}
                    </div>
                {% endfor %}

                <h2>Valider mon panier</h2>
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
                    {% if produits|length == 0 %}
                        <tr>
                            <td colspan=\"4\"><center>Aucun articles dans votre panier</center></td>
                        </tr>
                    {% endif %}

                    {% for produit in produits %}
                        <tr>
                            <form action=\"{{ path('ecommerce_ajouter', { 'id' : produit.id }) }}\" method=\"get\">
                                <td>{{ produit.nom }}</td>
                                <td>
                                    {{ panier[produit.id] }}
                                </td>
                                <td>{{ produit.prix }} €</td>
                                <td>{{ produit.prix * panier[produit.id] }} €</td>
                            </form>
                        </tr>
                        {% set totalHT = totalHT + (produit.prix * panier[produit.id]) %}
                        {% set totalTTC = totalTTC + (produit.prix * panier[produit.id])|price(produit.tva.multiplicate) %}
                        {% set refTva = refTva|merge({ ('%' ~ produit.tva.valeur) : refTva['%' ~ produit.tva.valeur] + ( produit.prix * panier[produit.id])|montantTva(produit.tva.multiplicate) }) %}
                    {% endfor %}
                    </tbody>
                </table>

                <dl class=\"dl-horizontal pull-right\">
                    <dt>Total HT :</dt><dd>{{ totalHT }} €</dd>

                    {% for key, tva in refTva %}
                        <dt>TVA {{ key }} :</dt><dd>{{ tva }} €</dd>
                    {% endfor %}

                    <dt>Total TTC :</dt><dd>{{ totalTTC }} €</dd>
                </dl>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de livraison</h4></dt>
                        <dt>{{ livraison.prenom }} {{ livraison.nom }}</dt>
                        <dt>{{ livraison.adresse }}</dt>
                        <dt>{{ livraison.cp }} {{ livraison.ville }} - {{ livraison.pays }}</dt>
                    </dl>
                </div>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de facturation</h4></dt>
                        <dt>{{ facturation.prenom }} {{ facturation.nom }}</dt>
                        <dt>{{ facturation.adresse }}</dt>
                        <dt>{{ facturation.cp }} {{ facturation.ville }} - {{ facturation.pays }}</dt>
                    </dl>
                </div>

                <div class=\"clearfix\"></div>
                <a href=\"{{ path('prepareCommande') }}\" class=\"btn btn-success pull-right\">Payer</a>
                <a href=\"{{ path('ecommerce_livraison') }}\" class=\"btn btn-primary\">retour</a>
            </div>

        </div>
    </div>
{% endblock %}", "@EcommerceEcommerce/Ecommerce/validation.html.twiggggggg", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/validation.html.twiggggggg");
    }
}
