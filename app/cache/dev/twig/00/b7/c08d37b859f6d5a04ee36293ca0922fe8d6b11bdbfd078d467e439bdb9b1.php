<?php

/* INCESComedorBundle:Rol:_error_delete.html.twig */
class __TwigTemplate_00b7c08d37b859f6d5a04ee36293ca0922fe8d6b11bdbfd078d467e439bdb9b1 extends Twig_Template
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
        echo "Update";
        echo " Rol</h1>
  <p>";
        // line 5
        echo "Cannot delete the rol because is being used by many users";
        echo "</p>

  <a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol"), "method"), "html", null, true);
        echo "\">
    ";
        // line 8
        echo "Back to the list";
        echo "
  </a>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Rol:_error_delete.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 11,  37 => 8,  33 => 7,  28 => 5,  24 => 4,  19 => 1,);
    }
}
