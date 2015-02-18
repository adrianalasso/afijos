<?php

/* TestBundle:Default:grid.html.twig */
class __TwigTemplate_b2cdf74fb8f33f2d94b6b2bde4339e63d3ae72d36a1faaa96da3a63afd596ca8 extends Twig_Template
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
            'styleinline' => array($this, 'block_styleinline'),
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
        echo "Página de grid";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
    }

    // line 5
    public function block_styleinline($context, array $blocks = array())
    {
        // line 6
        echo "<style>
.center {
\ttext-align:center;
}
.center [class*=\"span\"] {
\tborder:1px solid #DDD;
\tmargin-top:5px;
\tmargin-bottom:5px;
\tpadding-top:2px;
}
.center [class*=\"span\"]:hover {
\tbackground-color:#FCE6A6;
\tborder-color:#EFD27A;
}
</style>
";
    }

    // line 22
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 23
        echo "    <div class=\"breadcrumbs\" id=\"breadcrumbs\">
            <ul class=\"breadcrumb\">
                    <li>
                            <i class=\"icon-home home-icon\"></i>
                            <a href=\"#\">Home</a>

                            <span class=\"divider\">
                                    <i class=\"icon-angle-right arrow-icon\"></i>
                            </span>
                    </li>

                    <li>
                            <a href=\"#\">Other Pages</a>

                            <span class=\"divider\">
                                    <i class=\"icon-angle-right arrow-icon\"></i>
                            </span>
                    </li>
                    <li class=\"active\">Grid</li>
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

    // line 55
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 56
        echo "    <div class=\"page-content\">
            <div class=\"page-header position-relative\">
                    <h1>
                            Grid
                            <small>
                                    <i class=\"icon-double-angle-right\"></i>
                                    bootstrap grid sizing
                            </small>
                    </h1>
            </div><!--/.page-header-->

            <div class=\"row-fluid\">
                    <div class=\"span12\">
                            <!--PAGE CONTENT BEGINS-->

                            <div class=\"center\">
                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">.span12</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span1\">.span1</div>
                                            <div class=\"span11\">.span11</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span2\">.span2</div>
                                            <div class=\"span10\">.span10</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span3\">.span3</div>
                                            <div class=\"span9\">.span9</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span4\">.span4</div>
                                            <div class=\"span8\">.span8</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span5\">.span5</div>
                                            <div class=\"span7\">.span7</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span6\">.span6</div>
                                            <div class=\"span6\">.span6</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span7\">.span7</div>
                                            <div class=\"span5\">.span5</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span8\">.span8</div>
                                            <div class=\"span4\">.span4</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span9\">.span9</div>
                                            <div class=\"span3\">.span3</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span10\">.span10</div>
                                            <div class=\"span2\">.span2</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span11\">.span11</div>
                                            <div class=\"span1\">.span1</div>
                                    </div>

                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">.span12</div>
                                    </div>
                            </div><!--PAGE CONTENT ENDS-->
                    </div><!--/.span-->
            </div><!--/.row-fluid-->
    </div><!--/.page-content-->
";
    }

    // line 139
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 141
    public function block_script($context, array $blocks = array())
    {
        // line 142
        echo "                            ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "                            
                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mngrid\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 142,  206 => 141,  201 => 139,  115 => 56,  112 => 55,  78 => 23,  75 => 22,  56 => 6,  53 => 5,  48 => 3,  42 => 2,  11 => 1,);
    }
}
