<?php

/* INCESComedorBundle:Usuario:_lunch_today.html.twig */
class __TwigTemplate_cc9b8c9431ae393f58b447692e32db0aa916f122f94d7a487e8b731ba510d0e9 extends Twig_Template
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
        echo "<table class=\"bordered\">
  <thead>
    <tr>
      <th>";
        // line 4
        echo "Id";
        echo "</th>
      <th>";
        // line 5
        echo "Name";
        echo "</th>
      <th>Rol</th>
      <th>";
        // line 7
        echo "Amount";
        echo "</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 11
        if ((twig_length_filter($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) == 0)) {
            // line 12
            echo "  <p>";
            echo "There are not results";
            echo "</p>
  ";
        }
        // line 14
        echo "  ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 15
            echo "  <tr class=\"tsearch\">
    <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "cedula", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "nombre", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "rol", array()), "nombre", array()), "html", null, true);
            echo "</td>
    <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "usuario", array()), "rol", array()), "monto", array()), "html", null, true);
            echo "</td>
  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "  </tbody>
</table>
<div class=\"center\">
  <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/searchalnc"), "method"), "html", null, true);
        echo "\">
    <button type=\"button\">";
        // line 26
        echo "All";
        echo "</button>
  </a>
</div>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:_lunch_today.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 26,  82 => 25,  77 => 22,  68 => 19,  64 => 18,  60 => 17,  56 => 16,  53 => 15,  48 => 14,  42 => 12,  40 => 11,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
