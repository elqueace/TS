<?php

/* ::nav.html.twig */
class __TwigTemplate_2361e14a81e30c6562adef88c640d8118e8b7d6e151b9dacd68a8d61b8f3594f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<nav class=\"fh5co-nav\" role=\"navigation\">
\t\t<div class=\"top\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12 text-right\">
\t\t\t\t\t\t<p class=\"num\">Call: +1(438)939-6037</p>
\t\t\t\t\t\t<ul class=\"fh5co-social\">
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-twitter\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-dribbble\"></i></a></li>
\t\t\t\t\t\t\t<li><a href=\"#\"><i class=\"icon-github\"></i></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"top-menu\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-1 text-left\">
\t\t\t\t\t\t<div id=\"fh5co-logo\" >
                            <img class=\"\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_ts0.jpg"), "html", null, true);
        echo "\" alt=\"logo\" >
                        </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-11 text-right menu-1\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"/app_dev.php/platform\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"about\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"pricing\">Pricing</a></li>
\t\t\t\t\t\t\t<!--<li class=\"has-dropdown\">
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Web Design</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">eCommerce</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Branding</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">API</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>-->
\t\t\t\t\t\t\t<li><a href=\"contact\">Contact</a></li>
                            ";
        // line 39
        if ((21 < 12)) {
            // line 40
            echo "                                <li><a href=\"profile.php\">My profile</a></li>
                                <li><a href=\"textchat_demo.php\">Text Chat</a></li>
                            ";
        }
        // line 43
        echo "                    
                            ";
        // line 44
        if ((1 < 12)) {
            // line 45
            echo "\t\t\t\t\t\t\t<li class=\"btn-cta\"><a href=\"log_reg\"><span>Sign Up | Login</span></a></li>
                            ";
        } else {
            // line 47
            echo "                                <li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-user\"></span>Logout</a></li>
                            ";
        }
        // line 49
        echo "\t\t\t\t\t\t\t<li class=\"btn-cta\"><a href=\"#\"><span>Create a Course</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</nav>";
    }

    public function getTemplateName()
    {
        return "::nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 49,  78 => 47,  74 => 45,  72 => 44,  69 => 43,  64 => 40,  62 => 39,  41 => 21,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "::nav.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\app/Resources\\views/nav.html.twig");
    }
}
