<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_484235865341ba32f99b56bca10c0d41febe594dbbf73fd534603b1bf0529c43 extends Twig_Template
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
        $__internal_c3446a4892774c0b4b9bfa3ff9357259378de35890f0d33fa3fd6c08f1335438 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3446a4892774c0b4b9bfa3ff9357259378de35890f0d33fa3fd6c08f1335438->enter($__internal_c3446a4892774c0b4b9bfa3ff9357259378de35890f0d33fa3fd6c08f1335438_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3446a4892774c0b4b9bfa3ff9357259378de35890f0d33fa3fd6c08f1335438->leave($__internal_c3446a4892774c0b4b9bfa3ff9357259378de35890f0d33fa3fd6c08f1335438_prof);

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
