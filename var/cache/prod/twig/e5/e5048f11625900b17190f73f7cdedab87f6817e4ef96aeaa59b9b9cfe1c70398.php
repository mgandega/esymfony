<?php

/* EcommerceEcommerceBundle:Ecommerce:livraison.html.twig */
class __TwigTemplate_737a06995e0e7ee214452c760e6bdd71dfbc085c93a42f9deb7898c3438cbf43 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:livraison.html.twig", 1);
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
        <div class=\"span12\">
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        ";
        // line 10
        if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "adresses", array())) != 0)) {
            // line 11
            echo "


                            <form action=\"";
            // line 14
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_validation");
            echo "\" method=\"POST\">
                                <h4>Adresse de livraison</h4>
                                ";
            // line 16
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 17
                echo "
                                        <label class=\"radio\">
                                            <input type=\"radio\" name=\"livraison\"  value=\"";
                // line 19
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) == 0)) {
                    echo " checked=\"checked\" ";
                }
                echo ">
                                            ";
                // line 20
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", array()), "html", null, true);
                echo " <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("livraionAdresseSuppression", array("id" => twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()))), "html", null, true);
                echo "\"><i class=\"icon-trash\"></i></a>
                                            <br/>";
                // line 21
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "prenom", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "nom", array()), "html", null, true);
                echo "
                                        </label>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                                <br/><br/>

                                <h4>Adresse de facturation</h4>
                                ";
            // line 27
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["utilisateur"] ?? null), "adresses", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["adresse"]) {
                // line 28
                echo "                                    <label class=\"radio\">
                                        <input type=\"radio\" name=\"facturation\"  value=\"";
                // line 29
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "id", array()), "html", null, true);
                echo "\" ";
                if ((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", array()) == 0)) {
                    echo " checked=\"checked\" ";
                }
                echo ">
                                        ";
                // line 30
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "adresse", array()), "html", null, true);
                echo ", ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "cp", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "ville", array()), "html", null, true);
                echo " <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                        <br/>";
                // line 31
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "prenom", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["adresse"], "nom", array()), "html", null, true);
                echo "
                                    </label>
                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['adresse'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                                <br/>
                                <button class=\"btn btn-primary\">Valider mon panier</button>
                            </form>

                        ";
        }
        // line 39
        echo "
                    </div>
                    

\t\t\t\t\t\t\t\t<div class=\"span4 offset2\">
\t\t\t\t\t\t\t\t\t    <h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t\t<form action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_livraison");
        echo "\" method=\"POST\">
\t\t\t\t\t\t\t\t\t\t";
        // line 46
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? null), 'widget');
        echo "
                                        <br />
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\" type=\"submit\">Ajouter</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:livraison.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 46,  189 => 45,  181 => 39,  174 => 34,  155 => 31,  147 => 30,  139 => 29,  136 => 28,  119 => 27,  114 => 24,  95 => 21,  85 => 20,  77 => 19,  73 => 17,  56 => 16,  51 => 14,  46 => 11,  44 => 10,  35 => 3,  32 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "EcommerceEcommerceBundle:Ecommerce:livraison.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/livraison.html.twig");
    }
}
