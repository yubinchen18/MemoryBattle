<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6ec08a92a8b9f3d40eefb822c95d05b54b6e0ce49ca8f033e9065eb8537bfc93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_f2094aa26172934914b884e21938c5cfa3458c4ccad217c47f370eba39a3e944 = $this->env->getExtension("native_profiler");
        $__internal_f2094aa26172934914b884e21938c5cfa3458c4ccad217c47f370eba39a3e944->enter($__internal_f2094aa26172934914b884e21938c5cfa3458c4ccad217c47f370eba39a3e944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2094aa26172934914b884e21938c5cfa3458c4ccad217c47f370eba39a3e944->leave($__internal_f2094aa26172934914b884e21938c5cfa3458c4ccad217c47f370eba39a3e944_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d4fc8362bcb02c9565ee150c3732fd6343607a437b01a1e499a5d3f2a273ff1c = $this->env->getExtension("native_profiler");
        $__internal_d4fc8362bcb02c9565ee150c3732fd6343607a437b01a1e499a5d3f2a273ff1c->enter($__internal_d4fc8362bcb02c9565ee150c3732fd6343607a437b01a1e499a5d3f2a273ff1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d4fc8362bcb02c9565ee150c3732fd6343607a437b01a1e499a5d3f2a273ff1c->leave($__internal_d4fc8362bcb02c9565ee150c3732fd6343607a437b01a1e499a5d3f2a273ff1c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_837a631f8e48478cc314ad9cff58a2538f851571f0a0f6180c97f45d991fca3b = $this->env->getExtension("native_profiler");
        $__internal_837a631f8e48478cc314ad9cff58a2538f851571f0a0f6180c97f45d991fca3b->enter($__internal_837a631f8e48478cc314ad9cff58a2538f851571f0a0f6180c97f45d991fca3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_837a631f8e48478cc314ad9cff58a2538f851571f0a0f6180c97f45d991fca3b->leave($__internal_837a631f8e48478cc314ad9cff58a2538f851571f0a0f6180c97f45d991fca3b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b86f608532b527e008eeed79bf9b968718b78c53fba1f76babc10491f357d69 = $this->env->getExtension("native_profiler");
        $__internal_5b86f608532b527e008eeed79bf9b968718b78c53fba1f76babc10491f357d69->enter($__internal_5b86f608532b527e008eeed79bf9b968718b78c53fba1f76babc10491f357d69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_5b86f608532b527e008eeed79bf9b968718b78c53fba1f76babc10491f357d69->leave($__internal_5b86f608532b527e008eeed79bf9b968718b78c53fba1f76babc10491f357d69_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
