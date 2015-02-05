<?php

/* INCESComedorBundle:Rol:index.html.twig */
class __TwigTemplate_14c732214267c816943ac7ecdf010fcd1f08507f4f51cfe11d93063e2d8c34ca extends Twig_Template
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
        echo "
<div id=\"my-col-text\">

  <h1>Roles</h1>

  <table class=\"bordered\">
    <thead>
      <tr>
        <th>";
        // line 9
        echo "Name";
        echo "</th>
        <th>";
        // line 10
        echo "Amount";
        echo "</th>
        <th>";
        // line 11
        echo "Start Hour";
        echo "</th>
        <th>";
        // line 12
        echo "Finish Hour";
        echo "</th>
        <th>";
        // line 13
        echo "Actions";
        echo "</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 17
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 18
            echo "    <tr>
      <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "monto", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "horaComerStart", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "horaComerStartAMPM", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "horaComerEnd", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "horaComerEndAMPM", array()), "html", null, true);
            echo "</td>
      <td>
        ";
            // line 25
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol/"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "/edit\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/edit.ico"), "html", null, true);
            echo "\" height=\"30\" width=\"30\" /></a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "    </tbody>
  </table>

  <br />
  <a class=\"mybutton\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol/new"), "method"), "html", null, true);
        echo "\">
    ";
        // line 34
        echo "New";
        echo "
  </a>
</div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Rol:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 34,  100 => 33,  94 => 29,  80 => 25,  73 => 22,  67 => 21,  63 => 20,  59 => 19,  56 => 18,  52 => 17,  45 => 13,  41 => 12,  37 => 11,  33 => 10,  29 => 9,  19 => 1,);
    }
}
