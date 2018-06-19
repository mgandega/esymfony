<?php

/* ::menuAdmin.html.twig */
class __TwigTemplate_5e7d90498097ddafc53e6e754cc9080da232820e630b526ce2d7430a0f2d4733 extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menuAdmin.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::menuAdmin.html.twig"));

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
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  54 => 15,  48 => 12,  42 => 9,  36 => 6,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"col-lg-3\">

    <div class=\"well\">
        <ul class=\"nav nav-list\">
            <li>
                <a href=\"{{path('admin_produits_index')}}\">Produits</a>
            </li>
            <li>
                <a href=\"{{path('admin_categories_index')}}\">Categories</a>
            </li>
            <li>
                <a href=\"{{ path('admin_commandes_index') }}\"> Commandes</a>
            </li>
            <li>
                <a href=\"{{ path('admin_pages_index') }}\"> Pages</a>
            </li>

        </ul>
    </div>
    </div>", "::menuAdmin.html.twig", "/var/www/html/esymfony/app/Resources/views/menuAdmin.html.twig");
    }
}
