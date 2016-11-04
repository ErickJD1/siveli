<?php

/* menu.html.twig */
class __TwigTemplate_a54d6640ad8b386aadfa3bf609638f80fe642afe41c1f804e532612b6765f063 extends Twig_Template
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
        $__internal_c7b27a8c90ce0c26c510a05fcf2a26182a319dcf7faa930428a81796dbe711a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7b27a8c90ce0c26c510a05fcf2a26182a319dcf7faa930428a81796dbe711a2->enter($__internal_c7b27a8c90ce0c26c510a05fcf2a26182a319dcf7faa930428a81796dbe711a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "menu.html.twig"));

        // line 1
        echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"> ";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Assignments", array(), "messages");
        echo " </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                ";
        // line 17
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 18
            echo "                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
            // line 19
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Users", array(), "messages");
            echo "  <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 21
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_user_index");
            echo "\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List users", array(), "messages");
            echo " </a></li>
                        <li><a href=\"";
            // line 22
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_user_add");
            echo "\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New user", array(), "messages");
            echo " </a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> ";
            // line 26
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("Tasks", array(), "messages");
            echo "  <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"";
            // line 28
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_task_index");
            echo "\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("List tasks", array(), "messages");
            echo " </a></li>
                        <li><a href=\"";
            // line 29
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_task_add");
            echo "\"> ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("New task", array(), "messages");
            echo " </a></li>
                    </ul>
                </li>   
                ";
        }
        // line 33
        echo "                
                ";
        // line 34
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 35
            echo "                <li>
                    <a href=\"";
            // line 36
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_task_custom");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("My tasks"), "html", null, true);
            echo "</a>
                </li>
                ";
        }
        // line 39
        echo "            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"";
        // line 42
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("emm_user_logout");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Logout"), "html", null, true);
        echo "</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>";
        
        $__internal_c7b27a8c90ce0c26c510a05fcf2a26182a319dcf7faa930428a81796dbe711a2->leave($__internal_c7b27a8c90ce0c26c510a05fcf2a26182a319dcf7faa930428a81796dbe711a2_prof);

    }

    public function getTemplateName()
    {
        return "menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 42,  104 => 39,  96 => 36,  93 => 35,  91 => 34,  88 => 33,  79 => 29,  73 => 28,  68 => 26,  59 => 22,  53 => 21,  48 => 19,  45 => 18,  43 => 17,  34 => 11,  22 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid container\">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\" aria-expanded=\"false\">
            <span class=\"sr-only\">Toggle navigation</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"#\"> {% trans %} Assignments {% endtrans %} </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
            <ul class=\"nav navbar-nav\">
                {% if is_granted('ROLE_ADMIN') %}
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> {% trans %} Users {% endtrans %}  <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('emm_user_index') }}\"> {% trans %} List users {% endtrans %} </a></li>
                        <li><a href=\"{{ path('emm_user_add') }}\"> {% trans %} New user {% endtrans %} </a></li>
                    </ul>
                </li>
                <li class=\"dropdown\">
                    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"> {% trans %} Tasks {% endtrans %}  <span class=\"caret\"></span></a>
                    <ul class=\"dropdown-menu\">
                        <li><a href=\"{{ path('emm_task_index') }}\"> {% trans %} List tasks {% endtrans %} </a></li>
                        <li><a href=\"{{ path('emm_task_add') }}\"> {% trans %} New task {% endtrans %} </a></li>
                    </ul>
                </li>   
                {% endif %}
                
                {% if is_granted('ROLE_USER') %}
                <li>
                    <a href=\"{{ path('emm_task_custom') }}\">{{ 'My tasks'|trans }}</a>
                </li>
                {% endif %}
            </ul>
            <ul class=\"nav navbar-nav navbar-right\">
                <li>
                    <a href=\"{{ path('emm_user_logout') }}\">{{ 'Logout'|trans }}</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>", "menu.html.twig", "C:\\Users\\Dominguez\\Desktop\\asignaciones-master\\app\\Resources\\views\\menu.html.twig");
    }
}
