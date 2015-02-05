<?php

/* INCESComedorBundle:Usuario:carga_masiva.html.twig */
class __TwigTemplate_ce6cf2b3438298c568813c4aafb4a3d555f66680029a39f9df204caadb70febd extends Twig_Template
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
<div id=\"col-browser\"></div>
<div id=\"col-text\">

  <h1>";
        // line 5
        echo "Users Bulk Load";
        echo "</h1>

  <div id=\"messages\"></div>
  <form class=\"carga_masiva_form generic\" action=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/usuario/cargamasiva"), "method"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["cm_form"]) ? $context["cm_form"] : $this->getContext($context, "cm_form")), 'enctype');
        echo ">
    ";
        // line 12
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cm_form"]) ? $context["cm_form"] : $this->getContext($context, "cm_form")), "_token", array()), 'row');
        echo "
    <div id=\"carga-masiva-file-block\" class=\"field\">
      <label for=\"file\">";
        // line 14
        echo "File";
        echo "</label>
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["cm_form"]) ? $context["cm_form"] : $this->getContext($context, "cm_form")), "file", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    ";
        // line 21
        echo "    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button carga_masiva_form_btn\" type=\"submit\" value=\"";
        // line 22
        echo "Update";
        echo "\" />
    </div>
  </form>

</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:carga_masiva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 27,  55 => 22,  52 => 21,  47 => 15,  43 => 14,  37 => 12,  31 => 8,  25 => 5,  19 => 1,);
    }
}
