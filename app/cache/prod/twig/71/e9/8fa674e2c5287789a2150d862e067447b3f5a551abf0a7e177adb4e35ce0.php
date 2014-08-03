<?php

/* ::base.html.twig */
class __TwigTemplate_71e98fa674e2c5287789a2150d862e067447b3f5a551abf0a7e177adb4e35ce0 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
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
        echo "    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 57,  110 => 56,  77 => 32,  52 => 19,  320 => 172,  316 => 171,  286 => 154,  281 => 152,  267 => 144,  263 => 143,  255 => 138,  249 => 135,  245 => 134,  237 => 129,  231 => 126,  211 => 115,  207 => 114,  167 => 92,  153 => 84,  83 => 36,  65 => 27,  104 => 19,  74 => 14,  53 => 5,  20 => 1,  257 => 86,  253 => 85,  248 => 83,  244 => 82,  236 => 80,  232 => 79,  228 => 78,  216 => 75,  212 => 74,  200 => 71,  192 => 105,  188 => 104,  184 => 67,  180 => 66,  172 => 64,  145 => 55,  127 => 45,  124 => 44,  114 => 33,  96 => 15,  90 => 43,  84 => 10,  70 => 31,  37 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 170,  309 => 169,  305 => 95,  298 => 91,  294 => 157,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 76,  214 => 69,  177 => 96,  169 => 60,  140 => 53,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 25,  273 => 147,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 81,  238 => 85,  235 => 74,  230 => 82,  227 => 125,  224 => 77,  221 => 77,  219 => 76,  217 => 118,  208 => 73,  204 => 72,  179 => 69,  159 => 87,  143 => 56,  135 => 75,  131 => 74,  119 => 42,  108 => 21,  102 => 32,  71 => 30,  67 => 15,  63 => 42,  59 => 6,  47 => 12,  38 => 6,  94 => 44,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 26,  56 => 20,  50 => 18,  29 => 5,  87 => 42,  72 => 16,  55 => 33,  21 => 2,  26 => 2,  98 => 18,  93 => 42,  88 => 6,  78 => 36,  46 => 7,  27 => 4,  40 => 8,  44 => 11,  35 => 7,  31 => 4,  43 => 14,  41 => 12,  28 => 3,  201 => 92,  196 => 106,  183 => 82,  171 => 93,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 67,  117 => 58,  115 => 43,  105 => 40,  101 => 32,  91 => 43,  69 => 11,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 25,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 63,  164 => 62,  162 => 59,  154 => 58,  149 => 83,  147 => 58,  144 => 49,  141 => 78,  133 => 49,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 52,  99 => 31,  95 => 28,  92 => 42,  86 => 39,  82 => 22,  80 => 36,  73 => 19,  64 => 10,  60 => 21,  57 => 25,  54 => 10,  51 => 19,  48 => 13,  45 => 8,  42 => 10,  39 => 22,  36 => 4,  33 => 6,  30 => 7,);
    }
}
