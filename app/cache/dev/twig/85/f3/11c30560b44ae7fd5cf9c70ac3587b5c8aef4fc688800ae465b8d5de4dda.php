<?php

/* INCESComedorBundle:UsuarioMenu:show.html.twig */
class __TwigTemplate_85f311c30560b44ae7fd5cf9c70ac3587b5c8aef4fc688800ae465b8d5de4dda extends Twig_Template
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
        echo "User";
        echo " Menu</h1>

  <table class=\"bordered\">
    <tbody>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 9
        echo "Day";
        echo "</th>
      <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dia", array()), "d-m-Y H:i:s"), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>";
        // line 13
        echo "User";
        echo "</th>
      <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "usuario", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"fix-tsearch\">
      <th>Menu</th>
      ";
        // line 18
        if (($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "menu", array()) != "")) {
            // line 19
            echo "      <td>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "menu", array()), "html", null, true);
            echo "</td>
      ";
        } else {
            // line 21
            echo "      <td>";
            echo "There is not information available";
            echo "</td>
      ";
        }
        // line 23
        echo "    </tr>
    </tbody>
  </table>

  <ul class=\"record_actions\">
    <li>
    <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuariomenu"), "method"), "html", null, true);
        echo "\">
      ";
        // line 30
        echo "Back to the list";
        echo "
    </a>
    </li>
    ";
        // line 40
        echo "    <form class=\"generic\" action=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuariomenu/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/delete\" method=\"post\">
      ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
      ";
        // line 45
        echo "      <div class=\"action\">
        <input id=\"login-submit\" class=\"delete_form_btn submit-button\" type=\"submit\" value=\"";
        // line 46
        echo "Delete";
        echo "\" />
      </div>
    </form>
  </ul>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:UsuarioMenu:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 51,  98 => 46,  95 => 45,  91 => 41,  85 => 40,  79 => 30,  75 => 29,  67 => 23,  61 => 21,  55 => 19,  53 => 18,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
