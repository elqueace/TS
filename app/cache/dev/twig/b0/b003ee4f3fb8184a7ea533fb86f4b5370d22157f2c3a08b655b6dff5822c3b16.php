<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_b90133ca155871e1dc8a685d92097c971b9cc23d67b8f3efb0bb2236be1310aa extends Twig_Template
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
        $__internal_54a44b47024796e916ca5a2dde347d2b3e79e0e8565c73ad637bf6f068430d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54a44b47024796e916ca5a2dde347d2b3e79e0e8565c73ad637bf6f068430d4b->enter($__internal_54a44b47024796e916ca5a2dde347d2b3e79e0e8565c73ad637bf6f068430d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54a44b47024796e916ca5a2dde347d2b3e79e0e8565c73ad637bf6f068430d4b->leave($__internal_54a44b47024796e916ca5a2dde347d2b3e79e0e8565c73ad637bf6f068430d4b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de5c7e6afd53ff866c20ad463b6955c29bb481fbc8d76a20f6dcc770912ca17f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de5c7e6afd53ff866c20ad463b6955c29bb481fbc8d76a20f6dcc770912ca17f->enter($__internal_de5c7e6afd53ff866c20ad463b6955c29bb481fbc8d76a20f6dcc770912ca17f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_de5c7e6afd53ff866c20ad463b6955c29bb481fbc8d76a20f6dcc770912ca17f->leave($__internal_de5c7e6afd53ff866c20ad463b6955c29bb481fbc8d76a20f6dcc770912ca17f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_24664b6d0599ba90b62c44d8827edc9fedf9bb1036a4edd1443996a22b18ebad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24664b6d0599ba90b62c44d8827edc9fedf9bb1036a4edd1443996a22b18ebad->enter($__internal_24664b6d0599ba90b62c44d8827edc9fedf9bb1036a4edd1443996a22b18ebad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_24664b6d0599ba90b62c44d8827edc9fedf9bb1036a4edd1443996a22b18ebad->leave($__internal_24664b6d0599ba90b62c44d8827edc9fedf9bb1036a4edd1443996a22b18ebad_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a73bf0b478dc314ba082080e3a3f99dc5edade47e9cdaa35c4e2e015066783a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73bf0b478dc314ba082080e3a3f99dc5edade47e9cdaa35c4e2e015066783a0->enter($__internal_a73bf0b478dc314ba082080e3a3f99dc5edade47e9cdaa35c4e2e015066783a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_a73bf0b478dc314ba082080e3a3f99dc5edade47e9cdaa35c4e2e015066783a0->leave($__internal_a73bf0b478dc314ba082080e3a3f99dc5edade47e9cdaa35c4e2e015066783a0_prof);

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
