<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_9b76056cf421624c4b4836edb2765b0b103d3a423d3bad989354d14228eb44ed extends Twig_Template
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
        $__internal_df6e34ea508fb5289c13a8fc3dc32f7e87f38b63e814ce293f0a75a613abff63 = $this->env->getExtension("native_profiler");
        $__internal_df6e34ea508fb5289c13a8fc3dc32f7e87f38b63e814ce293f0a75a613abff63->enter($__internal_df6e34ea508fb5289c13a8fc3dc32f7e87f38b63e814ce293f0a75a613abff63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_df6e34ea508fb5289c13a8fc3dc32f7e87f38b63e814ce293f0a75a613abff63->leave($__internal_df6e34ea508fb5289c13a8fc3dc32f7e87f38b63e814ce293f0a75a613abff63_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
