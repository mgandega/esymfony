<?php

/* EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig */
class __TwigTemplate_793622783b2a03f9462aca081d77624bfced44b1025d47b0fac0e73d040f5361 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig", 1);
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
       ";
        // line 5
        $this->loadTemplate("::navigation.html.twig", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig", 5)->display($context);
        echo " 
          <div class=\"span9\">

           <ul class=\"thumbnails\">

\t           ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["cat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["categ"]) {
            // line 11
            echo "\t                <li >
\t                    <div class=\"thumbnail\">
\t                    ";
            // line 14
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["categ"], "image", array()), "path", array()))), "html", null, true);
            echo "\" alt=\"Omega Vision\" width=\"300\" height=\"300\" >
\t                        <div class=\"caption\">
\t                            <h4>";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categ"], "nom", array()), "html", null, true);
            echo "</h4>
\t                            <p>";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["categ"], "prix", array()), "html", null, true);
            echo "</p>
                                ";
            // line 22
            echo "                                <a class=\"btn btn-primary\" href=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["categ"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                                ";
            // line 23
            if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, $context["categ"], "id", array()), array(), "array", true, true)) {
                // line 24
                echo "                                    <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, $context["categ"], "id", array()))), "html", null, true);
                echo "\">Ajouter au panier</a>
                                ";
            } else {
                // line 26
                echo "                                    <nav class=\"btn btn-danger\"> deja au panier</nav>
                                ";
            }
            // line 28
            echo "\t                        </div>
\t                    </div>
\t                </li>
\t            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categ'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul> 
          </div>

        <div class=\"navigation\" style=\"text-align: center\">
            ";
        // line 36
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["cat"] ?? null));
        echo "
        </div>
";
        // line 53
        echo "    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 53,  101 => 36,  95 => 32,  86 => 28,  82 => 26,  76 => 24,  74 => 23,  69 => 22,  65 => 17,  61 => 16,  55 => 14,  51 => 11,  47 => 10,  39 => 5,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:mescategories.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/mescategories.html.twig");
    }
}
