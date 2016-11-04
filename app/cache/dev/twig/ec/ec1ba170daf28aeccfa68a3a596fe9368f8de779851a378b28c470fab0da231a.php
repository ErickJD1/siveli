<?php

/* EMMUserBundle:User:messages/danger.html.twig */
class __TwigTemplate_ea895a3b18b3326c71a9bae202e88da677128c6cefdb8fea21930a6a61c9c7e3 extends Twig_Template
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
        $__internal_b00d4dba6d14bb6ef8ee812dc0a2a2e5c9d9088906b8602dba5d18ca7a260e7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b00d4dba6d14bb6ef8ee812dc0a2a2e5c9d9088906b8602dba5d18ca7a260e7a->enter($__internal_b00d4dba6d14bb6ef8ee812dc0a2a2e5c9d9088906b8602dba5d18ca7a260e7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:messages/danger.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "\t<div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
\t\t<div class=\"container\">
\t\t\t<span id=\"user-message-danger\"></span>
\t\t</div>
\t</div>
";
        }
        // line 8
        echo "
";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 10
            echo "\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t<div class=\"container\"> ";
            // line 11
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_b00d4dba6d14bb6ef8ee812dc0a2a2e5c9d9088906b8602dba5d18ca7a260e7a->leave($__internal_b00d4dba6d14bb6ef8ee812dc0a2a2e5c9d9088906b8602dba5d18ca7a260e7a_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:messages/danger.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 11,  39 => 10,  35 => 9,  32 => 8,  24 => 2,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if flashMessage is not defined %}
\t<div class=\"alert alert-danger hidden\" id=\"message-danger\" role=\"alert\">
\t\t<div class=\"container\">
\t\t\t<span id=\"user-message-danger\"></span>
\t\t</div>
\t</div>
{% endif %}

{% for flashMessage in app.session.flashbag.get('mensaje') %}
\t<div class=\"alert alert-danger\" role=\"alert\">
\t\t<div class=\"container\"> {{ flashMessage }} </div>
\t</div>
{% endfor %}", "EMMUserBundle:User:messages/danger.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/User/messages/danger.html.twig");
    }
}
