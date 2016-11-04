<?php

/* EMMUserBundle:User:home.html.twig */
class __TwigTemplate_509eaef562771560caa76dafec7db62e302e36d5384245a50b065c208ec2e659 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:User:home.html.twig", 1);
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
        $__internal_17468f5219e4476b942e6b17c64eb1700e93600bfee6af98636baae8702e4539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17468f5219e4476b942e6b17c64eb1700e93600bfee6af98636baae8702e4539->enter($__internal_17468f5219e4476b942e6b17c64eb1700e93600bfee6af98636baae8702e4539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17468f5219e4476b942e6b17c64eb1700e93600bfee6af98636baae8702e4539->leave($__internal_17468f5219e4476b942e6b17c64eb1700e93600bfee6af98636baae8702e4539_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ef5e9c861f876222c3fbeb566134d8771b5dad89280b869f959cc92ee3fcd256 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef5e9c861f876222c3fbeb566134d8771b5dad89280b869f959cc92ee3fcd256->enter($__internal_ef5e9c861f876222c3fbeb566134d8771b5dad89280b869f959cc92ee3fcd256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:User:home.html.twig"));

        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
\t<div class=\"container\">
        <h2 class=\"text-center\">
            ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Welcome"), "html", null, true);
        echo "
            ";
        // line 8
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_ADMIN")) {
            // line 9
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Administrator"), "html", null, true);
            echo "
            ";
        } elseif (($this->getAttribute($this->getAttribute(        // line 10
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "role", array()) == "ROLE_USER")) {
            // line 11
            echo "                ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("User"), "html", null, true);
            echo "
            ";
        }
        // line 13
        echo "            :
            ";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo "
        </h2>
\t</div>
";
        
        $__internal_ef5e9c861f876222c3fbeb566134d8771b5dad89280b869f959cc92ee3fcd256->leave($__internal_ef5e9c861f876222c3fbeb566134d8771b5dad89280b869f959cc92ee3fcd256_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 14,  66 => 13,  60 => 11,  58 => 10,  53 => 9,  51 => 8,  47 => 7,  40 => 4,  34 => 3,  11 => 1,);
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
\t<div class=\"container\">
        <h2 class=\"text-center\">
            {{ 'Welcome'|trans }}
            {% if app.user.role == 'ROLE_ADMIN' %}
                {{ 'Administrator'|trans }}
            {% elseif app.user.role == 'ROLE_USER' %}
                {{ 'User'|trans }}
            {% endif %}
            :
            {{ app.user.username }}
        </h2>
\t</div>
{% endblock %}", "EMMUserBundle:User:home.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/User/home.html.twig");
    }
}
