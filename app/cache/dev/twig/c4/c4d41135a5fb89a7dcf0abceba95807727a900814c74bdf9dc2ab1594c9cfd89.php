<?php

/* base.html.twig */
class __TwigTemplate_7933d2ced0adc21d1bf391f544c30326c5e9829fb2bdcb1c416c4ea586ba3060 extends Twig_Template
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
        $__internal_0d2c881cdf317c60cdb1fc28bd2ab7341d805e2afec58da0a7ad89125e71aa37 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d2c881cdf317c60cdb1fc28bd2ab7341d805e2afec58da0a7ad89125e71aa37->enter($__internal_0d2c881cdf317c60cdb1fc28bd2ab7341d805e2afec58da0a7ad89125e71aa37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_0d2c881cdf317c60cdb1fc28bd2ab7341d805e2afec58da0a7ad89125e71aa37->leave($__internal_0d2c881cdf317c60cdb1fc28bd2ab7341d805e2afec58da0a7ad89125e71aa37_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ee784c9572c0a656735aa4a02992e493338b606a0cf950f349363f6f474dd7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ee784c9572c0a656735aa4a02992e493338b606a0cf950f349363f6f474dd7f->enter($__internal_6ee784c9572c0a656735aa4a02992e493338b606a0cf950f349363f6f474dd7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        echo "Welcome!";
        
        $__internal_6ee784c9572c0a656735aa4a02992e493338b606a0cf950f349363f6f474dd7f->leave($__internal_6ee784c9572c0a656735aa4a02992e493338b606a0cf950f349363f6f474dd7f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e28baef60b90604558c008850853d716bada871b9d47757ddef513c403cd04f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e28baef60b90604558c008850853d716bada871b9d47757ddef513c403cd04f8->enter($__internal_e28baef60b90604558c008850853d716bada871b9d47757ddef513c403cd04f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_e28baef60b90604558c008850853d716bada871b9d47757ddef513c403cd04f8->leave($__internal_e28baef60b90604558c008850853d716bada871b9d47757ddef513c403cd04f8_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_9411af3c9eb636f19f9d2df62b8ac83ba78285abe1af7258ee30f341929821ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9411af3c9eb636f19f9d2df62b8ac83ba78285abe1af7258ee30f341929821ab->enter($__internal_9411af3c9eb636f19f9d2df62b8ac83ba78285abe1af7258ee30f341929821ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_9411af3c9eb636f19f9d2df62b8ac83ba78285abe1af7258ee30f341929821ab->leave($__internal_9411af3c9eb636f19f9d2df62b8ac83ba78285abe1af7258ee30f341929821ab_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b731084731b790f490f951a4ce925fc18c18b5e8a8ec51817686de877bb7fcc5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b731084731b790f490f951a4ce925fc18c18b5e8a8ec51817686de877bb7fcc5->enter($__internal_b731084731b790f490f951a4ce925fc18c18b5e8a8ec51817686de877bb7fcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "base.html.twig"));

        
        $__internal_b731084731b790f490f951a4ce925fc18c18b5e8a8ec51817686de877bb7fcc5->leave($__internal_b731084731b790f490f951a4ce925fc18c18b5e8a8ec51817686de877bb7fcc5_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
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
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/ubuntu/workspace/app/Resources/views/base.html.twig");
    }
}
