<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_a04ee4f0ea3af92e851a2e5cf0e15efd2e57b50f6ac3ec87cab73e81d8c8266e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c46b3236ab004da5db1bce82c0390f6e7c3c60474ba72f45e4756719e6865847 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c46b3236ab004da5db1bce82c0390f6e7c3c60474ba72f45e4756719e6865847->enter($__internal_c46b3236ab004da5db1bce82c0390f6e7c3c60474ba72f45e4756719e6865847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c46b3236ab004da5db1bce82c0390f6e7c3c60474ba72f45e4756719e6865847->leave($__internal_c46b3236ab004da5db1bce82c0390f6e7c3c60474ba72f45e4756719e6865847_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/layout.html.twig #}

{% extends \"::layout.html.twig\" %}
", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\src\\OC\\PlatformBundle\\Resources\\views\\layout.html.twig");
    }
}
