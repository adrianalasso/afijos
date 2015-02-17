<?php

/* MainBundle::edit.html.twig */
class __TwigTemplate_a06963dfa8c9851e9d7029f77d1534e10f0236743b336bb43413a779e779d3e6 extends Twig_Template
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
            'linkeliminar' => array($this, 'block_linkeliminar'),
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
        echo "Editar Subestación";
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
        echo "                            <small><i class=\"icon-double-angle-right\"></i> 
                            ";
        // line 39
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>

                <div class=\"widget-body\">
                        <div class=\"widget-main\">
                            <div class=\"form-horizontal\">
                                ";
        // line 46
        $this->displayBlock('formulario', $context, $blocks);
        // line 49
        echo "                                      <div class=\"well well-small\"> 
                                        <div class=\"center\">
                                            <button class=\"btn btn-small btn-success\" type=\"submit\">
                                                <i class=\"icon-save bigger-150\"></i>
                                                        Actualizar
                                            </button>
                                            ";
        // line 55
        $this->displayBlock('linkeliminar', $context, $blocks);
        // line 58
        echo "                                                   class=\"btn  btn-danger btn-small\" id=\"bteliminar\">
                                                    <i class=\"icon-trash bigger-150\"></i>
                                                    Dar de baja</a>
                                                    ";
        // line 61
        $this->displayBlock('link', $context, $blocks);
        // line 64
        echo "                                                class=\"btn btn-grey btn-small\">
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

    // line 39
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Nueva Subestación";
    }

    // line 46
    public function block_formulario($context, array $blocks = array())
    {
        // line 47
        echo "                                 <form action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'enctype');
        echo ">
                                    ";
    }

    // line 55
    public function block_linkeliminar($context, array $blocks = array())
    {
        // line 56
        echo "                                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
        echo "\" 
                                                ";
    }

    // line 61
    public function block_link($context, array $blocks = array())
    {
        // line 62
        echo "                                            <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion"), "html", null, true);
        echo "\"  
                                            ";
    }

    // line 80
    public function block_plugins($context, array $blocks = array())
    {
        // line 81
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 84
    public function block_script($context, array $blocks = array())
    {
        // line 85
        $this->displayParentBlock("script", $context, $blocks);
        echo "
";
        // line 86
        $this->displayBlock('scripthijo', $context, $blocks);
    }

    public function block_scripthijo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "MainBundle::edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 86,  224 => 85,  221 => 84,  214 => 81,  211 => 80,  204 => 62,  201 => 61,  194 => 56,  191 => 55,  182 => 47,  179 => 46,  173 => 39,  167 => 37,  148 => 64,  146 => 61,  141 => 58,  139 => 55,  131 => 49,  129 => 46,  119 => 39,  116 => 38,  114 => 37,  106 => 31,  103 => 30,  97 => 25,  91 => 20,  88 => 19,  80 => 25,  76 => 23,  74 => 19,  62 => 10,  56 => 6,  53 => 5,  48 => 3,  11 => 1,);
    }
}
