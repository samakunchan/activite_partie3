<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_5640a5a3fb13a3db1daceaa5cf109ad9556eadbdf0a52b75326ff1bee1062da7 extends Twig_Template
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
        $__internal_33dc16521bcd7f101a443abfae889ece24abe7355f3c99a6c8cdb658d5753992 = $this->env->getExtension("native_profiler");
        $__internal_33dc16521bcd7f101a443abfae889ece24abe7355f3c99a6c8cdb658d5753992->enter($__internal_33dc16521bcd7f101a443abfae889ece24abe7355f3c99a6c8cdb658d5753992_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_33dc16521bcd7f101a443abfae889ece24abe7355f3c99a6c8cdb658d5753992->leave($__internal_33dc16521bcd7f101a443abfae889ece24abe7355f3c99a6c8cdb658d5753992_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
