<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_955e8b62de6f78206c675343ef2b1cd591d39d638fb10ebe151b7912ecfc3462 extends Twig_Template
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
        $__internal_dd00d2e5a49dfabec28e0a35df0ef8ec001d03433bd20eb697952ad65c02a2e0 = $this->env->getExtension("native_profiler");
        $__internal_dd00d2e5a49dfabec28e0a35df0ef8ec001d03433bd20eb697952ad65c02a2e0->enter($__internal_dd00d2e5a49dfabec28e0a35df0ef8ec001d03433bd20eb697952ad65c02a2e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_dd00d2e5a49dfabec28e0a35df0ef8ec001d03433bd20eb697952ad65c02a2e0->leave($__internal_dd00d2e5a49dfabec28e0a35df0ef8ec001d03433bd20eb697952ad65c02a2e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
