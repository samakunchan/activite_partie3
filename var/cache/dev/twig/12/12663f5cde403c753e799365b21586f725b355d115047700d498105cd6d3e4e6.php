<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_6a56c25d0db02a85adfee0899c9f028154f0a30c2b0af058c01917c9586ee9b5 extends Twig_Template
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
        $__internal_57c757087b9ac6724b93156ec1812ecd9162fdeb59028f2518ca37bf9f6c853f = $this->env->getExtension("native_profiler");
        $__internal_57c757087b9ac6724b93156ec1812ecd9162fdeb59028f2518ca37bf9f6c853f->enter($__internal_57c757087b9ac6724b93156ec1812ecd9162fdeb59028f2518ca37bf9f6c853f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_57c757087b9ac6724b93156ec1812ecd9162fdeb59028f2518ca37bf9f6c853f->leave($__internal_57c757087b9ac6724b93156ec1812ecd9162fdeb59028f2518ca37bf9f6c853f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
