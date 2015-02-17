<?php

/* TestBundle:Default:tablas.html.twig */
class __TwigTemplate_306a793539d24e9fb7ae32120ea35c63a4980983d549622bd1607d4384901d89 extends Twig_Template
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
        echo "Página de tablas";
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
                                            <li class=\"active\">Tables</li>
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

    // line 31
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 32
        echo "                            <div class=\"page-content\">
                                    <div class=\"page-header position-relative\">
                                            <h1>
                                                    Tables
                                                    <small>
                                                            <i class=\"icon-double-angle-right\"></i>
                                                            Static &amp; Dynamic Tables
                                                    </small>
                                            </h1>
                                    </div><!--/.page-header-->

                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">
                                                    <!--PAGE CONTENT BEGINS-->

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span12\">
                                                                    <table id=\"sample-table-1\" class=\"table table-striped table-bordered table-hover\">
                                                                            <thead>
                                                                                    <tr>
                                                                                            <th class=\"center\">
                                                                                                    <label>
                                                                                                            <input type=\"checkbox\" />
                                                                                                            <span class=\"lbl\"></span>
                                                                                                    </label>
                                                                                            </th>
                                                                                            <th>Domain</th>
                                                                                            <th>Price</th>
                                                                                            <th class=\"hidden-480\">Clicks</th>

                                                                                            <th class=\"hidden-phone\">
                                                                                                    <i class=\"icon-time bigger-110 hidden-phone\"></i>
                                                                                                    Update
                                                                                            </th>
                                                                                            <th class=\"hidden-480\">Status</th>

                                                                                            <th></th>
                                                                                    </tr>
                                                                            </thead>

                                                                            <tbody>
                                                                                    <tr>
                                                                                            <td class=\"center\">
                                                                                                    <label>
                                                                                                            <input type=\"checkbox\" />
                                                                                                            <span class=\"lbl\"></span>
                                                                                                    </label>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <a href=\"#\">ace.com</a>
                                                                                            </td>
                                                                                            <td>\$45</td>
                                                                                            <td class=\"hidden-480\">3,330</td>
                                                                                            <td class=\"hidden-phone\">Feb 12</td>

                                                                                            <td class=\"hidden-480\">
                                                                                                    <span class=\"label label-warning\">Expiring</span>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <div class=\"hidden-phone visible-desktop btn-group\">
                                                                                                            <button class=\"btn btn-mini btn-success\">
                                                                                                                    <i class=\"icon-ok bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-info\">
                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-danger\">
                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-warning\">
                                                                                                                    <i class=\"icon-flag bigger-120\"></i>
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div class=\"hidden-desktop visible-phone\">
                                                                                                            <div class=\"inline position-relative\">
                                                                                                                    <button class=\"btn btn-minier btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                            <i class=\"icon-cog icon-only bigger-110\"></i>
                                                                                                                    </button>

                                                                                                                    <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                            <span class=\"blue\">
                                                                                                                                                    <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                            <span class=\"green\">
                                                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                            <span class=\"red\">
                                                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>
                                                                                                                    </ul>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                            <td class=\"center\">
                                                                                                    <label>
                                                                                                            <input type=\"checkbox\" />
                                                                                                            <span class=\"lbl\"></span>
                                                                                                    </label>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <a href=\"#\">base.com</a>
                                                                                            </td>
                                                                                            <td>\$35</td>
                                                                                            <td class=\"hidden-480\">2,595</td>
                                                                                            <td class=\"hidden-phone\">Feb 18</td>

                                                                                            <td class=\"hidden-480\">
                                                                                                    <span class=\"label label-success\">Registered</span>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <div class=\"hidden-phone visible-desktop btn-group\">
                                                                                                            <button class=\"btn btn-mini btn-success\">
                                                                                                                    <i class=\"icon-ok bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-info\">
                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-danger\">
                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-warning\">
                                                                                                                    <i class=\"icon-flag bigger-120\"></i>
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div class=\"hidden-desktop visible-phone\">
                                                                                                            <div class=\"inline position-relative\">
                                                                                                                    <button class=\"btn btn-minier btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                            <i class=\"icon-cog icon-only bigger-110\"></i>
                                                                                                                    </button>

                                                                                                                    <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                            <span class=\"blue\">
                                                                                                                                                    <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                            <span class=\"green\">
                                                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                            <span class=\"red\">
                                                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>
                                                                                                                    </ul>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                            <td class=\"center\">
                                                                                                    <label>
                                                                                                            <input type=\"checkbox\" />
                                                                                                            <span class=\"lbl\"></span>
                                                                                                    </label>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <a href=\"#\">max.com</a>
                                                                                            </td>
                                                                                            <td>\$60</td>
                                                                                            <td class=\"hidden-480\">4,400</td>
                                                                                            <td class=\"hidden-phone\">Mar 11</td>

                                                                                            <td class=\"hidden-480\">
                                                                                                    <span class=\"label label-warning\">Expiring</span>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <div class=\"hidden-phone visible-desktop btn-group\">
                                                                                                            <button class=\"btn btn-mini btn-success\">
                                                                                                                    <i class=\"icon-ok bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-info\">
                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-danger\">
                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-warning\">
                                                                                                                    <i class=\"icon-flag bigger-120\"></i>
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div class=\"hidden-desktop visible-phone\">
                                                                                                            <div class=\"inline position-relative\">
                                                                                                                    <button class=\"btn btn-minier btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                            <i class=\"icon-cog icon-only bigger-110\"></i>
                                                                                                                    </button>

                                                                                                                    <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                            <span class=\"blue\">
                                                                                                                                                    <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                            <span class=\"green\">
                                                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                            <span class=\"red\">
                                                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>
                                                                                                                    </ul>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                            <td class=\"center\">
                                                                                                    <label>
                                                                                                            <input type=\"checkbox\" />
                                                                                                            <span class=\"lbl\"></span>
                                                                                                    </label>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <a href=\"#\">best.com</a>
                                                                                            </td>
                                                                                            <td>\$75</td>
                                                                                            <td class=\"hidden-480\">6,500</td>
                                                                                            <td class=\"hidden-phone\">Apr 03</td>

                                                                                            <td class=\"hidden-480\">
                                                                                                    <span class=\"label label-inverse arrowed-in\">Flagged</span>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <div class=\"hidden-phone visible-desktop btn-group\">
                                                                                                            <button class=\"btn btn-mini btn-success\">
                                                                                                                    <i class=\"icon-ok bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-info\">
                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-danger\">
                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-warning\">
                                                                                                                    <i class=\"icon-flag bigger-120\"></i>
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div class=\"hidden-desktop visible-phone\">
                                                                                                            <div class=\"inline position-relative\">
                                                                                                                    <button class=\"btn btn-minier btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                            <i class=\"icon-cog icon-only bigger-110\"></i>
                                                                                                                    </button>

                                                                                                                    <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                            <span class=\"blue\">
                                                                                                                                                    <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                            <span class=\"green\">
                                                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                            <span class=\"red\">
                                                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>
                                                                                                                    </ul>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                            <td class=\"center\">
                                                                                                    <label>
                                                                                                            <input type=\"checkbox\" />
                                                                                                            <span class=\"lbl\"></span>
                                                                                                    </label>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <a href=\"#\">pro.com</a>
                                                                                            </td>
                                                                                            <td>\$55</td>
                                                                                            <td class=\"hidden-480\">4,250</td>
                                                                                            <td class=\"hidden-phone\">Jan 21</td>

                                                                                            <td class=\"hidden-480\">
                                                                                                    <span class=\"label label-success\">Registered</span>
                                                                                            </td>

                                                                                            <td>
                                                                                                    <div class=\"hidden-phone visible-desktop btn-group\">
                                                                                                            <button class=\"btn btn-mini btn-success\">
                                                                                                                    <i class=\"icon-ok bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-info\">
                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-danger\">
                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-mini btn-warning\">
                                                                                                                    <i class=\"icon-flag bigger-120\"></i>
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div class=\"hidden-desktop visible-phone\">
                                                                                                            <div class=\"inline position-relative\">
                                                                                                                    <button class=\"btn btn-minier btn-primary dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                            <i class=\"icon-cog icon-only bigger-110\"></i>
                                                                                                                    </button>

                                                                                                                    <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                            <span class=\"blue\">
                                                                                                                                                    <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                            <span class=\"green\">
                                                                                                                                                    <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>

                                                                                                                            <li>
                                                                                                                                    <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                            <span class=\"red\">
                                                                                                                                                    <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                            </span>
                                                                                                                                    </a>
                                                                                                                            </li>
                                                                                                                    </ul>
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </td>
                                                                                    </tr>
                                                                            </tbody>
                                                                    </table>
                                                            </div><!--/span-->
                                                    </div><!--/row-->

                                                    <div class=\"hr hr-18 dotted hr-double\"></div>

                                                    <h4 class=\"pink\">
                                                            <i class=\"icon-hand-right icon-animated-hand-pointer blue\"></i>
                                                            <a href=\"#modal-table\" role=\"button\" class=\"green\" data-toggle=\"modal\"> Table Inside a Modal Box </a>
                                                    </h4>

                                                    <div class=\"hr hr-18 dotted hr-double\"></div>

                                                    <div class=\"row-fluid\">
                                                            <h3 class=\"header smaller lighter blue\">jQuery dataTables</h3>
                                                            <div class=\"table-header\">
                                                                    Results for \"Latest Registered Domains\"
                                                            </div>

                                                            <table id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                                                                    <thead>
                                                                            <tr>
                                                                                    <th class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </th>
                                                                                    <th>Domain</th>
                                                                                    <th>Price</th>
                                                                                    <th class=\"hidden-480\">Clicks</th>

                                                                                    <th class=\"hidden-phone\">
                                                                                            <i class=\"icon-time bigger-110 hidden-phone\"></i>
                                                                                            Update
                                                                                    </th>
                                                                                    <th class=\"hidden-480\">Status</th>

                                                                                    <th></th>
                                                                            </tr>
                                                                    </thead>

                                                                    <tbody>
                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">app.com</a>
                                                                                    </td>
                                                                                    <td>\$45</td>
                                                                                    <td class=\"hidden-480\">3,330</td>
                                                                                    <td class=\"hidden-phone\">Feb 12</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-warning\">Expiring</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">base.com</a>
                                                                                    </td>
                                                                                    <td>\$35</td>
                                                                                    <td class=\"hidden-480\">2,595</td>
                                                                                    <td class=\"hidden-phone\">Feb 18</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-success\">Registered</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">max.com</a>
                                                                                    </td>
                                                                                    <td>\$60</td>
                                                                                    <td class=\"hidden-480\">4,400</td>
                                                                                    <td class=\"hidden-phone\">Mar 11</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-warning\">Expiring</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">best.com</a>
                                                                                    </td>
                                                                                    <td>\$75</td>
                                                                                    <td class=\"hidden-480\">6,500</td>
                                                                                    <td class=\"hidden-phone\">Apr 03</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-inverse arrowed-in\">Flagged</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">pro.com</a>
                                                                                    </td>
                                                                                    <td>\$55</td>
                                                                                    <td class=\"hidden-480\">4,250</td>
                                                                                    <td class=\"hidden-phone\">Jan 21</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-success\">Registered</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">team.com</a>
                                                                                    </td>
                                                                                    <td>\$40</td>
                                                                                    <td class=\"hidden-480\">3,200</td>
                                                                                    <td class=\"hidden-phone\">Feb 09</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-inverse arrowed-in\">Flagged</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">up.com</a>
                                                                                    </td>
                                                                                    <td>\$95</td>
                                                                                    <td class=\"hidden-480\">8,520</td>
                                                                                    <td class=\"hidden-phone\">Feb 22</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-info arrowed arrowed-righ\">Sold</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">view.com</a>
                                                                                    </td>
                                                                                    <td>\$45</td>
                                                                                    <td class=\"hidden-480\">4,100</td>
                                                                                    <td class=\"hidden-phone\">Mar 12</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-success\">Registered</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">nice.com</a>
                                                                                    </td>
                                                                                    <td>\$38</td>
                                                                                    <td class=\"hidden-480\">3,940</td>
                                                                                    <td class=\"hidden-phone\">Feb 12</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-info arrowed arrowed-righ\">Sold</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">fine.com</a>
                                                                                    </td>
                                                                                    <td>\$25</td>
                                                                                    <td class=\"hidden-480\">2,983</td>
                                                                                    <td class=\"hidden-phone\">Apr 01</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-warning\">Expiring</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">good.com</a>
                                                                                    </td>
                                                                                    <td>\$50</td>
                                                                                    <td class=\"hidden-480\">6,500</td>
                                                                                    <td class=\"hidden-phone\">Feb 02</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-inverse arrowed-in\">Flagged</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">great.com</a>
                                                                                    </td>
                                                                                    <td>\$55</td>
                                                                                    <td class=\"hidden-480\">6,400</td>
                                                                                    <td class=\"hidden-phone\">Feb 24</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-success\">Registered</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">shine.com</a>
                                                                                    </td>
                                                                                    <td>\$25</td>
                                                                                    <td class=\"hidden-480\">2,200</td>
                                                                                    <td class=\"hidden-phone\">Apr 01</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-inverse arrowed-in\">Flagged</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">rise.com</a>
                                                                                    </td>
                                                                                    <td>\$42</td>
                                                                                    <td class=\"hidden-480\">3,900</td>
                                                                                    <td class=\"hidden-phone\">Feb 01</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-info arrowed arrowed-righ\">Sold</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">above.com</a>
                                                                                    </td>
                                                                                    <td>\$35</td>
                                                                                    <td class=\"hidden-480\">3,420</td>
                                                                                    <td class=\"hidden-phone\">Mar 12</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-warning\">Expiring</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">share.com</a>
                                                                                    </td>
                                                                                    <td>\$30</td>
                                                                                    <td class=\"hidden-480\">3,200</td>
                                                                                    <td class=\"hidden-phone\">Feb 11</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-info arrowed arrowed-righ\">Sold</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">fair.com</a>
                                                                                    </td>
                                                                                    <td>\$35</td>
                                                                                    <td class=\"hidden-480\">3,900</td>
                                                                                    <td class=\"hidden-phone\">Mar 26</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-inverse arrowed-in\">Flagged</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">year.com</a>
                                                                                    </td>
                                                                                    <td>\$48</td>
                                                                                    <td class=\"hidden-480\">3,990</td>
                                                                                    <td class=\"hidden-phone\">Feb 15</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-warning\">Expiring</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">day.com</a>
                                                                                    </td>
                                                                                    <td>\$55</td>
                                                                                    <td class=\"hidden-480\">5,600</td>
                                                                                    <td class=\"hidden-phone\">Jan 29</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-info arrowed arrowed-righ\">Sold</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">light.com</a>
                                                                                    </td>
                                                                                    <td>\$40</td>
                                                                                    <td class=\"hidden-480\">3,100</td>
                                                                                    <td class=\"hidden-phone\">Feb 17</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-success\">Registered</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">sight.com</a>
                                                                                    </td>
                                                                                    <td>\$58</td>
                                                                                    <td class=\"hidden-480\">6,100</td>
                                                                                    <td class=\"hidden-phone\">Feb 19</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-inverse arrowed-in\">Flagged</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">right.com</a>
                                                                                    </td>
                                                                                    <td>\$50</td>
                                                                                    <td class=\"hidden-480\">4,400</td>
                                                                                    <td class=\"hidden-phone\">Apr 01</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-warning\">Expiring</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>

                                                                            <tr>
                                                                                    <td class=\"center\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </td>

                                                                                    <td>
                                                                                            <a href=\"#\">once.com</a>
                                                                                    </td>
                                                                                    <td>\$20</td>
                                                                                    <td class=\"hidden-480\">1,400</td>
                                                                                    <td class=\"hidden-phone\">Apr 04</td>

                                                                                    <td class=\"hidden-480\">
                                                                                            <span class=\"label label-info arrowed arrowed-righ\">Sold</span>
                                                                                    </td>

                                                                                    <td class=\"td-actions\">
                                                                                            <div class=\"hidden-phone visible-desktop action-buttons\">
                                                                                                    <a class=\"blue\" href=\"#\">
                                                                                                            <i class=\"icon-zoom-in bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"green\" href=\"#\">
                                                                                                            <i class=\"icon-pencil bigger-130\"></i>
                                                                                                    </a>

                                                                                                    <a class=\"red\" href=\"#\">
                                                                                                            <i class=\"icon-trash bigger-130\"></i>
                                                                                                    </a>
                                                                                            </div>

                                                                                            <div class=\"hidden-desktop visible-phone\">
                                                                                                    <div class=\"inline position-relative\">
                                                                                                            <button class=\"btn btn-minier btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-120\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu dropdown-icon-only dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-info\" data-rel=\"tooltip\" title=\"View\">
                                                                                                                                    <span class=\"blue\">
                                                                                                                                            <i class=\"icon-zoom-in bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-success\" data-rel=\"tooltip\" title=\"Edit\">
                                                                                                                                    <span class=\"green\">
                                                                                                                                            <i class=\"icon-edit bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\" class=\"tooltip-error\" data-rel=\"tooltip\" title=\"Delete\">
                                                                                                                                    <span class=\"red\">
                                                                                                                                            <i class=\"icon-trash bigger-120\"></i>
                                                                                                                                    </span>
                                                                                                                            </a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </td>
                                                                            </tr>
                                                                    </tbody>
                                                            </table>
                                                    </div>

                                                    <div id=\"modal-table\" class=\"modal hide fade\" tabindex=\"-1\">
                                                            <div class=\"modal-header no-padding\">
                                                                    <div class=\"table-header\">
                                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                                                            Results for \"Latest Registered Domains\"
                                                                    </div>
                                                            </div>

                                                            <div class=\"modal-body no-padding\">
                                                                    <div class=\"row-fluid\">
                                                                            <table class=\"table table-striped table-bordered table-hover no-margin-bottom no-border-top\">
                                                                                    <thead>
                                                                                            <tr>
                                                                                                    <th>Domain</th>
                                                                                                    <th>Price</th>
                                                                                                    <th>Clicks</th>

                                                                                                    <th>
                                                                                                            <i class=\"icon-time bigger-110\"></i>
                                                                                                            Update
                                                                                                    </th>
                                                                                            </tr>
                                                                                    </thead>

                                                                                    <tbody>
                                                                                            <tr>
                                                                                                    <td>
                                                                                                            <a href=\"#\">ace.com</a>
                                                                                                    </td>
                                                                                                    <td>\$45</td>
                                                                                                    <td>3,330</td>
                                                                                                    <td>Feb 12</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                    <td>
                                                                                                            <a href=\"#\">base.com</a>
                                                                                                    </td>
                                                                                                    <td>\$35</td>
                                                                                                    <td>2,595</td>
                                                                                                    <td>Feb 18</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                    <td>
                                                                                                            <a href=\"#\">max.com</a>
                                                                                                    </td>
                                                                                                    <td>\$60</td>
                                                                                                    <td>4,400</td>
                                                                                                    <td>Mar 11</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                    <td>
                                                                                                            <a href=\"#\">best.com</a>
                                                                                                    </td>
                                                                                                    <td>\$75</td>
                                                                                                    <td>6,500</td>
                                                                                                    <td>Apr 03</td>
                                                                                            </tr>

                                                                                            <tr>
                                                                                                    <td>
                                                                                                            <a href=\"#\">pro.com</a>
                                                                                                    </td>
                                                                                                    <td>\$55</td>
                                                                                                    <td>4,250</td>
                                                                                                    <td>Jan 21</td>
                                                                                            </tr>
                                                                                    </tbody>
                                                                            </table>
                                                                    </div>
                                                            </div>

                                                            <div class=\"modal-footer\">
                                                                    <button class=\"btn btn-small btn-danger pull-left\" data-dismiss=\"modal\">
                                                                            <i class=\"icon-remove\"></i>
                                                                            Close
                                                                    </button>

                                                                    <div class=\"pagination pull-right no-margin\">
                                                                            <ul>
                                                                                    <li class=\"prev disabled\">
                                                                                            <a href=\"#\">
                                                                                                    <i class=\"icon-double-angle-left\"></i>
                                                                                            </a>
                                                                                    </li>

                                                                                    <li class=\"active\">
                                                                                            <a href=\"#\">1</a>
                                                                                    </li>

                                                                                    <li>
                                                                                            <a href=\"#\">2</a>
                                                                                    </li>

                                                                                    <li>
                                                                                            <a href=\"#\">3</a>
                                                                                    </li>

                                                                                    <li class=\"next\">
                                                                                            <a href=\"#\">
                                                                                                    <i class=\"icon-double-angle-right\"></i>
                                                                                            </a>
                                                                                    </li>
                                                                            </ul>
                                                                    </div>
                                                            </div>
                                                    </div>
                                                    <!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                    </div><!--/.row-fluid-->
                            </div><!--/.page-content-->
";
    }

    // line 2213
    public function block_plugins($context, array $blocks = array())
    {
        // line 2214
        echo "                    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
                    <script src=\"";
        // line 2215
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 2217
    public function block_script($context, array $blocks = array())
    {
        // line 2218
        echo "                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mntabla\");
                                    elemento.classList.add('active');
                                }
                        \$(function() {
                            var oTable1 = \$('#sample-table-2').dataTable( {
                            \"aoColumns\": [
                          { \"bSortable\": false },
                          null, null,null, null, null,
                              { \"bSortable\": false }
                            ] } );


                            \$('table th input:checkbox').on('click' , function(){
                                    var that = this;
                                    \$(this).closest('table').find('tr > td:first-child input:checkbox')
                                    .each(function(){
                                            this.checked = that.checked;
                                            \$(this).closest('tr').toggleClass('selected');
                                    });

                            });


                            \$('[data-rel=\"tooltip\"]').tooltip({placement: tooltip_placement});
                            function tooltip_placement(context, source) {
                                    var \$source = \$(source);
                                    var \$parent = \$source.closest('table')
                                    var off1 = \$parent.offset();
                                    var w1 = \$parent.width();

                                    var off2 = \$source.offset();
                                    var w2 = \$source.width();

                                    if( parseInt(off2.left) < parseInt(off1.left) + parseInt(w1 / 2) ) return 'right';
                                    return 'left';
                            }
                    })
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:tablas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2286 => 2218,  2283 => 2217,  2277 => 2215,  2272 => 2214,  2269 => 2213,  85 => 32,  82 => 31,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
