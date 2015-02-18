<?php

/* TestBundle::login.html.twig */
class __TwigTemplate_486a95322645476b73886a58e437d2e8571b65338baf6fcba2bebc3bf2c200fc extends Twig_Template
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
                <title>Login Page - Ace Admin</title>

                <meta name=\"description\" content=\"User login page\" />
                <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

                <!--basic styles-->

                <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
                <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />

                <!--[if IE 7]>
                  <link rel=\"stylesheet\" href=\"assets/css/font-awesome-ie7.min.css\" />
                <![endif]-->

                <!--page specific plugin styles-->

                <!--fonts-->

                <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300\" />

                <!--ace styles-->

                <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace.min.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-responsive.min.css"), "html", null, true);
        echo "\" />
                <link rel=\"stylesheet\" href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" />

                <!--[if lte IE 8]>
                  <link rel=\"stylesheet\" href=\"assets/css/ace-ie.min.css\" />
                <![endif]-->

                <!--inline styles related to this page-->
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>

        <body class=\"login-layout\">
                <div class=\"main-container container-fluid\">
                        <div class=\"main-content\">
                                <div class=\"row-fluid\">
                                        <div class=\"span12\">
                                                <div class=\"login-container\">
                                                        <div class=\"row-fluid\">
                                                                <div class=\"center\">
                                                                        <h1>
                                                                                <i class=\"icon-leaf green\"></i>
                                                                                <span class=\"red\">Ace</span>
                                                                                <span class=\"white\">Application</span>
                                                                        </h1>
                                                                        <h4 class=\"blue\">&copy; Company Name</h4>
                                                                </div>
                                                        </div>

                                                        <div class=\"space-6\"></div>

                                                        <div class=\"row-fluid\">
                                                                <div class=\"position-relative\">
                                                                        <div id=\"login-box\" class=\"login-box visible widget-box no-border\">
                                                                                <div class=\"widget-body\">
                                                                                        <div class=\"widget-main\">
                                                                                                <h4 class=\"header blue lighter bigger\">
                                                                                                        <i class=\"icon-coffee green\"></i>
                                                                                                        Please Enter Your Information
                                                                                                </h4>

                                                                                                <div class=\"space-6\"></div>

                                                                                                <form />
                                                                                                        <fieldset>
                                                                                                                <label>
                                                                                                                        <span class=\"block input-icon input-icon-right\">
                                                                                                                                <input type=\"text\" class=\"span12\" placeholder=\"Username\" />
                                                                                                                                <i class=\"icon-user\"></i>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <label>
                                                                                                                        <span class=\"block input-icon input-icon-right\">
                                                                                                                                <input type=\"password\" class=\"span12\" placeholder=\"Password\" />
                                                                                                                                <i class=\"icon-lock\"></i>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <div class=\"space\"></div>

                                                                                                                <div class=\"clearfix\">
                                                                                                                        <label class=\"inline\">
                                                                                                                                <input type=\"checkbox\" />
                                                                                                                                <span class=\"lbl\"> Remember Me</span>
                                                                                                                        </label>

                                                                                                                        <button onclick=\"return false;\" class=\"width-35 pull-right btn btn-small btn-primary\">
                                                                                                                                <i class=\"icon-key\"></i>
                                                                                                                                Login
                                                                                                                        </button>
                                                                                                                </div>

                                                                                                                <div class=\"space-4\"></div>
                                                                                                        </fieldset>
                                                                                                </form>

                                                                                                <div class=\"social-or-login center\">
                                                                                                        <span class=\"bigger-110\">Or Login Using</span>
                                                                                                </div>

                                                                                                <div class=\"social-login center\">
                                                                                                        <a class=\"btn btn-primary\">
                                                                                                                <i class=\"icon-facebook\"></i>
                                                                                                        </a>

                                                                                                        <a class=\"btn btn-info\">
                                                                                                                <i class=\"icon-twitter\"></i>
                                                                                                        </a>

                                                                                                        <a class=\"btn btn-danger\">
                                                                                                                <i class=\"icon-google-plus\"></i>
                                                                                                        </a>
                                                                                                </div>
                                                                                        </div><!--/widget-main-->

                                                                                        <div class=\"toolbar clearfix\">
                                                                                                <div>
                                                                                                        <a href=\"#\" onclick=\"show_box('forgot-box'); return false;\" class=\"forgot-password-link\">
                                                                                                                <i class=\"icon-arrow-left\"></i>
                                                                                                                I forgot my password
                                                                                                        </a>
                                                                                                </div>

                                                                                                <div>
                                                                                                        <a href=\"#\" onclick=\"show_box('signup-box'); return false;\" class=\"user-signup-link\">
                                                                                                                I want to register
                                                                                                                <i class=\"icon-arrow-right\"></i>
                                                                                                        </a>
                                                                                                </div>
                                                                                        </div>
                                                                                </div><!--/widget-body-->
                                                                        </div><!--/login-box-->

                                                                        <div id=\"forgot-box\" class=\"forgot-box widget-box no-border\">
                                                                                <div class=\"widget-body\">
                                                                                        <div class=\"widget-main\">
                                                                                                <h4 class=\"header red lighter bigger\">
                                                                                                        <i class=\"icon-key\"></i>
                                                                                                        Retrieve Password
                                                                                                </h4>

                                                                                                <div class=\"space-6\"></div>
                                                                                                <p>
                                                                                                        Enter your email and to receive instructions
                                                                                                </p>

                                                                                                <form />
                                                                                                        <fieldset>
                                                                                                                <label>
                                                                                                                        <span class=\"block input-icon input-icon-right\">
                                                                                                                                <input type=\"email\" class=\"span12\" placeholder=\"Email\" />
                                                                                                                                <i class=\"icon-envelope\"></i>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <div class=\"clearfix\">
                                                                                                                        <button onclick=\"return false;\" class=\"width-35 pull-right btn btn-small btn-danger\">
                                                                                                                                <i class=\"icon-lightbulb\"></i>
                                                                                                                                Send Me!
                                                                                                                        </button>
                                                                                                                </div>
                                                                                                        </fieldset>
                                                                                                </form>
                                                                                        </div><!--/widget-main-->

                                                                                        <div class=\"toolbar center\">
                                                                                                <a href=\"#\" onclick=\"show_box('login-box'); return false;\" class=\"back-to-login-link\">
                                                                                                        Back to login
                                                                                                        <i class=\"icon-arrow-right\"></i>
                                                                                                </a>
                                                                                        </div>
                                                                                </div><!--/widget-body-->
                                                                        </div><!--/forgot-box-->

                                                                        <div id=\"signup-box\" class=\"signup-box widget-box no-border\">
                                                                                <div class=\"widget-body\">
                                                                                        <div class=\"widget-main\">
                                                                                                <h4 class=\"header green lighter bigger\">
                                                                                                        <i class=\"icon-group blue\"></i>
                                                                                                        New User Registration
                                                                                                </h4>

                                                                                                <div class=\"space-6\"></div>
                                                                                                <p> Enter your details to begin: </p>

                                                                                                <form />
                                                                                                        <fieldset>
                                                                                                                <label>
                                                                                                                        <span class=\"block input-icon input-icon-right\">
                                                                                                                                <input type=\"email\" class=\"span12\" placeholder=\"Email\" />
                                                                                                                                <i class=\"icon-envelope\"></i>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <label>
                                                                                                                        <span class=\"block input-icon input-icon-right\">
                                                                                                                                <input type=\"text\" class=\"span12\" placeholder=\"Username\" />
                                                                                                                                <i class=\"icon-user\"></i>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <label>
                                                                                                                        <span class=\"block input-icon input-icon-right\">
                                                                                                                                <input type=\"password\" class=\"span12\" placeholder=\"Password\" />
                                                                                                                                <i class=\"icon-lock\"></i>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <label>
                                                                                                                        <span class=\"block input-icon input-icon-right\">
                                                                                                                                <input type=\"password\" class=\"span12\" placeholder=\"Repeat password\" />
                                                                                                                                <i class=\"icon-retweet\"></i>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <label>
                                                                                                                        <input type=\"checkbox\" />
                                                                                                                        <span class=\"lbl\">
                                                                                                                                I accept the
                                                                                                                                <a href=\"#\">User Agreement</a>
                                                                                                                        </span>
                                                                                                                </label>

                                                                                                                <div class=\"space-24\"></div>

                                                                                                                <div class=\"clearfix\">
                                                                                                                        <button type=\"reset\" class=\"width-30 pull-left btn btn-small\">
                                                                                                                                <i class=\"icon-refresh\"></i>
                                                                                                                                Reset
                                                                                                                        </button>

                                                                                                                        <button onclick=\"return false;\" class=\"width-65 pull-right btn btn-small btn-success\">
                                                                                                                                Register
                                                                                                                                <i class=\"icon-arrow-right icon-on-right\"></i>
                                                                                                                        </button>
                                                                                                                </div>
                                                                                                        </fieldset>
                                                                                                </form>
                                                                                        </div>

                                                                                        <div class=\"toolbar center\">
                                                                                                <a href=\"#\" onclick=\"show_box('login-box'); return false;\" class=\"back-to-login-link\">
                                                                                                        <i class=\"icon-arrow-left\"></i>
                                                                                                        Back to login
                                                                                                </a>
                                                                                        </div>
                                                                                </div><!--/widget-body-->
                                                                        </div><!--/signup-box-->
                                                                </div><!--/position-relative-->
                                                        </div>
                                                </div>
                                        </div><!--/.span-->
                                </div><!--/.row-fluid-->
                        </div>
                </div><!--/.main-container-->

                <!--basic scripts-->

                <!--[if !IE]>-->
                <!--script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script-->
                <script src=\"";
        // line 268
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
                <!--<![endif]-->

                <!--[if IE]>
                <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
                <![endif]-->

                <!--[if !IE]>-->

                <script type=\"text/javascript\">
                        window.jQuery || document.write(\"<script src='";
        // line 278
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
                </script>

                <!--<![endif]-->

                <!--[if IE]>
                <script type=\"text/javascript\">
                 window.jQuery || document.write(\"<script src='";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
                </script>
                <![endif]-->

                <script type=\"text/javascript\">
                        if(\"ontouchend\" in document) document.write(\"<script src='";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
                </script>
                
                <script src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

                <!--page specific plugin scripts-->

                <!--ace scripts-->

                <script src=\"";
        // line 299
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
                <script src=\"";
        // line 300
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>

                <!--inline scripts related to this page-->

                <script type=\"text/javascript\">
                        function show_box(id) {
                         \$('.widget-box.visible').removeClass('visible');
                         \$('#'+id).addClass('visible');
                        }
                </script>
        </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "TestBundle::login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  356 => 300,  352 => 299,  343 => 293,  337 => 290,  329 => 285,  319 => 278,  306 => 268,  65 => 30,  61 => 29,  57 => 28,  40 => 14,  36 => 13,  32 => 12,  19 => 1,);
    }
}
