<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0b1710565d47da796eca377d72d2095d17451f97c375a0e4c0c50e255674ae92 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_025dad2a4a20ad3843e62257deb399c9565b4f776b7b852b846375177b6989be = $this->env->getExtension("native_profiler");
        $__internal_025dad2a4a20ad3843e62257deb399c9565b4f776b7b852b846375177b6989be->enter($__internal_025dad2a4a20ad3843e62257deb399c9565b4f776b7b852b846375177b6989be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_025dad2a4a20ad3843e62257deb399c9565b4f776b7b852b846375177b6989be->leave($__internal_025dad2a4a20ad3843e62257deb399c9565b4f776b7b852b846375177b6989be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5c80d90981d0ac75ad7ee9aa2ef6dc95bec81fbdd97fcfbc5a5ae9c596563308 = $this->env->getExtension("native_profiler");
        $__internal_5c80d90981d0ac75ad7ee9aa2ef6dc95bec81fbdd97fcfbc5a5ae9c596563308->enter($__internal_5c80d90981d0ac75ad7ee9aa2ef6dc95bec81fbdd97fcfbc5a5ae9c596563308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5c80d90981d0ac75ad7ee9aa2ef6dc95bec81fbdd97fcfbc5a5ae9c596563308->leave($__internal_5c80d90981d0ac75ad7ee9aa2ef6dc95bec81fbdd97fcfbc5a5ae9c596563308_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9b5fee07570395888385a59c838b62729ba9d8375c5686f2fb10be3454f70523 = $this->env->getExtension("native_profiler");
        $__internal_9b5fee07570395888385a59c838b62729ba9d8375c5686f2fb10be3454f70523->enter($__internal_9b5fee07570395888385a59c838b62729ba9d8375c5686f2fb10be3454f70523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9b5fee07570395888385a59c838b62729ba9d8375c5686f2fb10be3454f70523->leave($__internal_9b5fee07570395888385a59c838b62729ba9d8375c5686f2fb10be3454f70523_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_51121066ed628a8dfc2080e77822c33a4f1fb2c485b73f037c9cca29b221b80b = $this->env->getExtension("native_profiler");
        $__internal_51121066ed628a8dfc2080e77822c33a4f1fb2c485b73f037c9cca29b221b80b->enter($__internal_51121066ed628a8dfc2080e77822c33a4f1fb2c485b73f037c9cca29b221b80b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_51121066ed628a8dfc2080e77822c33a4f1fb2c485b73f037c9cca29b221b80b->leave($__internal_51121066ed628a8dfc2080e77822c33a4f1fb2c485b73f037c9cca29b221b80b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
