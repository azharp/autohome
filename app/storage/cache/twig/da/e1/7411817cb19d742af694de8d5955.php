<?php

/* forms/timer.form.twig */
class __TwigTemplate_dae17411817cb19d742af694de8d5955 extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "new_timer"), "method"), "html", null, true);
        echo "\" class=\"form-horizontal\">
                    <input type=\"hidden\" name=\"id\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "id"), "html", null, true);
        echo "\">
                    <div class=\"control-group\">
                        <label for=\"days[]\" class=\"control-label\">Days of week</label>
                        <div class=\"controls\">
                            <label class=\"checkbox inline\"><input type=\"checkbox\" ";
        // line 12
        if (twig_in_filter(0, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "days"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"0\" name=\"days[]\">Sun</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" ";
        // line 13
        if (twig_in_filter(1, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "days"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"1\" name=\"days[]\">Mon</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" ";
        // line 14
        if (twig_in_filter(2, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "days"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"2\" name=\"days[]\">Tue</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" ";
        // line 15
        if (twig_in_filter(3, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "days"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"3\" name=\"days[]\">Wed</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" ";
        // line 16
        if (twig_in_filter(4, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "days"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"4\" name=\"days[]\">Thu</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" ";
        // line 17
        if (twig_in_filter(5, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "days"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"5\" name=\"days[]\">Fri</label>
                            <label class=\"checkbox inline\"><input type=\"checkbox\" ";
        // line 18
        if (twig_in_filter(6, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "days"))) {
            echo "checked=\"checked\"";
        }
        echo " value=\"6\" name=\"days[]\">Sat</label>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"time1\" class=\"control-label\">Start at</label>
                        <div class=\"controls\">
                            <div class=\"bfh-timepicker\" data-time=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time1"), "html", null, true);
        echo "\">
                                <div data-toggle=\"bfh-timepicker\" class=\"input-prepend bfh-timepicker-toggle\">
                                    <span class=\"add-on\"><i class=\"icon-time\"></i></span>
                                    <input type=\"text\" readonly=\"\" name=\"time1\" class=\"input-medium\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time1"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"bfh-timepicker-popover\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td class=\"hour\">
                                                <a href=\"#\" class=\"next\"><i class=\"icon-chevron-up\"></i></a><br>
                                                <input type=\"text\" readonly=\"\" class=\"input-mini\"><br>
                                                <a href=\"#\" class=\"previous\"><i class=\"icon-chevron-down\"></i></a>
                                            </td>
                                            <td class=\"separator\">:</td>
                                            <td class=\"minute\">
                                                <a href=\"#\" class=\"next\"><i class=\"icon-chevron-up\"></i></a><br>
                                                <input type=\"text\" readonly=\"\" class=\"input-mini\"><br>
                                                <a href=\"#\" class=\"previous\"><i class=\"icon-chevron-down\"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"time2\" class=\"control-label\">Stop at</label>
                        <div class=\"controls\">
                            <div class=\"bfh-timepicker\" data-time=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time2"), "html", null, true);
        echo "\">
                                <div data-toggle=\"bfh-timepicker\" class=\"input-prepend bfh-timepicker-toggle\">
                                    <span class=\"add-on\"><i class=\"icon-time\"></i></span>
                                    <input type=\"text\" readonly=\"\" name=\"time2\" class=\"input-medium\" value=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time2"), "html", null, true);
        echo "\">
                                </div>
                                <div class=\"bfh-timepicker-popover\">
                                    <table class=\"table\">
                                        <tbody>
                                        <tr>
                                            <td class=\"hour\">
                                                <a href=\"#\" class=\"next\"><i class=\"icon-chevron-up\"></i></a><br>
                                                <input type=\"text\" readonly=\"\" class=\"input-mini\"><br>
                                                <a href=\"#\" class=\"previous\"><i class=\"icon-chevron-down\"></i></a>
                                            </td>
                                            <td class=\"separator\">:</td>
                                            <td class=\"minute\">
                                                <a href=\"#\" class=\"next\"><i class=\"icon-chevron-up\"></i></a><br>
                                                <input type=\"text\" readonly=\"\" class=\"input-mini\"><br>
                                                <a href=\"#\" class=\"previous\"><i class=\"icon-chevron-down\"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"control-group\">
                        <label for=\"description\" class=\"control-label\">Description</label>
                        <div class=\"controls\">
                            <textarea name=\"description\">";
        // line 84
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "description"), "html", null, true);
        echo "</textarea>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <button name=\"sensor_edit\" class=\"btn btn-primary\" type=\"submit\">Save changes</button>
                        <a href=\"";
        // line 89
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
        return "forms/timer.form.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 89,  166 => 84,  136 => 57,  130 => 54,  100 => 27,  94 => 24,  83 => 18,  77 => 17,  71 => 16,  65 => 15,  59 => 14,  53 => 13,  47 => 12,  40 => 8,  36 => 7,  31 => 4,  28 => 3,);
    }
}
