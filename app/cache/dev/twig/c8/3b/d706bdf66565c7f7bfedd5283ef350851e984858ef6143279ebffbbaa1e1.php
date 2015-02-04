<?php

/* INCESComedorBundle:Rol:new.html.twig */
class __TwigTemplate_c83bd706bdf66565c7f7bfedd5283ef350851e984858ef6143279ebffbbaa1e1 extends Twig_Template
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
        echo "Add";
        echo " Rol</h1>
  <form class=\"rol_form generic\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/rol/create"), "method"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 14
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

    <div id=\"rol-nombre-block\" class=\"field\">
      <label for=\"nombre\">";
        // line 17
        echo "Name";
        echo "</label>
      ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-monto-block\" class=\"field\">
      <label for=\"monto\">";
        // line 21
        echo "Amount";
        echo "</label>
      ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "monto", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerStart-block\" class=\"field\">
      <label for=\"horaComerStart\">";
        // line 25
        echo "Start Service";
        echo "</label>
      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaComerStart", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerStartAMPM-block\" class=\"field\">
      <label for=\"horaComerStartAMPM\">";
        // line 29
        echo "Start Service";
        echo " AM/PM</label>
      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaComerStartAMPM", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerEnd-block\" class=\"field\">
      <label for=\"horaComerEnd\">";
        // line 33
        echo "End Service";
        echo "</label>
      ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaComerEnd", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"rol-horaComerEndAMPM-block\" class=\"field\">
      <label for=\"horaComerEndAMPM\">";
        // line 37
        echo "End Service";
        echo " AM/PM</label>
      ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "horaComerEndAMPM", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 41
        echo "Add";
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
<center>
  <a href=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>
<script type=\"text/javascript\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Rol:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 67,  130 => 64,  104 => 41,  98 => 38,  94 => 37,  88 => 34,  84 => 33,  78 => 30,  74 => 29,  68 => 26,  64 => 25,  58 => 22,  54 => 21,  48 => 18,  44 => 17,  37 => 14,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
