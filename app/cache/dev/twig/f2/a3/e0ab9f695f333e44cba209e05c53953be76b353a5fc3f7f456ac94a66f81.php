<?php

/* PageBundle:Pages:faq.html.twig */
class __TwigTemplate_f2a3e0ab9f695f333e44cba209e05c53953be76b353a5fc3f7f456ac94a66f81 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("PageBundle::base.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
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
    <div class=\"feature-grids\">
        <div class=\"feature-grid-head\">
            <div class=\"feature-grid-head-top\">
                <label> </label><span> </span> <label> </label>
                <div class=\"clear\"> </div>
            </div>
            <h3>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("faq"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"clear\"> </div>
        <div class=\"feature-grid\">

            <div class=\"feature-grid-center\">
                ";
        // line 19
        echo $this->env->getExtension('translator')->trans("faqTekst1");
        echo "
            </div>
        </div>
    </div>
    <!---End-Features---->
</div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Pages:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  53 => 8,  20 => 1,  257 => 89,  253 => 88,  248 => 86,  244 => 85,  236 => 83,  232 => 82,  228 => 81,  216 => 78,  212 => 77,  200 => 74,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  172 => 67,  129 => 49,  113 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 79,  214 => 69,  177 => 65,  169 => 60,  140 => 56,  132 => 50,  128 => 49,  107 => 36,  61 => 40,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 84,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 69,  159 => 63,  143 => 56,  135 => 53,  119 => 33,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 9,  38 => 6,  94 => 28,  89 => 10,  85 => 25,  75 => 91,  68 => 13,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 73,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 7,  40 => 8,  37 => 10,  22 => 25,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 19,  101 => 15,  98 => 18,  96 => 31,  83 => 5,  74 => 14,  66 => 15,  55 => 33,  52 => 21,  50 => 10,  43 => 8,  41 => 6,  35 => 5,  32 => 2,  29 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 68,  173 => 65,  168 => 66,  164 => 65,  162 => 57,  154 => 61,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 34,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 12,  92 => 17,  86 => 16,  82 => 22,  80 => 15,  73 => 49,  64 => 17,  60 => 6,  57 => 38,  54 => 10,  51 => 19,  48 => 13,  45 => 17,  42 => 13,  39 => 22,  36 => 4,  33 => 4,  30 => 7,);
    }
}
