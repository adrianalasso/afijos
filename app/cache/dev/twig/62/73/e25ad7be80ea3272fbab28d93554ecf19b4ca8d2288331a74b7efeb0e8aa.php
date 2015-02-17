<?php

/* MainBundle:Default:login.html.twig */
class __TwigTemplate_6273e25ad7be80ea3272fbab28d93554ecf19b4ca8d2288331a74b7efeb0e8aa extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title>Inicio de Sesión | Inicio de Sesión</title>
        <!--basic styles-->
        <link href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cnel.ico"), "html", null, true);
        echo "\">

        <!--[if IE 7]>
          <link rel=\"stylesheet\" href=\"assets/css/font-awesome-ie7.min.css\" />
        <![endif]-->

        <!--page specific plugin styles-->
        <!--fonts-->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300\" />
        <!--ace styles-->
        <link rel=\"stylesheet\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-responsive.min.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />

        <!--[if lte IE 8]>
          <link rel=\"stylesheet\" href=\"assets/css/ace-ie.min.css\" />
        <![endif]-->

        <!--inline styles related to this page-->
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    </head>

    <body class=\"login-layout\">
        <div class=\"main-container container-fluid\">
                <div class=\"main-content\">
                        <div class=\"row-fluid\">
                                <div class=\"span12\">
                                        <div class=\"login-container\">
                                                <div class=\"row-fluid\">
                                                    <div class=\"space-12\"></div>
                                                    <div class=\"center\">
                                                        <h1>
                                                            <span class=\"white\">Sistema Informático de Control de Activos</span>
                                                        </h1>
                                                    </div>
                                                </div>

                                                <div class=\"space-6\"></div>

                                                <div class=\"row-fluid\">
                                                        <div class=\"position-relative\">
                                                                <div id=\"login-box\" class=\"login-box visible widget-box no-border\">
                                                                        <div class=\"widget-body\">
                                                                                <div class=\"widget-main\">
                                                                                        <h4 class=\"header blue lighter bigger\">
                                                                                                <i class=\"icon-laptop blue\"></i>
                                                                                                Ingrese su información
                                                                                        </h4>

                                                                                        <div class=\"space-6\"></div>

                                                                                        <form method='post' action=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_login_check"), "html", null, true);
        echo "\">
                                                                                                <fieldset>
                                                                                                        <label>
                                                                                                                <span class=\"block input-icon input-icon-right\">
                                                                                                                        <input type=\"text\" class=\"span12\" placeholder=\"Nº de Cédula\" id='username' name='_username' value=\"";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
                                                                                                                        <i class=\"icon-user\"></i>
                                                                                                                </span>
                                                                                                        </label>

                                                                                                        <label>
                                                                                                                <span class=\"block input-icon input-icon-right\">
                                                                                                                        <input type=\"password\" class=\"span12\" placeholder=\"Contraseña\" id='password' name='_password'/>
                                                                                                                        <i class=\"icon-lock\"></i>
                                                                                                                </span>
                                                                                                        </label>
                                                                                                        <div class=\"space\"></div>
                                                                                                        <div class=\"clearfix\">
                                                                                                                <button id=\"\" class=\"width-35 pull-right btn btn-small btn-primary\" type=\"submit\">
                                                                                                                        <i class=\"icon-key\"></i>Entrar
                                                                                                                </button>
                                                                                                        </div>

                                                                                                        <div class=\"space-4\"></div>
                                                                                                </fieldset>
                                                                                        </form>
                                                                                </div><!--/widget-main-->

                                                                                <div class=\"toolbar clearfix\">
                                                                                        <div>
                                                                                                <a href=\"#\" class=\"user-signup-link span12\">
                                                                                                        Iniciar como Usuario Externo
                                                                                                        <i class=\"icon-arrow-right\"></i>
                                                                                                </a>
                                                                                        </div>
                                                                                </div>
                                                                        </div><!--/widget-body-->
                                                                </div><!--/login-box-->
                                                        </div><!--/position-relative-->
                                                </div>
                                        </div>
                                </div><!--/.span-->
                        </div><!--/.row-fluid-->
                </div>
        </div><!--/.main-container-->

        <!--basic scripts-->

        <!--[if !IE]>-->
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>
        <!--<![endif]-->

        <!--[if IE]>
        <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <![endif]-->

        <!--[if !IE]>-->
        <script type=\"text/javascript\">
            window.jQuery || document.write(\"<script src='";
        // line 118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
        </script>
        <!--<![endif]-->

        <!--[if IE]>
        <script type=\"text/javascript\">
            window.jQuery || document.write(\"<script src='";
        // line 124
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
        </script>
        <![endif]-->

        <script type=\"text/javascript\">
                if(\"ontouchend\" in document) document.write(\"<script src='";
        // line 129
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
        </script>
        <script src=\"";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

        <!--page specific plugin scripts-->

        <!--ace scripts-->
        <script src=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  199 => 137,  195 => 136,  187 => 131,  182 => 129,  174 => 124,  165 => 118,  109 => 65,  102 => 61,  60 => 22,  56 => 21,  52 => 20,  39 => 10,  35 => 9,  31 => 8,  27 => 7,  19 => 1,);
    }
}
