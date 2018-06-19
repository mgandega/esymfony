<?php

/* EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig */
class __TwigTemplate_afd500e93a7e9a6f7a22688616dc78f55c2048e34667462b6a6fcb7b7cfa7bfa extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>Omega Vision</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 23, $this->source); })()), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 24, $this->source); })()), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 28, $this->source); })()), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 28, $this->source); })()), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 29, $this->source); })()), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 30, $this->source); })()), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 30, $this->source); })()), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 30, $this->source); })()), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
        echo "</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
                ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 40, $this->source); })()), "commande", array()), "produit", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 41
            echo "                <tr>
                    <td class=\"color\">";
            // line 42
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "reference", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 43
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array()), "html", null, true);
            echo "</td>
                    <td class=\"color\">";
            // line 44
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prixHT", array()), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 45
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prixHT", array()) * twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                    <td class=\"color\">";
            // line 46
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prixTTC", array()) * twig_get_attribute($this->env, $this->source, $context["produit"], "quantite", array())), "html", null, true);
            echo " €</td>
                </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 49
        echo "        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 53, $this->source); })()), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</td>
            </tr>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 55, $this->source); })()), "commande", array()), "tva", array()));
        foreach ($context['_seq'] as $context["key"] => $context["tva"]) {
            // line 56
            echo "            <tr>
                <td width=\"110\">TVA <span class=\"color min\">";
            // line 57
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "</span> :</td>
                <td width=\"100\" class=\"color\">";
            // line 58
            echo twig_escape_filter($this->env, $context["tva"], "html", null, true);
            echo " €</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['tva'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">";
        // line 63
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["facture"]) || array_key_exists("facture", $context) ? $context["facture"] : (function () { throw new Twig_Error_Runtime('Variable "facture" does not exist.', 63, $this->source); })()), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">";
        // line 67
        echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new Twig_Error_Runtime('Variable "adresse" does not exist.', 67, $this->source); })()), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new Twig_Error_Runtime('Variable "telephone" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "
        </div>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 69,  165 => 67,  158 => 63,  154 => 61,  145 => 58,  141 => 57,  138 => 56,  134 => 55,  129 => 53,  123 => 49,  114 => 46,  110 => 45,  106 => 44,  102 => 43,  98 => 42,  95 => 41,  91 => 40,  74 => 30,  70 => 29,  64 => 28,  57 => 24,  53 => 23,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>Facture</title>
        <link href=\"css/facture.css\" rel=\"stylesheet\" type=\"text/css\" />
    </head>
    <body>
        <h1>Omega Vision</h1>
        <table id=\"enTete\">
            <tr>
                <td colspan=\"1\"></td>
                <td colspan=\"1\"><h1>Facture</h1></td>
                <td colspan=\"1\"></td>
            </tr>
            <tr>
                <td width=\"80\">Page</td>
                <td width=\"100\">Date</td>
                <td width=\"120\">Ref</td>
            </tr>
            <tr>
                <td class=\"color\">[[page_nb]]</td>
                <td class=\"color\">{{ facture.date|date('d-m-Y') }}</td>
                <td class=\"color\">{{ facture.reference }}</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>{{ facture.commande.facturation.nom }} {{ facture.commande.facturation.prenom }}</li>
            <li>{{ facture.commande.facturation.adresse}}</li>
            <li>{{ facture.commande.facturation.cp }} {{ facture.commande.facturation.ville }} - {{ facture.commande.facturation.pays }}</li>
        </ul>
        <table id=\"entity\">
            <tr>
                <td width=\"280\">DESIGNATION</td>
                <td width=\"105\">QUANTITE</td>
                <td width=\"100\">P.U - HT</td>
                <td width=\"105\">MONTANT HT</td>
                <td width=\"105\">MONTANT TTC</td>
            </tr>
                {% for produit in facture.commande.produit %}
                <tr>
                    <td class=\"color\">{{ produit.reference }}</td>
                    <td class=\"color\">{{ produit.quantite }}</td>
                    <td class=\"color\">{{ produit.prixHT }} €</td>
                    <td class=\"color\">{{ produit.prixHT * produit.quantite }} €</td>
                    <td class=\"color\">{{ produit.prixTTC * produit.quantite }} €</td>
                </tr>
                {% endfor %}
        </table>
        <table id=\"total\">
            <tr>
                <td width=\"110\">TOTAL HT :</td>
                <td width=\"100\" class=\"color\">{{ facture.commande.prixHT }} €</td>
            </tr>
            {% for key, tva in facture.commande.tva %}
            <tr>
                <td width=\"110\">TVA <span class=\"color min\">{{ key }}</span> :</td>
                <td width=\"100\" class=\"color\">{{ tva }} €</td>
            </tr>
            {% endfor %}
            <tr>
                <td width=\"110\">TOTAL TTC :</td>
                <td width=\"100\" class=\"color\">{{ facture.commande.prixTTC }} €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">{{ adresse }}</span>
            <br />
            {{ telephone }}
        </div>
    </body>
</html>", "EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/facturePDF.html.twig");
    }
}
