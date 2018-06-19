<?php

/* EcommerceEcommerceBundle:Categories:index.html.twig */
class __TwigTemplate_13122671132c46e5d3a132f63a11ef806ac7fc228547f00f0a456e9ff4b8431b extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EcommerceEcommerceBundle:Categories:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Liste des Categories </h1>

<div class=\"container\">
    <div class=\"row\">

        <div class=\"span9\">
            <table class=\"table table-striped table-hover\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_show", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["category"], "nom", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_show", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\">
                                    <span class=\"glyphicon glyphicon-book\"></span> Book
                                </button
                            </a>
                        </li>
                        <br/>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["category"], "id", array()))), "html", null, true);
            echo "\">
                                <button type=\"button\" class=\"btn btn-default btn-sm\">
                                    <span class=\"glyphicon glyphicon-edit\"></span> Edit
                                </button>

                            </a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </tbody>
    </table>
        </div>
    </div>
</div>

    <ul>
        <li>
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_new");
        echo "\">Create a new category</a>
        </li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Categories:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 53,  100 => 45,  83 => 34,  72 => 26,  65 => 22,  59 => 21,  56 => 20,  52 => 19,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Categories:index.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Categories/index.html.twig");
    }
}
