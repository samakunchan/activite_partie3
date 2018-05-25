<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_337a4f7553c56e580555110cbfe86be2652c9f6db7a0e10c7cb1116bccd515f9 extends Twig_Template
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
        $__internal_3cdd1056c79e72fbc82977c1c729d5562436e78f986ff80a314833ecd1a658da = $this->env->getExtension("native_profiler");
        $__internal_3cdd1056c79e72fbc82977c1c729d5562436e78f986ff80a314833ecd1a658da->enter($__internal_3cdd1056c79e72fbc82977c1c729d5562436e78f986ff80a314833ecd1a658da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_3cdd1056c79e72fbc82977c1c729d5562436e78f986ff80a314833ecd1a658da->leave($__internal_3cdd1056c79e72fbc82977c1c729d5562436e78f986ff80a314833ecd1a658da_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
