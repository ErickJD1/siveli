<?php

/* EMMUserBundle:Task:index.html.twig */
class __TwigTemplate_184e08b1de6e55fff152699b4c4efa379603645216d8fa5c61d92d752d20a5fd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:Task:index.html.twig", 1);
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
        $__internal_c697a930f6191d03d5acb8f1d4adf77d1c8697a990b55cbf720705b4d3baf485 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c697a930f6191d03d5acb8f1d4adf77d1c8697a990b55cbf720705b4d3baf485->enter($__internal_c697a930f6191d03d5acb8f1d4adf77d1c8697a990b55cbf720705b4d3baf485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:Task:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c697a930f6191d03d5acb8f1d4adf77d1c8697a990b55cbf720705b4d3baf485->leave($__internal_c697a930f6191d03d5acb8f1d4adf77d1c8697a990b55cbf720705b4d3baf485_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_59a63b25e40fd1d2add85645ab740c4c09d9031a0fdd27229dea37d11539e64a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a63b25e40fd1d2add85645ab740c4c09d9031a0fdd27229dea37d11539e64a->enter($__internal_59a63b25e40fd1d2add85645ab740c4c09d9031a0fdd27229dea37d11539e64a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:Task:index.html.twig"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t
    ";
        // line 6
        echo twig_include($this->env, $context, "EMMUserBundle:Task:messages/success.html.twig");
        echo "
    
\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tasks", array(), "messages");
        echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<p>
\t\t\t\t    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total records:", array(), "messages");
        echo " <span id=\"total\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo " </span>
\t\t\t\t</p>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>";
        // line 20
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Title"), "t.title");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 21
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Date"), "t.createdAt");
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
        echo "</th>
\t\t\t\t\t\t\t<th>";
        // line 23
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Status"), "t.status");
        echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 28
            echo "\t\t\t\t            <tr data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t                <td>
\t\t\t\t                \t<a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_task_view", array("id" => $this->getAttribute($context["task"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "</a>
\t\t\t\t                </td>
\t\t\t\t                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["task"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
            echo "</td>
\t\t\t\t                <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["task"], "user", array()), "fullName", array()), "html", null, true);
            echo "</td>
\t\t\t\t                <td>
\t\t\t\t                \t";
            // line 35
            if (($this->getAttribute($context["task"], "status", array()) == 0)) {
                // line 36
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time text-danger\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Waiting", array(), "messages");
                echo "\" id=\"glyphicon-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "id", array()), "html", null, true);
                echo "\"></span>
\t\t\t\t\t\t\t\t\t";
            } elseif (($this->getAttribute(            // line 37
$context["task"], "status", array()) == 1)) {
                // line 38
                echo "\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok text-success\" title=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Finish", array(), "messages");
                echo "\"></span>
\t\t\t\t                \t";
            }
            // line 40
            echo "\t\t\t\t\t\t\t\t</td>
\t\t\t\t            </tr>
\t\t\t\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t";
        // line 46
        echo "\t\t\t<div class=\"navigation\">
\t\t\t    ";
        // line 47
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        
        $__internal_59a63b25e40fd1d2add85645ab740c4c09d9031a0fdd27229dea37d11539e64a->leave($__internal_59a63b25e40fd1d2add85645ab740c4c09d9031a0fdd27229dea37d11539e64a_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:Task:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 47,  145 => 46,  141 => 43,  133 => 40,  127 => 38,  125 => 37,  118 => 36,  116 => 35,  111 => 33,  107 => 32,  100 => 30,  94 => 28,  90 => 27,  83 => 23,  79 => 22,  75 => 21,  71 => 20,  61 => 15,  54 => 11,  46 => 6,  40 => 4,  34 => 3,  11 => 1,);
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
\t{{ parent() }}
\t
    {{ include('EMMUserBundle:Task:messages/success.html.twig') }}
    
\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">{% trans %}Tasks{% endtrans %}</h2>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<p>
\t\t\t\t    {% trans %}Total records: {% endtrans %} <span id=\"total\"> {{ pagination.getTotalItemCount }} </span>
\t\t\t\t</p>
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Title'|trans, 't.title') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Date'|trans, 't.createdAt') }}</th>
\t\t\t\t\t\t\t<th>{{ 'User'|trans }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Status'|trans, 't.status') }}</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t        {% for task in pagination %}
\t\t\t\t            <tr data-id=\"{{ task.id }}\">
\t\t\t\t                <td>
\t\t\t\t                \t<a href=\"{{ path('emm_task_view', {id: task.id}) }}\">{{ task.title }}</a>
\t\t\t\t                </td>
\t\t\t\t                <td>{{ task.createdAt|date('d-m-Y H:i') }}</td>
\t\t\t\t                <td>{{ task.user.fullName }}</td>
\t\t\t\t                <td>
\t\t\t\t                \t{% if task.status == 0 %}
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-time text-danger\" title=\"{% trans %}Waiting{% endtrans %}\" id=\"glyphicon-{{task.id}}\"></span>
\t\t\t\t\t\t\t\t\t{% elseif task.status == 1 %}
\t\t\t\t\t\t\t\t\t\t<span class=\"glyphicon glyphicon-ok text-success\" title=\"{% trans %}Finish{% endtrans %}\"></span>
\t\t\t\t                \t{% endif %}
\t\t\t\t\t\t\t\t</td>
\t\t\t\t            </tr>
\t\t\t\t        {% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t{# display navigation #}
\t\t\t<div class=\"navigation\">
\t\t\t    {{ knp_pagination_render(pagination) }}
\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
{% endblock %}", "EMMUserBundle:Task:index.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/Task/index.html.twig");
    }
}
