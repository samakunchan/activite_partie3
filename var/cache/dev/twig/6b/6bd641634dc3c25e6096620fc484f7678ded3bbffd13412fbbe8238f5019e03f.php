<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_181e01d8f24f01bf309e858fc0797bad48565c2cbf7a458aa1a158b4f601e242 extends Twig_Template
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
        $__internal_2503d12dec0defc2cab6c124098624f5bbcea71b22b64e8a4ce212d597069b6f = $this->env->getExtension("native_profiler");
        $__internal_2503d12dec0defc2cab6c124098624f5bbcea71b22b64e8a4ce212d597069b6f->enter($__internal_2503d12dec0defc2cab6c124098624f5bbcea71b22b64e8a4ce212d597069b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_2503d12dec0defc2cab6c124098624f5bbcea71b22b64e8a4ce212d597069b6f->leave($__internal_2503d12dec0defc2cab6c124098624f5bbcea71b22b64e8a4ce212d597069b6f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
