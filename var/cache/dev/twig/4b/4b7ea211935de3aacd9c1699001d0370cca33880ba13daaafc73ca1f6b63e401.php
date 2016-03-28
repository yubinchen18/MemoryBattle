<?php

/* home.html.twig */
class __TwigTemplate_42f7253b110cbd00b25d87c3733be5e067f37a5b4dd4e04739367b55143c5536 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "home.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_62c6ac10aefa9cbd1c002343a644dd9a29e16ee44280c13d49be4420d7100a82 = $this->env->getExtension("native_profiler");
        $__internal_62c6ac10aefa9cbd1c002343a644dd9a29e16ee44280c13d49be4420d7100a82->enter($__internal_62c6ac10aefa9cbd1c002343a644dd9a29e16ee44280c13d49be4420d7100a82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "home.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62c6ac10aefa9cbd1c002343a644dd9a29e16ee44280c13d49be4420d7100a82->leave($__internal_62c6ac10aefa9cbd1c002343a644dd9a29e16ee44280c13d49be4420d7100a82_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_77948c154f36e75be59ea3151c379f1c7147686a402e9d4bd8e6ffb6d1cba01d = $this->env->getExtension("native_profiler");
        $__internal_77948c154f36e75be59ea3151c379f1c7147686a402e9d4bd8e6ffb6d1cba01d->enter($__internal_77948c154f36e75be59ea3151c379f1c7147686a402e9d4bd8e6ffb6d1cba01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    
    <img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/models/model-01.jpg"), "html", null, true);
        echo "\" alt='Model 01' style='height:800px; width:auto'/>
    <h2>Base Dir is: ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["base_dir"]) ? $context["base_dir"] : $this->getContext($context, "base_dir")), "html", null, true);
        echo "</h2>
    <h1>Product array</h1>
    <ul>
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : $this->getContext($context, "products")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "            <li> ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo " </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "   
    </ul>
    
    
";
        
        $__internal_77948c154f36e75be59ea3151c379f1c7147686a402e9d4bd8e6ffb6d1cba01d->leave($__internal_77948c154f36e75be59ea3151c379f1c7147686a402e9d4bd8e6ffb6d1cba01d_prof);

    }

    // line 18
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_2e28b0baa06026fa672e8a8503f95bd53246042ea5ec8f10707d400388321125 = $this->env->getExtension("native_profiler");
        $__internal_2e28b0baa06026fa672e8a8503f95bd53246042ea5ec8f10707d400388321125->enter($__internal_2e28b0baa06026fa672e8a8503f95bd53246042ea5ec8f10707d400388321125_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 19
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_2e28b0baa06026fa672e8a8503f95bd53246042ea5ec8f10707d400388321125->leave($__internal_2e28b0baa06026fa672e8a8503f95bd53246042ea5ec8f10707d400388321125_prof);

    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 19,  78 => 18,  67 => 12,  58 => 11,  54 => 10,  48 => 7,  44 => 6,  41 => 5,  35 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <img src="{{asset('images/models/model-01.jpg') }}" alt='Model 01' style='height:800px; width:auto'/>*/
/*     <h2>Base Dir is: {{base_dir}}</h2>*/
/*     <h1>Product array</h1>*/
/*     <ul>*/
/*         {% for item in products %}*/
/*             <li> {{item.name}} </li>*/
/*         {% endfor %}   */
/*     </ul>*/
/*     */
/*     */
/* {% endblock %}*/
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body { background: #F5F5F5; font: 18px/1.5 sans-serif; }*/
/*     h1, h2 { line-height: 1.2; margin: 0 0 .5em; }*/
/*     h1 { font-size: 36px; }*/
/*     h2 { font-size: 21px; margin-bottom: 1em; }*/
/*     p { margin: 0 0 1em 0; }*/
/*     a { color: #0000F0; }*/
/*     a:hover { text-decoration: none; }*/
/*     code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }*/
/*     #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }*/
/*     #container { padding: 2em; }*/
/*     #welcome, #status { margin-bottom: 2em; }*/
/*     #welcome h1 span { display: block; font-size: 75%; }*/
/*     #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }*/
/*     #icon-book { display: none; }*/
/* */
/*     @media (min-width: 768px) {*/
/*         #wrapper { width: 80%; margin: 2em auto; }*/
/*         #icon-book { display: inline-block; }*/
/*         #status a, #next a { display: block; }*/
/* */
/*         @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }*/
/*         .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}*/
/*     }*/
/* </style>*/
/* {% endblock %}*/
