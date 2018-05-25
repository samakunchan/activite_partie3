<?php

/* OCPlatformBundle:Advert:edit.html.twig */
class __TwigTemplate_5830a33e5f521fe004904ca520b1adb2f86711e97aa1a384237482c7bf168e9f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:edit.html.twig", 3);
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
        $__internal_f9f708032551f57a6c68ba798a84403789abc42ce3ef52e815df8d516f3bfa07 = $this->env->getExtension("native_profiler");
        $__internal_f9f708032551f57a6c68ba798a84403789abc42ce3ef52e815df8d516f3bfa07->enter($__internal_f9f708032551f57a6c68ba798a84403789abc42ce3ef52e815df8d516f3bfa07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f9f708032551f57a6c68ba798a84403789abc42ce3ef52e815df8d516f3bfa07->leave($__internal_f9f708032551f57a6c68ba798a84403789abc42ce3ef52e815df8d516f3bfa07_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_6829440989550196d1aedaee302c1e79022232a6f039357a2c7b60be52af729c = $this->env->getExtension("native_profiler");
        $__internal_6829440989550196d1aedaee302c1e79022232a6f039357a2c7b60be52af729c->enter($__internal_6829440989550196d1aedaee302c1e79022232a6f039357a2c7b60be52af729c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Modifier une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_6829440989550196d1aedaee302c1e79022232a6f039357a2c7b60be52af729c->leave($__internal_6829440989550196d1aedaee302c1e79022232a6f039357a2c7b60be52af729c_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_de7202f432e5eca258e39d174f32b403db63fe009f153bc2c55a7a310ebe34b6 = $this->env->getExtension("native_profiler");
        $__internal_de7202f432e5eca258e39d174f32b403db63fe009f153bc2c55a7a310ebe34b6->enter($__internal_de7202f432e5eca258e39d174f32b403db63fe009f153bc2c55a7a310ebe34b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

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
        
        $__internal_de7202f432e5eca258e39d174f32b403db63fe009f153bc2c55a7a310ebe34b6->leave($__internal_de7202f432e5eca258e39d174f32b403db63fe009f153bc2c55a7a310ebe34b6_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:edit.html.twig";
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
