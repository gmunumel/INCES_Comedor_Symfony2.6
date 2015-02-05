<?php

/* INCESComedorBundle:Menu:today.html.twig */
class __TwigTemplate_542c07b81c9827332d8f4d5d0261701ee330cb304998d26fbc2d88abaebbd103 extends Twig_Template
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
        echo "Today's Menus";
        echo "</h1>
  <table class=\"bordered\">
    <thead>
      <tr>
        <th>";
        // line 8
        echo "First Plate";
        echo "</th>
        <th>";
        // line 9
        echo "Soup";
        echo "</th>
        <th>";
        // line 10
        echo "Second Plate";
        echo "</th>
        <th>";
        // line 11
        echo "Juice";
        echo "</th>
        <th>";
        // line 12
        echo "Salad";
        echo "</th>
        <th>";
        // line 13
        echo "Dessert";
        echo "</th>
        <th>";
        // line 14
        echo "Day";
        echo "</th>
        <th>";
        // line 15
        echo "Actions";
        echo "</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 19
        if ((twig_length_filter($this->env, (isset($context["menusToday"]) ? $context["menusToday"] : $this->getContext($context, "menusToday"))) == 0)) {
            // line 20
            echo "    <p>";
            echo "There are not results";
            echo "</p>
    ";
        }
        // line 22
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["menusToday"]) ? $context["menusToday"] : $this->getContext($context, "menusToday")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 23
            echo "    <tr>
      <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "seco", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "sopa", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "salado", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "jugo", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "ensalada", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "postre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "dia", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dia", array()), "d/m/Y"), "html", null, true);
            }
            echo "</td>
      <td>
        ";
            // line 32
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/edittoday\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.ico"), "html", null, true);
                echo "\" height=\"30\" width=\"30\" /></a>
        ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_GERENTE")) {
                // line 35
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/edittoday\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.ico"), "html", null, true);
                echo "\" height=\"30\" width=\"30\" /></a>
        ";
            } elseif ($this->env->getExtension('security')->isGranted("ROLE_OPERADOR")) {
                // line 37
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/edittoday\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.ico"), "html", null, true);
                echo "\" height=\"30\" width=\"30\" /></a>
        ";
            } else {
                // line 39
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/"), "method"), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "/showtoday\"><img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/show.png"), "html", null, true);
                echo "\" height=\"30\" width=\"30\" /></a>
        ";
            }
            // line 41
            echo "      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    </tbody>
  </table>
  <br />
  ";
        // line 47
        if ((($this->env->getExtension('security')->isGranted("ROLE_ADMIN") || $this->env->getExtension('security')->isGranted("ROLE_GERENTE")) || $this->env->getExtension('security')->isGranted("ROLE_OPERADOR"))) {
            // line 48
            echo "  <a class=\"mya\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/newtoday"), "method"), "html", null, true);
            echo "\">
    <button class=\"mybutton\" type=\"button\" >";
            // line 49
            echo "New";
            echo "</button>
  </a>
  ";
        }
        // line 52
        echo "
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:today.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 54,  177 => 52,  171 => 49,  166 => 48,  164 => 47,  159 => 44,  151 => 41,  142 => 39,  133 => 37,  124 => 35,  115 => 33,  113 => 32,  106 => 30,  102 => 29,  98 => 28,  94 => 27,  90 => 26,  86 => 25,  82 => 24,  79 => 23,  74 => 22,  68 => 20,  66 => 19,  59 => 15,  55 => 14,  51 => 13,  47 => 12,  43 => 11,  39 => 10,  35 => 9,  31 => 8,  24 => 4,  19 => 1,);
    }
}
