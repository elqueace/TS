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
        $__internal_523d06e9f95ff8931e02025f9a4404ad8e8942cea0902810ff5b7f68f288cf84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523d06e9f95ff8931e02025f9a4404ad8e8942cea0902810ff5b7f68f288cf84->enter($__internal_523d06e9f95ff8931e02025f9a4404ad8e8942cea0902810ff5b7f68f288cf84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_523d06e9f95ff8931e02025f9a4404ad8e8942cea0902810ff5b7f68f288cf84->leave($__internal_523d06e9f95ff8931e02025f9a4404ad8e8942cea0902810ff5b7f68f288cf84_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_dd6e7ce1fba4560d5b21ac0a5ea842480b895d80afe5abcb766854f8c538eff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd6e7ce1fba4560d5b21ac0a5ea842480b895d80afe5abcb766854f8c538eff0->enter($__internal_dd6e7ce1fba4560d5b21ac0a5ea842480b895d80afe5abcb766854f8c538eff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_dd6e7ce1fba4560d5b21ac0a5ea842480b895d80afe5abcb766854f8c538eff0->leave($__internal_dd6e7ce1fba4560d5b21ac0a5ea842480b895d80afe5abcb766854f8c538eff0_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9467ec6dbeeca569ab6a78f460c74610cf0fb12924fc0d73dda86d69f608924d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9467ec6dbeeca569ab6a78f460c74610cf0fb12924fc0d73dda86d69f608924d->enter($__internal_9467ec6dbeeca569ab6a78f460c74610cf0fb12924fc0d73dda86d69f608924d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9467ec6dbeeca569ab6a78f460c74610cf0fb12924fc0d73dda86d69f608924d->leave($__internal_9467ec6dbeeca569ab6a78f460c74610cf0fb12924fc0d73dda86d69f608924d_prof);

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
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
