<?php

/* MainBundle:LSubtransmision:show.html.twig */
class __TwigTemplate_934d4cf3c38a741fb064f8d27b4451be6571b743196b58cab616a32dfc036cac extends Twig_Template
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
        echo "Líneas de Subtransmisión";
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision"), "html", null, true);
        echo "\">Líneas de Subtransmisión</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Ver Línea de Subtransmisión</li>
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
        <h1>Líneas de Subtransmisión<small><i class=\"icon-double-angle-right\"></i> Ver Línea de Subtransmisión</small></h1>
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
                                            <a data-toggle=\"tab\" href=\"#estructura\">
                                                    Estructura
                                            </a>
                                    </li>
                                    <li>
                                            <a data-toggle=\"tab\" href=\"#ptierra\">
                                                    Puesta Tierra
                                            </a>
                                    </li>
                                    <li>
                                            <a data-toggle=\"tab\" href=\"#tensor\">
                                                    Tensor
                                            </a>
                                    </li>
                                    <li>
                                            <a data-toggle=\"tab\" href=\"#cfase\">
                                                    Conductor Fase
                                            </a>
                                    </li>
                                    <li>
                                            <a data-toggle=\"tab\" href=\"#cguardia\">
                                                    Cable Guardia
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
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "codigo", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Etiqueta</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 92
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etiqueta", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Responsable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "trabajador", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Línea de Subtransmisión</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 104
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "subtransmision", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Agencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 110
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "agencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Provincia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 116
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "canton", array()), "provincia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Cantón</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 122
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
        // line 132
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "areaOperativa", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Cuenta Contable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 138
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cuentaContable", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\" style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Unidad de Propiedad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "unidadPropiedad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\" style=\"height:50px\">
                                                    <div class=\"profile-info-name\">Plan o Programa</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 150
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "plan", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Subsistema</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 156
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departamento", array()), "subsistema", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Departamento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 162
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "departamento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Dependencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 168
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "dependencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 174
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estado", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Observaciones</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 180
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
                                            <div class=\"span6\"><div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Coordenada este</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 194
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "coordeEste", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Coordenada Norte</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 200
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "coordeNorte", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Etapa funcional</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 206
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "etapaFuncional", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Altura</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "altura", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Año de fabricación</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 218
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "anioFabricacion", array()), "Y"), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Voltaje</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 224
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "voltaje", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\"><div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Postería</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 233
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "posteria", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Material</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 239
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "material", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 245
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipo", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"estructura\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\"><div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Nombre</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 259
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "nombrEstructura", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 265
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoEstructura", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 271
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estadoEstructura", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Observación</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 277
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observEstructura", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"ptierra\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\"><div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Descripción</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 291
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "descripcionPTierra", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 297
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoPTierra", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Calibre</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 303
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calibrePTierra", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 309
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estadoPTierra", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Observación</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 315
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observPTierra", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"tensor\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\"><div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Cantidad</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 329
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "cantidadTensor", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 335
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoTensor", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Calibre</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 341
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calibreTensor", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 347
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estadoTensor", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Observación</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 353
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observTensor", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"cfase\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\"><div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Longitud</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 367
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "longitudCFase", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 373
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoCFase", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Material</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 379
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "materialCFase", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Calibre</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 385
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calibreCFase", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 391
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estadoCFase", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Observación</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 397
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observCFase", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"cguardia\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\"><div class=\"profile-user-info profile-user-info-striped\">
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Longitud</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 411
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "longitudCGuardia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 417
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoCGuardia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Material</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 423
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "materialCGuardia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Calibre</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 429
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calibreCGuardia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 435
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "estadoCGuardia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Observación</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 441
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "observCGuardia", array()), "html", null, true);
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
        // line 455
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechAdquisicion", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>                                        
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Fecha en Marcha</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 461
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "fechaMarcha", array()), "Y-m-d"), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Tipo de Documento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 467
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "tipoDocumento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Nº de Documento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 473
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "numeroDocumento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Procedencia</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 479
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "procedencia", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Financiamiento</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 485
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "financiamiento", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Bien Asegurable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 491
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
        // line 501
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "calidad", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Factor de Estado</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 507
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "factorEstado", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Valor de Adquisicion</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 513
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valorAdquisicion", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Valor Residual</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 519
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valorResidual", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                <div class=\"profile-info-row\">
                                                    <div class=\"profile-info-name\">Valor Depreciable</div>
                                                    <div class=\"profile-info-value\"><span >
                                                            ";
        // line 525
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "valorDepreciable", array()), "html", null, true);
        echo "</span>
                                                    </div>
                                                </div>
                                                    ";
        // line 542
        echo "                                                </div>
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
        // line 553
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision"), "html", null, true);
        echo "\" class=\"btn btn-small\">
                                        <i class=\"icon-undo bigger-150\"></i> Regresar
                                    </a>
                                    <a href=\"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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

    // line 570
    public function block_plugins($context, array $blocks = array())
    {
        // line 571
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 572
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 573
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 576
    public function block_script($context, array $blocks = array())
    {
        // line 577
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnlsubtransmisiones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');                
});
\$(function() {
    \$(\"#bteliminar\").on(ace.click_event, function() {
        bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
        // line 589
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision_eliminar", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
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
        return "MainBundle:LSubtransmision:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 589,  832 => 577,  829 => 576,  823 => 573,  819 => 572,  814 => 571,  811 => 570,  794 => 556,  788 => 553,  775 => 542,  769 => 525,  760 => 519,  751 => 513,  742 => 507,  733 => 501,  720 => 491,  711 => 485,  702 => 479,  693 => 473,  684 => 467,  675 => 461,  666 => 455,  649 => 441,  640 => 435,  631 => 429,  622 => 423,  613 => 417,  604 => 411,  587 => 397,  578 => 391,  569 => 385,  560 => 379,  551 => 373,  542 => 367,  525 => 353,  516 => 347,  507 => 341,  498 => 335,  489 => 329,  472 => 315,  463 => 309,  454 => 303,  445 => 297,  436 => 291,  419 => 277,  410 => 271,  401 => 265,  392 => 259,  375 => 245,  366 => 239,  357 => 233,  345 => 224,  336 => 218,  327 => 212,  318 => 206,  309 => 200,  300 => 194,  283 => 180,  274 => 174,  265 => 168,  256 => 162,  247 => 156,  238 => 150,  229 => 144,  220 => 138,  211 => 132,  198 => 122,  189 => 116,  180 => 110,  171 => 104,  162 => 98,  153 => 92,  144 => 86,  83 => 27,  80 => 26,  69 => 18,  61 => 13,  55 => 9,  52 => 8,  47 => 5,  41 => 3,  11 => 1,);
    }
}
