<?php

/* INCESComedorBundle:Rol:edit.html.twig */
class __TwigTemplate_c801d41ca290f919f4aade4e2d6402a502d954dd66d205da78c1264443c8f2e5 extends Twig_Template
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

  <h1>";
        // line 6
        echo "Edit";
        echo " Rol</h1>

  <form class=\"rol_form generic\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/rol/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/update\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 15
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'row');
        echo "

    <div id=\"rol-nombre-block\" class=\"field\">
      <label for=\"nombre\">";
        // line 18
        echo "Name";
        echo "</label>
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-monto-block\" class=\"field\">
      <label for=\"monto\">";
        // line 22
        echo "Amount";
        echo "</label>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "monto", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerStart-block\" class=\"field\">
      <label for=\"horaComerStart\">";
        // line 26
        echo "Start Service";
        echo "</label>
      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaComerStart", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerStartAMPM-block\" class=\"field\">
      <label for=\"horaComerStartAMPM\">";
        // line 30
        echo "Start Service";
        echo " AM/PM</label>
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaComerStartAMPM", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerEnd-block\" class=\"field\">
      <label for=\"horaComerEnd\">";
        // line 34
        echo "End Service";
        echo "</label>
      ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaComerEnd", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerEndAMPM-block\" class=\"field\">
      <label for=\"horaComerEndAMPM\">";
        // line 38
        echo "End Service";
        echo " AM/PM</label>
      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "horaComerEndAMPM", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 42
        echo "Edit";
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
<center>
  <br />
  <a href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" /></a>
</center>


<script type=\"text/javascript\" src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Rol:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 69,  132 => 65,  106 => 42,  100 => 39,  96 => 38,  90 => 35,  86 => 34,  80 => 31,  76 => 30,  70 => 27,  66 => 26,  60 => 23,  56 => 22,  50 => 19,  46 => 18,  39 => 15,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
