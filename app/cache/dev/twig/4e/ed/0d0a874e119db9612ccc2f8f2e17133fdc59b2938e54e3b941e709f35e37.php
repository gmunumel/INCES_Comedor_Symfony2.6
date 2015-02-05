<?php

/* INCESComedorBundle:Ticket:show.html.twig */
class __TwigTemplate_4eed0d0a874e119db9612ccc2f8f2e17133fdc59b2938e54e3b941e709f35e37 extends Twig_Template
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
        echo "<div id=\"col-text\">

  <table class=\"record_properties\">
    <tbody>
    <tr>
      <th>";
        // line 6
        echo "Image";
        echo "</th>
      <td><img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/../img/inces.jpg"), "method"), "html", null, true);
        echo "\" width=\"120\" height=\"90\" alt=\"logo\" /></td>
    </tr>
    <tr>
      <th>";
        // line 10
        echo "Name";
        echo "</th>
      <td>";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>";
        // line 14
        echo "Last Name";
        echo "</th>
      <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>";
        // line 18
        echo "Cedula";
        echo "</th>
      <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr>
      <th>";
        // line 22
        echo "Card";
        echo "</th>
      <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ncarnet", array()), "html", null, true);
        echo "</td>
    </tr>
    ";
        // line 31
        echo "    </tbody>
  </table>
</div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Ticket:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 31,  70 => 23,  66 => 22,  60 => 19,  56 => 18,  50 => 15,  46 => 14,  40 => 11,  36 => 10,  30 => 7,  26 => 6,  19 => 1,);
    }
}
