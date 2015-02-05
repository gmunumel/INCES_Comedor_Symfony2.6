<?php

/* INCESComedorBundle:Usuario:new_externo.html.twig */
class __TwigTemplate_f092bbf9c78a1f63c826ee0ab28a0a28a6439dd9b528369d8a8bb85b0bdc0f1e extends Twig_Template
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
<div id=\"col-browser\">";
        // line 3
        echo "</div>

<div id=\"col-text\">

  <h1>";
        // line 7
        echo "Create External User";
        echo "</h1>
  <form class=\"usuario_externo_form generic\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/createexterno"), "method"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 13
        echo "    ";
        // line 18
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

    <div id=\"usuario-externo-nombre-block\" class=\"field\">
      <label for=\"nombre\">";
        // line 21
        echo "Name";
        echo "</label>
      ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-externo-apellido-block\" class=\"field\">
      <label for=\"apellido\">";
        // line 25
        echo "Last Name";
        echo "</label>
      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-externo-cedula-block\" class=\"field\">
      <label for=\"cedula\">";
        // line 29
        echo "Id";
        echo "</label>
      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    ";
        // line 46
        echo "    <div id=\"usuario-roles-block\" class=\"field\">
      <label for=\"rol\">Roles</label>
      ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "rol", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 51
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
<center>
  <a href=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/facturar"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>
<script type=\"text/javascript\" src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:new_externo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 75,  110 => 72,  86 => 51,  80 => 48,  76 => 46,  71 => 30,  67 => 29,  61 => 26,  57 => 25,  51 => 22,  47 => 21,  40 => 18,  38 => 13,  32 => 8,  28 => 7,  22 => 3,  19 => 1,);
    }
}
