<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_45119a1dbd13ca75e918feb619a9929dead0a704ae996067efab65cdd59c65ea extends Twig_Template
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
        $__internal_9b27444ca749297e5aa1bddf675c207c3f4a4f6bc8cbec4254b4c99331605d9e = $this->env->getExtension("native_profiler");
        $__internal_9b27444ca749297e5aa1bddf675c207c3f4a4f6bc8cbec4254b4c99331605d9e->enter($__internal_9b27444ca749297e5aa1bddf675c207c3f4a4f6bc8cbec4254b4c99331605d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9b27444ca749297e5aa1bddf675c207c3f4a4f6bc8cbec4254b4c99331605d9e->leave($__internal_9b27444ca749297e5aa1bddf675c207c3f4a4f6bc8cbec4254b4c99331605d9e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
