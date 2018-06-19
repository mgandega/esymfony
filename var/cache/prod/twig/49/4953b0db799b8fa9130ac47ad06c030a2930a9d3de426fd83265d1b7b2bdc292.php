<?php

/* ::menuAdmin.html.twig */
class __TwigTemplate_919862efd61e5a98bf8c42522e4dacad16fbd923f5fc1091d3e5121471c29c3a extends Twig_Template
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
        echo "<div class=\"col-lg-3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"";
        // line 6
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_index");
        echo "\">Produits</a>
            </li>
            <li>
                <a href=\"";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_categories_index");
        echo "\">Categories</a>
            </li>
            <li>
                <a href=\"";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_commandes_index");
        echo "\"> Commandes</a>
            </li>
            <li>
                <a href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_pages_index");
        echo "\"> Pages</a>
            </li>

        </ul>
    </div>
    </div>";
    }

    public function getTemplateName()
    {
        return "::menuAdmin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 15,  42 => 12,  36 => 9,  30 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::menuAdmin.html.twig", "/var/www/html/esymfony/app/Resources/views/menuAdmin.html.twig");
    }
}
