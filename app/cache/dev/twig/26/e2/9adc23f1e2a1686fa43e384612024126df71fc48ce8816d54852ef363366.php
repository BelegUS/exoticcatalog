<?php

/* PageBundle::base.html.twig */
class __TwigTemplate_26e29adc23f1e2a1686fa43e384612024126df71fc48ce8816d54852ef363366 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <!-- Start head -->
    <head>
";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        // line 6
        echo "            <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
            <meta http-equiv=\"Content-Type\" content=\"text/html;charset=utf-8\" >
            <script type=\"application/x-javascript\"> addEventListener(\"load\", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

";
        // line 10
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 22
        echo "    
        </head>
        <!-- //End head-->

        <body>
            <!--start lang and menu in MENY-->
";
        // line 28
        echo twig_include($this->env, $context, "PageBundle:Layout:menu.html.twig");
        echo "
            <!-- //End lang and menu in MENY-->

            <div class=\"contents\">

    ";
        // line 33
        $this->displayBlock('content', $context, $blocks);
        // line 38
        echo "
                <!---strat-footer--->
";
        // line 40
        echo twig_include($this->env, $context, "PageBundle:Layout:footer.html.twig");
        echo "
                <!---End-footer--->

                <!---strat-copy-right---->

                <!---End-copy-right---->

            </div>

";
        // line 49
        $this->displayBlock('javascripts', $context, $blocks);
        // line 91
        echo "        </body>

    </html>

";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "<title>ExoticCarParts</title>";
    }

    // line 10
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 11
        echo "            <!-- Main Page Stylesheet -->
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />    
            <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>    
            <!-- Animation Stylesheet -->
            <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/animate.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" />
            <!-- Nerve Slider Stylesheet -->
            <link rel=\"stylesheet\" href=\"http://code.ryanbruzan.net/nerveSlider/nerveSlider.min.css\" /> 
            <!-- Meny Menu Stylesheet -->
            <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/meny.css"), "html", null, true);
        echo "\">
            <!-- Vegas Background Stylesheet -->
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/css/jquery.vegas.min.css"), "html", null, true);
        echo "\" />
";
    }

    // line 33
    public function block_content($context, array $blocks = array())
    {
        // line 34
        echo "                <div class=\"content animated bounceInDown\">

                </div>
    ";
    }

    // line 49
    public function block_javascripts($context, array $blocks = array())
    {
        // line 50
        echo "            <!-- JQuery Library -->
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js\"></script>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js\"></script>
            <!-- Nerve Slider Library -->
            <script src=\"http://code.ryanbruzan.net/nerveSlider/jquery.nerveSlider.min.js\"></script>
            <!-- Slide Features Code -->
            <script type=\"text/javascript\" src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/slideFeatures.js"), "html", null, true);
        echo "\"></script>
            <!-- Meny Menu Library & Settings -->
            <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/meny.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/menySettings.js"), "html", null, true);
        echo "\"></script>
            <!-- Ebay Auctions -->
            <script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/ebayAuctions.js"), "html", null, true);
        echo "\"></script>
            <!-- Vegas Background Library, Vars & Settings -->
            <script type=\"text/javascript\" src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/jquery.vegas.min.js"), "html", null, true);
        echo "\"></script>
            <script>var backgroundImages = [
                {src: \"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/1.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/2.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/3.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/4.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/5.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/6.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/7.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/8.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/9.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/10.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/11.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/12.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/13.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/14.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/15.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/16.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/17.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/18.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/19.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/20.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/21.jpg"), "html", null, true);
        echo "\", fade: 1500},
                {src: \"";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/background/22.jpg"), "html", null, true);
        echo "\", fade: 1500},
                ];
            var overlay = \"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/images/overlays/03.png"), "html", null, true);
        echo "\";</script>
            <script type=\"text/javascript\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/vegasSettings.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PageBundle::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  257 => 89,  253 => 88,  248 => 86,  244 => 85,  236 => 83,  232 => 82,  228 => 81,  216 => 78,  212 => 77,  200 => 74,  192 => 72,  188 => 71,  184 => 70,  180 => 69,  172 => 67,  129 => 49,  113 => 21,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 79,  214 => 69,  177 => 65,  169 => 60,  140 => 56,  132 => 50,  128 => 49,  107 => 36,  61 => 40,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 84,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 80,  221 => 77,  219 => 76,  217 => 75,  208 => 76,  204 => 75,  179 => 69,  159 => 63,  143 => 56,  135 => 53,  119 => 33,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 14,  38 => 6,  94 => 28,  89 => 10,  85 => 25,  75 => 91,  68 => 14,  56 => 9,  87 => 25,  21 => 2,  26 => 6,  93 => 28,  88 => 6,  78 => 21,  46 => 7,  27 => 4,  44 => 12,  31 => 6,  28 => 3,  201 => 92,  196 => 73,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 46,  117 => 44,  105 => 40,  91 => 27,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 28,  40 => 8,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 58,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 43,  111 => 37,  108 => 19,  101 => 15,  98 => 31,  96 => 31,  83 => 5,  74 => 14,  66 => 15,  55 => 33,  52 => 21,  50 => 10,  43 => 8,  41 => 7,  35 => 5,  32 => 4,  29 => 5,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 66,  176 => 68,  173 => 65,  168 => 66,  164 => 65,  162 => 57,  154 => 61,  149 => 59,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 34,  116 => 41,  112 => 42,  109 => 34,  106 => 36,  103 => 32,  99 => 31,  95 => 12,  92 => 11,  86 => 28,  82 => 22,  80 => 19,  73 => 49,  64 => 17,  60 => 6,  57 => 38,  54 => 10,  51 => 14,  48 => 13,  45 => 17,  42 => 7,  39 => 22,  36 => 5,  33 => 4,  30 => 7,);
    }
}
