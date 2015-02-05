<?php

/* INCESComedorBundle:Profile:show.html.twig */
class __TwigTemplate_a8f845a0242b10352bc76ac68504b99b32452068ad52553954a3ee74a90dca01 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        $this->env->loadTemplate("INCESComedorBundle:Profile:show_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Profile:show.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  23 => 5,  20 => 4,);
    }
}
