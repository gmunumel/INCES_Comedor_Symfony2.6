<?php

/* INCESComedorBundle:Contabilidad:reporte_usuarios.html.twig */
class __TwigTemplate_e916a652e64c457d6a3a0b461c4401141fbdfa638e0e2484ef69e238c092c0f2 extends Twig_Template
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
        echo "Users Report";
        echo "</h1>

  <form class=\"reporte_usuarios_form generic\" action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/contabilidad/reporteusuarios"), "method"), "html", null, true);
        echo "\" method=\"post\">
    <div class=\"right\">
      <a class=\"reporte_usuarios_link\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/contabilidad/preporteusuarios"), "method"), "html", null, true);
        echo "\" alt=\"imprimir reporte\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/impresora1.ico"), "html", null, true);
        echo "\" alt=\"img\" height=\"100\" width=\"60\" /></a>
    </div>

    <div id=\"reporte-cedula-block\" class=\"field\">
      <label for=\"Cedula\">";
        // line 11
        echo "Id";
        echo "</label>
      ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "cedula", array()), 'widget', array("attr" => array("autocomplete" => "off", "class" => "text")));
        echo "
    </div>
    <div id=\"reporte-from-block\" class=\"field\">
      <label for=\"from\">";
        // line 15
        echo "From";
        echo "</label>
      ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "from", array()), 'widget', array("attr" => array("autocomplete" => "off", "class" => "text")));
        echo "
    </div>
    <div id=\"reporte-from-block\" class=\"field\">
      <label for=\"from\">";
        // line 19
        echo "To";
        echo "</label>
      ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["filter_form"]) ? $context["filter_form"] : $this->getContext($context, "filter_form")), "to", array()), 'widget', array("attr" => array("autocomplete" => "off", "class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"reporte_form_btn submit-button\" type=\"submit\" value=\"";
        // line 23
        echo "Filter";
        echo "\" />
    </div>
    <div id=\"results\">
    </div>
  </form>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Contabilidad:reporte_usuarios.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  72 => 23,  66 => 20,  62 => 19,  56 => 16,  52 => 15,  46 => 12,  42 => 11,  33 => 7,  28 => 5,  23 => 3,  19 => 1,);
    }
}
