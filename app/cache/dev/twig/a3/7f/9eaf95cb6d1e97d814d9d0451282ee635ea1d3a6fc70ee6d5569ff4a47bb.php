<?php

/* INCESComedorBundle:Profile:edit_content.html.twig */
class __TwigTemplate_a37f9eaf95cb6d1e97d814d9d0451282ee635ea1d3a6fc70ee6d5569ff4a47bb extends Twig_Template
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
        echo "<div id=\"col-browser\"></div>
<div id=\"col-text\">

  <h1>";
        // line 4
        echo "Edit Admin User";
        echo "</h1>
  ";
        // line 8
        echo "
  <div id=\"results\"></div>
  <form class=\"user_admin_profile_form generic\" action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_edit");
        echo "\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " method=\"POST\" class=\"fos_user_profile_edit\">
    ";
        // line 21
        echo "    <input class=\"route\" type=\"hidden\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\"/>
    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

    <div id=\"login-admin-username-block\" class=\"field\">
      <label for=\"username\">";
        // line 25
        echo "Username";
        echo "</label>
      ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"login-admin-email-block\" class=\"field\">
      <label for=\"email\">";
        // line 29
        echo "Email";
        echo "</label>
      ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    ";
        // line 42
        echo "    <div id=\"login-admin-current-block\" class=\"field\">
      <label for=\"current\">";
        // line 43
        echo "Current Password";
        echo "</label>
      ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "current_password", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"login_form_btn submit-button\" type=\"submit\" value=\"";
        // line 47
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
<center>
  <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/list"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>
<script type=\"text/javascript\" src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Profile:edit_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 70,  104 => 67,  81 => 47,  75 => 44,  71 => 43,  68 => 42,  63 => 30,  59 => 29,  53 => 26,  49 => 25,  43 => 22,  38 => 21,  32 => 10,  28 => 8,  24 => 4,  19 => 1,);
    }
}
