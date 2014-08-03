<?php

/* PageBundle:Layout:menu.html.twig */
class __TwigTemplate_d95fb181f39bd1d6bc67fb4e9b1b5d2b9f589c2b2f0c01e3738033da8b0a526f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'menu' => array($this, 'block_menu'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('menu', $context, $blocks);
        // line 25
        echo "


";
    }

    // line 1
    public function block_menu($context, array $blocks = array())
    {
        // line 2
        echo "<div class=\"meny\">
    <div id=\"meny-content-wrapper\">
        <div id=\"logo\"><img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\" title=\"ExoticCarParts\" /></div>
        <div id=\"language\">             
            <a class=\"lang\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route_params"), "method"), array("_locale" => "pl"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/flagi/pl.jpg"), "html", null, true);
        echo "\" alt=\"pl\" /></a>
            <a class=\"lang\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route_params"), "method"), array("_locale" => "en"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/flagi/en.jpg"), "html", null, true);
        echo "\" alt=\"en\" /></a>
            <a class=\"lang\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route_params"), "method"), array("_locale" => "de"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/flagi/de.jpg"), "html", null, true);
        echo "\" alt=\"de\" /></a>
            <a class=\"lang\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route"), "method"), twig_array_merge($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "get", array(0 => "_route_params"), "method"), array("_locale" => "ch"))), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/flagi/ch.jpg"), "html", null, true);
        echo "\" alt=\"ch\" /></a>
        </div>
        <div class=\"clear\"></div>
        <ul id=\"menu\">
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("page_start");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("start"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("page_o_nas");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oNas"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("page_oferta");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("oferta"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("page_serwis");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("serwis"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("page_opancerzenie");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("opancerzenie"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("page_faq");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("faq"), "html", null, true);
        echo "</a></li>
            <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("page_kontakt");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kontakt"), "html", null, true);
        echo "</a></li>
        </ul>
    </div>
</div>
<div class=\"meny-menu\">MENU</div>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Layout:menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  104 => 19,  53 => 8,  20 => 1,  257 => 89,  253 => 88,  248 => 86,  244 => 85,  236 => 83,  232 => 82,  228 => 81,  216 => 78,  212 => 77,  200 => 74,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  172 => 67,  129 => 49,  113 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 79,  214 => 69,  177 => 65,  169 => 60,  140 => 56,  132 => 50,  128 => 49,  107 => 36,  61 => 40,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 84,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 69,  159 => 63,  143 => 56,  135 => 53,  119 => 33,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 9,  38 => 6,  94 => 28,  89 => 10,  85 => 25,  75 => 91,  68 => 13,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 15,  31 => 5,  28 => 3,  201 => 92,  196 => 73,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 7,  40 => 8,  37 => 10,  22 => 25,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 19,  101 => 15,  98 => 18,  96 => 31,  83 => 5,  74 => 14,  66 => 15,  55 => 33,  52 => 21,  50 => 10,  43 => 8,  41 => 6,  35 => 5,  32 => 2,  29 => 1,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 68,  173 => 65,  168 => 66,  164 => 65,  162 => 57,  154 => 61,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 34,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 12,  92 => 17,  86 => 16,  82 => 22,  80 => 15,  73 => 49,  64 => 17,  60 => 6,  57 => 38,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 22,  36 => 4,  33 => 4,  30 => 7,);
    }
}
