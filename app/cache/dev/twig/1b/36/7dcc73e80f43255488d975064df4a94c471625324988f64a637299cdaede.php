<?php

/* INCESComedorBundle:UserAdmin:show.html.twig */
class __TwigTemplate_1b367dcc73e80f43255488d975064df4a94c471625324988f64a637299cdaede extends Twig_Template
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
        echo "Admin Users";
        echo "</h1>

  <table class=\"bordered\">
    <tbody>
    <tr class=\"tsearch\">
      <th>";
        // line 9
        echo "Username";
        echo "</th>
      <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "username", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 13
        echo "Name";
        echo "</th>
      <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "nombre", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 17
        echo "Last Name";
        echo "</th>
      <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "apellido", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 21
        echo "Id";
        echo "</th>
      <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cedula", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 25
        echo "Card Number";
        echo "</th>
      <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "ncarnet", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>";
        // line 29
        echo "Email";
        echo "</th>
      <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "email", array()), "html", null, true);
        echo "</td>
    </tr>
    <tr class=\"tsearch\">
      <th>Roles</th>
      ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "roles", array()));
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
            // line 35
            echo "      ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 36
                echo "      <td>";
                echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                echo "</td>
      ";
            }
            // line 38
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
        // line 39
        echo "    </tr>
    </tbody>
  </table>

  <ul class=\"record_actions\">




    <form class=\"generic\" action=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/admin/"), "method"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()), "html", null, true);
        echo "/delete\" method=\"post\">
      ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'widget');
        echo "
      ";
        // line 53
        echo "      <input id=\"login-submit\" class=\"submit-button delete_form-btn\" type=\"submit\" value=\"";
        echo "Delete";
        echo "\" />
    </form>
    </br>
    <a href=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/list"), "method"), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/back.ico"), "html", null, true);
        echo "\" height=\"50\" width=\"50\" />
    </a>
  </ul>
</div> <!-- /col-text -->
<script type=\"text/javascript\" src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:UserAdmin:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 60,  160 => 56,  153 => 53,  149 => 49,  144 => 48,  133 => 39,  119 => 38,  113 => 36,  110 => 35,  93 => 34,  86 => 30,  82 => 29,  76 => 26,  72 => 25,  66 => 22,  62 => 21,  56 => 18,  52 => 17,  46 => 14,  42 => 13,  36 => 10,  32 => 9,  24 => 4,  19 => 1,);
    }
}
