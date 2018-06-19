<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_4f3ef14eec69ab39da5fca880980ac41141c8160f4730ab1a3f7945008b561de extends Twig_Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login_content.html.twig"));

        // line 1
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 1, $this->source); })())) {
            echo "   
    <div class=\"alert alert-danger\">
         <strong>";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->source); })()), "messageKey", array()), twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 3, $this->source); })()), "messageData", array()), "security"), "html", null, true);
            echo "</strong> 
    </div>
";
        }
        // line 6
        echo "

        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                        <br /><br />
                        <a href=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_registration_register");
        echo "\" class=\"btn btn-primary\">S'inscrire</a>
                        
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 26
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 26, $this->source); })())) {
            // line 27
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 27, $this->source); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 29
        echo "
        <label for=\"username\">Nom d'utilisateur</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">Mot de passe</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <br/>

    <span >Se rappeler de moi</span>
\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <br/><br/>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
</form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_request");
        echo "\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 45,  80 => 31,  76 => 29,  70 => 27,  68 => 26,  64 => 25,  55 => 19,  40 => 6,  34 => 3,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if error %}   
    <div class=\"alert alert-danger\">
         <strong>{{ error.messageKey|trans(error.messageData, 'security') }}</strong> 
    </div>
{% endif %}


        <div class=\"span12\">
            <h2>Connexion</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Pas encore inscrit ?</h4>
                        <em>
                            nous vous invitons à vous inscrire<br />
                            afin de passer votre commande et de manger équilibré.
                        </em>
                        <br /><br />
                        <a href=\"{{path('fos_user_registration_register')}}\" class=\"btn btn-primary\">S'inscrire</a>
                        
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <h4>Connexion</h4>
                        <form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

        <label for=\"username\">Nom d'utilisateur</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />

    <label for=\"password\">Mot de passe</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    <br/>

    <span >Se rappeler de moi</span>
\t<input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <br/><br/>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Valider\" />
</form>
                    </div>
                    <div class=\"span10\">
                        <a href=\"{{path('fos_user_resetting_request')}}\">Mot de passe perdu ?</a>
                    </div>
                </div>
            </div>
        </div>", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/esymfony/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
