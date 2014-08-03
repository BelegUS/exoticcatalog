<?php

/* PageBundle:Pages:serwis.html.twig */
class __TwigTemplate_aae59f93b4bddf94fca20db4652484e2a9b581d63b900897967aabb2362c50d7 extends Twig_Template
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
    <div class=\"feature-grids\">
        <div class=\"feature-grid-head\">
            <div class=\"feature-grid-head-top\">
                <label> </label><span> </span> <label> </label>
                <div class=\"clear\"> </div>
            </div>
            <h3>";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("serwis"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"clear\"> </div>
        <div class=\"feature-grid\">

            <div class=\"feature-grid-left\">
               <div class=\"slideshowSerwis\"> 
                    <img src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/start/ecp.png"), "html", null, true);
        echo "\" alt=\"\" />
                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/start/sls.png"), "html", null, true);
        echo "\" alt=\"\" />
                    <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/start/porsche.png"), "html", null, true);
        echo "\" alt=\"\" />
                </div>
        <div class=\"clear\"> </div>
            </div>
            
            <div class=\"feature-grid-right\">
                <p>";
        // line 27
        echo $this->env->getExtension('translator')->trans("serwisTekst1");
        echo "</p>

            </div>



            <div class=\"clear\"> </div>
        </div>


    </div>
    <!---End-Features---->
</div>
";
    }

    // line 42
    public function block_javascripts($context, array $blocks = array())
    {
        // line 43
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/sites/serwis.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Pages:serwis.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 43,  113 => 57,  110 => 56,  77 => 32,  320 => 172,  316 => 171,  286 => 154,  281 => 152,  267 => 144,  263 => 143,  255 => 138,  249 => 135,  245 => 134,  237 => 129,  192 => 105,  188 => 104,  153 => 84,  70 => 31,  65 => 27,  53 => 8,  20 => 1,  260 => 89,  256 => 88,  251 => 86,  239 => 83,  231 => 126,  223 => 79,  215 => 77,  211 => 115,  207 => 114,  195 => 72,  191 => 71,  175 => 67,  167 => 92,  152 => 59,  148 => 58,  104 => 19,  76 => 49,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 170,  309 => 169,  305 => 95,  298 => 91,  294 => 157,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 85,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 25,  273 => 147,  269 => 94,  254 => 92,  243 => 84,  240 => 86,  238 => 85,  235 => 82,  230 => 82,  227 => 125,  224 => 71,  221 => 77,  219 => 78,  217 => 118,  208 => 68,  204 => 72,  179 => 68,  159 => 87,  143 => 56,  135 => 75,  119 => 42,  102 => 32,  71 => 30,  67 => 15,  63 => 15,  59 => 9,  38 => 6,  94 => 44,  89 => 20,  85 => 25,  75 => 17,  68 => 26,  56 => 20,  87 => 42,  21 => 2,  26 => 2,  93 => 42,  88 => 6,  78 => 36,  46 => 7,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 106,  183 => 69,  171 => 93,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 67,  117 => 58,  105 => 40,  91 => 43,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 27,  47 => 7,  40 => 8,  37 => 10,  22 => 25,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 74,  123 => 47,  120 => 40,  115 => 43,  111 => 19,  108 => 36,  101 => 32,  98 => 18,  96 => 31,  83 => 36,  74 => 14,  66 => 15,  55 => 33,  52 => 19,  50 => 18,  43 => 13,  41 => 12,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 74,  199 => 73,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 83,  147 => 58,  144 => 49,  141 => 78,  133 => 55,  130 => 41,  125 => 34,  122 => 33,  116 => 21,  112 => 42,  109 => 34,  106 => 36,  103 => 52,  99 => 31,  95 => 11,  92 => 42,  86 => 39,  82 => 22,  80 => 36,  73 => 19,  64 => 17,  60 => 21,  57 => 24,  54 => 10,  51 => 19,  48 => 13,  45 => 17,  42 => 12,  39 => 22,  36 => 4,  33 => 4,  30 => 7,);
    }
}
