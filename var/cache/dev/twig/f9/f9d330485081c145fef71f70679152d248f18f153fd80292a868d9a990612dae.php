<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_04aacfd64db44b977ab04072450bd474f6aa5d8bfee8e79bbed0f06cad910a4c extends Twig_Template
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
        $__internal_923a9ee08b72a0381c003d6166aa7cd02fdd241f8f75d08d982fecfcc476aac3 = $this->env->getExtension("native_profiler");
        $__internal_923a9ee08b72a0381c003d6166aa7cd02fdd241f8f75d08d982fecfcc476aac3->enter($__internal_923a9ee08b72a0381c003d6166aa7cd02fdd241f8f75d08d982fecfcc476aac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_923a9ee08b72a0381c003d6166aa7cd02fdd241f8f75d08d982fecfcc476aac3->leave($__internal_923a9ee08b72a0381c003d6166aa7cd02fdd241f8f75d08d982fecfcc476aac3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
