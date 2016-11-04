<?php

/* EMMUserBundle:Task:add.html.twig */
class __TwigTemplate_626fef329ef8f975b2c4d63211dcdf2e49e5dc414f0eb8cb2ec11d5cb326cf6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:Task:add.html.twig", 1);
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
        $__internal_32a1668d7663408b3aa3f97851133c274c4f44830da31d156b18965dbf17067c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a1668d7663408b3aa3f97851133c274c4f44830da31d156b18965dbf17067c->enter($__internal_32a1668d7663408b3aa3f97851133c274c4f44830da31d156b18965dbf17067c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:Task:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32a1668d7663408b3aa3f97851133c274c4f44830da31d156b18965dbf17067c->leave($__internal_32a1668d7663408b3aa3f97851133c274c4f44830da31d156b18965dbf17067c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_43f1bcd5929fa8fdcd1f69cac23a4c8f9b592ff1a45ca8c9fdaebe68a08d8a33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43f1bcd5929fa8fdcd1f69cac23a4c8f9b592ff1a45ca8c9fdaebe68a08d8a33->enter($__internal_43f1bcd5929fa8fdcd1f69cac23a4c8f9b592ff1a45ca8c9fdaebe68a08d8a33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:Task:add.html.twig"));

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
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New task", array(), "messages");
        echo "</h2>
\t\t\t\t</div>
\t\t\t\t";
        // line 11
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("novalidate" => "novalidate", "role" => "form")));
        echo "
\t\t\t\t    <h4 class=\"text-danger\">";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "</h4>

\t\t\t\t\t<fieldset>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task title")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "user", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        ";
        // line 28
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label');
        echo "
\t\t\t\t\t        ";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Task description")));
        echo "
\t\t\t\t\t        <span class=\"text-danger\">";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "</span>
\t\t\t\t\t    </div>
\t\t\t\t\t</fieldset>

\t\t\t\t    <p>
\t\t\t\t        ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("label" => "Create task", "attr" => array("class" => "btn btn-success")));
        echo "
\t\t\t\t    </p>

\t\t\t\t";
        // line 38
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_43f1bcd5929fa8fdcd1f69cac23a4c8f9b592ff1a45ca8c9fdaebe68a08d8a33->leave($__internal_43f1bcd5929fa8fdcd1f69cac23a4c8f9b592ff1a45ca8c9fdaebe68a08d8a33_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:Task:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 38,  111 => 35,  103 => 30,  99 => 29,  95 => 28,  88 => 24,  84 => 23,  80 => 22,  73 => 18,  69 => 17,  65 => 16,  58 => 12,  54 => 11,  49 => 9,  40 => 4,  34 => 3,  11 => 1,);
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
\t\t\t\t\t<h2>{% trans %}New task{% endtrans %}</h2>
\t\t\t\t</div>
\t\t\t\t{{ form_start(form, {'attr': {'novalidate': 'novalidate', 'role' : 'form'}}) }}
\t\t\t\t    <h4 class=\"text-danger\">{{ form_errors(form) }}</h4>

\t\t\t\t\t<fieldset>
\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        {{ form_label(form.title) }}
\t\t\t\t\t        {{ form_widget(form.title, {'attr': {'class': 'form-control', 'placeholder' : 'Task title'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.title) }}</span>
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        {{ form_label(form.user) }}
\t\t\t\t\t        {{ form_widget(form.user, {'attr': {'class': 'form-control'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.user) }}</span>
\t\t\t\t\t    </div>

\t\t\t\t\t    <div class=\"form-group\">
\t\t\t\t\t        {{ form_label(form.description) }}
\t\t\t\t\t        {{ form_widget(form.description, {'attr': {'class': 'form-control', 'placeholder' : 'Task description'}}) }}
\t\t\t\t\t        <span class=\"text-danger\">{{ form_errors(form.description) }}</span>
\t\t\t\t\t    </div>
\t\t\t\t\t</fieldset>

\t\t\t\t    <p>
\t\t\t\t        {{ form_widget(form.save, {'label' : 'Create task', 'attr': {'class': 'btn btn-success'}}) }}
\t\t\t\t    </p>

\t\t\t\t{{ form_end(form) }}
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "EMMUserBundle:Task:add.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/Task/add.html.twig");
    }
}
