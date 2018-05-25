<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_d67642e1350ec7644d4e4ab3dc875d572bb112b6396a2c1394c6ceb1d5141b7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b35c2eb1b86c80e6ee328f7d0f6d59586d0572891832c91e6debb00afaa19df = $this->env->getExtension("native_profiler");
        $__internal_2b35c2eb1b86c80e6ee328f7d0f6d59586d0572891832c91e6debb00afaa19df->enter($__internal_2b35c2eb1b86c80e6ee328f7d0f6d59586d0572891832c91e6debb00afaa19df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2b35c2eb1b86c80e6ee328f7d0f6d59586d0572891832c91e6debb00afaa19df->leave($__internal_2b35c2eb1b86c80e6ee328f7d0f6d59586d0572891832c91e6debb00afaa19df_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_4ee93bdf40da5c3246622069fd06a30e97b3f5b7026b9d5aa8b0b28b749bd654 = $this->env->getExtension("native_profiler");
        $__internal_4ee93bdf40da5c3246622069fd06a30e97b3f5b7026b9d5aa8b0b28b749bd654->enter($__internal_4ee93bdf40da5c3246622069fd06a30e97b3f5b7026b9d5aa8b0b28b749bd654_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_4ee93bdf40da5c3246622069fd06a30e97b3f5b7026b9d5aa8b0b28b749bd654->leave($__internal_4ee93bdf40da5c3246622069fd06a30e97b3f5b7026b9d5aa8b0b28b749bd654_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
