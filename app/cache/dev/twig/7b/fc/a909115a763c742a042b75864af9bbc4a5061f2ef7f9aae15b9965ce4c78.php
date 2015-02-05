<?php

/* INCESComedorBundle:Contabilidad:reporte_ingresos_today.html.twig */
class __TwigTemplate_7bfca909115a763c742a042b75864af9bbc4a5061f2ef7f9aae15b9965ce4c78 extends Twig_Template
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
        echo "<div id=\"my-col-text\">

  <h1>";
        // line 3
        echo "Today's Income Report";
        echo "</h1>

  <form class=\"reporte_ingresos_today_form generic\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/contabilidad/reporteingresostoday"), "method"), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 9
        echo "    <div class=\"right\">
      <a class=\"reporte_ingresos_today_link\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/contabilidad/preporteingresostoday"), "method"), "html", null, true);
        echo "\" alt=\"imprimir reporte\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/impresora1.ico"), "html", null, true);
        echo "\" alt=\"img\" height=\"100\" width=\"60\" /></a>
    </div>

    <div id=\"reporte-rol-block\" class=\"field\">
      <label for=\"Rol\">Rol</label>
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "rol", array()), 'widget', array("attr" => array("autocomplete" => "off", "class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"reporte_form_btn submit-button\" type=\"submit\" value=\"";
        // line 18
        echo "Filter";
        echo "\" />
    </div>
    <div id=\"results\"></div>
  </form>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Contabilidad:reporte_ingresos_today.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 23,  51 => 18,  45 => 15,  35 => 10,  32 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }
}
