<?php

/* INCESComedorBundle:Security:login.html.twig */
class __TwigTemplate_7ca411f079f4b1b2513c58536447a7903037c7f63ab2f90454a3f4dd35f60d51 extends Twig_Template
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
        // line 50
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/search.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 6
        echo "
<div id=\"results\">
  <form id=\"form-signup-login\" class=\"generic\" action=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 9
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 10
            echo "      <div>
        <p id=\"login-msg\" class=\"message red\" style=\"display:;\">";
            // line 11
            echo twig_escape_filter($this->env, (isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "html", null, true);
            echo "</p>
      </div>
    ";
        }
        // line 14
        echo "    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
    <input class=\"route\" type=\"hidden\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["route"]) ? $context["route"] : $this->getContext($context, "route")), "html", null, true);
        echo "\"/>

    ";
        // line 20
        echo "    <div id=\"login-username-block\" class=\"field\">
      <label for=\"username\">User Name</label>
      <input type=\"text\" class=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
    </div>

    ";
        // line 28
        echo "    <div id=\"login-password-block\" class=\"field\">
      <label for=\"password\">Password</label>
      <input type=\"password\" class=\"text\" id=\"password\" name=\"_password\" />
    </div>

    ";
        // line 36
        echo "    <div id=\"login-checkbox-block\" class=\"inline\">
      <label for=\"remember_me\">¿Remember me?</label>
      <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    </div>

    ";
        // line 44
        echo "    <div class=\"action\">
      <input id=\"login-submit\" class=\"submit-button login_form_btn\" type=\"submit\" value=\"Login\" />
    </div>
  </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "INCESComedorBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 44,  81 => 36,  74 => 28,  68 => 22,  64 => 20,  59 => 15,  54 => 14,  48 => 11,  45 => 10,  43 => 9,  39 => 8,  35 => 6,  32 => 5,  25 => 50,  23 => 5,  20 => 4,);
    }
}
