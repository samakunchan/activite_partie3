<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_43d460e0c5731923b2de516e90963cee0e23d36b94150262aa98320a5b0c1cea extends Twig_Template
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
        $__internal_7000889922e1746a421aeb8ef343a885adfae5f320005fec11230cc56427b186 = $this->env->getExtension("native_profiler");
        $__internal_7000889922e1746a421aeb8ef343a885adfae5f320005fec11230cc56427b186->enter($__internal_7000889922e1746a421aeb8ef343a885adfae5f320005fec11230cc56427b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_7000889922e1746a421aeb8ef343a885adfae5f320005fec11230cc56427b186->leave($__internal_7000889922e1746a421aeb8ef343a885adfae5f320005fec11230cc56427b186_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
