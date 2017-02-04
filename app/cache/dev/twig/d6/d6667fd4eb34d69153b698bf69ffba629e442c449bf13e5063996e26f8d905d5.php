<?php

/* ::base.html.twig */
class __TwigTemplate_77014b44006f6d8b14f07d1d67f84c8bffc4d4f264a265d83d2e7ae898c21f0a extends Twig_Template
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
        $__internal_df06809f753fd14e2317d60415861a383297b49a2cc153a5f049232bdaf83fa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df06809f753fd14e2317d60415861a383297b49a2cc153a5f049232bdaf83fa9->enter($__internal_df06809f753fd14e2317d60415861a383297b49a2cc153a5f049232bdaf83fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_df06809f753fd14e2317d60415861a383297b49a2cc153a5f049232bdaf83fa9->leave($__internal_df06809f753fd14e2317d60415861a383297b49a2cc153a5f049232bdaf83fa9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_5ac793679c699e06620301b834b096a7edd5eb330a0b87b555181005d68b270e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ac793679c699e06620301b834b096a7edd5eb330a0b87b555181005d68b270e->enter($__internal_5ac793679c699e06620301b834b096a7edd5eb330a0b87b555181005d68b270e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5ac793679c699e06620301b834b096a7edd5eb330a0b87b555181005d68b270e->leave($__internal_5ac793679c699e06620301b834b096a7edd5eb330a0b87b555181005d68b270e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1e937134d67eb98b14fbd036f3a16a933d96d13fc401ca59ab09e85a06cf934e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e937134d67eb98b14fbd036f3a16a933d96d13fc401ca59ab09e85a06cf934e->enter($__internal_1e937134d67eb98b14fbd036f3a16a933d96d13fc401ca59ab09e85a06cf934e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_1e937134d67eb98b14fbd036f3a16a933d96d13fc401ca59ab09e85a06cf934e->leave($__internal_1e937134d67eb98b14fbd036f3a16a933d96d13fc401ca59ab09e85a06cf934e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8357f8594c41f3830103a6aef37e3368e666b0f32f04d941e33061565a7750f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8357f8594c41f3830103a6aef37e3368e666b0f32f04d941e33061565a7750f->enter($__internal_f8357f8594c41f3830103a6aef37e3368e666b0f32f04d941e33061565a7750f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f8357f8594c41f3830103a6aef37e3368e666b0f32f04d941e33061565a7750f->leave($__internal_f8357f8594c41f3830103a6aef37e3368e666b0f32f04d941e33061565a7750f_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6be766ec4dabf77dc96c11458216d32ef346cbe323f3c698116e0f971370274e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6be766ec4dabf77dc96c11458216d32ef346cbe323f3c698116e0f971370274e->enter($__internal_6be766ec4dabf77dc96c11458216d32ef346cbe323f3c698116e0f971370274e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6be766ec4dabf77dc96c11458216d32ef346cbe323f3c698116e0f971370274e->leave($__internal_6be766ec4dabf77dc96c11458216d32ef346cbe323f3c698116e0f971370274e_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
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
", "::base.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\app/Resources\\views/base.html.twig");
    }
}
