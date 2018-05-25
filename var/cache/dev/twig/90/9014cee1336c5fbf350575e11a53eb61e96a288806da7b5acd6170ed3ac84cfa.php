<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_0086000985543e7b66fb476adf633da8d9f3bbcf7a4e61336b42af8c36ec6900 extends Twig_Template
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
        $__internal_c444e77c3f0029853aa4b02debaac1c0d72520ddae50eb6db6ed6c4546f2b4e7 = $this->env->getExtension("native_profiler");
        $__internal_c444e77c3f0029853aa4b02debaac1c0d72520ddae50eb6db6ed6c4546f2b4e7->enter($__internal_c444e77c3f0029853aa4b02debaac1c0d72520ddae50eb6db6ed6c4546f2b4e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c444e77c3f0029853aa4b02debaac1c0d72520ddae50eb6db6ed6c4546f2b4e7->leave($__internal_c444e77c3f0029853aa4b02debaac1c0d72520ddae50eb6db6ed6c4546f2b4e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
