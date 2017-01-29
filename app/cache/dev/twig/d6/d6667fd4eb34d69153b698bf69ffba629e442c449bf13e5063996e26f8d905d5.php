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
        $__internal_0f0f8c46152ba5e6ee24034cc8513b1ed0d35f122c951c54c74091f379ea1b71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0f8c46152ba5e6ee24034cc8513b1ed0d35f122c951c54c74091f379ea1b71->enter($__internal_0f0f8c46152ba5e6ee24034cc8513b1ed0d35f122c951c54c74091f379ea1b71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_0f0f8c46152ba5e6ee24034cc8513b1ed0d35f122c951c54c74091f379ea1b71->leave($__internal_0f0f8c46152ba5e6ee24034cc8513b1ed0d35f122c951c54c74091f379ea1b71_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_13f837c45ef7998893e98535a2e3395b1fdc57c0e9acbf1b058180519335910b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13f837c45ef7998893e98535a2e3395b1fdc57c0e9acbf1b058180519335910b->enter($__internal_13f837c45ef7998893e98535a2e3395b1fdc57c0e9acbf1b058180519335910b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_13f837c45ef7998893e98535a2e3395b1fdc57c0e9acbf1b058180519335910b->leave($__internal_13f837c45ef7998893e98535a2e3395b1fdc57c0e9acbf1b058180519335910b_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d11c65cb05d474cdf311bac4273df8e7d9d40b312bdef2fb9d305adc4b1703d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d11c65cb05d474cdf311bac4273df8e7d9d40b312bdef2fb9d305adc4b1703d9->enter($__internal_d11c65cb05d474cdf311bac4273df8e7d9d40b312bdef2fb9d305adc4b1703d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d11c65cb05d474cdf311bac4273df8e7d9d40b312bdef2fb9d305adc4b1703d9->leave($__internal_d11c65cb05d474cdf311bac4273df8e7d9d40b312bdef2fb9d305adc4b1703d9_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_0789457ed73ecbd26b5bb46f2c28474642519dabbacc90eb8527dc5c54a74c54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0789457ed73ecbd26b5bb46f2c28474642519dabbacc90eb8527dc5c54a74c54->enter($__internal_0789457ed73ecbd26b5bb46f2c28474642519dabbacc90eb8527dc5c54a74c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_0789457ed73ecbd26b5bb46f2c28474642519dabbacc90eb8527dc5c54a74c54->leave($__internal_0789457ed73ecbd26b5bb46f2c28474642519dabbacc90eb8527dc5c54a74c54_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0ba6382326ad535ec42350cdc13e1cd8bbda24575f0f75b93bc88924c0bee687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ba6382326ad535ec42350cdc13e1cd8bbda24575f0f75b93bc88924c0bee687->enter($__internal_0ba6382326ad535ec42350cdc13e1cd8bbda24575f0f75b93bc88924c0bee687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0ba6382326ad535ec42350cdc13e1cd8bbda24575f0f75b93bc88924c0bee687->leave($__internal_0ba6382326ad535ec42350cdc13e1cd8bbda24575f0f75b93bc88924c0bee687_prof);

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
", "::base.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app/Resources\\views/base.html.twig");
    }
}
