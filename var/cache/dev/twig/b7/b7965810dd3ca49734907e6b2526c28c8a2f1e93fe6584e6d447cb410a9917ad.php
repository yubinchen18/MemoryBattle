<?php

/* model/edit.html.twig */
class __TwigTemplate_76a6c8d5717d7619bb7f12e314e49685e2964ffea792aa69e1dc4e516e03d59e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "model/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0ce2305be658ba5800bba682432da513194cc73b5bd9d3cd917de0acf8e8131 = $this->env->getExtension("native_profiler");
        $__internal_c0ce2305be658ba5800bba682432da513194cc73b5bd9d3cd917de0acf8e8131->enter($__internal_c0ce2305be658ba5800bba682432da513194cc73b5bd9d3cd917de0acf8e8131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "model/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0ce2305be658ba5800bba682432da513194cc73b5bd9d3cd917de0acf8e8131->leave($__internal_c0ce2305be658ba5800bba682432da513194cc73b5bd9d3cd917de0acf8e8131_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d6d47eadd77532e82c89ee98443869276291948089158c6f95de99c4b658e26 = $this->env->getExtension("native_profiler");
        $__internal_2d6d47eadd77532e82c89ee98443869276291948089158c6f95de99c4b658e26->enter($__internal_2d6d47eadd77532e82c89ee98443869276291948089158c6f95de99c4b658e26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Model edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("model_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_2d6d47eadd77532e82c89ee98443869276291948089158c6f95de99c4b658e26->leave($__internal_2d6d47eadd77532e82c89ee98443869276291948089158c6f95de99c4b658e26_prof);

    }

    public function getTemplateName()
    {
        return "model/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Model edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('model_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
