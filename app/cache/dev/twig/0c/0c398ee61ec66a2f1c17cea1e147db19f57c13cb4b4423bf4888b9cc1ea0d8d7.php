<?php

/* layout.html.twig */
class __TwigTemplate_b08b72895a4d8813e3f4525d3c7ea3588e06d26f04167991bbeb5caff80f29fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55b9598bd50ff3bdc1abe4bac10edaca90d150f9d88f5aa56cf53b8d1209ea4f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55b9598bd50ff3bdc1abe4bac10edaca90d150f9d88f5aa56cf53b8d1209ea4f->enter($__internal_55b9598bd50ff3bdc1abe4bac10edaca90d150f9d88f5aa56cf53b8d1209ea4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_55b9598bd50ff3bdc1abe4bac10edaca90d150f9d88f5aa56cf53b8d1209ea4f->leave($__internal_55b9598bd50ff3bdc1abe4bac10edaca90d150f9d88f5aa56cf53b8d1209ea4f_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9dc52db3e235913713ff2e7b8b09e057b4ab6f0e32411655cbae9d757e77c79d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9dc52db3e235913713ff2e7b8b09e057b4ab6f0e32411655cbae9d757e77c79d->enter($__internal_9dc52db3e235913713ff2e7b8b09e057b4ab6f0e32411655cbae9d757e77c79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "Asignación de tareas";
        
        $__internal_9dc52db3e235913713ff2e7b8b09e057b4ab6f0e32411655cbae9d757e77c79d->leave($__internal_9dc52db3e235913713ff2e7b8b09e057b4ab6f0e32411655cbae9d757e77c79d_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_06dba794186f95f8316d71d0e01499e1518f6a937b1821d20fdfb15aa570a62c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06dba794186f95f8316d71d0e01499e1518f6a937b1821d20fdfb15aa570a62c->enter($__internal_06dba794186f95f8316d71d0e01499e1518f6a937b1821d20fdfb15aa570a62c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_06dba794186f95f8316d71d0e01499e1518f6a937b1821d20fdfb15aa570a62c->leave($__internal_06dba794186f95f8316d71d0e01499e1518f6a937b1821d20fdfb15aa570a62c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_0ea158b0a18f8d82094a5865108decd415f85cb62274155906d9cc43a9876613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ea158b0a18f8d82094a5865108decd415f85cb62274155906d9cc43a9876613->enter($__internal_0ea158b0a18f8d82094a5865108decd415f85cb62274155906d9cc43a9876613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 14
        echo "            ";
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 15
            echo "                ";
            echo twig_include($this->env, $context, "menu.html.twig");
            echo "
            ";
        }
        // line 17
        echo "        ";
        
        $__internal_0ea158b0a18f8d82094a5865108decd415f85cb62274155906d9cc43a9876613->leave($__internal_0ea158b0a18f8d82094a5865108decd415f85cb62274155906d9cc43a9876613_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_fe029934af07e7c0ec5ba4cb2b119f305cb25e8726afd883d8297d6dd1acd35b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe029934af07e7c0ec5ba4cb2b119f305cb25e8726afd883d8297d6dd1acd35b->enter($__internal_fe029934af07e7c0ec5ba4cb2b119f305cb25e8726afd883d8297d6dd1acd35b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/jquery-1.11.3.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_fe029934af07e7c0ec5ba4cb2b119f305cb25e8726afd883d8297d6dd1acd35b->leave($__internal_fe029934af07e7c0ec5ba4cb2b119f305cb25e8726afd883d8297d6dd1acd35b_prof);

    }

    public function getTemplateName()
    {
        return "layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 21,  124 => 20,  119 => 19,  113 => 18,  106 => 17,  100 => 15,  97 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 23,  47 => 18,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Asignación de tareas{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/bootstrap.min.css') }}\" />
            <link rel=\"stylesheet\" href=\"{{ asset('public/css/style.css') }}\" />
        {% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}
            {% if is_granted('IS_AUTHENTICATED_FULLY') %}
                {{ include('menu.html.twig') }}
            {% endif %}
        {% endblock %}
        {% block javascripts %}
            <script src=\"{{ asset('public/js/jquery-1.11.3.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootstrap.min.js') }}\"></script>
            <script src=\"{{ asset('public/js/bootbox.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "layout.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\app\\Resources\\views\\layout.html.twig");
    }
}
