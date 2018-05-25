<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_7b74d5727410329e4038b4163555b399bd112e7b1ce38e04baa44101da7ea12f extends Twig_Template
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
        $__internal_b8618672f04a839580082f312d90307fa15d0ae2f4006e32bf83c911e039710e = $this->env->getExtension("native_profiler");
        $__internal_b8618672f04a839580082f312d90307fa15d0ae2f4006e32bf83c911e039710e->enter($__internal_b8618672f04a839580082f312d90307fa15d0ae2f4006e32bf83c911e039710e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_b8618672f04a839580082f312d90307fa15d0ae2f4006e32bf83c911e039710e->leave($__internal_b8618672f04a839580082f312d90307fa15d0ae2f4006e32bf83c911e039710e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
