<?php

/* INCESComedorBundle:Menu:show.html.twig */
class __TwigTemplate_342ea9d901afd49ca79eddb611ce699717a86e6edd3c89c8a15a1220900f9042 extends Twig_Template
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

  <h1>";
        // line 4
        echo "Show Menu";
        echo "</h1>

  <table class=\"bordered\">
    <tbody >
    ";
        // line 14
        echo "    <tr class=\"tsearch\">
      <th>";
        // line 15
        echo "First Plate";
        echo "</th>
      <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "seco", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 19
        echo "Soup";
        echo "</th>
      <td>";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sopa", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 23
        echo "Second Plate";
        echo "</th>
      <td>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salado", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 27
        echo "Juice";
        echo "</th>
      <td>";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jugo", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 31
        echo "Salad";
        echo "</th>
      <td>";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ensalada", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 35
        echo "Dessert";
        echo "</th>
      <td>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 39
        echo "Day";
        echo "</th>
      <td>";
        // line 40
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dia", array()), "d/m/Y"), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
  </table>

  <br />
  <a class=\"mybutton\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/edit\">
    ";
        // line 47
        echo "Edit";
        echo "
  </a>
  <br />
  <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"40\" width=\"40\" /></a>
  ";
        // line 59
        echo "
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 61,  124 => 59,  118 => 50,  112 => 47,  107 => 46,  98 => 40,  94 => 39,  88 => 36,  84 => 35,  78 => 32,  74 => 31,  68 => 28,  64 => 27,  58 => 24,  54 => 23,  48 => 20,  44 => 19,  38 => 16,  34 => 15,  31 => 14,  24 => 4,  19 => 1,);
    }
}
