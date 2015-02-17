<?php

/* TestBundle::index.html.twig */
class __TwigTemplate_4fe12127fd86e1f94d1d75f22e20fdc58cd83ed2ed747020fc6ac950baacf607 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'styleinline' => array($this, 'block_styleinline'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
\t<head>
\t\t<meta charset=\"utf-8\" />
\t\t<title>";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        echo "</title>

\t\t<meta name=\"description\" content=\"overview &amp; stats\" />
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

\t\t<!--basic styles-->

\t\t";
        // line 13
        echo "                                                     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 15
        echo "                                                     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 17
        echo "                                                     <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
                                                     
                                                     <link rel=\"icon\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cnel.ico"), "html", null, true);
        echo "\">

\t\t<!--[if IE 7]>
\t\t  <link rel=\"stylesheet\" href=\"assets/css/font-awesome-ie7.min.css\" />
\t\t<![endif]-->

\t\t<!--page specific plugin styles-->
";
        // line 27
        echo "                ";
        $this->displayBlock('pluginstyle', $context, $blocks);
        // line 30
        echo "
\t\t<!--fonts-->

\t\t<link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300\" />
                                                     ";
        // line 35
        echo "
\t\t<!--ace styles-->

\t\t";
        // line 38
        echo " 
                                                    <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 40
        echo " 
                                                    <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
\t\t";
        // line 43
        echo "                                                    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">

\t\t<!--[if lte IE 8]>
\t\t  <link rel=\"stylesheet\" href=\"assets/css/ace-ie.min.css\" />
\t\t<![endif]-->

\t\t<!--inline styles related to this page-->
";
        // line 51
        $this->displayBlock('styleinline', $context, $blocks);
        // line 54
        echo "\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" /></head>

\t<body>
\t\t<div class=\"navbar\">
\t\t\t<div class=\"navbar-inner\">
\t\t\t\t<div class=\"container-fluid\">
\t\t\t\t\t<a href=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_index"), "html", null, true);
        echo "\" class=\"brand\">
\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t<i class=\"icon-leaf\"></i>
\t\t\t\t\t\t\tAce Admin
\t\t\t\t\t\t</small>
\t\t\t\t\t</a><!--/.brand-->

\t\t\t\t\t<ul class=\"nav ace-nav pull-right\">
\t\t\t\t\t\t<li class=\"grey\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-tasks\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-grey\">4</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer\">
\t\t\t\t\t\t\t\t<li class=\"nav-header\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-ok\"></i>
\t\t\t\t\t\t\t\t\t4 Tasks to complete
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_supdate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Software Update</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">65%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini \">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:65%\" class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_hupdate"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Hardware Upgrade</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">35%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini progress-danger\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:35%\" class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_unit"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Unit Testing</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">15%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini progress-warning\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:15%\" class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 120
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_bug"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">Bug Fixes</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right\">90%</span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"progress progress-mini progress-success progress-striped active\">
\t\t\t\t\t\t\t\t\t\t\t<div style=\"width:90%\" class=\"bar\"></div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_tareas"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\tSee tasks with details
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"purple\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-bell-alt icon-animated-bell\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-important\">8</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"pull-right dropdown-navbar navbar-pink dropdown-menu dropdown-caret dropdown-closer\">
\t\t\t\t\t\t\t\t<li class=\"nav-header\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-warning-sign\"></i>
\t\t\t\t\t\t\t\t\t8 Notifications
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_new_comments"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-mini no-hover btn-pink icon-comment\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNew Comments
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+12</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_signedup"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-mini btn-primary icon-user\"></i>
\t\t\t\t\t\t\t\t\t\tBob just signed up as an editor ...
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_new_orders"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-mini no-hover btn-success icon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tNew Orders
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-success\">+8</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 185
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_seguidores"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-left\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"btn btn-mini no-hover btn-info icon-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tFollowers
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t<span class=\"pull-right badge badge-info\">+11</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_ver_notific"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\tSee all notifications
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"green\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" class=\"dropdown-toggle\" href=\"#\">
\t\t\t\t\t\t\t\t<i class=\"icon-envelope icon-animated-vertical\"></i>
\t\t\t\t\t\t\t\t<span class=\"badge badge-success\">5</span>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer\">
\t\t\t\t\t\t\t\t<li class=\"nav-header\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-envelope-alt\"></i>
\t\t\t\t\t\t\t\t\t5 Messages
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Alex's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Alex:</span>
\t\t\t\t\t\t\t\t\t\t\t\tCiao sociis natoque penatibus et auctor ...
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>a moment ago</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar3.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Susan's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Susan:</span>
\t\t\t\t\t\t\t\t\t\t\t\tVestibulum id ligula porta felis euismod ...
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>20 minutes ago</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar4.png"), "html", null, true);
        echo "\" class=\"msg-photo\" alt=\"Bob's Avatar\" />
\t\t\t\t\t\t\t\t\t\t<span class=\"msg-body\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-title\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">Bob:</span>
\t\t\t\t\t\t\t\t\t\t\t\tNullam quis risus eget urna mollis ornare ...
\t\t\t\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t\t\t\t<span class=\"msg-time\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t<span>3:15 pm</span>
\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\tSee all messages
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>

\t\t\t\t\t\t<li class=\"light-blue\">
\t\t\t\t\t\t\t<a data-toggle=\"dropdown\" href=\"\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t<img class=\"nav-user-photo\" src=\"";
        // line 279
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/user.jpg"), "html", null, true);
        echo "\" alt=\"Jason's Photo\" />
\t\t\t\t\t\t\t\t<span class=\"user-info\">
\t\t\t\t\t\t\t\t\t<small>Welcome,</small>
\t\t\t\t\t\t\t\t\tJason
\t\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t\t<i class=\"icon-caret-down\"></i>
\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t<ul class=\"user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer\">
\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-cog\"></i>
\t\t\t\t\t\t\t\t\t\tSettings
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 297
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_user_perfil"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-user\"></i>
\t\t\t\t\t\t\t\t\t\tProfile
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t<li class=\"divider\"></li>

\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<a href=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_user_logout"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t<i class=\"icon-off\"></i>
\t\t\t\t\t\t\t\t\t\tLogout
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</li>
\t\t\t\t\t</ul><!--/.ace-nav-->
\t\t\t\t</div><!--/.container-fluid-->
\t\t\t</div><!--/.navbar-inner-->
\t\t</div>

\t\t<div class=\"main-container container-fluid\">
\t\t\t<a class=\"menu-toggler\" id=\"menu-toggler\" href=\"#\">
\t\t\t\t<span class=\"menu-text\"></span>
\t\t\t</a>

\t\t\t<div class=\"sidebar\" id=\"sidebar\">
\t\t\t\t<div class=\"sidebar-shortcuts\" id=\"sidebar-shortcuts\">
\t\t\t\t\t<div class=\"sidebar-shortcuts-large\" id=\"sidebar-shortcuts-large\">
\t\t\t\t\t\t<button class=\"btn btn-small btn-success\">
\t\t\t\t\t\t\t<i class=\"icon-signal\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button class=\"btn btn-small btn-info\">
\t\t\t\t\t\t\t<i class=\"icon-pencil\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button class=\"btn btn-small btn-warning\">
\t\t\t\t\t\t\t<i class=\"icon-group\"></i>
\t\t\t\t\t\t</button>

\t\t\t\t\t\t<button class=\"btn btn-small btn-danger\">
\t\t\t\t\t\t\t<i class=\"icon-cogs\"></i>
\t\t\t\t\t\t</button>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"sidebar-shortcuts-mini\" id=\"sidebar-shortcuts-mini\">
\t\t\t\t\t\t<span class=\"btn btn-success\"></span>

\t\t\t\t\t\t<span class=\"btn btn-info\"></span>

\t\t\t\t\t\t<span class=\"btn btn-warning\"></span>

\t\t\t\t\t\t<span class=\"btn btn-danger\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div><!--#sidebar-shortcuts-->

\t\t\t\t<ul class=\"nav nav-list\">
\t\t\t\t\t<li  id=\"mninicio\">
\t\t\t\t\t\t<a href=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_index"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"icon-dashboard\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Dashboard </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li id=\"mntipografia\">
\t\t\t\t\t\t<a href=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_tipografia"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"icon-text-width\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Typography </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"icon-desktop\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> UI Elements </span>

\t\t\t\t\t\t\t<b class=\"arrow icon-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li id=\"mnelementos\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_elements"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tElements
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li id=\"mnbotones\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 386
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_buttons"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tButtons &amp; Icons
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li id=\"mnarbol\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_treeview"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tTreeview
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>

\t\t\t\t\t\t\t\t\tThree Level Menu
\t\t\t\t\t\t\t\t\t<b class=\"arrow icon-angle-down\"></b>
\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t\t<li id=\"mnitem1\">
\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-leaf\"></i>
\t\t\t\t\t\t\t\t\t\t\tItem #1
\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil\"></i>

\t\t\t\t\t\t\t\t\t\t\t4th level
\t\t\t\t\t\t\t\t\t\t\t<b class=\"arrow icon-angle-down\"></b>
\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t\t\t\t\t<li id=\"mnagregar\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tAdd Product
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t<li id=\"mnver\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-eye-open\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\tView Products
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li id=\"mntabla\">
\t\t\t\t\t\t<a href=\"";
        // line 445
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_tablas"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"icon-list\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Tables </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Forms </span>

\t\t\t\t\t\t\t<b class=\"arrow icon-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li  id=\"mnforms\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 461
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_forms"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tForm Elements
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li  id=\"mnformswz\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 468
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_form_wizard"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tWizard &amp; Validation
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li  id=\"mnformswy\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_wysiwyg"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tWysiwyg &amp; Markdown
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li  id=\"mnwidgets\">
\t\t\t\t\t\t<a href=\"";
        // line 484
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_widgets"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"icon-list-alt\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Widgets </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li  id=\"mncalendario\">
\t\t\t\t\t\t<a href=\"";
        // line 491
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_calendario"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"icon-calendar\"></i>

\t\t\t\t\t\t\t<span class=\"menu-text\">
\t\t\t\t\t\t\t\tCalendar
\t\t\t\t\t\t\t\t<span class=\"badge badge-transparent tooltip-error\" title=\"2&nbsp;Important&nbsp;Events\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-warning-sign red bigger-130\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li  id=\"mngaleria\">
\t\t\t\t\t\t<a href=\"";
        // line 504
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_galeria"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t<i class=\"icon-picture\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> Gallery </span>
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"icon-tag\"></i>
\t\t\t\t\t\t\t<span class=\"menu-text\"> More Pages </span>

\t\t\t\t\t\t\t<b class=\"arrow icon-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li  id=\"mnperfil\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 520
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_user_perfil"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tUser Profile
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li  id=\"mntbprecio\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 527
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_tabla_precio"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tPricing Tables
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li id=\"mnfactura\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_factura"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tInvoice
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li id=\"mnlogin\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_user_login"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tLogin &amp; Register
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>

\t\t\t\t\t<li>
\t\t\t\t\t\t<a href=\"#\" class=\"dropdown-toggle\">
\t\t\t\t\t\t\t<i class=\"icon-file-alt\"></i>

\t\t\t\t\t\t\t<span class=\"menu-text\">
\t\t\t\t\t\t\t\tOther Pages
\t\t\t\t\t\t\t\t<span class=\"badge badge-primary \">4</span>
\t\t\t\t\t\t\t</span>

\t\t\t\t\t\t\t<b class=\"arrow icon-angle-down\"></b>
\t\t\t\t\t\t</a>

\t\t\t\t\t\t<ul class=\"submenu\">
\t\t\t\t\t\t\t<li id=\"mnerror4\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 563
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_error4"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tError 404
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li id=\"mnerror5\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 570
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_error5"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tError 500
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li id=\"mngrid\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 577
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_grid"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tGrid
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t<li id=\"mnblanco\">
\t\t\t\t\t\t\t\t<a href=\"";
        // line 584
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_blanco"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\t\tBlank Page
\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t</ul><!--/.nav-list-->

\t\t\t\t<div class=\"sidebar-collapse\" id=\"sidebar-collapse\">
\t\t\t\t\t<i class=\"icon-double-angle-left\"></i>
\t\t\t\t</div>
\t\t\t</div>

\t\t\t<div class=\"main-content\">
";
        // line 599
        echo " 
                                                                                                          ";
        // line 600
        $this->displayBlock('mapasitio', $context, $blocks);
        // line 625
        echo "                            ";
        $this->displayBlock('pagecontent', $context, $blocks);
        // line 1751
        echo "                                ";
        echo " 

\t\t\t\t<div class=\"ace-settings-container\" id=\"ace-settings-container\">
\t\t\t\t\t<div class=\"btn btn-app btn-mini btn-warning ace-settings-btn\" id=\"ace-settings-btn\">
\t\t\t\t\t\t<i class=\"icon-cog bigger-150\"></i>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"ace-settings-box\" id=\"ace-settings-box\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"pull-left\">
\t\t\t\t\t\t\t\t<select id=\"skin-colorpicker\" class=\"hide\">
\t\t\t\t\t\t\t\t\t<option data-class=\"default\" value=\"#438EB9\" />#438EB9
\t\t\t\t\t\t\t\t\t<option data-class=\"skin-1\" value=\"#222A2D\" />#222A2D
\t\t\t\t\t\t\t\t\t<option data-class=\"skin-2\" value=\"#C6487E\" />#C6487E
\t\t\t\t\t\t\t\t\t<option data-class=\"skin-3\" value=\"#D0D0D0\" />#D0D0D0
\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<span>&nbsp; Choose Skin</span>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace-checkbox-2\" id=\"ace-settings-header\" />
\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-header\"> Fixed Header</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace-checkbox-2\" id=\"ace-settings-sidebar\" />
\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-sidebar\"> Fixed Sidebar</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace-checkbox-2\" id=\"ace-settings-breadcrumbs\" />
\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-breadcrumbs\"> Fixed Breadcrumbs</label>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<input type=\"checkbox\" class=\"ace-checkbox-2\" id=\"ace-settings-rtl\" />
\t\t\t\t\t\t\t<label class=\"lbl\" for=\"ace-settings-rtl\"> Right To Left (rtl)</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div><!--/#ace-settings-container-->
\t\t\t</div><!--/.main-content-->
\t\t</div><!--/.main-container-->

\t\t<a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-small btn-inverse\">
\t\t\t<i class=\"icon-double-angle-up icon-only bigger-110\"></i>
\t\t</a>

\t\t<!--basic scripts-->

\t\t<!--[if !IE]>-->

\t\t<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script>

\t\t<!--<![endif]-->

\t\t<!--[if IE]>
<script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
<![endif]-->

\t\t<!--[if !IE]>-->

\t\t<script type=\"text/javascript\">
\t\t\twindow.jQuery || document.write(\"<script src='";
        // line 1814
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>

\t\t<!--<![endif]-->

\t\t<!--[if IE]>
<script type=\"text/javascript\">
 window.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
</script>
<![endif]-->

\t\t<script type=\"text/javascript\">
\t\t\tif(\"ontouchend\" in document) document.write(\"<script src='";
        // line 1826
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t\t</script>
                
\t\t";
        // line 1830
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>

\t\t<!--page specific plugin scripts-->

\t\t<!--[if lte IE 8]>
\t\t  <script src=\"assets/js/excanvas.min.js\"></script>
\t\t<![endif]-->
";
        // line 1838
        echo "                ";
        $this->displayBlock('plugins', $context, $blocks);
        // line 1857
        echo "\t\t<!--ace scripts-->
\t\t";
        // line 1859
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>
\t\t";
        // line 1861
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>
\t\t<!--inline scripts related to this page-->
";
        // line 1864
        echo "                ";
        $this->displayBlock('script', $context, $blocks);
        // line 2066
        echo "\t</body>
</html>
";
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        echo "Página de Prueba";
    }

    // line 27
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 28
        echo "                ";
    }

    // line 51
    public function block_styleinline($context, array $blocks = array())
    {
    }

    // line 600
    public function block_mapasitio($context, array $blocks = array())
    {
        echo " 
\t\t\t\t<div class=\"breadcrumbs\" id=\"breadcrumbs\">
\t\t\t\t\t<ul class=\"breadcrumb\">
\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t<i class=\"icon-home home-icon\"></i>
\t\t\t\t\t\t\t<a href=\"";
        // line 605
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("test_index"), "html", null, true);
        echo "\">Home</a>

\t\t\t\t\t\t\t<span class=\"divider\">
\t\t\t\t\t\t\t\t<i class=\"icon-angle-right arrow-icon\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</li>
\t\t\t\t\t\t<li class=\"active\">Dashboard</li>
\t\t\t\t\t</ul><!--.breadcrumb-->

\t\t\t\t\t<div class=\"nav-search\" id=\"nav-search\">
\t\t\t\t\t\t<form class=\"form-search\" />
\t\t\t\t\t\t\t<span class=\"input-icon\">
\t\t\t\t\t\t\t\t<input type=\"text\" placeholder=\"Search ...\" class=\"input-small nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
\t\t\t\t\t\t\t\t<i class=\"icon-search nav-search-icon\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t</form>
\t\t\t\t\t</div><!--#nav-search-->
\t\t\t\t</div>
                                                                                                           ";
    }

    // line 625
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 626
        echo "\t\t\t\t<div class=\"page-content\">
\t\t\t\t\t<div class=\"page-header position-relative\">
\t\t\t\t\t\t<h1>
\t\t\t\t\t\t\tDashboard
\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t<i class=\"icon-double-angle-right\"></i>
\t\t\t\t\t\t\t\toverview &amp; stats
\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t</h1>
\t\t\t\t\t</div><!--/.page-header-->

\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t<div class=\"span12\">
\t\t\t\t\t\t\t<!--PAGE CONTENT BEGINS-->

\t\t\t\t\t\t\t<div class=\"alert alert-block alert-success\">
\t\t\t\t\t\t\t\t<button type=\"button\" class=\"close\" data-dismiss=\"alert\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-remove\"></i>
\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t<i class=\"icon-ok green\"></i>

\t\t\t\t\t\t\t\tWelcome to
\t\t\t\t\t\t\t\t<strong class=\"green\">
\t\t\t\t\t\t\t\t\tAce
\t\t\t\t\t\t\t\t\t<small>(v1.1.2)</small>
\t\t\t\t\t\t\t\t</strong>
\t\t\t\t\t\t\t\t,
 the lightweight, feature-rich and easy to use admin template.
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"space-6\"></div>

\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span7 infobox-container\">
\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-green  \">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-comments\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"infobox-data-number\">32</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">comments + 2 reviews</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"stat stat-success\">8%</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-blue  \">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-twitter\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"infobox-data-number\">11</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">new followers</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-success\">
\t\t\t\t\t\t\t\t\t\t\t+32%
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-pink  \">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-shopping-cart\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"infobox-data-number\">8</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">new orders</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"stat stat-important\">+4%</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-red  \">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-beaker\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"infobox-data-number\">7</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">experiments</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-orange2  \">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-chart\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sparkline\" data-values=\"196,128,202,177,154,94,100,170,224\"></span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"infobox-data-number\">6,251</span>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">pageviews</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"badge badge-success\">
\t\t\t\t\t\t\t\t\t\t\t7.2%
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-up\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-blue2  \">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"42\" data-size=\"46\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\">42</span>
\t\t\t\t\t\t\t\t\t\t\t\t%
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"infobox-text\">traffic used</span>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"bigger-110\">~</span>
\t\t\t\t\t\t\t\t\t\t\t\t58GB remaining
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"space-6\"></div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-green infobox-small infobox-dark\">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-progress\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"easy-pie-chart percentage\" data-percent=\"61\" data-size=\"39\">
\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\">61</span>
\t\t\t\t\t\t\t\t\t\t\t\t%
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">Task</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">Completion</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-blue infobox-small infobox-dark\">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-chart\">
\t\t\t\t\t\t\t\t\t\t\t<span class=\"sparkline\" data-values=\"3,4,2,3,4,4,2,2\"></span>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">Earnings</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">\$32,000</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"infobox infobox-grey infobox-small infobox-dark\">
\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-icon\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-download-alt\"></i>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-data\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">Downloads</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"infobox-content\">1,205</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"vspace\"></div>

\t\t\t\t\t\t\t\t<div class=\"span5\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-flat widget-header-small\">
\t\t\t\t\t\t\t\t\t\t\t<h5>
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-signal\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tTraffic Sources
\t\t\t\t\t\t\t\t\t\t\t</h5>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-toolbar no-border\">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-minier btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\tThis Week
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-angle-down icon-on-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-info pull-right dropdown-caret\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">This Week</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Last Week</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">This Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Last Month</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"piechart-placeholder\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr hr8 hr-double\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"grid3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"grey\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-facebook-sign icon-2x blue\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp; likes
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"bigger pull-right\">1,255</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"grid3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"grey\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-twitter-sign icon-2x purple\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp; tweets
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"bigger pull-right\">941</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"grid3\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"grey\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-pinterest-sign icon-2x red\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp; pins
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"bigger pull-right\">1,050</h4>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/widget-main-->
\t\t\t\t\t\t\t\t\t\t</div><!--/widget-body-->
\t\t\t\t\t\t\t\t\t</div><!--/widget-box-->
\t\t\t\t\t\t\t\t</div><!--/span-->
\t\t\t\t\t\t\t</div><!--/row-->

\t\t\t\t\t\t\t<div class=\"hr hr32 hr-dotted\"></div>

\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span5\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box transparent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-flat\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lighter\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-star orange\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tPopular Domains
\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-toolbar\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-action=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-chevron-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-caret-right blue\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tname
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-caret-right blue\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tprice
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<th class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-caret-right blue\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tstatus
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</thead>

\t\t\t\t\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>internet.com</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<s class=\"red\">\$29.99</s>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"green\">\$19.99</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info arrowed-right arrowed-in\">on sale</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>online.com</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<s class=\"red\"></s>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"green\">\$16.45</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success arrowed-in arrowed-in-right\">approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>newnet.com</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<s class=\"red\"></s>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"green\">\$15.00</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important arrowed\">pending</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>web.com</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<s class=\"red\">\$24.99</s>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"green\">\$19.95</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label arrowed\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<s>out of stock</s>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>domain.com</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<s class=\"red\"></s>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</small>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<b class=\"green\">\$12.00</b>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<td class=\"hidden-phone\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning arrowed arrowed-right\">SOLD</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t\t\t\t\t</table>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/widget-main-->
\t\t\t\t\t\t\t\t\t\t</div><!--/widget-body-->
\t\t\t\t\t\t\t\t\t</div><!--/widget-box-->
\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"span7\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box transparent\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header widget-header-flat\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lighter\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-signal\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSale Stats
\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-toolbar\">
\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" data-action=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-chevron-up\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main padding-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"sales-charts\"></div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/widget-main-->
\t\t\t\t\t\t\t\t\t\t</div><!--/widget-body-->
\t\t\t\t\t\t\t\t\t</div><!--/widget-box-->
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t<div class=\"hr hr32 hr-dotted\"></div>

\t\t\t\t\t\t\t<div class=\"row-fluid\">
\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box transparent\" id=\"recent-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lighter smaller\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-rss orange\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tRECENT
\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-toolbar no-border\">
\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"nav nav-tabs\" id=\"recent-tab\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#task-tab\">Tasks</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#member-tab\">Members</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a data-toggle=\"tab\" href=\"#comment-tab\">Comments</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main padding-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tab-content padding-8 overflow-visible\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"task-tab\" class=\"tab-pane active\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"smaller lighter green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-list\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSortable Lists
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</h4>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"tasks\" class=\"item-list\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-orange clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Answering customer questions</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right easy-pie-chart percentage\" data-size=\"30\" data-color=\"#ECCB71\" data-percent=\"42\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"percent\">42</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t%
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-red clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Fixing bugs</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"pull-right action-buttons\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"blue\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-pencil bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vbar\"></span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"vbar\"></span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-flag bigger-130\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-default clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Adding new features</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inline pull-right position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-minier bigger btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-cog icon-only bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Mark&nbsp;as&nbsp;done\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-blue clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Upgrading scripts used in template</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-grey clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Adding new skins</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-green clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Updating server software up</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li class=\"item-pink clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"inline\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"lbl\"> Cleaning up</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"member-tab\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"clearfix\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Bob Doe's avatar\" src=\"";
        // line 1146
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/user.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Bob Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">20 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">pending</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inline position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-minier bigger btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-angle-down icon-only bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Approve\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-warning\" data-rel=\"tooltip\" title=\"Reject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"orange\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-remove bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Joe Doe's avatar\" src=\"";
        // line 1199
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar2.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Joe Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">1 hour</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">pending</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inline position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-minier bigger btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-angle-down icon-only bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Approve\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-warning\" data-rel=\"tooltip\" title=\"Reject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"orange\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-remove bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Jim Doe's avatar\" src=\"";
        // line 1252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Jim Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">2 hour</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-warning\">pending</span>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inline position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-minier bigger btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-angle-down icon-only bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Approve\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-warning\" data-rel=\"tooltip\" title=\"Reject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"orange\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-remove bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Alex Doe's avatar\" src=\"";
        // line 1305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar5.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Alex Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">3 hour</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-important\">blocked</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Bob Doe's avatar\" src=\"";
        // line 1326
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar2.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Bob Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">6 hour</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success arrowed-in\">approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Susan's avatar\" src=\"";
        // line 1347
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar3.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Susan</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">yesterday</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success arrowed-in\">approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Phil Doe's avatar\" src=\"";
        // line 1368
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar4.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Phil Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">2 days ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info arrowed-in  arrowed-in-right\">online</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv memberdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Alexa Doe's avatar\" src=\"";
        // line 1389
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar1.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Alexa Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">3 days ago</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-success arrowed-in\">approved</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-group icon-2x green\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSee all members &nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr hr-double hr8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div><!--member-tab-->

\t\t\t\t\t\t\t\t\t\t\t\t\t<div id=\"comment-tab\" class=\"tab-pane\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"comments\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv commentdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Bob Doe's Avatar\" src=\"";
        // line 1426
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Bob Doe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">6 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-quote-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"inline position-relative\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-minier bigger btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-angle-down icon-only bigger-120\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Approve\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-ok bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-warning\" data-rel=\"tooltip\" title=\"Reject\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"orange\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-remove bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"red\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-trash bigger-110\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv commentdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Jennifer's Avatar\" src=\"";
        // line 1482
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar1.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Jennifer</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">15 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-quote-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv commentdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Joe's Avatar\" src=\"";
        // line 1514
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar2.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Joe</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"orange\">22 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-quote-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv commentdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Rita's Avatar\" src=\"";
        // line 1546
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar3.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Rita</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"red\">50 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-quote-left\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis &hellip;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-pencil\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-danger\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-trash\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr hr8\"></div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"center\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-comments-alt icon-2x green\"></i>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t&nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tSee all comments &nbsp;
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-arrow-right\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"hr hr-double hr8\"></div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/widget-main-->
\t\t\t\t\t\t\t\t\t\t</div><!--/widget-body-->
\t\t\t\t\t\t\t\t\t</div><!--/widget-box-->
\t\t\t\t\t\t\t\t</div><!--/span-->

\t\t\t\t\t\t\t\t<div class=\"span6\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box \">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-header\">
\t\t\t\t\t\t\t\t\t\t\t<h4 class=\"lighter smaller\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-comment blue\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tConversation
\t\t\t\t\t\t\t\t\t\t\t</h4>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"widget-body\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-main no-padding\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"dialogs\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv dialogdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Alexa's Avatar\" src=\"";
        // line 1611
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar1.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">4 sec</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Alexa</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv dialogdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"John's Avatar\" src=\"";
        // line 1635
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"blue\">38 sec</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">John</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv dialogdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Bob's Avatar\" src=\"";
        // line 1659
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/user.jpg"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"orange\">2 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Bob</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"label label-info arrowed arrowed-in-right\">admin</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv dialogdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Jim's Avatar\" src=\"";
        // line 1684
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar4.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"grey\">3 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Jim</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Raw denim you probably haven&#39;t heard of them jean shorts Austin.</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"itemdiv dialogdiv\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"user\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<img alt=\"Alexa's Avatar\" src=\"";
        // line 1708
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/avatar1.png"), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"body\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"time\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-time\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"green\">4 min</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"name\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\">Alexa</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"text\">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"tools\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#\" class=\"btn btn-minier btn-info\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-only icon-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<form />
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-actions input-append\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input placeholder=\"Type your message here ...\" type=\"text\" class=\"width-75\" name=\"message\" />
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"btn btn-small btn-info no-radius\" onclick=\"return false;\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-share-alt\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"hidden-phone\">Send</span>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t\t\t\t\t\t</div><!--/widget-main-->
\t\t\t\t\t\t\t\t\t\t</div><!--/widget-body-->
\t\t\t\t\t\t\t\t\t</div><!--/widget-box-->
\t\t\t\t\t\t\t\t</div><!--/span-->
\t\t\t\t\t\t\t</div><!--/row-->

\t\t\t\t\t\t\t<!--PAGE CONTENT ENDS-->
\t\t\t\t\t\t</div><!--/.span-->
\t\t\t\t\t</div><!--/.row-fluid-->
\t\t\t\t</div><!--/.page-content-->
                                ";
    }

    // line 1838
    public function block_plugins($context, array $blocks = array())
    {
        // line 1839
        echo "\t\t";
        // line 1840
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
                                                    ";
        // line 1842
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
                                                    ";
        // line 1844
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
                                                    ";
        // line 1846
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.easy-pie-chart.min.js"), "html", null, true);
        echo "\"></script>
                                                    ";
        // line 1848
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.sparkline.min.js"), "html", null, true);
        echo "\"></script>
                                                    ";
        // line 1850
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/flot/jquery.flot.min.js"), "html", null, true);
        echo "\"></script>
                                                    ";
        // line 1852
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/flot/jquery.flot.pie.min.js"), "html", null, true);
        echo "\"></script>
                                                    ";
        // line 1854
        echo "                                                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/flot/jquery.flot.resize.min.js"), "html", null, true);
        echo "\"></script>
                ";
    }

    // line 1864
    public function block_script($context, array $blocks = array())
    {
        // line 1865
        echo "                <script type=\"text/javascript\">
                        window.onload = function(){
                            var elemento=document.getElementById(\"mninicio\");
                            elemento.classList.add('active');
                        }
                        \$(function() {
                                \$('.easy-pie-chart.percentage').each(function(){
                                        var \$box = \$(this).closest('.infobox');
                                        var barColor = \$(this).data('color') || (!\$box.hasClass('infobox-dark') ? \$box.css('color') : 'rgba(255,255,255,0.95)');
                                        var trackColor = barColor == 'rgba(255,255,255,0.95)' ? 'rgba(255,255,255,0.25)' : '#E2E2E2';
                                        var size = parseInt(\$(this).data('size')) || 50;
                                        \$(this).easyPieChart({
                                                barColor: barColor,
                                                trackColor: trackColor,
                                                scaleColor: false,
                                                lineCap: 'butt',
                                                lineWidth: parseInt(size/10),
                                                animate: /msie\\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()) ? false : 1000,
                                                size: size
                                        });
                                })

                                \$('.sparkline').each(function(){
                                        var \$box = \$(this).closest('.infobox');
                                        var barColor = !\$box.hasClass('infobox-dark') ? \$box.css('color') : '#FFF';
                                        \$(this).sparkline('html', {tagValuesAttribute:'data-values', type: 'bar', barColor: barColor , chartRangeMin:\$(this).data('min') || 0} );
                                });




                          var placeholder = \$('#piechart-placeholder').css({'width':'90%' , 'min-height':'150px'});
                          var data = [
                                { label: \"social networks\",  data: 38.7, color: \"#68BC31\"},
                                { label: \"search engines\",  data: 24.5, color: \"#2091CF\"},
                                { label: \"ad campaings\",  data: 8.2, color: \"#AF4E96\"},
                                { label: \"direct traffic\",  data: 18.6, color: \"#DA5430\"},
                                { label: \"other\",  data: 10, color: \"#FEE074\"}
                          ]
                          function drawPieChart(placeholder, data, position) {
                                  \$.plot(placeholder, data, {
                                        series: {
                                                pie: {
                                                        show: true,
                                                        tilt:0.8,
                                                        highlight: {
                                                                opacity: 0.25
                                                        },
                                                        stroke: {
                                                                color: '#fff',
                                                                width: 2
                                                        },
                                                        startAngle: 2
                                                }
                                        },
                                        legend: {
                                                show: true,
                                                position: position || \"ne\", 
                                                labelBoxBorderColor: null,
                                                margin:[-30,15]
                                        }
                                        ,
                                        grid: {
                                                hoverable: true,
                                                clickable: true
                                        }
                                 })
                         }
                         drawPieChart(placeholder, data);

                         /**
                         we saved the drawing function and the data to redraw with different position later when switching to RTL mode dynamically
                         so that's not needed actually.
                         */
                         placeholder.data('chart', data);
                         placeholder.data('draw', drawPieChart);



                          var \$tooltip = \$(\"<div class='tooltip top in hide'><div class='tooltip-inner'></div></div>\").appendTo('body');
                          var previousPoint = null;

                          placeholder.on('plothover', function (event, pos, item) {
                                if(item) {
                                        if (previousPoint != item.seriesIndex) {
                                                previousPoint = item.seriesIndex;
                                                var tip = item.series['label'] + \" : \" + item.series['percent']+'%';
                                                \$tooltip.show().children(0).text(tip);
                                        }
                                        \$tooltip.css({top:pos.pageY + 10, left:pos.pageX + 10});
                                } else {
                                        \$tooltip.hide();
                                        previousPoint = null;
                                }

                         });






                                var d1 = [];
                                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                                        d1.push([i, Math.sin(i)]);
                                }

                                var d2 = [];
                                for (var i = 0; i < Math.PI * 2; i += 0.5) {
                                        d2.push([i, Math.cos(i)]);
                                }

                                var d3 = [];
                                for (var i = 0; i < Math.PI * 2; i += 0.2) {
                                        d3.push([i, Math.tan(i)]);
                                }


                                var sales_charts = \$('#sales-charts').css({'width':'100%' , 'height':'220px'});
                                \$.plot(\"#sales-charts\", [
                                        { label: \"Domains\", data: d1 },
                                        { label: \"Hosting\", data: d2 },
                                        { label: \"Services\", data: d3 }
                                ], {
                                        hoverable: true,
                                        shadowSize: 0,
                                        series: {
                                                lines: { show: true },
                                                points: { show: true }
                                        },
                                        xaxis: {
                                                tickLength: 0
                                        },
                                        yaxis: {
                                                ticks: 10,
                                                min: -2,
                                                max: 2,
                                                tickDecimals: 3
                                        },
                                        grid: {
                                                backgroundColor: { colors: [ \"#fff\", \"#fff\" ] },
                                                borderWidth: 1,
                                                borderColor:'#555'
                                        }
                                });


                                \$('#recent-box [data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
                                function tooltip_placement(context, source) {
                                        var \$source = \$(source);
                                        var \$parent = \$source.closest('.tab-content')
                                        var off1 = \$parent.offset();
                                        var w1 = \$parent.width();

                                        var off2 = \$source.offset();
                                        var w2 = \$source.width();

                                        if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                                        return 'left';
                                }


                                \$('.dialogs,.comments').slimScroll({
                                        height: '300px'
                            });


                                //Android's default browser somehow is confused when tapping on label which will lead to dragging the task
                                //so disable dragging when clicking on label
                                var agent = navigator.userAgent.toLowerCase();
                                if(\"ontouchstart\" in document && /applewebkit/.test(agent) && /android/.test(agent))
                                  \$('#tasks').on('touchstart', function(e){
                                        var li = \$(e.target).closest('#tasks li');
                                        if(li.length == 0)return;
                                        var label = li.find('label.inline').get(0);
                                        if(label == e.target || \$.contains(label, e.target)) e.stopImmediatePropagation() ;
                                });

                                \$('#tasks').sortable({
                                        opacity:0.8,
                                        revert:true,
                                        forceHelperSize:true,
                                        placeholder: 'draggable-placeholder',
                                        forcePlaceholderSize:true,
                                        tolerance:'pointer',
                                        stop: function( event, ui ) {//just for Chrome!!!! so that dropdowns on items don't appear below other items after being moved
                                                \$(ui.item).css('z-index', 'auto');
                                        }
                                        }
                                );
                                \$('#tasks').disableSelection();
                                \$('#tasks input:checkbox').removeAttr('checked').on('click', function(){
                                        if(this.checked) \$(this).closest('li').addClass('selected');
                                        else \$(this).closest('li').removeClass('selected');
                                });


                        })
                </script>
                ";
    }

    public function getTemplateName()
    {
        return "TestBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2181 => 1865,  2178 => 1864,  2171 => 1854,  2166 => 1852,  2161 => 1850,  2156 => 1848,  2151 => 1846,  2146 => 1844,  2141 => 1842,  2136 => 1840,  2134 => 1839,  2131 => 1838,  2084 => 1708,  2057 => 1684,  2029 => 1659,  2002 => 1635,  1975 => 1611,  1907 => 1546,  1872 => 1514,  1837 => 1482,  1778 => 1426,  1738 => 1389,  1714 => 1368,  1690 => 1347,  1666 => 1326,  1642 => 1305,  1586 => 1252,  1530 => 1199,  1474 => 1146,  952 => 626,  949 => 625,  926 => 605,  917 => 600,  912 => 51,  908 => 28,  905 => 27,  899 => 5,  893 => 2066,  890 => 1864,  884 => 1861,  879 => 1859,  876 => 1857,  873 => 1838,  862 => 1830,  856 => 1826,  841 => 1814,  775 => 1751,  772 => 625,  770 => 600,  767 => 599,  749 => 584,  739 => 577,  729 => 570,  719 => 563,  694 => 541,  684 => 534,  674 => 527,  664 => 520,  645 => 504,  629 => 491,  619 => 484,  607 => 475,  597 => 468,  587 => 461,  568 => 445,  513 => 393,  503 => 386,  493 => 379,  474 => 363,  464 => 356,  411 => 306,  399 => 297,  378 => 279,  349 => 253,  329 => 236,  309 => 219,  284 => 197,  269 => 185,  254 => 173,  244 => 166,  229 => 154,  205 => 133,  189 => 120,  173 => 107,  157 => 94,  141 => 81,  117 => 60,  109 => 54,  107 => 51,  96 => 43,  92 => 41,  89 => 40,  85 => 39,  82 => 38,  77 => 35,  71 => 30,  68 => 27,  58 => 19,  52 => 17,  47 => 15,  42 => 13,  32 => 5,  26 => 1,);
    }
}
