<?php

/* INCESComedorBundle:Usuario:_list.html.twig */
class __TwigTemplate_c8dce10c9cf86a54c19ed4bb6f63d7e82d9a9bf646856c54592108ad2a062a13 extends Twig_Template
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
        echo "List of Users";
        echo "</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/searcha"), "method"), "html", null, true);
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
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Cedula", "u.cedula"), array("usuario" => "#!/usuario"));
        echo "
              <div>
                ";
        // line 26
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.cedula"), "method")) {
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
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Name", "u.nombre"), array("usuario" => "#!/usuario"));
        echo "
              <div>
                ";
        // line 36
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.nombre"), "method")) {
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
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Last Name", "u.apellido"), array("usuario" => "#!/usuario"));
        echo "
              <div>
                ";
        // line 46
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.apellido"), "method")) {
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
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Card", "u.ncarnet"), array("usuario" => "#!/usuario"));
        echo "
              <div>
                ";
        // line 56
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "u.ncarnet"), "method")) {
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
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Rol", "r.nombre"), array("usuario" => "#!/usuario"));
        echo "
              <div>
                ";
        // line 66
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "r.nombre"), "method")) {
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
            <th>";
        // line 73
        echo "Email";
        echo "</th>
            <th>";
        // line 74
        echo "Image";
        echo "</th>
            <th>";
        // line 75
        echo "Actions";
        echo "</th>
          </tr>
        </thead>
        <tbody>

        ";
        // line 80
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 81
            echo "        <p>";
            echo "There are not results";
            echo "</p>
        ";
        }
        // line 83
        echo "        ";
        // line 87
        echo "          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 88
            echo "          <tr>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ncarnet", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correo", array()), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "image", array()), array("/tmp/" => "")), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"\" /></td>
            <td>
              ";
            // line 100
            echo "              ";
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 101
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/edit\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.ico"), "html", null, true);
                echo "\" class=\"searchbox_submit\" value=\"\"  /></a>
              ";
            }
            // line 103
            echo "            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 106
        echo "          ";
        // line 109
        echo "        </tbody>
      </table>
      ";
        // line 111
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 112
            echo "      <a class=\"mya\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/new"), "method"), "html", null, true);
            echo "\">
        <button class=\"mybutton\" >";
            // line 113
            echo "New";
            echo "</button>
      </a>
      ";
        }
        // line 116
        echo "      ";
        // line 143
        echo "      ";
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 144
            echo "      <div class=\"navigation\">
        ";
            // line 145
            echo strtr($this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), array("usuario" => "#!/usuario"));
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
        return "INCESComedorBundle:Usuario:_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  292 => 148,  286 => 145,  283 => 144,  280 => 143,  278 => 116,  272 => 113,  267 => 112,  265 => 111,  261 => 109,  259 => 106,  251 => 103,  242 => 101,  239 => 100,  233 => 95,  229 => 94,  225 => 93,  221 => 92,  217 => 91,  213 => 90,  209 => 89,  206 => 88,  201 => 87,  199 => 83,  193 => 81,  191 => 80,  183 => 75,  179 => 74,  175 => 73,  171 => 71,  165 => 69,  159 => 67,  157 => 66,  152 => 64,  147 => 61,  141 => 59,  135 => 57,  133 => 56,  128 => 54,  123 => 51,  117 => 49,  111 => 47,  109 => 46,  104 => 44,  99 => 41,  93 => 39,  87 => 37,  85 => 36,  80 => 34,  75 => 31,  69 => 29,  63 => 27,  61 => 26,  56 => 24,  42 => 13,  38 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
