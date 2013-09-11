<?php

/* rules.html.twig */
class __TwigTemplate_2abcfd583f9f3f41a47521d999311f9d extends Twig_Template
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
        <h1>Pengaturan</h1>

        <p>
            Pada halaman ini anda dapat mengubah aturan yang akan digunakan pada perangkat yang terhubung dengan sistem.
            Untuk membuat pengaturan berdasarkan waktu klik tombol <strong>Timer Rule</strong>.
            Untuk membuat pengaturan berdasarkan nilai sensor klik <strong>Sensor Rule</strong>.
        </p>
    </header>

    <section style=\"padding-bottom: 20px\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <table class=\"table table-striped table-hover\">
                    <caption><h4>Timer Rules</h4></caption>
                    <thead>
                    <tr>
                        <th class=\"\">Start</th>
                        <th class=\"\">Stop</th>
                        <th class=\"status\">Hari</th>
                        <th>Description</th>
                        <th class=\"action\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["timers"]) ? $context["timers"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["timer"]) {
            // line 30
            echo "                        <tr>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time1"), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "time2"), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "realdays"), "html", null, true);
            echo "</td>
                            <td><div class=\"description\">";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "description"), "html", null, true);
            echo "</div></td>
                            <td>
                                <form action=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "new_timer"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "id"), "html", null, true);
            echo "\" method=\"POST\">
                                    <a class=\"btn btn-mini\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "new_timer"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["timer"]) ? $context["timer"] : null), "id"), "html", null, true);
            echo "\"><i
                                                class=\"icon-edit\"></i></a>
                                    <input type=\"hidden\" name=\"_METHOD\" value=\"DELETE\"/>
                                    <button class=\"btn btn-mini\" type=\"submit\"><i class=\"icon-trash\"></i></button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['timer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "                    </tbody>
                </table>
                <hr>
                <table class=\"table table-striped table-hover\">
                    <caption><h4>Sensor Rules</h4></caption>
                    <thead>
                    <tr>
                        <th class=\"\">Sensor</th>
                        <th class=\"status\">Op</th>
                        <th class=\"\">Value1</th>
                        <th class=\"\">Value2</th>
                        <th>Description</th>
                        <th class=\"action\">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 61
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 62
            echo "                        <tr>
                            <td>";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "name"), "html", null, true);
            echo "</td>
                            <td>";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "operator"), "html", null, true);
            echo "</td>
                            <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "value1"), "html", null, true);
            echo "</td>
                            <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "value2"), "html", null, true);
            echo "</td>
                            <td><div class=\"description\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "description"), "html", null, true);
            echo "</div></td>
                            <td>
                                <form action=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "new_sensor"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "\" method=\"POST\">
                                    <a class=\"btn btn-mini\" href=\"";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "new_sensor"), "method"), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "id"), "html", null, true);
            echo "\"><i
                                                class=\"icon-edit\"></i></a>
                                    <input type=\"hidden\" name=\"_METHOD\" value=\"DELETE\"/>
                                    <button class=\"btn btn-mini\" type=\"submit\"><i class=\"icon-trash\"></i></button>
                                </form>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        echo "                    </tbody>
                </table>
                <div class=\"form-actions\">
                    <h4>Create new rule</h4>
                    <a class=\"btn btn-success\" href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "timer"), "method"), "html", null, true);
        echo "\">Timer Rule</a>
                    <a class=\"btn btn-info\" href=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "sensor"), "method"), "html", null, true);
        echo "\">Sensor Rule</a>
                </div>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "rules.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 83,  178 => 82,  172 => 78,  156 => 70,  150 => 69,  145 => 67,  141 => 66,  137 => 65,  133 => 64,  129 => 63,  126 => 62,  122 => 61,  104 => 45,  88 => 37,  82 => 36,  77 => 34,  73 => 33,  69 => 32,  65 => 31,  62 => 30,  58 => 29,  31 => 4,  28 => 3,);
    }
}
