<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_4a5c9a9643344bbb645d33442398475ca02b2f4384076e9c7f973515550d8565 extends Twig_Template
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
        $__internal_c5ea1fb138c80b53d6fbae2ef4ad13d83bdae7b71e53ac3e91f09593a479a608 = $this->env->getExtension("native_profiler");
        $__internal_c5ea1fb138c80b53d6fbae2ef4ad13d83bdae7b71e53ac3e91f09593a479a608->enter($__internal_c5ea1fb138c80b53d6fbae2ef4ad13d83bdae7b71e53ac3e91f09593a479a608_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_c5ea1fb138c80b53d6fbae2ef4ad13d83bdae7b71e53ac3e91f09593a479a608->leave($__internal_c5ea1fb138c80b53d6fbae2ef4ad13d83bdae7b71e53ac3e91f09593a479a608_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
