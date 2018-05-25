<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_5c0f9e522fda0f95d8aab48e6c6f4be9ea300932dbacfef7ab0f3f6f525e2334 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03e87fa4cd3207b355720fa115505a3012720e7e45a955815c3a5b67ad1713f8 = $this->env->getExtension("native_profiler");
        $__internal_03e87fa4cd3207b355720fa115505a3012720e7e45a955815c3a5b67ad1713f8->enter($__internal_03e87fa4cd3207b355720fa115505a3012720e7e45a955815c3a5b67ad1713f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_03e87fa4cd3207b355720fa115505a3012720e7e45a955815c3a5b67ad1713f8->leave($__internal_03e87fa4cd3207b355720fa115505a3012720e7e45a955815c3a5b67ad1713f8_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9d5f5479bc8f435e503f9b82d166aafaf17303bfbfc6226374117c4fdb3ce122 = $this->env->getExtension("native_profiler");
        $__internal_9d5f5479bc8f435e503f9b82d166aafaf17303bfbfc6226374117c4fdb3ce122->enter($__internal_9d5f5479bc8f435e503f9b82d166aafaf17303bfbfc6226374117c4fdb3ce122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_9d5f5479bc8f435e503f9b82d166aafaf17303bfbfc6226374117c4fdb3ce122->leave($__internal_9d5f5479bc8f435e503f9b82d166aafaf17303bfbfc6226374117c4fdb3ce122_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2db3f3bbdde0e2b7a81d0ddba7d7500c33305dc520c1262267b2d2ad450de0cb = $this->env->getExtension("native_profiler");
        $__internal_2db3f3bbdde0e2b7a81d0ddba7d7500c33305dc520c1262267b2d2ad450de0cb->enter($__internal_2db3f3bbdde0e2b7a81d0ddba7d7500c33305dc520c1262267b2d2ad450de0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2db3f3bbdde0e2b7a81d0ddba7d7500c33305dc520c1262267b2d2ad450de0cb->leave($__internal_2db3f3bbdde0e2b7a81d0ddba7d7500c33305dc520c1262267b2d2ad450de0cb_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_48bf5453764612ecc9abd04e3136c39c614406e5408c4a1e937a0aa2c6ebd75a = $this->env->getExtension("native_profiler");
        $__internal_48bf5453764612ecc9abd04e3136c39c614406e5408c4a1e937a0aa2c6ebd75a->enter($__internal_48bf5453764612ecc9abd04e3136c39c614406e5408c4a1e937a0aa2c6ebd75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_48bf5453764612ecc9abd04e3136c39c614406e5408c4a1e937a0aa2c6ebd75a->leave($__internal_48bf5453764612ecc9abd04e3136c39c614406e5408c4a1e937a0aa2c6ebd75a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
