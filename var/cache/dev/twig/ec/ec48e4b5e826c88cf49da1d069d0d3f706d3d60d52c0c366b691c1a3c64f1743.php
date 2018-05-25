<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_6c4f9509a77a94c1327511de5c8802f08afb8b8d4b803b3c9a21a3fbad86b404 extends Twig_Template
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
        $__internal_5cd80dd9c17398bf2e8d8c6bc82d4a2c368b497ad285cccf3d530611ba355cbf = $this->env->getExtension("native_profiler");
        $__internal_5cd80dd9c17398bf2e8d8c6bc82d4a2c368b497ad285cccf3d530611ba355cbf->enter($__internal_5cd80dd9c17398bf2e8d8c6bc82d4a2c368b497ad285cccf3d530611ba355cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_5cd80dd9c17398bf2e8d8c6bc82d4a2c368b497ad285cccf3d530611ba355cbf->leave($__internal_5cd80dd9c17398bf2e8d8c6bc82d4a2c368b497ad285cccf3d530611ba355cbf_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
