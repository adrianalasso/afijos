<?php

/* MainBundle:Bajas:solicitadas.html.twig */
class __TwigTemplate_4138bb61cdecd39ab4352c8a32c3c9c01268e573f76b1ad8b0780e4a20b19221 extends Twig_Template
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
            ";
        // line 27
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo "       
            <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Activo</th>
                        <th>Descripcion</th>
                        <th>Detalle</th>
                        <th>Estado</th>
                        <th>Fechasolicitada</th>
                        <th>Fechaaprobado</th>
                        <th>Acciones</th>
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 42
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 43
                echo "                        <tr>
                            <td><a href=\"";
                // line 44
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abajas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "codigo", array()), "html", null, true);
                echo "</a></td>
                            <td>
                                ";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "codigo", array()), "html", null, true);
                echo "<br>
                                ";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "trabajador", array()), "html", null, true);
                echo "<br>
                                ";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "descripcion", array()), "html", null, true);
                echo "<br>
                                ";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "serie", array()), "html", null, true);
                echo "<br>
                                ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "marca", array()), "html", null, true);
                echo "<br>
                                ";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "estado", array()), "html", null, true);
                echo "            
                            </td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "detalle", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 56
                if ($this->getAttribute($context["entity"], "fechaSolicitada", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaSolicitada", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                            <td>";
                // line 57
                if ($this->getAttribute($context["entity"], "fechaAprobado", array())) {
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAprobado", array()), "Y-m-d H:i:s"), "html", null, true);
                }
                echo "</td>
                            <td  class=\"td-actions\">
                                <div class=\"hidden-phone visible-desktop action-buttons\">
                                        <a class=\"blue\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abajas_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                                <i class=\"icon-zoom-in bigger-150\"></i>
                                        </a>
                                    ";
                // line 63
                if (($this->getAttribute($context["entity"], "estado", array()) == "PENDIENTE")) {
                    // line 64
                    echo "                                        <a class=\"green\" href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abajas_aprobar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                    echo "\">
                                                <i class=\"icon-ok bigger-150\"></i>
                                        </a>
                                    ";
                }
                // line 68
                echo "                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "                </tbody>                
            </table>
            ";
        } else {
            // line 75
            echo "            <div class=\"alert alert-error\"> 
                <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                No se han encontrado items para esta línea.
                <br>
            </div>
            ";
        }
        // line 81
        echo "            <div class=\"hr hr32 hr-dotted\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 88
    public function block_plugins($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 90
    public function block_script($context, array $blocks = array())
    {
        // line 91
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        var elemento=document.getElementById(\"mnabajas\");
        elemento.classList.add('active');
        elemento.classList.add('open');
        elemento.parentNode.parentNode.classList.add('open');
        elemento.parentNode.parentNode.classList.add('active');
    });
    \$(function() {var oTable1 = \$('#sample-table-2').dataTable({\"aoColumns\": [null,null,null,null,null,null,null,{\"bSortable\": false }]});});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Bajas:solicitadas.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 93,  224 => 92,  220 => 91,  217 => 90,  209 => 88,  200 => 81,  192 => 75,  187 => 72,  178 => 68,  170 => 64,  168 => 63,  162 => 60,  154 => 57,  148 => 56,  144 => 55,  140 => 54,  136 => 53,  131 => 51,  127 => 50,  123 => 49,  119 => 48,  115 => 47,  111 => 46,  104 => 44,  101 => 43,  97 => 42,  79 => 27,  69 => 19,  66 => 18,  55 => 10,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
