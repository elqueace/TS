<?php

/* form_div_layout.html.twig */
class __TwigTemplate_3da395b51db692a07865d65d6675c922823206fd23d454859a5e2c6a59f171b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_enctype' => array($this, 'block_form_enctype'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1bf8eba69bd9fb72fd06021a229dccc15f2c9a685ba8a6708a46f5e6db3d2cec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bf8eba69bd9fb72fd06021a229dccc15f2c9a685ba8a6708a46f5e6db3d2cec->enter($__internal_1bf8eba69bd9fb72fd06021a229dccc15f2c9a685ba8a6708a46f5e6db3d2cec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('number_widget', $context, $blocks);
        // line 139
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 144
        $this->displayBlock('money_widget', $context, $blocks);
        // line 148
        $this->displayBlock('url_widget', $context, $blocks);
        // line 153
        $this->displayBlock('search_widget', $context, $blocks);
        // line 158
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 163
        $this->displayBlock('password_widget', $context, $blocks);
        // line 168
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 173
        $this->displayBlock('email_widget', $context, $blocks);
        // line 178
        $this->displayBlock('button_widget', $context, $blocks);
        // line 192
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 197
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 204
        $this->displayBlock('form_label', $context, $blocks);
        // line 226
        $this->displayBlock('button_label', $context, $blocks);
        // line 230
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 238
        $this->displayBlock('form_row', $context, $blocks);
        // line 246
        $this->displayBlock('button_row', $context, $blocks);
        // line 252
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 258
        $this->displayBlock('form', $context, $blocks);
        // line 264
        $this->displayBlock('form_start', $context, $blocks);
        // line 277
        $this->displayBlock('form_end', $context, $blocks);
        // line 284
        $this->displayBlock('form_enctype', $context, $blocks);
        // line 288
        $this->displayBlock('form_errors', $context, $blocks);
        // line 298
        $this->displayBlock('form_rest', $context, $blocks);
        // line 305
        echo "
";
        // line 308
        $this->displayBlock('form_rows', $context, $blocks);
        // line 314
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 331
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 345
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 359
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_1bf8eba69bd9fb72fd06021a229dccc15f2c9a685ba8a6708a46f5e6db3d2cec->leave($__internal_1bf8eba69bd9fb72fd06021a229dccc15f2c9a685ba8a6708a46f5e6db3d2cec_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_fa76680a9ff25c4d5e955d2e549aea162f745fb035f6184b65afa133a6eed818 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa76680a9ff25c4d5e955d2e549aea162f745fb035f6184b65afa133a6eed818->enter($__internal_fa76680a9ff25c4d5e955d2e549aea162f745fb035f6184b65afa133a6eed818_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_fa76680a9ff25c4d5e955d2e549aea162f745fb035f6184b65afa133a6eed818->leave($__internal_fa76680a9ff25c4d5e955d2e549aea162f745fb035f6184b65afa133a6eed818_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_744f1882362a368f07d5444ebff001be795e7b4dd05736ce50aef3fe760b56ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_744f1882362a368f07d5444ebff001be795e7b4dd05736ce50aef3fe760b56ec->enter($__internal_744f1882362a368f07d5444ebff001be795e7b4dd05736ce50aef3fe760b56ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_744f1882362a368f07d5444ebff001be795e7b4dd05736ce50aef3fe760b56ec->leave($__internal_744f1882362a368f07d5444ebff001be795e7b4dd05736ce50aef3fe760b56ec_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_0867e3c7d8584880398421daad899ee8ea57581cb5dbd0cc37fc99fd1a7a5c86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0867e3c7d8584880398421daad899ee8ea57581cb5dbd0cc37fc99fd1a7a5c86->enter($__internal_0867e3c7d8584880398421daad899ee8ea57581cb5dbd0cc37fc99fd1a7a5c86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (twig_test_empty($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array()))) {
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_0867e3c7d8584880398421daad899ee8ea57581cb5dbd0cc37fc99fd1a7a5c86->leave($__internal_0867e3c7d8584880398421daad899ee8ea57581cb5dbd0cc37fc99fd1a7a5c86_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_687b2ba092ee24a02e518f7d66b3e2cccfce3a934e57a814f2d171a062c67372 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_687b2ba092ee24a02e518f7d66b3e2cccfce3a934e57a814f2d171a062c67372->enter($__internal_687b2ba092ee24a02e518f7d66b3e2cccfce3a934e57a814f2d171a062c67372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_687b2ba092ee24a02e518f7d66b3e2cccfce3a934e57a814f2d171a062c67372->leave($__internal_687b2ba092ee24a02e518f7d66b3e2cccfce3a934e57a814f2d171a062c67372_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_613e3d3c6a872a58c59077b9745c56f6a763b92ea8429d939988d2689d38dd92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_613e3d3c6a872a58c59077b9745c56f6a763b92ea8429d939988d2689d38dd92->enter($__internal_613e3d3c6a872a58c59077b9745c56f6a763b92ea8429d939988d2689d38dd92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_613e3d3c6a872a58c59077b9745c56f6a763b92ea8429d939988d2689d38dd92->leave($__internal_613e3d3c6a872a58c59077b9745c56f6a763b92ea8429d939988d2689d38dd92_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_3da9c1e11cd6afeb3e428c494b41012c83c4faf61ac18c53259682d4629d5dad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da9c1e11cd6afeb3e428c494b41012c83c4faf61ac18c53259682d4629d5dad->enter($__internal_3da9c1e11cd6afeb3e428c494b41012c83c4faf61ac18c53259682d4629d5dad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_3da9c1e11cd6afeb3e428c494b41012c83c4faf61ac18c53259682d4629d5dad->leave($__internal_3da9c1e11cd6afeb3e428c494b41012c83c4faf61ac18c53259682d4629d5dad_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_97e2184d82612f3d77be05146847ebf63c286eecce8d5b731b3763583fcd5958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97e2184d82612f3d77be05146847ebf63c286eecce8d5b731b3763583fcd5958->enter($__internal_97e2184d82612f3d77be05146847ebf63c286eecce8d5b731b3763583fcd5958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_97e2184d82612f3d77be05146847ebf63c286eecce8d5b731b3763583fcd5958->leave($__internal_97e2184d82612f3d77be05146847ebf63c286eecce8d5b731b3763583fcd5958_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_9f66ead2a35d65b0a242c6dee231bd4545a7d7b8224ad7e161b45f9672b10efc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f66ead2a35d65b0a242c6dee231bd4545a7d7b8224ad7e161b45f9672b10efc->enter($__internal_9f66ead2a35d65b0a242c6dee231bd4545a7d7b8224ad7e161b45f9672b10efc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && (null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) &&  !(isset($context["placeholder_in_choices"]) ? $context["placeholder_in_choices"] : $this->getContext($context, "placeholder_in_choices"))) &&  !(isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) && ( !$this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "size", array(), "any", true, true) || ($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required")) && twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")) != "")) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) ? $context["placeholder"] : $this->getContext($context, "placeholder")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) > 0) &&  !(null === (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator"))))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_9f66ead2a35d65b0a242c6dee231bd4545a7d7b8224ad7e161b45f9672b10efc->leave($__internal_9f66ead2a35d65b0a242c6dee231bd4545a7d7b8224ad7e161b45f9672b10efc_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_8194c092532f4e656214c86e90bf7de3e6104167fd653c61c77c4d3134df70db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8194c092532f4e656214c86e90bf7de3e6104167fd653c61c77c4d3134df70db->enter($__internal_8194c092532f4e656214c86e90bf7de3e6104167fd653c61c77c4d3134df70db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if ($this->getAttribute($context["choice"], "attr", array())) {
                    echo " ";
                    $context["attr"] = $this->getAttribute($context["choice"], "attr", array());
                    $this->displayBlock("attributes", $context, $blocks);
                }
                if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->isSelectedChoice($context["choice"], (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain")) === false)) ? ($this->getAttribute($context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_8194c092532f4e656214c86e90bf7de3e6104167fd653c61c77c4d3134df70db->leave($__internal_8194c092532f4e656214c86e90bf7de3e6104167fd653c61c77c4d3134df70db_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_ceb86a26264c69b2a505ffcb72c96c8021babb31b8645e7f80bced29bb095379 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceb86a26264c69b2a505ffcb72c96c8021babb31b8645e7f80bced29bb095379->enter($__internal_ceb86a26264c69b2a505ffcb72c96c8021babb31b8645e7f80bced29bb095379_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_ceb86a26264c69b2a505ffcb72c96c8021babb31b8645e7f80bced29bb095379->leave($__internal_ceb86a26264c69b2a505ffcb72c96c8021babb31b8645e7f80bced29bb095379_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_1d6d2c4502533c49480f0ae10253b825cb19d064d0e46ef67b9a5d650c0f5b27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6d2c4502533c49480f0ae10253b825cb19d064d0e46ef67b9a5d650c0f5b27->enter($__internal_1d6d2c4502533c49480f0ae10253b825cb19d064d0e46ef67b9a5d650c0f5b27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) ? $context["checked"] : $this->getContext($context, "checked"))) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_1d6d2c4502533c49480f0ae10253b825cb19d064d0e46ef67b9a5d650c0f5b27->leave($__internal_1d6d2c4502533c49480f0ae10253b825cb19d064d0e46ef67b9a5d650c0f5b27_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_d2b42ddc734ed6ee60a01066f66fc231ae5a70d837ddaeaf59ad3819ab1fb5fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2b42ddc734ed6ee60a01066f66fc231ae5a70d837ddaeaf59ad3819ab1fb5fb->enter($__internal_d2b42ddc734ed6ee60a01066f66fc231ae5a70d837ddaeaf59ad3819ab1fb5fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 101
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 102
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget');
            // line 103
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_d2b42ddc734ed6ee60a01066f66fc231ae5a70d837ddaeaf59ad3819ab1fb5fb->leave($__internal_d2b42ddc734ed6ee60a01066f66fc231ae5a70d837ddaeaf59ad3819ab1fb5fb_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f7bbf6814862a11b740c671ca53974883aaf7013cb7a5e961b56cf90c10ce697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bbf6814862a11b740c671ca53974883aaf7013cb7a5e961b56cf90c10ce697->enter($__internal_f7bbf6814862a11b740c671ca53974883aaf7013cb7a5e961b56cf90c10ce697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 114
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_f7bbf6814862a11b740c671ca53974883aaf7013cb7a5e961b56cf90c10ce697->leave($__internal_f7bbf6814862a11b740c671ca53974883aaf7013cb7a5e961b56cf90c10ce697_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_6db8a23aa9cacd003c0c53b752cee857b189a2d2e1240684d2941609195d70da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6db8a23aa9cacd003c0c53b752cee857b189a2d2e1240684d2941609195d70da->enter($__internal_6db8a23aa9cacd003c0c53b752cee857b189a2d2e1240684d2941609195d70da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget', (isset($context["vars"]) ? $context["vars"] : $this->getContext($context, "vars")));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_6db8a23aa9cacd003c0c53b752cee857b189a2d2e1240684d2941609195d70da->leave($__internal_6db8a23aa9cacd003c0c53b752cee857b189a2d2e1240684d2941609195d70da_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_0517e67c276824c47213997a90cf1064d7f97e0866991d255b2ce020a9a0db4e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0517e67c276824c47213997a90cf1064d7f97e0866991d255b2ce020a9a0db4e->enter($__internal_0517e67c276824c47213997a90cf1064d7f97e0866991d255b2ce020a9a0db4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_0517e67c276824c47213997a90cf1064d7f97e0866991d255b2ce020a9a0db4e->leave($__internal_0517e67c276824c47213997a90cf1064d7f97e0866991d255b2ce020a9a0db4e_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_baedfd7f747f99b83ff8588dc77c7add8ae639c1473160c1fe209b7f02479b6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_baedfd7f747f99b83ff8588dc77c7add8ae639c1473160c1fe209b7f02479b6a->enter($__internal_baedfd7f747f99b83ff8588dc77c7add8ae639c1473160c1fe209b7f02479b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_baedfd7f747f99b83ff8588dc77c7add8ae639c1473160c1fe209b7f02479b6a->leave($__internal_baedfd7f747f99b83ff8588dc77c7add8ae639c1473160c1fe209b7f02479b6a_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_27934a761a5440f253d7a514ed373d79230e8c20cd5710346fdc10685a8cb38b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27934a761a5440f253d7a514ed373d79230e8c20cd5710346fdc10685a8cb38b->enter($__internal_27934a761a5440f253d7a514ed373d79230e8c20cd5710346fdc10685a8cb38b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_27934a761a5440f253d7a514ed373d79230e8c20cd5710346fdc10685a8cb38b->leave($__internal_27934a761a5440f253d7a514ed373d79230e8c20cd5710346fdc10685a8cb38b_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_a371a05e8681df14328ae9ebcf881ee395eeedfc57d5730b49698d91aa8c7b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a371a05e8681df14328ae9ebcf881ee395eeedfc57d5730b49698d91aa8c7b39->enter($__internal_a371a05e8681df14328ae9ebcf881ee395eeedfc57d5730b49698d91aa8c7b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a371a05e8681df14328ae9ebcf881ee395eeedfc57d5730b49698d91aa8c7b39->leave($__internal_a371a05e8681df14328ae9ebcf881ee395eeedfc57d5730b49698d91aa8c7b39_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_9b3ca01fc20b6022f06cd0b0b497038a1f1161439a531be0e35af4d52b4b17b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b3ca01fc20b6022f06cd0b0b497038a1f1161439a531be0e35af4d52b4b17b7->enter($__internal_9b3ca01fc20b6022f06cd0b0b497038a1f1161439a531be0e35af4d52b4b17b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9b3ca01fc20b6022f06cd0b0b497038a1f1161439a531be0e35af4d52b4b17b7->leave($__internal_9b3ca01fc20b6022f06cd0b0b497038a1f1161439a531be0e35af4d52b4b17b7_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_bd9fc7cf9c64374c276572cc08957f8d6974348c24e48e5b1999f8a9c731a342 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd9fc7cf9c64374c276572cc08957f8d6974348c24e48e5b1999f8a9c731a342->enter($__internal_bd9fc7cf9c64374c276572cc08957f8d6974348c24e48e5b1999f8a9c731a342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_bd9fc7cf9c64374c276572cc08957f8d6974348c24e48e5b1999f8a9c731a342->leave($__internal_bd9fc7cf9c64374c276572cc08957f8d6974348c24e48e5b1999f8a9c731a342_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_7734c41fa99165bd652ab46f9f77c872fe07439ae36d6d76a9b64a1b28824412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7734c41fa99165bd652ab46f9f77c872fe07439ae36d6d76a9b64a1b28824412->enter($__internal_7734c41fa99165bd652ab46f9f77c872fe07439ae36d6d76a9b64a1b28824412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7734c41fa99165bd652ab46f9f77c872fe07439ae36d6d76a9b64a1b28824412->leave($__internal_7734c41fa99165bd652ab46f9f77c872fe07439ae36d6d76a9b64a1b28824412_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_d92d86f7ea420e9747cb5a27d433a2afec5565861023414f349db976dd495646 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d92d86f7ea420e9747cb5a27d433a2afec5565861023414f349db976dd495646->enter($__internal_d92d86f7ea420e9747cb5a27d433a2afec5565861023414f349db976dd495646_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d92d86f7ea420e9747cb5a27d433a2afec5565861023414f349db976dd495646->leave($__internal_d92d86f7ea420e9747cb5a27d433a2afec5565861023414f349db976dd495646_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_7872178d4340ae2cfe66adc4d83190f44227463a12ee7bb4e73074be3c9cbbbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7872178d4340ae2cfe66adc4d83190f44227463a12ee7bb4e73074be3c9cbbbe->enter($__internal_7872178d4340ae2cfe66adc4d83190f44227463a12ee7bb4e73074be3c9cbbbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7872178d4340ae2cfe66adc4d83190f44227463a12ee7bb4e73074be3c9cbbbe->leave($__internal_7872178d4340ae2cfe66adc4d83190f44227463a12ee7bb4e73074be3c9cbbbe_prof);

    }

    // line 178
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_fb9a001ed7c987396764d687b5e45c53f753ed4b47551f5c6b07c9618d81d859 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9a001ed7c987396764d687b5e45c53f753ed4b47551f5c6b07c9618d81d859->enter($__internal_fb9a001ed7c987396764d687b5e45c53f753ed4b47551f5c6b07c9618d81d859_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 179
        if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
            // line 180
            if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                // line 181
                $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                 // line 182
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                 // line 183
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            } else {
                // line 186
                $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
            }
        }
        // line 189
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>";
        
        $__internal_fb9a001ed7c987396764d687b5e45c53f753ed4b47551f5c6b07c9618d81d859->leave($__internal_fb9a001ed7c987396764d687b5e45c53f753ed4b47551f5c6b07c9618d81d859_prof);

    }

    // line 192
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_8e4fe8a1e24bf4d4720134b38dda698aaf677b86276dfd253b2aaa78b95fcba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4fe8a1e24bf4d4720134b38dda698aaf677b86276dfd253b2aaa78b95fcba2->enter($__internal_8e4fe8a1e24bf4d4720134b38dda698aaf677b86276dfd253b2aaa78b95fcba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 193
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 194
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_8e4fe8a1e24bf4d4720134b38dda698aaf677b86276dfd253b2aaa78b95fcba2->leave($__internal_8e4fe8a1e24bf4d4720134b38dda698aaf677b86276dfd253b2aaa78b95fcba2_prof);

    }

    // line 197
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_33b27b68d356fc2ac73d81f9922fddcb4603320aeada7d9060162659577849cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b27b68d356fc2ac73d81f9922fddcb4603320aeada7d9060162659577849cf->enter($__internal_33b27b68d356fc2ac73d81f9922fddcb4603320aeada7d9060162659577849cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_33b27b68d356fc2ac73d81f9922fddcb4603320aeada7d9060162659577849cf->leave($__internal_33b27b68d356fc2ac73d81f9922fddcb4603320aeada7d9060162659577849cf_prof);

    }

    // line 204
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_06260d57b3afaa440207356761151042ac6ee56cd370bf159c36f054dd2fd4ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06260d57b3afaa440207356761151042ac6ee56cd370bf159c36f054dd2fd4ae->enter($__internal_06260d57b3afaa440207356761151042ac6ee56cd370bf159c36f054dd2fd4ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 205
        if ( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) {
            // line 206
            if ( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
                // line 207
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("for" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
            }
            // line 209
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 210
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 212
            if (twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")))) {
                // line 213
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 214
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 215
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 216
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 219
                    $context["label"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 222
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</label>";
        }
        
        $__internal_06260d57b3afaa440207356761151042ac6ee56cd370bf159c36f054dd2fd4ae->leave($__internal_06260d57b3afaa440207356761151042ac6ee56cd370bf159c36f054dd2fd4ae_prof);

    }

    // line 226
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_90768e56b083a5937e6362c8961d4c4651bf3f40456138714cbea9ebde87b578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90768e56b083a5937e6362c8961d4c4651bf3f40456138714cbea9ebde87b578->enter($__internal_90768e56b083a5937e6362c8961d4c4651bf3f40456138714cbea9ebde87b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_90768e56b083a5937e6362c8961d4c4651bf3f40456138714cbea9ebde87b578->leave($__internal_90768e56b083a5937e6362c8961d4c4651bf3f40456138714cbea9ebde87b578_prof);

    }

    // line 230
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_fe90e8fe98c4a82eeb9440365c7efd7121f9aecb906665b7ab868699669ede4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe90e8fe98c4a82eeb9440365c7efd7121f9aecb906665b7ab868699669ede4d->enter($__internal_fe90e8fe98c4a82eeb9440365c7efd7121f9aecb906665b7ab868699669ede4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 235
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_fe90e8fe98c4a82eeb9440365c7efd7121f9aecb906665b7ab868699669ede4d->leave($__internal_fe90e8fe98c4a82eeb9440365c7efd7121f9aecb906665b7ab868699669ede4d_prof);

    }

    // line 238
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e0cc1297b3d0c5f93f7300fdf67ff53de27d9d91280c69e39b7d13d0c0db61cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0cc1297b3d0c5f93f7300fdf67ff53de27d9d91280c69e39b7d13d0c0db61cd->enter($__internal_e0cc1297b3d0c5f93f7300fdf67ff53de27d9d91280c69e39b7d13d0c0db61cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 239
        echo "<div>";
        // line 240
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 241
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 242
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 243
        echo "</div>";
        
        $__internal_e0cc1297b3d0c5f93f7300fdf67ff53de27d9d91280c69e39b7d13d0c0db61cd->leave($__internal_e0cc1297b3d0c5f93f7300fdf67ff53de27d9d91280c69e39b7d13d0c0db61cd_prof);

    }

    // line 246
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_a26f4036dda882a306932d6427715cfe7852566afad2b32deb95225fa6b119e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a26f4036dda882a306932d6427715cfe7852566afad2b32deb95225fa6b119e7->enter($__internal_a26f4036dda882a306932d6427715cfe7852566afad2b32deb95225fa6b119e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 247
        echo "<div>";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_a26f4036dda882a306932d6427715cfe7852566afad2b32deb95225fa6b119e7->leave($__internal_a26f4036dda882a306932d6427715cfe7852566afad2b32deb95225fa6b119e7_prof);

    }

    // line 252
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_437ec21d4b0cd9593eb25c97dd8918a7a4bb26bd11d7fd2a83941f11e3020ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_437ec21d4b0cd9593eb25c97dd8918a7a4bb26bd11d7fd2a83941f11e3020ae1->enter($__internal_437ec21d4b0cd9593eb25c97dd8918a7a4bb26bd11d7fd2a83941f11e3020ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_437ec21d4b0cd9593eb25c97dd8918a7a4bb26bd11d7fd2a83941f11e3020ae1->leave($__internal_437ec21d4b0cd9593eb25c97dd8918a7a4bb26bd11d7fd2a83941f11e3020ae1_prof);

    }

    // line 258
    public function block_form($context, array $blocks = array())
    {
        $__internal_4d1b365a73a8fec471d38064e972cd6ef4a2ea05dd727e923f8e18a132f62aa9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d1b365a73a8fec471d38064e972cd6ef4a2ea05dd727e923f8e18a132f62aa9->enter($__internal_4d1b365a73a8fec471d38064e972cd6ef4a2ea05dd727e923f8e18a132f62aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 259
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 261
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_4d1b365a73a8fec471d38064e972cd6ef4a2ea05dd727e923f8e18a132f62aa9->leave($__internal_4d1b365a73a8fec471d38064e972cd6ef4a2ea05dd727e923f8e18a132f62aa9_prof);

    }

    // line 264
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_164440b9c14b1c65870fdfbbf1d6264d0c3cb3429d144089b8f3a8804f6a6c19 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_164440b9c14b1c65870fdfbbf1d6264d0c3cb3429d144089b8f3a8804f6a6c19->enter($__internal_164440b9c14b1c65870fdfbbf1d6264d0c3cb3429d144089b8f3a8804f6a6c19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 265
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")));
        // line 266
        if (twig_in_filter((isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), array(0 => "GET", 1 => "POST"))) {
            // line 267
            $context["form_method"] = (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method"));
        } else {
            // line 269
            $context["form_method"] = "POST";
        }
        // line 271
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method"))), "html", null, true);
        echo "\" action=\"";
        echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
        echo "\"";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 272
        if (((isset($context["form_method"]) ? $context["form_method"] : $this->getContext($context, "form_method")) != (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")))) {
            // line 273
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) ? $context["method"] : $this->getContext($context, "method")), "html", null, true);
            echo "\" />";
        }
        
        $__internal_164440b9c14b1c65870fdfbbf1d6264d0c3cb3429d144089b8f3a8804f6a6c19->leave($__internal_164440b9c14b1c65870fdfbbf1d6264d0c3cb3429d144089b8f3a8804f6a6c19_prof);

    }

    // line 277
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_07d7329ee01fc4979fc9716f6419ea077e8f3343bdd8aeecf0244b77434b23da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07d7329ee01fc4979fc9716f6419ea077e8f3343bdd8aeecf0244b77434b23da->enter($__internal_07d7329ee01fc4979fc9716f6419ea077e8f3343bdd8aeecf0244b77434b23da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 278
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 281
        echo "</form>";
        
        $__internal_07d7329ee01fc4979fc9716f6419ea077e8f3343bdd8aeecf0244b77434b23da->leave($__internal_07d7329ee01fc4979fc9716f6419ea077e8f3343bdd8aeecf0244b77434b23da_prof);

    }

    // line 284
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_f71839859f63d4e33e3d7f1df964cdca0c7f35bd9173ca500998dd1405e30c5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f71839859f63d4e33e3d7f1df964cdca0c7f35bd9173ca500998dd1405e30c5c->enter($__internal_f71839859f63d4e33e3d7f1df964cdca0c7f35bd9173ca500998dd1405e30c5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_enctype"));

        // line 285
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_f71839859f63d4e33e3d7f1df964cdca0c7f35bd9173ca500998dd1405e30c5c->leave($__internal_f71839859f63d4e33e3d7f1df964cdca0c7f35bd9173ca500998dd1405e30c5c_prof);

    }

    // line 288
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_a1935cb602598c8fc5e0384e1936a165e517a46072aa9f07a7586a1cd57846bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1935cb602598c8fc5e0384e1936a165e517a46072aa9f07a7586a1cd57846bf->enter($__internal_a1935cb602598c8fc5e0384e1936a165e517a46072aa9f07a7586a1cd57846bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 289
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 290
            echo "<ul>";
            // line 291
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 292
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 294
            echo "</ul>";
        }
        
        $__internal_a1935cb602598c8fc5e0384e1936a165e517a46072aa9f07a7586a1cd57846bf->leave($__internal_a1935cb602598c8fc5e0384e1936a165e517a46072aa9f07a7586a1cd57846bf_prof);

    }

    // line 298
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_13a814b860268f5f936f0c35ba4c7392cf6198cbbda7e461b5ace35d6bf6653f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a814b860268f5f936f0c35ba4c7392cf6198cbbda7e461b5ace35d6bf6653f->enter($__internal_13a814b860268f5f936f0c35ba4c7392cf6198cbbda7e461b5ace35d6bf6653f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 300
            if ( !$this->getAttribute($context["child"], "rendered", array())) {
                // line 301
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_13a814b860268f5f936f0c35ba4c7392cf6198cbbda7e461b5ace35d6bf6653f->leave($__internal_13a814b860268f5f936f0c35ba4c7392cf6198cbbda7e461b5ace35d6bf6653f_prof);

    }

    // line 308
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_607f18c4ba4ac3a919fca76d1dac4ec941cff1fd5669e2dd93f35de0cd65b10f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_607f18c4ba4ac3a919fca76d1dac4ec941cff1fd5669e2dd93f35de0cd65b10f->enter($__internal_607f18c4ba4ac3a919fca76d1dac4ec941cff1fd5669e2dd93f35de0cd65b10f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 309
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 310
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_607f18c4ba4ac3a919fca76d1dac4ec941cff1fd5669e2dd93f35de0cd65b10f->leave($__internal_607f18c4ba4ac3a919fca76d1dac4ec941cff1fd5669e2dd93f35de0cd65b10f_prof);

    }

    // line 314
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_4b7f99f61b35c980b5c2dce02a30130486d35a2e310b1b63d8daff1f686bbdae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7f99f61b35c980b5c2dce02a30130486d35a2e310b1b63d8daff1f686bbdae->enter($__internal_4b7f99f61b35c980b5c2dce02a30130486d35a2e310b1b63d8daff1f686bbdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 315
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        // line 316
        if ((isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only"))) {
            echo " readonly=\"readonly\"";
        }
        // line 317
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 318
        if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
            echo " required=\"required\"";
        }
        // line 319
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            if ((("readonly" != $context["attrname"]) ||  !(isset($context["read_only"]) ? $context["read_only"] : $this->getContext($context, "read_only")))) {
                // line 320
                echo " ";
                // line 321
                if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                    // line 322
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                    echo "\"";
                } elseif ((                // line 323
$context["attrvalue"] === true)) {
                    // line 324
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "\"";
                } elseif ( !(                // line 325
$context["attrvalue"] === false)) {
                    // line 326
                    echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                    echo "\"";
                }
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4b7f99f61b35c980b5c2dce02a30130486d35a2e310b1b63d8daff1f686bbdae->leave($__internal_4b7f99f61b35c980b5c2dce02a30130486d35a2e310b1b63d8daff1f686bbdae_prof);

    }

    // line 331
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_10719af7a86f588ad2836acc4b589d643fdd82b5298edeb6d9bd95b19f7b5d9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_10719af7a86f588ad2836acc4b589d643fdd82b5298edeb6d9bd95b19f7b5d9f->enter($__internal_10719af7a86f588ad2836acc4b589d643fdd82b5298edeb6d9bd95b19f7b5d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 332
        if ( !twig_test_empty((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
            echo "\"";
        }
        // line 333
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 334
            echo " ";
            // line 335
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 336
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 337
$context["attrvalue"] === true)) {
                // line 338
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 339
$context["attrvalue"] === false)) {
                // line 340
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_10719af7a86f588ad2836acc4b589d643fdd82b5298edeb6d9bd95b19f7b5d9f->leave($__internal_10719af7a86f588ad2836acc4b589d643fdd82b5298edeb6d9bd95b19f7b5d9f_prof);

    }

    // line 345
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_056657afb78f70f7736cfdc023dcdf1b341efc2cd6a32a98d3bb332bb41d30f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_056657afb78f70f7736cfdc023dcdf1b341efc2cd6a32a98d3bb332bb41d30f5->enter($__internal_056657afb78f70f7736cfdc023dcdf1b341efc2cd6a32a98d3bb332bb41d30f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 346
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) ? $context["disabled"] : $this->getContext($context, "disabled"))) {
            echo " disabled=\"disabled\"";
        }
        // line 347
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 348
            echo " ";
            // line 349
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 350
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 351
$context["attrvalue"] === true)) {
                // line 352
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 353
$context["attrvalue"] === false)) {
                // line 354
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_056657afb78f70f7736cfdc023dcdf1b341efc2cd6a32a98d3bb332bb41d30f5->leave($__internal_056657afb78f70f7736cfdc023dcdf1b341efc2cd6a32a98d3bb332bb41d30f5_prof);

    }

    // line 359
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_4ccd51a0c4b7b4048b14dc708e330768021d130010ee7c65ed66d2cd880249a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ccd51a0c4b7b4048b14dc708e330768021d130010ee7c65ed66d2cd880249a5->enter($__internal_4ccd51a0c4b7b4048b14dc708e330768021d130010ee7c65ed66d2cd880249a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 360
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 361
            echo " ";
            // line 362
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 363
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
                echo "\"";
            } elseif ((            // line 364
$context["attrvalue"] === true)) {
                // line 365
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 366
$context["attrvalue"] === false)) {
                // line 367
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4ccd51a0c4b7b4048b14dc708e330768021d130010ee7c65ed66d2cd880249a5->leave($__internal_4ccd51a0c4b7b4048b14dc708e330768021d130010ee7c65ed66d2cd880249a5_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1271 => 367,  1269 => 366,  1264 => 365,  1262 => 364,  1257 => 363,  1255 => 362,  1253 => 361,  1249 => 360,  1243 => 359,  1228 => 354,  1226 => 353,  1221 => 352,  1219 => 351,  1214 => 350,  1212 => 349,  1210 => 348,  1206 => 347,  1197 => 346,  1191 => 345,  1176 => 340,  1174 => 339,  1169 => 338,  1167 => 337,  1162 => 336,  1160 => 335,  1158 => 334,  1154 => 333,  1148 => 332,  1142 => 331,  1126 => 326,  1124 => 325,  1119 => 324,  1117 => 323,  1112 => 322,  1110 => 321,  1108 => 320,  1103 => 319,  1099 => 318,  1095 => 317,  1091 => 316,  1085 => 315,  1079 => 314,  1068 => 310,  1064 => 309,  1058 => 308,  1046 => 301,  1044 => 300,  1040 => 299,  1034 => 298,  1026 => 294,  1018 => 292,  1014 => 291,  1012 => 290,  1010 => 289,  1004 => 288,  995 => 285,  989 => 284,  982 => 281,  979 => 279,  977 => 278,  971 => 277,  961 => 273,  959 => 272,  935 => 271,  932 => 269,  929 => 267,  927 => 266,  925 => 265,  919 => 264,  912 => 261,  910 => 260,  908 => 259,  902 => 258,  895 => 253,  889 => 252,  882 => 249,  880 => 248,  878 => 247,  872 => 246,  865 => 243,  863 => 242,  861 => 241,  859 => 240,  857 => 239,  851 => 238,  844 => 235,  838 => 230,  827 => 226,  804 => 222,  800 => 219,  797 => 216,  796 => 215,  795 => 214,  793 => 213,  791 => 212,  788 => 210,  786 => 209,  783 => 207,  781 => 206,  779 => 205,  773 => 204,  766 => 199,  764 => 198,  758 => 197,  751 => 194,  749 => 193,  743 => 192,  730 => 189,  726 => 186,  723 => 183,  722 => 182,  721 => 181,  719 => 180,  717 => 179,  711 => 178,  704 => 175,  702 => 174,  696 => 173,  689 => 170,  687 => 169,  681 => 168,  674 => 165,  672 => 164,  666 => 163,  658 => 160,  656 => 159,  650 => 158,  643 => 155,  641 => 154,  635 => 153,  628 => 150,  626 => 149,  620 => 148,  613 => 145,  607 => 144,  600 => 141,  598 => 140,  592 => 139,  585 => 136,  583 => 135,  577 => 133,  569 => 129,  559 => 128,  554 => 127,  552 => 126,  549 => 124,  547 => 123,  541 => 122,  533 => 118,  531 => 116,  530 => 115,  529 => 114,  528 => 113,  524 => 112,  521 => 110,  519 => 109,  513 => 108,  505 => 104,  503 => 103,  501 => 102,  499 => 101,  497 => 100,  493 => 99,  490 => 97,  488 => 96,  482 => 95,  465 => 92,  459 => 91,  442 => 88,  436 => 87,  403 => 82,  400 => 80,  398 => 79,  396 => 78,  391 => 77,  389 => 76,  372 => 75,  366 => 74,  359 => 71,  357 => 70,  355 => 69,  349 => 66,  347 => 65,  345 => 64,  343 => 63,  341 => 62,  332 => 60,  330 => 59,  323 => 58,  320 => 56,  318 => 55,  312 => 54,  305 => 51,  299 => 49,  297 => 48,  293 => 47,  289 => 46,  283 => 45,  275 => 41,  272 => 39,  270 => 38,  264 => 37,  253 => 34,  247 => 33,  240 => 30,  237 => 28,  235 => 27,  229 => 26,  222 => 23,  220 => 22,  218 => 21,  215 => 19,  213 => 18,  209 => 17,  203 => 16,  186 => 13,  184 => 12,  178 => 11,  170 => 7,  167 => 5,  165 => 4,  159 => 3,  152 => 359,  150 => 345,  148 => 331,  146 => 314,  144 => 308,  141 => 305,  139 => 298,  137 => 288,  135 => 284,  133 => 277,  131 => 264,  129 => 258,  127 => 252,  125 => 246,  123 => 238,  121 => 230,  119 => 226,  117 => 204,  115 => 197,  113 => 192,  111 => 178,  109 => 173,  107 => 168,  105 => 163,  103 => 158,  101 => 153,  99 => 148,  97 => 144,  95 => 139,  93 => 133,  91 => 122,  89 => 108,  87 => 95,  85 => 91,  83 => 87,  81 => 74,  79 => 54,  77 => 45,  75 => 37,  73 => 33,  71 => 26,  69 => 16,  67 => 11,  65 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? placeholder|trans({}, translation_domain) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %} {% set attr = choice.attr %}{{ block('attributes') }}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</label>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\" action=\"{{ action }}\"{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_enctype -%}
    {% if multipart %}enctype=\"multipart/form-data\"{% endif %}
{%- endblock form_enctype -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor %}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if read_only %} readonly=\"readonly\"{% endif -%}
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {%- for attrname, attrvalue in attr if 'readonly' != attrname or not read_only -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\wamp\\www\\tutorskills_symf\\path\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
