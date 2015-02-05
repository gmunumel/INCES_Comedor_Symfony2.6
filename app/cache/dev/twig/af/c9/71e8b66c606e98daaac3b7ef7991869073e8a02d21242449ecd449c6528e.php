<?php

/* INCESComedorBundle:Contabilidad:index.html.twig */
class __TwigTemplate_afc971e8b66c606e98daaac3b7ef7991869073e8a02d21242449ecd449c6528e extends Twig_Template
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
        echo "<table class=\"together\">
  <tr class=\"tsearch\">
    <td>
      <a class=\"mybutton\" href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/contabilidad/reporteingresos"), "method"), "html", null, true);
        echo "\">
        ";
        // line 5
        echo "Income Report";
        echo "
      </a>
    </td>
    <td>
      <a class=\"mybutton\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/contabilidad/reporteusuarios"), "method"), "html", null, true);
        echo "\">
        ";
        // line 10
        echo "Users Report";
        echo "
      </a>
    </td>
  </tr>
</table>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Contabilidad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 10,  35 => 9,  28 => 5,  24 => 4,  19 => 1,);
    }
}
