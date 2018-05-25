<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_532b6bf2d89c3d38cf72f462a14301d6a6aae7838fc4c5a51498cc1eab5b432a extends Twig_Template
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
        $__internal_ebc3b439e9f851f71baec8091224100ac9bab9ab45b35c91af12681352637c10 = $this->env->getExtension("native_profiler");
        $__internal_ebc3b439e9f851f71baec8091224100ac9bab9ab45b35c91af12681352637c10->enter($__internal_ebc3b439e9f851f71baec8091224100ac9bab9ab45b35c91af12681352637c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_ebc3b439e9f851f71baec8091224100ac9bab9ab45b35c91af12681352637c10->leave($__internal_ebc3b439e9f851f71baec8091224100ac9bab9ab45b35c91af12681352637c10_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
