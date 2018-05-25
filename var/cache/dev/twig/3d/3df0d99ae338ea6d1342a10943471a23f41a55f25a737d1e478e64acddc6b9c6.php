<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_67e836b4f73077f158cd3bfbcbf11b58d666aaf5c9f4ab463ebf14bb7f9d9286 extends Twig_Template
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
        $__internal_51823654c01d3d7c68d0a49b05c0f6a6b8105c442a0157a283d160c396001cbf = $this->env->getExtension("native_profiler");
        $__internal_51823654c01d3d7c68d0a49b05c0f6a6b8105c442a0157a283d160c396001cbf->enter($__internal_51823654c01d3d7c68d0a49b05c0f6a6b8105c442a0157a283d160c396001cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_51823654c01d3d7c68d0a49b05c0f6a6b8105c442a0157a283d160c396001cbf->leave($__internal_51823654c01d3d7c68d0a49b05c0f6a6b8105c442a0157a283d160c396001cbf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
