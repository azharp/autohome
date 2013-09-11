<?php

/* forms/sensor.form.twig */
class __TwigTemplate_f49174538a6a72d520290703e8191919 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "new_sensor"), "method"), "html", null, true);
        echo "\" class=\"form-horizontal\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
        echo "\">

                    <div class=\"control-group\">
                        <label for=\"sensor_id\" class=\"control-label\">Sensor</label>

                        <div class=\"controls\">
                            <select name=\"sensor_id\">
                                <option value=\"1\" ";
        // line 15
        if ((1 == $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "sensor_id"))) {
            echo "selected=\"selected\"";
        }
        echo ">
                                    Temperature sensor
                                </option>
                                <option value=\"2\" ";
        // line 18
        if ((2 == $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "sensor_id"))) {
            echo "selected=\"selected\"";
        }
        echo ">Light
                                    sensor
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"operator\" class=\"control-label\">Operator</label>

                        <div class=\"controls\">
                            <select name=\"operator\">
                                <option value=\"&gt;\" ";
        // line 29
        if ((">" == $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "operator"))) {
            echo "selected=\"selected\"";
        }
        echo ">More
                                    than (value1)
                                </option>
                                <option value=\"&lt;\" ";
        // line 32
        if (("<" == $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "operator"))) {
            echo "selected=\"selected\"";
        }
        echo ">Less
                                    than (value1)
                                </option>
                                <option value=\"&lt;&gt;\" ";
        // line 35
        if (("<>" == $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "operator"))) {
            echo "selected=\"selected\"";
        }
        echo ">
                                    Between (value1 &amp; value2)
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"value1\" class=\"control-label\">Value1</label>

                        <div class=\"controls\">
                            <input type=\"text\" name=\"value1\" value=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "value1"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"value2\" class=\"control-label\">Value2</label>

                        <div class=\"controls\">
                            <input type=\"text\" name=\"value2\" value=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "value2"), "html", null, true);
        echo "\">
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"description\" class=\"control-label\">Description</label>

                        <div class=\"controls\">
                            <textarea name=\"description\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "description"), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <button class=\"btn btn-primary\" type=\"submit\">Save changes</button>
                        <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "rules"), "method"), "html", null, true);
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
        return "forms/sensor.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 64,  125 => 59,  115 => 52,  105 => 45,  90 => 35,  82 => 32,  74 => 29,  58 => 18,  50 => 15,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
