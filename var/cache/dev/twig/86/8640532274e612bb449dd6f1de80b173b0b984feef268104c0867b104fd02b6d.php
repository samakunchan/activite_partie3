<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_131c8cb558bef46646e9ee5bb580ade4467ed2b8e65c849c9e0665d933de1bfa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_402f3d1098b397a52591a069b04e8e1dc8682d57ea6ea3dc96412e026c5960ea = $this->env->getExtension("native_profiler");
        $__internal_402f3d1098b397a52591a069b04e8e1dc8682d57ea6ea3dc96412e026c5960ea->enter($__internal_402f3d1098b397a52591a069b04e8e1dc8682d57ea6ea3dc96412e026c5960ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_402f3d1098b397a52591a069b04e8e1dc8682d57ea6ea3dc96412e026c5960ea->leave($__internal_402f3d1098b397a52591a069b04e8e1dc8682d57ea6ea3dc96412e026c5960ea_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_1259abd8113a1448523deebcdfe700a4b3936b851fca04a11223eccdc9840c8e = $this->env->getExtension("native_profiler");
        $__internal_1259abd8113a1448523deebcdfe700a4b3936b851fca04a11223eccdc9840c8e->enter($__internal_1259abd8113a1448523deebcdfe700a4b3936b851fca04a11223eccdc9840c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_1259abd8113a1448523deebcdfe700a4b3936b851fca04a11223eccdc9840c8e->leave($__internal_1259abd8113a1448523deebcdfe700a4b3936b851fca04a11223eccdc9840c8e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0dad00b1ca7aeb5c869c32a97dc17c61b39fbea946737162607ce2181fd7eeb0 = $this->env->getExtension("native_profiler");
        $__internal_0dad00b1ca7aeb5c869c32a97dc17c61b39fbea946737162607ce2181fd7eeb0->enter($__internal_0dad00b1ca7aeb5c869c32a97dc17c61b39fbea946737162607ce2181fd7eeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0dad00b1ca7aeb5c869c32a97dc17c61b39fbea946737162607ce2181fd7eeb0->leave($__internal_0dad00b1ca7aeb5c869c32a97dc17c61b39fbea946737162607ce2181fd7eeb0_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
