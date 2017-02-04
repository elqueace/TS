<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_450bd4871718e3757cb31a64da9301a7a284f9f618a3576144c9cd3e997b167e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9292b446a9b9a919bca2cde2316c9422a4e15191bba6b67bac321fc9803999b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9292b446a9b9a919bca2cde2316c9422a4e15191bba6b67bac321fc9803999b7->enter($__internal_9292b446a9b9a919bca2cde2316c9422a4e15191bba6b67bac321fc9803999b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9292b446a9b9a919bca2cde2316c9422a4e15191bba6b67bac321fc9803999b7->leave($__internal_9292b446a9b9a919bca2cde2316c9422a4e15191bba6b67bac321fc9803999b7_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_217b5ec5b912f2c5ca5a86c3fb7679d7f5f04231c14e1918315aacad2a6e8b16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_217b5ec5b912f2c5ca5a86c3fb7679d7f5f04231c14e1918315aacad2a6e8b16->enter($__internal_217b5ec5b912f2c5ca5a86c3fb7679d7f5f04231c14e1918315aacad2a6e8b16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_217b5ec5b912f2c5ca5a86c3fb7679d7f5f04231c14e1918315aacad2a6e8b16->leave($__internal_217b5ec5b912f2c5ca5a86c3fb7679d7f5f04231c14e1918315aacad2a6e8b16_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd2139050d0d1212d2d56ae66463dc77ddc82e69394cf8d7e7c325ef5a5d950a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd2139050d0d1212d2d56ae66463dc77ddc82e69394cf8d7e7c325ef5a5d950a->enter($__internal_dd2139050d0d1212d2d56ae66463dc77ddc82e69394cf8d7e7c325ef5a5d950a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_dd2139050d0d1212d2d56ae66463dc77ddc82e69394cf8d7e7c325ef5a5d950a->leave($__internal_dd2139050d0d1212d2d56ae66463dc77ddc82e69394cf8d7e7c325ef5a5d950a_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_dac2c770c6dfd8356a8bcba2de1c71acaa644247e01855658b22c276b95aaec8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dac2c770c6dfd8356a8bcba2de1c71acaa644247e01855658b22c276b95aaec8->enter($__internal_dac2c770c6dfd8356a8bcba2de1c71acaa644247e01855658b22c276b95aaec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_dac2c770c6dfd8356a8bcba2de1c71acaa644247e01855658b22c276b95aaec8->leave($__internal_dac2c770c6dfd8356a8bcba2de1c71acaa644247e01855658b22c276b95aaec8_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_2cfecd91667a249e76c96f07dab79cea4f2c49b83d77d2ca17f90bc14d19acbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2cfecd91667a249e76c96f07dab79cea4f2c49b83d77d2ca17f90bc14d19acbd->enter($__internal_2cfecd91667a249e76c96f07dab79cea4f2c49b83d77d2ca17f90bc14d19acbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_2cfecd91667a249e76c96f07dab79cea4f2c49b83d77d2ca17f90bc14d19acbd->leave($__internal_2cfecd91667a249e76c96f07dab79cea4f2c49b83d77d2ca17f90bc14d19acbd_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
