<?php

/* INCESComedorBundle:UserAdmin:list.html.twig */
class __TwigTemplate_3dc9a326fedf8a43cecf542e9b60d21a92df293f72c41995907ffebc61fdc421 extends Twig_Template
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

  <h1>";
        // line 4
        echo "List Admin Users";
        echo "</h1>

  <table class=\"bordered\">
    <thead>
      <tr>
        <th>";
        // line 9
        echo "Username";
        echo "</th>
        <th>";
        // line 10
        echo "Name";
        echo "</th>
        <th>";
        // line 11
        echo "Last Name";
        echo "</th>
        <th>";
        // line 12
        echo "Id";
        echo "</th>
        <th>Rol</th>
        <th>";
        // line 14
        echo "Actions";
        echo "</th>
      </tr>
    </thead>
    <tbody>
    ";
        // line 18
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 19
            echo "    <tr>
      <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "username", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombre", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "apellido", array()), "html", null, true);
            echo "</td>
      <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cedula", array()), "html", null, true);
            echo "</td>
      ";
            // line 24
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["entity"], "roles", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["val"]) {
                // line 25
                echo "      ";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    // line 26
                    echo "      <td>";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "</td>
      ";
                }
                // line 28
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "      <td>
        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/"), "method"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "/show\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/show.png"), "html", null, true);
            echo "\" height=\"30\" width=\"30\" /></a>
      </td>
    </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </tbody>
  </table>

  <a class=\"mybutton\" href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/register"), "method"), "html", null, true);
        echo "\">
    Crear Nuevo
  </a>
</ul>
</div> <!-- /col-text -->
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:UserAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 37,  135 => 34,  122 => 30,  119 => 29,  105 => 28,  99 => 26,  96 => 25,  79 => 24,  75 => 23,  71 => 22,  67 => 21,  63 => 20,  60 => 19,  56 => 18,  49 => 14,  44 => 12,  40 => 11,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
