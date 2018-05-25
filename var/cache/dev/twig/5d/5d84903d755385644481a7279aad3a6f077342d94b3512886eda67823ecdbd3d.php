<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_532b47b7f921740939a9a9bbc875cc2d573e2286d06d36cf782e84ab4e980036 extends Twig_Template
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
        $__internal_b006f771cb08c3c8495515bdc3c685ed3021ead700d4470ba964f7ededfbe96f = $this->env->getExtension("native_profiler");
        $__internal_b006f771cb08c3c8495515bdc3c685ed3021ead700d4470ba964f7ededfbe96f->enter($__internal_b006f771cb08c3c8495515bdc3c685ed3021ead700d4470ba964f7ededfbe96f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b006f771cb08c3c8495515bdc3c685ed3021ead700d4470ba964f7ededfbe96f->leave($__internal_b006f771cb08c3c8495515bdc3c685ed3021ead700d4470ba964f7ededfbe96f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
