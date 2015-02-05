<?php

/* INCESComedorBundle:Usuario:_index_lunch.html.twig */
class __TwigTemplate_9557f686abb34e3c390ad04620dee881b350f6eea0c650882fb7174a8e502278 extends Twig_Template
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
        echo "
<div id=\"my-col-text\">

  <table>
    <tr class=\"tsearch\">
      <td>
        <h1>";
        // line 7
        echo "Last Users";
        echo "</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/searchalnc"), "method"), "html", null, true);
        echo "\" method=\"get\">
            <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/search.png"), "html", null, true);
        echo "\" class=\"searchbox_submit\" value=\"\" />
            <input autocomplete=\"off\" type=\"text\" class=\"text\" name=\"query\" value=\"";
        // line 13
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
        // line 24
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Day", "u.dia"), array("usuario" => "#!/usuario", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 26
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.dia"), "method")) {
            // line 27
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 29
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 31
        echo "              </div>
            </th>
            <th>
              ";
        // line 34
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cedula", "u.cedula"), array("usuario" => "#!/usuario", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 36
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.cedula"), "method")) {
            // line 37
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 39
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 41
        echo "              </div>
            </th>
            <th>
              ";
        // line 44
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Name", "u.nombre"), array("usuario" => "#!/usuario", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 46
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.nombre"), "method")) {
            // line 47
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 49
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 51
        echo "              </div>
            </th>
            <th>
              ";
        // line 54
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Last Name", "u.apellido"), array("usuario" => "#!/usuario", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 56
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.apellido"), "method")) {
            // line 57
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 59
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 61
        echo "              </div>
            </th>
            <th>Menu</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 67
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 68
            echo "        <p>";
            echo "There are not results";
            echo "</p>
        ";
        }
        // line 70
        echo "        ";
        // line 73
        echo "          <div id=\"dialog\" title=\"Cannot proceed\">
            <p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\"></span></p>
          </div>
          ";
        // line 76
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 77
            echo "          <tr class=\"tsearch\">
            <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
            <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "cedula", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 80
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "apellido", array()), "html", null, true);
            echo "</td>
            ";
            // line 82
            if (($this->getAttribute($context["entity"], "menu", array()) == "")) {
                // line 83
                echo "            <td>";
                echo "There is not information available";
                echo "</td>
            ";
            } else {
                // line 85
                echo "            <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "menu", array()), "html", null, true);
                echo "</td>
            ";
            }
            // line 87
            echo "            ";
            // line 100
            echo "            ";
            // line 116
            echo "          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "          ";
        // line 121
        echo "        </tbody>
      </table>
      ";
        // line 143
        echo "      ";
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 144
            echo "      <div class=\"navigation\">
        ";
            // line 145
            echo strtr($this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), array("usuario" => "#!/usuario", "searchafact" => "facturar"));
            echo "
      </div>
      ";
        }
        // line 148
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

    </div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:_index_lunch.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 148,  230 => 145,  227 => 144,  224 => 143,  220 => 121,  218 => 118,  211 => 116,  209 => 100,  207 => 87,  201 => 85,  195 => 83,  193 => 82,  189 => 81,  185 => 80,  181 => 79,  177 => 78,  174 => 77,  170 => 76,  165 => 73,  163 => 70,  157 => 68,  155 => 67,  147 => 61,  141 => 59,  135 => 57,  133 => 56,  128 => 54,  123 => 51,  117 => 49,  111 => 47,  109 => 46,  104 => 44,  99 => 41,  93 => 39,  87 => 37,  85 => 36,  80 => 34,  75 => 31,  69 => 29,  63 => 27,  61 => 26,  56 => 24,  42 => 13,  38 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
