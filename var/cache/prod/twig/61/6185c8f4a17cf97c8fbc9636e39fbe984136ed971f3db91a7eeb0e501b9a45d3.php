<?php

/* EcommerceEcommerceBundle:Ecommerce:panier.html.twig */
class __TwigTemplate_7a6640372aa7b5ebc9ac54d8bcdc428276e5dca816ac394acacb388f1924b16e extends Twig_Template
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
        // line 3
        $context["totalHT"] = 0;
        // line 4
        $context["totalTTC"] = 0;
        // line 5
        $context["refTva"] = array();
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["monpanier"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["monp"]) {
            // line 7
            $context["refTva"] = twig_array_merge(($context["refTva"] ?? null), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "valeur", array())) => 0));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['monp'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "succes"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "notification"), "method"));
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
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "ajout"), "method"));
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
        if ((twig_length_filter($this->env, ($context["monpanier"] ?? null)) == 0)) {
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
        $context['_seq'] = twig_ensure_traversable(($context["monpanier"] ?? null));
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
                if (($context["i"] == (($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["panier"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[twig_get_attribute($this->env, $this->source, $context["monp"], "id", array())] ?? null) : null))) {
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
            echo twig_escape_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["panier"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[twig_get_attribute($this->env, $this->source, $context["monp"], "id", array())] ?? null) : null)), "html", null, true);
            echo " </td>

                                    </form>
                                </tr>
                            ";
            // line 97
            $context["totalHT"] = (($context["totalHT"] ?? null) + (twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * (($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 = ($context["panier"] ?? null)) && is_array($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57) || $__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57 instanceof ArrayAccess ? ($__internal_b0b3d6199cdf4d15a08b3fb98fe017ecb01164300193d18d78027218d843fc57[twig_get_attribute($this->env, $this->source, $context["monp"], "id", array())] ?? null) : null)));
            // line 98
            echo "                            ";
            $context["totalTTC"] = (($context["totalTTC"] ?? null) + $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension']->priceFilter((twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * (($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 = ($context["panier"] ?? null)) && is_array($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9) || $__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9 instanceof ArrayAccess ? ($__internal_81ccf322d0988ca0aa9ae9943d772c435c5ff01fb50b956278e245e40ae66ab9[twig_get_attribute($this->env, $this->source, $context["monp"], "id", array())] ?? null) : null)), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "multiplicate", array())));
            // line 99
            echo "                            ";
            $context["refTva"] = twig_array_merge(($context["refTva"] ?? null), array(("%" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "valeur", array())) => $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\MontantTvaExtension']->montantTva((twig_get_attribute($this->env, $this->source, $context["monp"], "prix", array()) * (($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 = ($context["panier"] ?? null)) && is_array($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217) || $__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217 instanceof ArrayAccess ? ($__internal_add9db1f328aaed12ef1a33890510da978cc9cf3e50f6769d368473a9c90c217[twig_get_attribute($this->env, $this->source, $context["monp"], "id", array())] ?? null) : null)), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["monp"], "tva", array()), "multiplicate", array()))));
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
        if ((twig_length_filter($this->env, ($context["monpanier"] ?? null)) != 0)) {
            // line 106
            echo "
            <dl class=\"dl-horizontal pull-right\">
                <dt>Total HT :</dt><dd>";
            // line 108
            echo twig_escape_filter($this->env, ($context["totalHT"] ?? null), "html", null, true);
            echo " €</dd>

                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["refTva"] ?? null));
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
            echo twig_escape_filter($this->env, ($context["totalTTC"] ?? null), "html", null, true);
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
        return array (  282 => 120,  277 => 118,  270 => 114,  267 => 113,  256 => 111,  252 => 110,  247 => 108,  243 => 106,  241 => 105,  236 => 102,  229 => 100,  226 => 99,  223 => 98,  221 => 97,  214 => 93,  210 => 92,  204 => 89,  200 => 87,  191 => 84,  182 => 83,  178 => 82,  172 => 79,  168 => 78,  163 => 75,  158 => 74,  155 => 72,  148 => 67,  145 => 66,  128 => 51,  119 => 48,  116 => 47,  112 => 46,  109 => 45,  100 => 42,  97 => 41,  93 => 40,  90 => 39,  81 => 36,  78 => 35,  74 => 34,  67 => 29,  62 => 19,  52 => 11,  49 => 10,  45 => 1,  39 => 7,  35 => 6,  33 => 5,  31 => 4,  29 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:panier.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/panier.html.twig");
    }
}
