<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_53b30970dc7d7be8fa27a782368f996bdaa354ccdcb8fb68b6274b2377a0e5a6 extends Twig_Template
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
        // line 2
        echo "        
        <div class=\"span9\">
            <h2>Mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Modifier mes informations</h4>
                       
\t\t\t\t\t\t<div class=\"fos_user_user_show\">
\t\t\t\t\t\t    <p>  Votre prenom: ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "username", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t    <p>  Votre e-mail: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["user"] ?? null), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>

                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  35 => 12,  23 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/esymfony/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
