<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_aa8d5ef9707676323102c303800609da9abca861626198235099362c4c1efb1e extends Twig_Template
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
        $__internal_0d1a005b32037afdf20298062655a5247a71c4837f94870d2abaddce34af54ad = $this->env->getExtension("native_profiler");
        $__internal_0d1a005b32037afdf20298062655a5247a71c4837f94870d2abaddce34af54ad->enter($__internal_0d1a005b32037afdf20298062655a5247a71c4837f94870d2abaddce34af54ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0d1a005b32037afdf20298062655a5247a71c4837f94870d2abaddce34af54ad->leave($__internal_0d1a005b32037afdf20298062655a5247a71c4837f94870d2abaddce34af54ad_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
