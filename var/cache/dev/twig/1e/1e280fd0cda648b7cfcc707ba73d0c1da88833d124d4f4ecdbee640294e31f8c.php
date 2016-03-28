<?php

/* item/new.html.twig */
class __TwigTemplate_c945cefcb0b14bea78964f7692911583479479f5967bc1f0925a59c71c5289ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item/new.html.twig", 1);
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
        $__internal_6309a3c6e4ff7c39a4d80cf626a50d0ba5f0b380f0c6dc90b6a0c8b5249db911 = $this->env->getExtension("native_profiler");
        $__internal_6309a3c6e4ff7c39a4d80cf626a50d0ba5f0b380f0c6dc90b6a0c8b5249db911->enter($__internal_6309a3c6e4ff7c39a4d80cf626a50d0ba5f0b380f0c6dc90b6a0c8b5249db911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6309a3c6e4ff7c39a4d80cf626a50d0ba5f0b380f0c6dc90b6a0c8b5249db911->leave($__internal_6309a3c6e4ff7c39a4d80cf626a50d0ba5f0b380f0c6dc90b6a0c8b5249db911_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25c3b030c97cbeb15a091e8cb3c8c592608bf73fb937d05dbf63d40b6331cbc2 = $this->env->getExtension("native_profiler");
        $__internal_25c3b030c97cbeb15a091e8cb3c8c592608bf73fb937d05dbf63d40b6331cbc2->enter($__internal_25c3b030c97cbeb15a091e8cb3c8c592608bf73fb937d05dbf63d40b6331cbc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Item creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("item_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_25c3b030c97cbeb15a091e8cb3c8c592608bf73fb937d05dbf63d40b6331cbc2->leave($__internal_25c3b030c97cbeb15a091e8cb3c8c592608bf73fb937d05dbf63d40b6331cbc2_prof);

    }

    public function getTemplateName()
    {
        return "item/new.html.twig";
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
/*     <h1>Item creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('item_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
