<?php

/* KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig */
class __TwigTemplate_d2e425fa2cd14210e8e247d4f8f08a8c68c866c0909be3e4bc08464127f606db extends Twig_Template
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
        // line 16
        echo "
";
        // line 17
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 18
            echo "    <ul class=\"pagination\">

    ";
            // line 20
            if (array_key_exists("previous", $context)) {
                // line 21
                echo "        <li>
            <a rel=\"prev\" href=\"";
                // line 22
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
                echo "\">&laquo;&nbsp;";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</a>
        </li>
    ";
            } else {
                // line 25
                echo "        <li class=\"disabled\">
            <span>&laquo;&nbsp;";
                // line 26
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_previous", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "</span>
        </li>
    ";
            }
            // line 29
            echo "
    ";
            // line 30
            if ((($context["startPage"] ?? null) > 1)) {
                // line 31
                echo "        <li>
            <a href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => 1))), "html", null, true);
                echo "\">1</a>
        </li>
        ";
                // line 34
                if ((($context["startPage"] ?? null) == 3)) {
                    // line 35
                    echo "            <li>
                <a href=\"";
                    // line 36
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => 2))), "html", null, true);
                    echo "\">2</a>
            </li>
        ";
                } elseif ((                // line 38
($context["startPage"] ?? null) != 2)) {
                    // line 39
                    echo "        <li class=\"disabled\">
            <span>&hellip;</span>
        </li>
        ";
                }
                // line 43
                echo "    ";
            }
            // line 44
            echo "
    ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 46
                echo "        ";
                if (($context["page"] != ($context["current"] ?? null))) {
                    // line 47
                    echo "            <li>
                <a href=\"";
                    // line 48
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
            </li>
        ";
                } else {
                    // line 51
                    echo "            <li class=\"active\">
                <span>";
                    // line 52
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</span>
            </li>
        ";
                }
                // line 55
                echo "
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 57
            echo "
    ";
            // line 58
            if ((($context["pageCount"] ?? null) > ($context["endPage"] ?? null))) {
                // line 59
                echo "        ";
                if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 1))) {
                    // line 60
                    echo "            ";
                    if ((($context["pageCount"] ?? null) > (($context["endPage"] ?? null) + 2))) {
                        // line 61
                        echo "                <li class=\"disabled\">
                    <span>&hellip;</span>
                </li>
            ";
                    } else {
                        // line 65
                        echo "                <li>
                    <a href=\"";
                        // line 66
                        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => (($context["pageCount"] ?? null) - 1)))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, (($context["pageCount"] ?? null) - 1), "html", null, true);
                        echo "</a>
                </li>
            ";
                    }
                    // line 69
                    echo "        ";
                }
                // line 70
                echo "        <li>
            <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["pageCount"] ?? null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, ($context["pageCount"] ?? null), "html", null, true);
                echo "</a>
        </li>
    ";
            }
            // line 74
            echo "
    ";
            // line 75
            if (array_key_exists("next", $context)) {
                // line 76
                echo "        <li>
            <a rel=\"next\" href=\"";
                // line 77
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</a>
        </li>
    ";
            } else {
                // line 80
                echo "        <li class=\"disabled\">
            <span>";
                // line 81
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("label_next", array(), "KnpPaginatorBundle"), "html", null, true);
                echo "&nbsp;&raquo;</span>
        </li>
    ";
            }
            // line 84
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 84,  186 => 81,  183 => 80,  175 => 77,  172 => 76,  170 => 75,  167 => 74,  159 => 71,  156 => 70,  153 => 69,  145 => 66,  142 => 65,  136 => 61,  133 => 60,  130 => 59,  128 => 58,  125 => 57,  118 => 55,  112 => 52,  109 => 51,  101 => 48,  98 => 47,  95 => 46,  91 => 45,  88 => 44,  85 => 43,  79 => 39,  77 => 38,  72 => 36,  69 => 35,  67 => 34,  62 => 32,  59 => 31,  57 => 30,  54 => 29,  48 => 26,  45 => 25,  37 => 22,  34 => 21,  32 => 20,  28 => 18,  26 => 17,  23 => 16,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KnpPaginatorBundle:Pagination:twitter_bootstrap_v3_pagination.html.twig", "/var/www/html/esymfony/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/twitter_bootstrap_v3_pagination.html.twig");
    }
}
