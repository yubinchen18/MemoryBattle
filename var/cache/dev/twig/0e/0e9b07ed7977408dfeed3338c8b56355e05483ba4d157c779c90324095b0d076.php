<?php

/* model/new.html.twig */
class __TwigTemplate_1460e2f0f6a2688feb078e0b2d077861cad1c07a5c038cfdb21f338bf56c094e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "model/new.html.twig", 1);
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
        $__internal_08bac13fde09a7ffa9b8673c30ef9d675ba5469e78a6392be2a7af4ae116be67 = $this->env->getExtension("native_profiler");
        $__internal_08bac13fde09a7ffa9b8673c30ef9d675ba5469e78a6392be2a7af4ae116be67->enter($__internal_08bac13fde09a7ffa9b8673c30ef9d675ba5469e78a6392be2a7af4ae116be67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "model/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08bac13fde09a7ffa9b8673c30ef9d675ba5469e78a6392be2a7af4ae116be67->leave($__internal_08bac13fde09a7ffa9b8673c30ef9d675ba5469e78a6392be2a7af4ae116be67_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_eff73d7fa8ba3c443aaed5bb21c4abf9241d9ccf63eb8efdc1a17c5e2665875e = $this->env->getExtension("native_profiler");
        $__internal_eff73d7fa8ba3c443aaed5bb21c4abf9241d9ccf63eb8efdc1a17c5e2665875e->enter($__internal_eff73d7fa8ba3c443aaed5bb21c4abf9241d9ccf63eb8efdc1a17c5e2665875e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Model creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("model_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_eff73d7fa8ba3c443aaed5bb21c4abf9241d9ccf63eb8efdc1a17c5e2665875e->leave($__internal_eff73d7fa8ba3c443aaed5bb21c4abf9241d9ccf63eb8efdc1a17c5e2665875e_prof);

    }

    public function getTemplateName()
    {
        return "model/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Model creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('model_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
