<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_19913c77bb20806fe3ad7eff463eba8e2552a58e149d6034f17083f655f995bf extends Twig_Template
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
        $__internal_ea4282ffd287751d88bfda54a64c327125615427d3bb491e6c4ba6a1f6bea076 = $this->env->getExtension("native_profiler");
        $__internal_ea4282ffd287751d88bfda54a64c327125615427d3bb491e6c4ba6a1f6bea076->enter($__internal_ea4282ffd287751d88bfda54a64c327125615427d3bb491e6c4ba6a1f6bea076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea4282ffd287751d88bfda54a64c327125615427d3bb491e6c4ba6a1f6bea076->leave($__internal_ea4282ffd287751d88bfda54a64c327125615427d3bb491e6c4ba6a1f6bea076_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d49684cdf2a82fc6da994f4d4361c2f965f6ee22b25828547c7f443aa8fd1a12 = $this->env->getExtension("native_profiler");
        $__internal_d49684cdf2a82fc6da994f4d4361c2f965f6ee22b25828547c7f443aa8fd1a12->enter($__internal_d49684cdf2a82fc6da994f4d4361c2f965f6ee22b25828547c7f443aa8fd1a12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d49684cdf2a82fc6da994f4d4361c2f965f6ee22b25828547c7f443aa8fd1a12->leave($__internal_d49684cdf2a82fc6da994f4d4361c2f965f6ee22b25828547c7f443aa8fd1a12_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7bf892f5dc6b526c025bfb0ab615b81f06ac7593511896d6735fce9d60abde68 = $this->env->getExtension("native_profiler");
        $__internal_7bf892f5dc6b526c025bfb0ab615b81f06ac7593511896d6735fce9d60abde68->enter($__internal_7bf892f5dc6b526c025bfb0ab615b81f06ac7593511896d6735fce9d60abde68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7bf892f5dc6b526c025bfb0ab615b81f06ac7593511896d6735fce9d60abde68->leave($__internal_7bf892f5dc6b526c025bfb0ab615b81f06ac7593511896d6735fce9d60abde68_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_96bb47474701216a7beb8cfd0f337c540e8f2d02ffe317687acdd2170e017006 = $this->env->getExtension("native_profiler");
        $__internal_96bb47474701216a7beb8cfd0f337c540e8f2d02ffe317687acdd2170e017006->enter($__internal_96bb47474701216a7beb8cfd0f337c540e8f2d02ffe317687acdd2170e017006_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_96bb47474701216a7beb8cfd0f337c540e8f2d02ffe317687acdd2170e017006->leave($__internal_96bb47474701216a7beb8cfd0f337c540e8f2d02ffe317687acdd2170e017006_prof);

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
