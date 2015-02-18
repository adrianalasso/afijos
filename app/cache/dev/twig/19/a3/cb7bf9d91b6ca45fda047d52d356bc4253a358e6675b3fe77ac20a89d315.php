<?php

/* TestBundle:Default:error5.html.twig */
class __TwigTemplate_19a3cb7bf9d91b6ca45fda047d52d356bc4253a358e6675b3fe77ac20a89d315 extends Twig_Template
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
        echo "Página de error 500";
    }

    // line 3
    public function block_pluginstyle($context, array $blocks = array())
    {
    }

    // line 5
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
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
                    <li class=\"active\">Error 404</li>
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
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
            <div class=\"span12\">
                    <!--PAGE CONTENT BEGINS-->

                    <div class=\"error-container\">
                            <div class=\"well\">
                                    <h1 class=\"grey lighter smaller\">
                                            <span class=\"blue bigger-125\">
                                                    <i class=\"icon-random\"></i>
                                                    500
                                            </span>
                                            Something Went Wrong
                                    </h1>

                                    <hr />
                                    <h3 class=\"lighter smaller\">
                                            But we are working
                                            <i class=\"icon-wrench icon-animated-wrench bigger-125\"></i>
                                            on it!
                                    </h3>

                                    <div class=\"space\"></div>

                                    <div>
                                            <h4 class=\"lighter smaller\">Meanwhile, try one of the following:</h4>

                                            <ul class=\"unstyled spaced inline bigger-110\">
                                                    <li>
                                                            <i class=\"icon-hand-right blue\"></i>
                                                            Read the faq
                                                    </li>

                                                    <li>
                                                            <i class=\"icon-hand-right blue\"></i>
                                                            Give us more info on how this specific error occurred!
                                                    </li>
                                            </ul>
                                    </div>

                                    <hr />
                                    <div class=\"space\"></div>

                                    <div class=\"row-fluid\">
                                            <div class=\"center\">
                                                    <a href=\"#\" class=\"btn btn-grey\">
                                                            <i class=\"icon-arrow-left\"></i>
                                                            Go Back
                                                    </a>

                                                    <a href=\"#\" class=\"btn btn-primary\">
                                                            <i class=\"icon-dashboard\"></i>
                                                            Dashboard
                                                    </a>
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

    // line 103
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 105
    public function block_script($context, array $blocks = array())
    {
        // line 106
        echo "
                            ";
        // line 107
        $this->displayParentBlock("script", $context, $blocks);
        echo "                            
                            <script type=\"text/javascript\">
                                window.onload = function() {
                                    var elemento=document.getElementById(\"mnerror5\");
                                    elemento.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('active');
                                    elemento.parentNode.parentNode.classList.add('open');
                                }
                            </script>
";
    }

    public function getTemplateName()
    {
        return "TestBundle:Default:error5.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 107,  167 => 106,  164 => 105,  159 => 103,  92 => 39,  89 => 38,  55 => 6,  52 => 5,  47 => 3,  41 => 2,  11 => 1,);
    }
}
