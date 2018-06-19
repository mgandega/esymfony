<?php

/* EcommerceEcommerceBundle:Categories:show.html.twig */
class __TwigTemplate_e2c280807673f35750f2c621e0ff27eea19103a596572edb23aea91c445e004c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EcommerceEcommerceBundle:Categories:show.html.twig", 1);
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
        echo "    <h1>Categorie</h1>
<div class=\"container\">
    <div class=\"row\">

        <div class=\"span9\">
            <table class=\"table table-striped table-hover\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nom</th>
                <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "nom", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>
        </div>
    </div>
</div>

    <ul>
        <li>
            <a href=\"";
        // line 27
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_edit", array("id" => twig_get_attribute($this->env, $this->source, ($context["category"] ?? null), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["delete_form"] ?? null), 'form_end');
        echo "
        </li>
    </ul>


";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Categories:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 35,  78 => 33,  72 => 30,  66 => 27,  53 => 17,  46 => 13,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Categories:show.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Categories/show.html.twig");
    }
}
