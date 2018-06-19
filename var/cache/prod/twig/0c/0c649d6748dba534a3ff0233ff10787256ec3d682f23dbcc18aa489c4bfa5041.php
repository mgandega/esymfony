<?php

/* EcommerceEcommerceBundle:Ecommerce:produit.html.twig */
class __TwigTemplate_2457d1d256e2518b049ca17592a301604a0089264c2eb4ec3dee2d34b24ca43f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:produit.html.twig", 1);
        $this->blocks = array(
            'motscles' => array($this, 'block_motscles'),
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
    public function block_motscles($context, array $blocks = array())
    {
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "nom", array()), "html", null, true);
        echo " ";
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
\t<div class=\"container\">
\t\t<div class=\"row\">
            <?php include '../layout/col-left.php'; ?>
\t\t\t
\t\t\t<div class=\"span9\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"span5\">
\t\t\t\t";
        // line 13
        echo "
\t\t\t\t\t\t<img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->extensions['Liip\ImagineBundle\Templating\ImagineExtension']->filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "image", array()), "AssetPath", array()), "produits_thumb"), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/" . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "image", array()), "name", array()))), "html", null, true);
        echo "\" width=\"470\" height=\"310\">
\t\t\t\t\t</div>
    ";
        // line 16
        if ( !twig_get_attribute($this->env, $this->source, ($context["panier"] ?? null), twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "id", array()), array(), "array", true, true)) {
            // line 17
            echo "\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t<h4>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "nom", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t\t\t<p>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "description", array()), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<h4>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "prix", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<form action=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_ajouter", array("id" => twig_get_attribute($this->env, $this->source, ($context["rep"] ?? null), "id", array()))), "html", null, true);
            echo "\" method=\"get\"> 
\t\t\t\t\t

\t\t\t\t\t\t\t\t\t<select name=\"qte\" class=\"span1\">
\t\t\t\t\t\t\t\t\t\t";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 10));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 26
                echo "\t\t\t\t\t\t\t\t\t\t\t <option value=\"";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t ";
                // line 27
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t </option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "

\t\t\t\t\t\t\t\t\t</select>

\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter au panier</button>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t
";
            // line 47
            echo "\t
\t\t\t\t\t</div>
         ";
        } else {
            // line 50
            echo "\t            \t<nav class=\"btn btn-danger\"> Le produit est deja au panier</nav>
\t\t<a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_homepage");
            echo "\">Retourner aux produits</a>
\t";
        }
        // line 53
        echo "
\t\t\t\t</div>


\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:produit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 53,  125 => 51,  122 => 50,  117 => 47,  106 => 30,  97 => 27,  92 => 26,  88 => 25,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  66 => 17,  64 => 16,  57 => 14,  54 => 13,  44 => 4,  41 => 3,  33 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:produit.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/produit.html.twig");
    }
}
