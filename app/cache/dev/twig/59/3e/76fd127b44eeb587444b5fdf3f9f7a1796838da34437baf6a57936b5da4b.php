<?php

/* INCESComedorBundle:Registration:register.html.twig */
class __TwigTemplate_593e76fd127b44eeb587444b5fdf3f9f7a1796838da34437baf6a57936b5da4b extends Twig_Template
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
        // line 8
        echo "
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        $this->env->loadTemplate("INCESComedorBundle:Registration:register_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Registration:register.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  30 => 5,  25 => 8,  23 => 5,  20 => 4,);
    }
}
