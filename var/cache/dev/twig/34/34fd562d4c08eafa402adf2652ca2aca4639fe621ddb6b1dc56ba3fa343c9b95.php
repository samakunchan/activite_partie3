<?php

/* OCCoreBundle::layout.html.twig */
class __TwigTemplate_304e4d998814a65f14027f9e0baee939e6155993b276be881263405804dba3a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55c13fb43ee5c90261e271ac8caae0732de4d1ce2063f84b8ea2c2de22c71343 = $this->env->getExtension("native_profiler");
        $__internal_55c13fb43ee5c90261e271ac8caae0732de4d1ce2063f84b8ea2c2de22c71343->enter($__internal_55c13fb43ee5c90261e271ac8caae0732de4d1ce2063f84b8ea2c2de22c71343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCCoreBundle::layout.html.twig"));

        // line 2
        echo "
<!DOCTYPE html>
<html>
  <head>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>";
        // line 9
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 11
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "  </head>

  <body>
  <div class=\"container\">
    <div id=\"header\" class=\"jumbotron\">
      <h1>Ma plateforme d'annonces</h1>
      <p>
        Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.
      </p>
      <p>
        <a class=\"btn btn-primary btn-lg\" href=\"https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2\">
          Participer au MOOC »
        </a>
      </p>
    </div>

    <div class=\"row\">
      <div id=\"menu\" class=\"col-md-3\">
        <h3>Les annonces</h3>
        <ul class=\"nav nav-pills nav-stacked\">
          <li><a href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("oc_platform_home");
        echo "\">Accueil</a></li>
          <li><a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("oc_platform_add");
        echo "\">Ajouter une annonce</a></li>
        </ul>

        <h4>Dernières annonces</h4>
        ";
        // line 40
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("OCPlatformBundle:Advert:menu", array("limit" => 3)));
        echo "
      </div>
      <div id=\"content\" class=\"col-md-9\">
        ";
        // line 43
        $this->displayBlock('body', $context, $blocks);
        // line 45
        echo "      </div>
    </div>

    <hr>

    <footer>
      <p>The sky's the limit © ";
        // line 51
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " and beyond.</p>
    </footer>
  </div>

  ";
        // line 55
        $this->displayBlock('javascripts', $context, $blocks);
        // line 60
        echo "
  </body>
</html>
";
        
        $__internal_55c13fb43ee5c90261e271ac8caae0732de4d1ce2063f84b8ea2c2de22c71343->leave($__internal_55c13fb43ee5c90261e271ac8caae0732de4d1ce2063f84b8ea2c2de22c71343_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_04e7e9b350814840ab21b3100602bfb436adeb512ec3bf85b89a3879b5629543 = $this->env->getExtension("native_profiler");
        $__internal_04e7e9b350814840ab21b3100602bfb436adeb512ec3bf85b89a3879b5629543->enter($__internal_04e7e9b350814840ab21b3100602bfb436adeb512ec3bf85b89a3879b5629543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "OC Plateforme";
        
        $__internal_04e7e9b350814840ab21b3100602bfb436adeb512ec3bf85b89a3879b5629543->leave($__internal_04e7e9b350814840ab21b3100602bfb436adeb512ec3bf85b89a3879b5629543_prof);

    }

    // line 11
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5010215857254c06d3a4800c1bb030844e46f478e99c7e5c0c034cfe9c33674e = $this->env->getExtension("native_profiler");
        $__internal_5010215857254c06d3a4800c1bb030844e46f478e99c7e5c0c034cfe9c33674e->enter($__internal_5010215857254c06d3a4800c1bb030844e46f478e99c7e5c0c034cfe9c33674e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 12
        echo "      ";
        // line 13
        echo "      <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
    ";
        
        $__internal_5010215857254c06d3a4800c1bb030844e46f478e99c7e5c0c034cfe9c33674e->leave($__internal_5010215857254c06d3a4800c1bb030844e46f478e99c7e5c0c034cfe9c33674e_prof);

    }

    // line 43
    public function block_body($context, array $blocks = array())
    {
        $__internal_75d4aa470ae69077ccadf686e8fbe71d6d68089197cfd868e17a274dc2473104 = $this->env->getExtension("native_profiler");
        $__internal_75d4aa470ae69077ccadf686e8fbe71d6d68089197cfd868e17a274dc2473104->enter($__internal_75d4aa470ae69077ccadf686e8fbe71d6d68089197cfd868e17a274dc2473104_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 44
        echo "        ";
        
        $__internal_75d4aa470ae69077ccadf686e8fbe71d6d68089197cfd868e17a274dc2473104->leave($__internal_75d4aa470ae69077ccadf686e8fbe71d6d68089197cfd868e17a274dc2473104_prof);

    }

    // line 55
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_7f35f880e3668c324d966d5082ca1b9c9608a7474ddafbd72d90307f93007f69 = $this->env->getExtension("native_profiler");
        $__internal_7f35f880e3668c324d966d5082ca1b9c9608a7474ddafbd72d90307f93007f69->enter($__internal_7f35f880e3668c324d966d5082ca1b9c9608a7474ddafbd72d90307f93007f69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 56
        echo "    ";
        // line 57
        echo "    <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
    <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
  ";
        
        $__internal_7f35f880e3668c324d966d5082ca1b9c9608a7474ddafbd72d90307f93007f69->leave($__internal_7f35f880e3668c324d966d5082ca1b9c9608a7474ddafbd72d90307f93007f69_prof);

    }

    public function getTemplateName()
    {
        return "OCCoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 57,  157 => 56,  151 => 55,  144 => 44,  138 => 43,  130 => 13,  128 => 12,  122 => 11,  110 => 9,  100 => 60,  98 => 55,  91 => 51,  83 => 45,  81 => 43,  75 => 40,  68 => 36,  64 => 35,  42 => 15,  40 => 11,  35 => 9,  26 => 2,);
    }
}
/* {# src/OC/CoreBundle/Resources/views/layout.html.twig #}*/
/* */
/* <!DOCTYPE html>*/
/* <html>*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>{% block title %}OC Plateforme{% endblock %}</title>*/
/* */
/*     {% block stylesheets %}*/
/*       {# On charge le CSS de bootstrap depuis le site directement #}*/
/*       <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/*   <div class="container">*/
/*     <div id="header" class="jumbotron">*/
/*       <h1>Ma plateforme d'annonces</h1>*/
/*       <p>*/
/*         Ce projet est propulsé par Symfony, et construit grâce au MOOC OpenClassrooms et SensioLabs.*/
/*       </p>*/
/*       <p>*/
/*         <a class="btn btn-primary btn-lg" href="https://openclassrooms.com/courses/developpez-votre-site-web-avec-le-framework-symfony2">*/
/*           Participer au MOOC »*/
/*         </a>*/
/*       </p>*/
/*     </div>*/
/* */
/*     <div class="row">*/
/*       <div id="menu" class="col-md-3">*/
/*         <h3>Les annonces</h3>*/
/*         <ul class="nav nav-pills nav-stacked">*/
/*           <li><a href="{{ path('oc_platform_home') }}">Accueil</a></li>*/
/*           <li><a href="{{ path('oc_platform_add') }}">Ajouter une annonce</a></li>*/
/*         </ul>*/
/* */
/*         <h4>Dernières annonces</h4>*/
/*         {{ render(controller("OCPlatformBundle:Advert:menu", {'limit': 3})) }}*/
/*       </div>*/
/*       <div id="content" class="col-md-9">*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*       </div>*/
/*     </div>*/
/* */
/*     <hr>*/
/* */
/*     <footer>*/
/*       <p>The sky's the limit © {{ 'now'|date('Y') }} and beyond.</p>*/
/*     </footer>*/
/*   </div>*/
/* */
/*   {% block javascripts %}*/
/*     {# Ajoutez ces lignes JavaScript si vous comptez vous servir des fonctionnalités du bootstrap Twitter #}*/
/*     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>*/
/*     <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*   {% endblock %}*/
/* */
/*   </body>*/
/* </html>*/
/* */
