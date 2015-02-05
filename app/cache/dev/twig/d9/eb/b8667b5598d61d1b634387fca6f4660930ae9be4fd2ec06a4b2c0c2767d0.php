<?php

/* INCESComedorBundle:Contabilidad:_reporte_ingresos.html.twig */
class __TwigTemplate_d9ebb8667b5598d61d1b634387fca6f4660930ae9be4fd2ec06a4b2c0c2767d0 extends Twig_Template
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
        echo "<h3>
  ";
        // line 2
        if ((((isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")) == "") || ((isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")) == ""))) {
            // line 3
            echo "  ";
            echo "The number of users are";
            echo " <b>";
            echo twig_escape_filter($this->env, (isset($context["cantidadTotal"]) ? $context["cantidadTotal"] : $this->getContext($context, "cantidadTotal")), "html", null, true);
            echo "</b>
  ";
        } else {
            // line 5
            echo "  ";
            echo "The number of users from";
            echo " <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["from"]) ? $context["from"] : $this->getContext($context, "from")), "d/m/Y"), "html", null, true);
            echo "</b> ";
            echo "to";
            echo " <b>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["to"]) ? $context["to"] : $this->getContext($context, "to")), "d/m/Y"), "html", null, true);
            echo "</b> ";
            echo "is";
            echo " <b>";
            echo twig_escape_filter($this->env, (isset($context["cantidadTotal"]) ? $context["cantidadTotal"] : $this->getContext($context, "cantidadTotal")), "html", null, true);
            echo "</b>
  ";
        }
        // line 7
        echo "  <br />
  ";
        // line 8
        echo "Amount earned:";
        echo " <b>";
        echo twig_escape_filter($this->env, (isset($context["montoTotal"]) ? $context["montoTotal"] : $this->getContext($context, "montoTotal")), "html", null, true);
        echo "</b>
</h3>
";
        // line 11
        echo "
<table class=\"bordered\">
  <thead>
    <tr>
      <th>Rol</th>
      <th>";
        // line 16
        echo "Amount";
        echo "</th>
      <th>";
        // line 17
        echo "Amount(\$)";
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : $this->getContext($context, "totals")));
        foreach ($context['_seq'] as $context["key"] => $context["len"]) {
            // line 22
            echo "  ";
            if (($this->getAttribute($context["len"], 0, array()) > 0)) {
                // line 23
                echo "  <tr>
    <td>";
                // line 24
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</td>
    <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["len"], 0, array()), "html", null, true);
                echo "</td>
    <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["len"], 1, array()), "html", null, true);
                echo "</td>
  </tr>
  ";
            }
            // line 29
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['len'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "  </tbody>
</table>

";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["totals"]) ? $context["totals"] : $this->getContext($context, "totals")));
        foreach ($context['_seq'] as $context["key"] => $context["len"]) {
            // line 35
            if (($this->getAttribute($context["len"], 0, array()) > 0)) {
                // line 36
                echo "<ul><li><h3>";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "</h3></li></ul>
<table class=\"bordered\">
  <thead>
    <tr>
      <th>";
                // line 40
                echo "Date";
                echo "</th>
      <th>";
                // line 41
                echo "User";
                echo " </th>
      <th>";
                // line 42
                echo "Menu";
                echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
                // line 46
                if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
                    // line 47
                    echo "  <p>";
                    echo "There are not results";
                    echo "</p>
  ";
                }
                // line 49
                echo "  ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
                foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                    if (($this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "rol", array()), "nombre", array()) == $context["key"])) {
                        // line 50
                        echo "  <tr>
    <td>";
                        // line 51
                        if ($this->getAttribute($context["entity"], "dia", array())) {
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d/m/Y"), "html", null, true);
                        }
                        echo "</td>
    <td>";
                        // line 52
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "nombre", array()), "html", null, true);
                        echo "</td>
    ";
                        // line 53
                        if (($this->getAttribute($context["entity"], "menu", array()) == "")) {
                            // line 54
                            echo "    <td>";
                            echo "There is not information available";
                            echo "</td>
    ";
                        } else {
                            // line 56
                            echo "    <td>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "menu", array()), "html", null, true);
                            echo "</td>
    ";
                        }
                        // line 58
                        echo "  </tr>
  ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "  </tbody>
</table>
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['len'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Contabilidad:_reporte_ingresos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 64,  189 => 60,  181 => 58,  175 => 56,  169 => 54,  167 => 53,  163 => 52,  157 => 51,  154 => 50,  148 => 49,  142 => 47,  140 => 46,  133 => 42,  129 => 41,  125 => 40,  117 => 36,  115 => 35,  111 => 34,  106 => 30,  100 => 29,  94 => 26,  90 => 25,  86 => 24,  83 => 23,  80 => 22,  76 => 21,  69 => 17,  65 => 16,  58 => 11,  51 => 8,  48 => 7,  32 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}
