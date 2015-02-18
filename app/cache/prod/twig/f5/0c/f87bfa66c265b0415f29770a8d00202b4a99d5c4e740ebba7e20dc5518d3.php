<?php

/* MainBundle:LSubtransmision:index.html.twig */
class __TwigTemplate_f50cf87bfa66c265b0415f29770a8d00202b4a99d5c4e740ebba7e20dc5518d3 extends Twig_Template
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
    public function block_mapasitio($context, array $blocks = array())
    {
        // line 6
        echo "<div class=\"breadcrumbs\" id=\"breadcrumbs\">
    <ul class=\"breadcrumb\">
        <li>
            <i class=\"icon-home home-icon\"></i>
            <a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\">Inicio</a>
            <span class=\"divider\"><i class=\"icon-angle-right arrow-icon\"></i></span>
        </li>
        <li class=\"active\">Líneas de Subtransmisión</li>
    </ul><!--.breadcrumb-->
</div>
";
    }

    // line 18
    public function block_pagecontent($context, array $blocks = array())
    {
        // line 19
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">
        <h1>Líneas de Subtransmisión<small><i class=\"icon-double-angle-right\"></i> Listado general</small></h1>
    </div><!--/.page-header-->
    
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <!--PAGE CONTENT BEGINS-->
            <a class=\"btn btn-small btn-yellow\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision_new"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i>
                Crear una nueva entrada
            </a>
            
            <br><br>
            ";
        // line 32
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo "       
            <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Responsable</th>
                        <th>Categoría</th>
                        <th>Coodenada este</th>
                        <th>Coordenada norte</th>
                        <th>Etapa funcional</th>
                        <th>Altura</th>
                        <th>Año de fabricación</th>
                        <th>Voltaje</th>
                        <th>Postería</th>
                        <th>Material</th>
                        <th>Tipo</th>
                        <th>Herramientas</th>
                        <th>Acciones</th>
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 53
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 54
                echo "                        <tr>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trabajador", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subtransmision", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coordeEste", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coordeNorte", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etapaFuncional", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "altura", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "anioFabricacion", array()), "Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "voltaje", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "posteria", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "material", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipo", array()), "html", null, true);
                echo "</td>
                            <td>
                                <span class=\"btn btn-info btn-mini tooltip-info btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Estructura\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Nombre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 86
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 92
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Estructura</span>
                                <span class=\"btn btn-mini btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Puesta Tierra\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Descripción</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 110
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcionPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Calibre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 116
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibrePTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 122
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 128
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Puesta Tierra</span>
                                <span class=\"btn btn-warning btn-mini tooltip-warning btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Tensor\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 140
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Cantidad</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 146
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidadTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Calibre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 152
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibreTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 158
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 164
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Tensor</span>
                                <span class=\"btn btn-success btn-mini tooltip-success btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Conductur Fase\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Longitud</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 176
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "longitudCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 182
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Material</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 188
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "materialCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Calibre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 194
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibreCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 200
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Conductor Fase</span>
                                <span class=\"btn btn-danger btn-mini tooltip-error btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Cable Guardia\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                        <div class='profile-info-row'>
                                            <div class='profile-info-name'> Longitud</div>
                                                <div class='profile-info-value'>
                                                        <span >";
                // line 218
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "longitudCGuardia", array()), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class='profile-info-row'>
                                                <div class='profile-info-name'> Tipo</div>
                                                <div class='profile-info-value'>
                                                    <span>";
                // line 224
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoCGuardia", array()), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class='profile-info-row'>
                                                <div class='profile-info-name'> Material</div>
                                                <div class='profile-info-value'>
                                                    <span>";
                // line 230
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "materialCGuardia", array()), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class='profile-info-row'>
                                                <div class='profile-info-name'> Calibre</div>
                                                    <div class='profile-info-value'>
                                                        <span>";
                // line 236
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibreCGuardia", array()), "html", null, true);
                echo "</span>
                                                    </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 242
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoCGuardia", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 248
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observCGuardia", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Cable Guardia</span></td>
                            <td  class=\"td-actions\">
                                <div class=\"hidden-phone visible-desktop action-buttons\">
                                        <a class=\"blue\" href=\"";
                // line 256
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"icon-zoom-in bigger-150\"></i>
                                        </a>
                                        <a class=\"green\" href=\"";
                // line 259
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"icon-pencil bigger-150\"></i>
                                        </a>
                                        <a class=\"blue\" href=\"/AFijos/web/bundles/afijos/listarimagenes.php?usa=";
                // line 262
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "apellidos", array()), "html", null, true);
                echo "&usn=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombres", array()), "html", null, true);
                echo "&md=ls&co=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "\">
                                        ";
                // line 264
                echo "                                                <i class=\"icon-picture bigger-150\"></i>
                                        </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 270
            echo "                </tbody>                
            </table>
            ";
        } else {
            // line 273
            echo "            <div class=\"alert alert-error\"> 
                <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                No se han encontrado items para esta línea.
                <br>
            </div>
            ";
        }
        // line 279
        echo "            <div class=\"hr hr32 hr-dotted\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 286
    public function block_plugins($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 288
    public function block_script($context, array $blocks = array())
    {
        // line 289
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        var elemento=document.getElementById(\"mnlsubtransmisiones\");
        elemento.classList.add('active');
        elemento.classList.add('open');
        elemento.parentNode.parentNode.classList.add('open');
        elemento.parentNode.parentNode.classList.add('active');
    });
    \$(function() {var oTable1 = \$('#sample-table-2').dataTable( 
                {\"aoColumns\": 
                    [null,null,null,null,null,null,null,null,null,null,null,null,null,{ \"bSortable\": false }] 
        } );});
    \$('[data-rel=popover]').popover({html:true});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:LSubtransmision:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  505 => 291,  501 => 290,  497 => 289,  494 => 288,  486 => 286,  477 => 279,  469 => 273,  464 => 270,  453 => 264,  445 => 262,  439 => 259,  433 => 256,  422 => 248,  413 => 242,  404 => 236,  395 => 230,  386 => 224,  377 => 218,  362 => 206,  353 => 200,  344 => 194,  335 => 188,  326 => 182,  317 => 176,  302 => 164,  293 => 158,  284 => 152,  275 => 146,  266 => 140,  251 => 128,  242 => 122,  233 => 116,  224 => 110,  215 => 104,  200 => 92,  191 => 86,  182 => 80,  173 => 74,  162 => 66,  158 => 65,  154 => 64,  150 => 63,  146 => 62,  142 => 61,  138 => 60,  134 => 59,  130 => 58,  126 => 57,  122 => 56,  118 => 55,  115 => 54,  111 => 53,  87 => 32,  79 => 27,  69 => 19,  66 => 18,  55 => 10,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
