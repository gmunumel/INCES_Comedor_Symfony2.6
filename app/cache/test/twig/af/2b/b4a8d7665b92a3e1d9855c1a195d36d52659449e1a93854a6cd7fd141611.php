<?php

/* ::base.html.twig */
class __TwigTemplate_af2bb4a8d7665b92a3e1d9855c1a195d36d52659449e1a93854a6cd7fd141611 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'session' => array($this, 'block_session'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<?xml version=\"1.0\"?>
<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" xml:lang=\"en\" lang=\"en\">
<head>
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\" />
    <meta http-equiv=\"content-language\" content=\"en\" />
    <meta name=\"robots\" content=\"all,follow\" />

    <meta name=\"author\" lang=\"es\" content=\"All: Gabriel Muñumel [www.url.com]; e-mail: gabrielmunumel@gmail.com\" />

    <meta name=\"description\" content=\"Servicio de Comedor - INCES\" />
    <meta name=\"keywords\" content=\"Servicio, Comedor, CSS, HTML\" />

";
        // line 14
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "    <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"  />

    <title>";
        // line 26
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
</head>

<body>

<div id=\"main\">

    <!-- Header -->
    <div id=\"header\">

        <h1 id=\"logo\"><img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/Inces3.gif"), "html", null, true);
        echo "\" width=\"150\" height=\"100\" alt=\"\" /></h1>
        <hr class=\"noscreen\" />

        <!-- LightBox -->
        ";
        // line 43
        echo "        <div id=\"lightbox-loader\"></div><!-- /lightbox-panel -->

        <!-- Div lightbox
        <div id=\"lightbox\"> </div>
        < /lightbox -->

        <!-- Navigation -->
        <div id=\"nav\">
        ";
        // line 51
        $this->displayBlock('session', $context, $blocks);
        // line 52
        echo "        ";
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 53
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/profile/edit"), "method"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
            |
            <a href=\"";
            // line 55
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">
              ";
            // line 56
            echo "Logout";
            echo "
            </a>
        ";
        } else {
            // line 59
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/login"), "method"), "html", null, true);
            echo "\">";
            echo "Login";
            echo "</a>
        ";
        }
        // line 61
        echo "        <!--
            <a href=\"#\">About us</a> <span>|</span>
            <a href=\"#\">Support</a> <span>|</span>
            <a href=\"#\">Contact</a>
        -->
        </div>
        <!-- /nav -->

    </div> <!-- /header -->
    ";
        // line 81
        echo "
    <!-- Menu -->
    <br />

    <div id=\"fix-menu\">
    ";
        // line 86
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 87
            echo "        <div id=\"menu\">
            <ul class=\"menu\">
                <li><a href=\"";
            // line 89
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\"><span>Menu</span></a>
                    <div>
                        <ul>
                            <li><a href=\"";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\" class=\"parent\"><span>";
            echo "Today";
            echo "</span></a>
                            <div>
                                <ul>
                                    <li><a href=\"";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\"><span>";
            echo "List";
            echo "</span></a></li>
                                    <li><a href=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/newtoday"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Add";
            echo "</span></a></li>
                                </ul>
                            </div>
                            </li>
                            <li><a href=\"";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu"), "method"), "html", null, true);
            echo "\" class=\"parent\"><span>";
            echo "In General";
            echo "</span></a>
                                <div>
                                    <ul>
                                        <li><a href=\"";
            // line 103
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu"), "method"), "html", null, true);
            echo "\"><span>";
            echo "List";
            echo "</span></a></li>
                                        <li><a href=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/new"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Add";
            echo "</span></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/facturar"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Bill";
            echo "</span></a></li>
                <li><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Users";
            echo "</span></a>
                    <div>
                        <ul>
                            <li><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/"), "method"), "html", null, true);
            echo "\" ><span>";
            echo "List";
            echo "</span></a></li>
                            <li><a href=\"";
            // line 116
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/new"), "method"), "html", null, true);
            echo "\" ><span>";
            echo "Add";
            echo "</span></a></li>
                            <li><a href=\"#\" class=\"parent\"><span>";
            // line 117
            echo "Bulk Operation";
            echo "</span></a>
                                <div>
                                    <ul>
                                        <li><a href=\"";
            // line 120
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/cargamasiva"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Load";
            echo "</span></a></li>
                                        <li><a href=\"";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/editmasivo"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Update";
            echo "</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href=\"";
            // line 125
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/search"), "method"), "html", null, true);
            echo "\"><span>";
            echo "See Users by Id";
            echo "</span></a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/list"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Administrative Personal";
            echo "</span></a>
                    <div>
                        <ul>
                            <li><a href=\"";
            // line 132
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/list"), "method"), "html", null, true);
            echo "\"><span>";
            echo "List";
            echo "</span></a></li>
                            <li><a href=\"";
            // line 133
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/register"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Add";
            echo "</span></a></li>
                            <li><a href=\"";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/admin/profile/edit"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Edit my infomation";
            echo "</span></a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/contabilidad"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Accounting";
            echo "</span></a>
                    <div>
                        <ul>
                            <li><a href=\"";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/contabilidad/reporteingresos"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Income";
            echo "</span></a></li>
                            <li><a href=\"";
            // line 142
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/contabilidad/reporteusuarios"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Users";
            echo "</span></a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"";
            // line 146
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol"), "method"), "html", null, true);
            echo "\"><span>Rol</span></a>
                    <div>
                        <ul>
                            <li><a href=\"";
            // line 149
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol"), "method"), "html", null, true);
            echo "\"><span>";
            echo "List";
            echo "</span></a></li>
                            <li><a href=\"";
            // line 150
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/rol/new"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Add";
            echo "</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>

    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_GERENTE")) {
            // line 158
            echo "        <div id=\"menu\">
            <ul class=\"menu\">
                <li><a href=\"";
            // line 160
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\"><span>Menu</span></a>
                    <div>
                        <ul>
                            <li><a href=\"";
            // line 163
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\" class=\"parent\"><span>";
            echo "Today";
            echo "</span></a>
                            <div>
                                <ul>
                                    <li><a href=\"";
            // line 166
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\"><span>";
            echo "List";
            echo "</span></a></li>
                                    <li><a href=\"";
            // line 167
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/newtoday"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Add";
            echo "</span></a></li>
                                </ul>
                            </div>
                            </li>
                            <li><a href=\"";
            // line 171
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu"), "method"), "html", null, true);
            echo "\" class=\"parent\"><span>";
            echo "In General";
            echo "</span></a>
                                <div>
                                    <ul>
                                        <li><a href=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu"), "method"), "html", null, true);
            echo "\"><span>";
            echo "List";
            echo "</span></a></li>
                                        <li><a href=\"";
            // line 175
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/new"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Add";
            echo "</span></a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"";
            // line 182
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/facturar"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Bill";
            echo "</span></a></li>
                <li><a href=\"";
            // line 183
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Users";
            echo "</span></a>
                    <div>
                        <ul>
\t\t\t    <li><a href=\"";
            // line 186
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/"), "method"), "html", null, true);
            echo "\" ><span>";
            echo "List";
            echo "</span></a></li>
                            <li><a href=\"";
            // line 187
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/new"), "method"), "html", null, true);
            echo "\" ><span>";
            echo "Add";
            echo "</span></a></li>
                            <li><a href=\"#\" class=\"parent\"><span>";
            // line 188
            echo "Bulk Operation";
            echo "</span></a>
                                <div>
                                    <ul>
                                        <li><a href=\"";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/cargamasiva"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Load";
            echo "</span></a></li>
                                        <li><a href=\"";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/editmasivo"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Update";
            echo "</span></a></li>
                                    </ul>
                                </div>
                            </li>
                            <li><a href=\"";
            // line 196
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/search"), "method"), "html", null, true);
            echo "\"><span>";
            echo "User by Id";
            echo "</span></a></li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_OPERADOR")) {
            // line 203
            echo "        <div id=\"menu\">
            <ul class=\"menu\">
                <li><a href=\"";
            // line 205
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\" class=\"parent\"><span>";
            echo "Today's Menu";
            echo "</span></a>
                    <div>
                        <ul>
                            <li><a href=\"";
            // line 208
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\"><span>";
            echo "List";
            echo "</span></a></li>
                            <li><a href=\"";
            // line 209
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/newtoday"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Add";
            echo "</span></a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=\"";
            // line 213
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/search"), "method"), "html", null, true);
            echo "\"><span>";
            echo "See Users by Id";
            echo "</span></a></li>
                <li><a href=\"";
            // line 214
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/facturar"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Bill";
            echo "</span></a></li>
            </ul>
        </div>
    ";
        } else {
            // line 218
            echo "        <div id=\"menu\">
            <ul class=\"menu\">
                <li><a href=\"";
            // line 220
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/menu/today"), "method"), "html", null, true);
            echo "\"><span>";
            echo "Today's Menu";
            echo "</span></a></li>
                <li><a href=\"";
            // line 221
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uriForPath", array(0 => "/#!/usuario/search"), "method"), "html", null, true);
            echo "\"><span>";
            echo "See Users by Id";
            echo "</span></a></li>
            </ul>
        </div>
    ";
        }
        // line 225
        echo "    </div>

    <!-- End Menu -->

    <!-- Promo -->

    <div id=\"col-top\"></div>
    <div id=\"col\" class=\"box\">

        ";
        // line 237
        echo "
        <!-- Screenshot in browser (replace img/browser.gif) -->
        ";
        // line 239
        $this->displayBlock('body', $context, $blocks);
        // line 240
        echo "        <div id=\"content\"></div>

    </div> <!-- /col -->
    <div id=\"col-bottom\"></div>

    <hr class=\"noscreen\" />

    ";
        // line 376
        echo "
    <hr class=\"noscreen\" />

    <!-- Footer -->
    <div id=\"footer\">
\t<h1 id=\"logo\"><img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/down_principal.jpg"), "html", null, true);
        echo "\" width=\"900\" height=\"90\" alt=\"\" /></h1>

        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->
        ";
        // line 389
        echo "        <!-- Do you want remove this backlinks? Look at www.nuviotemplates.com/payment.php -->

        <!--<p>Copyright &copy;&nbsp;2008 <strong><a href=\"#\">Your
        Name</a></strong>, All Rights Reserved &reg;</p>-->

    </div> <!-- /footer -->

    <div id=\"lightbox\"> </div>
</div> <!-- /main -->

";
        // line 399
        $this->displayBlock('javascripts', $context, $blocks);
        // line 412
        echo "<a href=\"http://apycom.com/\" ></a>
</body>
</html>
";
    }

    // line 14
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 15
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/reset.css"), "html", null, true);
        echo "\" media=\"screen,projection\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\" media=\"screen,projection\" type=\"text/css\" rel=\"stylesheet\" />
    <!--[if lte IE 6]><link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main-msie.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" /><![endif]-->
    <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" media=\"screen,projection\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/print.css"), "html", null, true);
        echo "\" media=\"print\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/menu.css"), "html", null, true);
        echo "\" media=\"screen,projection\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/jquery-ui-1.8.21.custom.css"), "html", null, true);
        echo "\" media=\"screen,projection\" type=\"text/css\" rel=\"stylesheet\" />
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/mycss.css"), "html", null, true);
        echo "\" media=\"screen,projection\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "INCES - ";
        echo "DINNING";
    }

    // line 51
    public function block_session($context, array $blocks = array())
    {
    }

    // line 239
    public function block_body($context, array $blocks = array())
    {
    }

    // line 399
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  614 => 399,  609 => 239,  604 => 51,  597 => 26,  591 => 22,  587 => 21,  583 => 20,  579 => 19,  575 => 18,  571 => 17,  567 => 16,  562 => 15,  559 => 14,  552 => 412,  550 => 399,  538 => 389,  532 => 381,  525 => 376,  516 => 240,  514 => 239,  510 => 237,  499 => 225,  490 => 221,  484 => 220,  480 => 218,  471 => 214,  465 => 213,  456 => 209,  450 => 208,  442 => 205,  438 => 203,  426 => 196,  417 => 192,  411 => 191,  405 => 188,  399 => 187,  393 => 186,  385 => 183,  379 => 182,  367 => 175,  361 => 174,  353 => 171,  344 => 167,  338 => 166,  330 => 163,  324 => 160,  320 => 158,  307 => 150,  301 => 149,  295 => 146,  286 => 142,  280 => 141,  272 => 138,  263 => 134,  257 => 133,  251 => 132,  243 => 129,  234 => 125,  225 => 121,  219 => 120,  213 => 117,  207 => 116,  201 => 115,  193 => 112,  187 => 111,  175 => 104,  169 => 103,  161 => 100,  152 => 96,  146 => 95,  138 => 92,  132 => 89,  128 => 87,  126 => 86,  119 => 81,  108 => 61,  100 => 59,  94 => 56,  90 => 55,  82 => 53,  79 => 52,  77 => 51,  67 => 43,  60 => 36,  47 => 26,  41 => 24,  39 => 14,  24 => 1,);
    }
}
