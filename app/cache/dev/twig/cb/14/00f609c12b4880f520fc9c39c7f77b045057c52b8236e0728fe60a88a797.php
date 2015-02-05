<?php

/* INCESComedorBundle:Registration:register_content.html.twig */
class __TwigTemplate_cb1400f609c12b4880f520fc9c39c7f77b045057c52b8236e0728fe60a88a797 extends Twig_Template
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
        echo "New Admin Users";
        echo "</h1>
  ";
        // line 8
        echo "
  <div id=\"results\"></div>
  <form class=\"user_admin_form generic\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_registration_register\">
    ";
        // line 20
        echo "    <input class=\"route\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\"/>
    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

    <div id=\"login-admin-username-block\" class=\"field\">
      <label for=\"username\">";
        // line 24
        echo "Username";
        echo "</label>
      ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-password-block\" class=\"field\">
      <label for=\"password\">";
        // line 28
        echo "Contraseña";
        echo "</label>
      ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-password2-block\" class=\"field\">
      <label for=\"password2\">";
        // line 32
        echo "Repeat Password";
        echo "</label>
      ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-nombre-block\" class=\"field\">
      <label for=\"nombre\">";
        // line 36
        echo "Name";
        echo "</label>
      ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-apellido-block\" class=\"field\">
      <label for=\"apellido\">";
        // line 40
        echo "Last Name";
        echo "</label>
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "apellido", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-cedula-block\" class=\"field\">
      <label for=\"cedula\">";
        // line 44
        echo "Id";
        echo "</label>
      ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cedula", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-ncarnet-block\" class=\"field\">
      <label for=\"ncarnet\">";
        // line 48
        echo "Card Number";
        echo "</label>
      ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ncarnet", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-email-block\" class=\"field\">
      <label for=\"email\">";
        // line 52
        echo "Email";
        echo "</label>
      ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-roles-block\" class=\"field\">
      <label for=\"roles\">Roles</label>
      ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roles", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"login_form_btn submit-button\" type=\"submit\" value=\"";
        // line 60
        echo "Register";
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
<br/>
<br/>
<br/>
<br/>
<br/>
<center>
  <a href=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/list"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>
<script type=\"text/javascript\" src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Registration:register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 103,  182 => 100,  139 => 60,  133 => 57,  126 => 53,  122 => 52,  116 => 49,  112 => 48,  106 => 45,  102 => 44,  96 => 41,  92 => 40,  86 => 37,  82 => 36,  76 => 33,  72 => 32,  66 => 29,  62 => 28,  56 => 25,  52 => 24,  46 => 21,  41 => 20,  35 => 10,  31 => 8,  27 => 6,  21 => 2,  19 => 1,);
    }
}
