<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_93419b02249b54f79618be91a0e92f87dbe8394cd80a5a45f82bdead4ec9d759 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_b46a49439e9948febe81cb8bd0a814164c6392dd7a8e804977618d7f734a1d23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b46a49439e9948febe81cb8bd0a814164c6392dd7a8e804977618d7f734a1d23->enter($__internal_b46a49439e9948febe81cb8bd0a814164c6392dd7a8e804977618d7f734a1d23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b46a49439e9948febe81cb8bd0a814164c6392dd7a8e804977618d7f734a1d23->leave($__internal_b46a49439e9948febe81cb8bd0a814164c6392dd7a8e804977618d7f734a1d23_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c9766d9773eaa110e5db0daeb6b080848a504c2d9ce9a0fc853e96ba63141e5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9766d9773eaa110e5db0daeb6b080848a504c2d9ce9a0fc853e96ba63141e5d->enter($__internal_c9766d9773eaa110e5db0daeb6b080848a504c2d9ce9a0fc853e96ba63141e5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c9766d9773eaa110e5db0daeb6b080848a504c2d9ce9a0fc853e96ba63141e5d->leave($__internal_c9766d9773eaa110e5db0daeb6b080848a504c2d9ce9a0fc853e96ba63141e5d_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_a71827d8b59c70fa73b919f92522132cc399232f7362c568d6c9023ae648c364 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a71827d8b59c70fa73b919f92522132cc399232f7362c568d6c9023ae648c364->enter($__internal_a71827d8b59c70fa73b919f92522132cc399232f7362c568d6c9023ae648c364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_a71827d8b59c70fa73b919f92522132cc399232f7362c568d6c9023ae648c364->leave($__internal_a71827d8b59c70fa73b919f92522132cc399232f7362c568d6c9023ae648c364_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
