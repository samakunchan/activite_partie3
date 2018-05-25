<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_a288bba15fb9e2feb23babbbbc4160554102b5c1596105b5293d64b70cdadf98 extends Twig_Template
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
        $__internal_118e7edde03721eb7f8a126dd68a715d902994e50292a10569379e4473b041be = $this->env->getExtension("native_profiler");
        $__internal_118e7edde03721eb7f8a126dd68a715d902994e50292a10569379e4473b041be->enter($__internal_118e7edde03721eb7f8a126dd68a715d902994e50292a10569379e4473b041be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_118e7edde03721eb7f8a126dd68a715d902994e50292a10569379e4473b041be->leave($__internal_118e7edde03721eb7f8a126dd68a715d902994e50292a10569379e4473b041be_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
