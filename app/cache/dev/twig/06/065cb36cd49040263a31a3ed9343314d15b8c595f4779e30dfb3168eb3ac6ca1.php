<?php

/* form_div_layout.html.twig */
class __TwigTemplate_7cb9e9ebcb0bd933908c2ca74ba75df388c5a9bbc1612a6ffa75a34528900c1e extends Twig_Template
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
        $__internal_afa21020875d9d9cfb701c385ab113a944efb847fdc5de4ffa8750977faf3ddb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afa21020875d9d9cfb701c385ab113a944efb847fdc5de4ffa8750977faf3ddb->enter($__internal_afa21020875d9d9cfb701c385ab113a944efb847fdc5de4ffa8750977faf3ddb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

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
        
        $__internal_afa21020875d9d9cfb701c385ab113a944efb847fdc5de4ffa8750977faf3ddb->leave($__internal_afa21020875d9d9cfb701c385ab113a944efb847fdc5de4ffa8750977faf3ddb_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_a2283cc23d3e039f97cfa08270e430f943fc368a10ef9c2eef85498454c9dbf2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2283cc23d3e039f97cfa08270e430f943fc368a10ef9c2eef85498454c9dbf2->enter($__internal_a2283cc23d3e039f97cfa08270e430f943fc368a10ef9c2eef85498454c9dbf2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 4
        if ((isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound"))) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_a2283cc23d3e039f97cfa08270e430f943fc368a10ef9c2eef85498454c9dbf2->leave($__internal_a2283cc23d3e039f97cfa08270e430f943fc368a10ef9c2eef85498454c9dbf2_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_9491f6c7ea2791eafeb2bd901e32181473c06798df77741ed7f5f3c1641bce39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9491f6c7ea2791eafeb2bd901e32181473c06798df77741ed7f5f3c1641bce39->enter($__internal_9491f6c7ea2791eafeb2bd901e32181473c06798df77741ed7f5f3c1641bce39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_9491f6c7ea2791eafeb2bd901e32181473c06798df77741ed7f5f3c1641bce39->leave($__internal_9491f6c7ea2791eafeb2bd901e32181473c06798df77741ed7f5f3c1641bce39_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_a7cf751ff96238b328ad0ea24f609f4918f622dbc87eb6812ad0f08eae8e2425 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a7cf751ff96238b328ad0ea24f609f4918f622dbc87eb6812ad0f08eae8e2425->enter($__internal_a7cf751ff96238b328ad0ea24f609f4918f622dbc87eb6812ad0f08eae8e2425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_a7cf751ff96238b328ad0ea24f609f4918f622dbc87eb6812ad0f08eae8e2425->leave($__internal_a7cf751ff96238b328ad0ea24f609f4918f622dbc87eb6812ad0f08eae8e2425_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_77871171bfb4e6d3ea6b10dad33fa4753fc984dd593e3d43b0a4afa5fb769e53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77871171bfb4e6d3ea6b10dad33fa4753fc984dd593e3d43b0a4afa5fb769e53->enter($__internal_77871171bfb4e6d3ea6b10dad33fa4753fc984dd593e3d43b0a4afa5fb769e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("data-prototype" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["prototype"]) ? $context["prototype"] : $this->getContext($context, "prototype")), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_77871171bfb4e6d3ea6b10dad33fa4753fc984dd593e3d43b0a4afa5fb769e53->leave($__internal_77871171bfb4e6d3ea6b10dad33fa4753fc984dd593e3d43b0a4afa5fb769e53_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_eb878f1e0808490f13503d382f9147e2698c70243621f19db24b191adc7125eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb878f1e0808490f13503d382f9147e2698c70243621f19db24b191adc7125eb->enter($__internal_eb878f1e0808490f13503d382f9147e2698c70243621f19db24b191adc7125eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true);
        echo "</textarea>";
        
        $__internal_eb878f1e0808490f13503d382f9147e2698c70243621f19db24b191adc7125eb->leave($__internal_eb878f1e0808490f13503d382f9147e2698c70243621f19db24b191adc7125eb_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_8c66beabaedbe61ab7e9c607ffa42b3455678afd2c19a371d651947a7a9d274c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c66beabaedbe61ab7e9c607ffa42b3455678afd2c19a371d651947a7a9d274c->enter($__internal_8c66beabaedbe61ab7e9c607ffa42b3455678afd2c19a371d651947a7a9d274c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 38
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_8c66beabaedbe61ab7e9c607ffa42b3455678afd2c19a371d651947a7a9d274c->leave($__internal_8c66beabaedbe61ab7e9c607ffa42b3455678afd2c19a371d651947a7a9d274c_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_503918a586c24bd00188ee72c0d6dfcd01b7a356f4dc477854e695283bfe24ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_503918a586c24bd00188ee72c0d6dfcd01b7a356f4dc477854e695283bfe24ca->enter($__internal_503918a586c24bd00188ee72c0d6dfcd01b7a356f4dc477854e695283bfe24ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_503918a586c24bd00188ee72c0d6dfcd01b7a356f4dc477854e695283bfe24ca->leave($__internal_503918a586c24bd00188ee72c0d6dfcd01b7a356f4dc477854e695283bfe24ca_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_56f6b810dc5e72dd20131c37ab5d294ca18c0c0ff7712477fa661492b0a62d29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56f6b810dc5e72dd20131c37ab5d294ca18c0c0ff7712477fa661492b0a62d29->enter($__internal_56f6b810dc5e72dd20131c37ab5d294ca18c0c0ff7712477fa661492b0a62d29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_56f6b810dc5e72dd20131c37ab5d294ca18c0c0ff7712477fa661492b0a62d29->leave($__internal_56f6b810dc5e72dd20131c37ab5d294ca18c0c0ff7712477fa661492b0a62d29_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_a56d54d514498cf008713a1636e6eadcefdb76f974f2a9f125c0b659ec2ac7bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a56d54d514498cf008713a1636e6eadcefdb76f974f2a9f125c0b659ec2ac7bc->enter($__internal_a56d54d514498cf008713a1636e6eadcefdb76f974f2a9f125c0b659ec2ac7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_a56d54d514498cf008713a1636e6eadcefdb76f974f2a9f125c0b659ec2ac7bc->leave($__internal_a56d54d514498cf008713a1636e6eadcefdb76f974f2a9f125c0b659ec2ac7bc_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_4d85a26dba7e545e79c652b381dec8417589c2a0590d7845e1b6c9726b1f8910 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d85a26dba7e545e79c652b381dec8417589c2a0590d7845e1b6c9726b1f8910->enter($__internal_4d85a26dba7e545e79c652b381dec8417589c2a0590d7845e1b6c9726b1f8910_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_4d85a26dba7e545e79c652b381dec8417589c2a0590d7845e1b6c9726b1f8910->leave($__internal_4d85a26dba7e545e79c652b381dec8417589c2a0590d7845e1b6c9726b1f8910_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_66509742820e4d04d09ad3c114292df12beadec5fd71054117f8cde9861a9517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66509742820e4d04d09ad3c114292df12beadec5fd71054117f8cde9861a9517->enter($__internal_66509742820e4d04d09ad3c114292df12beadec5fd71054117f8cde9861a9517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_66509742820e4d04d09ad3c114292df12beadec5fd71054117f8cde9861a9517->leave($__internal_66509742820e4d04d09ad3c114292df12beadec5fd71054117f8cde9861a9517_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b2ffde537d68b4bf85715d0cf0c41136cecc0c350f3f2a40f61d93aec31219da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ffde537d68b4bf85715d0cf0c41136cecc0c350f3f2a40f61d93aec31219da->enter($__internal_b2ffde537d68b4bf85715d0cf0c41136cecc0c350f3f2a40f61d93aec31219da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_b2ffde537d68b4bf85715d0cf0c41136cecc0c350f3f2a40f61d93aec31219da->leave($__internal_b2ffde537d68b4bf85715d0cf0c41136cecc0c350f3f2a40f61d93aec31219da_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_82c3fcf1b0c7f368f797c580f593be78c2e07797dc6b7ff609cdcb4172a4136e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82c3fcf1b0c7f368f797c580f593be78c2e07797dc6b7ff609cdcb4172a4136e->enter($__internal_82c3fcf1b0c7f368f797c580f593be78c2e07797dc6b7ff609cdcb4172a4136e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_82c3fcf1b0c7f368f797c580f593be78c2e07797dc6b7ff609cdcb4172a4136e->leave($__internal_82c3fcf1b0c7f368f797c580f593be78c2e07797dc6b7ff609cdcb4172a4136e_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_14765cd20e039bf6fed365bb343aa071e3f2b22bd8619aead7a63c5d5f688e29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14765cd20e039bf6fed365bb343aa071e3f2b22bd8619aead7a63c5d5f688e29->enter($__internal_14765cd20e039bf6fed365bb343aa071e3f2b22bd8619aead7a63c5d5f688e29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_14765cd20e039bf6fed365bb343aa071e3f2b22bd8619aead7a63c5d5f688e29->leave($__internal_14765cd20e039bf6fed365bb343aa071e3f2b22bd8619aead7a63c5d5f688e29_prof);

    }

    // line 133
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_cd151b4318ce3fc70061233479d7dcf2cc02b0eeee0322731f63c3205e4e82a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd151b4318ce3fc70061233479d7dcf2cc02b0eeee0322731f63c3205e4e82a5->enter($__internal_cd151b4318ce3fc70061233479d7dcf2cc02b0eeee0322731f63c3205e4e82a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 135
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 136
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_cd151b4318ce3fc70061233479d7dcf2cc02b0eeee0322731f63c3205e4e82a5->leave($__internal_cd151b4318ce3fc70061233479d7dcf2cc02b0eeee0322731f63c3205e4e82a5_prof);

    }

    // line 139
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_00fdd9e938fd5a6bb00776e9813f156623bd2d6d0c16d95f86613e8db66b5c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_00fdd9e938fd5a6bb00776e9813f156623bd2d6d0c16d95f86613e8db66b5c83->enter($__internal_00fdd9e938fd5a6bb00776e9813f156623bd2d6d0c16d95f86613e8db66b5c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 140
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "number")) : ("number"));
        // line 141
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_00fdd9e938fd5a6bb00776e9813f156623bd2d6d0c16d95f86613e8db66b5c83->leave($__internal_00fdd9e938fd5a6bb00776e9813f156623bd2d6d0c16d95f86613e8db66b5c83_prof);

    }

    // line 144
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b15547bab1fa6f201d037d07f42bd05d503a6c36f2c6076acdd897d76530d31d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15547bab1fa6f201d037d07f42bd05d503a6c36f2c6076acdd897d76530d31d->enter($__internal_b15547bab1fa6f201d037d07f42bd05d503a6c36f2c6076acdd897d76530d31d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 145
        echo twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_b15547bab1fa6f201d037d07f42bd05d503a6c36f2c6076acdd897d76530d31d->leave($__internal_b15547bab1fa6f201d037d07f42bd05d503a6c36f2c6076acdd897d76530d31d_prof);

    }

    // line 148
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_d2266e5fea3be94a26bef7463335e63759129cd41105a9eab5488efcaf177f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2266e5fea3be94a26bef7463335e63759129cd41105a9eab5488efcaf177f0b->enter($__internal_d2266e5fea3be94a26bef7463335e63759129cd41105a9eab5488efcaf177f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 149
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "url")) : ("url"));
        // line 150
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d2266e5fea3be94a26bef7463335e63759129cd41105a9eab5488efcaf177f0b->leave($__internal_d2266e5fea3be94a26bef7463335e63759129cd41105a9eab5488efcaf177f0b_prof);

    }

    // line 153
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_89b30c34aaaab52e339eee7d2ba6b93269752d3e73966dac58baee8736932587 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89b30c34aaaab52e339eee7d2ba6b93269752d3e73966dac58baee8736932587->enter($__internal_89b30c34aaaab52e339eee7d2ba6b93269752d3e73966dac58baee8736932587_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 154
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "search")) : ("search"));
        // line 155
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_89b30c34aaaab52e339eee7d2ba6b93269752d3e73966dac58baee8736932587->leave($__internal_89b30c34aaaab52e339eee7d2ba6b93269752d3e73966dac58baee8736932587_prof);

    }

    // line 158
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_aa5ed2beb2be1da0c241d137ac691baf61522634fd350d8729d3c280bc0db62a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5ed2beb2be1da0c241d137ac691baf61522634fd350d8729d3c280bc0db62a->enter($__internal_aa5ed2beb2be1da0c241d137ac691baf61522634fd350d8729d3c280bc0db62a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 159
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "text")) : ("text"));
        // line 160
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_aa5ed2beb2be1da0c241d137ac691baf61522634fd350d8729d3c280bc0db62a->leave($__internal_aa5ed2beb2be1da0c241d137ac691baf61522634fd350d8729d3c280bc0db62a_prof);

    }

    // line 163
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_a471eda38ddd1ea78d71ddd0cf9a64fb7c30ebc23b8ec83df20b8483937f7182 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a471eda38ddd1ea78d71ddd0cf9a64fb7c30ebc23b8ec83df20b8483937f7182->enter($__internal_a471eda38ddd1ea78d71ddd0cf9a64fb7c30ebc23b8ec83df20b8483937f7182_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 164
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "password")) : ("password"));
        // line 165
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_a471eda38ddd1ea78d71ddd0cf9a64fb7c30ebc23b8ec83df20b8483937f7182->leave($__internal_a471eda38ddd1ea78d71ddd0cf9a64fb7c30ebc23b8ec83df20b8483937f7182_prof);

    }

    // line 168
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_7bec3defd51a4625ed7fa1d6c7dbbb6d696e62f488f00f0a93a0eaf98af565c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bec3defd51a4625ed7fa1d6c7dbbb6d696e62f488f00f0a93a0eaf98af565c5->enter($__internal_7bec3defd51a4625ed7fa1d6c7dbbb6d696e62f488f00f0a93a0eaf98af565c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 169
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "hidden")) : ("hidden"));
        // line 170
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_7bec3defd51a4625ed7fa1d6c7dbbb6d696e62f488f00f0a93a0eaf98af565c5->leave($__internal_7bec3defd51a4625ed7fa1d6c7dbbb6d696e62f488f00f0a93a0eaf98af565c5_prof);

    }

    // line 173
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_57891f68dbbdb4f5ea6ebb5c70e56bd8d4ab5d85841d8188748db69e24f84d0c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57891f68dbbdb4f5ea6ebb5c70e56bd8d4ab5d85841d8188748db69e24f84d0c->enter($__internal_57891f68dbbdb4f5ea6ebb5c70e56bd8d4ab5d85841d8188748db69e24f84d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 174
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "email")) : ("email"));
        // line 175
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_57891f68dbbdb4f5ea6ebb5c70e56bd8d4ab5d85841d8188748db69e24f84d0c->leave($__internal_57891f68dbbdb4f5ea6ebb5c70e56bd8d4ab5d85841d8188748db69e24f84d0c_prof);

    }

    // line 178
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_758c3a53c232a5d25e6c6fea3a5c00035d93fb374c091803fdd3eb34a0f1bd86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758c3a53c232a5d25e6c6fea3a5c00035d93fb374c091803fdd3eb34a0f1bd86->enter($__internal_758c3a53c232a5d25e6c6fea3a5c00035d93fb374c091803fdd3eb34a0f1bd86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_758c3a53c232a5d25e6c6fea3a5c00035d93fb374c091803fdd3eb34a0f1bd86->leave($__internal_758c3a53c232a5d25e6c6fea3a5c00035d93fb374c091803fdd3eb34a0f1bd86_prof);

    }

    // line 192
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_3ae454b53effd55920707a11e11ba84c83ee03d74a27f3402fada70c5cca63b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ae454b53effd55920707a11e11ba84c83ee03d74a27f3402fada70c5cca63b3->enter($__internal_3ae454b53effd55920707a11e11ba84c83ee03d74a27f3402fada70c5cca63b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 193
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit"));
        // line 194
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_3ae454b53effd55920707a11e11ba84c83ee03d74a27f3402fada70c5cca63b3->leave($__internal_3ae454b53effd55920707a11e11ba84c83ee03d74a27f3402fada70c5cca63b3_prof);

    }

    // line 197
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_4e75aaf7da0f0eac2ca56fa07e5a585798ae8ace7411fc0856977d72a032c921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e75aaf7da0f0eac2ca56fa07e5a585798ae8ace7411fc0856977d72a032c921->enter($__internal_4e75aaf7da0f0eac2ca56fa07e5a585798ae8ace7411fc0856977d72a032c921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 198
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "reset")) : ("reset"));
        // line 199
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_4e75aaf7da0f0eac2ca56fa07e5a585798ae8ace7411fc0856977d72a032c921->leave($__internal_4e75aaf7da0f0eac2ca56fa07e5a585798ae8ace7411fc0856977d72a032c921_prof);

    }

    // line 204
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_4250e0330d649006cd388be805671e1192d536e24a023318d72685b971f7b1b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4250e0330d649006cd388be805671e1192d536e24a023318d72685b971f7b1b2->enter($__internal_4250e0330d649006cd388be805671e1192d536e24a023318d72685b971f7b1b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_4250e0330d649006cd388be805671e1192d536e24a023318d72685b971f7b1b2->leave($__internal_4250e0330d649006cd388be805671e1192d536e24a023318d72685b971f7b1b2_prof);

    }

    // line 226
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_332aebd0a23529dc8ce63d7fcd8aa253cc4f389c87bc55f3cbb8be853b3a9f7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_332aebd0a23529dc8ce63d7fcd8aa253cc4f389c87bc55f3cbb8be853b3a9f7d->enter($__internal_332aebd0a23529dc8ce63d7fcd8aa253cc4f389c87bc55f3cbb8be853b3a9f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        
        $__internal_332aebd0a23529dc8ce63d7fcd8aa253cc4f389c87bc55f3cbb8be853b3a9f7d->leave($__internal_332aebd0a23529dc8ce63d7fcd8aa253cc4f389c87bc55f3cbb8be853b3a9f7d_prof);

    }

    // line 230
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_8580e16a7e28f843d1cea2127534a55dfc7d74aa6979660df572b9524265fa3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8580e16a7e28f843d1cea2127534a55dfc7d74aa6979660df572b9524265fa3c->enter($__internal_8580e16a7e28f843d1cea2127534a55dfc7d74aa6979660df572b9524265fa3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 235
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_8580e16a7e28f843d1cea2127534a55dfc7d74aa6979660df572b9524265fa3c->leave($__internal_8580e16a7e28f843d1cea2127534a55dfc7d74aa6979660df572b9524265fa3c_prof);

    }

    // line 238
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d7dfee7fad03d7aa8ede26616eda5286565fbc2ee12f09ac123f5faffa76e39d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7dfee7fad03d7aa8ede26616eda5286565fbc2ee12f09ac123f5faffa76e39d->enter($__internal_d7dfee7fad03d7aa8ede26616eda5286565fbc2ee12f09ac123f5faffa76e39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_d7dfee7fad03d7aa8ede26616eda5286565fbc2ee12f09ac123f5faffa76e39d->leave($__internal_d7dfee7fad03d7aa8ede26616eda5286565fbc2ee12f09ac123f5faffa76e39d_prof);

    }

    // line 246
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_0ff343ff818e6e53610bdce1616ecd222e748edab015e75c447d1e16752645ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ff343ff818e6e53610bdce1616ecd222e748edab015e75c447d1e16752645ba->enter($__internal_0ff343ff818e6e53610bdce1616ecd222e748edab015e75c447d1e16752645ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 247
        echo "<div>";
        // line 248
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 249
        echo "</div>";
        
        $__internal_0ff343ff818e6e53610bdce1616ecd222e748edab015e75c447d1e16752645ba->leave($__internal_0ff343ff818e6e53610bdce1616ecd222e748edab015e75c447d1e16752645ba_prof);

    }

    // line 252
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_1d7cea9424a0323843b44c8672fd49617c220fe1544f7d7d39ecabef11e7a71c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d7cea9424a0323843b44c8672fd49617c220fe1544f7d7d39ecabef11e7a71c->enter($__internal_1d7cea9424a0323843b44c8672fd49617c220fe1544f7d7d39ecabef11e7a71c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 253
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        
        $__internal_1d7cea9424a0323843b44c8672fd49617c220fe1544f7d7d39ecabef11e7a71c->leave($__internal_1d7cea9424a0323843b44c8672fd49617c220fe1544f7d7d39ecabef11e7a71c_prof);

    }

    // line 258
    public function block_form($context, array $blocks = array())
    {
        $__internal_c789208bfef4956223c0414bcdae18e69c58ad622c5137a5953a0c8d2a445084 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c789208bfef4956223c0414bcdae18e69c58ad622c5137a5953a0c8d2a445084->enter($__internal_c789208bfef4956223c0414bcdae18e69c58ad622c5137a5953a0c8d2a445084_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 259
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        // line 260
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 261
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        
        $__internal_c789208bfef4956223c0414bcdae18e69c58ad622c5137a5953a0c8d2a445084->leave($__internal_c789208bfef4956223c0414bcdae18e69c58ad622c5137a5953a0c8d2a445084_prof);

    }

    // line 264
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_298878d1dfc4e25df2a0958e6fd81a8b45a752082393de042ecc907ac76149b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_298878d1dfc4e25df2a0958e6fd81a8b45a752082393de042ecc907ac76149b9->enter($__internal_298878d1dfc4e25df2a0958e6fd81a8b45a752082393de042ecc907ac76149b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_298878d1dfc4e25df2a0958e6fd81a8b45a752082393de042ecc907ac76149b9->leave($__internal_298878d1dfc4e25df2a0958e6fd81a8b45a752082393de042ecc907ac76149b9_prof);

    }

    // line 277
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_b7cec2cb1a5617ad7a49762047dbf4b73161a3c05180f321859b9a5d59cc39ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7cec2cb1a5617ad7a49762047dbf4b73161a3c05180f321859b9a5d59cc39ee->enter($__internal_b7cec2cb1a5617ad7a49762047dbf4b73161a3c05180f321859b9a5d59cc39ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 278
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) ? $context["render_rest"] : $this->getContext($context, "render_rest")))) {
            // line 279
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        }
        // line 281
        echo "</form>";
        
        $__internal_b7cec2cb1a5617ad7a49762047dbf4b73161a3c05180f321859b9a5d59cc39ee->leave($__internal_b7cec2cb1a5617ad7a49762047dbf4b73161a3c05180f321859b9a5d59cc39ee_prof);

    }

    // line 284
    public function block_form_enctype($context, array $blocks = array())
    {
        $__internal_1287f32819253760ed798980e7c2fcdc3c82743518366ceefb36b19c9dc200be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1287f32819253760ed798980e7c2fcdc3c82743518366ceefb36b19c9dc200be->enter($__internal_1287f32819253760ed798980e7c2fcdc3c82743518366ceefb36b19c9dc200be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

        // line 285
        if ((isset($context["multipart"]) ? $context["multipart"] : $this->getContext($context, "multipart"))) {
            echo "enctype=\"multipart/form-data\"";
        }
        
        $__internal_1287f32819253760ed798980e7c2fcdc3c82743518366ceefb36b19c9dc200be->leave($__internal_1287f32819253760ed798980e7c2fcdc3c82743518366ceefb36b19c9dc200be_prof);

    }

    // line 288
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ad522eadb3c48316ee2c99c39f439328cdf7e88a00eca70470345ed48aa41ed7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad522eadb3c48316ee2c99c39f439328cdf7e88a00eca70470345ed48aa41ed7->enter($__internal_ad522eadb3c48316ee2c99c39f439328cdf7e88a00eca70470345ed48aa41ed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_ad522eadb3c48316ee2c99c39f439328cdf7e88a00eca70470345ed48aa41ed7->leave($__internal_ad522eadb3c48316ee2c99c39f439328cdf7e88a00eca70470345ed48aa41ed7_prof);

    }

    // line 298
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_44041bdd955d31028893c4024f6f3e7afdf526570941e65f026632a18de61fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44041bdd955d31028893c4024f6f3e7afdf526570941e65f026632a18de61fed->enter($__internal_44041bdd955d31028893c4024f6f3e7afdf526570941e65f026632a18de61fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_44041bdd955d31028893c4024f6f3e7afdf526570941e65f026632a18de61fed->leave($__internal_44041bdd955d31028893c4024f6f3e7afdf526570941e65f026632a18de61fed_prof);

    }

    // line 308
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_5e4609f173777aadc0a09b0e0044cf5ee0e50a904a84e23a7b815b7d72a91a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e4609f173777aadc0a09b0e0044cf5ee0e50a904a84e23a7b815b7d72a91a77->enter($__internal_5e4609f173777aadc0a09b0e0044cf5ee0e50a904a84e23a7b815b7d72a91a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_5e4609f173777aadc0a09b0e0044cf5ee0e50a904a84e23a7b815b7d72a91a77->leave($__internal_5e4609f173777aadc0a09b0e0044cf5ee0e50a904a84e23a7b815b7d72a91a77_prof);

    }

    // line 314
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_fc6e3d6464be8d8c297316c6437993ca920c8b76f702ed5d72b338e59aa9dea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc6e3d6464be8d8c297316c6437993ca920c8b76f702ed5d72b338e59aa9dea8->enter($__internal_fc6e3d6464be8d8c297316c6437993ca920c8b76f702ed5d72b338e59aa9dea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_fc6e3d6464be8d8c297316c6437993ca920c8b76f702ed5d72b338e59aa9dea8->leave($__internal_fc6e3d6464be8d8c297316c6437993ca920c8b76f702ed5d72b338e59aa9dea8_prof);

    }

    // line 331
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_37babda5b58c1b6e7670619aa3cb2e77f6018f3343608d62a00b7a2f0068d353 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37babda5b58c1b6e7670619aa3cb2e77f6018f3343608d62a00b7a2f0068d353->enter($__internal_37babda5b58c1b6e7670619aa3cb2e77f6018f3343608d62a00b7a2f0068d353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_37babda5b58c1b6e7670619aa3cb2e77f6018f3343608d62a00b7a2f0068d353->leave($__internal_37babda5b58c1b6e7670619aa3cb2e77f6018f3343608d62a00b7a2f0068d353_prof);

    }

    // line 345
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_c7e62a31fcec34333be10926f0552c491076b186a11915ec1f6b2f3cbc0ee25d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e62a31fcec34333be10926f0552c491076b186a11915ec1f6b2f3cbc0ee25d->enter($__internal_c7e62a31fcec34333be10926f0552c491076b186a11915ec1f6b2f3cbc0ee25d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_c7e62a31fcec34333be10926f0552c491076b186a11915ec1f6b2f3cbc0ee25d->leave($__internal_c7e62a31fcec34333be10926f0552c491076b186a11915ec1f6b2f3cbc0ee25d_prof);

    }

    // line 359
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_2518d73fb2cd4fe6e0a73ff32295b5fefcc4bd76ab4c2b3195821763f72ff9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2518d73fb2cd4fe6e0a73ff32295b5fefcc4bd76ab4c2b3195821763f72ff9ee->enter($__internal_2518d73fb2cd4fe6e0a73ff32295b5fefcc4bd76ab4c2b3195821763f72ff9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_div_layout.html.twig"));

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
        
        $__internal_2518d73fb2cd4fe6e0a73ff32295b5fefcc4bd76ab4c2b3195821763f72ff9ee->leave($__internal_2518d73fb2cd4fe6e0a73ff32295b5fefcc4bd76ab4c2b3195821763f72ff9ee_prof);

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
", "form_div_layout.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
