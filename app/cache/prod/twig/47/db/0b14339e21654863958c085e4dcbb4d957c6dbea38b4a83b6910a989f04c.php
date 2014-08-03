<?php

/* PageBundle:Layout:footer.html.twig */
class __TwigTemplate_47db0b14339e21654863958c085e4dcbb4d957c6dbea38b4a83b6910a989f04c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"footer\">
    <div class=\"wrap\">
        <div class=\"footer-grid footer-grid2\">
            <h4>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kontakt"), "html", null, true);
        echo "</h4>
            <ul>
                <li><span> </span> <label>Pfenningbacherstr. 19<br>Neuburg am Inn, Germany</label></li>
                <li><span> </span> <label>df@exoticcarparts.de</label></li>
                <li><span> </span> <label>(+49) 0151 11 61 75 84</label></li>
                <li><span> </span> <label>(+49) 850 29 172 61</label></li>
            </ul>
        </div>
        <div class=\"footer-grid2\">
            <div class=\"ebay\">
                <h4>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("aukcje"), "html", null, true);
        echo "</h4>
                <div id=\"auction-nudge-items\" class=\"auction-nudge\"></div>   
            </div>
        </div>

        <div class=\"clear\"> </div>
        <div class=\"copy-right-left\">
            <p>&#169; All rights reserved by ExoticCarParts. <!--Template by <a href=\"http://w3layouts.com/\">w3layouts.com</a>--></p>
        </div>
        <div class=\"clear\"> </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Layout:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  257 => 86,  253 => 85,  248 => 83,  244 => 82,  236 => 80,  232 => 79,  228 => 78,  216 => 75,  212 => 74,  200 => 71,  192 => 69,  188 => 68,  184 => 67,  180 => 66,  172 => 64,  145 => 55,  127 => 45,  124 => 44,  114 => 33,  96 => 15,  90 => 12,  84 => 10,  70 => 88,  37 => 10,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 76,  214 => 69,  177 => 65,  169 => 60,  140 => 53,  132 => 51,  128 => 49,  111 => 37,  107 => 36,  61 => 13,  273 => 96,  269 => 94,  254 => 92,  246 => 90,  243 => 88,  240 => 81,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 77,  221 => 77,  219 => 76,  217 => 75,  208 => 73,  204 => 72,  179 => 69,  159 => 60,  143 => 56,  135 => 53,  131 => 52,  119 => 42,  108 => 21,  102 => 32,  71 => 19,  67 => 15,  63 => 42,  59 => 14,  47 => 28,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  79 => 18,  75 => 17,  68 => 44,  56 => 9,  50 => 10,  29 => 5,  87 => 11,  72 => 16,  55 => 33,  21 => 2,  26 => 2,  98 => 31,  93 => 28,  88 => 6,  78 => 5,  46 => 7,  27 => 4,  40 => 8,  44 => 15,  35 => 5,  31 => 5,  43 => 8,  41 => 7,  28 => 3,  201 => 92,  196 => 70,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  123 => 47,  121 => 46,  117 => 34,  115 => 43,  105 => 40,  101 => 32,  91 => 27,  69 => 25,  66 => 15,  62 => 23,  49 => 19,  24 => 4,  32 => 4,  25 => 3,  22 => 2,  19 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 65,  168 => 63,  164 => 62,  162 => 59,  154 => 58,  149 => 56,  147 => 58,  144 => 49,  141 => 48,  133 => 49,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 42,  109 => 34,  106 => 33,  103 => 19,  99 => 31,  95 => 28,  92 => 21,  86 => 28,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 13,  57 => 38,  54 => 10,  51 => 14,  48 => 13,  45 => 8,  42 => 7,  39 => 22,  36 => 5,  33 => 4,  30 => 7,);
    }
}
