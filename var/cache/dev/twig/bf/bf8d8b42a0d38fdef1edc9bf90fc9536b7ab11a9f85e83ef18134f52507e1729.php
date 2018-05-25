<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_6412b2f886dea9be6f10645eb9e8931c57edc58050aecd0ffbc772ee7d59863a extends Twig_Template
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
        $__internal_3a6e9507ca912173f00c2d79d2b2201c92da4c1fe969959d91ecf2e8d106f25c = $this->env->getExtension("native_profiler");
        $__internal_3a6e9507ca912173f00c2d79d2b2201c92da4c1fe969959d91ecf2e8d106f25c->enter($__internal_3a6e9507ca912173f00c2d79d2b2201c92da4c1fe969959d91ecf2e8d106f25c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3a6e9507ca912173f00c2d79d2b2201c92da4c1fe969959d91ecf2e8d106f25c->leave($__internal_3a6e9507ca912173f00c2d79d2b2201c92da4c1fe969959d91ecf2e8d106f25c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
