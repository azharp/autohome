<?php

/* base/sidebar.twig */
class __TwigTemplate_84a7464d2638556af650d677d83f63e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sidebar', $context, $blocks);
    }

    public function block_sidebar($context, array $blocks = array())
    {
        // line 2
        echo "\t<div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
            \t<li class=\"nav-header\">Documentation</li>
\t          ";
        // line 5
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pmenu"]) ? $context["pmenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 6
            echo "\t          \t<li ";
            echo (($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "active")) ? ("class=\"active\"") : ("false"));
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "desc"), "html", null, true);
            echo "</a></li>
\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "            </ul>
        </div><!--/.well -->

        <div class=\"well sidebar-nav\">
            <ul class=\"nav nav-list\">
            \t<li class=\"nav-header\">Installation</li>
\t          ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["smenu"]) ? $context["smenu"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
            // line 15
            echo "\t          \t<li ";
            echo (($this->getAttribute((isset($context["link"]) ? $context["link"] : null), "active")) ? ("class=\"active\"") : ("false"));
            echo "><a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "url"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["link"]) ? $context["link"] : null), "desc"), "html", null, true);
            echo "</a></li>
\t          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "            </ul>
        </div><!--/.well -->
";
    }

    public function getTemplateName()
    {
        return "base/sidebar.twig";
    }

    public function getDebugInfo()
    {
        return array (  73 => 17,  60 => 15,  56 => 14,  48 => 8,  35 => 6,  31 => 5,  26 => 2,  20 => 1,);
    }
}
