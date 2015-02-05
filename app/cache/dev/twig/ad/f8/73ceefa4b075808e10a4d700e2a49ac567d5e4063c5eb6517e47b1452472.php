<?php

/* INCESComedorBundle:Registration:register.html.twig */
class __TwigTemplate_adf873ceefa4b075808e10a4d700e2a49ac567d5e4063c5eb6517e47b1452472 extends Twig_Template
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
