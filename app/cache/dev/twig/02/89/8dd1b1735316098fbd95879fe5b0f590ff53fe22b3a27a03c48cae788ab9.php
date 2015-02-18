<?php

/* MainBundle:LSubtransmision:new.html.twig */
class __TwigTemplate_02898dd1b1735316098fbd95879fe5b0f590ff53fe22b3a27a03c48cae788ab9 extends Twig_Template
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
        <li>
            <i class=\"icon-exchange exchange-icon\"></i>
            <a href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision"), "html", null, true);
        echo "\">Líneas de Subtransmisión</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Nueva Línea de Subtransmisión</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 27
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 28
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">
        <h1>Líneas de Subtransmisión<small><i class=\"icon-double-angle-right\"></i> Nueva Línea de Subtransmisión</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span10\">
            <!--PAGE CONTENT BEGINS-->         
            <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class='form-horizontal' name=\"frmcrear\">
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
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Código</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Etiqueta</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etiqueta", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Responsable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 99
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trabajador", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Línea de Subtransmisión</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "subtransmision", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Agencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 111
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Cantón</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 117
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "canton", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Área Operativa</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 125
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaOperativa", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Cuenta Contable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 131
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuentaContable", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Unidad de Propiedad</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unidadPropiedad", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Plan o Programa</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 143
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plan", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Departamento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 149
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "departamento", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Dependencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 155
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dependencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 161
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observaciones</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 167
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observaciones", array()), 'widget', array("attr" => array("class" => "autosize-transition")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"space-10\"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div id=\"especifica\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"\">Coordenada este</label>
                                            <div class=\"controls\">
                                                    ";
        // line 181
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordeEste", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"\">Coordenada Norte</label>
                                            <div class=\"controls\">
                                                    ";
        // line 187
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "coordeNorte", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"\">Etapa funcional</label>
                                            <div class=\"controls\">
                                                    ";
        // line 193
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etapaFuncional", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"\">Altura</label>
                                            <div class=\"controls\">
                                                    ";
        // line 199
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "altura", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"\">Año de fabricación</label>
                                            <div class=\"controls\">
                                                    ";
        // line 205
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "anioFabricacion", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                        <div class=\"control-group\">
                                            <label class=\"control-label\" for=\"\">Voltaje</label>
                                            <div class=\"controls\">
                                                    ";
        // line 211
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "voltaje", array()), 'widget');
        echo "
                                            </div>
                                        </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Postería</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 219
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "posteria", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Material</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 225
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "material", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 231
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipo", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"estructura\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Nombre</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombrEstructura", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoEstructura", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoEstructura", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observación</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observEstructura", array()), 'widget', array("attr" => array("class" => "autosize-transition")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"ptierra\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Descripción</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcionPTierra", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 281
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoPTierra", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Calibre</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 287
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calibrePTierra", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 293
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoPTierra", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observación</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 299
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observPTierra", array()), 'widget', array("attr" => array("class" => "autosize-transition")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"tensor\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Cantidad</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 312
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cantidadTensor", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 318
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoTensor", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Calibre</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 324
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calibreTensor", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 330
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoTensor", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observación</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 336
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observTensor", array()), 'widget', array("attr" => array("class" => "autosize-transition")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"cfase\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Longitud</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 349
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitudCFase", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 355
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoCFase", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Material</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 361
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materialCFase", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Calibre</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 367
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calibreCFase", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 373
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoCFase", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observación</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 379
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observCFase", array()), 'widget', array("attr" => array("class" => "autosize-transition")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                <div id=\"cguardia\" class=\"tab-pane\">    
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Longitud</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 392
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "longitudCGuardia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 398
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoCGuardia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Material</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 404
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "materialCGuardia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Calibre</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 410
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calibreCGuardia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 416
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estadoCGuardia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observación</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 422
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "observCGuardia", array()), 'widget', array("attr" => array("class" => "autosize-transition")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div id=\"valores\" class=\"tab-pane\">
                                        <div class=\"row-fluid\">
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Fecha de Adquisición</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 435
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechAdquisicion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>                                        
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Fecha en Marcha</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 441
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMarcha", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo de Documento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 447
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoDocumento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Nº de Documento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 453
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroDocumento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Procedencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 459
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "procedencia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Financiamiento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 465
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Bien Asegurable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 471
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bienAsegurable", array()), 'widget');
        echo "
                                                    </div>
                                                </div>                                                
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Calidad</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 479
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calidad", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Factor de Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 485
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "factorEstado", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor de Adquisicion</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 491
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorAdquisicion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor Residual</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 497
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorResidual", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor Depreciable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 503
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorDepreciable", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                    ";
        // line 510
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <div class='space-10'></div> 
                <div class=\"row-fluid\">
                    <div class=\"span2\">                   

                    </div>
                    <div class=\"span6\">
                        <div class=\"well well-small\"> 
                            <div class=\"center\">
                                <button class=\"btn btn-small btn-success\" id=\"btcrear\" onclick=\"valida_envia()\">
                                    <i class=\"icon-save bigger-150\"></i>
                                    Crear
                                </button>                                                    
                                <a href=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision"), "html", null, true);
        echo "\"  class=\"btn btn-small btn-grey\" id=\"btregresar\">
                                    <i class=\"icon-undo bigger-150\"></i>
                                    Regresar
                                </a>     
                            </div>
                        </div>                    
                    </div>
                </div>            
                <!--PAGE CONTENT ENDS-->
            </form>
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 538
    public function block_plugins($context, array $blocks = array())
    {
        // line 539
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 541
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 544
    public function block_script($context, array $blocks = array())
    {
        // line 545
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
jQuery(document).ready(function() {
    var elemento=document.getElementById(\"mnlsubtransmisiones\");
    elemento.classList.add('active');
    elemento.parentNode.parentNode.classList.add('active');
    elemento.parentNode.parentNode.classList.add('open');    
    function aesmayorm(){
        if(\$(\"#afijos_mainbundle_lsubtransmisiontype_fechAdquisicion\").val()>\$(\"#afijos_mainbundle_lsubtransmisiontype_fechaMarcha\").val()){
            bootbox.dialog(\"La fecha de puesta en marcha debe ser mayor que la fecha de adquisición\", [{
                    \"label\" : \"Aceptar\",
                    \"class\" : \"btn-small btn-success\",
                    \"callback\": function() {}
                }]
            );
            \$(\"#afijos_mainbundle_lsubtransmisiontype_fechaMarcha\").val(\"\");
        }
    }
    function mensajem(){
        bootbox.dialog(\"Debe ingresar fecha de adquisicion\", [{
                \"label\" : \"Aceptar\",
                \"class\" : \"btn-small btn-success\",
                \"callback\": function() {}
            }]
        );
        \$(\"#afijos_mainbundle_lsubtransmisiontype_fechaMarcha\").val(\"\");
    }
    
    \$(\"#afijos_mainbundle_lsubtransmisiontype_fechaMarcha\").change(function(){
        var fechAdq=\$(\"#afijos_mainbundle_lsubtransmisiontype_fechAdquisicion\").val();
        if(fechAdq==\"\"){
            mensajem();
        }
        aesmayorm();
    });
    \$(\"#afijos_mainbundle_lsubtransmisiontype_fechAdquisicion\").change(function(){
        if(!(\$(\"#afijos_mainbundle_lsubtransmisiontype_fechaMarcha\").val(\"\"))){
            aesmayorm();
        }
    });
});
\$(function() {
    \$(\".chzn-select\").chosen(); 
    \$('textarea[class*=autosize]').autosize({append: \"\\n\"});
});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:LSubtransmision:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  815 => 545,  812 => 544,  806 => 541,  802 => 540,  797 => 539,  794 => 538,  776 => 523,  760 => 510,  750 => 503,  741 => 497,  732 => 491,  723 => 485,  714 => 479,  703 => 471,  694 => 465,  685 => 459,  676 => 453,  667 => 447,  658 => 441,  649 => 435,  633 => 422,  624 => 416,  615 => 410,  606 => 404,  597 => 398,  588 => 392,  572 => 379,  563 => 373,  554 => 367,  545 => 361,  536 => 355,  527 => 349,  511 => 336,  502 => 330,  493 => 324,  484 => 318,  475 => 312,  459 => 299,  450 => 293,  441 => 287,  432 => 281,  423 => 275,  407 => 262,  398 => 256,  389 => 250,  380 => 244,  364 => 231,  355 => 225,  346 => 219,  335 => 211,  326 => 205,  317 => 199,  308 => 193,  299 => 187,  290 => 181,  273 => 167,  264 => 161,  255 => 155,  246 => 149,  237 => 143,  228 => 137,  219 => 131,  210 => 125,  199 => 117,  190 => 111,  181 => 105,  172 => 99,  163 => 93,  154 => 87,  97 => 35,  88 => 28,  85 => 27,  74 => 19,  66 => 14,  60 => 10,  57 => 9,  50 => 6,  47 => 5,  41 => 3,  11 => 1,);
    }
}
