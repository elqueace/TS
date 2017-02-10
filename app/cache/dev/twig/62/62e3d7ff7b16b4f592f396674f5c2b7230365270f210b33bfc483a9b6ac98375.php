<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_7e2ac5c5a86b4e0b147719f495e3de962ad0ad77167f2caa7c749b72c4446c9a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1922059251d0425d249facd48cc8a747cae7e120f1d8267a90ad9d0170231eb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1922059251d0425d249facd48cc8a747cae7e120f1d8267a90ad9d0170231eb5->enter($__internal_1922059251d0425d249facd48cc8a747cae7e120f1d8267a90ad9d0170231eb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1922059251d0425d249facd48cc8a747cae7e120f1d8267a90ad9d0170231eb5->leave($__internal_1922059251d0425d249facd48cc8a747cae7e120f1d8267a90ad9d0170231eb5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_446e47540d25632292accab6c0fa093a5709d167969fd190fae5333ebce9428f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446e47540d25632292accab6c0fa093a5709d167969fd190fae5333ebce9428f->enter($__internal_446e47540d25632292accab6c0fa093a5709d167969fd190fae5333ebce9428f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_446e47540d25632292accab6c0fa093a5709d167969fd190fae5333ebce9428f->leave($__internal_446e47540d25632292accab6c0fa093a5709d167969fd190fae5333ebce9428f_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
