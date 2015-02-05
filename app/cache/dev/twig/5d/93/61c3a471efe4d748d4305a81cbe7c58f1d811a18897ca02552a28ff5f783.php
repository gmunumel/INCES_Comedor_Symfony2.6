<?php

/* INCESComedorBundle:Menu:_list.html.twig */
class __TwigTemplate_5d9361c3a471efe4d748d4305a81cbe7c58f1d811a18897ca02552a28ff5f783 extends Twig_Template
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
        // line 6
        echo "List Menus";
        echo "</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/search"), "method"), "html", null, true);
        echo "\" method=\"get\">
            <img src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/search.png"), "html", null, true);
        echo "\" class=\"searchbox_submit\" value=\"\" />
            <input autocomplete=\"off\" type=\"text\" class=\"text\" name=\"query\" value=\"";
        // line 12
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
        // line 23
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "First Plate", "m.seco"), array("menu" => "#!/menu"));
        echo "
              <div>
                ";
        // line 25
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "m.seco"), "method")) {
            // line 26
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 28
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 30
        echo "              </div>
            </th>
            <th>
              ";
        // line 33
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Soup", "m.sopa"), array("menu" => "#!/menu"));
        echo "
              <div>
                ";
        // line 35
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "m.sopa"), "method")) {
            // line 36
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 38
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 40
        echo "              </div>
            </th>
            <th>
              ";
        // line 43
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Second Plate", "m.salado"), array("menu" => "#!/menu"));
        echo "
              <div>
                ";
        // line 45
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "m.salado"), "method")) {
            // line 46
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 48
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 50
        echo "              </div>
            </th>
            <th>
              ";
        // line 53
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Juice", "m.jugo"), array("menu" => "#!/menu"));
        echo "
              <div>
                ";
        // line 55
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "m.jugo"), "method")) {
            // line 56
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 58
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 60
        echo "              </div>
            </th>
            <th>
              ";
        // line 63
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Salad", "m.ensalada"), array("menu" => "#!/menu"));
        echo "
              <div>
                ";
        // line 65
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "m.ensalada"), "method")) {
            // line 66
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 68
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 70
        echo "              </div>
            </th>
            <th>
              ";
        // line 73
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Dessert", "m.postre"), array("menu" => "#!/menu"));
        echo "
              <div>
                ";
        // line 75
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "m.postre"), "method")) {
            // line 76
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 78
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 80
        echo "              </div>
            </th>
            <th>
              ";
        // line 83
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Day", "m.dia"), array("menu" => "#!/menu"));
        echo "
              <div>
                ";
        // line 85
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "m.dia"), "method")) {
            // line 86
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 88
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 90
        echo "              </div>
            </th>
            <th>";
        // line 92
        echo "Actions";
        echo "</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 96
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 97
            echo "        <p>";
            echo "There are not results";
            echo "</p>
        ";
        }
        // line 99
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 100
            echo "        <tr>
          <td>";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "seco", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sopa", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "salado", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "jugo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ensalada", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 106
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "postre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 107
            if ($this->getAttribute($context["entity"], "dia", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
          ";
            // line 111
            echo "          <td>
            <a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "/show\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/show.png"), "html", null, true);
            echo "\" height=\"30\" width=\"30\" /></a>
            ";
            // line 113
            if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
                // line 114
                echo "            <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/edit\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.ico"), "html", null, true);
                echo "\" height=\"30\" width=\"30\" /></a>
            ";
            }
            // line 116
            echo "          </td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        </tbody>
      </table>
      ";
        // line 121
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 122
            echo "      <div class=\"navigation\">
        ";
            // line 123
            echo strtr($this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), array("menu" => "#!/menu"));
            echo "
      </div>
      ";
        }
        // line 126
        echo "
      ";
        // line 130
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

    </div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  322 => 130,  319 => 126,  313 => 123,  310 => 122,  308 => 121,  304 => 119,  296 => 116,  287 => 114,  285 => 113,  278 => 112,  275 => 111,  269 => 107,  265 => 106,  261 => 105,  257 => 104,  253 => 103,  249 => 102,  245 => 101,  242 => 100,  237 => 99,  231 => 97,  229 => 96,  222 => 92,  218 => 90,  212 => 88,  206 => 86,  204 => 85,  199 => 83,  194 => 80,  188 => 78,  182 => 76,  180 => 75,  175 => 73,  170 => 70,  164 => 68,  158 => 66,  156 => 65,  151 => 63,  146 => 60,  140 => 58,  134 => 56,  132 => 55,  127 => 53,  122 => 50,  116 => 48,  110 => 46,  108 => 45,  103 => 43,  98 => 40,  92 => 38,  86 => 36,  84 => 35,  79 => 33,  74 => 30,  68 => 28,  62 => 26,  60 => 25,  55 => 23,  41 => 12,  37 => 11,  33 => 10,  26 => 6,  19 => 1,);
    }
}
