<?php

/* PageBundle:Pages:oferta.html.twig */
class __TwigTemplate_4e2c055ea33c160acad57882dc1314cef79625d52c06b1dc0afd1c1469a7c80f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PageBundle::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "PageBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"wrap text\">

    <!---start-Features---->
    <div class=\"feature-grids \">
        <div class=\"feature-grid-head\">
            <div class=\"feature-grid-head-top\">
                <label> </label><span> </span> <label> </label>
                <div class=\"clear\"> </div>
            </div>
            <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oferta"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"clear\"> </div>
        <div class=\"feature-grid\">

            <div class=\"feature-grid-center\">
                <p>";
        // line 19
        echo $this->env->getExtension('translator')->trans("ofertaTekst1");
        echo "</p>
            </div>
        </div>
        <div class=\"feature-grid\">
            <div class=\"feature-grid-left\">
                <div class=\"slideshowOferta\"> 
                    <img src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/oferta/slajdy/ferrarisilnik.png"), "html", null, true);
        echo "\" alt=\"\" />
                    <img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/oferta/slajdy/porschezawieszenie.png"), "html", null, true);
        echo "\" alt=\"\" />
                    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/oferta/slajdy/porschesilnik.png"), "html", null, true);
        echo "\" alt=\"\" />
                </div>

            </div>
            <div class=\"feature-grid-right special-oferta\">
                <p>";
        // line 32
        echo $this->env->getExtension('translator')->trans("ofertaTekst2");
        echo "</p>
            </div>
            <div class=\"clear\"> </div>
        </div>

        <div class=\"feature-grid\">
            <div class=\"feature-grid-center\">
                <p>";
        // line 39
        echo $this->env->getExtension('translator')->trans("ofertaTekst3");
        echo "</p>
            </div>
            <div class=\"feature-grid-center\">
                <img src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/oferta/599.png"), "html", null, true);
        echo "\" alt=\"\" />
            </div>

            <div class=\"clear\"> </div>
        </div>


    </div>
    <!---End-Features---->


</div>
";
    }

    // line 56
    public function block_javascripts($context, array $blocks = array())
    {
        // line 57
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/sites/oferta.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Pages:oferta.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 56,  77 => 32,  320 => 172,  316 => 171,  286 => 154,  281 => 152,  267 => 144,  263 => 143,  255 => 138,  249 => 135,  245 => 134,  237 => 129,  231 => 126,  211 => 115,  207 => 114,  167 => 92,  153 => 84,  70 => 31,  65 => 26,  104 => 19,  53 => 8,  20 => 1,  257 => 89,  253 => 88,  248 => 86,  244 => 85,  236 => 83,  232 => 82,  228 => 81,  216 => 78,  212 => 77,  200 => 74,  192 => 105,  188 => 104,  184 => 70,  180 => 69,  172 => 67,  129 => 49,  113 => 57,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 170,  309 => 169,  305 => 95,  298 => 91,  294 => 157,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 79,  214 => 69,  177 => 96,  169 => 60,  140 => 56,  132 => 50,  128 => 49,  107 => 36,  61 => 25,  273 => 147,  269 => 94,  254 => 92,  243 => 88,  240 => 84,  238 => 85,  235 => 74,  230 => 82,  227 => 125,  224 => 80,  221 => 77,  219 => 76,  217 => 118,  208 => 76,  204 => 75,  179 => 69,  159 => 87,  143 => 56,  135 => 75,  119 => 33,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 9,  38 => 6,  94 => 28,  89 => 10,  85 => 25,  75 => 91,  68 => 13,  56 => 9,  87 => 39,  21 => 2,  26 => 2,  93 => 42,  88 => 6,  78 => 36,  46 => 7,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 106,  183 => 82,  171 => 93,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 67,  117 => 58,  105 => 40,  91 => 43,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 27,  47 => 7,  40 => 8,  37 => 10,  22 => 25,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 74,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 19,  101 => 15,  98 => 18,  96 => 31,  83 => 38,  74 => 14,  66 => 15,  55 => 33,  52 => 19,  50 => 10,  43 => 13,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 68,  173 => 65,  168 => 66,  164 => 65,  162 => 57,  154 => 61,  149 => 83,  147 => 58,  144 => 49,  141 => 78,  133 => 55,  130 => 41,  125 => 44,  122 => 34,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 52,  99 => 31,  95 => 12,  92 => 17,  86 => 16,  82 => 22,  80 => 15,  73 => 49,  64 => 17,  60 => 6,  57 => 24,  54 => 10,  51 => 19,  48 => 13,  45 => 17,  42 => 13,  39 => 22,  36 => 4,  33 => 4,  30 => 7,);
    }
}
