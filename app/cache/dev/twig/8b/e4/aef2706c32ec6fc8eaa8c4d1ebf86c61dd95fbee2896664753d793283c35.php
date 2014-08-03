<?php

/* PageBundle:Pages:kontakt.html.twig */
class __TwigTemplate_8be4aef2706c32ec6fc8eaa8c4d1ebf86c61dd95fbee2896664753d793283c35 extends Twig_Template
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
        echo "<!---start-Contact---->
<div class=\"contact text\">
    <div class=\"contact-map\">
        <!--<div id=\"map-canvas\"></div>-->
        <iframe 
            width=\"100%\"  
            height=\"350px\"
            frameborder=\"0\" 
            style=\"border:0\"
            src=\"";
        // line 13
        echo $this->env->getExtension('translator')->trans("mapaLink");
        echo "\"
            >            
        </iframe> 
    </div>
</div>
<div class=\"wrap text\">
    <div class=\"feature-grid-head\">
        <div class=\"feature-grid-head-top contact-top-head\">
            <label> </label><span> </span> <label> </label>
            <div class=\"clear\"> </div>
        </div>
        <h3>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("kontakt"), "html", null, true);
        echo "</h3>
    </div>
    <div class=\"contact-top-grids\">
        <div class=\"c-top-grid\">
            <span> </span>
            <h3>";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("adres"), "html", null, true);
        echo "</h3>
            <ul>
                ";
        // line 31
        echo $this->env->getExtension('translator')->trans("adresHTML");
        echo "
            </ul>
        </div>
        <div class=\"c-top-grid c-top-grid1\">
            <span> </span>
            <h3>";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telefon"), "html", null, true);
        echo "</h3>
            <ul>
                ";
        // line 38
        echo $this->env->getExtension('translator')->trans("telefonHTML");
        echo "
            </ul>
        </div>
        <div class=\"c-top-grid c-top-grid2\">
            <span> </span>
            <h3>";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("czasPracy"), "html", null, true);
        echo "</h3>
            <ul>
                <li>Mon-Fri-07:00-20:00</li>
                <li>Saturday-08:00-18:00</li>
                <li>Sunday-Closed</li>
            </ul>
        </div>
        <div class=\"c-top-grid last-grid\">
            <span> </span>
            <h3>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("email"), "html", null, true);
        echo "</h3>
            <ul>
                <li>df@exoticcarparts.de</li>
            </ul>
        </div>
        <div class=\"clear\"> </div>
    </div>

    <!---start-contact-form--->
    <div class=\"contact-form\">
        <div class=\"feature-grid-head\">
            <div class=\"feature-grid-head-top contact-form-head\">
                <label> </label><span> </span> <label> </label>
                <div class=\"clear\"> </div>
            </div>
            <h3>";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("formularzKontaktowy"), "html", null, true);
        echo "</h3>
        </div>
        <form method='post' action='web/includes/sites/functions/sendmail.php' id=\"form\">
            <div class=\"text-box-grids\">
                <!-- First line of inputs-->
                <div class=\"text-box\">
                    <input type=\"text\" name=\"name\" id=\"name\" 
                           value=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("imie"), "html", null, true);
        echo "\" 
                           onfocus=\"if (this.value == '";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("imie"), "html", null, true);
        echo "')
                                       this.value = '';\" 
                           onblur=\"if (this.value == '')
                                       this.value = '";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("imie"), "html", null, true);
        echo "';\"
                           >
                </div>
                <div class=\"text-box\">
                    <input type=\"email\" name=\"mail\" id=\"mail\" required 
                           value=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("emailNadawcy"), "html", null, true);
        echo "\" 
                           onfocus=\"if (this.value == '";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("emailNadawcy"), "html", null, true);
        echo "')
                                       this.value = '';\" 
                           onblur=\"if (this.value == '')
                                       this.value = '";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("emailNadawcy"), "html", null, true);
        echo "';\"
                           >
                </div>
                <div class=\"text-box\">
                    <input type=\"text\" name=\"phone\" id=\"phone\" 
                           value=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telefon"), "html", null, true);
        echo "\" 
                           onfocus=\"if (this.value == '";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telefon"), "html", null, true);
        echo "')
                                       this.value = '';\" 
                           onblur=\"if (this.value == '')
                                       this.value = '";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("telefon"), "html", null, true);
        echo "';\"
                           >
                </div>
                <div class=\"clear\"> </div>
                <!-- Second line of inputs-->
                <div class=\"text-box\"></div>    <!--Just to move next div to middle-->
                <div class=\"text-box\">
                    <select name=\"reasonOfContact\" id=\"reasonOfContact\" required>
                        <option value=\"\" selected>";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("celKontaktu"), "html", null, true);
        echo "</option>
                        <option value=\"part\">";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("dostepnoscCzesci"), "html", null, true);
        echo "</option>
                        <option value=\"other\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("inny"), "html", null, true);
        echo "</option>
                    </select>
                </div>
                <div class=\"clear\"> </div>
                <!-- Third line of inputs-->
                <div class=\"text-box\"></div>    <!--Just to move next div to middle-->
                <div class=\"text-box\">
                    <input type=\"text\" name=\"catalogueNumber\" id=\"catalogueNumber\" required
                           value=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("numerKatalogowy"), "html", null, true);
        echo "\" 
                           onfocus=\"if (this.value == '";
        // line 115
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("numerKatalogowy"), "html", null, true);
        echo "')
                                       this.value = '';\" 
                           onblur=\"if (this.value == '')
                                       this.value = '";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("numerKatalogowy"), "html", null, true);
        echo "';\"
                           >
                </div>
                <div class=\"clear\"> </div>                    
                <!-- Fourth line of inputs-->
                <div class=\"text-box\">
                    <input type=\"text\" name=\"brand\" id=\"brand\" 
                           value=\"";
        // line 125
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("marka"), "html", null, true);
        echo "\" 
                           onfocus=\"if (this.value == '";
        // line 126
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("marka"), "html", null, true);
        echo "')
                                       this.value = '';\" 
                           onblur=\"if (this.value == '')
                                       this.value = '";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("marka"), "html", null, true);
        echo "';\"
                           >
                </div>
                <div class=\"text-box\">
                    <input type=\"text\" name=\"model\" id=\"model\" 
                           value=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("model"), "html", null, true);
        echo "\" 
                           onfocus=\"if (this.value == '";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("model"), "html", null, true);
        echo "')
                                       this.value = '';\" 
                           onblur=\"if (this.value == '')
                                       this.value = '";
        // line 138
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("model"), "html", null, true);
        echo "';\"
                           >
                </div>
                <div class=\"text-box\">
                    <input type=\"text\" name=\"vin\" id=\"vin\" 
                           value=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("vin"), "html", null, true);
        echo "\" 
                           onfocus=\"if (this.value == '";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("vin"), "html", null, true);
        echo "')
                                       this.value = '';\" 
                           onblur=\"if (this.value == '')
                                       this.value = '";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("vin"), "html", null, true);
        echo "';\"
                           >
                    <div class=\"clear\"> </div>
                </div>
                <div class=\"textarea-box\">
                    <textarea id=\"textarea\" rows=\"2\" cols=\"70\" onfocus=\"if (this.value == '";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("trescWiadomosci"), "html", null, true);
        echo "')
                                       this.value = '';\" onblur=\"if (this.value == '')
                                       this.value = '";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("trescWiadomosci"), "html", null, true);
        echo "';\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("trescWiadomosci"), "html", null, true);
        echo "</textarea>
                </div>
                <div class=\"clear\"> </div>
                <input type=\"submit\" id=\"submit-button\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("wyslij"), "html", null, true);
        echo "\" />

        </form>
        <div id=\"result\"></div>
    </div>
    <!---//End-contact-form--->
</div>
<!---End-Contact---->
</div>
<!---End-content---->
";
    }

    // line 169
    public function block_javascripts($context, array $blocks = array())
    {
        // line 170
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
<script>var pathSend = '";
        // line 171
        echo $this->env->getExtension('routing')->getPath("page_kontakt_send");
        echo "';</script>
<script type=\"text/javascript\" src=\"";
        // line 172
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("assets/js/sites/kontakt.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "PageBundle:Pages:kontakt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  320 => 172,  316 => 171,  286 => 154,  281 => 152,  267 => 144,  263 => 143,  255 => 138,  249 => 135,  245 => 134,  237 => 129,  192 => 105,  188 => 104,  153 => 84,  70 => 31,  65 => 29,  53 => 8,  20 => 1,  260 => 89,  256 => 88,  251 => 86,  239 => 83,  231 => 126,  223 => 79,  215 => 77,  211 => 115,  207 => 114,  195 => 72,  191 => 71,  175 => 67,  167 => 92,  152 => 59,  148 => 58,  104 => 19,  76 => 49,  23 => 1,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 170,  309 => 169,  305 => 95,  298 => 91,  294 => 157,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 85,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 96,  169 => 60,  140 => 55,  132 => 49,  128 => 49,  107 => 36,  61 => 40,  273 => 147,  269 => 94,  254 => 92,  243 => 84,  240 => 86,  238 => 85,  235 => 82,  230 => 82,  227 => 125,  224 => 71,  221 => 77,  219 => 78,  217 => 118,  208 => 68,  204 => 72,  179 => 68,  159 => 87,  143 => 56,  135 => 75,  119 => 42,  102 => 32,  71 => 19,  67 => 15,  63 => 15,  59 => 9,  38 => 6,  94 => 28,  89 => 20,  85 => 25,  75 => 17,  68 => 13,  56 => 9,  87 => 25,  21 => 2,  26 => 2,  93 => 28,  88 => 6,  78 => 36,  46 => 7,  27 => 4,  44 => 15,  31 => 4,  28 => 3,  201 => 92,  196 => 106,  183 => 69,  171 => 93,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 67,  117 => 44,  105 => 40,  91 => 43,  62 => 23,  49 => 19,  24 => 4,  25 => 3,  19 => 1,  79 => 18,  72 => 16,  69 => 25,  47 => 7,  40 => 8,  37 => 10,  22 => 25,  246 => 90,  157 => 61,  145 => 46,  139 => 45,  131 => 74,  123 => 47,  120 => 40,  115 => 43,  111 => 19,  108 => 36,  101 => 32,  98 => 18,  96 => 31,  83 => 38,  74 => 14,  66 => 15,  55 => 33,  52 => 21,  50 => 10,  43 => 13,  41 => 6,  35 => 5,  32 => 4,  29 => 3,  209 => 82,  203 => 74,  199 => 73,  193 => 73,  189 => 71,  187 => 70,  182 => 66,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 63,  154 => 58,  149 => 83,  147 => 58,  144 => 49,  141 => 78,  133 => 55,  130 => 41,  125 => 34,  122 => 33,  116 => 21,  112 => 42,  109 => 34,  106 => 36,  103 => 52,  99 => 31,  95 => 11,  92 => 17,  86 => 16,  82 => 22,  80 => 15,  73 => 19,  64 => 17,  60 => 6,  57 => 24,  54 => 10,  51 => 19,  48 => 13,  45 => 17,  42 => 13,  39 => 22,  36 => 4,  33 => 4,  30 => 7,);
    }
}
