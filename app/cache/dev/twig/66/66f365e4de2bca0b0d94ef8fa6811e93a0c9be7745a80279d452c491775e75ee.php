<?php

/* ::nav.html.twig */
class __TwigTemplate_ddb3d4ac25cee64ffb9b0d03fa6038c937a564001dad8741666194b0fd7d7a45 extends Twig_Template
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
        $__internal_d422d4666be1d20fd4c390aeab7563499cbb34619d636f5ea0b6495bbfa9cfb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d422d4666be1d20fd4c390aeab7563499cbb34619d636f5ea0b6495bbfa9cfb7->enter($__internal_d422d4666be1d20fd4c390aeab7563499cbb34619d636f5ea0b6495bbfa9cfb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::nav.html.twig"));

        // line 1
        echo "
<nav class=\"fh5co-nav\" role=\"navigation\">
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
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/logo_ts0.jpg"), "html", null, true);
        echo "\" alt=\"logo\" >
                        </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-11 text-right menu-1\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_about");
        echo "\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_pricing");
        echo "\">Pricing</a></li>
\t\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Web Design</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">eCommerce</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Branding</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">API</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_contact");
        echo "\">Contact</a></li>
                            ";
        // line 40
        if ((21 < 12)) {
            // line 41
            echo "                                <li><a href=\"profile.php\">My profile</a></li>
                                <li><a href=\"textchat_demo.php\">Text Chat</a></li>
                            ";
        }
        // line 44
        echo "                    
                            ";
        // line 45
        if ((1 < 12)) {
            // line 46
            echo "\t\t\t\t\t\t\t<li class=\"btn-cta\"><a href=\"log_reg\"><span>Sign Up | Login</span></a></li>
                            ";
        } else {
            // line 48
            echo "                                <li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-user\"></span>Logout</a></li>
                            ";
        }
        // line 50
        echo "\t\t\t\t\t\t\t<li class=\"btn-cta\"><a href=\"#\"><span>Create a Course</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</nav>";
        
        $__internal_d422d4666be1d20fd4c390aeab7563499cbb34619d636f5ea0b6495bbfa9cfb7->leave($__internal_d422d4666be1d20fd4c390aeab7563499cbb34619d636f5ea0b6495bbfa9cfb7_prof);

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
        return array (  98 => 50,  94 => 48,  90 => 46,  88 => 45,  85 => 44,  80 => 41,  78 => 40,  74 => 39,  61 => 29,  57 => 28,  53 => 27,  45 => 22,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("
<nav class=\"fh5co-nav\" role=\"navigation\">
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
                            <img class=\"\" src=\"{{asset('images/logo_ts0.jpg')}}\" alt=\"logo\" >
                        </div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-xs-11 text-right menu-1\">
\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t<li class=\"active\"><a href=\"{{path('oc_platform_home')}}\">Home</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{path('oc_platform_about')}}\">About Us</a></li>
\t\t\t\t\t\t\t<li><a href=\"{{path('oc_platform_pricing')}}\">Pricing</a></li>
\t\t\t\t\t\t\t<li class=\"has-dropdown\">
\t\t\t\t\t\t\t\t<a href=\"blog.html\">Blog</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown\">
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Web Design</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">eCommerce</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">Branding</a></li>
\t\t\t\t\t\t\t\t\t<li><a href=\"#\">API</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li><a href=\"{{path('oc_platform_contact')}}\">Contact</a></li>
                            {% if 21 < 12 %}
                                <li><a href=\"profile.php\">My profile</a></li>
                                <li><a href=\"textchat_demo.php\">Text Chat</a></li>
                            {% endif %}
                    
                            {% if 1 < 12 %}
\t\t\t\t\t\t\t<li class=\"btn-cta\"><a href=\"log_reg\"><span>Sign Up | Login</span></a></li>
                            {% else %}
                                <li><a href=\"logout.php\"><span class=\"glyphicon glyphicon-user\"></span>Logout</a></li>
                            {% endif %}
\t\t\t\t\t\t\t<li class=\"btn-cta\"><a href=\"#\"><span>Create a Course</span></a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t
\t\t\t</div>
\t\t</div>
\t</nav>", "::nav.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app/Resources\\views/nav.html.twig");
    }
}
