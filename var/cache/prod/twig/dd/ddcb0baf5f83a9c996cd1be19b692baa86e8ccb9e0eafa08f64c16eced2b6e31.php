<?php

/* @EcommerceEcommerce/Ecommerce/validation.html.twiggggggg */
class __TwigTemplate_4b1d7c6ec12b1792b3cf668dd385ce5a446765874473834bb541476e7cbb2851 extends Twig_Template
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 7
            $context["refTva"] = twig_array_merge(($context["refTva"] ?? null), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
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
        if ((twig_length_filter($this->env, ($context["produits"] ?? null)) == 0)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
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
            echo twig_escape_filter($this->env, (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["panier"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["produit"], "id", array())] ?? null) : null), "html", null, true);
            echo "
                                </td>
                                <td>";
            // line 50
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo " €</td>
                                <td>";
            // line 51
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["panier"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["produit"], "id", array())] ?? null) : null)), "html", null, true);
            echo " €</td>
                            </form>
                        </tr>
                        ";
            // line 54
            $context["totalHT"] = (($context["totalHT"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["panier"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["produit"], "id", array())] ?? null) : null)));
            // line 55
            echo "                        ";
            $context["totalTTC"] = (($context["totalTTC"] ?? null) + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension']->priceFilter((twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["panier"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["produit"], "id", array())] ?? null) : null)), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "multiplicate", array())));
            // line 56
            echo "                        ";
            $context["refTva"] = twig_array_merge(($context["refTva"] ?? null), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array())) => ((($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["refTva"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "valeur", array()))] ?? null) : null) + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension']->montantTva((twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()) * (($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 = ($context["panier"] ?? null)) && is_array($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105) || $__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105 instanceof ArrayAccess ? ($__internal_128c19eb75d89ae9acc1294da2e091b433005202cb9b9351ea0c5dd5f69ee105[twig_get_attribute($this->env, $this->source, $context["produit"], "id", array())] ?? null) : null)), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["produit"], "tva", array()), "multiplicate", array())))));
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
        echo twig_escape_filter($this->env, ($context["totalHT"] ?? null), "html", null, true);
        echo " €</dd>

                    ";
        // line 64
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["refTva"] ?? null));
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
        echo twig_escape_filter($this->env, ($context["totalTTC"] ?? null), "html", null, true);
        echo " €</dd>
                </dl>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de livraison</h4></dt>
                        <dt>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livraison"] ?? null), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livraison"] ?? null), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 75
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livraison"] ?? null), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livraison"] ?? null), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livraison"] ?? null), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["livraison"] ?? null), "pays", array()), "html", null, true);
        echo "</dt>
                    </dl>
                </div>

                <div class=\"span3 pull-left\">
                    <dl class=\"pull-left\">
                        <dt><h4>Adresse de facturation</h4></dt>
                        <dt>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facturation"] ?? null), "prenom", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facturation"] ?? null), "nom", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 84
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facturation"] ?? null), "adresse", array()), "html", null, true);
        echo "</dt>
                        <dt>";
        // line 85
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facturation"] ?? null), "cp", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facturation"] ?? null), "ville", array()), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["facturation"] ?? null), "pays", array()), "html", null, true);
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
        return array (  240 => 91,  236 => 90,  224 => 85,  220 => 84,  214 => 83,  200 => 76,  196 => 75,  190 => 74,  181 => 68,  178 => 67,  167 => 65,  163 => 64,  158 => 62,  152 => 58,  146 => 57,  143 => 56,  140 => 55,  138 => 54,  132 => 51,  128 => 50,  123 => 48,  118 => 46,  114 => 45,  111 => 44,  107 => 43,  104 => 42,  98 => 38,  96 => 37,  82 => 25,  73 => 22,  70 => 21,  66 => 20,  60 => 16,  58 => 15,  52 => 11,  49 => 10,  45 => 1,  39 => 7,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@EcommerceEcommerce/Ecommerce/validation.html.twiggggggg", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/validation.html.twiggggggg");
    }
}
