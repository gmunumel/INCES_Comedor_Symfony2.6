<?php

/* INCESComedorBundle:UsuarioMenu:new.html.twig */
class __TwigTemplate_eba71299a0eca56a6754a1f8bcc72c20e152aa5dbf328a209e52dc3f3abd7be4 extends Twig_Template
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
<div id=\"my-col-text\">

  <h1>";
        // line 4
        echo "Add User";
        echo " Menu</h1>

  <form class=\"usuariomenu_form generic\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuariomenu/create"), "method"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 13
        echo "    <div id=\"usuario-menu-dia-block\" class=\"field\">
      <label for=\"dia\">";
        // line 14
        echo "Day";
        echo "</label>
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dia", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-menu-usuario-block\" class=\"field\">
      <label for=\"usuario\">";
        // line 18
        echo "User";
        echo "</label>
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "usuario", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-menu-menu-block\" class=\"field\">
      <label for=\"menu\">Menu</label>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "menu", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 26
        echo "Add";
        echo "\" />
    </div>
  </form>

  <ul class=\"record_actions\">
    <li>
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuariomenu"), "method"), "html", null, true);
        echo "\">
      ";
        // line 33
        echo "Back to the list";
        echo "
    </a>
    </li>
  </ul>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:UsuarioMenu:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 38,  78 => 33,  74 => 32,  65 => 26,  59 => 23,  52 => 19,  48 => 18,  42 => 15,  38 => 14,  35 => 13,  29 => 6,  24 => 4,  19 => 1,);
    }
}
