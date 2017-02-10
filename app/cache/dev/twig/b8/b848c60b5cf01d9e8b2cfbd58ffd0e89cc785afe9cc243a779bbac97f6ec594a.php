<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_6d10a9f4f21e68ef96cb045a97e7d95255f4c7884655f77e79d15b89ddb79b4f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d92a2a42e363fa0710ceb6cc87911a570e0fffc770de7c735b39f4143086699c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92a2a42e363fa0710ceb6cc87911a570e0fffc770de7c735b39f4143086699c->enter($__internal_d92a2a42e363fa0710ceb6cc87911a570e0fffc770de7c735b39f4143086699c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d92a2a42e363fa0710ceb6cc87911a570e0fffc770de7c735b39f4143086699c->leave($__internal_d92a2a42e363fa0710ceb6cc87911a570e0fffc770de7c735b39f4143086699c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d847cb1aa1958aa5754127f48844fe49cc98657fff8f2badb98b3afe60d87526 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d847cb1aa1958aa5754127f48844fe49cc98657fff8f2badb98b3afe60d87526->enter($__internal_d847cb1aa1958aa5754127f48844fe49cc98657fff8f2badb98b3afe60d87526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d847cb1aa1958aa5754127f48844fe49cc98657fff8f2badb98b3afe60d87526->leave($__internal_d847cb1aa1958aa5754127f48844fe49cc98657fff8f2badb98b3afe60d87526_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1fb55b3b77e02a09f94886d2dec56ef8d8714cd5794f16773021fa980ca0c83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fb55b3b77e02a09f94886d2dec56ef8d8714cd5794f16773021fa980ca0c83a->enter($__internal_1fb55b3b77e02a09f94886d2dec56ef8d8714cd5794f16773021fa980ca0c83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1fb55b3b77e02a09f94886d2dec56ef8d8714cd5794f16773021fa980ca0c83a->leave($__internal_1fb55b3b77e02a09f94886d2dec56ef8d8714cd5794f16773021fa980ca0c83a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d99678e9c104ac7aee37eed796a06e6ac6e81aeaeb884241442a0e70a97ec955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d99678e9c104ac7aee37eed796a06e6ac6e81aeaeb884241442a0e70a97ec955->enter($__internal_d99678e9c104ac7aee37eed796a06e6ac6e81aeaeb884241442a0e70a97ec955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d99678e9c104ac7aee37eed796a06e6ac6e81aeaeb884241442a0e70a97ec955->leave($__internal_d99678e9c104ac7aee37eed796a06e6ac6e81aeaeb884241442a0e70a97ec955_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
