<?php

/* TestBundle:Default:widgets.html.twig */
class __TwigTemplate_07ac50399f93c9777c1b884a814d08275d1d894e543a28079432a2228556654c extends Twig_Template
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
        echo "Página de widgets";
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
                                            <li class=\"active\">Widgets</li>
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

    // line 30
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 31
        echo "                            <div class=\"page-content\">
                                    <div class=\"page-header position-relative\">
                                            <h1>
                                                    Widgets
                                                    <small>
                                                            <i class=\"icon-double-angle-right\"></i>
                                                            Draggabble Widget Boxes &amp; Containers
                                                    </small>
                                            </h1>
                                    </div><!--/.page-header-->

                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">
                                                    <!--PAGE CONTENT BEGINS-->

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header\">
                                                                                    <h5>Default Widget Box</h5>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <a href=\"#\" data-action=\"settings\">
                                                                                                    <i class=\"icon-cog\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"reload\">
                                                                                                    <i class=\"icon-refresh\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"collapse\">
                                                                                                    <i class=\"icon-chevron-up\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"close\">
                                                                                                    <i class=\"icon-remove\"></i>
                                                                                            </a>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main\">
                                                                                            <p class=\"alert alert-info\">
                                                                                                    Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur. Nulla fringilla eleifend consectetur.
                                                                                            </p>
                                                                                            <p class=\"alert alert-success\">
                                                                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                                                            </p>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header header-color-blue\">
                                                                                    <h5 class=\"bigger lighter\">
                                                                                            <i class=\"icon-table\"></i>
                                                                                            Tables & Colors
                                                                                    </h5>

                                                                                    <div class=\"widget-toolbar widget-toolbar-light no-border\">
                                                                                            <select id=\"simple-colorpicker-1\" class=\"hide\">
                                                                                                    <option selected=\"\" data-class=\"blue\" value=\"#307ECC\" />#307ECC
                                                                                                    <option data-class=\"blue2\" value=\"#5090C1\" />#5090C1
                                                                                                    <option data-class=\"blue3\" value=\"#6379AA\" />#6379AA
                                                                                                    <option data-class=\"green\" value=\"#82AF6F\" />#82AF6F
                                                                                                    <option data-class=\"green2\" value=\"#2E8965\" />#2E8965
                                                                                                    <option data-class=\"green3\" value=\"#5FBC47\" />#5FBC47
                                                                                                    <option data-class=\"red\" value=\"#E2755F\" />#E2755F
                                                                                                    <option data-class=\"red2\" value=\"#E04141\" />#E04141
                                                                                                    <option data-class=\"red3\" value=\"#D15B47\" />#D15B47
                                                                                                    <option data-class=\"orange\" value=\"#FFC657\" />#FFC657
                                                                                                    <option data-class=\"purple\" value=\"#7E6EB0\" />#7E6EB0
                                                                                                    <option data-class=\"pink\" value=\"#CE6F9E\" />#CE6F9E
                                                                                                    <option data-class=\"dark\" value=\"#404040\" />#404040
                                                                                                    <option data-class=\"grey\" value=\"#848484\" />#848484
                                                                                                    <option data-class=\"default\" value=\"#EEE\" />#EEE
                                                                                            </select>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main no-padding\">
                                                                                            <table class=\"table table-striped table-bordered table-hover\">
                                                                                                    <thead>
                                                                                                            <tr>
                                                                                                                    <th>
                                                                                                                            <i class=\"icon-user\"></i>
                                                                                                                            User
                                                                                                                    </th>

                                                                                                                    <th>
                                                                                                                            <i>@</i>
                                                                                                                            Email
                                                                                                                    </th>
                                                                                                                    <th class=\"hidden-480\">Status</th>
                                                                                                            </tr>
                                                                                                    </thead>

                                                                                                    <tbody>
                                                                                                            <tr>
                                                                                                                    <td class=\"\">Alex</td>

                                                                                                                    <td>
                                                                                                                            <a href=\"#\">alex@email.com</a>
                                                                                                                    </td>

                                                                                                                    <td class=\"hidden-480\">
                                                                                                                            <span class=\"label label-warning\">Pending</span>
                                                                                                                    </td>
                                                                                                            </tr>

                                                                                                            <tr>
                                                                                                                    <td class=\"\">Fred</td>

                                                                                                                    <td>
                                                                                                                            <a href=\"#\">fred@email.com</a>
                                                                                                                    </td>

                                                                                                                    <td class=\"hidden-480\">
                                                                                                                            <span class=\"label label-success arrowed-in arrowed-in-right\">Approved</span>
                                                                                                                    </td>
                                                                                                            </tr>

                                                                                                            <tr>
                                                                                                                    <td class=\"\">Jack</td>

                                                                                                                    <td>
                                                                                                                            <a href=\"#\">jack@email.com</a>
                                                                                                                    </td>

                                                                                                                    <td class=\"hidden-480\">
                                                                                                                            <span class=\"label label-warning\">Pending</span>
                                                                                                                    </td>
                                                                                                            </tr>

                                                                                                            <tr>
                                                                                                                    <td class=\"\">John</td>

                                                                                                                    <td>
                                                                                                                            <a href=\"#\">john@email.com</a>
                                                                                                                    </td>

                                                                                                                    <td class=\"hidden-480\">
                                                                                                                            <span class=\"label label-inverse arrowed\">Blocked</span>
                                                                                                                    </td>
                                                                                                            </tr>

                                                                                                            <tr>
                                                                                                                    <td class=\"\">James</td>

                                                                                                                    <td>
                                                                                                                            <a href=\"#\">james@email.com</a>
                                                                                                                    </td>

                                                                                                                    <td class=\"hidden-480\">
                                                                                                                            <span class=\"label label-info arrowed-in arrowed-in-right\">Online</span>
                                                                                                                    </td>
                                                                                                            </tr>
                                                                                                    </tbody>
                                                                                            </table>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div><!--/span-->
                                                    </div><!--/row-->

                                                    <div class=\"space-24\"></div>

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box collapsed\">
                                                                            <div class=\"widget-header widget-header-small header-color-orange\">
                                                                                    <h6>
                                                                                            <i class=\"icon-sort\"></i>
                                                                                            Small Header & Collapsed
                                                                                    </h6>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <a href=\"#\" data-action=\"settings\">
                                                                                                    <i class=\"icon-cog\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"reload\">
                                                                                                    <i class=\"icon-refresh\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"collapse\">
                                                                                                    <i class=\"icon-chevron-down\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"close\">
                                                                                                    <i class=\"icon-remove\"></i>
                                                                                            </a>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main\">
                                                                                            <p class=\"alert alert-info\">
                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                                                                                            </p>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header widget-header-large\">
                                                                                    <h4>Big Header</h4>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <a href=\"#\" data-action=\"settings\">
                                                                                                    <i class=\"icon-cog\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"reload\">
                                                                                                    <i class=\"icon-refresh\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"collapse\">
                                                                                                    <i class=\"icon-chevron-up\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"close\">
                                                                                                    <i class=\"icon-remove\"></i>
                                                                                            </a>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main\">
                                                                                            <p class=\"alert alert-info\">
                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
                                                                                            </p>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <div class=\"space-24\"></div>

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span3 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header\">
                                                                                    <h5 class=\"smaller\">With Label</h5>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <span class=\"label label-success\">
                                                                                                    16%
                                                                                                    <i class=\"icon-arrow-up\"></i>
                                                                                            </span>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main padding-6\">
                                                                                            <div class=\"alert alert-info\"> Hello World! </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span3 widget-container-span\">
                                                                    <div class=\"widget-box light-border\">
                                                                            <div class=\"widget-header header-color-dark\">
                                                                                    <h5 class=\"smaller\">With Badge</h5>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <span class=\"badge badge-important\">Alert</span>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main padding-6\">
                                                                                            <div class=\"alert alert-info\"> Hello World! </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header widget-header-small header-color-dark\">
                                                                                    <h6 class=\"smaller\">With Labels & Badges</h6>

                                                                                    <div class=\"widget-toolbar no-border\">
                                                                                            <label>
                                                                                                    <input type=\"checkbox\" class=\"ace-switch ace-switch-3\" />
                                                                                                    <span class=\"lbl\"></span>
                                                                                            </label>
                                                                                    </div>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <span class=\"label label-warning\">
                                                                                                    1.2%
                                                                                                    <i class=\"icon-arrow-down\"></i>
                                                                                            </span>
                                                                                            <span class=\"badge badge-info\">info</span>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main\">
                                                                                            <div class=\"alert alert-info\">
                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <div class=\"space\"></div>

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header header-color-dark\">
                                                                                    <h5 class=\"bigger lighter\">Box with Toolbox</h5>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <div class=\"progress progress-mini progress-danger progress-striped active\" style=\"width:100px;\" data-percent=\"61%\">
                                                                                                    <div class=\"bar\" style=\"width:61%\"></div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-toolbox\">
                                                                                            <div class=\"btn-toolbar\">
                                                                                                    <div class=\"btn-group\">
                                                                                                            <button class=\"btn btn-small btn-success\">
                                                                                                                    <i class=\"icon-ok bigger-110\"></i>
                                                                                                                    Approve
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-small btn-danger\">
                                                                                                                    <i class=\"icon-remove bigger-110\"></i>
                                                                                                                    Reject
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div data-toggle=\"buttons-checkbox\" class=\"btn-group\">
                                                                                                            <button class=\"btn btn-small\" type=\"button\">
                                                                                                                    <i class=\"icon-only icon-bold bigger-110\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-small\" type=\"button\">
                                                                                                                    <i class=\"icon-only icon-italic bigger-110\"></i>
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div data-toggle=\"buttons-radio\" class=\"btn-group\">
                                                                                                            <button class=\"btn btn-small btn-primary\">
                                                                                                                    <i class=\"icon-only icon-align-left bigger-110\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-small btn-primary\">
                                                                                                                    <i class=\"icon-only icon-align-center bigger-110\"></i>
                                                                                                            </button>

                                                                                                            <button class=\"btn btn-small btn-primary\">
                                                                                                                    <i class=\"icon-only icon-align-right bigger-110\"></i>
                                                                                                            </button>
                                                                                                    </div>

                                                                                                    <div class=\"btn-group\">
                                                                                                            <button data-toggle=\"dropdown\" class=\"btn btn-small btn-grey dropdown-toggle\">
                                                                                                                    <i class=\"icon-caret-down icon-only bigger-110\"></i>
                                                                                                            </button>

                                                                                                            <ul class=\"dropdown-menu pull-right dropdown-purple dropdown-caret dropdown-close\">
                                                                                                                    <li>
                                                                                                                            <a href=\"#\">Action</a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\">Another action</a>
                                                                                                                    </li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\">Something else here</a>
                                                                                                                    </li>

                                                                                                                    <li class=\"divider\"></li>

                                                                                                                    <li>
                                                                                                                            <a href=\"#\">Separated link</a>
                                                                                                                    </li>
                                                                                                            </ul>
                                                                                                    </div><!--/btn-group-->
                                                                                            </div>
                                                                                    </div>
                                                                                    <div class=\"widget-main padding-16\">
                                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur. Nulla fringilla eleifend consectetur. Etiam justo nisl, gravida id egestas eu, eleifend vel metus. Pellentesque tellus ipsum, euismod in facilisis quis, aliquet quis sem.
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header header-color-pink\">
                                                                                    <h5>Bottom Toolbox (Footer)</h5>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <a href=\"#\" data-action=\"collapse\">
                                                                                                    <i class=\"1 icon-chevron-up bigger-125\"></i>
                                                                                            </a>
                                                                                    </div>

                                                                                    <div class=\"widget-toolbar no-border\">
                                                                                            <button class=\"btn btn-mini btn-light bigger\">
                                                                                                    <i class=\"icon-arrow-left\"></i>
                                                                                                    Prev
                                                                                            </button>

                                                                                            <button class=\"btn btn-mini bigger btn-yellow dropdown-toggle\" data-toggle=\"dropdown\">
                                                                                                    Next
                                                                                                    <i class=\"icon-angle-down icon-on-right\"></i>
                                                                                            </button>

                                                                                            <ul class=\"dropdown-menu dropdown-yellow pull-right dropdown-caret dropdown-close\">
                                                                                                    <li>
                                                                                                            <a href=\"#\">Action</a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                            <a href=\"#\">Another action</a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                            <a href=\"#\">Something else here</a>
                                                                                                    </li>

                                                                                                    <li class=\"divider\"></li>

                                                                                                    <li>
                                                                                                            <a href=\"#\">Separated link</a>
                                                                                                    </li>
                                                                                            </ul>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main\">
                                                                                            <p class=\"alert alert-info\">
                                                                                                    Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur. Nulla fringilla eleifend consectetur.
                                                                                            </p>
                                                                                            <p class=\"alert alert-success\">
                                                                                                    Raw denim you probably haven't heard of them jean shorts Austin.
                                                                                            </p>
                                                                                    </div>

                                                                                    <div class=\"widget-toolbox padding-8 clearfix\">
                                                                                            <button class=\"btn btn-mini btn-danger pull-left\">
                                                                                                    <i class=\"icon-remove\"></i>
                                                                                                    I don't accept
                                                                                            </button>

                                                                                            <button class=\"btn btn-mini btn-success pull-right\">
                                                                                                    I accept
                                                                                                    <i class=\"icon-arrow-right icon-on-right\"></i>
                                                                                            </button>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <div class=\"space\"></div>

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header\">
                                                                                    <h5 class=\"smaller\">Tabbed</h5>

                                                                                    <div class=\"widget-toolbar no-border\">
                                                                                            <ul class=\"nav nav-tabs\" id=\"myTab\">
                                                                                                    <li class=\"active\">
                                                                                                            <a data-toggle=\"tab\" href=\"#home\">Home</a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                            <a data-toggle=\"tab\" href=\"#profile\">Profile</a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                            <a data-toggle=\"tab\" href=\"#info\">Info</a>
                                                                                                    </li>
                                                                                            </ul>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main padding-6\">
                                                                                            <div class=\"tab-content\">
                                                                                                    <div id=\"home\" class=\"tab-pane in active\">
                                                                                                            <p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
                                                                                                    </div>

                                                                                                    <div id=\"profile\" class=\"tab-pane\">
                                                                                                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
                                                                                                    </div>

                                                                                                    <div id=\"info\" class=\"tab-pane\">
                                                                                                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header widget-hea1der-small header-color-dark\">
                                                                                    <h6>Scroll Content</h6>

                                                                                    <div class=\"widget-toolbar\">
                                                                                            <a href=\"#\" data-action=\"settings\">
                                                                                                    <i class=\"icon-cog\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"reload\">
                                                                                                    <i class=\"icon-refresh\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"collapse\">
                                                                                                    <i class=\"icon-chevron-up\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"close\">
                                                                                                    <i class=\"icon-remove\"></i>
                                                                                            </a>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main padding-4\">
                                                                                            <div class=\"slim-scroll\" data-height=\"125\">
                                                                                                    <div class=\"content\">
                                                                                                            <div class=\"alert alert-info\">
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                                                                            </div>
                                                                                                            <div class=\"alert alert-danger\">
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                                                                            </div>
                                                                                                            <div class=\"alert alert-success\">
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                                                                            </div>
                                                                                                            <div class=\"alert\">
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing.
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <div class=\"space-24\"></div>

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box transparent\">
                                                                            <div class=\"widget-header\">
                                                                                    <h4 class=\"lighter\">Transparent Box</h4>

                                                                                    <div class=\"widget-toolbar no-border\">
                                                                                            <a href=\"#\" data-action=\"settings\">
                                                                                                    <i class=\"icon-cog\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"reload\">
                                                                                                    <i class=\"icon-refresh\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"collapse\">
                                                                                                    <i class=\"icon-chevron-up\"></i>
                                                                                            </a>

                                                                                            <a href=\"#\" data-action=\"close\">
                                                                                                    <i class=\"icon-remove\"></i>
                                                                                            </a>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main padding-6 no-padding-left no-padding-right\">
                                                                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span6 widget-container-span\">
                                                                    <div class=\"widget-box transparent\">
                                                                            <div class=\"widget-header\">
                                                                                    <h4 class=\"lighter\">Tabs With Scroll</h4>

                                                                                    <div class=\"widget-toolbar no-border\">
                                                                                            <ul class=\"nav nav-tabs\" id=\"myTab2\">
                                                                                                    <li class=\"active\">
                                                                                                            <a data-toggle=\"tab\" href=\"#home2\">Home</a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                            <a data-toggle=\"tab\" href=\"#profile2\">Profile</a>
                                                                                                    </li>

                                                                                                    <li>
                                                                                                            <a data-toggle=\"tab\" href=\"#info2\">Info</a>
                                                                                                    </li>
                                                                                            </ul>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main padding-12 no-padding-left no-padding-right\">
                                                                                            <div class=\"tab-content padding-4\">
                                                                                                    <div id=\"home2\" class=\"tab-pane in active\">
                                                                                                            <div class=\"slim-scroll\" data-height=\"100\">
                                                                                                                    <b>TAB # 1</b>
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                                                            </div>
                                                                                                    </div>

                                                                                                    <div id=\"profile2\" class=\"tab-pane\">
                                                                                                            <div class=\"slim-scroll\" data-height=\"100\">
                                                                                                                    <b>TAB # 2</b>
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                                                            </div>
                                                                                                    </div>

                                                                                                    <div id=\"info2\" class=\"tab-pane\">
                                                                                                            <div class=\"slim-scroll\" data-height=\"100\">
                                                                                                                    <b>TAB # 3</b>
                                                                                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
                                                                                                            </div>
                                                                                                    </div>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div><!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                    </div><!--/.row-fluid-->
                            </div><!--/.page-content-->
";
    }

    // line 695
    public function block_plugins($context, array $blocks = array())
    {
        // line 696
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.slimscroll.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 700
    public function block_script($context, array $blocks = array())
    {
        // line 701
        echo "                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mnwidgets\");
                                    elemento.classList.add('active');
                                }
                    \$(function() {

                            \$('#simple-colorpicker-1').ace_colorpicker({pull_right:true}).on('change', function(){
                                    var color_class = \$(this).find('option:selected').data('class');
                                    var new_class = 'widget-header';
                                    if(color_class != 'default')  new_class += ' header-color-'+color_class;
                                    \$(this).closest('.widget-header').attr('class', new_class);
                            });


                            // scrollables
                            \$('.slim-scroll').each(function () {
                                    var \$this = \$(this);
                                    \$this.slimScroll({
                                            height: \$this.data('height') || 100,
                                            railVisible:true
                                    });
                            });




                            // Portlets (boxes)
                        \$('.widget-container-span').sortable({
                            connectWith: '.widget-container-span',
                                    items:'> .widget-box',
                                    opacity:0.8,
                                    revert:true,
                                    forceHelperSize:true,
                                    placeholder: 'widget-placeholder',
                                    forcePlaceholderSize:true,
                                    tolerance:'pointer'
                        });

                    });
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:widgets.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  772 => 701,  769 => 700,  763 => 698,  759 => 697,  754 => 696,  751 => 695,  84 => 31,  81 => 30,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}