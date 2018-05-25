<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_5920fc4e730a08d5ee927cb0cc5b438f8231eb616c3d49f35886ab065cbac9a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_023c64d8d9cbf90cb0c2361fa90162fd0d856c739d30a0d4d60812ba51c90ec1 = $this->env->getExtension("native_profiler");
        $__internal_023c64d8d9cbf90cb0c2361fa90162fd0d856c739d30a0d4d60812ba51c90ec1->enter($__internal_023c64d8d9cbf90cb0c2361fa90162fd0d856c739d30a0d4d60812ba51c90ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_023c64d8d9cbf90cb0c2361fa90162fd0d856c739d30a0d4d60812ba51c90ec1->leave($__internal_023c64d8d9cbf90cb0c2361fa90162fd0d856c739d30a0d4d60812ba51c90ec1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6542c5e5c388fc3b71fe8839c3281027044dd58d4d85f20629fa1cb93ee52add = $this->env->getExtension("native_profiler");
        $__internal_6542c5e5c388fc3b71fe8839c3281027044dd58d4d85f20629fa1cb93ee52add->enter($__internal_6542c5e5c388fc3b71fe8839c3281027044dd58d4d85f20629fa1cb93ee52add_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_6542c5e5c388fc3b71fe8839c3281027044dd58d4d85f20629fa1cb93ee52add->leave($__internal_6542c5e5c388fc3b71fe8839c3281027044dd58d4d85f20629fa1cb93ee52add_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_41165ea6c6b80eff2ae54c2eea22695c3f28ac0c0a029f0a3e91220991b8c5f7 = $this->env->getExtension("native_profiler");
        $__internal_41165ea6c6b80eff2ae54c2eea22695c3f28ac0c0a029f0a3e91220991b8c5f7->enter($__internal_41165ea6c6b80eff2ae54c2eea22695c3f28ac0c0a029f0a3e91220991b8c5f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_41165ea6c6b80eff2ae54c2eea22695c3f28ac0c0a029f0a3e91220991b8c5f7->leave($__internal_41165ea6c6b80eff2ae54c2eea22695c3f28ac0c0a029f0a3e91220991b8c5f7_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6853c0a088995b667772dfdf03ceec0c3f8250b86248dac12626855b7b847431 = $this->env->getExtension("native_profiler");
        $__internal_6853c0a088995b667772dfdf03ceec0c3f8250b86248dac12626855b7b847431->enter($__internal_6853c0a088995b667772dfdf03ceec0c3f8250b86248dac12626855b7b847431_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_6853c0a088995b667772dfdf03ceec0c3f8250b86248dac12626855b7b847431->leave($__internal_6853c0a088995b667772dfdf03ceec0c3f8250b86248dac12626855b7b847431_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
