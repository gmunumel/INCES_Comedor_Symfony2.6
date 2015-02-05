<?php

/* INCESComedorBundle:Menu:_list_facturar.html.twig */
class __TwigTemplate_18e2da42aff3900ffdca6ecd02fb5e73878c14d0b5c610a1b26bbeecd043c9e4 extends Twig_Template
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
        echo $this->env->getExtension('actions')->renderUri("INCESComedorBundle:Usuario:lunchToday", array());
        // line 5
        echo "      <br />
      <div class=\"center\">
        <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/newexterno"), "method"), "html", null, true);
        echo "\" ><button type=\"button\" >";
        echo "Create External User";
        echo "</button></a>
      </div>
    </div>
  </div>
</div>

<div id=\"col-text\">

  <table>
    <tr class=\"tsearch\">
      <td>
        <h1>";
        // line 18
        echo "Menu Bill";
        echo "</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/searchafact"), "method"), "html", null, true);
        echo "\" method=\"get\">
            <img src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/search.png"), "html", null, true);
        echo "\" class=\"searchbox_submit\" value=\"\" />
            <input autocomplete=\"off\" type=\"text\" class=\"text\" name=\"query\" value=\"";
        // line 24
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
        // line 34
        echo "Access";
        echo "</th>
            <th>
              ";
        // line 36
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cedula", "u.cedula"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 38
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.cedula"), "method")) {
            // line 39
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 41
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 43
        echo "              </div>
            </th>
            <th>
              ";
        // line 46
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Name", "u.nombre"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 48
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.nombre"), "method")) {
            // line 49
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 51
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 53
        echo "              </div>
            </th>
            <th>
              ";
        // line 56
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Last Name", "u.apellido"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 58
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.apellido"), "method")) {
            // line 59
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 61
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 63
        echo "              </div>
            </th>
            <th>
              ";
        // line 66
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Card", "u.ncarnet"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 68
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.ncarnet"), "method")) {
            // line 69
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 71
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 73
        echo "              </div>
            </th>
            <th>
              ";
        // line 76
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Rol", "r.nombre"), array("menu" => "#!/menu", "searchafact" => "facturar"));
        echo "
              <div>
                ";
        // line 78
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "r.nombre"), "method")) {
            // line 79
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 81
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 83
        echo "              </div>
            </th>
            <th>Imagen</th>
          </tr>
        </thead>
        <tbody>

        ";
        // line 90
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 91
            echo "        <p>";
            echo "There are not results";
            echo "</p>
        ";
        }
        // line 93
        echo "        ";
        // line 97
        echo "          <div id=\"dialog\" title=\"Cannot proceed\">
            <p><span class=\"ui-icon ui-icon-alert\" style=\"float:left; margin:0 7px 20px 0;\">
            </div>
            ";
        // line 100
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 101
            echo "            ";
            $context["hour"] = twig_date_format_filter($this->env, "now", "H");
            // line 102
            echo "            ";
            if ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStartAMPM", array()) == "pm") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "pm"))) {
                // line 103
                echo "            ";
                $context["hourStart"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array()) + 12);
                // line 104
                echo "            ";
                $context["hourEnd"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array()) + 12);
                // line 105
                echo "            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStartAMPM", array()) == "pm") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "am"))) {
                // line 106
                echo "            ";
                $context["hourStart"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array()) + 12);
                // line 107
                echo "            ";
                $context["hourEnd"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array());
                // line 108
                echo "            ";
            } elseif ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStartAMPM", array()) == "am") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "pm"))) {
                // line 109
                echo "            ";
                $context["hourStart"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array());
                // line 110
                echo "            ";
                $context["hourEnd"] = ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array()) + 12);
                // line 111
                echo "            ";
            } else {
                // line 112
                echo "            ";
                $context["hourStart"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerStart", array());
                // line 113
                echo "            ";
                $context["hourEnd"] = $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array());
                // line 114
                echo "            ";
            }
            // line 115
            echo "            ";
            if ((($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEndAMPM", array()) == "am") && ($this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "horaComerEnd", array()) == 12))) {
                // line 116
                echo "            ";
                $context["hourEnd"] = 24;
                // line 117
                echo "            ";
            }
            // line 118
            echo "            ";
            $context["_lncTd"] = false;
            // line 119
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["userLncTd"]) ? $context["userLncTd"] : $this->getContext($context, "userLncTd")));
            foreach ($context['_seq'] as $context["_key"] => $context["lncTd"]) {
                // line 120
                echo "            ";
                if (($this->getAttribute($this->getAttribute($context["lncTd"], "usuario", array()), "id", array()) == $this->getAttribute($context["entity"], "id", array()))) {
                    // line 121
                    echo "            ";
                    $context["_lncTd"] = true;
                    // line 122
                    echo "            ";
                }
                // line 123
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lncTd'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 124
            echo "
            <tr>
              ";
            // line 126
            if (((((isset($context["hour"]) ? $context["hour"] : $this->getContext($context, "hour")) >= (isset($context["hourStart"]) ? $context["hourStart"] : $this->getContext($context, "hourStart"))) && ((isset($context["hour"]) ? $context["hour"] : $this->getContext($context, "hour")) <= (isset($context["hourEnd"]) ? $context["hourEnd"] : $this->getContext($context, "hourEnd")))) &&  !(isset($context["_lncTd"]) ? $context["_lncTd"] : $this->getContext($context, "_lncTd")))) {
                // line 127
                echo "              <td><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/showfacturar\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/check.gif"), "html", null, true);
                echo "\" alt=\"img\" height=\"30\" width=\"30\" /></a></td>
              <td>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 129
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 130
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ncarnet", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 132
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rol", array()), "html", null, true);
                echo "</td>
              ";
                // line 133
                if (($this->getAttribute($context["entity"], "image", array()) == "")) {
                    // line 134
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/guest_user.png"), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                } else {
                    // line 136
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "image", array()), array("/tmp/" => "")), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                }
                // line 138
                echo "              ";
            } else {
                // line 139
                echo "              <td><a class=\"opener\" href=\"\" value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/showfacturar\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uncheck.jpg"), "html", null, true);
                echo "\" alt=\"img\" height=\"30\" width=\"30\" /></a></td>
              <td>";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 141
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ncarnet", array()), "html", null, true);
                echo "</td>
              <td>";
                // line 144
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "rol", array()), "html", null, true);
                echo "</td>
              ";
                // line 145
                if (($this->getAttribute($context["entity"], "image", array()) == "")) {
                    // line 146
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/guest_user.png"), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                } else {
                    // line 148
                    echo "              <td><img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
                    echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "image", array()), array("/tmp/" => "")), "html", null, true);
                    echo "\" width=\"75\" height=\"75\" alt=\"\" /></td>
              ";
                }
                // line 150
                echo "              ";
            }
            // line 151
            echo "            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "            ";
        // line 169
        echo "            </tbody>
          </table>
          ";
        // line 198
        echo "          ";
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 199
            echo "          <div class=\"navigation\">
            ";
            // line 200
            echo strtr($this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), array("menu" => "#!/menu", "searchafact" => "facturar"));
            echo "
          </div>
          ";
        }
        // line 203
        echo "
          <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

        </div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:_list_facturar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  422 => 204,  419 => 203,  413 => 200,  410 => 199,  407 => 198,  403 => 169,  401 => 153,  394 => 151,  391 => 150,  384 => 148,  378 => 146,  376 => 145,  372 => 144,  368 => 143,  364 => 142,  360 => 141,  356 => 140,  348 => 139,  345 => 138,  338 => 136,  332 => 134,  330 => 133,  326 => 132,  322 => 131,  318 => 130,  314 => 129,  310 => 128,  302 => 127,  300 => 126,  296 => 124,  290 => 123,  287 => 122,  284 => 121,  281 => 120,  276 => 119,  273 => 118,  270 => 117,  267 => 116,  264 => 115,  261 => 114,  258 => 113,  255 => 112,  252 => 111,  249 => 110,  246 => 109,  243 => 108,  240 => 107,  237 => 106,  234 => 105,  231 => 104,  228 => 103,  225 => 102,  222 => 101,  218 => 100,  213 => 97,  211 => 93,  205 => 91,  203 => 90,  194 => 83,  188 => 81,  182 => 79,  180 => 78,  175 => 76,  170 => 73,  164 => 71,  158 => 69,  156 => 68,  151 => 66,  146 => 63,  140 => 61,  134 => 59,  132 => 58,  127 => 56,  122 => 53,  116 => 51,  110 => 49,  108 => 48,  103 => 46,  98 => 43,  92 => 41,  86 => 39,  84 => 38,  79 => 36,  74 => 34,  61 => 24,  57 => 23,  53 => 22,  46 => 18,  30 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
