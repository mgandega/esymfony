<?php

/* ::base.html.twig */
class __TwigTemplate_4ba9062ba35710926e8b7a3297f3af8106f4addcc1dc8d78e2d7791cf2649662 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'motscles' => array($this, 'block_motscles'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\" />
    <title> ";
        // line 5
        $this->displayBlock('motscles', $context, $blocks);
        echo " </title>
    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font-awesome.css"), "html", null, true);
        echo "\" />
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ckeditor/contents.css"), "html", null, true);
        echo "\" />

 <!--   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    -->
</head>
<body>


<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">

            <a class=\"brand\" href=\"";
        // line 23
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ecommerce_homepage");
        echo "\">Omega Vision</a>
            <div class=\"nav-collapse collapse\">
                
            ";
        // line 26
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("EcommerceEcommerceBundle:Ecommerce:recherche"));
        echo "

";
        // line 32
        echo "            </div>
        </div>
    </div>
</div>

 
";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "  
    



    <hr />

    <footer id=\"footer\" class=\"vspace20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4 offset1\">
                    <h4>Informations</h4>
                    <p class=\"nav nav-stacked\">
                       ";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment(Symfony\Bridge\Twig\Extension\HttpKernelExtension::controller("PagesBundle:Default:menu"));
        echo "
                    ";
        // line 57
        echo "                    </p>
                    
                </div> 

                <div class=\"span4\">
                    <h4>Notre entrepôt</h4>
                    <p><i class=\"icon-map-marker\"></i><strong>Adresse</strong>: ";
        // line 63
        echo twig_escape_filter($this->env, (isset($context["adresse"]) || array_key_exists("adresse", $context) ? $context["adresse"] : (function () { throw new Twig_Error_Runtime('Variable "adresse" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "</p>
                </div>

                <div class=\"span2\">
                    <h4>Nous contacter</h4>
                    <p><i class=\"icon-phone\"></i>&nbsp;<strong>Tel</strong>: ";
        // line 68
        echo twig_escape_filter($this->env, (isset($context["telephone"]) || array_key_exists("telephone", $context) ? $context["telephone"] : (function () { throw new Twig_Error_Runtime('Variable "telephone" does not exist.', 68, $this->source); })()), "html", null, true);
        echo "</p>
                    <p><i class=\"icon-print\"></i>&nbsp;<strong>Fax</strong>: ";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["fax"]) || array_key_exists("fax", $context) ? $context["fax"] : (function () { throw new Twig_Error_Runtime('Variable "fax" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "</p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright ";
        // line 75
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "- Mon site de teste</p>
                </div>
            </div>
        </div>
    </footer>   
    <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery-1.10.0.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("ckeditor/ckeditor.js"), "html", null, true);
        echo "\"></script>

</body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_motscles($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motscles"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "motscles"));

        echo " Omega Vision ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 38,  172 => 5,  158 => 82,  154 => 81,  150 => 80,  142 => 75,  133 => 69,  129 => 68,  121 => 63,  113 => 57,  109 => 52,  94 => 39,  92 => 38,  84 => 32,  79 => 26,  73 => 23,  57 => 10,  53 => 9,  49 => 8,  45 => 7,  41 => 6,  37 => 5,  31 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html\" charset=\"utf-8\" />
    <title> {% block motscles %} Omega Vision {% endblock %} </title>
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('css/bootstrap-responsive.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('css/style.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('css/font-awesome.css')}}\" />
    <link rel=\"stylesheet\" href=\"{{asset('ckeditor/contents.css')}}\" />

 <!--   <script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>
    <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>
    -->
</head>
<body>


<div class=\"navbar navbar-inverse navbar-fixed-top\">
    <div class=\"navbar-inner\">
        <div class=\"container\">

            <a class=\"brand\" href=\"{{ path('ecommerce_homepage') }}\">Omega Vision</a>
            <div class=\"nav-collapse collapse\">
                
            {{ render(controller('EcommerceEcommerceBundle:Ecommerce:recherche')) }}

{#             <form action=\"{{ecommerce_recherche}}\" method=\"POST\" class=\"navbar-form form-search pull-right\"> #}
{#                    <input id=\"Search\" name=\"Search\" type=\"text\" class=\"input-medium search-query\"> #}
{#                    <input type=\"submit\" class=\"btn\" value=\"Rechercher\"><nav>Rechercher</nav> #}
{#               </form> #}
            </div>
        </div>
    </div>
</div>

 
{% block body %}
{% endblock %}  
    



    <hr />

    <footer id=\"footer\" class=\"vspace20\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"span4 offset1\">
                    <h4>Informations</h4>
                    <p class=\"nav nav-stacked\">
                       {{ render(controller('PagesBundle:Default:menu')) }}
                    {#
                        <li><a href=\"texte.php\">CGV</a>
                        <li><a href=\"texte.php\">Mentions légales</a>
                    #}
                    </p>
                    
                </div> 

                <div class=\"span4\">
                    <h4>Notre entrepôt</h4>
                    <p><i class=\"icon-map-marker\"></i><strong>Adresse</strong>: {{ adresse }}</p>
                </div>

                <div class=\"span2\">
                    <h4>Nous contacter</h4>
                    <p><i class=\"icon-phone\"></i>&nbsp;<strong>Tel</strong>: {{ telephone }}</p>
                    <p><i class=\"icon-print\"></i>&nbsp;<strong>Fax</strong>: {{ fax }}</p>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"span4\">
                    <p>&copy; Copyright {{ \"now\"|date(\"Y\") }}- Mon site de teste</p>
                </div>
            </div>
        </div>
    </footer>   
    <script src=\"{{asset('js/jquery-1.10.0.min.js')}}\"></script>
    <script src=\"{{asset('js/bootstrap.js')}}\"></script>
<script src=\"{{asset('ckeditor/ckeditor.js')}}\"></script>

</body>
</html>", "::base.html.twig", "/var/www/html/esymfony/app/Resources/views/base.html.twig");
    }
}
