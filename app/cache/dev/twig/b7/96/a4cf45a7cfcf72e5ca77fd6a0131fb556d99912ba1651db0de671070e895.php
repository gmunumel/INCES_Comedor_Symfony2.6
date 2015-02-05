<?php

/* INCESComedorBundle:Contabilidad:reporte_ingresos.html.twig */
class __TwigTemplate_b796a4cf45a7cfcf72e5ca77fd6a0131fb556d99912ba1651db0de671070e895 extends Twig_Template
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
        echo "Income Report";
        echo "</h1>

  <form class=\"reporte_ingresos_form generic\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/contabilidad/reporteingresos"), "method"), "html", null, true);
        echo "\" method=\"post\">
    ";
        // line 9
        echo "    <div class=\"right\">
      <a class=\"reporte_ingresos_link\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/contabilidad/preporteingresos"), "method"), "html", null, true);
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
    <div id=\"reporte-from-block\" class=\"field\">
      <label for=\"from\">";
        // line 18
        echo "From";
        echo "</label>
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "from", array()), 'widget', array("attr" => array("autocomplete" => "off", "class" => "text")));
        echo "
    </div>
    <div id=\"reporte-from-block\" class=\"field\">
      <label for=\"from\">";
        // line 22
        echo "To";
        echo "</label>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "to", array()), 'widget', array("attr" => array("autocomplete" => "off", "class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"reporte_form_btn submit-button\" type=\"submit\" value=\"";
        // line 26
        echo "Filter";
        echo "\" />
    </div>
    <div id=\"results\"></div>
  </form>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Contabilidad:reporte_ingresos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 31,  71 => 26,  65 => 23,  61 => 22,  55 => 19,  51 => 18,  45 => 15,  35 => 10,  32 => 9,  28 => 5,  23 => 3,  19 => 1,);
    }
}
