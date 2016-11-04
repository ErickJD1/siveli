<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_90f478cafa27c5923237a2c4914f30afb0f9735831c50b0f60cd2f0c4d45bc90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a89effe87aaaf8198e2eb7f920a8578677c356a700fd8838de9b670de36a1c1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a89effe87aaaf8198e2eb7f920a8578677c356a700fd8838de9b670de36a1c1d->enter($__internal_a89effe87aaaf8198e2eb7f920a8578677c356a700fd8838de9b670de36a1c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a89effe87aaaf8198e2eb7f920a8578677c356a700fd8838de9b670de36a1c1d->leave($__internal_a89effe87aaaf8198e2eb7f920a8578677c356a700fd8838de9b670de36a1c1d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d98a7c39b472e04e9f8b337859c025223be4421cce9986d6861b26159514c068 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d98a7c39b472e04e9f8b337859c025223be4421cce9986d6861b26159514c068->enter($__internal_d98a7c39b472e04e9f8b337859c025223be4421cce9986d6861b26159514c068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d98a7c39b472e04e9f8b337859c025223be4421cce9986d6861b26159514c068->leave($__internal_d98a7c39b472e04e9f8b337859c025223be4421cce9986d6861b26159514c068_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd8037674fd5ecee3a1aef7e897b3e9e5cdfd633a15683e61e7a5d1aa05c8a53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd8037674fd5ecee3a1aef7e897b3e9e5cdfd633a15683e61e7a5d1aa05c8a53->enter($__internal_bd8037674fd5ecee3a1aef7e897b3e9e5cdfd633a15683e61e7a5d1aa05c8a53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_bd8037674fd5ecee3a1aef7e897b3e9e5cdfd633a15683e61e7a5d1aa05c8a53->leave($__internal_bd8037674fd5ecee3a1aef7e897b3e9e5cdfd633a15683e61e7a5d1aa05c8a53_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7da58b2fed45ee66931d9b32e752f9e285f755732ad5410ee68934d03845b873 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7da58b2fed45ee66931d9b32e752f9e285f755732ad5410ee68934d03845b873->enter($__internal_7da58b2fed45ee66931d9b32e752f9e285f755732ad5410ee68934d03845b873_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_7da58b2fed45ee66931d9b32e752f9e285f755732ad5410ee68934d03845b873->leave($__internal_7da58b2fed45ee66931d9b32e752f9e285f755732ad5410ee68934d03845b873_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'TwigBundle::layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include 'TwigBundle:Exception:exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
