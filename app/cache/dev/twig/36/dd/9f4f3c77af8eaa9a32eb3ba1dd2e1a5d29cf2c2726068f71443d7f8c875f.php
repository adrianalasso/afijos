<?php

/* MainBundle:BienesCustodio:new.html.twig */
class __TwigTemplate_36dd9f4f3c77af8eaa9a32eb3ba1dd2e1a5d29cf2c2726068f71443d7f8c875f extends Twig_Template
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
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\">Bienes en Custodio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Nuevo Activo</li>
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
        <h1>Bienes en Custodio<small><i class=\"icon-double-angle-right\"></i> Nuevo Activo</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span10\">
            <!--PAGE CONTENT BEGINS-->         
            <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_create"), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class='form-horizontal'>
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
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Código</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 62
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "codigo", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Etiqueta</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "etiqueta", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Responsable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "trabajador", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Agencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "agencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Cantón</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 86
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
        // line 94
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "areaOperativa", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Cuenta Contable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cuentaContable", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Unidad de Propiedad</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "unidadPropiedad", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Plan o Programa</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "plan", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Dependencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dependencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "estado", array()), 'widget');
        echo "
                                                    </div>
                                                </div>          
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observaciones</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 130
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
                                                    <label class=\"control-label\" for=\"\">Descripción</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 144
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Marca</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "marca", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Serie</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "serie", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Componentes</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "componentes", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Oficina</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "oficina", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Dirección</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "direccion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Departamento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "depart", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Sección</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seccion", array()), 'widget');
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
        // line 200
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechAdquisicion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>                                        
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Fecha en Marcha</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaMarcha", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo de Documento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoDocumento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Nº de Documento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "numeroDocumento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Procedencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "procedencia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Financiamiento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "financiamiento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Bien Asegurable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 236
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
        // line 244
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "calidad", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Factor de Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "factorEstado", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor de Adquisicion</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorAdquisicion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor Residual</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorResidual", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor Depreciable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorDepreciable", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                    ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
                <div class='space-10'></div> 
                <div class=\"row-fluid\">
                    <div class=\"span2\">                   

                    </div>
                    <div class=\"span6\">
                        <div class=\"well well-small\"> 
                            <div class=\"center\">
                                <button class=\"btn btn-small btn-success\" type=\"submit\">
                                    <i class=\"icon-save bigger-150\"></i>
                                    Crear
                                </button>                                                    
                                <a href=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\"  class=\"btn btn-small btn-grey\">
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

    // line 303
    public function block_plugins($context, array $blocks = array())
    {
        // line 304
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 309
    public function block_script($context, array $blocks = array())
    {
        // line 310
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        var elemento=document.getElementById(\"mnbienes\");
        elemento.classList.add('active');
        elemento.parentNode.parentNode.classList.add('active');
        elemento.parentNode.parentNode.classList.add('open');                
        
        function aesmayorm(){
            if(\$(\"#afijos_mainbundle_bienescustodiotype_fechAdquisicion\").val()>\$(\"#afijos_mainbundle_bienescustodiotype_fechaMarcha\").val()){
                bootbox.dialog(\"La fecha de puesta en marcha debe ser mayor que la fecha de adquisición\", [{
                        \"label\" : \"Aceptar\",
                        \"class\" : \"btn-small btn-success\",
                        \"callback\": function() {}
                    }]
                );
                \$(\"#afijos_mainbundle_bienescustodiotype_fechaMarcha\").val(\"\");
            }
        }
        function mensajem(){
            bootbox.dialog(\"Debe ingresar fecha de adquisicion\", [{
                    \"label\" : \"Aceptar\",
                    \"class\" : \"btn-small btn-success\",
                    \"callback\": function() {}
                }]
            );
            \$(\"#afijos_mainbundle_bienescustodiotype_fechaMarcha\").val(\"\");
        }

        \$(\"#afijos_mainbundle_bienescustodiotype_fechaMarcha\").change(function(){
            var fechAdq=\$(\"#afijos_mainbundle_bienescustodiotype_fechAdquisicion\").val();
            if(fechAdq==\"\"){
                mensajem();
            }
            aesmayorm();
        });     

        \$(\"#afijos_mainbundle_bienescustodiotype_fechAdquisicion\").change(function(){
            if(!(\$(\"#afijos_mainbundle_bienescustodiotype_fechaMarcha\").val(\"\"))){
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
        return "MainBundle:BienesCustodio:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  493 => 310,  490 => 309,  484 => 306,  480 => 305,  475 => 304,  472 => 303,  454 => 288,  438 => 275,  428 => 268,  419 => 262,  410 => 256,  401 => 250,  392 => 244,  381 => 236,  372 => 230,  363 => 224,  354 => 218,  345 => 212,  336 => 206,  327 => 200,  312 => 188,  303 => 182,  294 => 176,  285 => 170,  276 => 164,  265 => 156,  256 => 150,  247 => 144,  230 => 130,  221 => 124,  212 => 118,  203 => 112,  194 => 106,  185 => 100,  176 => 94,  165 => 86,  156 => 80,  147 => 74,  138 => 68,  129 => 62,  97 => 35,  88 => 28,  85 => 27,  74 => 19,  66 => 14,  60 => 10,  57 => 9,  50 => 6,  47 => 5,  41 => 3,  11 => 1,);
    }
}
