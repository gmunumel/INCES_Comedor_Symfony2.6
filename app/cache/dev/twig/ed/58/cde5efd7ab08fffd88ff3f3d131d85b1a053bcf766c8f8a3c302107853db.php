<?php

/* INCESComedorBundle:Usuario:show.html.twig */
class __TwigTemplate_ed58cde5efd7ab08fffd88ff3f3d131d85b1a053bcf766c8f8a3c302107853db extends Twig_Template
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
<div id=\"col-browser\">
  <a href=\"#\">
    ";
        // line 4
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()) != null)) {
            // line 5
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/uploaded/"), "html", null, true);
            echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "image", array()), array("/tmp/" => "")), "html", null, true);
            echo "\" width=\"255\" height=\"350\" alt=\"\" />
    ";
        } else {
            // line 7
            echo "    <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/guest_user.png"), "html", null, true);
            echo "\" width=\"255\" height=\"350\" alt=\"\" />
    ";
        }
        // line 9
        echo "  </a>
</div>
<div id=\"col-text\">

  <h1>";
        // line 13
        echo "Show User";
        echo "</h1>

  <table class=\"bordered\">
    <tbody>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 18
        echo "Name";
        echo "</th>
      <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 22
        echo "Last Name";
        echo "</th>
      <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 26
        echo "Id";
        echo "</th>
      <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 30
        echo "Card Number";
        echo "</th>
      <td>";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ncarnet", array()), "html", null, true);
        echo "</td>
    </tr>
    ";
        // line 39
        echo "    <tr class=\"fix-tsearch\">
      <th>";
        // line 40
        echo "Email";
        echo "</th>
      <td>";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "correo", array()), "html", null, true);
        echo "</td>
    </tr>
    ";
        // line 49
        echo "    </tbody>
  </table>

  <a class=\"mybutton\" href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/edit\">";
        echo "Edit";
        echo "</a>
  <ul class=\"record_actions\">
    ";
        // line 57
        echo "    <form class=\"generic\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/delete\" method=\"post\">
      ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
      <div class=\"action\">
        <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 60
        echo "Delete";
        echo "\" />
      </div>
    </form>
    <a href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
    </a>
  </ul>
</div> <!-- /col-text -->

";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 63,  128 => 60,  123 => 58,  117 => 57,  109 => 52,  104 => 49,  99 => 41,  95 => 40,  92 => 39,  87 => 31,  83 => 30,  77 => 27,  73 => 26,  67 => 23,  63 => 22,  57 => 19,  53 => 18,  45 => 13,  39 => 9,  33 => 7,  26 => 5,  24 => 4,  19 => 1,);
    }
}
