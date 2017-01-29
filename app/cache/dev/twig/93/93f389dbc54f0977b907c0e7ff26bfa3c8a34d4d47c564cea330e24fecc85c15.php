<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_905ce5642d358144e74c7337c2603851c22d0ecd8725efd8ec29538ae75dbc25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55a2b6139e1cc6abf9e9bec3c20047c9e9284f995c344de6c7944c36d926ed32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55a2b6139e1cc6abf9e9bec3c20047c9e9284f995c344de6c7944c36d926ed32->enter($__internal_55a2b6139e1cc6abf9e9bec3c20047c9e9284f995c344de6c7944c36d926ed32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_55a2b6139e1cc6abf9e9bec3c20047c9e9284f995c344de6c7944c36d926ed32->leave($__internal_55a2b6139e1cc6abf9e9bec3c20047c9e9284f995c344de6c7944c36d926ed32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_73f55a5071579e0a3df30071ea46d08a7f04f91d604362afe1ccdfdc29067f0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73f55a5071579e0a3df30071ea46d08a7f04f91d604362afe1ccdfdc29067f0d->enter($__internal_73f55a5071579e0a3df30071ea46d08a7f04f91d604362afe1ccdfdc29067f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_73f55a5071579e0a3df30071ea46d08a7f04f91d604362afe1ccdfdc29067f0d->leave($__internal_73f55a5071579e0a3df30071ea46d08a7f04f91d604362afe1ccdfdc29067f0d_prof);

    }

    // line 6
    public function block_menu($context, array $blocks = array())
    {
        $__internal_ad342ecf4ddc7776c7a31499dc56a6c1d08f1ca74d4cef4bb46332a9077198c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad342ecf4ddc7776c7a31499dc56a6c1d08f1ca74d4cef4bb46332a9077198c5->enter($__internal_ad342ecf4ddc7776c7a31499dc56a6c1d08f1ca74d4cef4bb46332a9077198c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 7
        echo "<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ad342ecf4ddc7776c7a31499dc56a6c1d08f1ca74d4cef4bb46332a9077198c5->leave($__internal_ad342ecf4ddc7776c7a31499dc56a6c1d08f1ca74d4cef4bb46332a9077198c5_prof);

    }

    // line 13
    public function block_panel($context, array $blocks = array())
    {
        $__internal_98283b70dfafbfd53748b7158cbbf7095175c0d115c4414b672a2c905e79f914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98283b70dfafbfd53748b7158cbbf7095175c0d115c4414b672a2c905e79f914->enter($__internal_98283b70dfafbfd53748b7158cbbf7095175c0d115c4414b672a2c905e79f914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 14
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_98283b70dfafbfd53748b7158cbbf7095175c0d115c4414b672a2c905e79f914->leave($__internal_98283b70dfafbfd53748b7158cbbf7095175c0d115c4414b672a2c905e79f914_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 14,  64 => 13,  53 => 7,  47 => 6,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\"><svg width=\"32\" height=\"32\" xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" x=\"0px\" y=\"0px\" viewBox=\"0 0 32 32\" enable-background=\"new 0 0 32 32\" xml:space=\"preserve\"><g><path fill=\"#3F3F3F\" d=\"M15 2c-1.1 0-2 0.9-2 2v25c0 1.1 0.9 2 2 2s2-0.9 2-2V4C17 2.9 16.1 2 15 2z\"/><path fill=\"#3F3F3F\" d=\"M30.7 8.2l-2.9-2.9C27.6 5.1 27.3 5 27 5h0h0h-9v8h9c0.3 0 0.6-0.1 0.8-0.3l2.9-2.9 C31.1 9.4 31.1 8.6 30.7 8.2z\"/><path fill=\"#3F3F3F\" d=\"M5 8L5 8C4.7 8 4.4 8.1 4.2 8.3l-2.9 2.9c-0.4 0.4-0.4 1.1 0 1.6l2.9 2.9C4.4 15.9 4.7 16 5 16h7V8H5L5 8z\"/><path fill=\"#3F3F3F\" d=\"M24.8 16.2c-0.2-0.2-0.3-0.2-0.5-0.2h0h0H18v6h6.2c0.2 0 0.4-0.1 0.5-0.2l2-2.2c0.3-0.3 0.3-0.9 0-1.2 L24.8 16.2z\"/></g></svg></span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', {'token': token})) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
