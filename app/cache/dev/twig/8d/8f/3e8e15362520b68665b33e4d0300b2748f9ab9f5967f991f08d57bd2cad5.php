<?php

/* INCESComedorBundle:Usuario:_search_show.html.twig */
class __TwigTemplate_8d8f3e8e15362520b68665b33e4d0300b2748f9ab9f5967f991f08d57bd2cad5 extends Twig_Template
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
        echo "User";
        echo "</h1>
      </td>
      <td>
        <div id=\"filter\">
          <form class=\"generic\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/search"), "method"), "html", null, true);
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
      ";
        // line 21
        echo "      <table class=\"bordered\">
        <thead>
          <tr>
            <th>";
        // line 24
        echo "Name";
        echo "</th>
            <th>";
        // line 25
        echo "Last Name";
        echo "</th>
            <th>";
        // line 26
        echo "Id";
        echo "</th>
            <th>";
        // line 27
        echo "Card Number";
        echo "</th>
            ";
        // line 31
        echo "            <th>";
        echo "Email";
        echo "</th>
            <th>";
        // line 32
        echo "Image";
        echo "</th>
          </tr>
        </thead>
        <tbody>
        <tr  class=\"tsearch\">
          ";
        // line 37
        if ((twig_length_filter($this->env, (isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu"))) != 0)) {
            // line 38
            echo "          <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu")), 0, array()), "usuario", array()), "nombre", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu")), 0, array()), "usuario", array()), "apellido", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu")), 0, array()), "usuario", array()), "cedula", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu")), 0, array()), "usuario", array()), "ncarnet", array()), "html", null, true);
            echo "</td>
          ";
            // line 45
            echo "          <td>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu")), 0, array()), "usuario", array()), "correo", array()), "html", null, true);
            echo "</td>
          <td>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu")), 0, array()), "usuario", array()), "image", array()), "html", null, true);
            echo "</td>
          ";
        }
        // line 48
        echo "        </tr>
        </tbody>
      </table>

      ";
        // line 53
        echo "      <table class=\"bordered\">
        <thead>
          <tr>
            <th>";
        // line 56
        echo "Date";
        echo "</th>
            <th>Menu</th>
          </tr>
        </thead>
        <tbody>
        ";
        // line 61
        if ((twig_length_filter($this->env, (isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu"))) == 0)) {
            // line 62
            echo "        <td>";
            echo "There is not information available";
            echo "</td>
        ";
        } else {
            // line 64
            echo "        ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["usuariomenu"]) ? $context["usuariomenu"] : $this->getContext($context, "usuariomenu")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 65
                echo "        <tr class=\"tsearch\">
          ";
                // line 66
                $context["hora"] = twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "H");
                // line 67
                echo "          ";
                $context["ampm"] = "am";
                // line 68
                echo "          ";
                if (((isset($context["hora"]) ? $context["hora"] : $this->getContext($context, "hora")) > 12)) {
                    // line 69
                    echo "          ";
                    $context["hora"] = ((isset($context["hora"]) ? $context["hora"] : $this->getContext($context, "hora")) - 12);
                    // line 70
                    echo "          ";
                    $context["ampm"] = "pm";
                    // line 71
                    echo "          ";
                }
                // line 72
                echo "          <td>";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d/m/Y"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["hora"]) ? $context["hora"] : $this->getContext($context, "hora")), "html", null, true);
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), ":i:s"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["ampm"]) ? $context["ampm"] : $this->getContext($context, "ampm")), "html", null, true);
                echo "</td>
          ";
                // line 73
                if (($this->getAttribute($context["entity"], "menu", array()) == "")) {
                    // line 74
                    echo "          <td>";
                    echo "There is not information available";
                    echo "</td>
          ";
                } else {
                    // line 76
                    echo "          <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "menu", array()), "html", null, true);
                    echo "</td>
          ";
                }
                // line 78
                echo "        </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "        ";
        }
        // line 81
        echo "        </tbody>
      </table>
    </div> <!-- /col-text -->
    <script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:_search_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 84,  201 => 81,  198 => 80,  191 => 78,  185 => 76,  179 => 74,  177 => 73,  167 => 72,  164 => 71,  161 => 70,  158 => 69,  155 => 68,  152 => 67,  150 => 66,  147 => 65,  142 => 64,  136 => 62,  134 => 61,  126 => 56,  121 => 53,  115 => 48,  110 => 46,  105 => 45,  101 => 41,  97 => 40,  93 => 39,  88 => 38,  86 => 37,  78 => 32,  73 => 31,  69 => 27,  65 => 26,  61 => 25,  57 => 24,  52 => 21,  42 => 13,  38 => 12,  34 => 11,  27 => 7,  19 => 1,);
    }
}
