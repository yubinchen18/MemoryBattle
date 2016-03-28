<?php

/* model/show.html.twig */
class __TwigTemplate_272ba910716f8432bce003f1c1607d3ccc3d1b0887620319bb7313351420ec54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "model/show.html.twig", 1);
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
        $__internal_ea546d10f0beca7fb57718d7b1d0329507bed825efee933bd21e4da6d8a73d9f = $this->env->getExtension("native_profiler");
        $__internal_ea546d10f0beca7fb57718d7b1d0329507bed825efee933bd21e4da6d8a73d9f->enter($__internal_ea546d10f0beca7fb57718d7b1d0329507bed825efee933bd21e4da6d8a73d9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "model/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea546d10f0beca7fb57718d7b1d0329507bed825efee933bd21e4da6d8a73d9f->leave($__internal_ea546d10f0beca7fb57718d7b1d0329507bed825efee933bd21e4da6d8a73d9f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_267cf35e8626bd6905dad4226086cadb92d95cb994f17e5be703971999bfa97b = $this->env->getExtension("native_profiler");
        $__internal_267cf35e8626bd6905dad4226086cadb92d95cb994f17e5be703971999bfa97b->enter($__internal_267cf35e8626bd6905dad4226086cadb92d95cb994f17e5be703971999bfa97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Model</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Totalitems</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "totalItems", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Picture</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "picture", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("model_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model_edit", array("id" => $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_267cf35e8626bd6905dad4226086cadb92d95cb994f17e5be703971999bfa97b->leave($__internal_267cf35e8626bd6905dad4226086cadb92d95cb994f17e5be703971999bfa97b_prof);

    }

    public function getTemplateName()
    {
        return "model/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 37,  91 => 35,  85 => 32,  79 => 29,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Model</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ model.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Name</th>*/
/*                 <td>{{ model.name }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Totalitems</th>*/
/*                 <td>{{ model.totalItems }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Picture</th>*/
/*                 <td>{{ model.picture }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('model_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('model_edit', { 'id': model.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
