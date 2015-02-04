<?php

/* INCESComedorBundle:Menu:new_today.html.twig */
class __TwigTemplate_a447bb2f5c54e5c1e146bc7f320ce78beefb425dbffd78fdb722d78efae293de extends Twig_Template
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
        echo "Add Today's Menu";
        echo "</h1>
  <form class=\"menu_today_form generic\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/menu/createtoday"), "method"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
    ";
        // line 11
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "_token", array()), 'row');
        echo "

    <div id=\"menu-seco-block\" class=\"field\">
      <label for=\"seco\">";
        // line 14
        echo "First Plate";
        echo "</label>
      ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seco", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-sopa-block\" class=\"field\">
      <label for=\"sopa\">";
        // line 18
        echo "Soup";
        echo "</label>
      ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "sopa", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-salado-block\" class=\"field\">
      <label for=\"salado\">";
        // line 22
        echo "Second Plate";
        echo "</label>
      ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salado", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-jugo-block\" class=\"field\">
      <label for=\"jugo\">";
        // line 26
        echo "Juice";
        echo "</label>
      ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "jugo", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-ensalada-block\" class=\"field\">
      <label for=\"ensalada\">";
        // line 30
        echo "Salad";
        echo "</label>
      ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "ensalada", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-postre-block\" class=\"field\">
      <label for=\"postre\">";
        // line 34
        echo "Dessert";
        echo "</label>
      ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postre", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div id=\"menu-dia-block\" class=\"field\">
      <label for=\"\">";
        // line 38
        echo "Day";
        echo "</label>
      ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dia", array()), 'widget', array("attr" => array("class" => "text")));
        echo "
    </div>
    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button\" type=\"submit\" value=\"";
        // line 42
        echo "Add";
        echo "\" />
    </div>
  </form>
</div> <!-- /col-text -->
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
</br>
<center><a href=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
  </a>
</center>
<script type=\"text/javascript\" src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:new_today.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 80,  152 => 77,  114 => 42,  108 => 39,  104 => 38,  98 => 35,  94 => 34,  88 => 31,  84 => 30,  78 => 27,  74 => 26,  68 => 23,  64 => 22,  58 => 19,  54 => 18,  48 => 15,  44 => 14,  37 => 11,  31 => 7,  27 => 6,  21 => 2,  19 => 1,);
    }
}
