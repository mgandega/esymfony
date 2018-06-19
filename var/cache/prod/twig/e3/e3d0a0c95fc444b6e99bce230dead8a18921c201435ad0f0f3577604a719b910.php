<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_16972f5743b9c196e825a0d53a713abe2fc60f351bb45088ac23f2c79ae89a53 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "FOSUserBundle:Resetting:request_content.html.twig", 1);
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
        echo "<div class=\"container\">
    <div class=\"row\">
        <div class=\"span12\">
            <h2>Mot de passe perdu</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                    <div class=\"span4\">
                        <h4>Vous avez perdu votre mot de passe ?</h4>
                        <em>
                            Compléter le formulaire, un email vous seras envoyé.<br />
                            Il contiendra la procèdure à suivre pour récupérer votre mot de passe.
                        </em>
                    </div>
                    
                    <div class=\"span4 offset2\">
                        <form action=\"";
        // line 19
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
                            <label for=\"username\">Adresse email</label>
                            <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
                            <br />
                            
                            <input type=\"submit\" value=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("envoyer"), "html", null, true);
        echo "\"  class=\"btn btn-primary\"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 24,  52 => 19,  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "FOSUserBundle:Resetting:request_content.html.twig", "/var/www/html/esymfony/app/Resources/FOSUserBundle/views/Resetting/request_content.html.twig");
    }
}
