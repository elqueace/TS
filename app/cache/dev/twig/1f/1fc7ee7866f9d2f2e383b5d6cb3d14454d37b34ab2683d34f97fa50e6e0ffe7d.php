<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_6f312dba0118be6c2464ace984146f3d23b0cb5c50f5edcde26642a354fe88a7 extends Twig_Template
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
        $__internal_ce7e682a2083de7e007cb45c10e1148f4fb1ee98e4f43d0082ba5eaf9607c690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce7e682a2083de7e007cb45c10e1148f4fb1ee98e4f43d0082ba5eaf9607c690->enter($__internal_ce7e682a2083de7e007cb45c10e1148f4fb1ee98e4f43d0082ba5eaf9607c690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ce7e682a2083de7e007cb45c10e1148f4fb1ee98e4f43d0082ba5eaf9607c690->leave($__internal_ce7e682a2083de7e007cb45c10e1148f4fb1ee98e4f43d0082ba5eaf9607c690_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
