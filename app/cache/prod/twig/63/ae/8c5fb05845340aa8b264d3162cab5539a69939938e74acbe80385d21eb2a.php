<?php

/* TestBundle:Default:wysiwyg.html.twig */
class __TwigTemplate_63ae8c5fb05845340aa8b264d3162cab5539a69939938e74acbe80385d21eb2a extends Twig_Template
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
        echo "Página de wysiwyg";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/jquery-ui-1.10.3.custom.min.css"), "html", null, true);
        echo "\" />
";
    }

    // line 6
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 7
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
                                                    <a href=\"#\">Forms</a>

                                                    <span class=\"divider\">
                                                            <i class=\"icon-angle-right arrow-icon\"></i>
                                                    </span>
                                            </li>
                                            <li class=\"active\">Wysiwyg &amp; Markdown</li>
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
        echo "                            <div class=\"page-content\">
                                    <div class=\"page-header position-relative\">
                                            <h1>Wysiwyg &amp; Markdown Editor </h1>
                                    </div><!--/.page-header-->

                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">
                                                    <!--PAGE CONTENT BEGINS-->

                                                    <h4 class=\"header green clearfix\">
                                                            Bootstrap Lightweight Editor
                                                            <span class=\"block pull-right\">
                                                                    <small class=\"grey middle\">Choose style: &nbsp;</small>

                                                                    <span class=\"btn-toolbar inline middle no-margin\">
                                                                            <span data-toggle=\"buttons-radio\" class=\"btn-group no-margin\">
                                                                                    <button class=\"btn btn-mini btn-yellow\">1</button>
                                                                                    <button class=\"btn btn-mini btn-yellow active\">2</button>
                                                                                    <button class=\"btn btn-mini btn-yellow\">3</button>
                                                                            </span>
                                                                    </span>
                                                            </span>
                                                    </h4>

                                                    <div class=\"wysiwyg-editor\" id=\"editor1\"></div>

                                                    <div class=\"hr hr-double dotted\"></div>

                                                    <div class=\"row-fluid\">
                                                            <div class=\"span6\">
                                                                    <h4 class=\"header blue\">Inside Widget</h4>

                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header widget-header-small  header-color-green\">
                                                                                    <div class=\"widget-toolbar\">
                                                                                            <a href=\"#\" data-action=\"collapse\">
                                                                                                    <i class=\"icon-chevron-up\"></i>
                                                                                            </a>
                                                                                    </div>
                                                                            </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main no-padding\">
                                                                                            <div class=\"wysiwyg-editor\" id=\"editor2\"></div>
                                                                                    </div>

                                                                                    <div class=\"widget-toolbox padding-4 clearfix\">
                                                                                            <div class=\"btn-group pull-left\">
                                                                                                    <button class=\"btn btn-small btn-grey\">
                                                                                                            <i class=\"icon-remove bigger-125\"></i>
                                                                                                            Cancel
                                                                                                    </button>
                                                                                            </div>

                                                                                            <div class=\"btn-group pull-right\">
                                                                                                    <button class=\"btn btn-small btn-danger\">
                                                                                                            <i class=\"icon-save bigger-125\"></i>
                                                                                                            Save
                                                                                                    </button>

                                                                                                    <button class=\"btn btn-small btn-success\">
                                                                                                            <i class=\"icon-globe bigger-125\"></i>

                                                                                                            Publish
                                                                                                            <i class=\"icon-arrow-right icon-on-right bigger-125\"></i>
                                                                                                    </button>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>

                                                            <div class=\"span6\">
                                                                    <h4 class=\"header green\">Markdown Editor</h4>

                                                                    <div class=\"widget-box\">
                                                                            <div class=\"widget-header widget-header-small header-color-blue\">  </div>

                                                                            <div class=\"widget-body\">
                                                                                    <div class=\"widget-main no-padding\">
                                                                                            <textarea class=\"span12\" name=\"content\" data-provide=\"markdown\" rows=\"10\">**Markdown Editor** inside a *widget box*

- list item 1
- list item 2
- list item 3</textarea>
                                                                                    </div>

                                                                                    <div class=\"widget-toolbox padding-4 clearfix\">
                                                                                            <div class=\"btn-group pull-left\">
                                                                                                    <button class=\"btn btn-small btn-info\">
                                                                                                            <i class=\"icon-remove bigger-125\"></i>
                                                                                                            Cancel
                                                                                                    </button>
                                                                                            </div>

                                                                                            <div class=\"btn-group pull-right\">
                                                                                                    <button class=\"btn btn-small btn-purple\">
                                                                                                            <i class=\"icon-save bigger-125\"></i>
                                                                                                            Save
                                                                                                    </button>
                                                                                            </div>
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>

                                                    <script type=\"text/javascript\">
                                                            var \$assets = \"assets\";//this will be used in loading jQuery UI if needed!
                                                    </script>

                                                    <!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                    </div><!--/.row-fluid-->
                            </div><!--/.page-content-->
";
    }

    // line 156
    public function block_plugins($context, array $blocks = array())
    {
        // line 157
        echo "\t\t<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-ui-1.10.3.custom.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.ui.touch-punch.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 159
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/markdown/markdown.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/markdown/bootstrap-markdown.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 161
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.hotkeys.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootstrap-wysiwyg.min.js"), "html", null, true);
        echo "\"></script>
\t\t<script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 165
    public function block_script($context, array $blocks = array())
    {
        // line 166
        echo "                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mnblanco\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                    \$(function(){
\t
\tfunction showErrorAlert (reason, detail) {
\t\tvar msg='';
\t\tif (reason==='unsupported-file-type') { msg = \"Unsupported format \" +detail; }
\t\telse {
\t\t\tconsole.log(\"error uploading file\", reason, detail);
\t\t}
\t\t\$('<div class=\"alert\"> <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>'+ 
\t\t '<strong>File upload error</strong> '+msg+' </div>').prependTo('#alerts');
\t}

\t//\$('#editor1').ace_wysiwyg();//this will create the default editor will all buttons

\t//but we want to change a few buttons colors for the third style
\t\$('#editor1').ace_wysiwyg({
\t\ttoolbar:
\t\t[
\t\t\t'font',
\t\t\tnull,
\t\t\t'fontSize',
\t\t\tnull,
\t\t\t{name:'bold', className:'btn-info'},
\t\t\t{name:'italic', className:'btn-info'},
\t\t\t{name:'strikethrough', className:'btn-info'},
\t\t\t{name:'underline', className:'btn-info'},
\t\t\tnull,
\t\t\t{name:'insertunorderedlist', className:'btn-success'},
\t\t\t{name:'insertorderedlist', className:'btn-success'},
\t\t\t{name:'outdent', className:'btn-purple'},
\t\t\t{name:'indent', className:'btn-purple'},
\t\t\tnull,
\t\t\t{name:'justifyleft', className:'btn-primary'},
\t\t\t{name:'justifycenter', className:'btn-primary'},
\t\t\t{name:'justifyright', className:'btn-primary'},
\t\t\t{name:'justifyfull', className:'btn-inverse'},
\t\t\tnull,
\t\t\t{name:'createLink', className:'btn-pink'},
\t\t\t{name:'unlink', className:'btn-pink'},
\t\t\tnull,
\t\t\t{name:'insertImage', className:'btn-success'},
\t\t\tnull,
\t\t\t'foreColor',
\t\t\tnull,
\t\t\t{name:'undo', className:'btn-grey'},
\t\t\t{name:'redo', className:'btn-grey'}
\t\t],
\t\t'wysiwyg': {
\t\t\tfileUploadError: showErrorAlert
\t\t}
\t}).prev().addClass('wysiwyg-style2');

\t

\t\$('#editor2').css({'height':'200px'}).ace_wysiwyg({
\t\ttoolbar_place: function(toolbar) {
\t\t\treturn \$(this).closest('.widget-box').find('.widget-header').prepend(toolbar);
\t\t},
\t\ttoolbar:
\t\t[
\t\t\t'bold',
\t\t\t{name:'italic' , title:'Change Title!', icon: 'icon-leaf'},
\t\t\t'strikethrough',
\t\t\t'underline',
\t\t\tnull,
\t\t\t'insertunorderedlist',
\t\t\t'insertorderedlist',
\t\t\tnull,
\t\t\t'justifyleft',
\t\t\t'justifycenter',
\t\t\t'justifyright'
\t\t],
\t\tspeech_button:false
\t});


\t\$('[data-toggle=\"buttons-radio\"]').on('click', function(e){
\t\tvar target = \$(e.target);
\t\tvar which = parseInt(\$.trim(target.text()));
\t\tvar toolbar = \$('#editor1').prev().get(0);
\t\tif(which == 1 || which == 2 || which == 3) {
\t\t\ttoolbar.className = toolbar.className.replace(/wysiwyg\\-style(1|2)/g , '');
\t\t\tif(which == 1) \$(toolbar).addClass('wysiwyg-style1');
\t\t\telse if(which == 2) \$(toolbar).addClass('wysiwyg-style2');
\t\t}
\t});





\t//Add Image Resize Functionality to Chrome and Safari
\t//webkit browsers don't have image resize functionality when content is editable
\t//so let's add something using jQuery UI resizable
\t//another option would be opening a dialog for user to enter dimensions.
\tif ( typeof jQuery.ui !== 'undefined' && /applewebkit/.test(navigator.userAgent.toLowerCase()) ) {
\t\t
\t\tvar lastResizableImg = null;
\t\tfunction destroyResizable() {
\t\t\tif(lastResizableImg == null) return;
\t\t\tlastResizableImg.resizable( \"destroy\" );
\t\t\tlastResizableImg.removeData('resizable');
\t\t\tlastResizableImg = null;
\t\t}

\t\tvar enableImageResize = function() {
\t\t\t\$('.wysiwyg-editor')
\t\t\t.on('mousedown', function(e) {
\t\t\t\tvar target = \$(e.target);
\t\t\t\tif( e.target instanceof HTMLImageElement ) {
\t\t\t\t\tif( !target.data('resizable') ) {
\t\t\t\t\t\ttarget.resizable({
\t\t\t\t\t\t\taspectRatio: e.target.width / e.target.height,
\t\t\t\t\t\t});
\t\t\t\t\t\ttarget.data('resizable', true);
\t\t\t\t\t\t
\t\t\t\t\t\tif( lastResizableImg != null ) {//disable previous resizable image
\t\t\t\t\t\t\tlastResizableImg.resizable( \"destroy\" );
\t\t\t\t\t\t\tlastResizableImg.removeData('resizable');
\t\t\t\t\t\t}
\t\t\t\t\t\tlastResizableImg = target;
\t\t\t\t\t}
\t\t\t\t}
\t\t\t})
\t\t\t.on('click', function(e) {
\t\t\t\tif( lastResizableImg != null && !(e.target instanceof HTMLImageElement) ) {
\t\t\t\t\tdestroyResizable();
\t\t\t\t}
\t\t\t})
\t\t\t.on('keydown', function() {
\t\t\t\tdestroyResizable();
\t\t\t});
\t    }
\t\t
\t\tenableImageResize();

\t\t/**
\t\t//or we can load the jQuery UI dynamically only if needed
\t\tif (typeof jQuery.ui !== 'undefined') enableImageResize();
\t\telse {//load jQuery UI if not loaded
\t\t\t\$.getScript(\$assets+\"/js/jquery-ui-1.10.3.custom.min.js\", function(data, textStatus, jqxhr) {
\t\t\t\tif('ontouchend' in document) {//also load touch-punch for touch devices
\t\t\t\t\t\$.getScript(\$assets+\"/js/jquery.ui.touch-punch.min.js\", function(data, textStatus, jqxhr) {
\t\t\t\t\t\tenableImageResize();
\t\t\t\t\t});
\t\t\t\t} else\tenableImageResize();
\t\t\t});
\t\t}
\t\t*/
\t}


});
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:wysiwyg.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  253 => 166,  250 => 165,  244 => 163,  240 => 162,  236 => 161,  232 => 160,  228 => 159,  224 => 158,  219 => 157,  216 => 156,  97 => 40,  94 => 39,  60 => 7,  57 => 6,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
