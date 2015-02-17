<?php

/* MainBundle:Bajas:index.html.twig */
class __TwigTemplate_c0d72608208c83bd0f8dda20031027d32fd9514e793756e59f4060086e2017cd extends Twig_Template
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
        echo "Baja de Bienes";
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
        <li class=\"active\">Baja de Bienes</li>
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
        <h1>Baja de Bienes<small><i class=\"icon-double-angle-right\"></i> Listado general</small></h1>
    </div><!--/.page-header-->
    
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <!--PAGE CONTENT BEGINS-->
            <a class=\"btn btn-small btn-danger\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas_new"), "html", null, true);
        echo "\"><i class=\"icon-trash\"></i>
                Dar de baja un bien
            </a>
            <br><br>
            ";
        // line 31
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo "       
            <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Activo</th>
                        <th>Descripción</th>
                        <th>Detalle</th>
                        <th>Estado</th>
                        <th>Fecha y hora solicitada</th>
                        <th>Fecha y hora de aprobación</th>
                        <th>Acciones</th>
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 46
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 47
                echo "                        <tr>
                            <td><a href=\"";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "codigo", array()), "html", null, true);
                echo "</a></td>
                            <td>
                                ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "descripcion", array()), "html", null, true);
                echo "<br>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "trabajador", array()), "html", null, true);
                echo "<br>
                                ";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "serie", array()), "html", null, true);
                echo "<br>
                                ";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "marca", array()), "html", null, true);
                echo "<br>
                                ";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "estado", array()), "html", null, true);
                echo "            
                            </td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "detalle", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                if ($this->getAttribute($context["entity"], "fechaSolicitada", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaSolicitada", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 60
                if ($this->getAttribute($context["entity"], "fechaAprobado", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAprobado", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                            <td  class=\"td-actions\">
                                <div class=\"hidden-phone visible-desktop action-buttons\">
                                        <a class=\"blue\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"icon-zoom-in bigger-150\"></i>
                                        </a>
                                    ";
                // line 66
                if (($this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "eliminado", array()) == "NO")) {
                    // line 67
                    echo "                                    <a class=\"red\" href=\"#\" id=\"bteliminar";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "id", array()), "html", null, true);
                    echo "\">
                                        <i class=\"icon-trash bigger-150\"></i>
                                    </a>
                                    ";
                }
                // line 71
                echo "                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "                </tbody>                
            </table>
            ";
        } else {
            // line 78
            echo "            <div class=\"alert alert-error\"> 
                <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                No hay solicitudes pendientes.
                <br>
            </div>
            ";
        }
        // line 84
        echo "            <div class=\"hr hr32 hr-dotted\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 91
    public function block_plugins($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 93
    public function block_script($context, array $blocks = array())
    {
        // line 94
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script src=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        var elemento=document.getElementById(\"mnbajas\");
        elemento.classList.add('active');
        elemento.classList.add('open');
        elemento.parentNode.parentNode.classList.add('open');
        elemento.parentNode.parentNode.classList.add('active');
        
    });
        \$(function() {    
    ";
        // line 107
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 108
            echo "    \$(\"#bteliminar";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "id", array()), "html", null, true);
            echo "\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
            // line 111
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_eliminar", array("id" => $this->getAttribute($this->getAttribute($context["entity"], "bienescustodio", array()), "id", array()))), "html", null, true);
            echo "\";
                }
            });
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "});
    \$(function() {var oTable1 = \$('#sample-table-2').dataTable({\"aoColumns\": [null,null,null,null,null,null,null,{\"bSortable\": false }]});});
    
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Bajas:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 116,  256 => 111,  249 => 108,  245 => 107,  231 => 96,  227 => 95,  223 => 94,  220 => 93,  212 => 91,  203 => 84,  195 => 78,  190 => 75,  181 => 71,  173 => 67,  171 => 66,  165 => 63,  157 => 60,  151 => 59,  147 => 58,  143 => 57,  139 => 56,  134 => 54,  130 => 53,  126 => 52,  122 => 51,  118 => 50,  111 => 48,  108 => 47,  104 => 46,  86 => 31,  79 => 27,  69 => 19,  66 => 18,  55 => 10,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
