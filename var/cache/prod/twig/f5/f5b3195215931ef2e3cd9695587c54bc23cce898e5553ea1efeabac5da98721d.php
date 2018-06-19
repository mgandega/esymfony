<?php

/* KnpPaginatorBundle:Pagination:bulma_pagination.html.twig */
class __TwigTemplate_ceee685df644c0e881f72a298cc9323426d350073e82a8efc022d6cb104bab0a extends Twig_Template
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
        // line 2
        echo "
";
        // line 3
        if ((($context["pageCount"] ?? null) > 1)) {
            // line 4
            echo "    <nav class=\"pagination\">
        ";
            // line 5
            if (array_key_exists("previous", $context)) {
                // line 6
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
                echo "\">&lt;</a>
        ";
            } else {
                // line 8
                echo "            <a class=\"button\" disabled>&lt;</a>
        ";
            }
            // line 10
            echo "        ";
            if (array_key_exists("next", $context)) {
                // line 11
                echo "            <a class=\"button\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
                echo "\">&gt;</a>
        ";
            } else {
                // line 13
                echo "            <a class=\"button\" disabled>&gt;</a>
        ";
            }
            // line 15
            echo "        <ul>
            <li>
                <a class=\"button\" href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["first"] ?? null)))), "html", null, true);
            echo "\">1</a>
            </li>
            ";
            // line 19
            if ((((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = ($context["pagesInRange"] ?? null)) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[0] ?? null) : null) - ($context["first"] ?? null)) >= 2)) {
                // line 20
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 24
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 25
                echo "                ";
                if (((($context["first"] ?? null) != $context["page"]) && ($context["page"] != ($context["last"] ?? null)))) {
                    // line 26
                    echo "                    <li>
                        <a class=\"button\"
                           href=\"";
                    // line 28
                    echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a>
                    </li>
                ";
                }
                // line 31
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "            ";
            if (((($context["last"] ?? null) - (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = ($context["pagesInRange"] ?? null)) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[(twig_length_filter($this->env, ($context["pagesInRange"] ?? null)) - 1)] ?? null) : null)) >= 2)) {
                // line 33
                echo "                <li>
                    <span>…</span>
                </li>
            ";
            }
            // line 37
            echo "            <li>
                <a class=\"button\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["last"] ?? null)))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, ($context["last"] ?? null), "html", null, true);
            echo "</a>
            </li>
        </ul>
    </nav>
";
        }
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 38,  108 => 37,  102 => 33,  99 => 32,  93 => 31,  85 => 28,  81 => 26,  78 => 25,  73 => 24,  67 => 20,  65 => 19,  60 => 17,  56 => 15,  52 => 13,  46 => 11,  43 => 10,  39 => 8,  33 => 6,  31 => 5,  28 => 4,  26 => 3,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KnpPaginatorBundle:Pagination:bulma_pagination.html.twig", "/var/www/html/esymfony/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/bulma_pagination.html.twig");
    }
}
