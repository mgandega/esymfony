<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig */
class __TwigTemplate_e75f9a6b308be4d2c98d47fc691d211505a9a9c4d985efd6199f25888fc68aea extends Twig_Template
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
        // line 12
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 13
            echo "    <nav>
        <ul class=\"pagination";
            // line 14
            echo (( !array_key_exists("align", $context)) ? ("") : ((((($context["align"] ?? null) == "center")) ? (" justify-content-center") : ((((($context["align"] ?? null) == "right")) ? (" justify-content-end") : (""))))));
            echo "\">

            ";
            // line 16
            if (array_key_exists("previous", $context)) {
                // line 17
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"prev\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
                </li>
            ";
            } else {
                // line 21
                echo "                <li class=\"page-item disabled\">
                    <span class=\"page-link\">&laquo;&nbsp;";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
                </li>
            ";
            }
            // line 25
            echo "
            ";
            // line 26
            if ((($context["startPage"] ?? null) > 1)) {
                // line 27
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => 1))), "html", null, true);
                echo "\">1</a>
                </li>
                ";
                // line 30
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 31
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 32
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => 2))), "html", null, true);
                    echo "\">2</a>
                    </li>
                ";
                } elseif ((                // line 34
($context["startPage"] ?? null) != 2)) {
                    // line 35
                    echo "                    <li class=\"page-item disabled\">
                        <span class=\"page-link\">&hellip;</span>
                    </li>
                ";
                }
                // line 39
                echo "            ";
            }
            // line 40
            echo "
            ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 42
                echo "                ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 43
                    echo "                    <li class=\"page-item\">
                        <a class=\"page-link\" href=\"";
                    // line 44
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                } else {
                    // line 47
                    echo "                    <li class=\"page-item active\">
                        <span class=\"page-link\">";
                    // line 48
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
                    </li>
                ";
                }
                // line 51
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
            ";
            // line 54
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 55
                echo "                ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 56
                    echo "                    ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 57
                        echo "                        <li class=\"page-item disabled\">
                            <span class=\"page-link\">&hellip;</span>
                        </li>
                    ";
                    } else {
                        // line 61
                        echo "                        <li class=\"page-item\">
                            <a class=\"page-link\" href=\"";
                        // line 62
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                        </li>
                    ";
                    }
                    // line 65
                    echo "                ";
                }
                // line 66
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" href=\"";
                // line 67
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
                </li>
            ";
            }
            // line 70
            echo "
            ";
            // line 71
            if (array_key_exists("next", $context)) {
                // line 72
                echo "                <li class=\"page-item\">
                    <a class=\"page-link\" rel=\"next\" href=\"";
                // line 73
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
                </li>
            ";
            } else {
                // line 76
                echo "                <li  class=\"page-item disabled\">
                    <span class=\"page-link\">";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
                </li>
            ";
            }
            // line 80
            echo "        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 80,  187 => 77,  184 => 76,  176 => 73,  173 => 72,  171 => 71,  168 => 70,  160 => 67,  157 => 66,  154 => 65,  146 => 62,  143 => 61,  137 => 57,  134 => 56,  131 => 55,  129 => 54,  126 => 53,  119 => 51,  113 => 48,  110 => 47,  102 => 44,  99 => 43,  96 => 42,  92 => 41,  89 => 40,  86 => 39,  80 => 35,  78 => 34,  73 => 32,  70 => 31,  68 => 30,  63 => 28,  60 => 27,  58 => 26,  55 => 25,  49 => 22,  46 => 21,  38 => 18,  35 => 17,  33 => 16,  28 => 14,  25 => 13,  23 => 12,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v4_pagination.html.twig", "/var/www/html/esymfony/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/twitter_bootstrap_v4_pagination.html.twig");
    }
}
