<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8afde4bd6d89889a186e922d0bad980cdfed5c5d1afdf74dc67e012eecfa2a1a extends Twig_Template
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
        $__internal_c74627b9db031946293dc3e906b19b8f5659eee726c15b7efd572b5ffabd1de3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c74627b9db031946293dc3e906b19b8f5659eee726c15b7efd572b5ffabd1de3->enter($__internal_c74627b9db031946293dc3e906b19b8f5659eee726c15b7efd572b5ffabd1de3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c74627b9db031946293dc3e906b19b8f5659eee726c15b7efd572b5ffabd1de3->leave($__internal_c74627b9db031946293dc3e906b19b8f5659eee726c15b7efd572b5ffabd1de3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e01449d1c52a16211d5616dceb43f9d6d575182d5a96ccd988cfe78811b591e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e01449d1c52a16211d5616dceb43f9d6d575182d5a96ccd988cfe78811b591e2->enter($__internal_e01449d1c52a16211d5616dceb43f9d6d575182d5a96ccd988cfe78811b591e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e01449d1c52a16211d5616dceb43f9d6d575182d5a96ccd988cfe78811b591e2->leave($__internal_e01449d1c52a16211d5616dceb43f9d6d575182d5a96ccd988cfe78811b591e2_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_69003dc4b17ff79f42e7976fa63d1f5a0d81445264cc9926d590fffc38072b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69003dc4b17ff79f42e7976fa63d1f5a0d81445264cc9926d590fffc38072b87->enter($__internal_69003dc4b17ff79f42e7976fa63d1f5a0d81445264cc9926d590fffc38072b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_69003dc4b17ff79f42e7976fa63d1f5a0d81445264cc9926d590fffc38072b87->leave($__internal_69003dc4b17ff79f42e7976fa63d1f5a0d81445264cc9926d590fffc38072b87_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf8b86d36781b4ffd0846455039d3566079224d75afcf997080af09f134a488e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf8b86d36781b4ffd0846455039d3566079224d75afcf997080af09f134a488e->enter($__internal_bf8b86d36781b4ffd0846455039d3566079224d75afcf997080af09f134a488e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_bf8b86d36781b4ffd0846455039d3566079224d75afcf997080af09f134a488e->leave($__internal_bf8b86d36781b4ffd0846455039d3566079224d75afcf997080af09f134a488e_prof);

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
