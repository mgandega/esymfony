<?php

/* FOSUserBundle:Security:login_content.html.twig */
class __TwigTemplate_826e4c58d73b4931a7905035a7a5050a426a1eb38d219960e537ae4d2ab1cd52 extends Twig_Template
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
        // line 1
        if (($context["error"] ?? null)) {
            echo "   
    <div class=\"alert alert-danger\">
         <strong>";
            // line 3
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageKey", array()), twig_get_attribute($this->env, $this->source, ($context["error"] ?? null), "messageData", array()), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? null)) {
            // line 27
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? null), "html", null, true);
            echo "\" />
    ";
        }
        // line 29
        echo "
        <label for=\"username\">Nom d'utilisateur</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, ($context["last_username"] ?? null), "html", null, true);
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
        return array (  91 => 45,  74 => 31,  70 => 29,  64 => 27,  62 => 26,  58 => 25,  49 => 19,  34 => 6,  28 => 3,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Security:login_content.html.twig", "/var/www/html/esymfony/app/Resources/FOSUserBundle/views/Security/login_content.html.twig");
    }
}
