<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_e09bf354c5275833b43aa93f65a84cc5f96b9d812d6bf6fe4f5eaec819cdd988 extends Twig_Template
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
        $__internal_841ff5e8df1f5497c6e1e143a2f8c760b21b677ec6b2cafda91fe5037885f8a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_841ff5e8df1f5497c6e1e143a2f8c760b21b677ec6b2cafda91fe5037885f8a2->enter($__internal_841ff5e8df1f5497c6e1e143a2f8c760b21b677ec6b2cafda91fe5037885f8a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_841ff5e8df1f5497c6e1e143a2f8c760b21b677ec6b2cafda91fe5037885f8a2->leave($__internal_841ff5e8df1f5497c6e1e143a2f8c760b21b677ec6b2cafda91fe5037885f8a2_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{% include 'TwigBundle:Exception:exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
