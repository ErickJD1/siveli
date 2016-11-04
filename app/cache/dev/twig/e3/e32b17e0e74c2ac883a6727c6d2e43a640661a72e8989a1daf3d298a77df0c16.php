<?php

/* EMMUserBundle:User:index.html.twig */
class __TwigTemplate_bfce32ee3ff1321179f0685f349a287b2c9194afde6ed39efb99d103a102f3cc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:User:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13af1b6898d0b5d6a9722d321b1206121dadf31dde0e88a0f985c8a5ef2e4bce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13af1b6898d0b5d6a9722d321b1206121dadf31dde0e88a0f985c8a5ef2e4bce->enter($__internal_13af1b6898d0b5d6a9722d321b1206121dadf31dde0e88a0f985c8a5ef2e4bce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13af1b6898d0b5d6a9722d321b1206121dadf31dde0e88a0f985c8a5ef2e4bce->leave($__internal_13af1b6898d0b5d6a9722d321b1206121dadf31dde0e88a0f985c8a5ef2e4bce_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_04f5a91cc5f8d3827e542239d5550e9accddab9ea63c0b39de5e0c9ee3018e96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04f5a91cc5f8d3827e542239d5550e9accddab9ea63c0b39de5e0c9ee3018e96->enter($__internal_04f5a91cc5f8d3827e542239d5550e9accddab9ea63c0b39de5e0c9ee3018e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:User:index.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    
\t";
        // line 7
        echo "\t<div class=\"progress no-border hidden\" id=\"delete-progress\">
\t\t<div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t</div>
\t</div>    
    
\t";
        // line 13
        echo twig_include($this->env, $context, "EMMUserBundle:User:messages/success.html.twig");
        echo "
\t";
        // line 14
        echo twig_include($this->env, $context, "EMMUserBundle:User:messages/danger.html.twig");
        echo "
\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">";
        // line 18
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
        echo "</h2>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<p>
\t\t\t\t\t";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Total records:", array(), "messages");
        echo " <span id=\"total\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "</span>
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"query\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "query"), "method"), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search user"), "html", null, true);
        echo "\" required />
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Search"), "html", null, true);
        echo "\" class=\"btn btn-default\">
\t\t\t\t</form>
\t\t\t\t<br>\t\t\t\t\t
\t\t\t\t";
        // line 32
        if ( !twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 33
            echo "\t\t\t\t\t<h2>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("No search results"), "html", null, true);
            echo "</h2>
\t\t\t\t";
        }
        // line 35
        echo "\t\t\t\t
\t\t\t\t";
        // line 36
        if (twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")))) {
            // line 37
            echo "\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
                            <th> ";
            // line 40
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "u.username");
            echo " </th>
                            <th> ";
            // line 41
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("First name"), "u.firstName");
            echo " </th>
\t\t\t\t\t\t\t<th>";
            // line 42
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Last name"), "u.lastName");
            echo "</th>
\t\t\t\t\t\t\t<th>";
            // line 43
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Email"), "u.email");
            echo "</th>
\t\t\t\t\t\t\t<th>";
            // line 44
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Role"), "u.role");
            echo "</th>
\t\t\t\t\t\t\t<th>";
            // line 45
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Created"), "u.createdAt");
            echo "</th>
\t\t\t\t\t\t\t<th>";
            // line 46
            echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->sortable($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Updated"), "u.updatedAt");
            echo "</th>
                            <th>";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Actions"), "html", null, true);
            echo "</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t        ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 52
                echo "                            <tr data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\">
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "username", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                echo "</td>
                                <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "email", array()), "html", null, true);
                echo "</td>
                                <td>
                                    ";
                // line 58
                if (($this->getAttribute($context["user"], "role", array()) == "ROLE_ADMIN")) {
                    // line 59
                    echo "                                        <strong>
                                        \t";
                    // line 60
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Administrator", array(), "messages");
                    // line 61
                    echo "                                        </strong>
                                    ";
                } elseif (($this->getAttribute(                // line 62
$context["user"], "role", array()) == "ROLE_USER")) {
                    // line 63
                    echo "                                        <strong>
                                        \t";
                    // line 64
                    echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("User", array(), "messages");
                    // line 65
                    echo "                                        </strong>
                                    ";
                }
                // line 67
                echo "                                </td>
                                <td>";
                // line 68
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "createdAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["user"], "updatedAt", array()), "d-m-Y H:i"), "html", null, true);
                echo "</td>
\t\t\t\t                <td class=\"actions\">
\t\t\t                        <a href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_user_view", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-info\">
\t\t\t                            ";
                // line 72
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View"), "html", null, true);
                echo "
\t\t\t                        </a>

\t\t\t                        <a href=\"";
                // line 75
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_user_edit", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-sm btn-primary\">
\t\t\t                            ";
                // line 76
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Edit"), "html", null, true);
                echo "
\t\t\t                        </a>

\t\t\t                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
\t\t\t                            ";
                // line 80
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete"), "html", null, true);
                echo "
\t\t\t                        </a>
\t\t\t\t                </td>
                            </tr>
\t\t\t\t        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 85
            echo "\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t";
        }
        // line 88
        echo "\t\t\t\t";
        // line 89
        echo "\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t";
        // line 90
        echo $this->env->getExtension('Knp\Bundle\PaginatorBundle\Twig\Extension\PaginationExtension')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t";
        // line 96
        echo twig_include($this->env, $context, "EMMUserBundle:User:forms/form.html.twig", array("form" => (isset($context["delete_form_ajax"]) ? $context["delete_form_ajax"] : $this->getContext($context, "delete_form_ajax")), "message" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Are you sure ?"), "id" => "form-delete", "with_submit" => false));
        echo "
\t
";
        
        $__internal_04f5a91cc5f8d3827e542239d5550e9accddab9ea63c0b39de5e0c9ee3018e96->leave($__internal_04f5a91cc5f8d3827e542239d5550e9accddab9ea63c0b39de5e0c9ee3018e96_prof);

    }

    // line 100
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_269ae28f8f1263e7b2fef0b8b065067f4d8861234b1ae5f842ecf87572f9b601 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_269ae28f8f1263e7b2fef0b8b065067f4d8861234b1ae5f842ecf87572f9b601->enter($__internal_269ae28f8f1263e7b2fef0b8b065067f4d8861234b1ae5f842ecf87572f9b601_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:User:index.html.twig"));

        // line 101
        echo "\t";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
\t<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/emmuser/js/delete-user.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_269ae28f8f1263e7b2fef0b8b065067f4d8861234b1ae5f842ecf87572f9b601->leave($__internal_269ae28f8f1263e7b2fef0b8b065067f4d8861234b1ae5f842ecf87572f9b601_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  280 => 102,  275 => 101,  269 => 100,  259 => 96,  250 => 90,  247 => 89,  245 => 88,  240 => 85,  229 => 80,  222 => 76,  218 => 75,  212 => 72,  208 => 71,  203 => 69,  199 => 68,  196 => 67,  192 => 65,  190 => 64,  187 => 63,  185 => 62,  182 => 61,  180 => 60,  177 => 59,  175 => 58,  170 => 56,  166 => 55,  162 => 54,  158 => 53,  153 => 52,  149 => 51,  142 => 47,  138 => 46,  134 => 45,  130 => 44,  126 => 43,  122 => 42,  118 => 41,  114 => 40,  109 => 37,  107 => 36,  104 => 35,  98 => 33,  96 => 32,  90 => 29,  83 => 27,  73 => 22,  66 => 18,  59 => 14,  55 => 13,  47 => 7,  41 => 4,  35 => 3,  11 => 1,);
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
    
\t{# Progress bar #}
\t<div class=\"progress no-border hidden\" id=\"delete-progress\">
\t\t<div class=\"progress-bar progress-bar-striped active\" role=\"progressbar\" aria-valuenow=\"45\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: 100%\">
\t\t\t<span class=\"sr-only\">Loading...</span>
\t\t</div>
\t</div>    
    
\t{{ include('EMMUserBundle:User:messages/success.html.twig') }}
\t{{ include('EMMUserBundle:User:messages/danger.html.twig') }}
\t<div class=\"container\">
\t\t<div class=\"col-md-12\">
\t\t\t<div class=\"page-header margin-none\">
\t\t\t\t<h2 class=\"padding-none\">{% trans %} Users {% endtrans %}</h2>
\t\t\t</div>
\t\t\t<div class=\"table-responsive\">
\t\t\t\t<p>
\t\t\t\t\t{% trans %} Total records: {% endtrans %} <span id=\"total\">{{ pagination.getTotalItemCount }}</span>
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<form method=\"get\" action=\"\" class=\"form-inline\" role=\"search\">
\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t<input type=\"text\" name=\"query\" value=\"{{ app.request.get('query') }}\" class=\"form-control\" placeholder=\"{{'Search user'|trans}}\" required />
\t\t\t\t\t</div>
\t\t\t\t\t<input type=\"submit\" value=\"{{ 'Search'|trans }}\" class=\"btn btn-default\">
\t\t\t\t</form>
\t\t\t\t<br>\t\t\t\t\t
\t\t\t\t{% if not pagination|length %}
\t\t\t\t\t<h2>{{ 'No search results'|trans}}</h2>
\t\t\t\t{% endif %}
\t\t\t\t
\t\t\t\t{% if pagination|length %}
\t\t\t\t<table class=\"table table-striped table-hover\">
\t\t\t\t\t<thead>
\t\t\t\t\t\t<tr>
                            <th> {{ knp_pagination_sortable(pagination, 'Username'|trans, 'u.username') }} </th>
                            <th> {{ knp_pagination_sortable(pagination, 'First name'|trans, 'u.firstName') }} </th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Last name'|trans, 'u.lastName') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Email'|trans, 'u.email') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Role'|trans, 'u.role') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Created'|trans, 'u.createdAt') }}</th>
\t\t\t\t\t\t\t<th>{{ knp_pagination_sortable(pagination, 'Updated'|trans, 'u.updatedAt') }}</th>
                            <th>{{ 'Actions'|trans }}</th>
\t\t\t\t\t\t</tr>
\t\t\t\t\t</thead>
\t\t\t\t\t<tbody>
\t\t\t\t        {% for user in pagination %}
                            <tr data-id=\"{{ user.id }}\">
                                <td>{{ user.username }}</td>
                                <td>{{ user.firstName }}</td>
                                <td>{{ user.lastName }}</td>
                                <td>{{ user.email }}</td>
                                <td>
                                    {% if user.role == 'ROLE_ADMIN' %}
                                        <strong>
                                        \t{% trans %} Administrator {% endtrans %}
                                        </strong>
                                    {% elseif user.role == 'ROLE_USER' %}
                                        <strong>
                                        \t{% trans %} User {% endtrans %}
                                        </strong>
                                    {% endif %}
                                </td>
                                <td>{{ user.createdAt|date('d-m-Y H:i') }}</td>
                                <td>{{ user.updatedAt|date('d-m-Y H:i') }}</td>
\t\t\t\t                <td class=\"actions\">
\t\t\t                        <a href=\"{{ path('emm_user_view', { id: user.id }) }}\" class=\"btn btn-sm btn-info\">
\t\t\t                            {{ 'View'|trans }}
\t\t\t                        </a>

\t\t\t                        <a href=\"{{ path('emm_user_edit', { id: user.id }) }}\" class=\"btn btn-sm btn-primary\">
\t\t\t                            {{ 'Edit'|trans }}
\t\t\t                        </a>

\t\t\t                        <a href=\"#\" class=\"btn btn-sm btn-danger btn-delete\">
\t\t\t                            {{ 'Delete'|trans }}
\t\t\t                        </a>
\t\t\t\t                </td>
                            </tr>
\t\t\t\t        {% endfor %}
\t\t\t\t\t</tbody>
\t\t\t\t</table>
\t\t\t\t{% endif %}
\t\t\t\t{# display navigation #}
\t\t\t\t<div class=\"navigation\">
\t\t\t\t\t{{ knp_pagination_render(pagination) }}
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t
\t{{ include('EMMUserBundle:User:forms/form.html.twig', { form: delete_form_ajax, message: 'Are you sure ?'|trans, id: 'form-delete', with_submit: false}) }}
\t
{% endblock %}

{% block javascripts  %}
\t{{ parent() }}
\t<script src=\"{{ asset('bundles/emmuser/js/delete-user.js') }}\"></script>
{% endblock %}", "EMMUserBundle:User:index.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/User/index.html.twig");
    }
}
