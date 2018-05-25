<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_4b50c10e87dbbd8fbf68b0ea87fdf2c32f66abf84c09250bbf82527373747d67 extends Twig_Template
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
        $__internal_48e617c71ea30d41139acf758c809e93266c0f6065d57f51d74fb4e0a2d12125 = $this->env->getExtension("native_profiler");
        $__internal_48e617c71ea30d41139acf758c809e93266c0f6065d57f51d74fb4e0a2d12125->enter($__internal_48e617c71ea30d41139acf758c809e93266c0f6065d57f51d74fb4e0a2d12125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_48e617c71ea30d41139acf758c809e93266c0f6065d57f51d74fb4e0a2d12125->leave($__internal_48e617c71ea30d41139acf758c809e93266c0f6065d57f51d74fb4e0a2d12125_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
