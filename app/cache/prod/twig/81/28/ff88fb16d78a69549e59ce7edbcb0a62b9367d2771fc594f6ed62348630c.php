<?php

/* MainBundle:Reportes:reportes.html.twig */
class __TwigTemplate_8128ff88fb16d78a69549e59ce7edbcb0a62b9367d2771fc594f6ed62348630c extends Twig_Template
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

    // line 5
    public function block_pluginstyle($context, array $blocks = array())
    {
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
            <i class=\"icon-exchange exchange-icon\"></i>
            <a href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\">Bienes en Custodio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Listado de Reportes</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 26
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 27
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">
        <h1>Bienes en Custodio<small><i class=\"icon-double-angle-right\"></i> Listado de Reportes</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span10\">
            <!--PAGE CONTENT BEGINS-->        
            <div class=\"widget-box\">
                <div class=\"widget-header\">
                        <h4>";
        // line 36
        $this->displayBlock('pagetitulo', $context, $blocks);
        // line 37
        echo "                            <small><i class=\"icon-double-angle-right\"></i> 
                            ";
        // line 38
        $this->displayBlock('pagedetalle', $context, $blocks);
        echo "</small>
                        </h4>        
                </div>
                <div class=\"widget-body\">
                        <div class=\"widget-main\">
                            <div class=\"profile-user-info profile-user-info-striped\">
                            <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 1 </div>
                                        <div class=\"profile-info-value\">
                                                <span > 
                                                    Activos por Responsable
                                                </span>
                                        </div>
                                </div>
                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 2 </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                                Activos por Departamento
                                            </span>
                                        </div>
                                </div>
                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 3 </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                                Alta de Activos por rango de fecha
                                            </span>
                                        </div>
                                </div>
                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 3 </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                                Baja de Activos por rango de fecha
                                            </span>
                                        </div>
                                </div>
                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 3 </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                                Activos en mal estado por departamento
                                            </span>
                                        </div>
                                </div>
                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 4 </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                                Activos en mal estado por línea de subtransmisión
                                            </span>
                                        </div>
                                </div>
                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 4 </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                                Activos en mal estado por subestación
                                            </span>
                                        </div>
                                </div>
                                <div class=\"profile-info-row\">
                                        <div class=\"profile-info-name\"> 4 </div>
                                        <div class=\"profile-info-value\">
                                            <span>
                                                Ubicación del Activo
                                            </span>
                                        </div>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                </div>           
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 36
    public function block_pagetitulo($context, array $blocks = array())
    {
        echo "Bienes en Custodio";
    }

    // line 38
    public function block_pagedetalle($context, array $blocks = array())
    {
        echo "Listado de Reportes";
    }

    // line 119
    public function block_plugins($context, array $blocks = array())
    {
        // line 120
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 125
    public function block_script($context, array $blocks = array())
    {
        // line 126
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnrpbienes\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');                
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Reportes:reportes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 126,  215 => 125,  209 => 122,  205 => 121,  200 => 120,  197 => 119,  191 => 38,  185 => 36,  101 => 38,  98 => 37,  96 => 36,  85 => 27,  82 => 26,  71 => 18,  63 => 13,  57 => 9,  54 => 8,  49 => 5,  43 => 3,  11 => 1,);
    }
}
