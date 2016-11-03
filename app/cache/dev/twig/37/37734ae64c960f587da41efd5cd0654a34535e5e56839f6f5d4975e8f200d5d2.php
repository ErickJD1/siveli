<?php

/* SensioDistributionBundle::Configurator/layout.html.twig */
class __TwigTemplate_2c9dfeaf6ad01e3c4c6b18af7d98ae6cfe0cc66042e23fb87bf6ac18ab6b741b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "SensioDistributionBundle::Configurator/layout.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43bbd0a667f9c442b5143f8b09eebb874b7182ae69fcce76b26ebb8c31e401a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43bbd0a667f9c442b5143f8b09eebb874b7182ae69fcce76b26ebb8c31e401a5->enter($__internal_43bbd0a667f9c442b5143f8b09eebb874b7182ae69fcce76b26ebb8c31e401a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SensioDistributionBundle::Configurator/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43bbd0a667f9c442b5143f8b09eebb874b7182ae69fcce76b26ebb8c31e401a5->leave($__internal_43bbd0a667f9c442b5143f8b09eebb874b7182ae69fcce76b26ebb8c31e401a5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e787e98eb122f45774f740eeb928c5f510fc9f76b3754f91fc134112339ef034 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e787e98eb122f45774f740eeb928c5f510fc9f76b3754f91fc134112339ef034->enter($__internal_e787e98eb122f45774f740eeb928c5f510fc9f76b3754f91fc134112339ef034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        // line 4
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/sensiodistribution/webconfigurator/css/configurator.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_e787e98eb122f45774f740eeb928c5f510fc9f76b3754f91fc134112339ef034->leave($__internal_e787e98eb122f45774f740eeb928c5f510fc9f76b3754f91fc134112339ef034_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1a6215758835c2ce7e7e4bf1292e93e1eff54ee86dcf79b9d54f9075401516d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a6215758835c2ce7e7e4bf1292e93e1eff54ee86dcf79b9d54f9075401516d5->enter($__internal_1a6215758835c2ce7e7e4bf1292e93e1eff54ee86dcf79b9d54f9075401516d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        echo "Web Configurator Bundle";
        
        $__internal_1a6215758835c2ce7e7e4bf1292e93e1eff54ee86dcf79b9d54f9075401516d5->leave($__internal_1a6215758835c2ce7e7e4bf1292e93e1eff54ee86dcf79b9d54f9075401516d5_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_7299c3e381b04eeecfb800984e32b8594b858854be26f04006af2ed2072d7e03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7299c3e381b04eeecfb800984e32b8594b858854be26f04006af2ed2072d7e03->enter($__internal_7299c3e381b04eeecfb800984e32b8594b858854be26f04006af2ed2072d7e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        // line 10
        echo "    <div class=\"block\">
        ";
        // line 11
        $this->displayBlock('content', $context, $blocks);
        // line 12
        echo "    </div>
    <div class=\"version\">Symfony Standard Edition v.";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : $this->getContext($context, "version")), "html", null, true);
        echo "</div>
";
        
        $__internal_7299c3e381b04eeecfb800984e32b8594b858854be26f04006af2ed2072d7e03->leave($__internal_7299c3e381b04eeecfb800984e32b8594b858854be26f04006af2ed2072d7e03_prof);

    }

    // line 11
    public function block_content($context, array $blocks = array())
    {
        $__internal_ac8308a25063c3e4944fce592223c7e2789c16559500e8de28f586a854a651d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac8308a25063c3e4944fce592223c7e2789c16559500e8de28f586a854a651d9->enter($__internal_ac8308a25063c3e4944fce592223c7e2789c16559500e8de28f586a854a651d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "SensioDistributionBundle::Configurator/layout.html.twig"));

        
        $__internal_ac8308a25063c3e4944fce592223c7e2789c16559500e8de28f586a854a651d9->leave($__internal_ac8308a25063c3e4944fce592223c7e2789c16559500e8de28f586a854a651d9_prof);

    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 11,  79 => 13,  76 => 12,  74 => 11,  71 => 10,  65 => 9,  53 => 7,  43 => 4,  37 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"TwigBundle::layout.html.twig\" %}

{% block head %}
    <link rel=\"stylesheet\" href=\"{{ asset('bundles/sensiodistribution/webconfigurator/css/configurator.css') }}\" />
{% endblock %}

{% block title 'Web Configurator Bundle' %}

{% block body %}
    <div class=\"block\">
        {% block content %}{% endblock %}
    </div>
    <div class=\"version\">Symfony Standard Edition v.{{ version }}</div>
{% endblock %}
", "SensioDistributionBundle::Configurator/layout.html.twig", "/home/ubuntu/workspace/vendor/sensio/distribution-bundle/Sensio/Bundle/DistributionBundle/Resources/views/Configurator/layout.html.twig");
    }
}
