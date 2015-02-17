<?php

/* MainBundle::new.html.twig */
class __TwigTemplate_1d6c6752c032c09a8b041689fca95e505eb87c8bbe9422e88bccf1bea74870f6 extends Twig_Template
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
            'entidad' => array($this, 'block_entidad'),
            'mapatitulo' => array($this, 'block_mapatitulo'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'formulario' => array($this, 'block_formulario'),
            'link' => array($this, 'block_link'),
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
            <a href=\"#\">Configuración</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            ";
        // line 19
        $this->displayBlock('entidad', $context, $blocks);
        // line 23
        echo "            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>        
        <li class=\"active\">";
        // line 25
        $this->displayBlock('mapatitulo', $context, $blocks);
        echo "</li>             
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 19
    public function block_entidad($context, array $blocks = array())
    {
        // line 20
        echo "            <i class=\"icon-bolt bolt-icon\"></i>
            <a href=\"#\">Subestaciones</a>
            ";
    }

    // line 25
    public function block_mapatitulo($context, array $blocks = array())
    {
        echo "Nueva Subestación";
    }

    // line 30
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 31
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">            
            <!--PAGE CONTENT BEGINS-->
            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 37
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 38
        echo "                            <small><i class=\"icon-double-angle-right\"></i> ";
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>

                <div class=\"widget-body\">
                        <div class=\"widget-main\">
                                <div class=\"form-horizontal\">
                                    ";
        // line 45
        $this->displayBlock('formulario', $context, $blocks);
        // line 48
        echo "                                        <div class=\"well well-small\"> 
                                            <div class=\"center\">
                                                <button class=\"btn btn-small btn-success \" type=\"submit\">
                                                    <i class=\"icon-save bigger-150\"></i>
                                                    Crear
                                                </button>                                                    
                                             ";
        // line 54
        $this->displayBlock('link', $context, $blocks);
        // line 57
        echo "                                                   class=\"btn btn-small btn-grey\">
                                                    <i class=\"icon-undo bigger-150\"></i>
                                                    Regresar
                                                </a>     
                                            </div>
                                        </div>
                                    </form>
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

    // line 37
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Subestaciones";
    }

    // line 38
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nueva Subestación";
    }

    // line 45
    public function block_formulario($context, array $blocks = array())
    {
        // line 46
        echo "                                    <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
                                        ";
    }

    // line 54
    public function block_link($context, array $blocks = array())
    {
        // line 55
        echo "                                                <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion"), "html", null, true);
        echo "\"  
                                                ";
    }

    // line 74
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 76
    public function block_script($context, array $blocks = array())
    {
        // line 77
        $this->displayParentBlock("script", $context, $blocks);
        echo "
";
        // line 78
        $this->displayBlock('scripthijo', $context, $blocks);
    }

    public function block_scripthijo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MainBundle::new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 78,  199 => 77,  196 => 76,  191 => 74,  184 => 55,  181 => 54,  172 => 46,  169 => 45,  163 => 38,  157 => 37,  138 => 57,  136 => 54,  128 => 48,  126 => 45,  115 => 38,  113 => 37,  105 => 31,  102 => 30,  96 => 25,  90 => 20,  87 => 19,  79 => 25,  75 => 23,  73 => 19,  61 => 10,  55 => 6,  52 => 5,  47 => 3,  11 => 1,);
    }
}
