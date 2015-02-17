<?php

/* MainBundle:Reportes:rform2.html.twig */
class __TwigTemplate_6cc46ff93b00101996c84989fc628852fb8bd9f25539ada82b0239cd487c7ad0 extends Twig_Template
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
<link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/datepicker.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap-timepicker.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/daterangepicker.css"), "html", null, true);
        echo "\" />
";
    }

    // line 12
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 13
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Reporte de Activos</li>
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
                        <form action=\"";
        // line 38
        echo "\" method=\"post\" ";
        echo " class='form-horizontal'>
                        <div class=\"form-horizontal\">
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"\">Desde</label>
                                    <div class=\"controls\">
                                        <input class=\"span10\" type=\"date\" name=\"date-range-picker\" id=\"fechdesde\" data-date-format=\"dd-mm-yyyy\"/>
                                    </div>
                                </div>
                                <div class=\"control-group\">
                                    <label class=\"control-label\" for=\"\">Hasta</label>
                                    <div class=\"controls\">
                                        <input class=\"span10\" type=\"date\" name=\"date-range-picker\" id=\"fechasta\" data-date-format=\"dd-mm-yyyy\"/>
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

    // line 32
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Reporte de Activos";
    }

    // line 33
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Reporte de Altas";
    }

    // line 73
    public function block_plugins($context, array $blocks = array())
    {
        // line 74
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 75
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/daterangepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 77
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/daterangepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 83
    public function block_script($context, array $blocks = array())
    {
        // line 84
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnrp2\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');      
    
        function aesmayorm(){
            if(\$(\"#fechdesde\").val()>\$(\"#fechasta\").val()){
                bootbox.dialog(\"La fecha de fin debe ser mayor que la fecha de inicio\", [{
                        \"label\" : \"Aceptar\",
                        \"class\" : \"btn-small btn-success\",
                        \"callback\": function() {}
                    }]
                );
                \$(\"#fechasta\").val(\"\");
            }
        }
        function mensajem(){
            bootbox.dialog(\"Debe ingresar fecha de inicio\", [{
                    \"label\" : \"Aceptar\",
                    \"class\" : \"btn-small btn-success\",
                    \"callback\": function() {}
                }]
            );
            \$(\"#fechasta\").val(\"\");
        }

        \$(\"#fechasta\").change(function(){
            var fechAdq=\$(\"#fechdesde\").val();
            if(fechAdq==\"\"){
                mensajem();
            }
            aesmayorm();
        });     


        \$(\"#fechdesde\").change(function(){
            if(!(\$(\"#fechasta\").val(\"\"))){
                aesmayorm();
            }
        });
        
    \$(\".chzn-select\").chosen(); 
    /*
    \$('#fechdesde').daterangepicker().prev().on(ace.click_event, function(){
            \$(this).next().focus();
    });
    \$('#fechasta').daterangepicker().prev().on(ace.click_event, function(){
            \$(this).next().focus();
    });
    */
    \$('.date-picker').datepicker().next().on(ace.click_event, function(){
                    \$(this).prev().focus();
            });
});
\$(\"#btaceptar\").click(function(){    
    var desde = \$('#fechdesde').val();
    var hasta = \$('#fechasta').val();
    if(desde!=\"\"&&hasta!=\"\"){
        window.open(\"/afijos/web/app.php/empadmin/reportes/\"+desde+\"/\"+hasta+\"/reporte2\",'_blank');
        //window.location.href = \"";
        // line 146
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
        return "MainBundle:Reportes:rform2.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  265 => 146,  200 => 84,  197 => 83,  191 => 80,  187 => 79,  183 => 78,  179 => 77,  175 => 76,  171 => 75,  166 => 74,  163 => 73,  157 => 33,  151 => 32,  113 => 38,  104 => 33,  102 => 32,  94 => 26,  91 => 25,  80 => 17,  74 => 13,  71 => 12,  65 => 9,  61 => 8,  57 => 7,  52 => 6,  49 => 5,  43 => 3,  11 => 1,);
    }
}
