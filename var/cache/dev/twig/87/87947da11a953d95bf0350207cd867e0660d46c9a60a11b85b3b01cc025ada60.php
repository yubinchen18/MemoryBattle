<?php

/* item/index.html.twig */
class __TwigTemplate_15f18a59d8bd5b36911615af41ad201c86218cd7484055875dc023b3146b50ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "item/index.html.twig", 1);
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
        $__internal_21f3eae8f9ffa98f6abea8c787ae97cfad33746d1a0841894aa9a4f73b265177 = $this->env->getExtension("native_profiler");
        $__internal_21f3eae8f9ffa98f6abea8c787ae97cfad33746d1a0841894aa9a4f73b265177->enter($__internal_21f3eae8f9ffa98f6abea8c787ae97cfad33746d1a0841894aa9a4f73b265177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "item/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21f3eae8f9ffa98f6abea8c787ae97cfad33746d1a0841894aa9a4f73b265177->leave($__internal_21f3eae8f9ffa98f6abea8c787ae97cfad33746d1a0841894aa9a4f73b265177_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e26e7cb04353732ab498b3c668463e6c90e5779a5df25f8023b371645cd56b2 = $this->env->getExtension("native_profiler");
        $__internal_2e26e7cb04353732ab498b3c668463e6c90e5779a5df25f8023b371645cd56b2->enter($__internal_2e26e7cb04353732ab498b3c668463e6c90e5779a5df25f8023b371645cd56b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Item list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Picture</th>
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "category", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "price", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "picture", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "description", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item_show", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("item_edit", array("id" => $this->getAttribute($context["item"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("item_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2e26e7cb04353732ab498b3c668463e6c90e5779a5df25f8023b371645cd56b2->leave($__internal_2e26e7cb04353732ab498b3c668463e6c90e5779a5df25f8023b371645cd56b2_prof);

    }

    public function getTemplateName()
    {
        return "item/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Item list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Name</th>*/
/*                 <th>Category</th>*/
/*                 <th>Price</th>*/
/*                 <th>Picture</th>*/
/*                 <th>Description</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for item in items %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('item_show', { 'id': item.id }) }}">{{ item.id }}</a></td>*/
/*                 <td>{{ item.name }}</td>*/
/*                 <td>{{ item.category }}</td>*/
/*                 <td>{{ item.price }}</td>*/
/*                 <td>{{ item.picture }}</td>*/
/*                 <td>{{ item.description }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('item_show', { 'id': item.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('item_edit', { 'id': item.id }) }}">edit</a>*/
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
/*             <a href="{{ path('item_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
