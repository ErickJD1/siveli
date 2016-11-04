<?php

/* EMMUserBundle:Task:messages/success.html.twig */
class __TwigTemplate_e4ec05d62c9bb728eef3d4628b1218d32b5da522f4ccf7e587bc35ebe955393a extends Twig_Template
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
        $__internal_447b373b98d56129621b456aceab0681688a4adc4fe5da4a0c626a0324132e3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_447b373b98d56129621b456aceab0681688a4adc4fe5da4a0c626a0324132e3c->enter($__internal_447b373b98d56129621b456aceab0681688a4adc4fe5da4a0c626a0324132e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:Task:messages/success.html.twig"));

        // line 1
        if ( !array_key_exists("flashMessage", $context)) {
            // line 2
            echo "\t<div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
\t\t<div class=\"container\"><span id=\"user-message\"></span></div>
\t</div>
";
        }
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "mensaje"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 7
            echo "\t<div class=\"alert alert-success\" role=\"alert\">
\t\t<div class=\"container\">";
            // line 8
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</div>
\t</div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_447b373b98d56129621b456aceab0681688a4adc4fe5da4a0c626a0324132e3c->leave($__internal_447b373b98d56129621b456aceab0681688a4adc4fe5da4a0c626a0324132e3c_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:Task:messages/success.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  34 => 7,  30 => 6,  24 => 2,  22 => 1,);
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
\t<div class=\"alert alert-success hidden\" id=\"message\" role=\"alert\">
\t\t<div class=\"container\"><span id=\"user-message\"></span></div>
\t</div>
{% endif %}
{% for flashMessage in app.session.flashbag.get('mensaje') %}
\t<div class=\"alert alert-success\" role=\"alert\">
\t\t<div class=\"container\">{{ flashMessage }}</div>
\t</div>
{% endfor %}", "EMMUserBundle:Task:messages/success.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/Task/messages/success.html.twig");
    }
}
