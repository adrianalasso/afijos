<?php

/* MainBundle::index.html.twig */
class __TwigTemplate_38becf11365b1f55c56496c11dc6df23197f74168f63e385182342458dd74ce3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'link' => array($this, 'block_link'),
            'tabla' => array($this, 'block_tabla'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
            'scripthijo' => array($this, 'block_scripthijo'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
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
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            <i class=\"icon-cogs cogs-icon\"></i>
            <a href=\"#\">Sistema</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        
        <li class=\"active\">";
        // line 19
        $this->displayBlock('mapatitulo', $context, $blocks);
        echo "</li>
        
        
    </ul><!--.breadcrumb-->
</div>
";
    }

    public function block_mapatitulo($context, array $blocks = array())
    {
    }

    // line 26
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">
        
        <h1>";
        // line 30
        $this->displayBlock('pagetitulo', $context, $blocks);
        echo "<small><i class=\"icon-double-angle-right\"></i> Listado general</small></h1>
        
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <!--PAGE CONTENT BEGINS-->
            <a class=\"btn btn-small btn-yellow\" ";
        // line 36
        $this->displayBlock('link', $context, $blocks);
        echo " ><i class=\"icon-plus\"></i>
                Crear una nueva entrada
            </a>
            <div class=\"space-6\"></div>
            <div class=\"row-fluid\">
                <div class=\"span8\">
                    ";
        // line 42
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            // line 43
            echo "                    ";
            $this->displayBlock('tabla', $context, $blocks);
            // line 45
            echo "                    ";
        } else {
            // line 46
            echo "                    <div class=\"alert alert-error\"> 
                        <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                        No se han encontrado registros.
                        <br>
                    </div>
                    ";
        }
        // line 52
        echo "                </div>
            </div>
            <div class=\"space-6\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 30
    public function block_pagetitulo($context, array $blocks = array())
    {
    }

    // line 36
    public function block_link($context, array $blocks = array())
    {
    }

    // line 43
    public function block_tabla($context, array $blocks = array())
    {
        // line 44
        echo "                    ";
    }

    // line 61
    public function block_plugins($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 63
    public function block_script($context, array $blocks = array())
    {
        // line 64
        $this->displayParentBlock("script", $context, $blocks);
        echo "    
    <script src=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 68
        $this->displayBlock('scripthijo', $context, $blocks);
        // line 69
        echo "    
";
    }

    // line 68
    public function block_scripthijo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MainBundle::index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 68,  181 => 69,  179 => 68,  174 => 66,  170 => 65,  166 => 64,  163 => 63,  155 => 61,  151 => 44,  148 => 43,  143 => 36,  138 => 30,  127 => 52,  119 => 46,  116 => 45,  113 => 43,  111 => 42,  102 => 36,  93 => 30,  88 => 27,  85 => 26,  71 => 19,  59 => 10,  53 => 6,  50 => 5,  45 => 3,  11 => 1,);
    }
}
