<?php

/* @OCPlatform/layout.html.twig */
class __TwigTemplate_3bfd471b3f6dfedd1935f322c937997f599882d0c5d064f39846892d7bfed437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "@OCPlatform/layout.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCCoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_27f1aeb5cff3248d686193701830379e3643db4d693672c5e08e7d577dd88813 = $this->env->getExtension("native_profiler");
        $__internal_27f1aeb5cff3248d686193701830379e3643db4d693672c5e08e7d577dd88813->enter($__internal_27f1aeb5cff3248d686193701830379e3643db4d693672c5e08e7d577dd88813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27f1aeb5cff3248d686193701830379e3643db4d693672c5e08e7d577dd88813->leave($__internal_27f1aeb5cff3248d686193701830379e3643db4d693672c5e08e7d577dd88813_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_4c197d6bea6f7e0c586fd1c22c6871233637d979c265a086ec4381520f225a41 = $this->env->getExtension("native_profiler");
        $__internal_4c197d6bea6f7e0c586fd1c22c6871233637d979c265a086ec4381520f225a41->enter($__internal_4c197d6bea6f7e0c586fd1c22c6871233637d979c265a086ec4381520f225a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_4c197d6bea6f7e0c586fd1c22c6871233637d979c265a086ec4381520f225a41->leave($__internal_4c197d6bea6f7e0c586fd1c22c6871233637d979c265a086ec4381520f225a41_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_af6bc68ebf6aafefec557540de6046a8fcb9a5846989435e5b6fa862109bfdc2 = $this->env->getExtension("native_profiler");
        $__internal_af6bc68ebf6aafefec557540de6046a8fcb9a5846989435e5b6fa862109bfdc2->enter($__internal_af6bc68ebf6aafefec557540de6046a8fcb9a5846989435e5b6fa862109bfdc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "
  ";
        // line 12
        echo "  <h1>Annonces</h1>

  <hr>

  ";
        // line 17
        echo "  ";
        $this->displayBlock('ocplatform_body', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_af6bc68ebf6aafefec557540de6046a8fcb9a5846989435e5b6fa862109bfdc2->leave($__internal_af6bc68ebf6aafefec557540de6046a8fcb9a5846989435e5b6fa862109bfdc2_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_8215eb868087d9b56de14aa3173ade47d4fa4ba78d19ac6d12c5348f708dc213 = $this->env->getExtension("native_profiler");
        $__internal_8215eb868087d9b56de14aa3173ade47d4fa4ba78d19ac6d12c5348f708dc213->enter($__internal_8215eb868087d9b56de14aa3173ade47d4fa4ba78d19ac6d12c5348f708dc213_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_8215eb868087d9b56de14aa3173ade47d4fa4ba78d19ac6d12c5348f708dc213->leave($__internal_8215eb868087d9b56de14aa3173ade47d4fa4ba78d19ac6d12c5348f708dc213_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 18,  78 => 17,  70 => 19,  67 => 17,  61 => 12,  58 => 10,  52 => 9,  42 => 6,  36 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/layout.html.twig #}*/
/* */
/* {% extends "OCCoreBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Annonces - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*   {# On définit un sous-titre commun à toutes les pages du bundle, par exemple #}*/
/*   <h1>Annonces</h1>*/
/* */
/*   <hr>*/
/* */
/*   {# On définit un nouveau bloc, que les vues du bundle pourront remplir #}*/
/*   {% block ocplatform_body %}*/
/*   {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
