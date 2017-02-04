<?php

/* OCPlatformBundle:Advert:pricing.html.twig */
class __TwigTemplate_bb364d30249a4f2b3152569a43068e99b06a2497868d50f1426a42837342acd4 extends Twig_Template
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
        $__internal_b7e1b00ead2bb149271c2fccf7a6bb569bec3428d32446aa33769a64eced922a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7e1b00ead2bb149271c2fccf7a6bb569bec3428d32446aa33769a64eced922a->enter($__internal_b7e1b00ead2bb149271c2fccf7a6bb569bec3428d32446aa33769a64eced922a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:pricing.html.twig"));

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
\t\t  ";
        // line 42
        echo twig_include($this->env, $context, "::nav.html.twig");
        echo "

\t<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url(";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/woman.jpg"), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>Pricing Plan</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<div id=\"fh5co-pricing\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Starter</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>9<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Basic</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>27<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box popular\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan pricing-plan-offer\">Pro <span>Best Offer</span></h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>74<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Unlimited</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>140<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div id=\"fh5co-started\" style=\"background-image:url(images/img_bg_2.jpg);\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Lets Get Started</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-default btn-lg\">Create A Free Course</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t ";
        // line 152
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
";
        // line 158
        $this->displayBlock('javascripts', $context, $blocks);
        // line 175
        echo "
\t</body>
</html>

";
        
        $__internal_b7e1b00ead2bb149271c2fccf7a6bb569bec3428d32446aa33769a64eced922a->leave($__internal_b7e1b00ead2bb149271c2fccf7a6bb569bec3428d32446aa33769a64eced922a_prof);

    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5ea98f6e6320fe6de8574ea5b1e8858e5c4e1300b48b01eba80c8e689b8d6d98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea98f6e6320fe6de8574ea5b1e8858e5c4e1300b48b01eba80c8e689b8d6d98->enter($__internal_5ea98f6e6320fe6de8574ea5b1e8858e5c4e1300b48b01eba80c8e689b8d6d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_5ea98f6e6320fe6de8574ea5b1e8858e5c4e1300b48b01eba80c8e689b8d6d98->leave($__internal_5ea98f6e6320fe6de8574ea5b1e8858e5c4e1300b48b01eba80c8e689b8d6d98_prof);

    }

    // line 158
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_715d9a7e9713246caef4fc40ca3ef16cee497f0739732a0603e3ea5deaa8610b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_715d9a7e9713246caef4fc40ca3ef16cee497f0739732a0603e3ea5deaa8610b->enter($__internal_715d9a7e9713246caef4fc40ca3ef16cee497f0739732a0603e3ea5deaa8610b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 159
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 170
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Google Map -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false\"></script>
    <script src=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google_map.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_715d9a7e9713246caef4fc40ca3ef16cee497f0739732a0603e3ea5deaa8610b->leave($__internal_715d9a7e9713246caef4fc40ca3ef16cee497f0739732a0603e3ea5deaa8610b_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:pricing.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  294 => 173,  288 => 170,  284 => 169,  280 => 168,  276 => 167,  272 => 166,  268 => 165,  264 => 164,  260 => 163,  256 => 162,  252 => 161,  246 => 159,  240 => 158,  229 => 31,  225 => 30,  221 => 29,  217 => 28,  213 => 27,  209 => 26,  204 => 25,  198 => 24,  187 => 175,  185 => 158,  176 => 152,  65 => 44,  60 => 42,  51 => 35,  49 => 24,  24 => 1,);
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
\t\t  {{ include(\"::nav.html.twig\") }}

\t<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url({{asset('images/woman.jpg')}});\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>Pricing Plan</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<div id=\"fh5co-pricing\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"pricing\">
\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Starter</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>9<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Basic</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>27<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box popular\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan pricing-plan-offer\">Pro <span>Best Offer</span></h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>74<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"col-md-3 animate-box\">
\t\t\t\t\t\t<div class=\"price-box\">
\t\t\t\t\t\t\t<h2 class=\"pricing-plan\">Unlimited</h2>
\t\t\t\t\t\t\t<div class=\"price\"><sup class=\"currency\">\$</sup>140<small>/month</small></div>
\t\t\t\t\t\t\t<ul class=\"classes\">
\t\t\t\t\t\t\t\t<li>15 English 101</li>
\t\t\t\t\t\t\t\t<li class=\"color\">10 Web Development</li>
\t\t\t\t\t\t\t\t<li>10 Yoga Classes</li>
\t\t\t\t\t\t\t\t<li class=\"color\">20 Virtual Assistant</li>
\t\t\t\t\t\t\t\t<li>10 System Analyst</li>
\t\t\t\t\t\t\t\t<li class=\"color\">5 WordPress</li>
\t\t\t\t\t\t\t\t<li>10 Programming</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-select-plan btn-sm\">Select Plan</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div id=\"fh5co-started\" style=\"background-image:url(images/img_bg_2.jpg);\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Lets Get Started</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<p><a href=\"#\" class=\"btn btn-default btn-lg\">Create A Free Course</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

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

", "OCPlatformBundle:Advert:pricing.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\src\\OC\\PlatformBundle/Resources/views/Advert/pricing.html.twig");
    }
}
