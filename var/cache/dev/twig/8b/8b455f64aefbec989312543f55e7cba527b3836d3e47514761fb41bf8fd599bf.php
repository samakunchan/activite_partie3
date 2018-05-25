<?php

/* OCPlatformBundle:Advert:add.html.twig */
class __TwigTemplate_cafd18615c5e43a04e22dc6413a3ceb8ef7f5a318c075dc795fdb0518ee1249e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:add.html.twig", 3);
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
        $__internal_aa5546fa8016dc41719559b763306c06d7eb9927c05a9faa7cdaf98f2d935f63 = $this->env->getExtension("native_profiler");
        $__internal_aa5546fa8016dc41719559b763306c06d7eb9927c05a9faa7cdaf98f2d935f63->enter($__internal_aa5546fa8016dc41719559b763306c06d7eb9927c05a9faa7cdaf98f2d935f63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa5546fa8016dc41719559b763306c06d7eb9927c05a9faa7cdaf98f2d935f63->leave($__internal_aa5546fa8016dc41719559b763306c06d7eb9927c05a9faa7cdaf98f2d935f63_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ebd0dd6b2fa7a9c1534582f6835508b0945f16d0721c840b055f0188ceef4517 = $this->env->getExtension("native_profiler");
        $__internal_ebd0dd6b2fa7a9c1534582f6835508b0945f16d0721c840b055f0188ceef4517->enter($__internal_ebd0dd6b2fa7a9c1534582f6835508b0945f16d0721c840b055f0188ceef4517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ebd0dd6b2fa7a9c1534582f6835508b0945f16d0721c840b055f0188ceef4517->leave($__internal_ebd0dd6b2fa7a9c1534582f6835508b0945f16d0721c840b055f0188ceef4517_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:add.html.twig";
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
