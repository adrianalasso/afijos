<?php

/* MainBundle:BienesCustodio:show.html.twig */
class __TwigTemplate_ded102c20c6b95581d7c8f715b93bdb76577d2d4530ac8399c036f3fa544a056 extends Twig_Template
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
        <h1>Bienes en Custodio<small><i class=\"icon-double-angle-right\"></i> Ver Activo</small></h1>
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
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Código</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "codigo", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Etiqueta</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 67
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "etiqueta", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Agencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "agencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Provincia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 79
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "canton", array()), "provincia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Cantón</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 85
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "canton", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Área Operativa</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 95
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "areaOperativa", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\" >Cuenta Contable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 101
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "cuentaContable", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\" style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Unidad de Propiedad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 107
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "unidadPropiedad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\" style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Plan o Programa</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "plan", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Dependencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dependencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 125
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "estado", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:100px\">
                                                    <div class=\"profile-info-name\">Observaciones</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 131
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "observaciones", array()), "html", null, true);
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
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Descripción</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "descripcion", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Responsable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trabajador", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Marca</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "marca", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Seccion</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 164
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "seccion", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Oficina</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 170
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "oficina", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Dirección</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "direccion", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Subsistema</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 186
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trabajador", array()), "departamento", array()), "subsistema", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Departamento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 192
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "trabajador", array()), "departamento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Componentes</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 198
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "componentes", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:30px\">
                                                    <div class=\"profile-info-name\">Serie</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 204
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "serie", array()), "html", null, true);
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
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Fecha de Adquisición</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 218
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechAdquisicion", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>                                        
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Fecha en Marcha</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 224
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaMarcha", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Tipo de Documento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 230
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "tipoDocumento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Nº de Documento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 236
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "numeroDocumento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Procedencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 242
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "procedencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Financiamiento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 248
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "financiamiento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Bien Asegurable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 254
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienAsegurable", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>       
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Calidad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 264
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "calidad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Factor de Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 270
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "factorEstado", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Valor de Adquisicion</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 276
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorAdquisicion", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Valor Residual</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 282
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorResidual", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\"  style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Valor Depreciable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 288
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "valorDepreciable", array()), "html", null, true);
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
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\" class=\"btn btn-small\">
                                        <i class=\"icon-undo bigger-150\"></i> Regresar
                                    </a>
                                    <a href=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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

    // line 319
    public function block_plugins($context, array $blocks = array())
    {
        // line 320
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 322
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 325
    public function block_script($context, array $blocks = array())
    {
        // line 326
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnbienes\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');                
});
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
        bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
        // line 338
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id", array()))), "html", null, true);
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
        return "MainBundle:BienesCustodio:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  521 => 338,  506 => 326,  503 => 325,  497 => 322,  493 => 321,  488 => 320,  485 => 319,  468 => 305,  462 => 302,  445 => 288,  436 => 282,  427 => 276,  418 => 270,  409 => 264,  396 => 254,  387 => 248,  378 => 242,  369 => 236,  360 => 230,  351 => 224,  342 => 218,  325 => 204,  316 => 198,  307 => 192,  298 => 186,  289 => 180,  276 => 170,  267 => 164,  258 => 158,  249 => 152,  240 => 146,  222 => 131,  213 => 125,  204 => 119,  195 => 113,  186 => 107,  177 => 101,  168 => 95,  155 => 85,  146 => 79,  137 => 73,  128 => 67,  119 => 61,  83 => 27,  80 => 26,  69 => 18,  61 => 13,  55 => 9,  52 => 8,  47 => 5,  41 => 3,  11 => 1,);
    }
}
