<?php

/* @OCPlatform/Advert/add.html.twig */
class __TwigTemplate_9037ae0adba6ff613db760a5be735aa9bd73f73b9b5229c49773619503558c2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/add.html.twig", 3);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aada2cfd4a0292eb27251b12bee7619cc9f25ddb3250d1fc70c255ec94fa1801 = $this->env->getExtension("native_profiler");
        $__internal_aada2cfd4a0292eb27251b12bee7619cc9f25ddb3250d1fc70c255ec94fa1801->enter($__internal_aada2cfd4a0292eb27251b12bee7619cc9f25ddb3250d1fc70c255ec94fa1801_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aada2cfd4a0292eb27251b12bee7619cc9f25ddb3250d1fc70c255ec94fa1801->leave($__internal_aada2cfd4a0292eb27251b12bee7619cc9f25ddb3250d1fc70c255ec94fa1801_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_569c5fea2bf5d9ed6003f12d56e02a20d2ce681395bc62a69432bbfaa07fa0d9 = $this->env->getExtension("native_profiler");
        $__internal_569c5fea2bf5d9ed6003f12d56e02a20d2ce681395bc62a69432bbfaa07fa0d9->enter($__internal_569c5fea2bf5d9ed6003f12d56e02a20d2ce681395bc62a69432bbfaa07fa0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
  <h2>Ajouter une annonce</h2>

  ";
        // line 9
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Attention : cette annonce sera ajoutée directement
    sur la page d'accueil après validation du formulaire.
  </p>

";
        
        $__internal_569c5fea2bf5d9ed6003f12d56e02a20d2ce681395bc62a69432bbfaa07fa0d9->leave($__internal_569c5fea2bf5d9ed6003f12d56e02a20d2ce681395bc62a69432bbfaa07fa0d9_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 9,  40 => 6,  34 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/add.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block body %}*/
/* */
/*   <h2>Ajouter une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Attention : cette annonce sera ajoutée directement*/
/*     sur la page d'accueil après validation du formulaire.*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
