<?php

/* INCESComedorBundle:Menu:edit.html.twig */
class __TwigTemplate_29014776e569a9d5f263dedf43f541ec5064bd19730e126615462c8b34d1f968 extends Twig_Template
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
        echo "<div id=\"col-browser\">";
        // line 2
        echo "</div>

<div id=\"col-text\">
  ";
        // line 8
        echo "
    <h1>";
        // line 9
        echo "Update Menu";
        echo "</h1>

    <form class=\"menu_form generic\" action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/update\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
      ";
        // line 15
        echo "      ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'row');
        echo "

      <div id=\"menu-seco-block\" class=\"field\">
        <label for=\"seco\">";
        // line 18
        echo "First Plate";
        echo "</label>
        ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "seco", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
      </div>
      <div id=\"menu-sopa-block\" class=\"field\">
        <label for=\"sopa\">";
        // line 22
        echo "Soup";
        echo "</label>
        ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sopa", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
      </div>
      <div id=\"menu-salado-block\" class=\"field\">
        <label for=\"salado\">";
        // line 26
        echo "Second Plate";
        echo "</label>
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "salado", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
      </div>
      <div id=\"menu-jugo-block\" class=\"field\">
        <label for=\"jugo\">";
        // line 30
        echo "Juice";
        echo "</label>
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "jugo", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
      </div>
      <div id=\"menu-ensalada-block\" class=\"field\">
        <label for=\"ensalada\">";
        // line 34
        echo "Salad";
        echo "</label>
        ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ensalada", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
      </div>
      <div id=\"menu-postre-block\" class=\"field\">
        <label for=\"postre\">";
        // line 38
        echo "Dessert";
        echo "</label>
        ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "postre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
      </div>
      <div id=\"menu-dia-block\" class=\"field\">
        <label for=\"\">";
        // line 42
        echo "Day";
        echo "</label>
        ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dia", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
      </div>
      <div class=\"action\">
        <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"Update\" />
      </div>
    </form>

    ";
        // line 56
        echo "  </div> <!-- /col-text -->
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>
  <br/>

  <center>
    <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
    </a>
  </center>
  <script type=\"text/javascript\" src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  165 => 92,  157 => 89,  122 => 56,  112 => 43,  108 => 42,  102 => 39,  98 => 38,  92 => 35,  88 => 34,  82 => 31,  78 => 30,  72 => 27,  68 => 26,  62 => 23,  58 => 22,  52 => 19,  48 => 18,  41 => 15,  34 => 11,  29 => 9,  26 => 8,  21 => 2,  19 => 1,);
    }
}
