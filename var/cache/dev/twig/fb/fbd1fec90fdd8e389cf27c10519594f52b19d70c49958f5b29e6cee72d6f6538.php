<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_024c16e9a5ad4b0cc801332f1a0fe923934d36dd077d771690e53c1c1e35fd84 extends Twig_Template
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
        $__internal_d6d1ed0d2009fe1c1955d6d32321439a2fbeed46867f15926b6ba06a4101ae8d = $this->env->getExtension("native_profiler");
        $__internal_d6d1ed0d2009fe1c1955d6d32321439a2fbeed46867f15926b6ba06a4101ae8d->enter($__internal_d6d1ed0d2009fe1c1955d6d32321439a2fbeed46867f15926b6ba06a4101ae8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_d6d1ed0d2009fe1c1955d6d32321439a2fbeed46867f15926b6ba06a4101ae8d->leave($__internal_d6d1ed0d2009fe1c1955d6d32321439a2fbeed46867f15926b6ba06a4101ae8d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
