<?php

/* :commandes:index.html.twig */
class __TwigTemplate_faa4ea2aae863150baf1d35350670bc464b008130f25c01e5f6e2fbc2f0b276f extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":commandes:index.html.twig", 1);
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
        echo "    <h1>Commandes list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Valider</th>
                <th>Date</th>
                <th>Reference</th>
                <th>Commande</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["commandes"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_commandes_show", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "valider", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 22
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "date", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "date", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["commande"], "reference", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if (twig_get_attribute($this->env, $this->source, $context["commande"], "commande", array())) {
                echo twig_escape_filter($this->env, twig_join_filter(twig_get_attribute($this->env, $this->source, $context["commande"], "commande", array()), ", "), "html", null, true);
            }
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_commandes_show", array("id" => twig_get_attribute($this->env, $this->source, $context["commande"], "id", array()))), "html", null, true);
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
        // line 34
        echo "        </tbody>
    </table>

    
";
    }

    public function getTemplateName()
    {
        return ":commandes:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 34,  91 => 28,  82 => 24,  78 => 23,  72 => 22,  64 => 21,  58 => 20,  55 => 19,  51 => 18,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", ":commandes:index.html.twig", "/var/www/html/esymfony/app/Resources/views/commandes/index.html.twig");
    }
}
