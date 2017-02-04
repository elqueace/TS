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
        $__internal_016c3b094c80bc00e2eca7e9b54fd41da1cf49aa4f66a6eabf57aae9cba1466d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016c3b094c80bc00e2eca7e9b54fd41da1cf49aa4f66a6eabf57aae9cba1466d->enter($__internal_016c3b094c80bc00e2eca7e9b54fd41da1cf49aa4f66a6eabf57aae9cba1466d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_016c3b094c80bc00e2eca7e9b54fd41da1cf49aa4f66a6eabf57aae9cba1466d->leave($__internal_016c3b094c80bc00e2eca7e9b54fd41da1cf49aa4f66a6eabf57aae9cba1466d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d31012c8f72f5261c64487f83687b3a44b142ba171583306ff3865c41c46512c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d31012c8f72f5261c64487f83687b3a44b142ba171583306ff3865c41c46512c->enter($__internal_d31012c8f72f5261c64487f83687b3a44b142ba171583306ff3865c41c46512c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d31012c8f72f5261c64487f83687b3a44b142ba171583306ff3865c41c46512c->leave($__internal_d31012c8f72f5261c64487f83687b3a44b142ba171583306ff3865c41c46512c_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e2e1f920b2d2a7b15d55f42556ae2647d6d4fcca3f30a9d28a28bfe041f2006f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e2e1f920b2d2a7b15d55f42556ae2647d6d4fcca3f30a9d28a28bfe041f2006f->enter($__internal_e2e1f920b2d2a7b15d55f42556ae2647d6d4fcca3f30a9d28a28bfe041f2006f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_e2e1f920b2d2a7b15d55f42556ae2647d6d4fcca3f30a9d28a28bfe041f2006f->leave($__internal_e2e1f920b2d2a7b15d55f42556ae2647d6d4fcca3f30a9d28a28bfe041f2006f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c1b6a2bf6feec1b344b57d356d0e703f42298b92a234ff235135b4e8d9b126c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c1b6a2bf6feec1b344b57d356d0e703f42298b92a234ff235135b4e8d9b126c->enter($__internal_3c1b6a2bf6feec1b344b57d356d0e703f42298b92a234ff235135b4e8d9b126c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3c1b6a2bf6feec1b344b57d356d0e703f42298b92a234ff235135b4e8d9b126c->leave($__internal_3c1b6a2bf6feec1b344b57d356d0e703f42298b92a234ff235135b4e8d9b126c_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7ed1a307af0f0b65e67d6bc6af2eeed8509a50866562ed61598853c89850d0eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ed1a307af0f0b65e67d6bc6af2eeed8509a50866562ed61598853c89850d0eb->enter($__internal_7ed1a307af0f0b65e67d6bc6af2eeed8509a50866562ed61598853c89850d0eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_7ed1a307af0f0b65e67d6bc6af2eeed8509a50866562ed61598853c89850d0eb->leave($__internal_7ed1a307af0f0b65e67d6bc6af2eeed8509a50866562ed61598853c89850d0eb_prof);

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
", "base.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\app\\Resources\\views\\base.html.twig");
    }
}
