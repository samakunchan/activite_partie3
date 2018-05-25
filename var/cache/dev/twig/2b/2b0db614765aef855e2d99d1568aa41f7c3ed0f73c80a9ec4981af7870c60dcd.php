<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_8cbd18999affc96ab25fff6310374dfc56473711b68d962a16519d47e45bfb27 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_934e38be86de537de0ade16a4af31c7ba6f81b3300c731cb83908014fb40e973 = $this->env->getExtension("native_profiler");
        $__internal_934e38be86de537de0ade16a4af31c7ba6f81b3300c731cb83908014fb40e973->enter($__internal_934e38be86de537de0ade16a4af31c7ba6f81b3300c731cb83908014fb40e973_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_934e38be86de537de0ade16a4af31c7ba6f81b3300c731cb83908014fb40e973->leave($__internal_934e38be86de537de0ade16a4af31c7ba6f81b3300c731cb83908014fb40e973_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d9a9a612b3b62fca3ae197331e04cd6677045f6cfe496a1ae29ac0620f5c44f0 = $this->env->getExtension("native_profiler");
        $__internal_d9a9a612b3b62fca3ae197331e04cd6677045f6cfe496a1ae29ac0620f5c44f0->enter($__internal_d9a9a612b3b62fca3ae197331e04cd6677045f6cfe496a1ae29ac0620f5c44f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d9a9a612b3b62fca3ae197331e04cd6677045f6cfe496a1ae29ac0620f5c44f0->leave($__internal_d9a9a612b3b62fca3ae197331e04cd6677045f6cfe496a1ae29ac0620f5c44f0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_e13a5da3ad60cc11533f8a4a497576ccc9f2ea8936ad53d651092b198b4a3645 = $this->env->getExtension("native_profiler");
        $__internal_e13a5da3ad60cc11533f8a4a497576ccc9f2ea8936ad53d651092b198b4a3645->enter($__internal_e13a5da3ad60cc11533f8a4a497576ccc9f2ea8936ad53d651092b198b4a3645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_e13a5da3ad60cc11533f8a4a497576ccc9f2ea8936ad53d651092b198b4a3645->leave($__internal_e13a5da3ad60cc11533f8a4a497576ccc9f2ea8936ad53d651092b198b4a3645_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_f455dbad11c6ef86ce9cc304a0fed120ff69a84daea8a6e9f9b7197d128a308f = $this->env->getExtension("native_profiler");
        $__internal_f455dbad11c6ef86ce9cc304a0fed120ff69a84daea8a6e9f9b7197d128a308f->enter($__internal_f455dbad11c6ef86ce9cc304a0fed120ff69a84daea8a6e9f9b7197d128a308f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_f455dbad11c6ef86ce9cc304a0fed120ff69a84daea8a6e9f9b7197d128a308f->leave($__internal_f455dbad11c6ef86ce9cc304a0fed120ff69a84daea8a6e9f9b7197d128a308f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
