<?php

/* MainBundle:Reportes:rform7.html.twig */
class __TwigTemplate_ffd3435cf8d89cf42004522ef561c7215cc0e371b53c0b1065f5a0384e22c2c0 extends Twig_Template
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
        echo "Reporte de Activos";
    }

    // line 5
    public function block_pluginstyle($context, array $blocks = array())
    {
        // line 6
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/chosen.css"), "html", null, true);
        echo "\" />
";
    }

    // line 9
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 10
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Reporte de Activos por departamento</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 22
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 23
        echo "<div class=\"page-content\">
    <div class=\"row-fluid\">
        <div class=\"span6\">            
            <!--PAGE CONTENT BEGINS-->
            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 29
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 30
        echo "                            <small><i class=\"icon-double-angle-right\"></i> ";
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>
                <div class=\"widget-body\">
                    <div class=\"widget-main\">
                        <form action=\"#\" method=\"post\" ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : null), 'enctype');
        echo " class='form-horizontal'>
                            <div class=\"form-horizontal\">
                                    <div class=\"control-group\">
                                        <label class=\"control-label\" for=\"\">Departamento</label>
                                        <div class=\"controls\">
                                            ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : null), "departamento", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                        </div>
                                    </div>
                                    <div class=\"well well-small\"> 
                                        <div class=\"center\">
                                            <a class=\"btn btn-small btn-pink \" id=\"btaceptar\" target=\"_blank\">
                                                <i class=\"icon-search bigger-150\"></i>Aceptar
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>          
            
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
    <div id=\"contenido\">                
    </div>
</div><!--/.page-content-->
";
    }

    // line 29
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Reporte de Activos";
    }

    // line 30
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Reporte de Activos por departamento";
    }

    // line 64
    public function block_plugins($context, array $blocks = array())
    {
        // line 65
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 69
    public function block_script($context, array $blocks = array())
    {
        // line 70
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnrp7\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');      
    \$(\".chzn-select\").chosen(); 
});
\$(\"#btaceptar\").click(function(){    
    var dpto = \$('#trabajador_type_departamento').val();
    if(dpto!=\"\"){
        window.open(\"/afijos/web/app.php/empadmin/reportes/\"+dpto+\"/reporte7\",'_blank');
        //window.location.href = \"";
        // line 83
        echo "\";
    }
    else{
            bootbox.dialog(\"Debe ingresar un rango de fechas\", [{
                    \"label\" : \"Aceptar\",
                    \"class\" : \"btn-small btn-success\",
                    \"callback\": function() {}
                }]
            );
        }
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Reportes:rform7.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 83,  165 => 70,  162 => 69,  156 => 66,  151 => 65,  148 => 64,  142 => 30,  136 => 29,  109 => 40,  101 => 35,  92 => 30,  90 => 29,  82 => 23,  79 => 22,  68 => 14,  62 => 10,  59 => 9,  52 => 6,  49 => 5,  43 => 3,  11 => 1,);
    }
}
