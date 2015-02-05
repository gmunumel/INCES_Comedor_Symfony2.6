<?php

/* INCESComedorBundle:UsuarioMenu:_list.html.twig */
class __TwigTemplate_0f08be7db756dedc3f4f9114e07ac97ffeb72b5d98bc7a19caf671fabdad0312 extends Twig_Template
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
        // line 9
        echo "List Users";
        echo " Menu</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuariomenu/searcha"), "method"), "html", null, true);
        echo "\" method=\"get\">
            <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/search.png"), "html", null, true);
        echo "\" class=\"searchbox_submit\" value=\"\" />
            <input autocomplete=\"off\" type=\"text\" class=\"text\" name=\"query\" value=\"";
        // line 15
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
        // line 26
        echo strtr($this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Day", "um.dia"), array("usuariomenu" => "#!/usuariomenu"));
        echo "
              <div>
                ";
        // line 28
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "um.dia"), "method")) {
            // line 29
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_down.gif"), "html", null, true);
            echo "\" alt=\"Descendent\" />
                ";
        } else {
            // line 31
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/arrow_small_up.gif"), "html", null, true);
            echo "\" alt=\"Ascendent\" />
                ";
        }
        // line 33
        echo "              </div>
            </th>
            <th>";
        // line 35
        echo "User";
        echo "</th>
            <th>Menu</th>
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
        return "INCESComedorBundle:UsuarioMenu:_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 65,  156 => 62,  153 => 61,  151 => 60,  146 => 57,  133 => 53,  130 => 52,  124 => 50,  118 => 48,  116 => 47,  112 => 46,  106 => 45,  103 => 44,  98 => 43,  92 => 41,  90 => 40,  82 => 35,  78 => 33,  72 => 31,  66 => 29,  64 => 28,  59 => 26,  45 => 15,  41 => 14,  37 => 13,  30 => 9,  21 => 2,  19 => 1,);
    }
}
