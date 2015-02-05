<?php

/* INCESComedorBundle:Menu:show_facturar.html.twig */
class __TwigTemplate_2cdf29adcb40fa70ee437229554b667051ff05cb33c6022453c85ad1dd5a8dc0 extends Twig_Template
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
        echo "<div id=\"col-browser\"><a href=\"#\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), array("/tmp/" => "")), "html", null, true);
        echo "\" width=\"255\" height=\"350\" alt=\"\" /></a></div>
<div id=\"col-text\">

  <h1>";
        // line 4
        echo "Show User Bill";
        echo "</h1>

  <table class=\"bordered\">
    <tbody>
    ";
        // line 14
        echo "    <tr class=\"tsearch\">
      <th>";
        // line 15
        echo "Name";
        echo "</th>
      <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 19
        echo "Last Name";
        echo "</th>
      <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 23
        echo "Id";
        echo "</th>
      <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 27
        echo "Card Number";
        echo "</th>
      <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ncarnet", array()), "html", null, true);
        echo "</td>
    </tr>
    ";
        // line 36
        echo "    <tr class=\"tsearch\">
      <th>";
        // line 37
        echo "Email";
        echo "</th>
      <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correo", array()), "html", null, true);
        echo "</td>
    </tr>
    ";
        // line 44
        echo "    </tbody>
  </table>

  <br />
  <h3>";
        // line 48
        echo "Menus del Día";
        echo "</h3>
  <form class=\"generic\" action=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/facturar/procesar"), "method"), "html", null, true);
        echo "\" method=\"post\">
    <input type=\"hidden\" id=\"usuario\" name=\"usuario\" value=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "\" />
    <table class=\"bordered\">
      <thead>
        <tr>
          <th></th>
          <th>";
        // line 55
        echo "First Plate";
        echo "</th>
          <th>";
        // line 56
        echo "Soup";
        echo "</th>
          <th>";
        // line 57
        echo "Second Plate";
        echo "</th>
          <th>";
        // line 58
        echo "Juice";
        echo "</th>
          <th>";
        // line 59
        echo "Salad";
        echo "</th>
          <th>";
        // line 60
        echo "Dessert";
        echo "</th>
          <th>";
        // line 61
        echo "Day";
        echo "</th>
        </tr>
      </thead>
      <tbody>
      ";
        // line 65
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menus"]) ? $context["menus"] : $this->getContext($context, "menus")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 66
            echo "      <tr class=\"tsearch\">
        <td><input type=\"radio\" name=\"menus\" value=\"";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\" /></td>
        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "seco", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sopa", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "salado", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "jugo", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ensalada", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 73
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "postre", array()), "html", null, true);
            echo "</td>
        <td>";
            // line 74
            if ($this->getAttribute($context["entity"], "dia", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
      </tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "      </tbody>
    </table>

    <br />
    <br />
    <div class=\"action right\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 83
        echo "Facturar";
        echo "\" />
    </div>
    ";
        // line 88
        echo "  </form>
  ";
        // line 94
        echo "  <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/facturar"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</ul>
</div> <!-- /col-text -->

<script type=\"text/javascript\" src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:show_facturar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 99,  203 => 94,  200 => 88,  195 => 83,  187 => 77,  176 => 74,  172 => 73,  168 => 72,  164 => 71,  160 => 70,  156 => 69,  152 => 68,  148 => 67,  145 => 66,  141 => 65,  134 => 61,  130 => 60,  126 => 59,  122 => 58,  118 => 57,  114 => 56,  110 => 55,  102 => 50,  98 => 49,  94 => 48,  88 => 44,  83 => 38,  79 => 37,  76 => 36,  71 => 28,  67 => 27,  61 => 24,  57 => 23,  51 => 20,  47 => 19,  41 => 16,  37 => 15,  34 => 14,  27 => 4,  19 => 1,);
    }
}
