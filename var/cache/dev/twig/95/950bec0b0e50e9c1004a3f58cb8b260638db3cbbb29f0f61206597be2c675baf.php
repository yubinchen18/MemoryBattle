<?php

/* model/index.html.twig */
class __TwigTemplate_3a30ba02b3f94f707f55d09c4caa9f01316d3b2a50226e55107c42abcbda9a59 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "model/index.html.twig", 1);
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
        $__internal_be3b9f0c0e1205d5f74c3e0e219a9b2adf0ef33a28e0a2fbe046975d082be562 = $this->env->getExtension("native_profiler");
        $__internal_be3b9f0c0e1205d5f74c3e0e219a9b2adf0ef33a28e0a2fbe046975d082be562->enter($__internal_be3b9f0c0e1205d5f74c3e0e219a9b2adf0ef33a28e0a2fbe046975d082be562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "model/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be3b9f0c0e1205d5f74c3e0e219a9b2adf0ef33a28e0a2fbe046975d082be562->leave($__internal_be3b9f0c0e1205d5f74c3e0e219a9b2adf0ef33a28e0a2fbe046975d082be562_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d1d374c4dc18108c0bc3623daaab319d721e498143ce6fa455e5631a309b4cad = $this->env->getExtension("native_profiler");
        $__internal_d1d374c4dc18108c0bc3623daaab319d721e498143ce6fa455e5631a309b4cad->enter($__internal_d1d374c4dc18108c0bc3623daaab319d721e498143ce6fa455e5631a309b4cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Model list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Totalitems</th>
                <th>Picture</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["models"]) ? $context["models"] : $this->getContext($context, "models")));
        foreach ($context['_seq'] as $context["_key"] => $context["model"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model_show", array("id" => $this->getAttribute($context["model"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "totalItems", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["model"], "picture", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model_show", array("id" => $this->getAttribute($context["model"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("model_edit", array("id" => $this->getAttribute($context["model"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['model'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("model_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d1d374c4dc18108c0bc3623daaab319d721e498143ce6fa455e5631a309b4cad->leave($__internal_d1d374c4dc18108c0bc3623daaab319d721e498143ce6fa455e5631a309b4cad_prof);

    }

    public function getTemplateName()
    {
        return "model/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 40,  101 => 35,  89 => 29,  83 => 26,  76 => 22,  72 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Model list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Totalitems</th>*/
/*                 <th>Picture</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for model in models %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('model_show', { 'id': model.id }) }}">{{ model.id }}</a></td>*/
/*                 <td>{{ model.name }}</td>*/
/*                 <td>{{ model.totalItems }}</td>*/
/*                 <td>{{ model.picture }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('model_show', { 'id': model.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('model_edit', { 'id': model.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('model_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
