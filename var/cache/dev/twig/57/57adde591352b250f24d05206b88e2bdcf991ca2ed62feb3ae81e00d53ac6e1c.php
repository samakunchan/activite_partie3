<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_a98dae98f5bea0ad2e3c8905526d634ea4fef883a67ece7ce49871cfd7212c42 extends Twig_Template
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
        $__internal_9245e155f3366145c3e573a5c59cce64ea1e3494521f701457623ea5b74627a6 = $this->env->getExtension("native_profiler");
        $__internal_9245e155f3366145c3e573a5c59cce64ea1e3494521f701457623ea5b74627a6->enter($__internal_9245e155f3366145c3e573a5c59cce64ea1e3494521f701457623ea5b74627a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_9245e155f3366145c3e573a5c59cce64ea1e3494521f701457623ea5b74627a6->leave($__internal_9245e155f3366145c3e573a5c59cce64ea1e3494521f701457623ea5b74627a6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
