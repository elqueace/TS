<?php

/* :default:index.html.twig */
class __TwigTemplate_a7af7961ecca7fbd2e91be4d0cf2316a3052d1cd53bb06fa9ec4a379d9af7ac5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", ":default:index.html.twig", 3);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_af3516fa73e82721f4da2d24bc9be29fe20df00dcbb5c0d9213c171452d8fd6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af3516fa73e82721f4da2d24bc9be29fe20df00dcbb5c0d9213c171452d8fd6c->enter($__internal_af3516fa73e82721f4da2d24bc9be29fe20df00dcbb5c0d9213c171452d8fd6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_af3516fa73e82721f4da2d24bc9be29fe20df00dcbb5c0d9213c171452d8fd6c->leave($__internal_af3516fa73e82721f4da2d24bc9be29fe20df00dcbb5c0d9213c171452d8fd6c_prof);

    }

    public function getTemplateName()
    {
        return ":default:index.html.twig";
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

{% extends \"OCPlatformBundle::layout.html.twig\" %}", ":default:index.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app/Resources\\views/default/index.html.twig");
    }
}
