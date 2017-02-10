<?php

/* OCPlatformBundle:Default:index.html.twig */
class __TwigTemplate_d5b7b44a98a65880fb50fb66083f9787b86747e79b58239b50141cfd5c0af8d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d5b67a2b0bbecb0652449d7b7e5056f747810a6013ef60e0b54d87e8ed57bab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5b67a2b0bbecb0652449d7b7e5056f747810a6013ef60e0b54d87e8ed57bab3->enter($__internal_d5b67a2b0bbecb0652449d7b7e5056f747810a6013ef60e0b54d87e8ed57bab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Default:index.html.twig"));

        // line 1
        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!
";
        
        $__internal_d5b67a2b0bbecb0652449d7b7e5056f747810a6013ef60e0b54d87e8ed57bab3->leave($__internal_d5b67a2b0bbecb0652449d7b7e5056f747810a6013ef60e0b54d87e8ed57bab3_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Hello {{ name }}!
", "OCPlatformBundle:Default:index.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\src\\OC\\PlatformBundle/Resources/views/Default/index.html.twig");
    }
}
