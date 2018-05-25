<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_65b654a9e1d3e75f08e34e9d7d50aed6b6e56a6b130252283719970a7495cdc3 extends Twig_Template
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
        $__internal_a1b967d0565e437d64f028ecd6394aa92abb777a9bd0049772bd5760caa0ab36 = $this->env->getExtension("native_profiler");
        $__internal_a1b967d0565e437d64f028ecd6394aa92abb777a9bd0049772bd5760caa0ab36->enter($__internal_a1b967d0565e437d64f028ecd6394aa92abb777a9bd0049772bd5760caa0ab36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_a1b967d0565e437d64f028ecd6394aa92abb777a9bd0049772bd5760caa0ab36->leave($__internal_a1b967d0565e437d64f028ecd6394aa92abb777a9bd0049772bd5760caa0ab36_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
