<?php

/* MainBundle:LSubestacion:show.html.twig */
class __TwigTemplate_7ab98c9417cd9c8cee45bc6b3df89aa1bfd50c3eb5cbb5b2079d71d3714b9f09 extends Twig_Template
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
        echo "Subestaciones";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubestacion"), "html", null, true);
        echo "\">Subestaciones</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Ver Subestación</li>
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
        <h1>Subestaciones<small><i class=\"icon-double-angle-right\"></i> Ver Subestación</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span10\">
            <!--PAGE CONTENT BEGINS-->         
                    <div class=\"tabbable\">
                            <ul class=\"nav nav-tabs\" id=\"myTab\">
                                    <li class=\"active\">
                                            <a data-toggle=\"tab\" href=\"#general\">
                                                    Información General
                                            </a>
                                    </li>
                                    <li>
                                            <a data-toggle=\"tab\" href=\"#especifica\">
                                                    Información Específica
                                            </a>
                                    </li>
                                    <li>
                                            <a data-toggle=\"tab\" href=\"#valores\">
                                                    <i class=\"green icon-usd bigger-110\"></i>
                                                    Valoración
                                            </a>
                                    </li>
                            </ul>
                            <div class=\"tab-content\">
                                    <div id=\"general\" class=\"tab-pane in active\">
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Código</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "codigo", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Etiqueta</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etiqueta", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Responsable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "trabajador", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Subestación</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subestacion", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Agencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Provincia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "canton", array()), "provincia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Cantón</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 97
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "canton", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Área Operativa</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "areaOperativa", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Cuenta Contable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cuentaContable", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\" style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Unidad de Propiedad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "unidadPropiedad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\" style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Plan o Programa</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plan", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Subsistema</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departamento", array()), "subsistema", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Departamento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 137
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departamento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Dependencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 143
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dependencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 149
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Observaciones</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observaciones", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id=\"especifica\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                            <div class=\"profile-info-name\">Descripción</div>
                                            <div class=\"profile-info-value\"><span >
                                                    ";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcion", array()), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"profile-info-row\">
                                            <div class=\"profile-info-name\">Tipo</div>
                                            <div class=\"profile-info-value\"><span >
                                                    ";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo", array()), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"profile-info-row\">
                                            <div class=\"profile-info-name\">Año</div>
                                            <div class=\"profile-info-value\"><span >
                                                    ";
        // line 182
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "anio", array()), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"profile-info-row\">
                                            <div class=\"profile-info-name\">Marca</div>
                                            <div class=\"profile-info-value\"><span >
                                                    ";
        // line 188
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "marca", array()), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"profile-info-row\">
                                            <div class=\"profile-info-name\">Modelo</div>
                                            <div class=\"profile-info-value\"><span >
                                                    ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "modelo", array()), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                        <div class=\"profile-info-row\">
                                            <div class=\"profile-info-name\">Serie</div>
                                            <div class=\"profile-info-value\"><span >
                                                    ";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "serie", array()), "html", null, true);
        echo "</span>
                                            </div>
                                        </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Color</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 210
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "color", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Material</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 216
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "material", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Productividad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 222
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "productividad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Capacidad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 228
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "capacidad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Unidades</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 234
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "unidades", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Cantidad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 240
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cantidad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id=\"valores\" class=\"tab-pane\">
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Fecha de Adquisición</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 254
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechAdquisicion", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>                                        
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Fecha en Marcha</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 260
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaMarcha", array()), "Y-m-d H:i:s"), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo de Documento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 266
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoDocumento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Nº de Documento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 272
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numeroDocumento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Procedencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 278
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "procedencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Financiamiento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 284
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "financiamiento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Bien Asegurable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 290
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "bienAsegurable", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>       
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Calidad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 300
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calidad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Factor de Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 306
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "factorEstado", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Valor de Adquisicion</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 312
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valorAdquisicion", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Valor Residual</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 318
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valorResidual", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Valor Depreciable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 324
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valorDepreciable", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                <div class='space-10'></div> 
                <div class=\"row-fluid\">
                    <div class=\"span2\"></div>
                    <div class=\"span6\">
                        <div class=\"well well-small\"> 
                            <div class=\"center\">                            
                                    <a href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubestacion"), "html", null, true);
        echo "\" class=\"btn btn-small\">
                                        <i class=\"icon-undo bigger-150\"></i> Regresar
                                    </a>
                                    <a href=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubestacion_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-small btn-primary\">
                                        <i class=\"icon-edit bigger-150\"></i> Editar
                                    </a>                        
                            </div>
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

    // line 355
    public function block_plugins($context, array $blocks = array())
    {
        // line 356
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 357
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 361
    public function block_script($context, array $blocks = array())
    {
        // line 362
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnlsubestaciones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');                
});
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
        bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
        // line 374
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubestacion_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\";
                }
        });
    });
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:LSubestacion:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  575 => 374,  560 => 362,  557 => 361,  551 => 358,  547 => 357,  542 => 356,  539 => 355,  522 => 341,  516 => 338,  499 => 324,  490 => 318,  481 => 312,  472 => 306,  463 => 300,  450 => 290,  441 => 284,  432 => 278,  423 => 272,  414 => 266,  405 => 260,  396 => 254,  379 => 240,  370 => 234,  361 => 228,  352 => 222,  343 => 216,  334 => 210,  321 => 200,  312 => 194,  303 => 188,  294 => 182,  285 => 176,  276 => 170,  258 => 155,  249 => 149,  240 => 143,  231 => 137,  222 => 131,  213 => 125,  204 => 119,  195 => 113,  186 => 107,  173 => 97,  164 => 91,  155 => 85,  146 => 79,  137 => 73,  128 => 67,  119 => 61,  83 => 27,  80 => 26,  69 => 18,  61 => 13,  55 => 9,  52 => 8,  47 => 5,  41 => 3,  11 => 1,);
    }
}
