<?php

/* TestBundle:Default:gallery.html.twig */
class __TwigTemplate_fd47529a9560bcf11f8e820b71091eca4dd45b0afdb4987ee993a3ad0dcdd90e extends Twig_Template
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
        echo "Página de galeria";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 4
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/colorbox.css"), "html", null, true);
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
                        <li class=\"active\">Gallery</li>
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
        echo "        <div class=\"page-content\">
                <div class=\"page-header position-relative\">
                        <h1>
                                Gallery
                                <small>
                                        <i class=\"icon-double-angle-right\"></i>
                                        responsive photo gallery using colorbox
                                </small>
                        </h1>
                </div><!--/.page-header-->

                <div class=\"row-fluid\">
                        <div class=\"span12\">
                                <!--PAGE CONTENT BEGINS-->

                                <div class=\"row-fluid\">
                                        <ul class=\"ace-thumbnails\">
                                                <li>
                                                        <a href=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-1.jpg"), "html", null, true);
        echo "\" title=\"Photo Title\" data-rel=\"colorbox\">
                                                                <img alt=\"150x150\" src=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-1.jpg"), "html", null, true);
        echo "\" />
                                                                <div class=\"tags\">
                                                                        <span class=\"label label-info\">breakfast</span>
                                                                        <span class=\"label label-important\">fruits</span>
                                                                        <span class=\"label label-success\">toast</span>
                                                                        <span class=\"label label-warning arrowed-in\">diet</span>
                                                                </div>
                                                        </a>

                                                        <div class=\"tools\">
                                                                <a href=\"#\">
                                                                        <i class=\"icon-link\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-paper-clip\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-pencil\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-remove red\"></i>
                                                                </a>
                                                        </div>
                                                </li>

                                                <li>
                                                        <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-2.jpg"), "html", null, true);
        echo "\" data-rel=\"colorbox\">
                                                                <img alt=\"150x150\" src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-2.jpg"), "html", null, true);
        echo "\" />
                                                                <div class=\"text\">
                                                                        <div class=\"inner\">Sample Caption on Hover</div>
                                                                </div>
                                                        </a>
                                                </li>

                                                <li>
                                                        <a href=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-3.jpg"), "html", null, true);
        echo "\" data-rel=\"colorbox\">
                                                                <img alt=\"150x150\" src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-3.jpg"), "html", null, true);
        echo "\" />
                                                                <div class=\"text\">
                                                                        <div class=\"inner\">Sample Caption on Hover</div>
                                                                </div>
                                                        </a>

                                                        <div class=\"tools tools-bottom\">
                                                                <a href=\"#\">
                                                                        <i class=\"icon-link\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-paper-clip\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-pencil\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-remove red\"></i>
                                                                </a>
                                                        </div>
                                                </li>

                                                <li>
                                                        <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-4.jpg"), "html", null, true);
        echo "\" data-rel=\"colorbox\">
                                                                <img alt=\"150x150\" src=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-4.jpg"), "html", null, true);
        echo "\" />
                                                                <div class=\"tags\">
                                                                        <span class=\"label label-info arrowed\">fountain</span>
                                                                        <span class=\"label label-important\">recreation</span>
                                                                </div>
                                                        </a>

                                                        <div class=\"tools tools-top\">
                                                                <a href=\"#\">
                                                                        <i class=\"icon-link\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-paper-clip\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-pencil\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-remove red\"></i>
                                                                </a>
                                                        </div>
                                                </li>

                                                <li>
                                                        <div>
                                                                <img alt=\"150x150\" src=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-5.jpg"), "html", null, true);
        echo "\" />
                                                                <div class=\"text\">
                                                                        <div class=\"inner\">
                                                                                <span>Some Title!</span>

                                                                                <br />
                                                                                <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-5.jpg"), "html", null, true);
        echo "\" data-rel=\"colorbox\">
                                                                                        <i class=\"icon-zoom-in\"></i>
                                                                                </a>

                                                                                <a href=\"#\">
                                                                                        <i class=\"icon-user\"></i>
                                                                                </a>

                                                                                <a href=\"#\">
                                                                                        <i class=\"icon-share-alt\"></i>
                                                                                </a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </li>

                                                <li>
                                                        <a href=\"";
        // line 168
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-6.jpg"), "html", null, true);
        echo "\" data-rel=\"colorbox\">
                                                                <img alt=\"150x150\" src=\"";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-6.jpg"), "html", null, true);
        echo "\" />
                                                        </a>

                                                        <div class=\"tools tools-right\">
                                                                <a href=\"#\">
                                                                        <i class=\"icon-link\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-paper-clip\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-pencil\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-remove red\"></i>
                                                                </a>
                                                        </div>
                                                </li>

                                                <li>
                                                        <a href=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-1.jpg"), "html", null, true);
        echo "\" data-rel=\"colorbox\">
                                                                <img alt=\"150x150\" src=\"";
        // line 193
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-1.jpg"), "html", null, true);
        echo "\" />
                                                        </a>

                                                        <div class=\"tools\">
                                                                <a href=\"#\">
                                                                        <i class=\"icon-link\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-paper-clip\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-pencil\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-remove red\"></i>
                                                                </a>
                                                        </div>
                                                </li>

                                                <li>
                                                        <a href=\"";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/image-2.jpg"), "html", null, true);
        echo "\" data-rel=\"colorbox\">
                                                                <img alt=\"150x150\" src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/images/gallery/thumb-2.jpg"), "html", null, true);
        echo "\" />
                                                        </a>

                                                        <div class=\"tools tools-top\">
                                                                <a href=\"#\">
                                                                        <i class=\"icon-link\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-paper-clip\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-pencil\"></i>
                                                                </a>

                                                                <a href=\"#\">
                                                                        <i class=\"icon-remove red\"></i>
                                                                </a>
                                                        </div>
                                                </li>
                                        </ul>
                                </div><!--PAGE CONTENT ENDS-->
                        </div><!--/.span-->
                </div><!--/.row-fluid-->
        </div><!--/.page-content-->
";
    }

    // line 244
    public function block_plugins($context, array $blocks = array())
    {
        // line 245
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.colorbox-min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 247
    public function block_script($context, array $blocks = array())
    {
        echo "                   
                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mngaleria\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                                
                                
                                
                                \$(function() {
\tvar colorbox_params = {
\t\treposition:true,
\t\tscalePhotos:true,
\t\tscrolling:false,
\t\tprevious:'<i class=\"icon-arrow-left\"></i>',
\t\tnext:'<i class=\"icon-arrow-right\"></i>',
\t\tclose:'&times;',
\t\tcurrent:'{current} of {total}',
\t\tmaxWidth:'100%',
\t\tmaxHeight:'100%',
\t\tonOpen:function(){
\t\t\tdocument.body.style.overflow = 'hidden';
\t\t},
\t\tonClosed:function(){
\t\t\tdocument.body.style.overflow = 'auto';
\t\t},
\t\tonComplete:function(){
\t\t\t\$.colorbox.resize();
\t\t}
\t};

\t\$('.ace-thumbnails [data-rel=\"colorbox\"]').colorbox(colorbox_params);
\t\$(\"#cboxLoadingGraphic\").append(\"<i class='icon-spinner orange'></i>\");//let's add a custom loading icon

\t/**\$(window).on('resize.colorbox', function() {
\t\ttry {
\t\t\t//this function has been changed in recent versions of colorbox, so it won't work
\t\t\t\$.fn.colorbox.load();//to redraw the current frame
\t\t} catch(e){}
\t});*/
})
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:gallery.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 247,  355 => 245,  352 => 244,  321 => 217,  317 => 216,  291 => 193,  287 => 192,  261 => 169,  257 => 168,  237 => 151,  228 => 145,  197 => 117,  193 => 116,  164 => 90,  160 => 89,  149 => 81,  145 => 80,  113 => 51,  109 => 50,  89 => 32,  86 => 31,  60 => 7,  57 => 6,  50 => 4,  47 => 3,  41 => 2,  11 => 1,);
    }
}
