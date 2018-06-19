<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_ab12a0293526ec30126a5e550161f4c20d4fefd2d33bd371990e10e3b9384d4f extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show_content.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 12, $this->source); })()), "username", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t    <p>  Votre e-mail: ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new Twig_Error_Runtime('Variable "user" does not exist.', 13, $this->source); })()), "email", array()), "html", null, true);
        echo "</p>
\t\t\t\t\t\t</div>

                    </div>
                </div>
            </div>
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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
        return array (  45 => 13,  41 => 12,  29 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#       {% include '::navigation.html.twig' %} #}
        
        <div class=\"span9\">
            <h2>Mes informations</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    
                    <div class=\"span4\">
                        <h4>Modifier mes informations</h4>
                       
\t\t\t\t\t\t<div class=\"fos_user_user_show\">
\t\t\t\t\t\t    <p>  Votre prenom: {{ user.username }}</p>
\t\t\t\t\t\t    <p>  Votre e-mail: {{ user.email }}</p>
\t\t\t\t\t\t</div>

                    </div>
                </div>
            </div>
        </div>", "FOSUserBundle:Profile:show_content.html.twig", "/var/www/html/esymfony/app/Resources/FOSUserBundle/views/Profile/show_content.html.twig");
    }
}
