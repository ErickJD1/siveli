<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_d2f8b38545908f6599a99cc3454ef71d19c06a2efc1b3946b21a35491a358252 extends Twig_Template
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
        $__internal_5e070f8a7d6841d7a293fe59339805a6869332ded694f9186e5970de2c20d1be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e070f8a7d6841d7a293fe59339805a6869332ded694f9186e5970de2c20d1be->enter($__internal_5e070f8a7d6841d7a293fe59339805a6869332ded694f9186e5970de2c20d1be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e070f8a7d6841d7a293fe59339805a6869332ded694f9186e5970de2c20d1be->leave($__internal_5e070f8a7d6841d7a293fe59339805a6869332ded694f9186e5970de2c20d1be_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66b9090e97708d9a8ff9df3c2f5da0e4e8a22f8f114608f54781593522f7d786 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66b9090e97708d9a8ff9df3c2f5da0e4e8a22f8f114608f54781593522f7d786->enter($__internal_66b9090e97708d9a8ff9df3c2f5da0e4e8a22f8f114608f54781593522f7d786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_66b9090e97708d9a8ff9df3c2f5da0e4e8a22f8f114608f54781593522f7d786->leave($__internal_66b9090e97708d9a8ff9df3c2f5da0e4e8a22f8f114608f54781593522f7d786_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6b14ce5d7ce468981ef2075277b69418b7b059052f86c29285d4939cc51abd6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b14ce5d7ce468981ef2075277b69418b7b059052f86c29285d4939cc51abd6a->enter($__internal_6b14ce5d7ce468981ef2075277b69418b7b059052f86c29285d4939cc51abd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6b14ce5d7ce468981ef2075277b69418b7b059052f86c29285d4939cc51abd6a->leave($__internal_6b14ce5d7ce468981ef2075277b69418b7b059052f86c29285d4939cc51abd6a_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0e37d89ea261e95bbe8cbc75b1e8fb09c9a325e2672fa8e87a01afb5a4335e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0e37d89ea261e95bbe8cbc75b1e8fb09c9a325e2672fa8e87a01afb5a4335e7->enter($__internal_d0e37d89ea261e95bbe8cbc75b1e8fb09c9a325e2672fa8e87a01afb5a4335e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "TwigBundle:Exception:exception_full.html.twig"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_d0e37d89ea261e95bbe8cbc75b1e8fb09c9a325e2672fa8e87a01afb5a4335e7->leave($__internal_d0e37d89ea261e95bbe8cbc75b1e8fb09c9a325e2672fa8e87a01afb5a4335e7_prof);

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
", "TwigBundle:Exception:exception_full.html.twig", "/home/ubuntu/workspace/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
