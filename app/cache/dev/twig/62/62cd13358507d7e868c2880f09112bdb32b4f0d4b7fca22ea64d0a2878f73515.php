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
        $__internal_57e6c8eee5b2e05421e0f7c8c329508777c3eba23bb357559a711743f07d5ece = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e6c8eee5b2e05421e0f7c8c329508777c3eba23bb357559a711743f07d5ece->enter($__internal_57e6c8eee5b2e05421e0f7c8c329508777c3eba23bb357559a711743f07d5ece_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57e6c8eee5b2e05421e0f7c8c329508777c3eba23bb357559a711743f07d5ece->leave($__internal_57e6c8eee5b2e05421e0f7c8c329508777c3eba23bb357559a711743f07d5ece_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a6beeb58ac4252a645ca1cf83c3be8f02d12c611fe88c266f3b699769389f5fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6beeb58ac4252a645ca1cf83c3be8f02d12c611fe88c266f3b699769389f5fa->enter($__internal_a6beeb58ac4252a645ca1cf83c3be8f02d12c611fe88c266f3b699769389f5fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_a6beeb58ac4252a645ca1cf83c3be8f02d12c611fe88c266f3b699769389f5fa->leave($__internal_a6beeb58ac4252a645ca1cf83c3be8f02d12c611fe88c266f3b699769389f5fa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_739dc8176e5039e042db61f81818f85e26fc78f25ba56effaa5a14040e22a2d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_739dc8176e5039e042db61f81818f85e26fc78f25ba56effaa5a14040e22a2d8->enter($__internal_739dc8176e5039e042db61f81818f85e26fc78f25ba56effaa5a14040e22a2d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Web Configurator Bundle";
        
        $__internal_739dc8176e5039e042db61f81818f85e26fc78f25ba56effaa5a14040e22a2d8->leave($__internal_739dc8176e5039e042db61f81818f85e26fc78f25ba56effaa5a14040e22a2d8_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9bf9712927dbbf67e5e7826cb30edfe26339fd8e5ad5341683fe5cd257cc037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9bf9712927dbbf67e5e7826cb30edfe26339fd8e5ad5341683fe5cd257cc037->enter($__internal_f9bf9712927dbbf67e5e7826cb30edfe26339fd8e5ad5341683fe5cd257cc037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9bf9712927dbbf67e5e7826cb30edfe26339fd8e5ad5341683fe5cd257cc037->leave($__internal_f9bf9712927dbbf67e5e7826cb30edfe26339fd8e5ad5341683fe5cd257cc037_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_8b3170be3c7b23d9dff2f162dd2a2dbfe3040e3e7e25ef9a1e047a20a6b47354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b3170be3c7b23d9dff2f162dd2a2dbfe3040e3e7e25ef9a1e047a20a6b47354->enter($__internal_8b3170be3c7b23d9dff2f162dd2a2dbfe3040e3e7e25ef9a1e047a20a6b47354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_8b3170be3c7b23d9dff2f162dd2a2dbfe3040e3e7e25ef9a1e047a20a6b47354->leave($__internal_8b3170be3c7b23d9dff2f162dd2a2dbfe3040e3e7e25ef9a1e047a20a6b47354_prof);

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
