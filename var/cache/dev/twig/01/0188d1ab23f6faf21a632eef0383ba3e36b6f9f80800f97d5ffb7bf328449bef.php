<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_84db334b8c9a00440b8dc282146bd417dbc4e6aa7a182eab39874f4917c64ba8 extends Twig_Template
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
        $__internal_796a3610b8398722c14512ed292b2c6fc84429cd12faf9a6baa49af7419b7f06 = $this->env->getExtension("native_profiler");
        $__internal_796a3610b8398722c14512ed292b2c6fc84429cd12faf9a6baa49af7419b7f06->enter($__internal_796a3610b8398722c14512ed292b2c6fc84429cd12faf9a6baa49af7419b7f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_796a3610b8398722c14512ed292b2c6fc84429cd12faf9a6baa49af7419b7f06->leave($__internal_796a3610b8398722c14512ed292b2c6fc84429cd12faf9a6baa49af7419b7f06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
