<?php

/* OCPlatformBundle::layout.html.twig */
class __TwigTemplate_c7368c7ccdafb3e54908a306d70a2fd65a5efdee44578f2dd0cd58df7bc9b325 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCCoreBundle::layout.html.twig", "OCPlatformBundle::layout.html.twig", 3);
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
        $__internal_45283fb2f2d166c753c84fdccf06e72d641be97a00287abadcc9f099988979e2 = $this->env->getExtension("native_profiler");
        $__internal_45283fb2f2d166c753c84fdccf06e72d641be97a00287abadcc9f099988979e2->enter($__internal_45283fb2f2d166c753c84fdccf06e72d641be97a00287abadcc9f099988979e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45283fb2f2d166c753c84fdccf06e72d641be97a00287abadcc9f099988979e2->leave($__internal_45283fb2f2d166c753c84fdccf06e72d641be97a00287abadcc9f099988979e2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0560f049de794e6d7fa4e8d3b493b11845152d41a94862109c406458b97ac60d = $this->env->getExtension("native_profiler");
        $__internal_0560f049de794e6d7fa4e8d3b493b11845152d41a94862109c406458b97ac60d->enter($__internal_0560f049de794e6d7fa4e8d3b493b11845152d41a94862109c406458b97ac60d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Annonces - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_0560f049de794e6d7fa4e8d3b493b11845152d41a94862109c406458b97ac60d->leave($__internal_0560f049de794e6d7fa4e8d3b493b11845152d41a94862109c406458b97ac60d_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6f355f5987d0710d71bc6591313688f9d15da74c113ed927bcf577ab51b2960 = $this->env->getExtension("native_profiler");
        $__internal_d6f355f5987d0710d71bc6591313688f9d15da74c113ed927bcf577ab51b2960->enter($__internal_d6f355f5987d0710d71bc6591313688f9d15da74c113ed927bcf577ab51b2960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d6f355f5987d0710d71bc6591313688f9d15da74c113ed927bcf577ab51b2960->leave($__internal_d6f355f5987d0710d71bc6591313688f9d15da74c113ed927bcf577ab51b2960_prof);

    }

    // line 17
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_23e71f7aea3510a6c3d9ce0f113299220f4973e6cf43956c10115e23c9316932 = $this->env->getExtension("native_profiler");
        $__internal_23e71f7aea3510a6c3d9ce0f113299220f4973e6cf43956c10115e23c9316932->enter($__internal_23e71f7aea3510a6c3d9ce0f113299220f4973e6cf43956c10115e23c9316932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 18
        echo "  ";
        
        $__internal_23e71f7aea3510a6c3d9ce0f113299220f4973e6cf43956c10115e23c9316932->leave($__internal_23e71f7aea3510a6c3d9ce0f113299220f4973e6cf43956c10115e23c9316932_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle::layout.html.twig";
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
