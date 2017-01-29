<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_470db55abdf2f02bd35892cdcc142ac3e58efa2a59e77ac9f798cf13100a4c5e extends Twig_Template
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
        $__internal_3bfad75040e8985278937079292e303caef56494c315b3da5e3b86d75978aa53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bfad75040e8985278937079292e303caef56494c315b3da5e3b86d75978aa53->enter($__internal_3bfad75040e8985278937079292e303caef56494c315b3da5e3b86d75978aa53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bfad75040e8985278937079292e303caef56494c315b3da5e3b86d75978aa53->leave($__internal_3bfad75040e8985278937079292e303caef56494c315b3da5e3b86d75978aa53_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ed11e493df997ec5cfafa2cc1683c23d58b09cdc33cf224debe7ec1fff8247b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed11e493df997ec5cfafa2cc1683c23d58b09cdc33cf224debe7ec1fff8247b0->enter($__internal_ed11e493df997ec5cfafa2cc1683c23d58b09cdc33cf224debe7ec1fff8247b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ed11e493df997ec5cfafa2cc1683c23d58b09cdc33cf224debe7ec1fff8247b0->leave($__internal_ed11e493df997ec5cfafa2cc1683c23d58b09cdc33cf224debe7ec1fff8247b0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_85f1847dcfb87d32e402d98794862a0c602505fa7cb9903c7d91aa71059b9357 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f1847dcfb87d32e402d98794862a0c602505fa7cb9903c7d91aa71059b9357->enter($__internal_85f1847dcfb87d32e402d98794862a0c602505fa7cb9903c7d91aa71059b9357_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_85f1847dcfb87d32e402d98794862a0c602505fa7cb9903c7d91aa71059b9357->leave($__internal_85f1847dcfb87d32e402d98794862a0c602505fa7cb9903c7d91aa71059b9357_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_0618745fd8de1ae9959af6c37e9a4c46f640280137c72e5c92ec6e2854ad99b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0618745fd8de1ae9959af6c37e9a4c46f640280137c72e5c92ec6e2854ad99b2->enter($__internal_0618745fd8de1ae9959af6c37e9a4c46f640280137c72e5c92ec6e2854ad99b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_0618745fd8de1ae9959af6c37e9a4c46f640280137c72e5c92ec6e2854ad99b2->leave($__internal_0618745fd8de1ae9959af6c37e9a4c46f640280137c72e5c92ec6e2854ad99b2_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
