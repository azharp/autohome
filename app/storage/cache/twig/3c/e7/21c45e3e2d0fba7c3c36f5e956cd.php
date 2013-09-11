<?php

/* home.html.twig */
class __TwigTemplate_3ce721c45e3e2d0fba7c3c36f5e956cd extends Twig_Template
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
        <h1>Welcome to AutoHome!</h1>

        <p>
            Pada halaman ini anda dapat melihat status dari perangkat dan sensor yang terhubung pada sistem.
            Untuk mengubah pengaturan, klik tombol <strong>Ubah Pengaturan</strong>.
            Untuk mengirimkan perintah secara manual pergunakan fungsi <strong>Send Command</strong>, contoh: ketik \"r\" untuk mendapatkan nilai dari sensor.
        </p>
    </header>

    <section style=\"padding-bottom: 20px\">
        <div class=\"row-fluid\">
            <div class=\"span12\">
                <legend>Status Perangkat</legend>
                <table id=\"devices\" class=\"table table-striped table-hover narrow\">
                    <thead>
                    <tr>
                        <th class=\"\">Nama</th>
                        <th class=\"\">By Rule</th>
                        <th class=\"\">Actual</th>
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
                            <td>";
            // line 30
            echo (($this->getAttribute((isset($context["device_byrule"]) ? $context["device_byrule"] : null), ($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "port") - 1), array(), "array")) ? ("ON") : ("OFF"));
            echo "</td>
                            <td>";
            // line 31
            echo (($this->getAttribute((isset($context["device_value"]) ? $context["device_value"] : null), ($this->getAttribute((isset($context["device"]) ? $context["device"] : null), "port") - 1), array(), "array")) ? ("OFF") : ("ON"));
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['device'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "                    </tbody>
                </table>
                <p class=\"text-center\" style=\"margin-top: 20px;\"><a class=\"btn btn-small\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "devices_name"), "method"), "html", null, true);
        echo "\"><i
                                class=\"icon-edit\"></i> Ubah Pengaturan</a></p>
                <legend>Nilai Sensor</legend>
                <table id=\"devices\" class=\"table table-striped table-hover narrow\">
                    <thead>
                    <tr>
                        <th class=\"\">Nama</th>
                        <th class=\"\">Nilai</th>
                    </tr>
                    </thead>
                    <tbody>
                    ";
        // line 47
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sensors"]) ? $context["sensors"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["sensor"]) {
            // line 48
            echo "                        <tr>
                            <td><strong>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "name"), "html", null, true);
            echo "</strong></td>
                            <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["sensor_value"]) ? $context["sensor_value"] : null), $this->getAttribute((isset($context["sensor"]) ? $context["sensor"] : null), "port"), array(), "array"), "html", null, true);
            echo "</td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sensor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                    </tbody>
                </table>
                <p class=\"text-center\" style=\"margin-top: 20px;\"><a class=\"btn btn-small\" href=\"";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "sensors"), "method"), "html", null, true);
        echo "\"><i
                                class=\"icon-edit\"></i> Ubah Pengaturan</a></p>

                <form class=\"form-actions\" action=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "/"), "method"), "html", null, true);
        echo "\" method=\"POST\">
                    <h4>Send Command</h4>

                    <div class=\"control-group\">
                        <div class=\"controls input-append\">
                            <input type=\"text\" name=\"cmd\" id=\"cmd\" class=\"span10\">
                            <button type=\"submit\" class=\"btn\">Go!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
";
    }

    public function getTemplateName()
    {
        return "home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 58,  122 => 55,  118 => 53,  109 => 50,  105 => 49,  102 => 48,  98 => 47,  84 => 36,  80 => 34,  71 => 31,  67 => 30,  63 => 29,  60 => 28,  56 => 27,  31 => 4,  28 => 3,);
    }
}
