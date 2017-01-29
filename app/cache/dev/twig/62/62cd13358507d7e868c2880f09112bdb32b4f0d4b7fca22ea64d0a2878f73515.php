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
        $__internal_fc0cfc839fb1a9ae6411fc7538fae575b28d05ab05a5f87a131d36049e4c32b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc0cfc839fb1a9ae6411fc7538fae575b28d05ab05a5f87a131d36049e4c32b0->enter($__internal_fc0cfc839fb1a9ae6411fc7538fae575b28d05ab05a5f87a131d36049e4c32b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc0cfc839fb1a9ae6411fc7538fae575b28d05ab05a5f87a131d36049e4c32b0->leave($__internal_fc0cfc839fb1a9ae6411fc7538fae575b28d05ab05a5f87a131d36049e4c32b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e49de988262c1369f3eff219b10a71d67e32ceab8af39205212e39db38b18156 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e49de988262c1369f3eff219b10a71d67e32ceab8af39205212e39db38b18156->enter($__internal_e49de988262c1369f3eff219b10a71d67e32ceab8af39205212e39db38b18156_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e49de988262c1369f3eff219b10a71d67e32ceab8af39205212e39db38b18156->leave($__internal_e49de988262c1369f3eff219b10a71d67e32ceab8af39205212e39db38b18156_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7094173e3e280ecfb07572a80de890eb7eb154c95338c543c1fc8fb5a9e44b81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7094173e3e280ecfb07572a80de890eb7eb154c95338c543c1fc8fb5a9e44b81->enter($__internal_7094173e3e280ecfb07572a80de890eb7eb154c95338c543c1fc8fb5a9e44b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_7094173e3e280ecfb07572a80de890eb7eb154c95338c543c1fc8fb5a9e44b81->leave($__internal_7094173e3e280ecfb07572a80de890eb7eb154c95338c543c1fc8fb5a9e44b81_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_e98e5d35f7b30322666564e69e53888864ebfbfb56d1aa14cebc16ba504792e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98e5d35f7b30322666564e69e53888864ebfbfb56d1aa14cebc16ba504792e1->enter($__internal_e98e5d35f7b30322666564e69e53888864ebfbfb56d1aa14cebc16ba504792e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e98e5d35f7b30322666564e69e53888864ebfbfb56d1aa14cebc16ba504792e1->leave($__internal_e98e5d35f7b30322666564e69e53888864ebfbfb56d1aa14cebc16ba504792e1_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_813334c4b6339c3034c66a6e165615a2d1682af6d6e5913e54e1fe5f5a15ed5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813334c4b6339c3034c66a6e165615a2d1682af6d6e5913e54e1fe5f5a15ed5a->enter($__internal_813334c4b6339c3034c66a6e165615a2d1682af6d6e5913e54e1fe5f5a15ed5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_813334c4b6339c3034c66a6e165615a2d1682af6d6e5913e54e1fe5f5a15ed5a->leave($__internal_813334c4b6339c3034c66a6e165615a2d1682af6d6e5913e54e1fe5f5a15ed5a_prof);

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
", "SensioDistributionBundle::Configurator/layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\sensio\\distribution-bundle\\Sensio\\Bundle\\DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
