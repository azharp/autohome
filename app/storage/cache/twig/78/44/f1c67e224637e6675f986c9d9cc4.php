<?php

/* demo.html.twig */
class __TwigTemplate_7844f1c67e224637e6675f986c9d9cc4 extends Twig_Template
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
        echo "            <header>
                <a href=\"https://github.com/vanting/RedSlim\"><h1>Welcome to RedSlim!</h1></a>
                <p>
                Congratulations! Your RedSlim application is running.
                This framework is composed of a few popular components. If this is
                your first time using RedSlim, start with the introduction of these components in the left menu.
                </p>
            </header>

            <section style=\"padding-top: 20px\">
                <h3>Say HI to me~</h3>
                <form method=\"post\" action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "guest_comment"), "method"), "html", null, true);
        echo "\">
                  <div class=\"input-prepend\">
                    <span class=\"add-on\">@</span>
                    <input class=\"input-medium\" name=\"name\" id=\"name\" type=\"text\" placeholder=\"Anonymous\">
                  </div>
                  <div class=\"input-append\">
                    <input class=\"input-xxlarge\" name=\"message\" id=\"message\" type=\"text\" placeholder=\"What's on your mind?\">
                    <button class=\"btn\" type=\"submit\">Post</button>
                  </div>
                </form>
            </section>

            <section style=\"padding-bottom: 20px\">
                <p>
                    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : null), "urlFor", array(0 => "api_comment_json"), "method"), "html", null, true);
        echo "\"> >> Get these messages in json format</a>
                </p>
                <div class=\"row-fluid\">
                    <div class=\"span8\">
                        <table class=\"table table-striped table-condensed table-hover\">
                            <thead>
                             <tr>
                                 <th>Who</th>
                                 <th>Message</th>
                             </tr>
                         </thead>
                             <tbody>
                             ";
        // line 41
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["guests"]) ? $context["guests"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["guest"]) {
            // line 42
            echo "                                 <tr>
                                     <td>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "modify_date"), "html", null, true);
            echo " @";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "name"), "html", null, true);
            echo "</td>
                                     <td>";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["guest"]) ? $context["guest"] : null), "message"), "html", null, true);
            echo "</td>
                                 </tr>
                             ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['guest'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                             </tbody>
                         </table>
                    </div>
                </div>
            </section>
";
    }

    public function getTemplateName()
    {
        return "demo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 47,  89 => 44,  83 => 43,  80 => 42,  76 => 41,  61 => 29,  44 => 15,  31 => 4,  28 => 3,);
    }
}
