<?php

/* INCESComedorBundle:Usuario:_messages_carga_masiva.html.twig */
class __TwigTemplate_48d5b04d622755ca335d8cf8bb193208d2fcb8fdfd1b73f612d390ea31b93fef extends Twig_Template
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
        echo "<p>";
        echo twig_escape_filter($this->env, (isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), "html", null, true);
        echo "</p>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Usuario:_messages_carga_masiva.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
