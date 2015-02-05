<?php

/* INCESComedorBundle:Menu:show_today.html.twig */
class __TwigTemplate_7a53de1b2a0b42806615ccbba5cca41ebf2fc629f6e8c2805eb2e9199cf19953 extends Twig_Template
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
        echo "Today's Menu";
        echo "</h1>

  <table class=\"bordered\">
    <tbody>
    <tr class=\"tsearch\">
      <th>";
        // line 9
        echo "First Plate";
        echo "</th>
      <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "seco", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 13
        echo "Soup";
        echo "</th>
      <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "sopa", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 17
        echo "Second Plate";
        echo "</th>
      <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "salado", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 21
        echo "Jugo";
        echo "</th>
      <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "jugo", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 25
        echo "Salad";
        echo "</th>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ensalada", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 29
        echo "Dessert";
        echo "</th>
      <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "postre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 33
        echo "Day";
        echo "</th>
      <td>";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dia", array()), "d/m/Y"), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
  </table>

  <br />
  ";
        // line 40
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 41
            echo "  <a class=\"mybutton\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "/edittoday\">
    ";
            // line 42
            echo "Edit";
            echo "
  </a>
  ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_GERENTE")) {
            // line 45
            echo "  <a class=\"mybutton\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "/edittoday\">
    ";
            // line 46
            echo "Edit";
            echo "
  </a>
  ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_OPERADOR")) {
            // line 49
            echo "  <a class=\"mybutton\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
            echo "/edittoday\">
    ";
            // line 50
            echo "Edit";
            echo "
  </a>
  ";
        }
        // line 53
        echo "  <br />
  <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" /></a>
</div> <!-- /col-text -->

<script type=\"text/javascript\" src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:show_today.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 57,  146 => 54,  143 => 53,  137 => 50,  131 => 49,  125 => 46,  119 => 45,  113 => 42,  107 => 41,  105 => 40,  96 => 34,  92 => 33,  86 => 30,  82 => 29,  76 => 26,  72 => 25,  66 => 22,  62 => 21,  56 => 18,  52 => 17,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
