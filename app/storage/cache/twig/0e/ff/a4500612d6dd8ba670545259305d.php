<?php

/* base/hero.html.twig */
class __TwigTemplate_0effa4500612d6dd8ba670545259305d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->env->loadTemplate("base/stylesheets.twig");
        // line 15
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/stylesheets.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $_trait_1 = $this->env->loadTemplate("base/javascripts.twig");
        // line 91
        if (!$_trait_1->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."base/javascripts.twig".'" cannot be used as a trait.');
        }
        $_trait_1_blocks = $_trait_1->getBlocks();

        $this->traits = array_merge(
            $_trait_0_blocks,
            $_trait_1_blocks
        );

        $this->blocks = array_merge(
            $this->traits,
            array(
                'stylesheets' => array($this, 'block_stylesheets'),
                'navbar' => array($this, 'block_navbar'),
                'content' => array($this, 'block_content'),
                'footer' => array($this, 'block_footer'),
                'javascripts' => array($this, 'block_javascripts'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <title>";
        // line 5
        if ((isset($context["title"]) ? $context["title"] : null)) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
            echo " | ";
        }
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</title>
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
    <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
    <![endif]-->

    <!-- Le styles -->
    ";
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 30
        echo "

    <!-- Le fav and touch icons -->
    <link rel=\"shortcut icon\" href=\"images/favicon.ico\">
    <link rel=\"apple-touch-icon\" href=\"images/apple-touch-icon.png\">
    <link rel=\"apple-touch-icon\" sizes=\"72x72\" href=\"images/apple-touch-icon-72x72.png\">
    <link rel=\"apple-touch-icon\" sizes=\"114x114\" href=\"images/apple-touch-icon-114x114.png\">

</head>

<body>

<div class=\"navbar navbar-fixed-top navbar-inverse\">
    <div class=\"navbar-inner\">
        <div class=\"container\">
            ";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request"), "getInfo", array(), "method"), "html", null, true);
        echo "
            ";
        // line 46
        $this->displayBlock('navbar', $context, $blocks);
        // line 60
        echo "        </div>
    </div>
</div>

<div class=\"container\">
    <!-- Example row of columns -->
    <div class=\"row\">
        ";
        // line 67
        if ((isset($context["flash"]) ? $context["flash"] : null)) {
            // line 68
            echo "            ";
            $this->env->loadTemplate("base/components/flash.twig")->display($context);
            // line 69
            echo "        ";
        }
        // line 70
        echo "
        ";
        // line 71
        $this->displayBlock('content', $context, $blocks);
        // line 74
        echo "    </div>

    <div class=\"row\">
        <hr>
        <footer>
            ";
        // line 79
        $this->displayBlock('footer', $context, $blocks);
        // line 82
        echo "        </footer>
    </div>

</div>
<!-- /container -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
";
        // line 92
        $this->displayBlock('javascripts', $context, $blocks);
        // line 95
        echo "
</body>
</html>
";
    }

    // line 17
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 18
        echo "        ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
        <style type=\"text/css\">
            body {
                padding-top:    60px;
                padding-bottom: 40px;
            }

            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
    ";
    }

    // line 46
    public function block_navbar($context, array $blocks = array())
    {
        // line 47
        echo "                <a class=\"brand\" href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "/"), "method"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "getName", array(), "method"), "html", null, true);
        echo "</a>
                <ul class=\"nav\">
                    <li ";
        // line 49
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "/"), "method") == (isset($context["uri"]) ? $context["uri"] : null))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "/"), "method"), "html", null, true);
        echo "\">Home</a></li>
                    <li ";
        // line 51
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "devices"), "method") == (isset($context["uri"]) ? $context["uri"] : null))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "devices"), "method"), "html", null, true);
        echo "\">Devices</a></li>
                    <li ";
        // line 53
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "rules"), "method") == (isset($context["uri"]) ? $context["uri"] : null))) {
            echo "class=\"active\"";
        }
        echo "><a
                                href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "rules"), "method"), "html", null, true);
        echo "\">Rules</a></li>
                </ul>
                ";
        // line 56
        if ((isset($context["currentUser"]) ? $context["currentUser"] : null)) {
            // line 57
            echo "                    <p class=\"pull-right\">Logged in as <a href=\"#\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["currentUser"]) ? $context["currentUser"] : null), "getFullName", array(), "method"), "html", null, true);
            echo "</a></p>
                ";
        }
        // line 59
        echo "            ";
    }

    // line 71
    public function block_content($context, array $blocks = array())
    {
        // line 72
        echo "
        ";
    }

    // line 79
    public function block_footer($context, array $blocks = array())
    {
        // line 80
        echo "                <p>&copy; Copyright 2013</p>
            ";
    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        // line 93
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "base/hero.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  241 => 93,  238 => 92,  233 => 80,  230 => 79,  225 => 72,  222 => 71,  218 => 59,  212 => 57,  210 => 56,  205 => 54,  199 => 53,  195 => 52,  189 => 51,  185 => 50,  179 => 49,  171 => 47,  168 => 46,  151 => 18,  148 => 17,  141 => 95,  139 => 92,  128 => 82,  126 => 79,  119 => 74,  117 => 71,  114 => 70,  111 => 69,  108 => 68,  106 => 67,  97 => 60,  95 => 46,  91 => 45,  74 => 30,  72 => 17,  69 => 16,  52 => 5,  46 => 1,  21 => 91,  14 => 15,);
    }
}
