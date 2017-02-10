<?php

/* ::base.html.twig */
class __TwigTemplate_77014b44006f6d8b14f07d1d67f84c8bffc4d4f264a265d83d2e7ae898c21f0a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b6ed7be96b47a2ab446279fedbf9a3fbb402d68a4b76e86c81f69f5000e7e5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b6ed7be96b47a2ab446279fedbf9a3fbb402d68a4b76e86c81f69f5000e7e5f->enter($__internal_5b6ed7be96b47a2ab446279fedbf9a3fbb402d68a4b76e86c81f69f5000e7e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_5b6ed7be96b47a2ab446279fedbf9a3fbb402d68a4b76e86c81f69f5000e7e5f->leave($__internal_5b6ed7be96b47a2ab446279fedbf9a3fbb402d68a4b76e86c81f69f5000e7e5f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_aa8077452cc441a588b793f5f79159b6521ea135a7664ab8fefb3c6367cc25a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa8077452cc441a588b793f5f79159b6521ea135a7664ab8fefb3c6367cc25a5->enter($__internal_aa8077452cc441a588b793f5f79159b6521ea135a7664ab8fefb3c6367cc25a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_aa8077452cc441a588b793f5f79159b6521ea135a7664ab8fefb3c6367cc25a5->leave($__internal_aa8077452cc441a588b793f5f79159b6521ea135a7664ab8fefb3c6367cc25a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eac48f2d87daef520cd9968830b701f12ab3ae675e05be66b63f32403a607ba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eac48f2d87daef520cd9968830b701f12ab3ae675e05be66b63f32403a607ba8->enter($__internal_eac48f2d87daef520cd9968830b701f12ab3ae675e05be66b63f32403a607ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_eac48f2d87daef520cd9968830b701f12ab3ae675e05be66b63f32403a607ba8->leave($__internal_eac48f2d87daef520cd9968830b701f12ab3ae675e05be66b63f32403a607ba8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_97e0698b6d29ca183b4e59de44441a4815fd941941d0f83576e5b9655cb26b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e0698b6d29ca183b4e59de44441a4815fd941941d0f83576e5b9655cb26b89->enter($__internal_97e0698b6d29ca183b4e59de44441a4815fd941941d0f83576e5b9655cb26b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_97e0698b6d29ca183b4e59de44441a4815fd941941d0f83576e5b9655cb26b89->leave($__internal_97e0698b6d29ca183b4e59de44441a4815fd941941d0f83576e5b9655cb26b89_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e1c31bc47fb2d265015e4b2afbef50494f04e7c790195f8ea69f5e5ea8e3191 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1c31bc47fb2d265015e4b2afbef50494f04e7c790195f8ea69f5e5ea8e3191->enter($__internal_0e1c31bc47fb2d265015e4b2afbef50494f04e7c790195f8ea69f5e5ea8e3191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0e1c31bc47fb2d265015e4b2afbef50494f04e7c790195f8ea69f5e5ea8e3191->leave($__internal_0e1c31bc47fb2d265015e4b2afbef50494f04e7c790195f8ea69f5e5ea8e3191_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app/Resources\\views/base.html.twig");
    }
}
