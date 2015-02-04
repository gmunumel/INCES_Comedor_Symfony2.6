<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e71f6a4d829944b459d4f349f579bbd1ccf18a87baa7a4d787a95121178d3993 extends Twig_Template
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
        return "FOSUserBundle:Profile:edit.html.twig";
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
