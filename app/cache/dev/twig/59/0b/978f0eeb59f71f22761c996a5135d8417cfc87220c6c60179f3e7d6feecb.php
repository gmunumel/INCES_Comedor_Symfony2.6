<?php

/* INCESComedorBundle:Usuario:edit.html.twig */
class __TwigTemplate_590b978f0eeb59f71f22761c996a5135d8417cfc87220c6c60179f3e7d6feecb extends Twig_Template
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
        echo "Edit User";
        echo "</h1>

  <form class=\"usuario_form generic\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/update\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
    ";
        // line 15
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "_token", array()), 'row');
        echo "

    <div id=\"usuario-nombre-block\" class=\"field\">
      <label for=\"nombre\">";
        // line 18
        echo "Name";
        echo "</label>
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-apellido-block\" class=\"field\">
      <label for=\"apellido\">";
        // line 22
        echo "Last Name";
        echo "</label>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "apellido", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-cedula-block\" class=\"field\">
      <label for=\"cedula\">";
        // line 26
        echo "Id";
        echo "</label>
      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cedula", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-ncarnet-block\" class=\"field\">
      <label for=\"ncarnet\">";
        // line 30
        echo "Card Number";
        echo "</label>
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "ncarnet", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-correo-block\" class=\"field\">
      <label for=\"correo\">";
        // line 34
        echo "Email";
        echo "</label>
      ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "correo", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-roles-block\" class=\"field\">
      <label for=\"roles\">Rol</label>
      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "rol", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-image-block\" class=\"field\">
      <label for=\"image\">";
        // line 42
        echo "Image";
        echo "</label>
      ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "image", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 46
        echo "Update";
        echo "\" />
    </div>
  </form>

  <ul class=\"record_actions\">


    ";
        // line 62
        echo "</div> <!-- /col-text -->
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
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>

<script type=\"text/javascript\" src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 95,  154 => 91,  123 => 62,  113 => 46,  107 => 43,  103 => 42,  97 => 39,  90 => 35,  86 => 34,  80 => 31,  76 => 30,  70 => 27,  66 => 26,  60 => 23,  56 => 22,  50 => 19,  46 => 18,  39 => 15,  32 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
