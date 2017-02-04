<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5097694233cea5a5dade7882059e7b25993d5fd921e5870f514f238a3021010b extends Twig_Template
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
        $__internal_7eff7cf1f0b2fc0da849c412fdea1bda73976b12a3785db1e152e02e7a970db7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7eff7cf1f0b2fc0da849c412fdea1bda73976b12a3785db1e152e02e7a970db7->enter($__internal_7eff7cf1f0b2fc0da849c412fdea1bda73976b12a3785db1e152e02e7a970db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("TwigBundle:Exception:error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_7eff7cf1f0b2fc0da849c412fdea1bda73976b12a3785db1e152e02e7a970db7->leave($__internal_7eff7cf1f0b2fc0da849c412fdea1bda73976b12a3785db1e152e02e7a970db7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include 'TwigBundle:Exception:error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "C:\\Users\\ludovic\\Documents\\GitHub\\tutorskills\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
