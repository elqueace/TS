<?php

/* OCPlatformBundle:Advert:contact.html.twig */
class __TwigTemplate_4c17a5c8e91bfaaf97e440ed85326490999e60448e67b90b9de0eed5df5e4bc0 extends Twig_Template
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
        $__internal_d2b1b556eb85f7a8e915e62297cb66a9b01b9570e870ec8f7d781f69eb0537a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b1b556eb85f7a8e915e62297cb66a9b01b9570e870ec8f7d781f69eb0537a7->enter($__internal_d2b1b556eb85f7a8e915e62297cb66a9b01b9570e870ec8f7d781f69eb0537a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:contact.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
\t<head>
\t<meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Learn &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Website Template by freehtml5.co\" />
\t<meta name=\"keywords\" content=\"free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"freehtml5.co\" />

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
\t
\t";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 34
        echo "
\t</head>
\t<body>
\t\t
\t<div class=\"fh5co-loader\"></div>
\t
\t<div id=\"page\">
\t\t  ";
        // line 41
        echo twig_include($this->env, $context, "::nav.html.twig");
        echo "


\t<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url(";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/img_bg_22.jpg"), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>Contact Us</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<div id=\"fh5co-contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-push-1 animate-box\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"fh5co-contact-info\">
\t\t\t\t\t\t<h3>Contact Information</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"address\">7682 8e Avenue <br> Montreal App 5 H2A 3E2</li>
\t\t\t\t\t\t\t<li class=\"phone\"><a href=\"tel://1234567920\">(438)939-6037</a></li>
\t\t\t\t\t\t\t<li class=\"email\"><a href=\"mailto:ludovic.lecurieux@gmail.com\">ludovic.lecurieux@gmail.com</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t<h3>Get In Touch</h3>
\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<!-- <label for=\"fname\">First Name</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"fname\" class=\"form-control\" placeholder=\"Your firstname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<!-- <label for=\"lname\">Last Name</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"lname\" class=\"form-control\" placeholder=\"Your lastname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<!-- <label for=\"email\">Email</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"email\" class=\"form-control\" placeholder=\"Your email address\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<!-- <label for=\"subject\">Subject</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"subject\" class=\"form-control\" placeholder=\"Your subject of this message\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<!-- <label for=\"message\">Message</label> -->
\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Say something about us\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t<div id=\"map\" class=\"fh5co-map\"></div>
\t<div id=\"fh5co-started\" style=\"background-image:url(";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/versus.jpg"), "html", null, true);
        echo ");\">
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
\t  ";
        // line 135
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "

\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
\t
\t
    ";
        // line 144
        $this->displayBlock('javascripts', $context, $blocks);
        // line 161
        echo "
\t</body>
</html>

";
        
        $__internal_d2b1b556eb85f7a8e915e62297cb66a9b01b9570e870ec8f7d781f69eb0537a7->leave($__internal_d2b1b556eb85f7a8e915e62297cb66a9b01b9570e870ec8f7d781f69eb0537a7_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_746115b23bb6368e8199973baf47ab2686c3236972d927976f7524caddd29f97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_746115b23bb6368e8199973baf47ab2686c3236972d927976f7524caddd29f97->enter($__internal_746115b23bb6368e8199973baf47ab2686c3236972d927976f7524caddd29f97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 24
        echo "   <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />
        
<link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800\" rel=\"stylesheet\">
    ";
        
        $__internal_746115b23bb6368e8199973baf47ab2686c3236972d927976f7524caddd29f97->leave($__internal_746115b23bb6368e8199973baf47ab2686c3236972d927976f7524caddd29f97_prof);

    }

    // line 144
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5193497ca48f2edd02af167546fea4f4a0091226b73f335066176caa56cd03be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5193497ca48f2edd02af167546fea4f4a0091226b73f335066176caa56cd03be->enter($__internal_5193497ca48f2edd02af167546fea4f4a0091226b73f335066176caa56cd03be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 145
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 153
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    \t<!-- Google Map -->
\t<script src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false\"></script>
    <script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/google_map.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5193497ca48f2edd02af167546fea4f4a0091226b73f335066176caa56cd03be->leave($__internal_5193497ca48f2edd02af167546fea4f4a0091226b73f335066176caa56cd03be_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 159,  277 => 156,  273 => 155,  269 => 154,  265 => 153,  261 => 152,  257 => 151,  253 => 150,  249 => 149,  245 => 148,  241 => 147,  235 => 145,  229 => 144,  218 => 30,  214 => 29,  210 => 28,  206 => 27,  202 => 26,  198 => 25,  193 => 24,  187 => 23,  176 => 161,  174 => 144,  162 => 135,  143 => 119,  65 => 44,  59 => 41,  50 => 34,  48 => 23,  24 => 1,);
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
\t<title>Learn &mdash; Free Website Template, Free HTML5 Template by freehtml5.co</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"Free HTML5 Website Template by freehtml5.co\" />
\t<meta name=\"keywords\" content=\"free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive\" />
\t<meta name=\"author\" content=\"freehtml5.co\" />

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
\t
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


\t<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url({{ asset('images/img_bg_22.jpg') }});\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>Contact Us</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<div id=\"fh5co-contact\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-5 col-md-push-1 animate-box\">
\t\t\t\t\t
\t\t\t\t\t<div class=\"fh5co-contact-info\">
\t\t\t\t\t\t<h3>Contact Information</h3>
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"address\">7682 8e Avenue <br> Montreal App 5 H2A 3E2</li>
\t\t\t\t\t\t\t<li class=\"phone\"><a href=\"tel://1234567920\">(438)939-6037</a></li>
\t\t\t\t\t\t\t<li class=\"email\"><a href=\"mailto:ludovic.lecurieux@gmail.com\">ludovic.lecurieux@gmail.com</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-6 animate-box\">
\t\t\t\t\t<h3>Get In Touch</h3>
\t\t\t\t\t<form action=\"#\">
\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<!-- <label for=\"fname\">First Name</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"fname\" class=\"form-control\" placeholder=\"Your firstname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t\t\t<!-- <label for=\"lname\">Last Name</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"lname\" class=\"form-control\" placeholder=\"Your lastname\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<!-- <label for=\"email\">Email</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"email\" class=\"form-control\" placeholder=\"Your email address\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<!-- <label for=\"subject\">Subject</label> -->
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"subject\" class=\"form-control\" placeholder=\"Your subject of this message\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"row form-group\">
\t\t\t\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t\t\t\t<!-- <label for=\"message\">Message</label> -->
\t\t\t\t\t\t\t\t<textarea name=\"message\" id=\"message\" cols=\"30\" rows=\"10\" class=\"form-control\" placeholder=\"Say something about us\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<input type=\"submit\" value=\"Send Message\" class=\"btn btn-primary\">
\t\t\t\t\t\t</div>

\t\t\t\t\t</form>\t\t
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t</div>
\t</div>
\t<div id=\"map\" class=\"fh5co-map\"></div>
\t<div id=\"fh5co-started\" style=\"background-image:url({{ asset('images/versus.jpg') }});\">
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
\t  {{ include(\"::footer.html.twig\") }}

\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
\t
\t
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

", "OCPlatformBundle:Advert:contact.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\src\\OC\\PlatformBundle/Resources/views/Advert/contact.html.twig");
    }
}
