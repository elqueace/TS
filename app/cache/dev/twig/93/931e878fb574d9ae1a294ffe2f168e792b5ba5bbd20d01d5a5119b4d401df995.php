<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_b6fd02ce35006870488fb6cb0d01b6eb48ea4d2fc9508a76df3e497537a21644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f0db645cd5d54c4a8ab006a270feed55ed8e6df423f42c698a13b9ca254867e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0db645cd5d54c4a8ab006a270feed55ed8e6df423f42c698a13b9ca254867e2->enter($__internal_f0db645cd5d54c4a8ab006a270feed55ed8e6df423f42c698a13b9ca254867e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0db645cd5d54c4a8ab006a270feed55ed8e6df423f42c698a13b9ca254867e2->leave($__internal_f0db645cd5d54c4a8ab006a270feed55ed8e6df423f42c698a13b9ca254867e2_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
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
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}", "OCPlatformBundle:Advert:index.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\src\\OC\\PlatformBundle/Resources/views/Advert/index.html.twig");
    }
}
