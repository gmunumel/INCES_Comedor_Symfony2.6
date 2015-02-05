<?php

/* INCESComedorBundle:Menu:_index_facturar.html.twig */
class __TwigTemplate_cc8531c24a5f4c4e67373b85ac616924ef33a8724874cdf2a98b1afa4ad5c691 extends Twig_Template
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
        echo "<div id=\"col-browser\">
  <div class=\"side-dock\">
    <div class=\"social-block\">
      ";
        // line 4
        echo $this->env->getExtension('http_kernel')->renderFragmentStrategy("hinclude", $this->env->getExtension('http_kernel')->controller("INCESComedorBundle:Usuario:lunch_Today"));
        echo "
      <br />
      <div class=\"center\">
        <a class=\"mya\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/contabilidad/reporteingresostoday"), "method"), "html", null, true);
        echo "\" >
          <button class=\"mybutton2\" type=\"button\" >";
        // line 8
        echo "Income Report";
        echo "</button>
        </a>
      </div>
      <br />
      <div class=\"center\">
        <a class=\"mya\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/newexterno"), "method"), "html", null, true);
        echo "\" >
          <button class=\"mybutton2\" type=\"button\" >";
        // line 14
        echo "Create External User";
        echo "</button>
        </a>
      </div>
    </div>
  </div>
</div>

<div id=\"col-text\">

  <table>
    <tr class=\"tsearch\">
      <td>
        <h1>";
        // line 26
        echo "Menu Bill";
        echo "</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/searchafact"), "method"), "html", null, true);
        echo "\" method=\"get\">
            <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/search.png"), "html", null, true);
        echo "\" class=\"searchbox_submit\" value=\"\" />
            <input autocomplete=\"off\" type=\"text\" class=\"text\" name=\"query\" value=\"";
        // line 32
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
            <th>";
        // line 42
        echo "Access";
        echo "</th>
            <th>
              ";
        // line 44
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cedula", "u.cedula"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 46
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.cedula"), "method")) {
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
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Name", "u.nombre"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 56
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.nombre"), "method")) {
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
            <th>
              ";
        // line 64
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Last Name", "u.apellido"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 66
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.apellido"), "method")) {
            // line 67
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 69
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 71
        echo "              </div>
            </th>
            <th>
              ";
        // line 74
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Card", "u.ncarnet"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 76
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.ncarnet"), "method")) {
            // line 77
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 79
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 81
        echo "              </div>
            </th>
            <th>
              ";
        // line 84
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Rol", "r.nombre"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 86
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "r.nombre"), "method")) {
            // line 87
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 89
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 91
        echo "              </div>
            </th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 97
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 98
            echo "        <p>";
            echo "There are not results";
            echo "</p>
        ";
        }
        // line 100
        echo "        ";
        // line 103
        echo "          <div id=\"dialog\" title=\"Cannot proceed\">
            <p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\">
            </div>
            ";
        // line 106
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 107
            echo "            ";
            $context["hour"] = twig_date_format_filter($this->env, "now", "H");
            // line 108
            echo "            ";
            if ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStartAMPM", array()) == "pm") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "pm"))) {
                // line 109
                echo "            ";
                $context["hourStart"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array()) + 12);
                // line 110
                echo "            ";
                $context["hourEnd"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array()) + 12);
                // line 111
                echo "            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStartAMPM", array()) == "pm") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "am"))) {
                // line 112
                echo "            ";
                $context["hourStart"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array()) + 12);
                // line 113
                echo "            ";
                $context["hourEnd"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array());
                // line 114
                echo "            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStartAMPM", array()) == "am") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "pm"))) {
                // line 115
                echo "            ";
                $context["hourStart"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array());
                // line 116
                echo "            ";
                $context["hourEnd"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array()) + 12);
                // line 117
                echo "            ";
            } else {
                // line 118
                echo "            ";
                $context["hourStart"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array());
                // line 119
                echo "            ";
                $context["hourEnd"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array());
                // line 120
                echo "            ";
            }
            // line 121
            echo "            ";
            if ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "am") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array()) == 12))) {
                // line 122
                echo "            ";
                $context["hourEnd"] = 24;
                // line 123
                echo "            ";
            }
            // line 124
            echo "            ";
            $context["_lncTd"] = false;
            // line 125
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userLncTd"]) ? $context["userLncTd"] : $this->getContext($context, "userLncTd")));
            foreach ($context['_seq'] as $context["_key"] => $context["lncTd"]) {
                // line 126
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["lncTd"], "usuario", array()), "id", array()) == $this->getAttribute($context["entity"], "id", array()))) {
                    // line 127
                    echo "            ";
                    $context["_lncTd"] = true;
                    // line 128
                    echo "            ";
                }
                // line 129
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lncTd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 130
            echo "
            <tr>
              ";
            // line 132
            if (((((isset($context["hour"]) ? $context["hour"] : $this->getContext($context, "hour")) >= (isset($context["hourStart"]) ? $context["hourStart"] : $this->getContext($context, "hourStart"))) && ((isset($context["hour"]) ? $context["hour"] : $this->getContext($context, "hour")) <= (isset($context["hourEnd"]) ? $context["hourEnd"] : $this->getContext($context, "hourEnd")))) &&  !(isset($context["_lncTd"]) ? $context["_lncTd"] : $this->getContext($context, "_lncTd")))) {
                // line 133
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/showfacturar\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/check.gif"), "html", null, true);
                echo "\" alt=\"img\" height=\"30\" width=\"30\" /></a></td>
              <td>";
                // line 134
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 135
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 136
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ncarnet", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 138
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rol", array()), "html", null, true);
                echo "</td>
              ";
                // line 139
                if (($this->getAttribute($context["entity"], "image", array()) == "")) {
                    // line 140
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/guest_user.png"), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                } else {
                    // line 142
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "image", array()), array("/tmp/" => "")), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                }
                // line 144
                echo "              ";
            } else {
                // line 145
                echo "              <td><a class=\"opener\" href=\"\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/showfacturar\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uncheck.jpg"), "html", null, true);
                echo "\" alt=\"img\" height=\"30\" width=\"30\" /></a></td>
              <td>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 147
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 148
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ncarnet", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 150
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rol", array()), "html", null, true);
                echo "</td>
              ";
                // line 151
                if (($this->getAttribute($context["entity"], "image", array()) == "")) {
                    // line 152
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/guest_user.png"), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                } else {
                    // line 154
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "image", array()), array("/tmp/" => "")), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                }
                // line 156
                echo "              ";
            }
            // line 157
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 159
        echo "            ";
        // line 162
        echo "          </tbody>
        </table>
        ";
        // line 184
        echo "        ";
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 185
            echo "        <div class=\"navigation\">
          ";
            // line 186
            echo strtr($this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), array("menu" => "#!/menu", "searchafact" => "facturar"));
            echo "
        </div>
        ";
        }
        // line 189
        echo "        <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

      </div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:_index_facturar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  433 => 189,  427 => 186,  424 => 185,  421 => 184,  417 => 162,  415 => 159,  408 => 157,  405 => 156,  398 => 154,  392 => 152,  390 => 151,  386 => 150,  382 => 149,  378 => 148,  374 => 147,  370 => 146,  362 => 145,  359 => 144,  352 => 142,  346 => 140,  344 => 139,  340 => 138,  336 => 137,  332 => 136,  328 => 135,  324 => 134,  316 => 133,  314 => 132,  310 => 130,  304 => 129,  301 => 128,  298 => 127,  295 => 126,  290 => 125,  287 => 124,  284 => 123,  281 => 122,  278 => 121,  275 => 120,  272 => 119,  269 => 118,  266 => 117,  263 => 116,  260 => 115,  257 => 114,  254 => 113,  251 => 112,  248 => 111,  245 => 110,  242 => 109,  239 => 108,  236 => 107,  232 => 106,  227 => 103,  225 => 100,  219 => 98,  217 => 97,  209 => 91,  203 => 89,  197 => 87,  195 => 86,  190 => 84,  185 => 81,  179 => 79,  173 => 77,  171 => 76,  166 => 74,  161 => 71,  155 => 69,  149 => 67,  147 => 66,  142 => 64,  137 => 61,  131 => 59,  125 => 57,  123 => 56,  118 => 54,  113 => 51,  107 => 49,  101 => 47,  99 => 46,  94 => 44,  89 => 42,  76 => 32,  72 => 31,  68 => 30,  61 => 26,  46 => 14,  42 => 13,  34 => 8,  30 => 7,  24 => 4,  19 => 1,);
    }
}
