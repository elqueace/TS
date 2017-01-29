<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_1f4bcd3629249c7622aab8252340bc4e3fad3cf4a14b88e66ee7082bad504760 extends Twig_Template
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
        $__internal_eb2f5d5f22173fbaf7cdd8b6e2e20b8b103d947f040babb1e1ae37256f66b208 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2f5d5f22173fbaf7cdd8b6e2e20b8b103d947f040babb1e1ae37256f66b208->enter($__internal_eb2f5d5f22173fbaf7cdd8b6e2e20b8b103d947f040babb1e1ae37256f66b208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb2f5d5f22173fbaf7cdd8b6e2e20b8b103d947f040babb1e1ae37256f66b208->leave($__internal_eb2f5d5f22173fbaf7cdd8b6e2e20b8b103d947f040babb1e1ae37256f66b208_prof);

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
", "OCPlatformBundle::layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\src\\OC\\PlatformBundle/Resources/views/layout.html.twig");
    }
}
