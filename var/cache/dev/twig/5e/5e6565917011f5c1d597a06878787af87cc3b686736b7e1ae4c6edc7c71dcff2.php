<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a5201ddb8fcaf28d1384309bea725533d4eea194821dc7dbd657b43f421f8215 extends Twig_Template
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
        $__internal_c42b7fb104dbd3050aeb69b6690a50f3d04cf257af958fac02e0a762cf036262 = $this->env->getExtension("native_profiler");
        $__internal_c42b7fb104dbd3050aeb69b6690a50f3d04cf257af958fac02e0a762cf036262->enter($__internal_c42b7fb104dbd3050aeb69b6690a50f3d04cf257af958fac02e0a762cf036262_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_c42b7fb104dbd3050aeb69b6690a50f3d04cf257af958fac02e0a762cf036262->leave($__internal_c42b7fb104dbd3050aeb69b6690a50f3d04cf257af958fac02e0a762cf036262_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
