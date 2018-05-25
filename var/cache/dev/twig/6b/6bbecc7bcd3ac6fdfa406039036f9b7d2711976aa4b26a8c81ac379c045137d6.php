<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_8bee6d35989b566d9e521161326c2e86647ea25b1743bc558595c37e7ef66e83 extends Twig_Template
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
        $__internal_e178174ef12ced674e454370732c429207837498ea14c5a75f298bd6f467ba72 = $this->env->getExtension("native_profiler");
        $__internal_e178174ef12ced674e454370732c429207837498ea14c5a75f298bd6f467ba72->enter($__internal_e178174ef12ced674e454370732c429207837498ea14c5a75f298bd6f467ba72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e178174ef12ced674e454370732c429207837498ea14c5a75f298bd6f467ba72->leave($__internal_e178174ef12ced674e454370732c429207837498ea14c5a75f298bd6f467ba72_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
