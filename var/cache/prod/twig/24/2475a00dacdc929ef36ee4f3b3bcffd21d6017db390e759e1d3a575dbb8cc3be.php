<?php

/* OCPlatformBundle:Advert:menu.html.twig */
class __TwigTemplate_20c35932fdea4eb745fffecedce0231510b3909b4938f39f63511be374b9d8cc extends Twig_Template
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
        // line 2
        echo "
";
        // line 4
        echo "
<ul class=\"nav nav-pills nav-stacked\">
  ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listAdverts"]) ? $context["listAdverts"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["advert"]) {
            // line 7
            echo "    <li>
      <a href=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("oc_platform_view", array("id" => $this->getAttribute($context["advert"], "id", array()))), "html", null, true);
            echo "\">
        ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($context["advert"], "title", array()), "html", null, true);
            echo "
      </a>
    </li>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advert'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 13,  37 => 9,  33 => 8,  30 => 7,  26 => 6,  22 => 4,  19 => 2,);
    }
}
/* {# src/OC/PlatformBundle/Resources/views/Advert/menu.html.twig #}*/
/* */
/* {# Ce template n'hérite de personne, tout comme le template inclus avec {{ include() }}. #}*/
/* */
/* <ul class="nav nav-pills nav-stacked">*/
/*   {% for advert in listAdverts %}*/
/*     <li>*/
/*       <a href="{{ path('oc_platform_view', {'id': advert.id}) }}">*/
/*         {{ advert.title }}*/
/*       </a>*/
/*     </li>*/
/*   {% endfor %}*/
/* </ul>*/
/* */
