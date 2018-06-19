<?php

/* EcommerceEcommerceBundle:Commandes:index.html.twig */
class __TwigTemplate_cfc79d5e73d60f6f7a080ea8f85a229e8ddf9f2338decd860cf15747130268d7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "EcommerceEcommerceBundle:Commandes:index.html.twig", 1);
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

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-lg-7 col-lg-offset-4\" > <h1>Liste des Commandes</h1></div>
    </div>

    <div class=\"row\">

        ";
        // line 13
        $this->loadTemplate("::menuAdmin.html.twig", "EcommerceEcommerceBundle:Commandes:index.html.twig", 13)->display($context);
        // line 14
        echo "
        <div class=\"col-lg-9\">


            <table class=\"table table-striped table-hover\">
        <thead>
            <tr  >
                <th>Date</th>
                <th>Reference</th>
                <th>Client</th>
                <th>Action</th>
             ";
        // line 26
        echo "            </tr>
        </thead>
        <tbody>
        ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 30
            echo "
            <tr>
       ";
            // line 33
            echo "                <td>";
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "reference", array()), "html", null, true);
            echo "</td>
                <td> ";
            // line 35
            if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "utilisateur", array()), "username", array())) {
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["commande"], "utilisateur", array()), "username", array()), "html", null, true);
            }
            echo "</td>

         ";
            // line 38
            echo "                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_facturesPDF", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>

                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        </tbody>
    </table>

        </div>
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  97 => 41,  92 => 38,  85 => 35,  81 => 34,  74 => 33,  70 => 30,  66 => 29,  61 => 26,  48 => 14,  46 => 13,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Commandes:index.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Commandes/index.html.twig");
    }
}
