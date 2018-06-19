<?php

/* EcommerceEcommerceBundle:Ecommerce:index.html.twig */
class __TwigTemplate_bb4ea13dfab8d46a0fa03bcfa98960ebdca196bbbea42c09c12b74a8bab8077c extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:index.html.twig", 1);
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

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "  ";
        // line 5
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["app"] ?? null), "session", array()), "flashbag", array()), "get", array(0 => "mysuccess"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 6
            echo "        <div class=\"alert alert-success\">
            ";
            // line 7
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span3\" style=\"margin-right: 20px;\">

            ";
        // line 14
        echo twig_include($this->env, $context, "::navigation.html.twig");
        echo "
            ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Ecommerce:menu"));
        echo "
        </div>


        <div class=\"span8\">

            <ul class=\"thumbnails\">

                ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["ind"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["index"]) {
            // line 24
            echo "
                    <li class=\"span3\">
                        <div class=\"thumbnail\">
                     ";
            // line 28
            echo "                    
                    ";
            // line 30
            echo "                            <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["index"], "image", array()), "AssetPath", array()), "index_thumb"), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["index"], "image", array()), "name", array()), "html", null, true);
            echo "\" width=\"300\" height=\"200\" > 
                            <div class=\"caption\">
                                <h4>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["index"], "nom", array()), "html", null, true);
            echo "</h4>
                                 <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->extensions['Ecommerce\EcommerceBundle\Twig\Extension\TvaExtension']->priceFilter(twig_get_attribute($this->env, $this->source, $context["index"], "prix", array()), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["index"], "tva", array()), "multiplicate", array())), "html", null, true);
            echo " €</p>
                                <a class=\"btn btn-primary\" href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_produit", array("id" => twig_get_attribute($this->env, $this->source, $context["index"], "id", array()))), "html", null, true);
            echo "\">Plus d'infos</a>
                    ";
            // line 35
            if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, $context["index"], "id", array()), array(), "array", true, true)) {
                // line 36
                echo "                                <a class=\"btn btn-success\" href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, $context["index"], "id", array()))), "html", null, true);
                echo "\">Ajouter au panier</a>
                    ";
            } else {
                // line 38
                echo "                                <nav class=\"btn btn-danger\"> deja au panier</nav>
                    ";
            }
            // line 40
            echo "
                        
                            </div>
                        </div>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['index'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "            </ul>

        </div>

        <div class=\"navigation\" style=\"text-align: center\">
            ";
        // line 51
        echo $this->extensions['Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension']->render($this->env, ($context["ind"] ?? null));
        echo "
        </div>
       ";
        // line 65
        echo "    </div>



</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 65,  137 => 51,  130 => 46,  119 => 40,  115 => 38,  109 => 36,  107 => 35,  103 => 34,  99 => 33,  95 => 32,  87 => 30,  84 => 28,  79 => 24,  75 => 23,  64 => 15,  60 => 14,  54 => 10,  45 => 7,  42 => 6,  37 => 5,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:index.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/index.html.twig");
    }
}
