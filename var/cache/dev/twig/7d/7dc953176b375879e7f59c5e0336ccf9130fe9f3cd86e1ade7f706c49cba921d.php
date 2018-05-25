<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_046371a6ae7632eebf569c64b59be7a729b421d2278c3ea15f7e6ff6b7a33ca9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5535c562ef1870114b3fe901f4cfc569f5630868edb0ae87fe16e8922f05c88e = $this->env->getExtension("native_profiler");
        $__internal_5535c562ef1870114b3fe901f4cfc569f5630868edb0ae87fe16e8922f05c88e->enter($__internal_5535c562ef1870114b3fe901f4cfc569f5630868edb0ae87fe16e8922f05c88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5535c562ef1870114b3fe901f4cfc569f5630868edb0ae87fe16e8922f05c88e->leave($__internal_5535c562ef1870114b3fe901f4cfc569f5630868edb0ae87fe16e8922f05c88e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_12d9c9782dbdbc8dfe808510c471fee638b2be1a955158b20b6474b9b79eaa4c = $this->env->getExtension("native_profiler");
        $__internal_12d9c9782dbdbc8dfe808510c471fee638b2be1a955158b20b6474b9b79eaa4c->enter($__internal_12d9c9782dbdbc8dfe808510c471fee638b2be1a955158b20b6474b9b79eaa4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_12d9c9782dbdbc8dfe808510c471fee638b2be1a955158b20b6474b9b79eaa4c->leave($__internal_12d9c9782dbdbc8dfe808510c471fee638b2be1a955158b20b6474b9b79eaa4c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_debcd48b93bc16cd1816d41096913f2d1e356c61d1dea5cf6207a65b9f66fdae = $this->env->getExtension("native_profiler");
        $__internal_debcd48b93bc16cd1816d41096913f2d1e356c61d1dea5cf6207a65b9f66fdae->enter($__internal_debcd48b93bc16cd1816d41096913f2d1e356c61d1dea5cf6207a65b9f66fdae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_debcd48b93bc16cd1816d41096913f2d1e356c61d1dea5cf6207a65b9f66fdae->leave($__internal_debcd48b93bc16cd1816d41096913f2d1e356c61d1dea5cf6207a65b9f66fdae_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
