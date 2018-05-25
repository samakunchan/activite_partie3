<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_ede2a3e88afba73626c1d5655ca112b551717a47ce276e8369bac6b6048d94a0 extends Twig_Template
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
        $__internal_115752698c04ee7fb69ada2b9ff7c8e598b9a1860971b2790e38242a273600d7 = $this->env->getExtension("native_profiler");
        $__internal_115752698c04ee7fb69ada2b9ff7c8e598b9a1860971b2790e38242a273600d7->enter($__internal_115752698c04ee7fb69ada2b9ff7c8e598b9a1860971b2790e38242a273600d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_115752698c04ee7fb69ada2b9ff7c8e598b9a1860971b2790e38242a273600d7->leave($__internal_115752698c04ee7fb69ada2b9ff7c8e598b9a1860971b2790e38242a273600d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
