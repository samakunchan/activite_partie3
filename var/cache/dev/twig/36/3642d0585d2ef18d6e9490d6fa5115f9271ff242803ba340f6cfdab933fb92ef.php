<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_23d7b83db82b6d1d36445032d62f302b47e67ae5611282cbc135406ed6aeffa4 extends Twig_Template
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
        $__internal_faf8e56b39e1be725a00233764bc85426eca2f2a3a40a5d59da156f72ca95da5 = $this->env->getExtension("native_profiler");
        $__internal_faf8e56b39e1be725a00233764bc85426eca2f2a3a40a5d59da156f72ca95da5->enter($__internal_faf8e56b39e1be725a00233764bc85426eca2f2a3a40a5d59da156f72ca95da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_faf8e56b39e1be725a00233764bc85426eca2f2a3a40a5d59da156f72ca95da5->leave($__internal_faf8e56b39e1be725a00233764bc85426eca2f2a3a40a5d59da156f72ca95da5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
