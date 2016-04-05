<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_dfdce3d3b10b5f1bcbbbecc868e4b41a303dbbe9fa385c659f1b96e30f21f8af extends Twig_Template
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
        $__internal_2e42ba6203599fdb57d2bc6874e6b6a23aea39c4bb049ca161097e7e92ef6415 = $this->env->getExtension("native_profiler");
        $__internal_2e42ba6203599fdb57d2bc6874e6b6a23aea39c4bb049ca161097e7e92ef6415->enter($__internal_2e42ba6203599fdb57d2bc6874e6b6a23aea39c4bb049ca161097e7e92ef6415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e42ba6203599fdb57d2bc6874e6b6a23aea39c4bb049ca161097e7e92ef6415->leave($__internal_2e42ba6203599fdb57d2bc6874e6b6a23aea39c4bb049ca161097e7e92ef6415_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ebe42d30281b64321008f2950bf3ed4b95447bc728de4edef96e693d30b761b5 = $this->env->getExtension("native_profiler");
        $__internal_ebe42d30281b64321008f2950bf3ed4b95447bc728de4edef96e693d30b761b5->enter($__internal_ebe42d30281b64321008f2950bf3ed4b95447bc728de4edef96e693d30b761b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_ebe42d30281b64321008f2950bf3ed4b95447bc728de4edef96e693d30b761b5->leave($__internal_ebe42d30281b64321008f2950bf3ed4b95447bc728de4edef96e693d30b761b5_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1c302c609271731409d40bc4f238f01bb21d96ece71c97c576652b4eb9dad63d = $this->env->getExtension("native_profiler");
        $__internal_1c302c609271731409d40bc4f238f01bb21d96ece71c97c576652b4eb9dad63d->enter($__internal_1c302c609271731409d40bc4f238f01bb21d96ece71c97c576652b4eb9dad63d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1c302c609271731409d40bc4f238f01bb21d96ece71c97c576652b4eb9dad63d->leave($__internal_1c302c609271731409d40bc4f238f01bb21d96ece71c97c576652b4eb9dad63d_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_a00642513747fad128f0128ace5b0388d14b572e48e3c8eaf2fe48de9f979bf9 = $this->env->getExtension("native_profiler");
        $__internal_a00642513747fad128f0128ace5b0388d14b572e48e3c8eaf2fe48de9f979bf9->enter($__internal_a00642513747fad128f0128ace5b0388d14b572e48e3c8eaf2fe48de9f979bf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_a00642513747fad128f0128ace5b0388d14b572e48e3c8eaf2fe48de9f979bf9->leave($__internal_a00642513747fad128f0128ace5b0388d14b572e48e3c8eaf2fe48de9f979bf9_prof);

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
