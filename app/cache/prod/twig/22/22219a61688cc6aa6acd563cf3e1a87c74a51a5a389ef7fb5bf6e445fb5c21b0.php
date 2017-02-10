<?php

/* ::layout.html.twig */
class __TwigTemplate_47819a2af50cc81e49ef3c2c376fc66038f3e87712b866debaa218fa3396f3a3 extends Twig_Template
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
    }

    // line 27
    public function block_title($context, array $blocks = array())
    {
        echo "Application web de tchat";
    }

    // line 29
    public function block_stylesheets($context, array $blocks = array())
    {
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
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
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
        return array (  565 => 54,  560 => 52,  556 => 51,  552 => 50,  548 => 49,  544 => 48,  540 => 47,  536 => 46,  532 => 45,  528 => 44,  524 => 43,  518 => 41,  515 => 40,  508 => 37,  504 => 36,  500 => 35,  496 => 34,  492 => 33,  488 => 32,  484 => 31,  481 => 30,  478 => 29,  472 => 27,  460 => 402,  440 => 385,  422 => 370,  407 => 358,  392 => 346,  363 => 320,  349 => 309,  335 => 298,  245 => 211,  236 => 205,  227 => 199,  218 => 193,  209 => 187,  200 => 181,  162 => 146,  137 => 124,  76 => 68,  68 => 63,  59 => 56,  56 => 40,  54 => 29,  49 => 27,  22 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app/Resources\\views/layout.html.twig");
    }
}
