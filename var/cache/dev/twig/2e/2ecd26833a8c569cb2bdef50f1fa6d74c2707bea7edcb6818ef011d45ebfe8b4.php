<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_2a5f9b0a6d90fdeb1eb02cb51c3decc666f768fb9dc2b92a294d6d89b836dccf extends Twig_Template
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
        $__internal_34ca82a295ef4b3e5403aec1cc1ad93a179dd9ff2c1023245a45b905fcac762e = $this->env->getExtension("native_profiler");
        $__internal_34ca82a295ef4b3e5403aec1cc1ad93a179dd9ff2c1023245a45b905fcac762e->enter($__internal_34ca82a295ef4b3e5403aec1cc1ad93a179dd9ff2c1023245a45b905fcac762e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_34ca82a295ef4b3e5403aec1cc1ad93a179dd9ff2c1023245a45b905fcac762e->leave($__internal_34ca82a295ef4b3e5403aec1cc1ad93a179dd9ff2c1023245a45b905fcac762e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
