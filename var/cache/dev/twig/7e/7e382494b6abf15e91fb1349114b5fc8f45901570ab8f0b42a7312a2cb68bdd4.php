<?php

/* OCPlatformBundle:Advert:index.html.twig */
class __TwigTemplate_8d162280ce809513ef2f1aec36e36c1959a0e9132c38adcdc3c41c393e3e6a05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:index.html.twig", 3);
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
        $__internal_53738519b4c756351d665257ef2241a8da8cc7bb8180fe2bd98ce0c385e58883 = $this->env->getExtension("native_profiler");
        $__internal_53738519b4c756351d665257ef2241a8da8cc7bb8180fe2bd98ce0c385e58883->enter($__internal_53738519b4c756351d665257ef2241a8da8cc7bb8180fe2bd98ce0c385e58883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53738519b4c756351d665257ef2241a8da8cc7bb8180fe2bd98ce0c385e58883->leave($__internal_53738519b4c756351d665257ef2241a8da8cc7bb8180fe2bd98ce0c385e58883_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bef78558de203fbae86e155d6007f44e66ff88b4bf5e77a21297d2f6c3744e8d = $this->env->getExtension("native_profiler");
        $__internal_bef78558de203fbae86e155d6007f44e66ff88b4bf5e77a21297d2f6c3744e8d->enter($__internal_bef78558de203fbae86e155d6007f44e66ff88b4bf5e77a21297d2f6c3744e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Accueil - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_bef78558de203fbae86e155d6007f44e66ff88b4bf5e77a21297d2f6c3744e8d->leave($__internal_bef78558de203fbae86e155d6007f44e66ff88b4bf5e77a21297d2f6c3744e8d_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_9871507a0ccabc085cb6b86f376f87cf3919f8cee923fda0985e359ee6d76c42 = $this->env->getExtension("native_profiler");
        $__internal_9871507a0ccabc085cb6b86f376f87cf3919f8cee923fda0985e359ee6d76c42->enter($__internal_9871507a0ccabc085cb6b86f376f87cf3919f8cee923fda0985e359ee6d76c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <h2>Liste des annonces</h2>

  <ul>
    ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : $this->getContext($context, "listAdverts")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 15
            echo "      <li>
        <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
          ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
        </a>
        par ";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "author", array()), "html", null, true);
            echo ",
        le ";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["advert"], "date", array()), "d/m/Y"), "html", null, true);
            echo "
      </li>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 23
            echo "      <li>Pas (encore !) d'annonces</li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "  </ul>

  <ul class=\"pagination\">
    ";
        // line 29
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["nbPages"]) ? $context["nbPages"] : $this->getContext($context, "nbPages"))));
        foreach ($context['_seq'] as $context["_key"] => $context["p"]) {
            // line 30
            echo "      <li";
            if (($context["p"] == (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")))) {
                echo " class=\"active\"";
            }
            echo ">
        <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_home", array("page" => $context["p"])), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["p"], "html", null, true);
            echo "</a>
      </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['p'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "  </ul>

";
        
        $__internal_9871507a0ccabc085cb6b86f376f87cf3919f8cee923fda0985e359ee6d76c42->leave($__internal_9871507a0ccabc085cb6b86f376f87cf3919f8cee923fda0985e359ee6d76c42_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  116 => 31,  109 => 30,  104 => 29,  99 => 25,  92 => 23,  84 => 20,  80 => 19,  75 => 17,  71 => 16,  68 => 15,  63 => 14,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/index.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Accueil - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <h2>Liste des annonces</h2>*/
/* */
/*   <ul>*/
/*     {% for advert in listAdverts %}*/
/*       <li>*/
/*         <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*           {{ advert.title }}*/
/*         </a>*/
/*         par {{ advert.author }},*/
/*         le {{ advert.date|date('d/m/Y') }}*/
/*       </li>*/
/*     {% else %}*/
/*       <li>Pas (encore !) d'annonces</li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/*   <ul class="pagination">*/
/*     {# On utilise la fonction range(a, b) qui crée un tableau de valeurs entre a et b #}*/
/*     {% for p in range(1, nbPages) %}*/
/*       <li{% if p == page %} class="active"{% endif %}>*/
/*         <a href="{{ path('oc_platform_home', {'page': p}) }}">{{ p }}</a>*/
/*       </li>*/
/*     {% endfor %}*/
/*   </ul>*/
/* */
/* {% endblock %}*/
/* */
