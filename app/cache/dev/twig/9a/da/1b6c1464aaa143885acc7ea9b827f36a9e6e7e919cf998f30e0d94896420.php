<?php

/* INCESComedorBundle:Menu:error_already_eat.html.twig */
class __TwigTemplate_9ada1b6c1464aaa143885acc7ea9b827f36a9e6e7e919cf998f30e0d94896420 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '__internal_1f81f67127e05c93b85310cf386e091bfa9751ac16ce92907fc2e67d089c9503' => array($this, 'block___internal_1f81f67127e05c93b85310cf386e091bfa9751ac16ce92907fc2e67d089c9503'),
            '__internal_717bb3514d37d23267e70ca57362bbeb65be3d7c339c95bc5df50c167d820ae9' => array($this, 'block___internal_717bb3514d37d23267e70ca57362bbeb65be3d7c339c95bc5df50c167d820ae9'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<p>
<span class='ui-icon ui-icon-alert' style='float:left; margin:0 7px 20px 0;'></span>
";
        // line 3
        echo "The user";
        echo " <b>";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["nombre"]) ? $context["nombre"] : $this->getContext($context, "nombre"))), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, (isset($context["apellido"]) ? $context["apellido"] : $this->getContext($context, "apellido"))), "html", null, true);
        echo "</b> ";
        echo "has the rol";
        echo " <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_1f81f67127e05c93b85310cf386e091bfa9751ac16ce92907fc2e67d089c9503", $context, $blocks)), "html", null, true);
        echo "</b>. <br /><br />
";
        // line 4
        echo "The";
        echo " <b>";
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (string) $this->renderBlock("__internal_717bb3514d37d23267e70ca57362bbeb65be3d7c339c95bc5df50c167d820ae9", $context, $blocks)), "html", null, true);
        echo "</b> ";
        echo "can use the dinning room from";
        echo " <b>";
        echo twig_escape_filter($this->env, (isset($context["hora_start"]) ? $context["hora_start"] : $this->getContext($context, "hora_start")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hora_startAMPM"]) ? $context["hora_startAMPM"] : $this->getContext($context, "hora_startAMPM")), "html", null, true);
        echo "</b> ";
        echo "to";
        echo " <b>";
        echo twig_escape_filter($this->env, (isset($context["hora_end"]) ? $context["hora_end"] : $this->getContext($context, "hora_end")), "html", null, true);
        echo twig_escape_filter($this->env, (isset($context["hora_endAMPM"]) ? $context["hora_endAMPM"] : $this->getContext($context, "hora_endAMPM")), "html", null, true);
        echo "</b>
</p>
";
    }

    // line 3
    public function block___internal_1f81f67127e05c93b85310cf386e091bfa9751ac16ce92907fc2e67d089c9503($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["rol_name"]) ? $context["rol_name"] : $this->getContext($context, "rol_name")), "html", null, true);
    }

    // line 4
    public function block___internal_717bb3514d37d23267e70ca57362bbeb65be3d7c339c95bc5df50c167d820ae9($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, (isset($context["rol_name"]) ? $context["rol_name"] : $this->getContext($context, "rol_name")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Menu:error_already_eat.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 4,  56 => 3,  37 => 4,  25 => 3,  21 => 1,);
    }
}
