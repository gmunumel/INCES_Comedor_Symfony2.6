<?php

/* INCESComedorBundle:Usuario:_index.html.twig */
class __TwigTemplate_536a71489d404c6bdcb7b2975f161d7c42f3f89edc02d6f561d691f86a6e1591 extends Twig_Template
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
        // line 79
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 80
            echo "        <p>";
            echo "There are not results";
            echo "</p>
        ";
        }
        // line 82
        echo "        ";
        // line 85
        echo "          ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 86
            echo "          <tr>
            <td>";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ncarnet", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "rol", array()), "nombre", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "correo", array()), "html", null, true);
            echo "</td>
            <td><img src=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["entity"], "image", array()), array("/tmp/" => "")), "html", null, true);
            echo "\" width=\"40\" height=\"40\" alt=\"\" /></td>
            <td>
              ";
            // line 95
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 96
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/edit\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.ico"), "html", null, true);
                echo "\" height=\"30\" width=\"30\" /></a>
              ";
            } else {
                // line 98
                echo "              <p>";
                echo "No tiene permiso para hacer esta operación";
                echo "</p>
              ";
            }
            // line 100
            echo "            </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "          ";
        // line 106
        echo "        </tbody>
      </table>
      ";
        // line 128
        echo "      ";
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 129
            echo "      <div class=\"navigation\">
        ";
            // line 130
            echo strtr($this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))), array("usuario" => "#!/usuario"));
            echo "
      </div>
      ";
        }
        // line 133
        echo "
      ";
        // line 134
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 135
            echo "      <br />
      <a class=\"mybutton\" href=\"";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/new"), "method"), "html", null, true);
            echo "\">
        ";
            // line 137
            echo "New";
            echo "
      </a>
      ";
        }
        // line 140
        echo "      <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

    </div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:_index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 140,  293 => 137,  289 => 136,  286 => 135,  284 => 134,  281 => 133,  275 => 130,  272 => 129,  269 => 128,  265 => 106,  263 => 103,  255 => 100,  249 => 98,  240 => 96,  238 => 95,  232 => 93,  228 => 92,  224 => 91,  220 => 90,  216 => 89,  212 => 88,  208 => 87,  205 => 86,  200 => 85,  198 => 82,  192 => 80,  190 => 79,  183 => 75,  179 => 74,  175 => 73,  171 => 71,  165 => 69,  159 => 67,  157 => 66,  152 => 64,  147 => 61,  141 => 59,  135 => 57,  133 => 56,  128 => 54,  123 => 51,  117 => 49,  111 => 47,  109 => 46,  104 => 44,  99 => 41,  93 => 39,  87 => 37,  85 => 36,  80 => 34,  75 => 31,  69 => 29,  63 => 27,  61 => 26,  56 => 24,  42 => 13,  38 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
