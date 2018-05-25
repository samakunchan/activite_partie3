<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_7bc372a0a8e63d3736c784387113890a68a8b635f13144e5e2db33adef4550cd extends Twig_Template
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
        $__internal_b3ae376c52359523d8b6f2bba474a4d0258178bb4573f73f974f6276ef661760 = $this->env->getExtension("native_profiler");
        $__internal_b3ae376c52359523d8b6f2bba474a4d0258178bb4573f73f974f6276ef661760->enter($__internal_b3ae376c52359523d8b6f2bba474a4d0258178bb4573f73f974f6276ef661760_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_b3ae376c52359523d8b6f2bba474a4d0258178bb4573f73f974f6276ef661760->leave($__internal_b3ae376c52359523d8b6f2bba474a4d0258178bb4573f73f974f6276ef661760_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
