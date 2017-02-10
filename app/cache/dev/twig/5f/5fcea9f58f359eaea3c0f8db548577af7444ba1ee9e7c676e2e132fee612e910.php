<?php

/* OCPlatformBundle:Advert:log_reg.html.twig */
class __TwigTemplate_dc2b09073462a0ed377189d327d24e2e41dda8c4aa7b1338fefcba7b4d351ae7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_069416b13b8fe78059f2b715e5159b1cefdb09782f2bb4a4092199e0244d9b8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_069416b13b8fe78059f2b715e5159b1cefdb09782f2bb4a4092199e0244d9b8f->enter($__internal_069416b13b8fe78059f2b715e5159b1cefdb09782f2bb4a4092199e0244d9b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:log_reg.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Learn &mdash;</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\" />
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"\" />


  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t";
        // line 24
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "
\t</head>
\t<body>
\t\t
\t<div class=\"fh5co-loader\"></div>
\t
\t<div id=\"page\">
    ";
        // line 42
        echo twig_include($this->env, $context, "::nav.html.twig");
        echo "

\t<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url(";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/diverse.jpg"), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>Join Us</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

     ";
        // line 59
        echo twig_include($this->env, $context, "::form_log_reg.html.twig");
        echo "

\t
\t ";
        // line 62
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
";
        // line 68
        $this->displayBlock('javascripts', $context, $blocks);
        // line 85
        echo "
\t</body>
</html>

";
        
        $__internal_069416b13b8fe78059f2b715e5159b1cefdb09782f2bb4a4092199e0244d9b8f->leave($__internal_069416b13b8fe78059f2b715e5159b1cefdb09782f2bb4a4092199e0244d9b8f_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f671ebba1dba485a1e56015070e5202aa4b81c431f192649c2304ce8af118089 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f671ebba1dba485a1e56015070e5202aa4b81c431f192649c2304ce8af118089->enter($__internal_f671ebba1dba485a1e56015070e5202aa4b81c431f192649c2304ce8af118089_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 25
        echo "   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        
<link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800\" rel=\"stylesheet\">
    ";
        
        $__internal_f671ebba1dba485a1e56015070e5202aa4b81c431f192649c2304ce8af118089->leave($__internal_f671ebba1dba485a1e56015070e5202aa4b81c431f192649c2304ce8af118089_prof);

    }

    // line 68
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f3a61ceec478192caa767858fde029fa055c204efcb773d9af907dc67de129b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3a61ceec478192caa767858fde029fa055c204efcb773d9af907dc67de129b9->enter($__internal_f3a61ceec478192caa767858fde029fa055c204efcb773d9af907dc67de129b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 69
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Google Map -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false\"></script>
    <script src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google_map.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f3a61ceec478192caa767858fde029fa055c204efcb773d9af907dc67de129b9->leave($__internal_f3a61ceec478192caa767858fde029fa055c204efcb773d9af907dc67de129b9_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:log_reg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 83,  201 => 80,  197 => 79,  193 => 78,  189 => 77,  185 => 76,  181 => 75,  177 => 74,  173 => 73,  169 => 72,  165 => 71,  159 => 69,  153 => 68,  142 => 31,  138 => 30,  134 => 29,  130 => 28,  126 => 27,  122 => 26,  117 => 25,  111 => 24,  100 => 85,  98 => 68,  89 => 62,  83 => 59,  65 => 44,  60 => 42,  51 => 35,  49 => 24,  24 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html>
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Learn &mdash;</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\" />
\t<meta name=\"keywords\" content=\"\" />
\t<meta name=\"author\" content=\"\" />


  \t<!-- Facebook and Twitter integration -->
\t<meta property=\"og:title\" content=\"\"/>
\t<meta property=\"og:image\" content=\"\"/>
\t<meta property=\"og:url\" content=\"\"/>
\t<meta property=\"og:site_name\" content=\"\"/>
\t<meta property=\"og:description\" content=\"\"/>
\t<meta name=\"twitter:title\" content=\"\" />
\t<meta name=\"twitter:image\" content=\"\" />
\t<meta name=\"twitter:url\" content=\"\" />
\t<meta name=\"twitter:card\" content=\"\" />

\t{% block stylesheets %}
   <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />
        
<link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800\" rel=\"stylesheet\">
    {% endblock %}

\t</head>
\t<body>
\t\t
\t<div class=\"fh5co-loader\"></div>
\t
\t<div id=\"page\">
    {{ include(\"::nav.html.twig\") }}

\t<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url({{ asset('images/diverse.jpg') }});\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>Join Us</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

     {{ include(\"::form_log_reg.html.twig\") }}

\t
\t {{ include(\"::footer.html.twig\") }}
\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
{% block javascripts %}
    <script src=\"{{ asset('modernizr-2.6.2.min.js') }}\"></script>
    
    <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.stellar.min.js') }}\"></script>
        <script src=\"{{ asset('js/owl.carousel.min.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.countTo.js') }}\"></script>
        <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
        <script src=\"{{ asset('js/magnific-popup-options.js') }}\"></script>
        <script src=\"{{ asset('js/main.js') }}\"></script>
    \t<!-- Google Map -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false\"></script>
    <script src=\"{{ asset('js/google_map.js') }}\"></script>
{% endblock %}

\t</body>
</html>

", "OCPlatformBundle:Advert:log_reg.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\src\\OC\\PlatformBundle/Resources/views/Advert/log_reg.html.twig");
    }
}
