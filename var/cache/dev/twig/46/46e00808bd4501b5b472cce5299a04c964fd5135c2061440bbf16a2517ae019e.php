<?php

/* base.html.twig */
class __TwigTemplate_2ce7872896755aa297a43cf00ab3b08024524e3d7277756493529f69e45a8dff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d23b943592560512f02ea7bc2a0a8274050588a9e45601ece325225f7a022f7 = $this->env->getExtension("native_profiler");
        $__internal_2d23b943592560512f02ea7bc2a0a8274050588a9e45601ece325225f7a022f7->enter($__internal_2d23b943592560512f02ea7bc2a0a8274050588a9e45601ece325225f7a022f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "
    </body>
</html>
";
        
        $__internal_2d23b943592560512f02ea7bc2a0a8274050588a9e45601ece325225f7a022f7->leave($__internal_2d23b943592560512f02ea7bc2a0a8274050588a9e45601ece325225f7a022f7_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0113a649b770d3cf30e50adb8eedde06e30244b660b902825700024e0341677f = $this->env->getExtension("native_profiler");
        $__internal_0113a649b770d3cf30e50adb8eedde06e30244b660b902825700024e0341677f->enter($__internal_0113a649b770d3cf30e50adb8eedde06e30244b660b902825700024e0341677f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0113a649b770d3cf30e50adb8eedde06e30244b660b902825700024e0341677f->leave($__internal_0113a649b770d3cf30e50adb8eedde06e30244b660b902825700024e0341677f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_21df337d16144f95ebbda8bc37bb54bd710e76c36dd8c5413e87e1c93a624f9f = $this->env->getExtension("native_profiler");
        $__internal_21df337d16144f95ebbda8bc37bb54bd710e76c36dd8c5413e87e1c93a624f9f->enter($__internal_21df337d16144f95ebbda8bc37bb54bd710e76c36dd8c5413e87e1c93a624f9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_21df337d16144f95ebbda8bc37bb54bd710e76c36dd8c5413e87e1c93a624f9f->leave($__internal_21df337d16144f95ebbda8bc37bb54bd710e76c36dd8c5413e87e1c93a624f9f_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_1731cacd17d9c420c0713ac71c3c94ae3010bed6eed55e259b4e8daaba926ecf = $this->env->getExtension("native_profiler");
        $__internal_1731cacd17d9c420c0713ac71c3c94ae3010bed6eed55e259b4e8daaba926ecf->enter($__internal_1731cacd17d9c420c0713ac71c3c94ae3010bed6eed55e259b4e8daaba926ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1731cacd17d9c420c0713ac71c3c94ae3010bed6eed55e259b4e8daaba926ecf->leave($__internal_1731cacd17d9c420c0713ac71c3c94ae3010bed6eed55e259b4e8daaba926ecf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6a695127bb2f9e0df3f156ba37bf382a666236a4948d9b7c0943391275de73da = $this->env->getExtension("native_profiler");
        $__internal_6a695127bb2f9e0df3f156ba37bf382a666236a4948d9b7c0943391275de73da->enter($__internal_6a695127bb2f9e0df3f156ba37bf382a666236a4948d9b7c0943391275de73da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_6a695127bb2f9e0df3f156ba37bf382a666236a4948d9b7c0943391275de73da->leave($__internal_6a695127bb2f9e0df3f156ba37bf382a666236a4948d9b7c0943391275de73da_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 11,  83 => 10,  72 => 6,  60 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/* */
/*     </body>*/
/* </html>*/
/* */
