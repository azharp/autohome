<?php

/* devices.html.twig */
class __TwigTemplate_23910dd0792a83f360938619d95ccc4c extends Twig_Template
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
        echo "    <header>
        <h1>Pengaturan Perangkat</h1>

        <p>
            Halaman ini dipergunakan untuk mengubah pengaturan perangkat yang terhubung dengan sistem.
            Anda dapat menggunakan pengaturan berdasarkan waktu (Timer Rules) dan pengaturan berdasarkan sensor (Sensor Rules).
            Anda dapat menggunakan lebih dari 1 pengaturan pada sebuah perangkat.
        </p>
    </header>

    <section style=\"padding-bottom: 20px\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <table id=\"devices\" class=\"table table-striped table-hover\">
                    <caption><h4>Devices</h4></caption>
                    <thead>
                    <tr>
                        <th class=\"name\">Name</th>
                        <th class=\"description\">Attached Rule(s)</th>
                        <th class=\"state\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 28
            echo "                        <tr>
                            <td><strong>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "name"), "html", null, true);
            echo "</strong></td>
                            <td>
                                ";
            // line 31
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "sharedRuletimer"));
            foreach ($context['_seq'] as $context["_key"] => $context["timer"]) {
                // line 32
                echo "                                    <div class=\"rules\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time1"), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time2"), "html", null, true);
                echo " (";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "realdays"), "html", null, true);
                echo ") <a
                                                href=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "detach"), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "id"), "html", null, true);
                echo "/t";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "id"), "html", null, true);
                echo "\"><i
                                                    class=\"icon-trash\"></i></a></div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 36
            echo "                                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "sharedRulesensor"));
            foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
                // line 37
                echo "                                    <div class=\"rules\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "name"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "operator"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "value1"), "html", null, true);
                echo " <a
                                                href=\"";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "detach"), "method"), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "id"), "html", null, true);
                echo "/s";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
                echo "\"><i
                                                    class=\"icon-trash\"></i></a></div>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                            </td>
                            <td>
                                <div class=\"device-state\">
                                    <a class=\"btn btn-mini ";
            // line 44
            if (($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "status") == 1)) {
                echo "btn-success";
            }
            echo "\"
                                       href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "state"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "id"), "html", null, true);
            echo "/1\">Enabled</a>
                                    <a class=\"btn btn-mini ";
            // line 46
            if (($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "status") == 0)) {
                echo "btn-inverse";
            }
            echo "\"
                                       href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "state"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "id"), "html", null, true);
            echo "/0\">Disabled</a>
                                    <a class=\"btn btn-mini ";
            // line 48
            if (($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "status") == 3)) {
                echo "btn-warning";
            }
            echo "\"
                                       href=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "state"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "id"), "html", null, true);
            echo "/3\">Force
                                        ON</a>
                                </div>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </tbody>
                </table>
                <form class=\"inline form-actions\" method=\"POST\" action=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "attach"), "method"), "html", null, true);
        echo "\">
                    <h4>Attach rule to device</h4>
                    <select name=\"device_id\">
                        ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["devices"]) ? $context["devices"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["device"]) {
            // line 61
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["device"]) ? $context["device"] : null), "name"), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                    </select>

                    <div class=\"input-append\">
                        <select id=\"appendedInputButton\" name=\"rule_id\">
                            <optgroup label=\"Timer Rules\">
                                ";
        // line 68
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timers"]) ? $context["timers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["timer"]) {
            // line 69
            echo "                                    <option value=\"t";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time1"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time2"), "html", null, true);
            echo "
                                        (";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "realdays"), "html", null, true);
            echo ")
                                    </option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 73
        echo "                            </optgroup>
                            <optgroup label=\"Sensor Rules\">
                                ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 76
            echo "                                    <option value=\"s";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "name"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "operator"), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "value1"), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                            </optgroup>
                        </select>
                        <input type=\"submit\" style=\"height: 30px;\" value=\"Attach rule\" class=\"btn btn-primary\">
                    </div>
                </form>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "devices.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  247 => 78,  232 => 76,  228 => 75,  224 => 73,  215 => 70,  206 => 69,  202 => 68,  195 => 63,  184 => 61,  180 => 60,  174 => 57,  170 => 55,  156 => 49,  150 => 48,  144 => 47,  138 => 46,  132 => 45,  126 => 44,  121 => 41,  108 => 38,  99 => 37,  94 => 36,  81 => 33,  72 => 32,  68 => 31,  63 => 29,  60 => 28,  56 => 27,  31 => 4,  28 => 3,);
    }
}
