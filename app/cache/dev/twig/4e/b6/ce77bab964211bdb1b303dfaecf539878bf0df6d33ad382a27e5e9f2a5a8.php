<?php

/* INCESComedorBundle:Contabilidad:_print_reporte_usuarios.html.twig */
class __TwigTemplate_4eb6ce77bab964211bdb1b303dfaecf539878bf0df6d33ad382a27e5e9f2a5a8 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) != 0)) {
            // line 2
            echo "<table  border=\"1\" style=\"text-align:center;\">
  <thead>
    <tr>
      <th>";
            // line 5
            echo "Id";
            echo "</th>
      <th>";
            // line 6
            echo "Name";
            echo "</th>
      <th>";
            // line 7
            echo "Last Name";
            echo "</th>
      <th>";
            // line 8
            echo "Card Number";
            echo "</th>
      <th>Rol</th>
    </tr>
  </thead>
  <tbody>
  <tr>
    <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array()), "usuario", array()), "cedula", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array()), "usuario", array()), "nombre", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array()), "usuario", array()), "apellido", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array()), "usuario", array()), "ncarnet", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), 0, array()), "usuario", array()), "rol", array()), "nombre", array()), "html", null, true);
            echo "</td>
  </tr>
  </tbody>
</table>

";
            // line 24
            echo "<table  border=\"1\" style=\"text-align:center;\">
  <thead  style=\"border: solid 1px black;\">
    <tr>
      <th>";
            // line 27
            echo "Date";
            echo "</th>
      <th>Menu</th>
    </tr>
  </thead>
  <tbody  style=\"border: solid 1px black;\">
  ";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 33
                echo "  <tr>
    <td>";
                // line 34
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d/m/Y"), "html", null, true);
                echo "</td>
    ";
                // line 35
                if (($this->getAttribute($context["entity"], "menu", array()) == "")) {
                    // line 36
                    echo "    <td>";
                    echo "There is not information available";
                    echo "</td>
    ";
                } else {
                    // line 38
                    echo "    <td>";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "menu", array()), "html", null, true);
                    echo "</td>
    ";
                }
                // line 40
                echo "  </tr>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "  </tbody>
</table>
";
        } else {
            // line 45
            echo "<p>";
            echo "There is not information available";
            echo "</p>
";
        }
        // line 47
        echo "
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Contabilidad:_print_reporte_usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 47,  121 => 45,  116 => 42,  109 => 40,  103 => 38,  97 => 36,  95 => 35,  91 => 34,  88 => 33,  84 => 32,  76 => 27,  71 => 24,  63 => 18,  59 => 17,  55 => 16,  51 => 15,  47 => 14,  38 => 8,  34 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
