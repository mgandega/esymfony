<?php

/* ::base.html.twig */
class __TwigTemplate_98240a98ffa2fa266878c2ec41f953b87d706caf9a3f7750b3222734a71c982d extends Twig_Template
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
        echo twig_escape_filter($this->env, ($context["adresse"] ?? null), "html", null, true);
        echo "</p>
                </div>

                <div class=\"span2\">
                    <h4>Nous contacter</h4>
                    <p><i class=\"icon-phone\"></i>&nbsp;<strong>Tel</strong>: ";
        // line 68
        echo twig_escape_filter($this->env, ($context["telephone"] ?? null), "html", null, true);
        echo "</p>
                    <p><i class=\"icon-print\"></i>&nbsp;<strong>Fax</strong>: ";
        // line 69
        echo twig_escape_filter($this->env, ($context["fax"] ?? null), "html", null, true);
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
    }

    // line 5
    public function block_motscles($context, array $blocks = array())
    {
        echo " Omega Vision ";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
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
        return array (  166 => 38,  160 => 5,  152 => 82,  148 => 81,  144 => 80,  136 => 75,  127 => 69,  123 => 68,  115 => 63,  107 => 57,  103 => 52,  88 => 39,  86 => 38,  78 => 32,  73 => 26,  67 => 23,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  35 => 6,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::base.html.twig", "/var/www/html/esymfony/app/Resources/views/base.html.twig");
    }
}
