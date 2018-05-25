<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_7732ab9f7a6e784dc40ce5a703938cde4bf7693d17629e7240c01c429768c7fd extends Twig_Template
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
        $__internal_95ee589d57ee6fc76789143a89184a761b916727c036e8319554a948932eb9a9 = $this->env->getExtension("native_profiler");
        $__internal_95ee589d57ee6fc76789143a89184a761b916727c036e8319554a948932eb9a9->enter($__internal_95ee589d57ee6fc76789143a89184a761b916727c036e8319554a948932eb9a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_95ee589d57ee6fc76789143a89184a761b916727c036e8319554a948932eb9a9->leave($__internal_95ee589d57ee6fc76789143a89184a761b916727c036e8319554a948932eb9a9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
