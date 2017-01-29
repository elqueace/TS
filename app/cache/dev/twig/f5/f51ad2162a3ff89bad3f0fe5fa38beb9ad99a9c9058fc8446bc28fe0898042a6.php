<?php

/* base.html.twig */
class __TwigTemplate_4d42eeed4a2a49853c4f36301ca304aa4b8bf015161f60ad9db15df5f4a1d892 extends Twig_Template
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
        $__internal_5fd8489d07bb07afa354a5d98cdbd9efe74cd4836f1e7a5233f8a8381d0873f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fd8489d07bb07afa354a5d98cdbd9efe74cd4836f1e7a5233f8a8381d0873f9->enter($__internal_5fd8489d07bb07afa354a5d98cdbd9efe74cd4836f1e7a5233f8a8381d0873f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_5fd8489d07bb07afa354a5d98cdbd9efe74cd4836f1e7a5233f8a8381d0873f9->leave($__internal_5fd8489d07bb07afa354a5d98cdbd9efe74cd4836f1e7a5233f8a8381d0873f9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a420c6964e71c5d83fc3a4f3d2bde21017f24cbfe8744ed9b95ce8dd86923c0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a420c6964e71c5d83fc3a4f3d2bde21017f24cbfe8744ed9b95ce8dd86923c0f->enter($__internal_a420c6964e71c5d83fc3a4f3d2bde21017f24cbfe8744ed9b95ce8dd86923c0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_a420c6964e71c5d83fc3a4f3d2bde21017f24cbfe8744ed9b95ce8dd86923c0f->leave($__internal_a420c6964e71c5d83fc3a4f3d2bde21017f24cbfe8744ed9b95ce8dd86923c0f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f60363fd4e8cb4968dc064ced9c5658c1ca052e43c4d4978cf4191a0e303790b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f60363fd4e8cb4968dc064ced9c5658c1ca052e43c4d4978cf4191a0e303790b->enter($__internal_f60363fd4e8cb4968dc064ced9c5658c1ca052e43c4d4978cf4191a0e303790b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f60363fd4e8cb4968dc064ced9c5658c1ca052e43c4d4978cf4191a0e303790b->leave($__internal_f60363fd4e8cb4968dc064ced9c5658c1ca052e43c4d4978cf4191a0e303790b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_778c31d4ee496af7d31325281c88fdaa6e9e0619ae56bf9e8220169aebeec530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_778c31d4ee496af7d31325281c88fdaa6e9e0619ae56bf9e8220169aebeec530->enter($__internal_778c31d4ee496af7d31325281c88fdaa6e9e0619ae56bf9e8220169aebeec530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_778c31d4ee496af7d31325281c88fdaa6e9e0619ae56bf9e8220169aebeec530->leave($__internal_778c31d4ee496af7d31325281c88fdaa6e9e0619ae56bf9e8220169aebeec530_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c43263884f56dd453ed544bd25ef6235e7982c05bb0d5ca0d73549bc70212549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c43263884f56dd453ed544bd25ef6235e7982c05bb0d5ca0d73549bc70212549->enter($__internal_c43263884f56dd453ed544bd25ef6235e7982c05bb0d5ca0d73549bc70212549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_c43263884f56dd453ed544bd25ef6235e7982c05bb0d5ca0d73549bc70212549->leave($__internal_c43263884f56dd453ed544bd25ef6235e7982c05bb0d5ca0d73549bc70212549_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
", "base.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\app\\Resources\\views\\base.html.twig");
    }
}
