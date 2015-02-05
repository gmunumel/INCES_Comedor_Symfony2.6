<?php

/* INCESComedorBundle:Profile:edit.html.twig */
class __TwigTemplate_40dfafe0ae9104079692bf27e341826b550ce55ffce936c6aae007a0e0452a95 extends Twig_Template
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
        // line 4
        echo "
";
        // line 8
        $this->env->loadTemplate("INCESComedorBundle:Profile:edit_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Profile:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 8,  19 => 4,);
    }
}
