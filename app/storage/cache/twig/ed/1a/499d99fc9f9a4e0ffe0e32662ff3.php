<?php

/* forms/sensors.name.form.twig */
class __TwigTemplate_ed1a499d99fc9f9a4e0ffe0e32662ff3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base/hero.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base/hero.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <section style=\"padding-bottom: 20px\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <form method=\"POST\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "sensors"), "method"), "html", null, true);
        echo "\" class=\"form-horizontal\">
                    ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 9
            echo "                        <legend>Sensor ID: ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "</legend>
                        <div class=\"control-group\">
                            <label for=\"device[";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "]\" class=\"control-label\">Name</label>

                            <div class=\"controls\">
                                <input type=\"text\" name=\"device[";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "name"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                        <div class=\"control-group\">
                            <label for=\"device[";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "]\" class=\"control-label\">Calculation</label>

                            <div class=\"controls\">
                                <input type=\"text\" name=\"device[";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "]\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "calculation"), "html", null, true);
            echo "\">
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "                    <div class=\"form-actions\">
                        <button class=\"btn btn-primary\" type=\"submit\">Save changes</button>
                        <a href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "sensors"), "method"), "html", null, true);
        echo "\" class=\"btn\">Cancel</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "forms/sensors.name.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 27,  83 => 25,  71 => 21,  65 => 18,  56 => 14,  50 => 11,  44 => 9,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
