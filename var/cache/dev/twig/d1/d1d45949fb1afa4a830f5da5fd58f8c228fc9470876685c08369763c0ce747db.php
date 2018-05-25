<?php

/* @OCPlatform/Advert/edit.html.twig */
class __TwigTemplate_12f740dd7d1bc7de8f1acd79c464f19f575e559bf69aa199d6794e47f16eba0d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "@OCPlatform/Advert/edit.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c1604b35ab3c4a2bfbaf1db79d363d8f93eb48009a5f1fb6a8c1b5f1db4bcb8 = $this->env->getExtension("native_profiler");
        $__internal_6c1604b35ab3c4a2bfbaf1db79d363d8f93eb48009a5f1fb6a8c1b5f1db4bcb8->enter($__internal_6c1604b35ab3c4a2bfbaf1db79d363d8f93eb48009a5f1fb6a8c1b5f1db4bcb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@OCPlatform/Advert/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6c1604b35ab3c4a2bfbaf1db79d363d8f93eb48009a5f1fb6a8c1b5f1db4bcb8->leave($__internal_6c1604b35ab3c4a2bfbaf1db79d363d8f93eb48009a5f1fb6a8c1b5f1db4bcb8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_65cae8f35ef705d56449c1c90267ef6c1bae4f917bc576746292a0e094d72eb8 = $this->env->getExtension("native_profiler");
        $__internal_65cae8f35ef705d56449c1c90267ef6c1bae4f917bc576746292a0e094d72eb8->enter($__internal_65cae8f35ef705d56449c1c90267ef6c1bae4f917bc576746292a0e094d72eb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_65cae8f35ef705d56449c1c90267ef6c1bae4f917bc576746292a0e094d72eb8->leave($__internal_65cae8f35ef705d56449c1c90267ef6c1bae4f917bc576746292a0e094d72eb8_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_f8572b481146cb62bc4ff87bc4204641aebf04f7c14c698a804892fd6344d8ad = $this->env->getExtension("native_profiler");
        $__internal_f8572b481146cb62bc4ff87bc4204641aebf04f7c14c698a804892fd6344d8ad->enter($__internal_f8572b481146cb62bc4ff87bc4204641aebf04f7c14c698a804892fd6344d8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Modifier une annonce</h2>

  ";
        // line 13
        echo twig_include($this->env, $context, "OCPlatformBundle:Advert:form.html.twig");
        echo "

  <p>
    Vous éditez une annonce déjà existante, merci de ne pas changer
    l'esprit générale de l'annonce déjà publiée.
  </p>

  <p>
    <a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à l'annonce
    </a>
  </p>

";
        
        $__internal_f8572b481146cb62bc4ff87bc4204641aebf04f7c14c698a804892fd6344d8ad->leave($__internal_f8572b481146cb62bc4ff87bc4204641aebf04f7c14c698a804892fd6344d8ad_prof);

    }

    public function getTemplateName()
    {
        return "@OCPlatform/Advert/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 21,  62 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/edit.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Modifier une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Modifier une annonce</h2>*/
/* */
/*   {{ include("OCPlatformBundle:Advert:form.html.twig") }}*/
/* */
/*   <p>*/
/*     Vous éditez une annonce déjà existante, merci de ne pas changer*/
/*     l'esprit générale de l'annonce déjà publiée.*/
/*   </p>*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_view', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
