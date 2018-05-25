<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_2c0d4d3303c39317e674afc9c6578d053c314f587fe44bf1a39b18c69b875e6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
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
        $__internal_9431dbe4ed5f7f33b1e803a174d52143160cb58ceef15f989dba969d2079ece9 = $this->env->getExtension("native_profiler");
        $__internal_9431dbe4ed5f7f33b1e803a174d52143160cb58ceef15f989dba969d2079ece9->enter($__internal_9431dbe4ed5f7f33b1e803a174d52143160cb58ceef15f989dba969d2079ece9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9431dbe4ed5f7f33b1e803a174d52143160cb58ceef15f989dba969d2079ece9->leave($__internal_9431dbe4ed5f7f33b1e803a174d52143160cb58ceef15f989dba969d2079ece9_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ebfa88cc01241cf6bf47376d7cc68b8cb4b035814f35b49fb6bea5921a7e83d = $this->env->getExtension("native_profiler");
        $__internal_2ebfa88cc01241cf6bf47376d7cc68b8cb4b035814f35b49fb6bea5921a7e83d->enter($__internal_2ebfa88cc01241cf6bf47376d7cc68b8cb4b035814f35b49fb6bea5921a7e83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_2ebfa88cc01241cf6bf47376d7cc68b8cb4b035814f35b49fb6bea5921a7e83d->leave($__internal_2ebfa88cc01241cf6bf47376d7cc68b8cb4b035814f35b49fb6bea5921a7e83d_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_deffaa428c1943aa406a6d3866f0ca105c9b66f08017bb106f842eed7cfbb199 = $this->env->getExtension("native_profiler");
        $__internal_deffaa428c1943aa406a6d3866f0ca105c9b66f08017bb106f842eed7cfbb199->enter($__internal_deffaa428c1943aa406a6d3866f0ca105c9b66f08017bb106f842eed7cfbb199_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 13
        echo "    ";
        if ( !(null === $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()))) {
            // line 14
            echo "      <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "url", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\" height=\"60\">
    ";
        }
        // line 16
        echo "  </div>

  <h2>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 25
        if ( !$this->getAttribute($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 26
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 29
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 30
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 31
            echo "    </p>
  ";
        }
        // line 33
        echo "
  ";
        // line 34
        if ((twig_length_filter($this->env, (isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 35
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listAdvertSkills"]) ? $context["listAdvertSkills"] : $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 39
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "      </ul>
    </div>
  ";
        }
        // line 44
        echo "    ";
        if ((twig_length_filter($this->env, (isset($context["listApplications"]) ? $context["listApplications"] : $this->getContext($context, "listApplications"))) > 0)) {
            // line 45
            echo "      <div>
        Ces personnes ont postulés à l'annonce :
        <ul>
            ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["listApplications"]) ? $context["listApplications"] : $this->getContext($context, "listApplications")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertApp"]) {
                // line 49
                echo "              <li>
                <h4>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertApp"], "author", array()), "html", null, true);
                echo "</h4>
                <p>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertApp"], "content", array()), "html", null, true);
                echo "</p>
              </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertApp'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </ul>
      </div>
    ";
        } else {
            // line 57
            echo "        <h4>(Pas de postulant, donc le but de l'exercice c'est d'éffacer cette annonce avec le systeme de purge)</h4>
        <h4>(Allez je te met le lien : <a href=\"";
            // line 58
            echo $this->env->getExtension('routing')->getPath("oc_platform_purge", array("days" => 1));
            echo "\">ICI</a>)</h4>
    ";
        }
        // line 60
        echo "
  <p>
    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
    <a href=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_edit", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-edit\"></i>
      Modifier l'annonce
    </a>
    <a href=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_delete", array("id" => $this->getAttribute((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-danger\">
      <i class=\"glyphicon glyphicon-trash\"></i>
      Supprimer l'annonce
    </a>
  </p>

";
        
        $__internal_deffaa428c1943aa406a6d3866f0ca105c9b66f08017bb106f842eed7cfbb199->leave($__internal_deffaa428c1943aa406a6d3866f0ca105c9b66f08017bb106f842eed7cfbb199_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 70,  223 => 66,  216 => 62,  212 => 60,  207 => 58,  204 => 57,  199 => 54,  190 => 51,  186 => 50,  183 => 49,  179 => 48,  174 => 45,  171 => 44,  166 => 41,  155 => 39,  151 => 38,  146 => 35,  144 => 34,  141 => 33,  137 => 31,  123 => 30,  117 => 29,  100 => 28,  96 => 26,  94 => 25,  88 => 22,  80 => 19,  76 => 18,  72 => 16,  64 => 14,  61 => 13,  57 => 10,  51 => 9,  41 => 6,  35 => 5,  11 => 3,);
    }
}
/* {# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}*/
/* */
/* {% extends "OCPlatformBundle::layout.html.twig" %}*/
/* */
/* {% block title %}*/
/*   Lecture d'une annonce - {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block ocplatform_body %}*/
/* */
/*   <div style="float: left; margin-right: 1em;">*/
/*     {# On vérifie qu'une image soit bien associée à l'article #}*/
/*     {% if advert.image is not null %}*/
/*       <img src="{{ advert.image.url }}" alt="{{ advert.image.alt }}" height="60">*/
/*     {% endif %}*/
/*   </div>*/
/* */
/*   <h2>{{ advert.title }}</h2>*/
/*   <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>*/
/* */
/*   <div class="well">*/
/*     {{ advert.content }}*/
/*   </div>*/
/* */
/*   {% if not advert.categories.empty %}*/
/*     <p>*/
/*       Cette annonce est parue dans les catégories suivantes :*/
/*       {% for category in advert.categories %}*/
/*         {{ category.name }}{% if not loop.last %}, {% endif %}*/
/*       {% endfor %}*/
/*     </p>*/
/*   {% endif %}*/
/* */
/*   {% if listAdvertSkills|length > 0 %}*/
/*     <div>*/
/*       Cette annonce requiert les compétences suivantes :*/
/*       <ul>*/
/*         {% for advertSkill in listAdvertSkills %}*/
/*           <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>*/
/*         {% endfor %}*/
/*       </ul>*/
/*     </div>*/
/*   {% endif %}*/
/*     {% if listApplications|length > 0 %}*/
/*       <div>*/
/*         Ces personnes ont postulés à l'annonce :*/
/*         <ul>*/
/*             {% for advertApp in listApplications %}*/
/*               <li>*/
/*                 <h4>{{ advertApp.author }}</h4>*/
/*                 <p>{{ advertApp.content }}</p>*/
/*               </li>*/
/*             {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     {% else %}*/
/*         <h4>(Pas de postulant, donc le but de l'exercice c'est d'éffacer cette annonce avec le systeme de purge)</h4>*/
/*         <h4>(Allez je te met le lien : <a href="{{ path('oc_platform_purge', { 'days': 1 }) }}">ICI</a>)</h4>*/
/*     {% endif %}*/
/* */
/*   <p>*/
/*     <a href="{{ path('oc_platform_home') }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-chevron-left"></i>*/
/*       Retour à la liste*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_edit', {'id': advert.id}) }}" class="btn btn-default">*/
/*       <i class="glyphicon glyphicon-edit"></i>*/
/*       Modifier l'annonce*/
/*     </a>*/
/*     <a href="{{ path('oc_platform_delete', {'id': advert.id}) }}" class="btn btn-danger">*/
/*       <i class="glyphicon glyphicon-trash"></i>*/
/*       Supprimer l'annonce*/
/*     </a>*/
/*   </p>*/
/* */
/* {% endblock %}*/
/* */
