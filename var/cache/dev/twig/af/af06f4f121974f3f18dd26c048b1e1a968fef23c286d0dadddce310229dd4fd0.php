<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_0c6cb432d33646f0d3e222fe5e6b178b6f8156293dec4780a38bb0a96f18df66 extends Twig_Template
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
        $__internal_d090238dac1fa61db24b34987918c0c324fb134c674e2755ec60526459466d06 = $this->env->getExtension("native_profiler");
        $__internal_d090238dac1fa61db24b34987918c0c324fb134c674e2755ec60526459466d06->enter($__internal_d090238dac1fa61db24b34987918c0c324fb134c674e2755ec60526459466d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_d090238dac1fa61db24b34987918c0c324fb134c674e2755ec60526459466d06->leave($__internal_d090238dac1fa61db24b34987918c0c324fb134c674e2755ec60526459466d06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo $view['form']->start($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* <?php echo $view['form']->end($form) ?>*/
/* */
