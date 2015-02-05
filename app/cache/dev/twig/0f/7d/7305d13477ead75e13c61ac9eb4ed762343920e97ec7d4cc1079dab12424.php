<?php

/* INCESComedorBundle:UserAdmin:index.html.twig */
class __TwigTemplate_0f7d7305d13477ead75e13c61ac9eb4ed762343920e97ec7d4cc1079dab12424 extends Twig_Template
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

  <h2 id=\"slogan\"><span></span>";
        // line 6
        echo "Place for your slogan";
        echo ".</h2>
  <h1>";
        // line 7
        echo "Admin Users";
        echo "</h1>

</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:UserAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 10,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
