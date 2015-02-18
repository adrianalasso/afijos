<?php

/* TestBundle:Default:frmwizard.html.twig */
class __TwigTemplate_2f3a08ed7401e767f9bb01a96fb531a9595495fc703ec78835b6363513a7d3aa extends Twig_Template
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
        echo "Página de asistente de formulario";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/select2.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"breadcrumbs\" id=\"breadcrumbs\">
                <ul class=\"breadcrumb\">
                        <li>
                                <i class=\"icon-home home-icon\"></i>
                                <a href=\"#\">Home</a>

                                <span class=\"divider\">
                                        <i class=\"icon-angle-right arrow-icon\"></i>
                                </span>
                        </li>

                        <li>
                                <a href=\"#\">Forms</a>

                                <span class=\"divider\">
                                        <i class=\"icon-angle-right arrow-icon\"></i>
                                </span>
                        </li>
                        <li class=\"active\">Wizard &amp; Validation</li>
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

    // line 39
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 40
        echo "<div class=\"page-content\">
<div class=\"page-header position-relative\">
        <h1>
                Form Wizard
                <small>
                        <i class=\"icon-double-angle-right\"></i>
                        and Validation
                </small>
        </h1>
</div><!--/.page-header-->

<div class=\"row-fluid\">
        <div class=\"span12\">
                <!--PAGE CONTENT BEGINS-->

                <h4 class=\"lighter\">
                        <i class=\"icon-hand-right icon-animated-hand-pointer blue\"></i>
                        <a href=\"#modal-wizard\" data-toggle=\"modal\" class=\"pink\"> Wizard Inside a Modal Box </a>
                </h4>

                <div class=\"hr hr-18 hr-double dotted\"></div>

                <div class=\"row-fluid\">
                        <div class=\"span12\">
                                <div class=\"widget-box\">
                                        <div class=\"widget-header widget-header-blue widget-header-flat\">
                                                <h4 class=\"lighter\">New Item Wizard</h4>

                                                <div class=\"widget-toolbar\">
                                                        <label>
                                                                <small class=\"green\">
                                                                        <b>Validation</b>
                                                                </small>

                                                                <input id=\"skip-validation\" type=\"checkbox\" class=\"ace-switch ace-switch-4\" />
                                                                <span class=\"lbl\"></span>
                                                        </label>
                                                </div>
                                        </div>

                                        <div class=\"widget-body\">
                                                <div class=\"widget-main\">
                                                        <div class=\"row-fluid\">
                                                                <div id=\"fuelux-wizard\" class=\"row-fluid hide\" data-target=\"#step-container\">
                                                                        <ul class=\"wizard-steps\">
                                                                                <li data-target=\"#step1\" class=\"active\">
                                                                                        <span class=\"step\">1</span>
                                                                                        <span class=\"title\">Validation states</span>
                                                                                </li>

                                                                                <li data-target=\"#step2\">
                                                                                        <span class=\"step\">2</span>
                                                                                        <span class=\"title\">Alerts</span>
                                                                                </li>

                                                                                <li data-target=\"#step3\">
                                                                                        <span class=\"step\">3</span>
                                                                                        <span class=\"title\">Payment Info</span>
                                                                                </li>

                                                                                <li data-target=\"#step4\">
                                                                                        <span class=\"step\">4</span>
                                                                                        <span class=\"title\">Other Info</span>
                                                                                </li>
                                                                        </ul>
                                                                </div>

                                                                <hr />
                                                                <div class=\"step-content row-fluid position-relative\" id=\"step-container\">
                                                                        <div class=\"step-pane active\" id=\"step1\">
                                                                                <h3 class=\"lighter block green\">Enter the following information</h3>

                                                                                <form class=\"form-horizontal\" id=\"sample-form\" />
                                                                                        <div class=\"control-group warning\">
                                                                                                <label class=\"control-label\" for=\"inputWarning\">Input with warning</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span6 input-icon input-icon-right\">
                                                                                                                <input class=\"span12\" type=\"text\" id=\"inputWarning\" />
                                                                                                                <i class=\"icon-warning-sign\"></i>
                                                                                                        </span>
                                                                                                        <span class=\"help-inline\">Something may have gone wrong</span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group error\">
                                                                                                <label class=\"control-label\" for=\"inputError\">Error with tooltip</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span6 input-icon input-icon-right\">
                                                                                                                <input class=\"tooltip-error span12\" type=\"text\" id=\"inputError\" data-rel=\"tooltip\" title=\"Error info!\" data-trigger=\"focus\" />
                                                                                                                <i class=\"icon-remove-sign\"></i>
                                                                                                        </span>
                                                                                                        <span class=\"help-inline\">Please correct the error</span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group success\">
                                                                                                <label class=\"control-label\" for=\"inputSuccess\">Input with success</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span6 input-icon input-icon-right\">
                                                                                                                <input class=\"span12\" type=\"text\" id=\"inputSuccess\" />
                                                                                                                <i class=\"icon-ok-sign\"></i>
                                                                                                        </span>
                                                                                                        <span class=\"help-inline\">Woohoo!</span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group info\">
                                                                                                <label class=\"control-label\" for=\"inputInfo\">Blue Input with Info</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span6 input-icon input-icon-right\">
                                                                                                                <input class=\"span12\" type=\"text\" id=\"inputInfo\" />
                                                                                                                <i class=\"icon-info-sign\"></i>
                                                                                                        </span>
                                                                                                        <span class=\"help-inline\">Info tip help!</span>
                                                                                                </div>
                                                                                        </div>
                                                                                </form>

                                                                                <form class=\"form-horizontal\" id=\"validation-form\" method=\"get\" />
                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"email\">Email Address:</label>

                                                                                                <div class=\"controls\">
                                                                                                        <div class=\"span12\">
                                                                                                                <input type=\"email\" name=\"email\" id=\"email\" class=\"span6\" />
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"password\">Password:</label>

                                                                                                <div class=\"controls\">
                                                                                                        <div class=\"span12\">
                                                                                                                <input type=\"password\" name=\"password\" id=\"password\" class=\"span4\" />
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"password2\">Confirm Password:</label>

                                                                                                <div class=\"controls\">
                                                                                                        <div class=\"span12\">
                                                                                                                <input type=\"password\" name=\"password2\" id=\"password2\" class=\"span4\" />
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"hr hr-dotted\"></div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"name\">Company Name:</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span12\">
                                                                                                                <input class=\"span6\" type=\"text\" id=\"name\" name=\"name\" />
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"phone\">Phone Number:</label>

                                                                                                <div class=\"controls\">
                                                                                                        <div class=\"span3 input-prepend\">
                                                                                                                <span class=\"add-on\">
                                                                                                                        <i class=\"icon-phone\"></i>
                                                                                                                </span>

                                                                                                                <input class=\"span12\" type=\"tel\" id=\"phone\" name=\"phone\" />
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"url\">Company URL:</label>

                                                                                                <div class=\"controls\">
                                                                                                        <div class=\"span12\">
                                                                                                                <input type=\"url\" id=\"url\" name=\"url\" class=\"span8\" />
                                                                                                        </div>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"hr hr-dotted\"></div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\">Subscribe to</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span12\">
                                                                                                                <label>
                                                                                                                        <input name=\"subscription\" value=\"1\" type=\"checkbox\" />
                                                                                                                        <span class=\"lbl\"> Latest news and announcements</span>
                                                                                                                </label>

                                                                                                                <label>
                                                                                                                        <input name=\"subscription\" value=\"2\" type=\"checkbox\" />
                                                                                                                        <span class=\"lbl\"> Product offers and discounts</span>
                                                                                                                </label>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\">Gender</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span12\">
                                                                                                                <label class=\"blue\">
                                                                                                                        <input name=\"gender\" value=\"1\" type=\"radio\" />
                                                                                                                        <span class=\"lbl\"> Male</span>
                                                                                                                </label>

                                                                                                                <label class=\"blue\">
                                                                                                                        <input name=\"gender\" value=\"2\" type=\"radio\" />
                                                                                                                        <span class=\"lbl\"> Female</span>
                                                                                                                </label>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"hr hr-dotted\"></div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"state\">State</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span12\">
                                                                                                                <select id=\"state\" name=\"state\" class=\"select2\" data-placeholder=\"Click to Choose...\">
                                                                                                                        <option value=\"\" />
                                                                                                                        <option value=\"AL\" />Alabama
                                                                                                                        <option value=\"AK\" />Alaska
                                                                                                                        <option value=\"AZ\" />Arizona
                                                                                                                        <option value=\"AR\" />Arkansas
                                                                                                                        <option value=\"CA\" />California
                                                                                                                        <option value=\"CO\" />Colorado
                                                                                                                        <option value=\"CT\" />Connecticut
                                                                                                                        <option value=\"DE\" />Delaware
                                                                                                                        <option value=\"FL\" />Florida
                                                                                                                        <option value=\"GA\" />Georgia
                                                                                                                        <option value=\"HI\" />Hawaii
                                                                                                                        <option value=\"ID\" />Idaho
                                                                                                                        <option value=\"IL\" />Illinois
                                                                                                                        <option value=\"IN\" />Indiana
                                                                                                                        <option value=\"IA\" />Iowa
                                                                                                                        <option value=\"KS\" />Kansas
                                                                                                                        <option value=\"KY\" />Kentucky
                                                                                                                        <option value=\"LA\" />Louisiana
                                                                                                                        <option value=\"ME\" />Maine
                                                                                                                        <option value=\"MD\" />Maryland
                                                                                                                        <option value=\"MA\" />Massachusetts
                                                                                                                        <option value=\"MI\" />Michigan
                                                                                                                        <option value=\"MN\" />Minnesota
                                                                                                                        <option value=\"MS\" />Mississippi
                                                                                                                        <option value=\"MO\" />Missouri
                                                                                                                        <option value=\"MT\" />Montana
                                                                                                                        <option value=\"NE\" />Nebraska
                                                                                                                        <option value=\"NV\" />Nevada
                                                                                                                        <option value=\"NH\" />New Hampshire
                                                                                                                        <option value=\"NJ\" />New Jersey
                                                                                                                        <option value=\"NM\" />New Mexico
                                                                                                                        <option value=\"NY\" />New York
                                                                                                                        <option value=\"NC\" />North Carolina
                                                                                                                        <option value=\"ND\" />North Dakota
                                                                                                                        <option value=\"OH\" />Ohio
                                                                                                                        <option value=\"OK\" />Oklahoma
                                                                                                                        <option value=\"OR\" />Oregon
                                                                                                                        <option value=\"PA\" />Pennsylvania
                                                                                                                        <option value=\"RI\" />Rhode Island
                                                                                                                        <option value=\"SC\" />South Carolina
                                                                                                                        <option value=\"SD\" />South Dakota
                                                                                                                        <option value=\"TN\" />Tennessee
                                                                                                                        <option value=\"TX\" />Texas
                                                                                                                        <option value=\"UT\" />Utah
                                                                                                                        <option value=\"VT\" />Vermont
                                                                                                                        <option value=\"VA\" />Virginia
                                                                                                                        <option value=\"WA\" />Washington
                                                                                                                        <option value=\"WV\" />West Virginia
                                                                                                                        <option value=\"WI\" />Wisconsin
                                                                                                                        <option value=\"WY\" />Wyoming
                                                                                                                </select>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"platform\">Platform</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span12\">
                                                                                                                <select class=\"span3\" id=\"platform\" name=\"platform\">
                                                                                                                        <option value=\"\" />------------------
                                                                                                                        <option value=\"linux\" />Linux
                                                                                                                        <option value=\"windows\" />Windows
                                                                                                                        <option value=\"mac\" />Mac OS
                                                                                                                        <option value=\"ios\" />iOS
                                                                                                                        <option value=\"android\" />Android
                                                                                                                </select>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <label class=\"control-label\" for=\"comment\">Comment</label>

                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span12\">
                                                                                                                <textarea class=\"span8\" name=\"comment\" id=\"comment\"></textarea>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>

                                                                                        <div class=\"control-group\">
                                                                                                <div class=\"controls\">
                                                                                                        <span class=\"span6\">
                                                                                                                <label>
                                                                                                                        <input name=\"agree\" id=\"agree\" type=\"checkbox\" />
                                                                                                                        <span class=\"lbl\"> I accept the policy</span>
                                                                                                                </label>
                                                                                                        </span>
                                                                                                </div>
                                                                                        </div>
                                                                                </form>
                                                                        </div>

                                                                        <div class=\"step-pane\" id=\"step2\">
                                                                                <div class=\"row-fluid\">
                                                                                        <div class=\"alert alert-success\">
                                                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                                                                        <i class=\"icon-remove\"></i>
                                                                                                </button>

                                                                                                <strong>
                                                                                                        <i class=\"icon-ok\"></i>
                                                                                                        Well done!
                                                                                                </strong>

                                                                                                You successfully read this important alert message.
                                                                                                <br />
                                                                                        </div>

                                                                                        <div class=\"alert alert-error\">
                                                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                                                                        <i class=\"icon-remove\"></i>
                                                                                                </button>

                                                                                                <strong>
                                                                                                        <i class=\"icon-remove\"></i>
                                                                                                        Oh snap!
                                                                                                </strong>

                                                                                                Change a few things up and try submitting again.
                                                                                                <br />
                                                                                        </div>

                                                                                        <div class=\"alert alert-warning\">
                                                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                                                                        <i class=\"icon-remove\"></i>
                                                                                                </button>
                                                                                                <strong>Warning!</strong>

                                                                                                Best check yo self, you're not looking too good.
                                                                                                <br />
                                                                                        </div>

                                                                                        <div class=\"alert alert-info\">
                                                                                                <button type=\"button\" class=\"close\" data-dismiss=\"alert\">
                                                                                                        <i class=\"icon-remove\"></i>
                                                                                                </button>
                                                                                                <strong>Heads up!</strong>

                                                                                                This alert needs your attention, but it's not super important.
                                                                                                <br />
                                                                                        </div>
                                                                                </div>
                                                                        </div>

                                                                        <div class=\"step-pane\" id=\"step3\">
                                                                                <div class=\"center\">
                                                                                        <h3 class=\"blue lighter\">This is step 3</h3>
                                                                                </div>
                                                                        </div>

                                                                        <div class=\"step-pane\" id=\"step4\">
                                                                                <div class=\"center\">
                                                                                        <h3 class=\"green\">Congrats!</h3>
                                                                                        Your product is ready to ship! Click finish to continue!
                                                                                </div>
                                                                        </div>
                                                                </div>

                                                                <hr />
                                                                <div class=\"row-fluid wizard-actions\">
                                                                        <button class=\"btn btn-prev\">
                                                                                <i class=\"icon-arrow-left\"></i>
                                                                                Prev
                                                                        </button>

                                                                        <button class=\"btn btn-success btn-next\" data-last=\"Finish \">
                                                                                Next
                                                                                <i class=\"icon-arrow-right icon-on-right\"></i>
                                                                        </button>
                                                                </div>
                                                        </div>
                                                </div><!--/widget-main-->
                                        </div><!--/widget-body-->
                                </div>
                        </div>
                </div>

                <div id=\"modal-wizard\" class=\"modal hide\">
                        <div class=\"modal-header\" data-target=\"#modal-step-contents\">
                                <ul class=\"wizard-steps clearfix\">
                                        <li data-target=\"#modal-step1\" class=\"active\">
                                                <span class=\"step\">1</span>
                                                <span class=\"title\">Validation states</span>
                                        </li>

                                        <li data-target=\"#modal-step2\">
                                                <span class=\"step\">2</span>
                                                <span class=\"title\">Alerts</span>
                                        </li>

                                        <li data-target=\"#modal-step3\">
                                                <span class=\"step\">3</span>
                                                <span class=\"title\">Payment Info</span>
                                        </li>

                                        <li data-target=\"#modal-step4\">
                                                <span class=\"step\">4</span>
                                                <span class=\"title\">Other Info</span>
                                        </li>
                                </ul>
                        </div>

                        <div class=\"modal-body step-content\" id=\"modal-step-contents\">
                                <div class=\"step-pane active\" id=\"modal-step1\">
                                        <div class=\"center\">
                                                <h4 class=\"blue\">Step 1</h4>
                                        </div>
                                </div>

                                <div class=\"step-pane\" id=\"modal-step2\">
                                        <div class=\"center\">
                                                <h4 class=\"blue\">Step 2</h4>
                                        </div>
                                </div>

                                <div class=\"step-pane\" id=\"modal-step3\">
                                        <div class=\"center\">
                                                <h4 class=\"blue\">Step 3</h4>
                                        </div>
                                </div>

                                <div class=\"step-pane\" id=\"modal-step4\">
                                        <div class=\"center\">
                                                <h4 class=\"blue\">Step 4</h4>
                                        </div>
                                </div>
                        </div>

                        <div class=\"modal-footer wizard-actions\">
                                <button class=\"btn btn-small btn-prev\">
                                        <i class=\"icon-arrow-left\"></i>
                                        Prev
                                </button>

                                <button class=\"btn btn-success btn-small btn-next\" data-last=\"Finish \">
                                        Next
                                        <i class=\"icon-arrow-right icon-on-right\"></i>
                                </button>

                                <button class=\"btn btn-danger btn-small pull-left\" data-dismiss=\"modal\">
                                        <i class=\"icon-remove\"></i>
                                        Cancel
                                </button>
                        </div>
                </div><!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
</div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 528
    public function block_plugins($context, array $blocks = array())
    {
        // line 529
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/fuelux/fuelux.wizard.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 530
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.validate.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 531
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 532
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 533
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.maskedinput.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 534
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/select2.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 536
    public function block_script($context, array $blocks = array())
    {
        echo "                
                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mnformswz\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                                \$(function() {
\t\t\t
\t\t\t\t\$('[data-rel=tooltip]').tooltip();
\t\t\t
\t\t\t\t\$(\".select2\").css('width','150px').select2({allowClear:true})
\t\t\t\t.on('change', function(){
\t\t\t\t\t\$(this).closest('form').validate().element(\$(this));
\t\t\t\t}); 
\t\t\t
\t\t\t
\t\t\t\tvar \$validation = false;
\t\t\t\t\$('#fuelux-wizard').ace_wizard().on('change' , function(e, info){
\t\t\t\t\tif(info.step == 1 && \$validation) {
\t\t\t\t\t\tif(!\$('#validation-form').valid()) return false;
\t\t\t\t\t}
\t\t\t\t}).on('finished', function(e) {
\t\t\t\t\tbootbox.dialog(\"Thank you! Your information was successfully saved!\", [{
\t\t\t\t\t\t\"label\" : \"OK\",
\t\t\t\t\t\t\"class\" : \"btn-small btn-primary\",
\t\t\t\t\t\t}]
\t\t\t\t\t);
\t\t\t\t}).on('stepclick', function(e){
\t\t\t\t\t//return false;//prevent clicking on steps
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t\t\$('#validation-form').hide();
\t\t\t\t\$('#skip-validation').removeAttr('checked').on('click', function(){
\t\t\t\t\t\$validation = this.checked;
\t\t\t\t\tif(this.checked) {
\t\t\t\t\t\t\$('#sample-form').hide();
\t\t\t\t\t\t\$('#validation-form').show();
\t\t\t\t\t}
\t\t\t\t\telse {
\t\t\t\t\t\t\$('#validation-form').hide();
\t\t\t\t\t\t\$('#sample-form').show();
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t
\t\t\t
\t\t\t\t//documentation : http://docs.jquery.com/Plugins/Validation/validate
\t\t\t
\t\t\t
\t\t\t\t\$.mask.definitions['~']='[+-]';
\t\t\t\t\$('#phone').mask('(999) 999-9999');
\t\t\t
\t\t\t\tjQuery.validator.addMethod(\"phone\", function (value, element) {
\t\t\t\t\treturn this.optional(element) || /^\\(\\d{3}\\) \\d{3}\\-\\d{4}( x\\d{1,6})?\$/.test(value);
\t\t\t\t}, \"Enter a valid phone number.\");
\t\t\t
\t\t\t\t\$('#validation-form').validate({
\t\t\t\t\terrorElement: 'span',
\t\t\t\t\terrorClass: 'help-inline',
\t\t\t\t\tfocusInvalid: false,
\t\t\t\t\trules: {
\t\t\t\t\t\temail: {
\t\t\t\t\t\t\trequired: true,
\t\t\t\t\t\t\temail:true
\t\t\t\t\t\t},
\t\t\t\t\t\tpassword: {
\t\t\t\t\t\t\trequired: true,
\t\t\t\t\t\t\tminlength: 5
\t\t\t\t\t\t},
\t\t\t\t\t\tpassword2: {
\t\t\t\t\t\t\trequired: true,
\t\t\t\t\t\t\tminlength: 5,
\t\t\t\t\t\t\tequalTo: \"#password\"
\t\t\t\t\t\t},
\t\t\t\t\t\tname: {
\t\t\t\t\t\t\trequired: true
\t\t\t\t\t\t},
\t\t\t\t\t\tphone: {
\t\t\t\t\t\t\trequired: true,
\t\t\t\t\t\t\tphone: 'required'
\t\t\t\t\t\t},
\t\t\t\t\t\turl: {
\t\t\t\t\t\t\trequired: true,
\t\t\t\t\t\t\turl: true
\t\t\t\t\t\t},
\t\t\t\t\t\tcomment: {
\t\t\t\t\t\t\trequired: true
\t\t\t\t\t\t},
\t\t\t\t\t\tstate: {
\t\t\t\t\t\t\trequired: true
\t\t\t\t\t\t},
\t\t\t\t\t\tplatform: {
\t\t\t\t\t\t\trequired: true
\t\t\t\t\t\t},
\t\t\t\t\t\tsubscription: {
\t\t\t\t\t\t\trequired: true
\t\t\t\t\t\t},
\t\t\t\t\t\tgender: 'required',
\t\t\t\t\t\tagree: 'required'
\t\t\t\t\t},
\t\t\t
\t\t\t\t\tmessages: {
\t\t\t\t\t\temail: {
\t\t\t\t\t\t\trequired: \"Please provide a valid email.\",
\t\t\t\t\t\t\temail: \"Please provide a valid email.\"
\t\t\t\t\t\t},
\t\t\t\t\t\tpassword: {
\t\t\t\t\t\t\trequired: \"Please specify a password.\",
\t\t\t\t\t\t\tminlength: \"Please specify a secure password.\"
\t\t\t\t\t\t},
\t\t\t\t\t\tsubscription: \"Please choose at least one option\",
\t\t\t\t\t\tgender: \"Please choose gender\",
\t\t\t\t\t\tagree: \"Please accept our policy\"
\t\t\t\t\t},
\t\t\t
\t\t\t\t\tinvalidHandler: function (event, validator) { //display error alert on form submit   
\t\t\t\t\t\t\$('.alert-error', \$('.login-form')).show();
\t\t\t\t\t},
\t\t\t
\t\t\t\t\thighlight: function (e) {
\t\t\t\t\t\t\$(e).closest('.control-group').removeClass('info').addClass('error');
\t\t\t\t\t},
\t\t\t
\t\t\t\t\tsuccess: function (e) {
\t\t\t\t\t\t\$(e).closest('.control-group').removeClass('error').addClass('info');
\t\t\t\t\t\t\$(e).remove();
\t\t\t\t\t},
\t\t\t
\t\t\t\t\terrorPlacement: function (error, element) {
\t\t\t\t\t\tif(element.is(':checkbox') || element.is(':radio')) {
\t\t\t\t\t\t\tvar controls = element.closest('.controls');
\t\t\t\t\t\t\tif(controls.find(':checkbox,:radio').length > 1) controls.append(error);
\t\t\t\t\t\t\telse error.insertAfter(element.nextAll('.lbl:eq(0)').eq(0));
\t\t\t\t\t\t}
\t\t\t\t\t\telse if(element.is('.select2')) {
\t\t\t\t\t\t\terror.insertAfter(element.siblings('[class*=\"select2-container\"]:eq(0)'));
\t\t\t\t\t\t}
\t\t\t\t\t\telse if(element.is('.chzn-select')) {
\t\t\t\t\t\t\terror.insertAfter(element.siblings('[class*=\"chzn-container\"]:eq(0)'));
\t\t\t\t\t\t}
\t\t\t\t\t\telse error.insertAfter(element);
\t\t\t\t\t},
\t\t\t
\t\t\t\t\tsubmitHandler: function (form) {
\t\t\t\t\t},
\t\t\t\t\tinvalidHandler: function (form) {
\t\t\t\t\t}
\t\t\t\t});
\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t
\t\t\t\t\$('#modal-wizard .modal-header').ace_wizard();
\t\t\t\t\$('#modal-wizard .wizard-actions .btn[data-dismiss=modal]').removeAttr('disabled');
\t\t\t})
                                
                                
                                
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:frmwizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  618 => 536,  612 => 534,  608 => 533,  604 => 532,  600 => 531,  596 => 530,  591 => 529,  588 => 528,  97 => 40,  94 => 39,  60 => 7,  57 => 6,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
