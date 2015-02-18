<?php

/* MainBundle:Reportes:rform11.html.twig */
class __TwigTemplate_edb2394de4bf445b85463e3c65ddd670c5430474e00353d5e6dc6bccc897f929 extends Twig_Template
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
                                    <label class=\"control-label\" for=\"\">Fecha</label>
                                    <div class=\"controls\">
                                        <input class=\"span10\" type=\"date\" name=\"date-range-picker\" id=\"fecha\" data-date-format=\"dd-mm-yyyy\"/>
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
        echo "Reporte de Bienes";
    }

    // line 67
    public function block_plugins($context, array $blocks = array())
    {
        // line 68
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/daterangepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/bootstrap-datepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/moment.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/date-time/daterangepicker.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 77
    public function block_script($context, array $blocks = array())
    {
        // line 78
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnrp11\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');      
});
\$(\"#btaceptar\").click(function(){    
    var fecha = \$('#fecha').val();
    if(fecha!=\"\"){
        var url=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_reporte11", array("fechastr" => "fechastr")), "html", null, true);
        echo "\";
        url = url.replace('fechastr', fecha);
        window.open(url,'_blank');
    }
    else{
            bootbox.dialog(\"Debe ingresar una fecha\", [{
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
        return "MainBundle:Reportes:rform11.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 89,  194 => 78,  191 => 77,  185 => 74,  181 => 73,  177 => 72,  173 => 71,  169 => 70,  165 => 69,  160 => 68,  157 => 67,  151 => 33,  145 => 32,  113 => 38,  104 => 33,  102 => 32,  94 => 26,  91 => 25,  80 => 17,  74 => 13,  71 => 12,  65 => 9,  61 => 8,  57 => 7,  52 => 6,  49 => 5,  43 => 3,  11 => 1,);
    }
}
