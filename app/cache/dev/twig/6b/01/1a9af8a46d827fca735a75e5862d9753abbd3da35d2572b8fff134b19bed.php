<?php

/* INCESComedorBundle:Menu:last_eat.html.twig */
class __TwigTemplate_6b011a9af8a46d827fca735a75e5862d9753abbd3da35d2572b8fff134b19bed extends Twig_Template
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
        echo "<p>
<span class='ui-icon ui-icon-alert' style='float:left; margin:0 7px 20px 0;'></span> \".
";
        // line 3
        echo "The user";
        echo " <b>";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["apellido"]) ? $context["apellido"] : $this->getContext($context, "apellido"))), "html", null, true);
        echo "</b> ";
        echo "already eat at time";
        echo " <b>";
        echo twig_escape_filter($this->env, (isset($context["hora"]) ? $context["hora"] : $this->getContext($context, "hora")), "html", null, true);
        echo ":";
        echo twig_escape_filter($this->env, (isset($context["minuto"]) ? $context["minuto"] : $this->getContext($context, "minuto")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["ampm"]) ? $context["ampm"] : $this->getContext($context, "ampm")), "html", null, true);
        echo "</b> <br /><br />
<a id='closer' href='";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
        echo "' alt='";
        echo "last lunch";
        echo "'>";
        echo "See last users to lunch..";
        echo "</a>
</p>

";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:last_eat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 4,  23 => 3,  19 => 1,);
    }
}
