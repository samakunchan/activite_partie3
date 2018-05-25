<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_d800185fedfb2b3da5c57fe84514aa84f48f1f0cce6feee510df4a04764f4916 extends Twig_Template
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
        $__internal_8b280cb43f4f8800d9bdf72139320ca2ba4b275b3860ce3733f5e92d0ce87f5e = $this->env->getExtension("native_profiler");
        $__internal_8b280cb43f4f8800d9bdf72139320ca2ba4b275b3860ce3733f5e92d0ce87f5e->enter($__internal_8b280cb43f4f8800d9bdf72139320ca2ba4b275b3860ce3733f5e92d0ce87f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_8b280cb43f4f8800d9bdf72139320ca2ba4b275b3860ce3733f5e92d0ce87f5e->leave($__internal_8b280cb43f4f8800d9bdf72139320ca2ba4b275b3860ce3733f5e92d0ce87f5e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
