<?php

/* INCESComedorBundle:UsuarioMenu:edit.html.twig */
class __TwigTemplate_5579904f67f516008f6d8895749efffdcc14407bd7e2e13ce42539d00e91d10e extends Twig_Template
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
        echo "Edit User";
        echo " Menu</h1>

  <form class=\"usuariomenu_form generic\" action=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuariomenu_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "dia", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-menu-usuario-block\" class=\"field\">
      <label for=\"usuario\">";
        // line 18
        echo "User";
        echo "</label>
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "usuario", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"usuario-menu-menu-block\" class=\"field\">
      <label for=\"menu\">Menu</label>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "menu", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 26
        echo "Edit";
        echo "\" />
    </div>
  </form>

  <ul class=\"record_actions\">
    <li>
    <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuariomenu/"), "method"), "html", null, true);
        echo "\">
      ";
        // line 33
        echo "Back to the list";
        echo "
    </a>
    </li>
    <li>
    <form class=\"generic\" action=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuariomenu/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/delete\" method=\"post\">
      ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
      ";
        // line 42
        echo "      <div class=\"action\">
        <input id=\"login-submit\" class=\"delete_form_btn submit-button\" type=\"submit\" value=\"";
        // line 43
        echo "Delete";
        echo "\" />
      </div>
    </form>
    </li>
  </ul>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:UsuarioMenu:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 49,  97 => 43,  94 => 42,  90 => 38,  85 => 37,  78 => 33,  74 => 32,  65 => 26,  59 => 23,  52 => 19,  48 => 18,  42 => 15,  38 => 14,  35 => 13,  29 => 6,  24 => 4,  19 => 1,);
    }
}
