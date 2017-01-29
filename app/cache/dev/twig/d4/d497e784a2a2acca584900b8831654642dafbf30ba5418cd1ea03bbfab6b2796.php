<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_18e4f522a17cfba0a2337aa9aaa07588b8d6f799f3f95bfc6b7b09862421c01b extends Twig_Template
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
        $__internal_934a6e6f65dd5bfc5d961b0ae7a3768d5eba988d2f6e178a997984b618eebe15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_934a6e6f65dd5bfc5d961b0ae7a3768d5eba988d2f6e178a997984b618eebe15->enter($__internal_934a6e6f65dd5bfc5d961b0ae7a3768d5eba988d2f6e178a997984b618eebe15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("TwigBundle:Exception:exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_934a6e6f65dd5bfc5d961b0ae7a3768d5eba988d2f6e178a997984b618eebe15->leave($__internal_934a6e6f65dd5bfc5d961b0ae7a3768d5eba988d2f6e178a997984b618eebe15_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include 'TwigBundle:Exception:exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
