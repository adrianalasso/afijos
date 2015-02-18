<?php

/* MainBundle:BienesCustodio:index.html.twig */
class __TwigTemplate_fc15f32fb2f3b3abebe02a7eb8d3b1a95351daf35b35704edeae865eb7fa7988 extends Twig_Template
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
        echo "Bienes en Custodio";
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
        <li class=\"active\">Bienes en Custodio</li>
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
        <h1>Bienes en Custodio<small><i class=\"icon-double-angle-right\"></i> Listado general</small></h1>
    </div><!--/.page-header-->
    
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <!--PAGE CONTENT BEGINS-->
            <a class=\"btn btn-small btn-yellow\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_new"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i>
                Crear una nueva entrada
            </a>
            ";
        // line 35
        echo "            <br><br>
            ";
        // line 36
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo "       
            <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Descripción</th>
                        <th>Responsable</th>
                        <th>Marca</th>
                        <th>Oficina</th>
                        <th>Dirección</th>
                        <th>Departamento</th>
                        <th>Sección</th>
                        <th>Componentes</th>
                        <th>Serie</th>
                        <th>Acciones</th>
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 54
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 55
                echo "                        <tr>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trabajador", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marca", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "oficina", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "depart", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "seccion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "componentes", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "serie", array()), "html", null, true);
                echo "</td>
                            <td  class=\"td-actions\">
                                <div class=\"hidden-phone visible-desktop action-buttons\">
                                        <a class=\"blue\" href=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"icon-zoom-in bigger-150\"></i>
                                        </a>
                                        <a class=\"green\" href=\"";
                // line 71
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"icon-pencil bigger-150\"></i>
                                        </a>
                                        <a class=\"blue\" href=\"/AFijos/web/bundles/afijos/listarimagenes.php?usa=";
                // line 74
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "apellidos", array()), "html", null, true);
                echo "&usn=";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombres", array()), "html", null, true);
                echo "&md=bc&co=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "\">
                                        ";
                // line 76
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
            // line 82
            echo "                </tbody>                
            </table>
            ";
        } else {
            // line 85
            echo "            <div class=\"alert alert-error\"> 
                <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                No se han encontrado items para esta línea.
                <br>
            </div>
            ";
        }
        // line 91
        echo "            <div class=\"hr hr32 hr-dotted\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 98
    public function block_plugins($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 100
    public function block_script($context, array $blocks = array())
    {
        // line 101
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        var elemento=document.getElementById(\"mnbienes\");
        elemento.classList.add('active');
        elemento.classList.add('open');
        elemento.parentNode.parentNode.classList.add('open');
        elemento.parentNode.parentNode.classList.add('active');
    });
    \$(function() {var oTable1 = \$('#sample-table-2').dataTable({\"aoColumns\": [null,null,null,null,null,null,null,null,null,null,{\"bSortable\": false }]});});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:BienesCustodio:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 103,  226 => 102,  222 => 101,  219 => 100,  211 => 98,  202 => 91,  194 => 85,  189 => 82,  178 => 76,  170 => 74,  164 => 71,  158 => 68,  152 => 65,  148 => 64,  144 => 63,  140 => 62,  136 => 61,  132 => 60,  128 => 59,  124 => 58,  120 => 57,  116 => 56,  113 => 55,  109 => 54,  88 => 36,  85 => 35,  79 => 27,  69 => 19,  66 => 18,  55 => 10,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
