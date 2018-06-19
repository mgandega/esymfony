<?php

/* EcommerceEcommerceBundle:Ecommerce:adresses.html.twig */
class __TwigTemplate_b6212e380be9400eecf73eee5662235994db18012731165b65afda7fef3f59ed extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "<div class=\"container\">
    <div class=\"row\">
              
        <div class=\"span9\">

        ";
        // line 8
        $this->loadTemplate("::navigation.html.twig", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig", 8)->display($context);
        echo "      
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                                <div class=\"span4\">
                                    <form action=\"validation.php\">
                                        <h4 class=\"radio\">Adresses de livraisons</h4>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                    </form>
                                </div>

\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Code postal</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
                                        
\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
                                        
\t\t\t\t\t\t\t\t\t\t<label>Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">                                        
                                        
                                        <br />
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
                </div>
            </div>
                        
\t\t</div>
\t</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 8,  53 => 3,  44 => 2,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{%block body%}
<div class=\"container\">
    <div class=\"row\">
              
        <div class=\"span9\">

        {% include \"::navigation.html.twig\" %}      
            <h2>Livraison</h2>
            <div id=\"collapseOne\" class=\"accordion-body collapse in\">
                <div class=\"accordion-inner\">
                                <div class=\"span4\">
                                    <form action=\"validation.php\">
                                        <h4 class=\"radio\">Adresses de livraisons</h4>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                        <label class=\"radio\">
                                            3b rue jules paulo, 75 000 Paris 
                                            <a href=\"#\"><i class=\"icon-trash\"></i></a>
                                            <a href=\"#\"><i class=\"icon-refresh\"></i></a>
                                        </label>
                                    </form>
                                </div>

\t\t\t\t\t\t\t\t<div class=\"span4\">
\t\t\t\t\t\t\t\t\t<h4>Ajouter une nouvelle adresse</h4>
\t\t\t\t\t\t\t\t\t<form>
\t\t\t\t\t\t\t\t\t\t<label>Nom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Prénom</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Adresse</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t<label>Code postal</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
                                        
\t\t\t\t\t\t\t\t\t\t<label>Ville</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">
                                        
\t\t\t\t\t\t\t\t\t\t<label>Téléphone</label>
\t\t\t\t\t\t\t\t\t\t<input type=\"text\">                                        
                                        
                                        <br />
\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-primary\">Ajouter</button>
\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t
                </div>
            </div>
                        
\t\t</div>
\t</div>
{%endblock%}", "EcommerceEcommerceBundle:Ecommerce:adresses.html.twig", "/var/www/html/esymfony/src/Ecommerce/EcommerceBundle/Resources/views/Ecommerce/adresses.html.twig");
    }
}
