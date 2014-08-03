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

    </div>

";
    }

    public function getTemplateName()
    {
        return "PageBundle:Layout:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  20 => 1,  260 => 89,  256 => 88,  251 => 86,  239 => 83,  231 => 81,  223 => 79,  215 => 77,  211 => 76,  207 => 75,  195 => 72,  191 => 71,  175 => 67,  167 => 65,  152 => 59,  148 => 58,  104 => 15,  76 => 49,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 85,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 40,  273 => 96,  269 => 94,  254 => 92,  243 => 84,  240 => 86,  238 => 85,  235 => 82,  230 => 82,  227 => 80,  224 => 71,  221 => 77,  219 => 78,  217 => 75,  208 => 68,  204 => 72,  179 => 68,  159 => 61,  143 => 56,  135 => 50,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 44,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 28,  88 => 6,  78 => 91,  46 => 7,  27 => 4,  44 => 15,  31 => 5,  28 => 3,  201 => 92,  196 => 90,  183 => 69,  171 => 66,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 28,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 19,  108 => 36,  101 => 32,  98 => 12,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 33,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 74,  199 => 73,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 51,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 34,  122 => 33,  116 => 21,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 11,  92 => 10,  86 => 5,  82 => 22,  80 => 19,  73 => 19,  64 => 17,  60 => 6,  57 => 38,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 22,  36 => 5,  33 => 4,  30 => 7,);
    }
}
