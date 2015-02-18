<?php

/* TestBundle:Default:blanco.html.twig */
class __TwigTemplate_906a58b1a77b20ffa55cf5f53112516b53bcc025430452a436a4075106183c0d extends Twig_Template
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
        echo "Página en blanco";
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
                                                    <a href=\"#\">Other Pages</a>

                                                    <span class=\"divider\">
                                                            <i class=\"icon-angle-right arrow-icon\"></i>
                                                    </span>
                                            </li>
                                            <li class=\"active\">Blank Page</li>
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
                                    <div class=\"row-fluid\">
                                            <div class=\"span12\">
                                                    <!--PAGE CONTENT BEGINS-->

                                                    <!--PAGE CONTENT ENDS-->
                                            </div><!--/.span-->
                                    </div><!--/.row-fluid-->
                            </div><!--/.page-content-->
";
    }

    // line 49
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 51
    public function block_script($context, array $blocks = array())
    {
        // line 52
        echo "                            ";
        $this->displayParentBlock("script", $context, $blocks);
        echo "                            
                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mnblanco\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:blanco.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 52,  110 => 51,  105 => 49,  92 => 39,  89 => 38,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
