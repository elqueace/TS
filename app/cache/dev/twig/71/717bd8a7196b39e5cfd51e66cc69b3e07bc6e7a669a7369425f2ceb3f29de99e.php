<?php

/* base.html.twig */
class __TwigTemplate_4a435ce00ba921c972e10de265a097d371f6df5b2b7e443b9697d223a5e416dd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_37fc48b1345dec674fb3ae732052d5470b07d0685276981e7f3b0e39c30d1f00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37fc48b1345dec674fb3ae732052d5470b07d0685276981e7f3b0e39c30d1f00->enter($__internal_37fc48b1345dec674fb3ae732052d5470b07d0685276981e7f3b0e39c30d1f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_37fc48b1345dec674fb3ae732052d5470b07d0685276981e7f3b0e39c30d1f00->leave($__internal_37fc48b1345dec674fb3ae732052d5470b07d0685276981e7f3b0e39c30d1f00_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1640f2c104768a34bac9ddf933d1c741f40f7320897a74c9898f32a01ee0434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1640f2c104768a34bac9ddf933d1c741f40f7320897a74c9898f32a01ee0434->enter($__internal_d1640f2c104768a34bac9ddf933d1c741f40f7320897a74c9898f32a01ee0434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d1640f2c104768a34bac9ddf933d1c741f40f7320897a74c9898f32a01ee0434->leave($__internal_d1640f2c104768a34bac9ddf933d1c741f40f7320897a74c9898f32a01ee0434_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b9a04f17c2ae8b2b34d80db68e0d01987be3f23de2c619defc9530a30cbf2373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9a04f17c2ae8b2b34d80db68e0d01987be3f23de2c619defc9530a30cbf2373->enter($__internal_b9a04f17c2ae8b2b34d80db68e0d01987be3f23de2c619defc9530a30cbf2373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_b9a04f17c2ae8b2b34d80db68e0d01987be3f23de2c619defc9530a30cbf2373->leave($__internal_b9a04f17c2ae8b2b34d80db68e0d01987be3f23de2c619defc9530a30cbf2373_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_b4036d84c959e6367d6832018e7e38e2ce865865700fe98de23f13dc9f409422 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4036d84c959e6367d6832018e7e38e2ce865865700fe98de23f13dc9f409422->enter($__internal_b4036d84c959e6367d6832018e7e38e2ce865865700fe98de23f13dc9f409422_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b4036d84c959e6367d6832018e7e38e2ce865865700fe98de23f13dc9f409422->leave($__internal_b4036d84c959e6367d6832018e7e38e2ce865865700fe98de23f13dc9f409422_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d9251fc4ff1530f89011ca4e96125c5886542d22d174d0a89912b6184c965150 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9251fc4ff1530f89011ca4e96125c5886542d22d174d0a89912b6184c965150->enter($__internal_d9251fc4ff1530f89011ca4e96125c5886542d22d174d0a89912b6184c965150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_d9251fc4ff1530f89011ca4e96125c5886542d22d174d0a89912b6184c965150->leave($__internal_d9251fc4ff1530f89011ca4e96125c5886542d22d174d0a89912b6184c965150_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app\\Resources\\views\\base.html.twig");
    }
}
