<?php

/* INCESComedorBundle:Menu:edit_today.html.twig */
class __TwigTemplate_f2cd616ec0e79154fb283fdd524092da4a7ce3f4f7faf2a9408d8563e70df06a extends Twig_Template
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
<div id=\"col-text\">

  <h1>";
        // line 4
        echo "Today's Menu Update";
        echo "</h1>

  <form class=\"menu_today_form generic\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/updatetoday\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 10
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'row');
        echo "

    <div id=\"menu-seco-block\" class=\"field\">
      <label for=\"seco\">";
        // line 13
        echo "First Plate";
        echo "</label>
      ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "seco", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-sopa-block\" class=\"field\">
      <label for=\"sopa\">";
        // line 17
        echo "Soup";
        echo "</label>
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "sopa", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-salado-block\" class=\"field\">
      <label for=\"salado\">";
        // line 21
        echo "Second Plate";
        echo "</label>
      ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "salado", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-jugo-block\" class=\"field\">
      <label for=\"jugo\">";
        // line 25
        echo "Juice";
        echo "</label>
      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "jugo", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-ensalada-block\" class=\"field\">
      <label for=\"ensalada\">";
        // line 29
        echo "Salad";
        echo "</label>
      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ensalada", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-postre-block\" class=\"field\">
      <label for=\"postre\">";
        // line 33
        echo "Dessert";
        echo "</label>
      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "postre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-dia-block\" class=\"field\">
      <label for=\"\">";
        // line 37
        echo "Day";
        echo "</label>
      ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dia", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 41
        echo "Update";
        echo "\" />
    </div>
  </form>
</div> <!-- /col-text -->
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
        // line 76
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>


<script type=\"text/javascript\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>


";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:edit_today.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 81,  151 => 76,  113 => 41,  107 => 38,  103 => 37,  97 => 34,  93 => 33,  87 => 30,  83 => 29,  77 => 26,  73 => 25,  67 => 22,  63 => 21,  57 => 18,  53 => 17,  47 => 14,  43 => 13,  36 => 10,  29 => 6,  24 => 4,  19 => 1,);
    }
}
