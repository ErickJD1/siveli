<?php

/* EMMUserBundle:User:forms/form.html.twig */
class __TwigTemplate_4432c69f85c3fe204a5944848684519fe8c166fdca99ab436eef2d5004d5c064 extends Twig_Template
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
        $__internal_19f39678938272b6249d9f54cd3a10ddf09cc97e9653fda8e548b24bcc68aed9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f39678938272b6249d9f54cd3a10ddf09cc97e9653fda8e548b24bcc68aed9->enter($__internal_19f39678938272b6249d9f54cd3a10ddf09cc97e9653fda8e548b24bcc68aed9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:User:forms/form.html.twig"));

        // line 1
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => ((array_key_exists("id", $context)) ? (_twig_default_filter((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "form")) : ("form")))));
        echo "

    ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
    
    ";
        // line 5
        if (( !array_key_exists("with_submit", $context) || ((isset($context["with_submit"]) ? $context["with_submit"] : $this->getContext($context, "with_submit")) == true))) {
            // line 6
            echo "    <input type=\"button\" value=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Delete user"), "html", null, true);
            echo "\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\" >
    ";
        }
        // line 8
        echo "
";
        // line 9
        echo         $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

<script>
    var message = '";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "';
    
    function confirmDelete()
    {
        bootbox.confirm(message, function(result) {
            if(result == true)
            {
                document.form.submit();
            }
        });
    }
</script>";
        
        $__internal_19f39678938272b6249d9f54cd3a10ddf09cc97e9653fda8e548b24bcc68aed9->leave($__internal_19f39678938272b6249d9f54cd3a10ddf09cc97e9653fda8e548b24bcc68aed9_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:User:forms/form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 12,  43 => 9,  40 => 8,  34 => 6,  32 => 5,  27 => 3,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ form_start(form, {'attr': {'id': id|default('form')}} ) }}

    {{ form_widget(form) }}
    
    {% if with_submit is not defined or with_submit == true %}
    <input type=\"button\" value=\"{{ 'Delete user'|trans }}\" class=\"btn btn-lg btn-block btn-danger\" onclick=\"confirmDelete()\" >
    {% endif %}

{{ form_end(form) }}

<script>
    var message = '{{ message }}';
    
    function confirmDelete()
    {
        bootbox.confirm(message, function(result) {
            if(result == true)
            {
                document.form.submit();
            }
        });
    }
</script>", "EMMUserBundle:User:forms/form.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/User/forms/form.html.twig");
    }
}
