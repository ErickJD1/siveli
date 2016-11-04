<?php

/* EMMUserBundle:Security:login.html.twig */
class __TwigTemplate_7c83280a1fd502cbc21645a87353a74b10a418a3d8ff7ebe4d7400fe71687d9b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("layout.html.twig", "EMMUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee1bdbfe60f24dba63838d970255d5f92adb6327ba93706f8ad619c3aa90c3a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1bdbfe60f24dba63838d970255d5f92adb6327ba93706f8ad619c3aa90c3a6->enter($__internal_ee1bdbfe60f24dba63838d970255d5f92adb6327ba93706f8ad619c3aa90c3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EMMUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee1bdbfe60f24dba63838d970255d5f92adb6327ba93706f8ad619c3aa90c3a6->leave($__internal_ee1bdbfe60f24dba63838d970255d5f92adb6327ba93706f8ad619c3aa90c3a6_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a529a711fd0cd2d45643ccde7862066a075030b48c7e25f38188fd558a664df6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a529a711fd0cd2d45643ccde7862066a075030b48c7e25f38188fd558a664df6->enter($__internal_a529a711fd0cd2d45643ccde7862066a075030b48c7e25f38188fd558a664df6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:Security:login.html.twig"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("public/css/signin.css"), "html", null, true);
        echo "\">
";
        
        $__internal_a529a711fd0cd2d45643ccde7862066a075030b48c7e25f38188fd558a664df6->leave($__internal_a529a711fd0cd2d45643ccde7862066a075030b48c7e25f38188fd558a664df6_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_bb7eeb61ca791cea234100ff63d77b16338e9c3267acca11a509f395f5e364fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb7eeb61ca791cea234100ff63d77b16338e9c3267acca11a509f395f5e364fa->enter($__internal_bb7eeb61ca791cea234100ff63d77b16338e9c3267acca11a509f395f5e364fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "EMMUserBundle:Security:login.html.twig"));

        // line 9
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "

    <div class=\"container\">
\t\t<form action=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_user_login_check");
        echo "\" method=\"post\" class=\"form-signin\">
\t\t\t<h2 class=\"form-signin-heading\">";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Please sign in"), "html", null, true);
        echo "</h2>

            ";
        // line 15
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 16
            echo "            <div class=\"text-danger\">
                <p>
                    <strong>
                        ";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "
                    </strong>
                </p>
            </div>
            ";
        }
        // line 24
        echo "
\t\t    <label for=\"username\" class=\"sr-only\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo ":</label>
\t\t    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Username"), "html", null, true);
        echo "\" required autofocus />

\t\t    <label for=\"password\" class=\"sr-only\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo ":</label>
\t\t    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Password"), "html", null, true);
        echo "\" required />
\t\t    
\t\t    <input type=\"hidden\" name=\"_target_path\" value=\"emm_user_homepage\" />

\t\t    <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sign in"), "html", null, true);
        echo "</button>
\t\t</form>
    </div> <!-- /container -->
";
        
        $__internal_bb7eeb61ca791cea234100ff63d77b16338e9c3267acca11a509f395f5e364fa->leave($__internal_bb7eeb61ca791cea234100ff63d77b16338e9c3267acca11a509f395f5e364fa_prof);

    }

    public function getTemplateName()
    {
        return "EMMUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  110 => 29,  106 => 28,  99 => 26,  95 => 25,  92 => 24,  84 => 19,  79 => 16,  77 => 15,  72 => 13,  68 => 12,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"{{ asset('public/css/signin.css') }}\">
{% endblock %}

{% block body %}
\t{{ parent() }}

    <div class=\"container\">
\t\t<form action=\"{{ path('emm_user_login_check') }}\" method=\"post\" class=\"form-signin\">
\t\t\t<h2 class=\"form-signin-heading\">{{ 'Please sign in'|trans }}</h2>

            {% if error %}
            <div class=\"text-danger\">
                <p>
                    <strong>
                        {{ error.messageKey|trans(error.messageData, 'security') }}
                    </strong>
                </p>
            </div>
            {% endif %}

\t\t    <label for=\"username\" class=\"sr-only\">{{ 'Username'|trans }}:</label>
\t\t    <input type=\"text\" id=\"username\" class=\"form-control\" name=\"_username\" value=\"{{ last_username }}\" placeholder=\"{{ 'Username'|trans }}\" required autofocus />

\t\t    <label for=\"password\" class=\"sr-only\">{{ 'Password'|trans }}:</label>
\t\t    <input type=\"password\" id=\"password\" class=\"form-control\" name=\"_password\" placeholder=\"{{ 'Password'|trans }}\" required />
\t\t    
\t\t    <input type=\"hidden\" name=\"_target_path\" value=\"emm_user_homepage\" />

\t\t    <button type=\"submit\" class=\"btn btn-lg btn-primary btn-block\">{{ 'Sign in'|trans }}</button>
\t\t</form>
    </div> <!-- /container -->
{% endblock %}", "EMMUserBundle:Security:login.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\src\\EMM\\UserBundle/Resources/views/Security/login.html.twig");
    }
}
