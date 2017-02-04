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
        $__internal_ec408b5df9d158adc228759b01bac446d4fef1faf3b248f397d99316df554cf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec408b5df9d158adc228759b01bac446d4fef1faf3b248f397d99316df554cf3->enter($__internal_ec408b5df9d158adc228759b01bac446d4fef1faf3b248f397d99316df554cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_ec408b5df9d158adc228759b01bac446d4fef1faf3b248f397d99316df554cf3->leave($__internal_ec408b5df9d158adc228759b01bac446d4fef1faf3b248f397d99316df554cf3_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_e9c4b896c8679eda985605c574c33df4f9d4b109398e6c9e2c27f0d208287434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9c4b896c8679eda985605c574c33df4f9d4b109398e6c9e2c27f0d208287434->enter($__internal_e9c4b896c8679eda985605c574c33df4f9d4b109398e6c9e2c27f0d208287434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_e9c4b896c8679eda985605c574c33df4f9d4b109398e6c9e2c27f0d208287434->leave($__internal_e9c4b896c8679eda985605c574c33df4f9d4b109398e6c9e2c27f0d208287434_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
