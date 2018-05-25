<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_c693033fae210b9f1b6e579dfc00eaa44ee07980b0750fe3dcbf8e3f3860b342 extends Twig_Template
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
        $__internal_3f7f8e9445ea477f0f12ae7a0945a0362f64e9d5ab003d6d01ecd5993f7cea85 = $this->env->getExtension("native_profiler");
        $__internal_3f7f8e9445ea477f0f12ae7a0945a0362f64e9d5ab003d6d01ecd5993f7cea85->enter($__internal_3f7f8e9445ea477f0f12ae7a0945a0362f64e9d5ab003d6d01ecd5993f7cea85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_3f7f8e9445ea477f0f12ae7a0945a0362f64e9d5ab003d6d01ecd5993f7cea85->leave($__internal_3f7f8e9445ea477f0f12ae7a0945a0362f64e9d5ab003d6d01ecd5993f7cea85_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
