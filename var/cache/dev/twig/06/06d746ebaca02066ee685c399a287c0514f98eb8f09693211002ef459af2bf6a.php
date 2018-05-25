<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_abff74db9e7b92d51bd858a9d3bb6854db3519e72fc4ead6870304a9e5b91dda extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_58f19e1386497adfb7c8c33a68d73058fb54ea7855069720d2c619f6c5acbcb3 = $this->env->getExtension("native_profiler");
        $__internal_58f19e1386497adfb7c8c33a68d73058fb54ea7855069720d2c619f6c5acbcb3->enter($__internal_58f19e1386497adfb7c8c33a68d73058fb54ea7855069720d2c619f6c5acbcb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58f19e1386497adfb7c8c33a68d73058fb54ea7855069720d2c619f6c5acbcb3->leave($__internal_58f19e1386497adfb7c8c33a68d73058fb54ea7855069720d2c619f6c5acbcb3_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d94d5acc7fa8ce4087528e1245f28c732617a5bb54279220bf2562f5315099cb = $this->env->getExtension("native_profiler");
        $__internal_d94d5acc7fa8ce4087528e1245f28c732617a5bb54279220bf2562f5315099cb->enter($__internal_d94d5acc7fa8ce4087528e1245f28c732617a5bb54279220bf2562f5315099cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d94d5acc7fa8ce4087528e1245f28c732617a5bb54279220bf2562f5315099cb->leave($__internal_d94d5acc7fa8ce4087528e1245f28c732617a5bb54279220bf2562f5315099cb_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6a9cc8df1ba12a58213da7875305a394cbf2060ac4acbecf6d999f0de92d8674 = $this->env->getExtension("native_profiler");
        $__internal_6a9cc8df1ba12a58213da7875305a394cbf2060ac4acbecf6d999f0de92d8674->enter($__internal_6a9cc8df1ba12a58213da7875305a394cbf2060ac4acbecf6d999f0de92d8674_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6a9cc8df1ba12a58213da7875305a394cbf2060ac4acbecf6d999f0de92d8674->leave($__internal_6a9cc8df1ba12a58213da7875305a394cbf2060ac4acbecf6d999f0de92d8674_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a1625ea743dd3fbc5ad6d042eef5e53d47c63e83643cafe72be5892aea605c90 = $this->env->getExtension("native_profiler");
        $__internal_a1625ea743dd3fbc5ad6d042eef5e53d47c63e83643cafe72be5892aea605c90->enter($__internal_a1625ea743dd3fbc5ad6d042eef5e53d47c63e83643cafe72be5892aea605c90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a1625ea743dd3fbc5ad6d042eef5e53d47c63e83643cafe72be5892aea605c90->leave($__internal_a1625ea743dd3fbc5ad6d042eef5e53d47c63e83643cafe72be5892aea605c90_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
