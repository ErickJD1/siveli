<?php

/* EMMUserBundle:User:add.html.twig */
class __TwigTemplate_24f9e2329e576e3c5f9e817c9552a230098a76e2b407c699a454a0e28add9d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:User:add.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1b884d731c310ee629b6a1ccdb55df5bc5c981f10548139b311490f9a652d02e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b884d731c310ee629b6a1ccdb55df5bc5c981f10548139b311490f9a652d02e->enter($__internal_1b884d731c310ee629b6a1ccdb55df5bc5c981f10548139b311490f9a652d02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b884d731c310ee629b6a1ccdb55df5bc5c981f10548139b311490f9a652d02e->leave($__internal_1b884d731c310ee629b6a1ccdb55df5bc5c981f10548139b311490f9a652d02e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_17a7f443a04622183a82b8c7758e046d127de09c7f4548e3e14e2bbdd7902946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17a7f443a04622183a82b8c7758e046d127de09c7f4548e3e14e2bbdd7902946->enter($__internal_17a7f443a04622183a82b8c7758e046d127de09c7f4548e3e14e2bbdd7902946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:User:add.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New user", array(), "messages");
        echo "</h2>
\t\t\t\t</div>
                ";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
                
                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your username")));
        echo "
                    <span class=\"text-danger\">";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
                </div>
                
\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 20
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'label');
        echo "
\t\t\t        ";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your first name")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "firstName", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'label');
        echo "
\t\t\t        ";
        // line 27
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your last name")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "lastName", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label');
        echo "
\t\t\t        ";
        // line 33
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your email")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
\t\t\t        ";
        // line 39
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Your password")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        ";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label');
        echo "
\t\t\t        ";
        // line 45
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t        <span class=\"text-danger\">";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'errors');
        echo "</span>
\t\t\t    </div>

\t\t\t\t<div class=\"checkbox\">
\t\t\t\t    <label>
\t\t\t\t\t\t";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'widget');
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Active", array(), "messages");
        // line 52
        echo "\t\t\t\t\t\t<span class=\"text-danger\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "isActive", array()), 'errors');
        echo "</span>
\t\t\t\t    </label>
\t\t\t\t</div>
\t\t\t</fieldset>

\t\t    <p>
\t\t        ";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create user", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t    </p>                
        
                ";
        // line 61
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_17a7f443a04622183a82b8c7758e046d127de09c7f4548e3e14e2bbdd7902946->leave($__internal_17a7f443a04622183a82b8c7758e046d127de09c7f4548e3e14e2bbdd7902946_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 61,  164 => 58,  154 => 52,  151 => 51,  143 => 46,  139 => 45,  135 => 44,  128 => 40,  124 => 39,  120 => 38,  113 => 34,  109 => 33,  105 => 32,  98 => 28,  94 => 27,  90 => 26,  83 => 22,  79 => 21,  75 => 20,  68 => 16,  64 => 15,  60 => 14,  54 => 11,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'layout.html.twig' %}

{% block body %}
    {{ parent() }}
\t<div class=\"main container\">
\t\t<div class=\"row well\">
\t\t\t<div class=\"col-md-6\">
\t\t\t\t<div class=\"page-header\">
\t\t\t\t\t<h2>{% trans %}New user{% endtrans %}</h2>
\t\t\t\t</div>
                {{ form_start(form, { 'attr' : {'novalidate': 'novalidate', 'role' : 'form'} }) }}
                
                <div class=\"form-group\">
                    {{ form_label(form.username) }}
                    {{ form_widget(form.username, { 'attr' : {'class' : 'form-control', 'placeholder' : 'Your username'} }) }}
                    <span class=\"text-danger\">{{ form_errors(form.username) }}</span>
                </div>
                
\t\t\t    <div class=\"form-group\">
\t\t\t        {{ form_label(form.firstName) }}
\t\t\t        {{ form_widget(form.firstName, {'attr': {'class': 'form-control', 'placeholder' : 'Your first name'}}) }}
\t\t\t        <span class=\"text-danger\">{{ form_errors(form.firstName) }}</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        {{ form_label(form.lastName) }}
\t\t\t        {{ form_widget(form.lastName, {'attr': {'class': 'form-control', 'placeholder' : 'Your last name'}}) }}
\t\t\t        <span class=\"text-danger\">{{ form_errors(form.lastName) }}</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        {{ form_label(form.email) }}
\t\t\t        {{ form_widget(form.email, {'attr': {'class': 'form-control', 'placeholder' : 'Your email'}}) }}
\t\t\t        <span class=\"text-danger\">{{ form_errors(form.email) }}</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        {{ form_label(form.password) }}
\t\t\t        {{ form_widget(form.password, {'attr': {'class': 'form-control', 'placeholder' : 'Your password'}}) }}
\t\t\t        <span class=\"text-danger\">{{ form_errors(form.password) }}</span>
\t\t\t    </div>

\t\t\t    <div class=\"form-group\">
\t\t\t        {{ form_label(form.role) }}
\t\t\t        {{ form_widget(form.role, {'attr': {'class': 'form-control'}}) }}
\t\t\t        <span class=\"text-danger\">{{ form_errors(form.role) }}</span>
\t\t\t    </div>

\t\t\t\t<div class=\"checkbox\">
\t\t\t\t    <label>
\t\t\t\t\t\t{{ form_widget(form.isActive) }}{% trans %}Active{% endtrans %}
\t\t\t\t\t\t<span class=\"text-danger\">{{ form_errors(form.isActive) }}</span>
\t\t\t\t    </label>
\t\t\t\t</div>
\t\t\t</fieldset>

\t\t    <p>
\t\t        {{ form_widget(form.save, {'label' : 'Create user', 'attr': {'class': 'btn btn-success'}}) }}
\t\t    </p>                
        
                {{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "EMMUserBundle:User:add.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/User/add.html.twig");
    }
}
