<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_c05c4cd6e94ccb7837a30c432207b252de295a2182c1e8aeb645f55d53c0587d extends Twig_Template
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
        $__internal_52e861f0edea81133cf336ace289bef4d3d17f1a33e1081e22498e4ea2b67e4e = $this->env->getExtension("native_profiler");
        $__internal_52e861f0edea81133cf336ace289bef4d3d17f1a33e1081e22498e4ea2b67e4e->enter($__internal_52e861f0edea81133cf336ace289bef4d3d17f1a33e1081e22498e4ea2b67e4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_52e861f0edea81133cf336ace289bef4d3d17f1a33e1081e22498e4ea2b67e4e->leave($__internal_52e861f0edea81133cf336ace289bef4d3d17f1a33e1081e22498e4ea2b67e4e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
