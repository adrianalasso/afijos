<?php

/* MainBundle:BienesCustodio:rformulario.html.twig */
class __TwigTemplate_f762f5d6863b10e608efc6328003f3e389950640c38530eb1a640b565a5458c8 extends Twig_Template
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
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'pagetitulo' => array($this, 'block_pagetitulo'),
            'pagedetalle' => array($this, 'block_pagedetalle'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
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
        echo "Bienes en Custodio";
    }

    // line 4
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 5
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/chosen.css"), "html", null, true);
        echo "\" />
";
    }

    // line 8
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 9
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            <i class=\"icon-group group-icon\"></i>
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\">Bienes en Custodio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Reporte de Bienes de Control</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 26
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">            
            <!--PAGE CONTENT BEGINS-->
            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 33
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 34
        echo "                            <small><i class=\"icon-double-angle-right\"></i> ";
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>
                <div class=\"widget-body\">
                    <div class=\"widget-main\">
                        <form action=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class='form-horizontal'>
                        <div class=\"form-horizontal\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"\">Cedula del Empleado</label>
                                    <div class=\"controls\">
                                            ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trabajador", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                    </div>
                                </div>
                                <div class=\"well well-small\"> 
                                    <div class=\"center\">
                                        <a class=\"btn btn-small btn-pink \" id=\"btaceptar\">
                                            <i class=\"icon-search bigger-150\"></i>Aceptar
                                        </a>   
                                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\"  class=\"btn btn-small btn-grey\">
                                            <i class=\"icon-undo bigger-150\"></i>Regresar
                                        </a>     
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>          
            <div id=\"contenido\">
                
            </div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 33
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Bienes en Custodio";
    }

    // line 34
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Reporte de Bienes";
    }

    // line 71
    public function block_plugins($context, array $blocks = array())
    {
        // line 72
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 75
    public function block_script($context, array $blocks = array())
    {
        // line 76
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnrpbienes\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');             
    \$(\".chzn-select\").chosen(); 
});
\$(\"#btaceptar\").click(function(){
    var cedula = \$('#afijos_mainbundle_bienescustodioreportype_trabajador').val();
    \$.post(\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_reporte"), "html", null, true);
        echo "\", {cedula:  cedula},function(resultado){
        \$(\"#contenido\").html(resultado);
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:BienesCustodio:rformulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  191 => 87,  177 => 76,  174 => 75,  167 => 72,  164 => 71,  158 => 34,  152 => 33,  130 => 52,  119 => 44,  109 => 39,  100 => 34,  98 => 33,  90 => 27,  87 => 26,  76 => 18,  68 => 13,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  43 => 3,  11 => 1,);
    }
}
