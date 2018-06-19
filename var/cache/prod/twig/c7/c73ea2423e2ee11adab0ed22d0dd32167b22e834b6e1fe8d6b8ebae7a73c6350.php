<?php

/* :produits:index.html.twig */
class __TwigTemplate_0024ae45ce117b90ad756e1ed5e0d0a1b57a9ec8bcdd01c095a249ae36ea03ce extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":produits:index.html.twig", 1);
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
        echo "
    \t<div class=\"container\">
\t\t<div class=\"row\">
  <div class=\"span3\">
                      <div class=\"well\">
\t\t            <ul class=\"nav nav-list\">
\t\t                <li class=\"nav-header\">Nos produits</li>
\t\t                <li class=\"active\">
\t\t                     ";
        // line 12
        $this->loadTemplate("::menuAdmin.html.twig", ":produits:index.html.twig", 12)->display($context);
        // line 13
        echo "\t\t                </li>
\t\t                ";
        // line 22
        echo "\t\t            </ul>
           \t      </div>
   </div>

<div class=\"span9\">

        <div> <h1>liste des Produits</h1></div>




            <table class=\"table table-striped table-hover\">


        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Description</th>
                <th>Prix</th>
                <th>Created</th>
                <th>Updated</th>
                <th>Disponible</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["produits"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["produit"]) {
            // line 50
            echo "            <tr>
                <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "nom", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "description", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 54
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "prix", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 55
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "created", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "created", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 56
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "updated", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["produit"], "updated", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 57
            if (twig_get_attribute($this->env, $this->source, $context["produit"], "disponible", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_show", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_edit", array("id" => twig_get_attribute($this->env, $this->source, $context["produit"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['produit'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "        </tbody>
    </table>

\t\t    <ul>
\t\t        <li>
\t\t            <a href=\"";
        // line 75
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_produits_new");
        echo "\">Create a new produit</a>
\t\t        </li>
\t\t    </ul>
          </div>
     </div>
     </div>
     </div>
";
    }

    public function getTemplateName()
    {
        return ":produits:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 75,  145 => 70,  133 => 64,  127 => 61,  116 => 57,  110 => 56,  104 => 55,  100 => 54,  96 => 53,  92 => 52,  86 => 51,  83 => 50,  79 => 49,  50 => 22,  47 => 13,  45 => 12,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":produits:index.html.twig", "/var/www/html/esymfony/app/Resources/views/produits/index.html.twig");
    }
}
