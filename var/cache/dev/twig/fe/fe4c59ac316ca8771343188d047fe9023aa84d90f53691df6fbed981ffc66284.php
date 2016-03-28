<?php

/* play/level.html.twig */
class __TwigTemplate_757912c2899d8fd165899a0b11639acd8338159a1ef4c2c4ba9b67e78a38819c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "play/level.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4dec3afbaf1a796bdf7eeb0c44b4c4a605afa0dc94010cb5caa5dcc862535273 = $this->env->getExtension("native_profiler");
        $__internal_4dec3afbaf1a796bdf7eeb0c44b4c4a605afa0dc94010cb5caa5dcc862535273->enter($__internal_4dec3afbaf1a796bdf7eeb0c44b4c4a605afa0dc94010cb5caa5dcc862535273_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "play/level.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dec3afbaf1a796bdf7eeb0c44b4c4a605afa0dc94010cb5caa5dcc862535273->leave($__internal_4dec3afbaf1a796bdf7eeb0c44b4c4a605afa0dc94010cb5caa5dcc862535273_prof);

    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9b71ece10628fabdb6ded11abbb14e1fea5919eee838428e1349444df12be46 = $this->env->getExtension("native_profiler");
        $__internal_c9b71ece10628fabdb6ded11abbb14e1fea5919eee838428e1349444df12be46->enter($__internal_c9b71ece10628fabdb6ded11abbb14e1fea5919eee838428e1349444df12be46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 5
        echo "    <div id=\"container\">
        <div id=\"screen\">
            <img id=\"model\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "picture", array())), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "name", array()), "html", null, true);
        echo "\"/>
            <div id=\"modelItems\">
                <ul id=\"itemContainer\">
                    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["items"]) ? $context["items"] : $this->getContext($context, "items")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 11
            echo "                        <li>
                            <div class=\"thumbnailContainer\" id=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\">
                                <img class=\"thumbnail\" src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($context["item"], "picture", array())), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "name", array()), "html", null, true);
            echo "\"/>
                            </div>                       
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "   
                </ul>
            </div>
            <div id=\"timerContainer\">
                <h1 id=\"timer\">5</h1>
            </div>
        </div>
        <div id=\"controlePanel\">
            <button id='button1-hide'>Hide</button>
            <button id=\"hide\">Hide</button>
            <button id=\"show\">Show</button>
            
            <h2>Total Items: ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["model"]) ? $context["model"] : $this->getContext($context, "model")), "totalItems", array()), "html", null, true);
        echo "</h2>
            <h2>Good Picks: <span id=\"goodPicks\"></span></h2>
            <h2>Bad Picks: <span id=\"badPicks\"></span></h2>
        </div>
    </div>
    
    
";
        
        $__internal_c9b71ece10628fabdb6ded11abbb14e1fea5919eee838428e1349444df12be46->leave($__internal_c9b71ece10628fabdb6ded11abbb14e1fea5919eee838428e1349444df12be46_prof);

    }

    // line 37
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_118d839bda0c46b58910575875351a62a64398cb255d6d3a0995af0569e77b92 = $this->env->getExtension("native_profiler");
        $__internal_118d839bda0c46b58910575875351a62a64398cb255d6d3a0995af0569e77b92->enter($__internal_118d839bda0c46b58910575875351a62a64398cb255d6d3a0995af0569e77b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 38
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-1.12.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script>
        var goodPicks = [];
        var badPicks = [];

        \$(function(){
            //testing buttons
            \$(\"#hide\").click(function(){
                \$(\"#model\").hide();
            });
            \$(\"#show\").click(function(){
                \$(\"#model\").show();
            });
            
            \$(\"#button1-hide\").click(function(){
                \$('#modelItems').toggle();
                \$(this).text(function(i,text){
                    return text === \"Hide\" ? \"Show\" : \"Hide\";
                });
            });
            
            //Highlight items
            \$(\".thumbnailContainer\").mouseenter(function(){
                \$(this).animate({
                    height: '115%',
                    width: '276px',
                    //borderStyle: 'dashed',
                    //borderColor: '#99ff00',
                    //borderWidth: '5px',
                });
            });
            
            \$(\".thumbnailContainer\").mouseleave(function(){
                \$(this).animate({
                    height: '100%',
                    width: '240px',
                    //borderStyle: 'solid',
                    //borderColor: '#99ff00',
                    //borderWidth: '0px',
                });
            });
            
            //Select items and register picks
            \$(\".thumbnailContainer\").click(function(){
                \$(this).toggleClass('selected');
                var pattern = /fake/;
                var currentId = \$(this).attr('id');
                var goodText = '';
                var badText = '';
                
                if (\$(this).hasClass('selected')) {
                    if (pattern.test(currentId)) {
                        badPicks.push(currentId);
                    } else {
                        goodPicks.push(currentId);
                    };                 
                } else {
                    if (pattern.test(currentId)) {
                        badPicks.pop(currentId);
                    } else {
                        goodPicks.pop(currentId);
                    }
                };
                
                for (item in goodPicks) {
                    goodText += goodPicks[item] + ', ';
                };
                for (item in badPicks) {
                    badText += badPicks[item] + ', ';
                };

                \$('#goodPicks').text(goodText);
                \$('#badPicks').text(badText);
                
                console.log(goodPicks);
                console.log(badPicks);
            });
            
            //countdown timer
            
        });        
    </script>
    
    
    
";
        
        $__internal_118d839bda0c46b58910575875351a62a64398cb255d6d3a0995af0569e77b92->leave($__internal_118d839bda0c46b58910575875351a62a64398cb255d6d3a0995af0569e77b92_prof);

    }

    // line 127
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_828da143028b84f6897f1ac96e59b8c71fc025bd987fef693be7699e023fa4d4 = $this->env->getExtension("native_profiler");
        $__internal_828da143028b84f6897f1ac96e59b8c71fc025bd987fef693be7699e023fa4d4->enter($__internal_828da143028b84f6897f1ac96e59b8c71fc025bd987fef693be7699e023fa4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 128
        echo "<style>
    body {
        font: 18px/1.5 sans-serif; 
    }
    
    h1, h2 { 
        line-height: 1.2; 
        margin: 0 0 .5em; 
    }
    
    h1 {
        font-size: 36px; 
    }
    
    h2 { 
        font-size: 21px; 
        margin-bottom: 1em; 
    }
    
    p { 
        margin: 0 0 1em 0; 
    }
    
    a { 
        color: #0000F0; 
    }
    
    a:hover {
        text-decoration: none; 
    }
    
    code { 
        background: #F5F5F5; 
        max-width: 100px; 
        padding: 2px 6px; 
        word-wrap: break-word; 
    }
    
    #wrapper { 
        background: #FFF; 
        margin: 1em auto; 
        max-width: 800px; 
        width: 95%; 
    }
    
    #container { 
        padding: 2em; 
    }
    
    #welcome, #status { 
        margin-bottom: 2em; 
    }
    
    #welcome h1 span { 
        display: block; 
        font-size: 75%; 
    }
    
    #icon-status, #icon-book { 
        float: left; 
        height: 64px; 
        margin-right: 1em; 
        margin-top: -4px; 
        width: 64px; 
    }
    
    #icon-book { 
        display: none; 
    }
    
    ";
        // line 199
        echo "    #container {
        height: 700px; 
        width: 1300px; 
        margin-left: 15px; 
        margin-top: 20px; 
        //background:yellow; 
        position: absolute;
    }
    
    #screen {
        height: 80%; 
        width: 100%; 
        left: 0px; 
        top :0px; 
        //background: blue; 
        overflow: hidden; 
        position: absolute
    }
    
    #model {
        display: block; 
        margin-left:auto; 
        margin-right:auto; 
        height: 600px; 
        width: auto
    }
    
    #modelItems {
        display: block;
        top: 0px; 
        height: 100%; 
        width: 100%; 
        overflow: hidden; 
        position: absolute; 
        //background:pink
    }
    
    #itemContainer li {
        list-style-type:none; 
        display: inline-block; 
        height: 250px; 
        width: 300px; 
        margin: 10px; 
        margin-bottom: 15px; 
        //overflow: hidden; 
        //background:#F5871F;
        position: relative
    }

    .thumbnailContainer {
        height: 100%; width: 240px;                                 
        //margin-left: 30px; 
        //margin-right: 30px; 
        overflow:hidden; 
        position:absolute;
        top: -9999px;
        bottom: -9999px;
        left: -9999px;
        right: -9999px;
        margin: auto;
        border-radius: 2px;
        border-style: dashed;
        border-color: #99ff00;
        border-width: 0px;
        //border: 5px dashed red;
    }
    
    .thumbnail {
        height: 100%; 
        width: auto; 
        position: absolute;
        top: -9999px;
        bottom: -9999px;
        left: -9999px;
        right: -9999px;
        margin: auto
    }
    
    .thumbnail:hover {
        cursor: pointer
    }
    
    #controlePanel {
        height: 20%; 
        width: 100%; 
        left: 0px; 
        bottom: 0px; 
        display: block; 
        background-color: purple; 
        overflow: hidden;
        position: absolute
    }
    
    .selected {
        border: 3px solid black;
    }
    
    

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
        
        $__internal_828da143028b84f6897f1ac96e59b8c71fc025bd987fef693be7699e023fa4d4->leave($__internal_828da143028b84f6897f1ac96e59b8c71fc025bd987fef693be7699e023fa4d4_prof);

    }

    public function getTemplateName()
    {
        return "play/level.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 199,  216 => 128,  210 => 127,  117 => 39,  112 => 38,  106 => 37,  91 => 28,  77 => 16,  65 => 13,  61 => 12,  58 => 11,  54 => 10,  46 => 7,  42 => 5,  36 => 4,  11 => 2,);
    }
}
/* {# empty Twig template #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div id="container">*/
/*         <div id="screen">*/
/*             <img id="model" src="{{asset(model.picture)}}" alt="{{model.name}}"/>*/
/*             <div id="modelItems">*/
/*                 <ul id="itemContainer">*/
/*                     {% for item in items %}*/
/*                         <li>*/
/*                             <div class="thumbnailContainer" id="{{item.name}}">*/
/*                                 <img class="thumbnail" src="{{asset(item.picture)}}" alt="{{item.name}}"/>*/
/*                             </div>                       */
/*                         </li>*/
/*                     {% endfor %}   */
/*                 </ul>*/
/*             </div>*/
/*             <div id="timerContainer">*/
/*                 <h1 id="timer">5</h1>*/
/*             </div>*/
/*         </div>*/
/*         <div id="controlePanel">*/
/*             <button id='button1-hide'>Hide</button>*/
/*             <button id="hide">Hide</button>*/
/*             <button id="show">Show</button>*/
/*             */
/*             <h2>Total Items: {{model.totalItems}}</h2>*/
/*             <h2>Good Picks: <span id="goodPicks"></span></h2>*/
/*             <h2>Bad Picks: <span id="badPicks"></span></h2>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     <script src="{{asset('js/jquery-1.12.2.min.js')}}"></script>*/
/*     <script src="{{asset('js/bootstrap.min.js')}}"></script>*/
/*     <script>*/
/*         var goodPicks = [];*/
/*         var badPicks = [];*/
/* */
/*         $(function(){*/
/*             //testing buttons*/
/*             $("#hide").click(function(){*/
/*                 $("#model").hide();*/
/*             });*/
/*             $("#show").click(function(){*/
/*                 $("#model").show();*/
/*             });*/
/*             */
/*             $("#button1-hide").click(function(){*/
/*                 $('#modelItems').toggle();*/
/*                 $(this).text(function(i,text){*/
/*                     return text === "Hide" ? "Show" : "Hide";*/
/*                 });*/
/*             });*/
/*             */
/*             //Highlight items*/
/*             $(".thumbnailContainer").mouseenter(function(){*/
/*                 $(this).animate({*/
/*                     height: '115%',*/
/*                     width: '276px',*/
/*                     //borderStyle: 'dashed',*/
/*                     //borderColor: '#99ff00',*/
/*                     //borderWidth: '5px',*/
/*                 });*/
/*             });*/
/*             */
/*             $(".thumbnailContainer").mouseleave(function(){*/
/*                 $(this).animate({*/
/*                     height: '100%',*/
/*                     width: '240px',*/
/*                     //borderStyle: 'solid',*/
/*                     //borderColor: '#99ff00',*/
/*                     //borderWidth: '0px',*/
/*                 });*/
/*             });*/
/*             */
/*             //Select items and register picks*/
/*             $(".thumbnailContainer").click(function(){*/
/*                 $(this).toggleClass('selected');*/
/*                 var pattern = /fake/;*/
/*                 var currentId = $(this).attr('id');*/
/*                 var goodText = '';*/
/*                 var badText = '';*/
/*                 */
/*                 if ($(this).hasClass('selected')) {*/
/*                     if (pattern.test(currentId)) {*/
/*                         badPicks.push(currentId);*/
/*                     } else {*/
/*                         goodPicks.push(currentId);*/
/*                     };                 */
/*                 } else {*/
/*                     if (pattern.test(currentId)) {*/
/*                         badPicks.pop(currentId);*/
/*                     } else {*/
/*                         goodPicks.pop(currentId);*/
/*                     }*/
/*                 };*/
/*                 */
/*                 for (item in goodPicks) {*/
/*                     goodText += goodPicks[item] + ', ';*/
/*                 };*/
/*                 for (item in badPicks) {*/
/*                     badText += badPicks[item] + ', ';*/
/*                 };*/
/* */
/*                 $('#goodPicks').text(goodText);*/
/*                 $('#badPicks').text(badText);*/
/*                 */
/*                 console.log(goodPicks);*/
/*                 console.log(badPicks);*/
/*             });*/
/*             */
/*             //countdown timer*/
/*             */
/*         });        */
/*     </script>*/
/*     */
/*     */
/*     */
/* {% endblock %}*/
/*     */
/* */
/* {% block stylesheets %}*/
/* <style>*/
/*     body {*/
/*         font: 18px/1.5 sans-serif; */
/*     }*/
/*     */
/*     h1, h2 { */
/*         line-height: 1.2; */
/*         margin: 0 0 .5em; */
/*     }*/
/*     */
/*     h1 {*/
/*         font-size: 36px; */
/*     }*/
/*     */
/*     h2 { */
/*         font-size: 21px; */
/*         margin-bottom: 1em; */
/*     }*/
/*     */
/*     p { */
/*         margin: 0 0 1em 0; */
/*     }*/
/*     */
/*     a { */
/*         color: #0000F0; */
/*     }*/
/*     */
/*     a:hover {*/
/*         text-decoration: none; */
/*     }*/
/*     */
/*     code { */
/*         background: #F5F5F5; */
/*         max-width: 100px; */
/*         padding: 2px 6px; */
/*         word-wrap: break-word; */
/*     }*/
/*     */
/*     #wrapper { */
/*         background: #FFF; */
/*         margin: 1em auto; */
/*         max-width: 800px; */
/*         width: 95%; */
/*     }*/
/*     */
/*     #container { */
/*         padding: 2em; */
/*     }*/
/*     */
/*     #welcome, #status { */
/*         margin-bottom: 2em; */
/*     }*/
/*     */
/*     #welcome h1 span { */
/*         display: block; */
/*         font-size: 75%; */
/*     }*/
/*     */
/*     #icon-status, #icon-book { */
/*         float: left; */
/*         height: 64px; */
/*         margin-right: 1em; */
/*         margin-top: -4px; */
/*         width: 64px; */
/*     }*/
/*     */
/*     #icon-book { */
/*         display: none; */
/*     }*/
/*     */
/*     {# level styles #}*/
/*     #container {*/
/*         height: 700px; */
/*         width: 1300px; */
/*         margin-left: 15px; */
/*         margin-top: 20px; */
/*         //background:yellow; */
/*         position: absolute;*/
/*     }*/
/*     */
/*     #screen {*/
/*         height: 80%; */
/*         width: 100%; */
/*         left: 0px; */
/*         top :0px; */
/*         //background: blue; */
/*         overflow: hidden; */
/*         position: absolute*/
/*     }*/
/*     */
/*     #model {*/
/*         display: block; */
/*         margin-left:auto; */
/*         margin-right:auto; */
/*         height: 600px; */
/*         width: auto*/
/*     }*/
/*     */
/*     #modelItems {*/
/*         display: block;*/
/*         top: 0px; */
/*         height: 100%; */
/*         width: 100%; */
/*         overflow: hidden; */
/*         position: absolute; */
/*         //background:pink*/
/*     }*/
/*     */
/*     #itemContainer li {*/
/*         list-style-type:none; */
/*         display: inline-block; */
/*         height: 250px; */
/*         width: 300px; */
/*         margin: 10px; */
/*         margin-bottom: 15px; */
/*         //overflow: hidden; */
/*         //background:#F5871F;*/
/*         position: relative*/
/*     }*/
/* */
/*     .thumbnailContainer {*/
/*         height: 100%; width: 240px;                                 */
/*         //margin-left: 30px; */
/*         //margin-right: 30px; */
/*         overflow:hidden; */
/*         position:absolute;*/
/*         top: -9999px;*/
/*         bottom: -9999px;*/
/*         left: -9999px;*/
/*         right: -9999px;*/
/*         margin: auto;*/
/*         border-radius: 2px;*/
/*         border-style: dashed;*/
/*         border-color: #99ff00;*/
/*         border-width: 0px;*/
/*         //border: 5px dashed red;*/
/*     }*/
/*     */
/*     .thumbnail {*/
/*         height: 100%; */
/*         width: auto; */
/*         position: absolute;*/
/*         top: -9999px;*/
/*         bottom: -9999px;*/
/*         left: -9999px;*/
/*         right: -9999px;*/
/*         margin: auto*/
/*     }*/
/*     */
/*     .thumbnail:hover {*/
/*         cursor: pointer*/
/*     }*/
/*     */
/*     #controlePanel {*/
/*         height: 20%; */
/*         width: 100%; */
/*         left: 0px; */
/*         bottom: 0px; */
/*         display: block; */
/*         background-color: purple; */
/*         overflow: hidden;*/
/*         position: absolute*/
/*     }*/
/*     */
/*     .selected {*/
/*         border: 3px solid black;*/
/*     }*/
/*     */
/*     */
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
