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
        $__internal_b104b80181eb8cea56e3bfa22231e15fa99f74a8f0ebb4fa24a976d9958051fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b104b80181eb8cea56e3bfa22231e15fa99f74a8f0ebb4fa24a976d9958051fa->enter($__internal_b104b80181eb8cea56e3bfa22231e15fa99f74a8f0ebb4fa24a976d9958051fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_b104b80181eb8cea56e3bfa22231e15fa99f74a8f0ebb4fa24a976d9958051fa->leave($__internal_b104b80181eb8cea56e3bfa22231e15fa99f74a8f0ebb4fa24a976d9958051fa_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_54b3cf74d29bbe92174536d86454d99ec7b04f88b8fcaaa78e9c517303042f0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b3cf74d29bbe92174536d86454d99ec7b04f88b8fcaaa78e9c517303042f0e->enter($__internal_54b3cf74d29bbe92174536d86454d99ec7b04f88b8fcaaa78e9c517303042f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_54b3cf74d29bbe92174536d86454d99ec7b04f88b8fcaaa78e9c517303042f0e->leave($__internal_54b3cf74d29bbe92174536d86454d99ec7b04f88b8fcaaa78e9c517303042f0e_prof);

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
