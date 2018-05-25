<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_f05e9d47731efb82e94df08f8af136896ddd0bc290ae402e3c0e07387d4d5ba4 extends Twig_Template
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
        $__internal_8500270cab5cb2b4e462f0f695ded604cf5c972c96d57b3f0b9d8c2d23ad88f9 = $this->env->getExtension("native_profiler");
        $__internal_8500270cab5cb2b4e462f0f695ded604cf5c972c96d57b3f0b9d8c2d23ad88f9->enter($__internal_8500270cab5cb2b4e462f0f695ded604cf5c972c96d57b3f0b9d8c2d23ad88f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_8500270cab5cb2b4e462f0f695ded604cf5c972c96d57b3f0b9d8c2d23ad88f9->leave($__internal_8500270cab5cb2b4e462f0f695ded604cf5c972c96d57b3f0b9d8c2d23ad88f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  34 => 5,  32 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
/*         <traces>*/
/* {% for trace in exception.trace %}*/
/*             <trace>*/
/* {% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}*/
/* */
/*             </trace>*/
/* {% endfor %}*/
/*         </traces>*/
/* */
