<?php

/* KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig */
class __TwigTemplate_f376ba661646681ceef34a494ec6db0af50fa7ab8d3316eca200304163a74c4e extends Twig_Template
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
        // line 13
        echo "
<div class=\"ui pagination menu\">
    ";
        // line 15
        if ((array_key_exists("first", $context) && (($context["current"] ?? null) != ($context["first"] ?? null)))) {
            // line 16
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["first"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle double left icon\"></i>
        </a>
    ";
        }
        // line 20
        echo "
    ";
        // line 21
        if (array_key_exists("previous", $context)) {
            // line 22
            echo "        <a class=\"item icon\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["previous"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle left icon\"></i>
        </a>
    ";
        }
        // line 26
        echo "
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["pagesInRange"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 28
            echo "        ";
            if (($context["page"] != ($context["current"] ?? null))) {
                // line 29
                echo "            <a class=\"item\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => $context["page"]))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</a>
        ";
            } else {
                // line 31
                echo "            <span class=\"active item\">";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo "</span>
        ";
            }
            // line 33
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
    ";
        // line 36
        if (array_key_exists("next", $context)) {
            // line 37
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["next"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle right icon\"></i>
        </a>
    ";
        }
        // line 41
        echo "
    ";
        // line 42
        if ((array_key_exists("last", $context) && (($context["current"] ?? null) != ($context["last"] ?? null)))) {
            // line 43
            echo "        <a class=\"icon item\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(($context["route"] ?? null), twig_array_merge(($context["query"] ?? null), array(($context["pageParameterName"] ?? null) => ($context["last"] ?? null)))), "html", null, true);
            echo "\">
            <i class=\"angle right double icon\"></i>
        </a>
    ";
        }
        // line 47
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 47,  99 => 43,  97 => 42,  94 => 41,  86 => 37,  84 => 36,  81 => 35,  74 => 33,  68 => 31,  60 => 29,  57 => 28,  53 => 27,  50 => 26,  42 => 22,  40 => 21,  37 => 20,  29 => 16,  27 => 15,  23 => 13,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "KnpPaginatorBundle:Pagination:semantic_ui_pagination.html.twig", "/var/www/html/esymfony/vendor/knplabs/knp-paginator-bundle/Resources/views/Pagination/semantic_ui_pagination.html.twig");
    }
}
