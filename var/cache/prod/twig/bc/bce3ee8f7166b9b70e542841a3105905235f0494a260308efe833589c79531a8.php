<?php

/* EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig */
class __TwigTemplate_b89e7cf17c75b024fd42f07e549175f707fc11f60ad7b747df7e07bc0fd9d841 extends Twig_Template
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "date", array()), "d-m-Y"), "html", null, true);
        echo "</td>
                <td class=\"color\">";
        // line 24
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "reference", array()), "html", null, true);
        echo "</td>
            </tr>
        </table>
        <ul id=\"coordonnes\">
            <li>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "nom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "prenom", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "adresse", array()), "html", null, true);
        echo "</li>
            <li>";
        // line 30
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "facturation", array()), "pays", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "produit", array()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "prixHT", array()), "html", null, true);
        echo " €</td>
            </tr>
            ";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "tva", array()));
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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["facture"] ?? null), "commande", array()), "prixTTC", array()), "html", null, true);
        echo " €</td>
            </tr>
        </table>
        <div id=\"footer\">
            <span class=\"color strong\">";
        // line 67
        echo twig_escape_filter($this->env, ($context["adresse"] ?? null), "html", null, true);
        echo "</span>
            <br />
            ";
        // line 69
        echo twig_escape_filter($this->env, ($context["telephone"] ?? null), "html", null, true);
        echo "
        </div>
    </body>
</html>";
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
        return array (  164 => 69,  159 => 67,  152 => 63,  148 => 61,  139 => 58,  135 => 57,  132 => 56,  128 => 55,  123 => 53,  117 => 49,  108 => 46,  104 => 45,  100 => 44,  96 => 43,  92 => 42,  89 => 41,  85 => 40,  68 => 30,  64 => 29,  58 => 28,  51 => 24,  47 => 23,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:facturePDF.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/facturePDF.html.twig");
    }
}
