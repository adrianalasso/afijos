<?php

/* TestBundle:Default:arbol.html.twig */
class __TwigTemplate_a0a075858ced98f38f0c63eca99081db7dfb10000531ad583c4c0c7ade3afe6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("TestBundle::index.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TestBundle::index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "Página del mapa del sitio";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
    }

    // line 5
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
        echo "                            <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                                    <ul class=\"breadcrumb\">
                                            <li>
                                                    <i class=\"icon-home home-icon\"></i>
                                                    <a href=\"#\">Home</a>

                                                    <span class=\"divider\">
                                                            <i class=\"icon-angle-right arrow-icon\"></i>
                                                    </span>
                                            </li>

                                            <li>
                                                    <a href=\"#\">UI Elements</a>

                                                    <span class=\"divider\">
                                                            <i class=\"icon-angle-right arrow-icon\"></i>
                                                    </span>
                                            </li>
                                            <li class=\"active\">Treeview</li>
                                    </ul><!--.breadcrumb-->

                                    <div class=\"nav-search\" id=\"nav-search\">
                                            <form class=\"form-search\" />
                                                    <span class=\"input-icon\">
                                                            <input type=\"text\" placeholder=\"Search ...\" class=\"input-small nav-search-input\" id=\"nav-search-input\" autocomplete=\"off\" />
                                                            <i class=\"icon-search nav-search-icon\"></i>
                                                    </span>
                                            </form>
                                    </div><!--#nav-search-->
                            </div>
";
    }

    // line 38
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 39
        echo "                            <div class=\"page-content\">
                                    <div class=\"page-header position-relative\">
                                            <h1>
                                                    Treeview
                                                    <small>
                                                            <i class=\"icon-double-angle-right\"></i>
                                                            with selectable items(single &amp; multiple) and custom icons
                                                    </small>
                                            </h1>
                                    </div><!--/.page-header-->

                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">
                                                    <!--PAGE CONTENT BEGINS-->

                                                    <div class=\"row-fluid\">
                                                            <div class=\"widget-box span6\">
                                                                    <div class=\"widget-header header-color-blue2\">
                                                                            <h4 class=\"lighter smaller\">Choose Categories</h4>
                                                                    </div>

                                                                    <div class=\"widget-body\">
                                                                            <div class=\"widget-main padding-8\">
                                                                                    <div id=\"tree1\" class=\"tree\"></div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"widget-box span6\">
                                                                    <div class=\"widget-header header-color-green2\">
                                                                            <h4 class=\"lighter smaller\">Browse Files</h4>
                                                                    </div>

                                                                    <div class=\"widget-body\">
                                                                            <div class=\"widget-main padding-8\">
                                                                                    <div id=\"tree2\" class=\"tree\"></div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <script type=\"text/javascript\">
                                                            var \$assets = \"assets\";//this will be used in fuelux.tree-sampledata.js
                                                    </script>

                                                    <!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                    </div><!--/.row-fluid-->
                            </div><!--/.page-content-->
";
    }

    // line 89
    public function block_plugins($context, array $blocks = array())
    {
        // line 90
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/fuelux/data/fuelux.tree-sampledata.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/fuelux/fuelux.tree.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 93
    public function block_script($context, array $blocks = array())
    {
        // line 94
        echo "                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mnarbol\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                                \$(function(){

\t\t\$('#tree1').ace_tree({
\t\t\tdataSource: treeDataSource ,
\t\t\tmultiSelect:true,
\t\t\tloadingHTML:'<div class=\"tree-loading\"><i class=\"icon-refresh icon-spin blue\"></i></div>',
\t\t\t'open-icon' : 'icon-minus',
\t\t\t'close-icon' : 'icon-plus',
\t\t\t'selectable' : true,
\t\t\t'selected-icon' : 'icon-ok',
\t\t\t'unselected-icon' : 'icon-remove'
\t\t});

\t\t\$('#tree2').ace_tree({
\t\t\tdataSource: treeDataSource2 ,
\t\t\tloadingHTML:'<div class=\"tree-loading\"><i class=\"icon-refresh icon-spin blue\"></i></div>',
\t\t\t'open-icon' : 'icon-folder-open',
\t\t\t'close-icon' : 'icon-folder-close',
\t\t\t'selectable' : false,
\t\t\t'selected-icon' : null,
\t\t\t'unselected-icon' : null
\t\t});



\t\t/**
\t\t\$('#tree1').on('loaded', function (evt, data) {
\t\t});

\t\t\$('#tree1').on('opened', function (evt, data) {
\t\t});

\t\t\$('#tree1').on('closed', function (evt, data) {
\t\t});

\t\t\$('#tree1').on('selected', function (evt, data) {
\t\t});
\t\t*/
                            });
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:arbol.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 94,  159 => 93,  153 => 91,  148 => 90,  145 => 89,  92 => 39,  89 => 38,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
