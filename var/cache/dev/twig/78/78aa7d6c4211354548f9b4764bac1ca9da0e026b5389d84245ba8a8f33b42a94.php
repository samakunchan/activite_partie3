<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_5afc8d2c7461dda6a36fd82e2ac1040d72a8f805b0925c56b273716590913fd7 extends Twig_Template
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
        $__internal_d5013a27f234d83cae71d4cf84b95ad2f949cb4868e24f48fe34aeef2928db47 = $this->env->getExtension("native_profiler");
        $__internal_d5013a27f234d83cae71d4cf84b95ad2f949cb4868e24f48fe34aeef2928db47->enter($__internal_d5013a27f234d83cae71d4cf84b95ad2f949cb4868e24f48fe34aeef2928db47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d5013a27f234d83cae71d4cf84b95ad2f949cb4868e24f48fe34aeef2928db47->leave($__internal_d5013a27f234d83cae71d4cf84b95ad2f949cb4868e24f48fe34aeef2928db47_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
