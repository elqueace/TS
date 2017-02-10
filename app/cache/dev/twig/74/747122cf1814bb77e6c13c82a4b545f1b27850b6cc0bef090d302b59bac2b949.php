<?php

/* ::layout.html.twig */
class __TwigTemplate_c325f73c1c8135e01687ea035644617f5f7dcba53d3bc0e2191d64708d6e82ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2a441271e435d2b3ec81ea12fda2af4d23a85cf67fa424005277bf05a24b947 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2a441271e435d2b3ec81ea12fda2af4d23a85cf67fa424005277bf05a24b947->enter($__internal_f2a441271e435d2b3ec81ea12fda2af4d23a85cf67fa424005277bf05a24b947_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Learn &mdash;</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\" />
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>";
        // line 27
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

  ";
        // line 29
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 40
        echo "  ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "</head>

<body>
\t\t
\t<div class=\"fh5co-loader\"></div>
\t
\t<div id=\"page\">
\t  ";
        // line 63
        echo twig_include($this->env, $context, "::nav.html.twig");
        echo "

\t<header id=\"fh5co-header\" class=\"fh5co-cover\" role=\"banner\"  data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\">
\t\t\t\t\t<div  style=\"width: 100%; height:100%;\"
                      data-vide-bg=\"mp4: ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("video/tutorskills_home"), "html", null, true);
        echo ", webm: ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("video/vid1"), "html", null, true);
        echo ", ogv: vid1, poster: video/vid1\"
                      data-vide-options=\"resizing: true\">
<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>The Art of Teaching is the Art of Assisting Discovery</h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-lg btn-learn\" href=\"#\">Take A Course</a> <a class=\"btn btn-primary btn-lg popup-vimeo btn-video\" href=\"https://vimeo.com/channels/staffpicks/93951774\"><i class=\"icon-play\"></i> Watch Video</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
               
                    </div>
\t\t
\t\t</div>
\t</header>

\t<div id=\"fh5co-counter\" class=\"fh5co-counters\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"40356\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Students</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"30290\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Courses</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"2039\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Instructor</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"997585\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Earnings</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

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
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/work_1.png"), "html", null, true);
        echo "\" alt=\"work\">
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
\t\t\t\t\t\t<img class=\"img-responsive\"  src=\"";
        // line 146
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/work_1.png"), "html", null, true);
        echo "\"  alt=\"work\">
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
\t
\t<div id=\"fh5co-project\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Showcase of A Finish Projects</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid proj-bottom\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img  src=\"";
        // line 181
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-1.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Web Master</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-2.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Virtual Assistant</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-3.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Read Bible</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-9.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Programming</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-5.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Technician</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"";
        // line 211
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-6.jpg"), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive\">
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

\t<div id=\"fh5co-steps\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Start A Course</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row bs-wizard animate-box\" style=\"border-bottom:0;\">
                
\t\t\t\t<div class=\"col-xs-3 bs-wizard-step complete\">
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 1</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Create A Free Course</p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-3 bs-wizard-step active\"><!-- complete -->
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 2</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Upload Content</p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-3 bs-wizard-step disabled\"><!-- complete -->
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 3</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Make Your Course Beautiful</p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-3 bs-wizard-step disabled\"><!-- active -->
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 4</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Start Making Money</p></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div id=\"fh5co-testimonial\" class=\"fh5co-bg-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center fh5co-heading\">
\t\t\t\t\t<h2>Testimonials</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t<div class=\"row animate-box\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-carousel-fullwidth\">
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-slide active text-center\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 298
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/person_1.jpg"), "html", null, true);
        echo "\" alt=\"user\">
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<span>Jean Doe, via <a href=\"#\" class=\"twitter\">Twitter</a></span>
\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-slide active text-center\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/person_2.jpg"), "html", null, true);
        echo "\" alt=\"user\">
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<span>John Doe, via <a href=\"#\" class=\"twitter\">Twitter</a></span>
\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-slide active text-center\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 320
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/person_3.jpg"), "html", null, true);
        echo "\" alt=\"user\">
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<span>John Doe, via <a href=\"#\" class=\"twitter\">Twitter</a></span>
\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"fh5co-blog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Recent Post</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-4.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t<h3><a href=\"\"#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
\t\t\t\t\t\t\t<span class=\"posted_on\">Nov. 15th</span>
\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Read More</a>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-2.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t<h3><a href=\"\"#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
\t\t\t\t\t\t\t<span class=\"posted_on\">Nov. 15th</span>
\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Read More</a>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/project-3.jpg"), "html", null, true);
        echo "\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t<h3><a href=\"\"#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
\t\t\t\t\t\t\t<span class=\"posted_on\">Nov. 15th</span>
\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Read More</a>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div id=\"fh5co-started\" style=\"background-image:url(";
        // line 385
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/diverse.jpg"), "html", null, true);
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

\t ";
        // line 402
        echo twig_include($this->env, $context, "::footer.html.twig");
        echo "
\t</div>

\t<div class=\"gototop js-top\">
\t\t<a href=\"#\" class=\"js-gotop\"><i class=\"icon-arrow-up\"></i></a>
\t</div>
\t</body>
</html>";
        
        $__internal_f2a441271e435d2b3ec81ea12fda2af4d23a85cf67fa424005277bf05a24b947->leave($__internal_f2a441271e435d2b3ec81ea12fda2af4d23a85cf67fa424005277bf05a24b947_prof);

    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        $__internal_1dd3f3cf637da27c621896ed6b657ead2244841255c3e6ea6392aa46d334be66 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dd3f3cf637da27c621896ed6b657ead2244841255c3e6ea6392aa46d334be66->enter($__internal_1dd3f3cf637da27c621896ed6b657ead2244841255c3e6ea6392aa46d334be66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Application web de tchat";
        
        $__internal_1dd3f3cf637da27c621896ed6b657ead2244841255c3e6ea6392aa46d334be66->leave($__internal_1dd3f3cf637da27c621896ed6b657ead2244841255c3e6ea6392aa46d334be66_prof);

    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_55e86c0091b8eb2e66a7d3fc191912cdb3d6647d61e9804c9a77fc946a9fcb58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e86c0091b8eb2e66a7d3fc191912cdb3d6647d61e9804c9a77fc946a9fcb58->enter($__internal_55e86c0091b8eb2e66a7d3fc191912cdb3d6647d61e9804c9a77fc946a9fcb58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 30
        echo "   <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.carousel.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/owl.theme.default.min.css"), "html", null, true);
        echo "\" />
   <link rel=\"stylesheet\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" />

  ";
        
        $__internal_55e86c0091b8eb2e66a7d3fc191912cdb3d6647d61e9804c9a77fc946a9fcb58->leave($__internal_55e86c0091b8eb2e66a7d3fc191912cdb3d6647d61e9804c9a77fc946a9fcb58_prof);

    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99a648a44183bfa6cbbb4dadb93e7db821414905b1defd384b99f225c8c435d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99a648a44183bfa6cbbb4dadb93e7db821414905b1defd384b99f225c8c435d8->enter($__internal_99a648a44183bfa6cbbb4dadb93e7db821414905b1defd384b99f225c8c435d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 41
        echo "   <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
    
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.stellar.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.countTo.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/magnific-popup-options.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>

            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery.vide.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_99a648a44183bfa6cbbb4dadb93e7db821414905b1defd384b99f225c8c435d8->leave($__internal_99a648a44183bfa6cbbb4dadb93e7db821414905b1defd384b99f225c8c435d8_prof);

    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  586 => 54,  581 => 52,  577 => 51,  573 => 50,  569 => 49,  565 => 48,  561 => 47,  557 => 46,  553 => 45,  549 => 44,  545 => 43,  539 => 41,  533 => 40,  523 => 37,  519 => 36,  515 => 35,  511 => 34,  507 => 33,  503 => 32,  499 => 31,  496 => 30,  490 => 29,  478 => 27,  463 => 402,  443 => 385,  425 => 370,  410 => 358,  395 => 346,  366 => 320,  352 => 309,  338 => 298,  248 => 211,  239 => 205,  230 => 199,  221 => 193,  212 => 187,  203 => 181,  165 => 146,  140 => 124,  79 => 68,  71 => 63,  62 => 56,  59 => 40,  57 => 29,  52 => 27,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# app/Resources/views/layout.html.twig #}

<!DOCTYPE html>
<html>
<head>
    <meta charset=\"utf-8\">
\t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
\t<title>Learn &mdash;</title>
\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
\t<meta name=\"description\" content=\"\" />
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
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

  <title>{% block title %}Application web de tchat{% endblock %}</title>

  {% block stylesheets %}
   <link href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/owl.carousel.min.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/owl.theme.default.min.css') }}\" />
   <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" />

  {% endblock %}
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

            <script src=\"{{ asset('js/jquery.vide.min.js') }}\"></script>
{% endblock %}
</head>

<body>
\t\t
\t<div class=\"fh5co-loader\"></div>
\t
\t<div id=\"page\">
\t  {{ include(\"::nav.html.twig\") }}

\t<header id=\"fh5co-header\" class=\"fh5co-cover\" role=\"banner\"  data-stellar-background-ratio=\"0.5\">
\t\t<div class=\"overlay\">
\t\t\t\t\t<div  style=\"width: 100%; height:100%;\"
                      data-vide-bg=\"mp4: {{ asset('video/tutorskills_home') }}, webm: {{ asset('video/vid1') }}, ogv: vid1, poster: video/vid1\"
                      data-vide-options=\"resizing: true\">
<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center\">
\t\t\t\t\t<div class=\"display-t\">
\t\t\t\t\t\t<div class=\"display-tc animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t\t\t<h1>The Art of Teaching is the Art of Assisting Discovery</h1>
\t\t\t\t\t\t\t<p><a class=\"btn btn-primary btn-lg btn-learn\" href=\"#\">Take A Course</a> <a class=\"btn btn-primary btn-lg popup-vimeo btn-video\" href=\"https://vimeo.com/channels/staffpicks/93951774\"><i class=\"icon-play\"></i> Watch Video</a></p>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
               
                    </div>
\t\t
\t\t</div>
\t</header>

\t<div id=\"fh5co-counter\" class=\"fh5co-counters\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"40356\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Students</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"30290\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Courses</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"2039\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Instructor</span>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-3 text-center animate-box\">
\t\t\t\t\t<span class=\"fh5co-counter js-counter\" data-from=\"0\" data-to=\"997585\" data-speed=\"5000\" data-refresh-interval=\"50\"></span>
\t\t\t\t\t<span class=\"fh5co-counter-label\">Earnings</span>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

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
\t\t\t\t\t\t<img class=\"img-responsive\" src=\"{{ asset('images/work_1.png') }}\" alt=\"work\">
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
\t\t\t\t\t\t<img class=\"img-responsive\"  src=\"{{ asset('images/work_1.png') }}\"  alt=\"work\">
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
\t
\t<div id=\"fh5co-project\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Showcase of A Finish Projects</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"container-fluid proj-bottom\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img  src=\"{{ asset('images/project-1.jpg') }}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Web Master</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/project-2.jpg') }}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Virtual Assistant</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/project-3.jpg') }}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Read Bible</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/project-9.jpg') }}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Programming</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/project-5.jpg') }}\" alt=\"\" class=\"img-responsive\">
\t\t\t\t\t\t<h3>Technician</h3>
\t\t\t\t\t\t<span>View Course</span>
\t\t\t\t\t</a>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-4 col-sm-6 fh5co-project animate-box\" data-animate-effect=\"fadeIn\">
\t\t\t\t\t<a href=\"#\"><img src=\"{{ asset('images/project-6.jpg') }}\" alt=\"\" class=\"img-responsive\">
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

\t<div id=\"fh5co-steps\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Start A Course</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"row bs-wizard animate-box\" style=\"border-bottom:0;\">
                
\t\t\t\t<div class=\"col-xs-3 bs-wizard-step complete\">
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 1</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Create A Free Course</p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-3 bs-wizard-step active\"><!-- complete -->
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 2</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Upload Content</p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-3 bs-wizard-step disabled\"><!-- complete -->
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 3</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Make Your Course Beautiful</p></div>
\t\t\t\t</div>

\t\t\t\t<div class=\"col-xs-3 bs-wizard-step disabled\"><!-- active -->
\t\t\t\t\t<div class=\"text-center bs-wizard-stepnum\"><h4>Step 4</h4></div>
\t\t\t\t\t<div class=\"progress\"><div class=\"progress-bar\"></div></div>
\t\t\t\t\t<a href=\"#\" class=\"bs-wizard-dot\"></a>
\t\t\t\t\t<div class=\"bs-wizard-info text-center\"><p>Start Making Money</p></div>
\t\t\t\t</div>
\t\t\t</div>

\t\t</div>
\t</div>

\t<div id=\"fh5co-testimonial\" class=\"fh5co-bg-section\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-6 col-md-offset-3 text-center fh5co-heading\">
\t\t\t\t\t<h2>Testimonials</h2>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t<div class=\"row animate-box\">
\t\t\t\t\t\t<div class=\"owl-carousel owl-carousel-fullwidth\">
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-slide active text-center\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/person_1.jpg') }}\" alt=\"user\">
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<span>Jean Doe, via <a href=\"#\" class=\"twitter\">Twitter</a></span>
\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-slide active text-center\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/person_2.jpg') }}\" alt=\"user\">
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<span>John Doe, via <a href=\"#\" class=\"twitter\">Twitter</a></span>
\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"item\">
\t\t\t\t\t\t\t\t<div class=\"testimony-slide active text-center\">
\t\t\t\t\t\t\t\t\t<figure>
\t\t\t\t\t\t\t\t\t\t<img src=\"{{ asset('images/person_3.jpg') }}\" alt=\"user\">
\t\t\t\t\t\t\t\t\t</figure>
\t\t\t\t\t\t\t\t\t<span>John Doe, via <a href=\"#\" class=\"twitter\">Twitter</a></span>
\t\t\t\t\t\t\t\t\t<blockquote>
\t\t\t\t\t\t\t\t\t\t<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
\t\t\t\t\t\t\t\t\t</blockquote>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div id=\"fh5co-blog\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row animate-box\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2 text-center fh5co-heading\">
\t\t\t\t\t<h2>Recent Post</h2>
\t\t\t\t\t<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"{{ asset('images/project-4.jpg') }}\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t<h3><a href=\"\"#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
\t\t\t\t\t\t\t<span class=\"posted_on\">Nov. 15th</span>
\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Read More</a>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"{{ asset('images/project-2.jpg') }}\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t<h3><a href=\"\"#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
\t\t\t\t\t\t\t<span class=\"posted_on\">Nov. 15th</span>
\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Read More</a>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-4 col-md-4\">
\t\t\t\t\t<div class=\"fh5co-blog animate-box\">
\t\t\t\t\t\t<a href=\"#\"><img class=\"img-responsive\" src=\"{{ asset('images/project-3.jpg') }}\" alt=\"\"></a>
\t\t\t\t\t\t<div class=\"blog-text\">
\t\t\t\t\t\t\t<h3><a href=\"\"#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
\t\t\t\t\t\t\t<span class=\"posted_on\">Nov. 15th</span>
\t\t\t\t\t\t\t<span class=\"comment\"><a href=\"\">21<i class=\"icon-speech-bubble\"></i></a></span>
\t\t\t\t\t\t\t<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-primary\">Read More</a>
\t\t\t\t\t\t</div> 
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>


\t<div id=\"fh5co-started\" style=\"background-image:url({{ asset('images/diverse.jpg') }});\">
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
\t</body>
</html>", "::layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app/Resources\\views/layout.html.twig");
    }
}
