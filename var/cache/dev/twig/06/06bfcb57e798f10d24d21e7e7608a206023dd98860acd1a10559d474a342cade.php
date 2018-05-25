<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_612ea7c1187b01b19142529d4879d24e957b1cc88f67609fa5ef2cd2519be8ba extends Twig_Template
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
        $__internal_cb2ad6896cc1287f9d186e7c16c96c80411817854b9720a1a101e70e2edf920d = $this->env->getExtension("native_profiler");
        $__internal_cb2ad6896cc1287f9d186e7c16c96c80411817854b9720a1a101e70e2edf920d->enter($__internal_cb2ad6896cc1287f9d186e7c16c96c80411817854b9720a1a101e70e2edf920d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_cb2ad6896cc1287f9d186e7c16c96c80411817854b9720a1a101e70e2edf920d->leave($__internal_cb2ad6896cc1287f9d186e7c16c96c80411817854b9720a1a101e70e2edf920d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
