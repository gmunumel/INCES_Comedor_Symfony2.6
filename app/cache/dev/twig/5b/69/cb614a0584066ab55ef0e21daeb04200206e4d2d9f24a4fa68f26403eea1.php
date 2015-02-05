<?php

/* INCESComedorBundle:Rol:show.html.twig */
class __TwigTemplate_5b69cb614a0584066ab55ef0e21daeb04200206e4d2d9f24a4fa68f26403eea1 extends Twig_Template
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
        echo "Show";
        echo " Rol</h1>

  <table class=\"bordered\">
    <tbody>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 9
        echo "Name";
        echo "</th>
      <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 13
        echo "Amount";
        echo "</th>
      <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "monto", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 17
        echo "Start Hour";
        echo "</th>
      <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaComerStart", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaComerStartAMPM", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 21
        echo "Finish Hour";
        echo "</th>
      <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaComerEnd", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "horaComerEndAMPM", array()), "html", null, true);
        echo "</td>
    </tr>
    </tbody>
  </table>

  <a class=\"mybutton\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/edit\">
    ";
        // line 28
        echo "Edit";
        echo "
  </a>
  <form class=\"generic\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/rol/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/delete\" method=\"post\">
    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
    <input id=\"login-submit\" class=\"submit-button delete_form-btn\" type=\"submit\" value=\"";
        // line 32
        echo "Delete";
        echo "\" />
  </form>
  <br />
  <a href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"40\" width=\"40\" /></a>
</ul>
</div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Rol:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 35,  97 => 32,  93 => 31,  88 => 30,  83 => 28,  78 => 27,  68 => 22,  64 => 21,  56 => 18,  52 => 17,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
