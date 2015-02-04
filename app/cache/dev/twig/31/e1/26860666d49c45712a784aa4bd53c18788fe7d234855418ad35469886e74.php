<?php

/* INCESComedorBundle:Default:error.html.twig */
class __TwigTemplate_31e126860666d49c45712a784aa4bd53c18788fe7d234855418ad35469886e74 extends Twig_Template
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
        echo "<div id=\"col-browser\"><img class=\"error404\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/error_image.jpg"), "html", null, true);
        echo "\" width=\"200\" height=\"200\" alt=\"\" /></div>
<div id=\"col-text\">
  <h1>";
        // line 3
        echo "Oops! An error has occurred";
        echo "</h1>
  ";
        // line 7
        echo "  <h2>";
        echo "Please, chech the url and try again.";
        echo "</h2>
</div>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Default:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 7,  25 => 3,  19 => 1,);
    }
}
