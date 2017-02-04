<?php

/* OCPlatformBundle:Advert:about.html.twig */
class __TwigTemplate_7e7d4f908e00f9f377b1d99f04b499c97d5606d08476abce5f7c2766400478fb extends Twig_Template
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

        ";
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
\t\t\t  ";
        // line 42
        echo twig_include($this->env, $context, "::nav.html.twig");
        echo "

\t<header id=\"fh5co-header\" class=\"fh5co-cover fh5co-cover-sm\" role=\"banner\" style=\"background-image:url(";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/versus2.jpg"), "html", null, true);
        echo ");\" data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\"></div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>About Us</h1>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</header>

\t<div id=\"fh5co-explore\" class=\"fh5co-bg-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center fh5co-heading\">
\t\t\t\t\t<h2>Take A Course</h2>
\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>\t\t
\t\t<div class=\"fh5co-explore fh5co-explore1\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-push-5 animate-box\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"images/work_1.png\" alt=\"work\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 col-md-pull-8 animate-box\">
\t\t\t\t\t\t<div class=\"mt\">
\t\t\t\t\t\t\t<h3>We Want You To Learn English</h3>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<ul class=\"list-nav\">
\t\t\t\t\t\t\t\t<li><i class=\"icon-check2\"></i>Far far away, behind the word</li>
\t\t\t\t\t\t\t\t<li><i class=\"icon-check2\"></i>There live the blind texts</li>
\t\t\t\t\t\t\t\t<li><i class=\"icon-check2\"></i>Separated they live in bookmarksgrove</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-lg popup-vimeo btn-video\" href=\"https://vimeo.com/channels/staffpicks/93951774\"><i class=\"icon-play\"></i> Watch Video</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

\t\t<div class=\"fh5co-explore\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-8 col-md-pull-1 animate-box\">
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/work_1.png"), "html", null, true);
        echo "\" alt=\"work\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<div class=\"mt\">
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4><i class=\"icon-user\"></i>Real Project For Real Solutions</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4><i class=\"icon-video2\"></i>Real Project For Real Solutions</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t<h4><i class=\"icon-shield\"></i>Real Project For Real Solutions</h4>
\t\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"fh5co-project\">
\t\t<div class=\"container-fluid proj-bottom\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-1.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Web Master</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-2.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Virtual Assistant</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-3.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Read Bible</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-9.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Programming</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-5.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Technician</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-6.jpg"), "html", null, true);
        echo "\" alt=\"Free HTML5 Website Template by FreeHTML5.co\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Photography</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"features\">
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<h4>We have coolest features of this course</h4>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<h4>Great teachers that we have</h4>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-4 animate-box\">
\t\t\t\t\t\t<h4>Steps by steps turorial session</h4>
\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.  </p>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-12 text-center animate-box\">
\t\t\t\t\t<p><a class=\"btn btn-primary btn-lg btn-learn\" href=\"#\">Create A Free Course</a></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t<div id=\"fh5co-started\" style=\"background-image:url(";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/surprised.jpg"), "html", null, true);
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

\t\t ";
        // line 198
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "

\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
\t
        ";
        // line 206
        $this->displayBlock('javascripts', $context, $blocks);
        // line 220
        echo "\t
\t</body>
</html>

";
    }

    // line 24
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 206
    public function block_javascripts($context, array $blocks = array())
    {
        // line 207
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 210
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 213
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 214
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 215
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:about.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  345 => 218,  341 => 217,  337 => 216,  333 => 215,  329 => 214,  325 => 213,  321 => 212,  317 => 211,  313 => 210,  309 => 209,  303 => 207,  300 => 206,  292 => 31,  288 => 30,  284 => 29,  280 => 28,  276 => 27,  272 => 26,  267 => 25,  264 => 24,  256 => 220,  254 => 206,  243 => 198,  223 => 181,  190 => 151,  181 => 145,  172 => 139,  163 => 133,  154 => 127,  145 => 121,  115 => 94,  62 => 44,  57 => 42,  48 => 35,  46 => 24,  21 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "OCPlatformBundle:Advert:about.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\src\\OC\\PlatformBundle/Resources/views/Advert/about.html.twig");
    }
}
