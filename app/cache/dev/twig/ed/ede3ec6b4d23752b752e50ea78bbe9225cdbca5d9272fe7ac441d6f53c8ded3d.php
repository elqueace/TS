<?php

/* ::form_log_reg.html.twig */
class __TwigTemplate_065b6671596521655afe6a339c331eef3920f6d246ed4b1419d06f7f9bdd5e00 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e4bed5a5d4ee3b277240b390e8e3c43680b63170222bad9c7f9b4c456bc234b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4bed5a5d4ee3b277240b390e8e3c43680b63170222bad9c7f9b4c456bc234b0->enter($__internal_e4bed5a5d4ee3b277240b390e8e3c43680b63170222bad9c7f9b4c456bc234b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::form_log_reg.html.twig"));

        // line 1
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 6
        echo "  
<div id=\"fh5co-pricing\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t <div class=\"login-wrap\">
\t<div class=\"login-html\">
\t\t<input id=\"tab-1\" type=\"radio\" name=\"tab\" class=\"sign-in\" checked><label for=\"tab-1\" class=\"tab\">Sign In</label>
\t\t<input id=\"tab-2\" type=\"radio\" name=\"tab\" class=\"sign-up\"><label for=\"tab-2\" class=\"tab\">Sign Up</label>
\t\t<div class=\"login-form\">
\t\t\t<div class=\"sign-in-htm\">
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"user\" class=\"label\">Username</label>
\t\t\t\t\t<input id=\"user\" type=\"text\" class=\"input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Password</label>
\t\t\t\t\t<input id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input id=\"check\" type=\"checkbox\" class=\"check\" checked>
\t\t\t\t\t<label for=\"check\"><span class=\"icon\"></span> Keep me Signed in</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign In\">
\t\t\t\t</div>
\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t<div class=\"foot-lnk\">
\t\t\t\t\t<a href=\"#forgot\">Forgot Password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sign-up-htm\">
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"user\" class=\"label\">Username</label>
\t\t\t\t\t<input id=\"user\" type=\"text\" class=\"input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Password</label>
\t\t\t\t\t<input id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Repeat Password</label>
\t\t\t\t\t<input id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Email Address</label>
\t\t\t\t\t<input id=\"pass\" type=\"text\" class=\"input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign Up\">
\t\t\t\t</div>
\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t<div class=\"foot-lnk\">
\t\t\t\t\t<label for=\"tab-1\">Already Member?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
  
\t\t\t</div>
\t\t</div>
\t</div>
 ";
        
        $__internal_e4bed5a5d4ee3b277240b390e8e3c43680b63170222bad9c7f9b4c456bc234b0->leave($__internal_e4bed5a5d4ee3b277240b390e8e3c43680b63170222bad9c7f9b4c456bc234b0_prof);

    }

    // line 1
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_9efd89abdb5d68a735238590e92b581be8ae1ba77a5481b6904477ecd1e5d8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9efd89abdb5d68a735238590e92b581be8ae1ba77a5481b6904477ecd1e5d8a5->enter($__internal_9efd89abdb5d68a735238590e92b581be8ae1ba77a5481b6904477ecd1e5d8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 2
        echo "    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/log_reg/style.css"), "html", null, true);
        echo "\" />

";
        
        $__internal_9efd89abdb5d68a735238590e92b581be8ae1ba77a5481b6904477ecd1e5d8a5->leave($__internal_9efd89abdb5d68a735238590e92b581be8ae1ba77a5481b6904477ecd1e5d8a5_prof);

    }

    public function getTemplateName()
    {
        return "::form_log_reg.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  103 => 3,  100 => 2,  94 => 1,  25 => 6,  23 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block stylesheets %}
    <link href=\"https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,700,800\" rel=\"stylesheet\">
   <link rel=\"stylesheet\" href=\"{{ asset('css/log_reg/style.css') }}\" />

{% endblock %}
  
<div id=\"fh5co-pricing\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t <div class=\"login-wrap\">
\t<div class=\"login-html\">
\t\t<input id=\"tab-1\" type=\"radio\" name=\"tab\" class=\"sign-in\" checked><label for=\"tab-1\" class=\"tab\">Sign In</label>
\t\t<input id=\"tab-2\" type=\"radio\" name=\"tab\" class=\"sign-up\"><label for=\"tab-2\" class=\"tab\">Sign Up</label>
\t\t<div class=\"login-form\">
\t\t\t<div class=\"sign-in-htm\">
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"user\" class=\"label\">Username</label>
\t\t\t\t\t<input id=\"user\" type=\"text\" class=\"input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Password</label>
\t\t\t\t\t<input id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input id=\"check\" type=\"checkbox\" class=\"check\" checked>
\t\t\t\t\t<label for=\"check\"><span class=\"icon\"></span> Keep me Signed in</label>
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign In\">
\t\t\t\t</div>
\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t<div class=\"foot-lnk\">
\t\t\t\t\t<a href=\"#forgot\">Forgot Password?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"sign-up-htm\">
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"user\" class=\"label\">Username</label>
\t\t\t\t\t<input id=\"user\" type=\"text\" class=\"input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Password</label>
\t\t\t\t\t<input id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Repeat Password</label>
\t\t\t\t\t<input id=\"pass\" type=\"password\" class=\"input\" data-type=\"password\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<label for=\"pass\" class=\"label\">Email Address</label>
\t\t\t\t\t<input id=\"pass\" type=\"text\" class=\"input\">
\t\t\t\t</div>
\t\t\t\t<div class=\"group\">
\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Sign Up\">
\t\t\t\t</div>
\t\t\t\t<div class=\"hr\"></div>
\t\t\t\t<div class=\"foot-lnk\">
\t\t\t\t\t<label for=\"tab-1\">Already Member?</a>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
</div>
  
\t\t\t</div>
\t\t</div>
\t</div>
 ", "::form_log_reg.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app/Resources\\views/form_log_reg.html.twig");
    }
}
