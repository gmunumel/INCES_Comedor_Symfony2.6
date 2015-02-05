<?php

/* INCESComedorBundle:UsuarioMenu:_index.html.twig */
class __TwigTemplate_0a7c24c0d1dbe79d81437f18f1c00143f32c648f7cc2fb9fb4854f8d21a329ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"col-browser\">";
        // line 2
        echo "</div>

<div id=\"col-text\">
  <table>
    <tr class=\"tsearch\">
      <td>
        <h1>";
        // line 8
        echo "List Users";
        echo " Menu</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuariomenu/searcha"), "method"), "html", null, true);
        echo "\" method=\"get\">
            <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/search.png"), "html", null, true);
        echo "\" class=\"searchbox_submit\" value=\"\" />
            <input autocomplete=\"off\" type=\"text\" class=\"text\" name=\"query\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["query"]) ? $context["query"] : $this->getContext($context, "query")), "html", null, true);
        echo "\" id=\"search_keywords\" />
            <input type=\"submit\" value=\"search\" style=\"display:none;\"/>
          </form>
        </div>
        <td>
        </tr>
      </table>
      <table class=\"bordered\">
        <thead>
          <tr>
            <th>
              ";
        // line 25
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Day", "um.dia"), array("usuariomenu" => "#!/usuariomenu"));
        echo "
              <div>
                ";
        // line 27
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "um.dia"), "method")) {
            // line 28
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 30
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 32
        echo "              </div>
            </th>
            <th>";
        // line 34
        echo "User";
        echo "</th>
            <th>Menu</th>
            <th>";
        // line 36
        echo "Actions";
        echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 40
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 41
            echo "        <p>";
            echo "There are not results";
            echo "</p>
        ";
        }
        // line 43
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 44
            echo "        <tr>
          <td>";
            // line 45
            if ($this->getAttribute($context["entity"], "dia", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
          <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "usuario", array()), "html", null, true);
            echo "</td>
          ";
            // line 47
            if (($this->getAttribute($context["entity"], "menu", array()) != "")) {
                // line 48
                echo "          <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "menu", array()), "html", null, true);
                echo "</td>
          ";
            } else {
                // line 50
                echo "          <td>";
                echo "There is not information available";
                echo "</td>
          ";
            }
            // line 52
            echo "          <td>
            <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuariomenu/"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "/show\">";
            echo "Show";
            echo "</a>
          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "        </tbody>
      </table>

      ";
        // line 60
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 61
            echo "      <div class=\"navigation\">
        ";
            // line 62
            echo strtr($this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), array("usuariomenu" => "#!/usuariomenu"));
            echo "
      </div>
      ";
        }
        // line 65
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
    </div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:UsuarioMenu:_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 65,  159 => 62,  156 => 61,  154 => 60,  149 => 57,  136 => 53,  133 => 52,  127 => 50,  121 => 48,  119 => 47,  115 => 46,  109 => 45,  106 => 44,  101 => 43,  95 => 41,  93 => 40,  86 => 36,  81 => 34,  77 => 32,  71 => 30,  65 => 28,  63 => 27,  58 => 25,  44 => 14,  40 => 13,  36 => 12,  29 => 8,  21 => 2,  19 => 1,);
    }
}
