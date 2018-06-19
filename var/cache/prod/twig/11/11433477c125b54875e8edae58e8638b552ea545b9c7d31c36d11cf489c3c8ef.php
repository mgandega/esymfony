<?php

/* EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig */
class __TwigTemplate_7d3931521d8abbeb3daab0d2b1378327f384e5801d3dd348802d34fb2b8497a8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_motscles($context, array $blocks = array())
    {
        // line 3
        echo "\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["marepo"]) {
            // line 4
            echo "\t     ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marepo"], "nom", array()), "html", null, true);
            echo " 
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marepo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        // line 9
        echo "

\t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["marepo"]) {
            // line 12
            echo "\t    ";
            // line 13
            echo "
\t\t\t";
            // line 14
            if (($context["mapage"] ?? null)) {
                // line 15
                echo "\t\t\t    ";
                if ((twig_get_attribute($this->env, $this->source, $context["marepo"], "disponible", array()) == 1)) {
                    // line 16
                    echo "\t\t\t            <ul class=\"thumbnails\">
\t\t\t                ";
                    // line 17
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["cat"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
                        // line 18
                        echo "\t\t\t                    <li class=\"span3\">
\t\t\t                        <div class=\"thumbnail\">
\t\t\t                      ";
                        // line 21
                        echo "\t\t\t                  <img src=\"";
                        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["marepo"], "image", array()), "AssetPath", array()), "index_thumb"), "html", null, true);
                        echo "\" alt=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["marepo"], "image", array()), "name", array()), "html", null, true);
                        echo "\" width=\"300\" height=\"200\" >
\t\t\t                            <div class=\"caption\">
\t\t\t                                <h4>";
                        // line 23
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marepo"], "nom", array()), "html", null, true);
                        echo "</h4>
\t\t\t                                <p>";
                        // line 24
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["marepo"], "prix", array()), "html", null, true);
                        echo " €</p>
\t\t\t                                <a class=\"btn btn-primary\" href=\"";
                        // line 25
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["marepo"], "id", array()))), "html", null, true);
                        echo "\">Plus d'infos</a>
\t\t\t                                <a class=\"btn btn-success\" href=\"";
                        // line 26
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_panier", array("id" => twig_get_attribute($this->env, $this->source, $context["marepo"], "id", array()))), "html", null, true);
                        echo "\">Ajouter au panier</a>
\t\t\t                            </div>
\t\t\t                        </div>
\t\t\t                    </li>
\t\t\t                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 31
                    echo "\t\t\t            </ul>

\t\t\t    ";
                }
                // line 34
                echo "

            ";
            }
            // line 37
            echo "


\t
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['marepo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "
\t   

";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 42,  125 => 37,  120 => 34,  115 => 31,  104 => 26,  100 => 25,  96 => 24,  92 => 23,  84 => 21,  80 => 18,  76 => 17,  73 => 16,  70 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  55 => 9,  52 => 8,  41 => 4,  36 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:recherchetraitement.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/recherchetraitement.html.twig");
    }
}
