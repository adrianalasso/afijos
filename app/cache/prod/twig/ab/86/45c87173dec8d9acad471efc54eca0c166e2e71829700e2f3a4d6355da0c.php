<?php

/* TestBundle:Default:factura.html.twig */
class __TwigTemplate_ab8645c87173dec8d9acad471efc54eca0c166e2e71829700e2f3a4d6355da0c extends Twig_Template
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
        echo "Página de factura";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
    }

    // line 5
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
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
                            <a href=\"#\">More Pages</a>

                            <span class=\"divider\">
                                    <i class=\"icon-angle-right arrow-icon\"></i>
                            </span>
                    </li>
                    <li class=\"active\">Invoice</li>
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
        echo "    <div class=\"page-content\">
            <div class=\"row-fluid\">
                    <div class=\"span12\">
                            <!--PAGE CONTENT BEGINS-->

                            <div class=\"space-6\"></div>

                            <div class=\"row-fluid\">
                                    <div class=\"span10 offset1\">
                                            <div class=\"widget-box transparent invoice-box\">
                                                    <div class=\"widget-header widget-header-large\">
                                                            <h3 class=\"grey lighter pull-left position-relative\">
                                                                    <i class=\"icon-leaf green\"></i>
                                                                    Customer Invoice
                                                            </h3>

                                                            <div class=\"widget-toolbar no-border invoice-info\">
                                                                    <span class=\"invoice-info-label\">Invoice:</span>
                                                                    <span class=\"red\">#121212</span>

                                                                    <br />
                                                                    <span class=\"invoice-info-label\">Date:</span>
                                                                    <span class=\"blue\">03/03/2013</span>
                                                            </div>

                                                            <div class=\"widget-toolbar hidden-480\">
                                                                    <a href=\"#\">
                                                                            <i class=\"icon-print\"></i>
                                                                    </a>
                                                            </div>
                                                    </div>

                                                    <div class=\"widget-body\">
                                                            <div class=\"widget-main padding-24\">
                                                                    <div class=\"row-fluid\">
                                                                            <div class=\"row-fluid\">
                                                                                    <div class=\"span6\">
                                                                                            <div class=\"row-fluid\">
                                                                                                    <div class=\"span12 label label-large label-info arrowed-in arrowed-right\">
                                                                                                            <b>Company Info</b>
                                                                                                    </div>
                                                                                            </div>

                                                                                            <div class=\"row-fluid\">
                                                                                                    <ul class=\"unstyled spaced\">
                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right blue\"></i>
                                                                                                                    Street, City
                                                                                                            </li>

                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right blue\"></i>
                                                                                                                    Zip Code
                                                                                                            </li>

                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right blue\"></i>
                                                                                                                    State, Country
                                                                                                            </li>

                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right blue\"></i>
                                                                                                                    Phone:
                                                                                                                    <b class=\"red\">111-111-111</b>
                                                                                                            </li>

                                                                                                            <li class=\"divider\"></li>

                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right blue\"></i>
                                                                                                                    Paymant Info
                                                                                                            </li>
                                                                                                    </ul>
                                                                                            </div>
                                                                                    </div><!--/span-->

                                                                                    <div class=\"span6\">
                                                                                            <div class=\"row-fluid\">
                                                                                                    <div class=\"span12 label label-large label-success arrowed-in arrowed-right\">
                                                                                                            <b>Customer Info</b>
                                                                                                    </div>
                                                                                            </div>

                                                                                            <div class=\"row-fluid\">
                                                                                                    <ul class=\"unstyled spaced\">
                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right green\"></i>
                                                                                                                    Street, City
                                                                                                            </li>

                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right green\"></i>
                                                                                                                    Zip Code
                                                                                                            </li>

                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right green\"></i>
                                                                                                                    State, Country
                                                                                                            </li>

                                                                                                            <li class=\"divider\"></li>

                                                                                                            <li>
                                                                                                                    <i class=\"icon-caret-right green\"></i>
                                                                                                                    Contact Info
                                                                                                            </li>
                                                                                                    </ul>
                                                                                            </div>
                                                                                    </div><!--/span-->
                                                                            </div><!--row-->

                                                                            <div class=\"space\"></div>

                                                                            <div class=\"row-fluid\">
                                                                                    <table class=\"table table-striped table-bordered\">
                                                                                            <thead>
                                                                                                    <tr>
                                                                                                            <th class=\"center\">#</th>
                                                                                                            <th>Product</th>
                                                                                                            <th class=\"hidden-phone\">Description</th>
                                                                                                            <th class=\"hidden-480\">Discount</th>
                                                                                                            <th>Total</th>
                                                                                                    </tr>
                                                                                            </thead>

                                                                                            <tbody>
                                                                                                    <tr>
                                                                                                            <td class=\"center\">1</td>

                                                                                                            <td>
                                                                                                                    <a href=\"#\">google.com</a>
                                                                                                            </td>
                                                                                                            <td class=\"hidden-phone\">
                                                                                                                    1 year domain registration
                                                                                                            </td>
                                                                                                            <td class=\"hidden-480\"> --- </td>
                                                                                                            <td>\$10</td>
                                                                                                    </tr>

                                                                                                    <tr>
                                                                                                            <td class=\"center\">2</td>

                                                                                                            <td>
                                                                                                                    <a href=\"#\">yahoo.com</a>
                                                                                                            </td>
                                                                                                            <td class=\"hidden-phone\">
                                                                                                                    5 year domain registration
                                                                                                            </td>
                                                                                                            <td class=\"hidden-480\"> 5% </td>
                                                                                                            <td>\$45</td>
                                                                                                    </tr>

                                                                                                    <tr>
                                                                                                            <td class=\"center\">3</td>
                                                                                                            <td>Hosting</td>
                                                                                                            <td class=\"hidden-phone\">
                                                                                                                    1 year basic hosting
                                                                                                            </td>
                                                                                                            <td class=\"hidden-480\"> 10% </td>
                                                                                                            <td>\$90</td>
                                                                                                    </tr>

                                                                                                    <tr>
                                                                                                            <td class=\"center\">4</td>
                                                                                                            <td>Design</td>
                                                                                                            <td class=\"hidden-phone\">
                                                                                                                    Theme customization
                                                                                                            </td>
                                                                                                            <td class=\"hidden-480\"> 50% </td>
                                                                                                            <td>\$250</td>
                                                                                                    </tr>
                                                                                            </tbody>
                                                                                    </table>
                                                                            </div>

                                                                            <div class=\"hr hr8 hr-double hr-dotted\"></div>

                                                                            <div class=\"row-fluid\">
                                                                                    <div class=\"span5 pull-right\">
                                                                                            <h4 class=\"pull-right\">
                                                                                                    Total amount :
                                                                                                    <span class=\"red\">\$395</span>
                                                                                            </h4>
                                                                                    </div>
                                                                                    <div class=\"span7 pull-left\"> Extra Information </div>
                                                                            </div>

                                                                            <div class=\"space-6\"></div>

                                                                            <div class=\"row-fluid\">
                                                                                    <div class=\"span12 well\">
                                                                                            Thank you for choosing Ace Company products.
                    We believe you will be satisfied by our services.
                                                                                    </div>
                                                                            </div>
                                                                    </div>
                                                            </div>
                                                    </div>
                                            </div>
                                    </div>
                            </div>

                            <!--PAGE CONTENT ENDS-->
                    </div><!--/.span-->
            </div><!--/.row-fluid-->
    </div><!--/.page-content-->
";
    }

    // line 246
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 248
    public function block_script($context, array $blocks = array())
    {
        // line 249
        echo "                            ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "                            
                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mnfactura\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:factura.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 249,  307 => 248,  302 => 246,  92 => 39,  89 => 38,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
