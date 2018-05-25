<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_dccf1c7cb6b140b7f9b17ae53aa14ae3d9a193984fece8bdff9e63555a0612ad extends Twig_Template
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
        $__internal_34b0f6696f2aa721349693b5796756f06afcca47897118d24435ca00212cb26e = $this->env->getExtension("native_profiler");
        $__internal_34b0f6696f2aa721349693b5796756f06afcca47897118d24435ca00212cb26e->enter($__internal_34b0f6696f2aa721349693b5796756f06afcca47897118d24435ca00212cb26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_34b0f6696f2aa721349693b5796756f06afcca47897118d24435ca00212cb26e->leave($__internal_34b0f6696f2aa721349693b5796756f06afcca47897118d24435ca00212cb26e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
