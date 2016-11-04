<?php

/* layout.html.twig */
class __TwigTemplate_e5ecc4c30ea5b5bf6686393012d8f74fde7d2f3a40d1f402993e5c57405ba1ef extends Twig_Template
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
        $__internal_8982942303b3fd5483591edbb22df70468168e8609c9d9b59e287fd377d846a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8982942303b3fd5483591edbb22df70468168e8609c9d9b59e287fd377d846a9->enter($__internal_8982942303b3fd5483591edbb22df70468168e8609c9d9b59e287fd377d846a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "layout.html.twig"));

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
        
        $__internal_8982942303b3fd5483591edbb22df70468168e8609c9d9b59e287fd377d846a9->leave($__internal_8982942303b3fd5483591edbb22df70468168e8609c9d9b59e287fd377d846a9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_cbadfbdd20be81cd9fa5020d0b30bbe01b6d11efcc81b207cc024ddcdbe77a47 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbadfbdd20be81cd9fa5020d0b30bbe01b6d11efcc81b207cc024ddcdbe77a47->enter($__internal_cbadfbdd20be81cd9fa5020d0b30bbe01b6d11efcc81b207cc024ddcdbe77a47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        echo "Asignación de tareas";
        
        $__internal_cbadfbdd20be81cd9fa5020d0b30bbe01b6d11efcc81b207cc024ddcdbe77a47->leave($__internal_cbadfbdd20be81cd9fa5020d0b30bbe01b6d11efcc81b207cc024ddcdbe77a47_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_82b4533a6482a13c97ccec6a081e2027580af900531418d50f2dd11373f7b2f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82b4533a6482a13c97ccec6a081e2027580af900531418d50f2dd11373f7b2f0->enter($__internal_82b4533a6482a13c97ccec6a081e2027580af900531418d50f2dd11373f7b2f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_82b4533a6482a13c97ccec6a081e2027580af900531418d50f2dd11373f7b2f0->leave($__internal_82b4533a6482a13c97ccec6a081e2027580af900531418d50f2dd11373f7b2f0_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6419215407a216f0caa8f52c00240bb028dfa6a0220373869821314b06b6bcbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6419215407a216f0caa8f52c00240bb028dfa6a0220373869821314b06b6bcbd->enter($__internal_6419215407a216f0caa8f52c00240bb028dfa6a0220373869821314b06b6bcbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

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
        
        $__internal_6419215407a216f0caa8f52c00240bb028dfa6a0220373869821314b06b6bcbd->leave($__internal_6419215407a216f0caa8f52c00240bb028dfa6a0220373869821314b06b6bcbd_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4b53874f336f9623891fa575a1afe6abe9b7242588468d60d77b84a22be7bd02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b53874f336f9623891fa575a1afe6abe9b7242588468d60d77b84a22be7bd02->enter($__internal_4b53874f336f9623891fa575a1afe6abe9b7242588468d60d77b84a22be7bd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "layout.html.twig"));

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
        
        $__internal_4b53874f336f9623891fa575a1afe6abe9b7242588468d60d77b84a22be7bd02->leave($__internal_4b53874f336f9623891fa575a1afe6abe9b7242588468d60d77b84a22be7bd02_prof);

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
", "layout.html.twig", "/home/ubuntu/workspace/app/Resources/views/layout.html.twig");
    }
}
