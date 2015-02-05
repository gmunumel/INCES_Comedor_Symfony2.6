<?php

/* INCESComedorBundle:Usuario:new.html.twig */
class __TwigTemplate_80d0c6027426dd4fc3da65712abb4dd94a1226dd8f0ef9bd7e6304e00587d8f1 extends Twig_Template
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
        echo "Add User";
        echo "</h1>
  <form class=\"usuario_form generic\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/create"), "method"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 12
        echo "    ";
        // line 17
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

    <div id=\"usuario-nombre-block\" class=\"field\">
      <label for=\"nombre\">";
        // line 20
        echo "Name";
        echo "</label>
      ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-apellido-block\" class=\"field\">
      <label for=\"apellido\">";
        // line 24
        echo "Last Name";
        echo "</label>
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-cedula-block\" class=\"field\">
      <label for=\"cedula\">";
        // line 28
        echo "Id";
        echo "</label>
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-ncarnet-block\" class=\"field\">
      <label for=\"ncarnet\">";
        // line 32
        echo "Card Number";
        echo "</label>
      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ncarnet", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-correo-block\" class=\"field\">
      <label for=\"correo\">";
        // line 36
        echo "Email";
        echo "</label>
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "correo", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-image-block\" class=\"field\">
      <label for=\"image\">";
        // line 40
        echo "Image";
        echo "</label>
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-roles-block\" class=\"field\">
      <label for=\"rol\">Roles</label>
      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 48
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
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario"), "method"), "html", null, true);
        echo "\">
    <img src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>
<script type=\"text/javascript\" src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 84,  152 => 81,  148 => 80,  113 => 48,  107 => 45,  100 => 41,  96 => 40,  90 => 37,  86 => 36,  80 => 33,  76 => 32,  70 => 29,  66 => 28,  60 => 25,  56 => 24,  50 => 21,  46 => 20,  39 => 17,  37 => 12,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
