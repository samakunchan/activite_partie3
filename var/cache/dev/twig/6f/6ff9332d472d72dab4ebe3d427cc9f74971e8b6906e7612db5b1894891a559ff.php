<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_f3aec1104a837c26c5bd62fe1025831d194b74872301a4bfe98268af54aa2dc9 extends Twig_Template
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
        $__internal_75085f913d62ac8b9a8df5e2f477cb17d3b83ba81d8b1f7f91eaea913fd74ddf = $this->env->getExtension("native_profiler");
        $__internal_75085f913d62ac8b9a8df5e2f477cb17d3b83ba81d8b1f7f91eaea913fd74ddf->enter($__internal_75085f913d62ac8b9a8df5e2f477cb17d3b83ba81d8b1f7f91eaea913fd74ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_75085f913d62ac8b9a8df5e2f477cb17d3b83ba81d8b1f7f91eaea913fd74ddf->leave($__internal_75085f913d62ac8b9a8df5e2f477cb17d3b83ba81d8b1f7f91eaea913fd74ddf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
