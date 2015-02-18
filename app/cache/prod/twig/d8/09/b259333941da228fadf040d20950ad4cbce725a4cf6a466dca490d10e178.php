<?php

/* TwigBundle:Exception:error.html.twig */
class __TwigTemplate_d809b259333941da228fadf040d20950ad4cbce725a4cf6a466dca490d10e178 extends Twig_Template
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

    // line 2
    public function block_titulo($context, array $blocks = array())
    {
        echo "Acceso Denegado";
    }

    // line 4
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 5
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>        
        <li class=\"active\">";
        // line 12
        $this->displayBlock('mapatitulo', $context, $blocks);
        echo "</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    public function block_mapatitulo($context, array $blocks = array())
    {
    }

    // line 17
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 18
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">        
        <h1>Acceso denegado al contenido solicitado.";
        // line 20
        echo " ";
        echo "</h1>        
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <!--PAGE CONTENT BEGINS-->
            <div>
                Usted no cuenta con los permisos necesarios para acceder al contenido solicitado.
                Contacte con un Administrador, disculpe los inconvenientes causados.
            </div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 35
    public function block_plugins($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 37
    public function block_script($context, array $blocks = array())
    {
        // line 38
        $this->displayParentBlock("script", $context, $blocks);
        echo "    
    <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
    
    ";
        // line 42
        $this->displayBlock('scripthijo', $context, $blocks);
        // line 43
        echo "    
";
    }

    // line 42
    public function block_scripthijo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 42,  126 => 43,  124 => 42,  119 => 40,  115 => 39,  111 => 38,  108 => 37,  100 => 35,  82 => 20,  78 => 18,  75 => 17,  63 => 12,  57 => 9,  51 => 5,  48 => 4,  42 => 2,  11 => 1,);
    }
}
