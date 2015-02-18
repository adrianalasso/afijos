<?php

/* TestBundle:Default:tbprecio.html.twig */
class __TwigTemplate_f3fbaa7304928d594c06c0ee0158640e5c43c301fc441e470572dc0abcf2d8a5 extends Twig_Template
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
        echo "Página de tabla de precios";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
    }

    // line 5
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
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
                                <a href=\"#\">More Pages</a>

                                <span class=\"divider\">
                                        <i class=\"icon-angle-right arrow-icon\"></i>
                                </span>
                        </li>
                        <li class=\"active\">Pricing Tables</li>
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
        echo "        <div class=\"page-content\">
                <div class=\"page-header position-relative\">
                        <h1>
                                Pricing Tables
                                <small>
                                        <i class=\"icon-double-angle-right\"></i>
                                        Large &amp; Small
                                </small>
                        </h1>
                </div><!--/.page-header-->

                <div class=\"row-fluid\">
                        <div class=\"span12\">
                                <!--PAGE CONTENT BEGINS-->

                                <div class=\"row-fluid\">
                                        <div class=\"span3\">
                                                <div class=\"widget-box pricing-box\">
                                                        <div class=\"widget-header header-color-dark\">
                                                                <h5 class=\"bigger lighter\">Basic Package</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main\">
                                                                        <ul class=\"unstyled spaced2\">
                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        10 GB Disk Space
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        200 GB Bandwidth
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        100 Email Accounts
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        10 MySQL Databases
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        \$10 Ad Credit
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-remove red\"></i>
                                                                                        Free Domain
                                                                                </li>
                                                                        </ul>

                                                                        <hr />
                                                                        <div class=\"price\">
                                                                                \$5
                                                                                <small>/month</small>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-inverse\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span3\">
                                                <div class=\"widget-box pricing-box\">
                                                        <div class=\"widget-header header-color-orange\">
                                                                <h5 class=\"bigger lighter\">Starter Package</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main\">
                                                                        <ul class=\"unstyled spaced2\">
                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        50 GB Disk Space
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        1 TB Bandwidth
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        1000 Email Accounts
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        100 MySQL Databases
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        \$25 Ad Credit
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        Free Domain
                                                                                </li>
                                                                        </ul>

                                                                        <hr />
                                                                        <div class=\"price\">
                                                                                \$10
                                                                                <small>/month</small>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-warning\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span3\">
                                                <div class=\"widget-box pricing-box\">
                                                        <div class=\"widget-header header-color-blue\">
                                                                <h5 class=\"bigger lighter\">Business Package</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main\">
                                                                        <ul class=\"unstyled spaced2\">
                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        200 GB Disk Space
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        Unlimited Bandwidth
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        1000 Email Accounts
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        200 MySQL Databases
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        \$25 Ad Credit
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        Free Domain
                                                                                </li>
                                                                        </ul>

                                                                        <hr />
                                                                        <div class=\"price\">
                                                                                \$15
                                                                                <small>/month</small>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-primary\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span3\">
                                                <div class=\"widget-box pricing-box\">
                                                        <div class=\"widget-header header-color-green\">
                                                                <h5 class=\"bigger lighter\">Ultimate Package</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main\">
                                                                        <ul class=\"unstyled spaced2\">
                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        Unlimited Space
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        Unlimited Bandwidth
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        Unlimited Email Accounts
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        Unlimited MySQL Databases
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        \$50 Ad Credit
                                                                                </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        2 Free Domains
                                                                                </li>
                                                                        </ul>

                                                                        <hr />
                                                                        <div class=\"price\">
                                                                                \$25
                                                                                <small>/month</small>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-success\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>
                                </div>

                                <div class=\"space-24\"></div>
                                <h3 class=\"header smaller red\">Small Style</h3>

                                <div class=\"row-fluid\">
                                        <div class=\"span3 pricing-span-header\">
                                                <div class=\"widget-box transparent\">
                                                        <div class=\"widget-header\">
                                                                <h5 class=\"bigger lighter\">Package Name</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main no-padding\">
                                                                        <ul class=\"unstyled list-striped pricing-table-header\">
                                                                                <li>Disk Space </li>
                                                                                <li>Bandwidth </li>
                                                                                <li>Email Accounts </li>
                                                                                <li>MySQL Databases </li>
                                                                                <li>Ad Credit </li>
                                                                                <li>Free Domain </li>
                                                                        </ul>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span2 pricing-span\">
                                                <div class=\"widget-box pricing-box-small\">
                                                        <div class=\"widget-header header-color-red3\">
                                                                <h5 class=\"bigger lighter\">Basic</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main no-padding\">
                                                                        <ul class=\"unstyled list-striped pricing-table\">
                                                                                <li> 10 GB </li>
                                                                                <li> 200 GB </li>
                                                                                <li> 100 </li>
                                                                                <li> 10 </li>
                                                                                <li> \$10 </li>

                                                                                <li>
                                                                                        <i class=\"icon-remove red\"></i>
                                                                                </li>
                                                                        </ul>

                                                                        <div class=\"price\">
                                                                                <span class=\"label label-large label-inverse arrowed-in arrowed-in-right\">
                                                                                        \$5
                                                                                        <small>/month</small>
                                                                                </span>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-small btn-danger\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span2 pricing-span\">
                                                <div class=\"widget-box pricing-box-small\">
                                                        <div class=\"widget-header header-color-orange\">
                                                                <h5 class=\"bigger lighter\">Starter</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main no-padding\">
                                                                        <ul class=\"unstyled list-striped pricing-table\">
                                                                                <li> 50 GB </li>
                                                                                <li> 1 TB </li>
                                                                                <li> 1000 </li>
                                                                                <li> 100 </li>
                                                                                <li> \$25 </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        1
                                                                                </li>
                                                                        </ul>

                                                                        <div class=\"price\">
                                                                                <span class=\"label label-large label-inverse arrowed-in arrowed-in-right\">
                                                                                        \$10
                                                                                        <small>/month</small>
                                                                                </span>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-small btn-warning\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span2 pricing-span\">
                                                <div class=\"widget-box pricing-box-small\">
                                                        <div class=\"widget-header header-color-blue\">
                                                                <h5 class=\"bigger lighter\">Business</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main no-padding\">
                                                                        <ul class=\"unstyled list-striped pricing-table\">
                                                                                <li> 200 GB </li>
                                                                                <li> Unlimited </li>
                                                                                <li> 1000 </li>
                                                                                <li> 200 </li>
                                                                                <li> \$25 </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        1
                                                                                </li>
                                                                        </ul>

                                                                        <div class=\"price\">
                                                                                <span class=\"label label-large label-inverse arrowed-in arrowed-in-right\">
                                                                                        \$15
                                                                                        <small>/month</small>
                                                                                </span>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-small btn-primary\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span2 pricing-span\">
                                                <div class=\"widget-box pricing-box-small\">
                                                        <div class=\"widget-header header-color-green\">
                                                                <h5 class=\"bigger lighter\">Unlimited</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main no-padding\">
                                                                        <ul class=\"unstyled list-striped pricing-table\">
                                                                                <li> Unlimited </li>
                                                                                <li> Unlimited </li>
                                                                                <li> Unlimited </li>
                                                                                <li> Unlimited </li>
                                                                                <li> \$50 </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        2
                                                                                </li>
                                                                        </ul>

                                                                        <div class=\"price\">
                                                                                <span class=\"label label-large label-inverse arrowed-in arrowed-in-right\">
                                                                                        \$25
                                                                                        <small>/month</small>
                                                                                </span>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-small btn-success\">
                                                                                <span>Buy</span>
                                                                        </a>
                                                                </div>
                                                        </div>
                                                </div>
                                        </div>

                                        <div class=\"span2 pricing-span\">
                                                <div class=\"widget-box pricing-box-small\">
                                                        <div class=\"widget-header header-color-grey\">
                                                                <h5 class=\"bigger lighter\">Extreme</h5>
                                                        </div>

                                                        <div class=\"widget-body\">
                                                                <div class=\"widget-main no-padding\">
                                                                        <ul class=\"unstyled list-striped pricing-table\">
                                                                                <li> Unlimited </li>
                                                                                <li> Unlimited </li>
                                                                                <li> Unlimited </li>
                                                                                <li> Unlimited </li>
                                                                                <li> \$100 </li>

                                                                                <li>
                                                                                        <i class=\"icon-ok green\"></i>
                                                                                        3
                                                                                </li>
                                                                        </ul>

                                                                        <div class=\"price\">
                                                                                <span class=\"label label-large label-inverse arrowed-in arrowed-in-right\">
                                                                                        \$30
                                                                                        <small>/month</small>
                                                                                </span>
                                                                        </div>
                                                                </div>

                                                                <div>
                                                                        <a href=\"#\" class=\"btn btn-block btn-small btn-grey\">
                                                                                <span>Buy</span>
                                                                        </a>
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

    // line 498
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 500
    public function block_script($context, array $blocks = array())
    {
        // line 501
        echo "                            ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "                            
                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mntbprecio\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:tbprecio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  562 => 501,  559 => 500,  554 => 498,  92 => 39,  89 => 38,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
