<?php

/* MainBundle:LSubtransmision:rformulario.html.twig */
class __TwigTemplate_85d6018b813cc70bd4f1e41c2c2e44cf4a9976466aead6b8db2dcd14cbf69d08 extends Twig_Template
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
        echo "Líneas de Subtransmisión";
    }

    // line 5
    public function block_pluginstyle($context, array $blocks = array())
    {
    }

    // line 7
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 8
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li>
            <i class=\"icon-exchange exchange-icon\"></i>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\">Líneas de Subtransmisión</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Reporte de Líneas</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 25
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">            
            <!--PAGE CONTENT BEGINS-->
            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 32
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 33
        echo "                            <small><i class=\"icon-double-angle-right\"></i> ";
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>
                <div class=\"widget-body\">
                    <div class=\"widget-main\">
                        <form action=\"#\" method=\"post\" ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class='form-horizontal' >
                            <div class=\"form-horizontal\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Línea de Subtransmisión</label>
                                        <div class=\"controls\">
                                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subtransmision", array()), 'widget');
        echo "
                                        </div>
                                    </div>
                                    <div class=\"well well-small\"> 
                                        <div class=\"center\">
                                            <a class=\"btn btn-small btn-pink \" id=\"btaceptar\">
                                                <i class=\"icon-search bigger-150\"></i>Aceptar
                                            </a>   
                                            <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision"), "html", null, true);
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

    // line 32
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Líneas de Subtransmisión";
    }

    // line 33
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Reporte de Líneas";
    }

    // line 69
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 71
    public function block_script($context, array $blocks = array())
    {
        // line 72
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnrplineas\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');                
});
\$(\"#btaceptar\").click(function(){
    var subtransmision = \$('#lsubtransmision_report_type_subtransmision').val();
    \$.post(\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision_reporte"), "html", null, true);
        echo "\", {subtransmision:  subtransmision},function(resultado){
        \$(\"#contenido\").html(resultado);
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:LSubtransmision:rformulario.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 82,  164 => 72,  161 => 71,  156 => 69,  150 => 33,  144 => 32,  123 => 51,  112 => 43,  104 => 38,  95 => 33,  93 => 32,  85 => 26,  82 => 25,  71 => 17,  63 => 12,  57 => 8,  54 => 7,  49 => 5,  43 => 3,  11 => 1,);
    }
}
