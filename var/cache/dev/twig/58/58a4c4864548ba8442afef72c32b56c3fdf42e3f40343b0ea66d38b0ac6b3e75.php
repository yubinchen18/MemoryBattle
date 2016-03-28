<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c2f02373a71467dc20ef72a4f2a25920b36cbaa6b128cce6d657cb394dbe5ac0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cf3cf9ea80f7067da36e4b63cd127fe0f4eb34e1b11da67bdbbdb406f64792fa = $this->env->getExtension("native_profiler");
        $__internal_cf3cf9ea80f7067da36e4b63cd127fe0f4eb34e1b11da67bdbbdb406f64792fa->enter($__internal_cf3cf9ea80f7067da36e4b63cd127fe0f4eb34e1b11da67bdbbdb406f64792fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cf3cf9ea80f7067da36e4b63cd127fe0f4eb34e1b11da67bdbbdb406f64792fa->leave($__internal_cf3cf9ea80f7067da36e4b63cd127fe0f4eb34e1b11da67bdbbdb406f64792fa_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_87fa7361eaefc859b43409b308a62f48522cce0750f59e057013b0a40270fe04 = $this->env->getExtension("native_profiler");
        $__internal_87fa7361eaefc859b43409b308a62f48522cce0750f59e057013b0a40270fe04->enter($__internal_87fa7361eaefc859b43409b308a62f48522cce0750f59e057013b0a40270fe04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_87fa7361eaefc859b43409b308a62f48522cce0750f59e057013b0a40270fe04->leave($__internal_87fa7361eaefc859b43409b308a62f48522cce0750f59e057013b0a40270fe04_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_18b02a3d0b16573efbf4e3b4f6a4bd99b0d7b199c11013b4b7eeaa712f29435c = $this->env->getExtension("native_profiler");
        $__internal_18b02a3d0b16573efbf4e3b4f6a4bd99b0d7b199c11013b4b7eeaa712f29435c->enter($__internal_18b02a3d0b16573efbf4e3b4f6a4bd99b0d7b199c11013b4b7eeaa712f29435c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_18b02a3d0b16573efbf4e3b4f6a4bd99b0d7b199c11013b4b7eeaa712f29435c->leave($__internal_18b02a3d0b16573efbf4e3b4f6a4bd99b0d7b199c11013b4b7eeaa712f29435c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9ed0199f2e862c5c37d31304e60d6e76d1ba4bed1c33651817b4a6a84b2e89f0 = $this->env->getExtension("native_profiler");
        $__internal_9ed0199f2e862c5c37d31304e60d6e76d1ba4bed1c33651817b4a6a84b2e89f0->enter($__internal_9ed0199f2e862c5c37d31304e60d6e76d1ba4bed1c33651817b4a6a84b2e89f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_9ed0199f2e862c5c37d31304e60d6e76d1ba4bed1c33651817b4a6a84b2e89f0->leave($__internal_9ed0199f2e862c5c37d31304e60d6e76d1ba4bed1c33651817b4a6a84b2e89f0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
