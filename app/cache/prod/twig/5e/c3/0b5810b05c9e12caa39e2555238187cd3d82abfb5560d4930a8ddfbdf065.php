<?php

/* MainBundle:BienesCustodio:edit.html.twig */
class __TwigTemplate_5ec30b5810b05c9e12caa39e2555238187cd3d82abfb5560d4930a8ddfbdf065 extends Twig_Template
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
        <li class=\"active\">Editar Activo</li>
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
        <h1>Bienes en Custodio<small><i class=\"icon-double-angle-right\"></i> Editar Activo</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span10\">
            <!--PAGE CONTENT BEGINS-->         
            <form action=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_update", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : null), "id", array()))), "html", null, true);
        echo "\" method=\"post\" ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'enctype');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "codigo", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Etiqueta</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 68
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "etiqueta", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>                                                
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Responsable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 74
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "trabajador", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Agencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 80
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "agencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Cantón</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 86
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "canton", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "areaOperativa", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Cuenta Contable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 100
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "cuentaContable", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Unidad de Propiedad</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 106
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "unidadPropiedad", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Plan o Programa</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 112
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "plan", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Dependencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 118
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "dependencia", array()), 'widget', array("attr" => array("class" => "chzn-select input-large", "data-placeholder" => "Escoja una opcion..")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 124
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "estado", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Observaciones</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 130
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "observaciones", array()), 'widget', array("attr" => array("class" => "autosize-transition")));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "descripcion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Marca</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 150
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "marca", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Serie</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 156
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "serie", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=\"span6\">
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Oficina</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 164
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "oficina", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Dirección</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "direccion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Departamento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 176
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "depart", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Sección</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 182
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "seccion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Componentes</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 188
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "componentes", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechAdquisicion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>                                        
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Fecha en Marcha</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 206
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "fechaMarcha", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Tipo de Documento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 212
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "tipoDocumento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Nº de Documento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 218
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "numeroDocumento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Procedencia</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "procedencia", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Financiamiento</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 230
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "financiamiento", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Bien Asegurable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 236
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "bienAsegurable", array()), 'widget');
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "calidad", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Factor de Estado</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 250
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "factorEstado", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor de Adquisicion</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 256
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "valorAdquisicion", array()), 'widget');
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor Residual</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 262
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "valorResidual", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>
                                                <div class=\"control-group\">
                                                    <label class=\"control-label\" for=\"\">Valor Depreciable</label>
                                                    <div class=\"controls\">
                                                            ";
        // line 268
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : null), "valorDepreciable", array()), 'widget', array("attr" => array("readonly" => "readonly")));
        echo "
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                    </div>
                ";
        // line 275
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : null), 'rest');
        echo "
                <div class='space-10'></div> 
                <div class=\"row-fluid\">
                    <div class=\"span2\"></div>
                    <div class=\"span6\">
                        <div class=\"well well-small\"> 
                            <div class=\"center\">
                                <button class=\"btn btn-small btn-success\" type=\"submit\" id=\"btactualizar\">
                                    <i class=\"icon-save bigger-150\"></i>
                                    Actualizar
                                </button>                                                    
                                <a href=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\"  class=\"btn btn-small btn-grey\" id=\"btregresar\">
                                    <i class=\"icon-undo bigger-150\"></i>
                                    Regresar
                                </a>     
                            </div>
                        </div>                    
                    </div>
                </div>            
                <!--PAGE CONTENT ENDS-->
                </div>
            </form>
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 302
    public function block_plugins($context, array $blocks = array())
    {
        // line 303
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/chosen.jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 304
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.autosize-min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    // line 308
    public function block_script($context, array $blocks = array())
    {
        // line 309
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
        return "MainBundle:BienesCustodio:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  492 => 309,  489 => 308,  483 => 305,  479 => 304,  474 => 303,  471 => 302,  452 => 286,  438 => 275,  428 => 268,  419 => 262,  410 => 256,  401 => 250,  392 => 244,  381 => 236,  372 => 230,  363 => 224,  354 => 218,  345 => 212,  336 => 206,  327 => 200,  312 => 188,  303 => 182,  294 => 176,  285 => 170,  276 => 164,  265 => 156,  256 => 150,  247 => 144,  230 => 130,  221 => 124,  212 => 118,  203 => 112,  194 => 106,  185 => 100,  176 => 94,  165 => 86,  156 => 80,  147 => 74,  138 => 68,  129 => 62,  97 => 35,  88 => 28,  85 => 27,  74 => 19,  66 => 14,  60 => 10,  57 => 9,  50 => 6,  47 => 5,  41 => 3,  11 => 1,);
    }
}
