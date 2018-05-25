<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_2ad7899165aee2ca3b3fb6b115d1c9db19f94f76cf4a3c2adf76edaf3a7d877c extends Twig_Template
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
        $__internal_70171f1c153157fab16cbcc2c721d304fca56760cfb98d03e7fbfe27b0b1da70 = $this->env->getExtension("native_profiler");
        $__internal_70171f1c153157fab16cbcc2c721d304fca56760cfb98d03e7fbfe27b0b1da70->enter($__internal_70171f1c153157fab16cbcc2c721d304fca56760cfb98d03e7fbfe27b0b1da70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_70171f1c153157fab16cbcc2c721d304fca56760cfb98d03e7fbfe27b0b1da70->leave($__internal_70171f1c153157fab16cbcc2c721d304fca56760cfb98d03e7fbfe27b0b1da70_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
