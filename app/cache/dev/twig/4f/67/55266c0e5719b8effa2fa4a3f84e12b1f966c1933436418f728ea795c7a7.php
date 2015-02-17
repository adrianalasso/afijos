<?php

/* MainBundle:UnidadPropiedad:index.html.twig */
class __TwigTemplate_4f6755266c0e5719b8effa2fa4a3f84e12b1f966c1933436418f728ea795c7a7 extends Twig_Template
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
        echo "Unidades de Propiedad";
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
        <li class=\"active\">Unidades de Propiedad</li>
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
        <h1>Unidades de Propiedad<small><i class=\"icon-double-angle-right\"></i> Listado general</small></h1>
    </div><!--/.page-header-->
    
    <div class=\"row-fluid\">
        <div class=\"span12\">
            <!--PAGE CONTENT BEGINS-->
            <a class=\"btn btn-small btn-yellow\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_new"), "html", null, true);
        echo "\"><i class=\"icon-plus\"></i>
                Crear una nueva entrada
            </a>
            
            <br><br>
            ";
        // line 32
        if ((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) {
            echo "              
            <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Cuenta Activo</th>
                        <th>Cuenta Depreciación</th>
                        <th>Descripcion</th>
                        <th width=\"50px\">indice Depreciación</th>
                        <th width=\"50px\">indice Residual</th>
                        <th>Vida Útil (a)</th>
                        <th>Vida Útil (m)</th>
                        <th>Actions</th>
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 48
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 49
                echo "                        <tr>
                            <td class=\"center\"><a href=\"";
                // line 50
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "</a></td>
                            <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuentActivo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cuentaDeprec", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "indiceDeprec", array()), "html", null, true);
                echo "%</td>
                            <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "indiceResidual", array()), "html", null, true);
                echo "%</td>
                            <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vidaUtilA", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "vidaUtilM", array()), "html", null, true);
                echo "</td>
                            <td class=\"td-actions\">
                                <div class=\"hidden-phone visible-desktop action-buttons\">
                                    <a class=\"blue\" href=\"";
                // line 60
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"icon-zoom-in bigger-150\"></i>
                                    </a>
                                    <a class=\"green\" href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
                echo "\">
                                        <i class=\"icon-pencil bigger-150\"></i>
                                    </a>
                                    <a class=\"red\" href=\"#\" id=\"bteliminar";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
                echo "\">
                                        <i class=\"icon-trash bigger-150\"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                </tbody>                
            </table>
            ";
        } else {
            // line 76
            echo "            <div class=\"alert alert-error\"> 
                <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                No se han encontrado items para esta línea.
                <br>
            </div>
            ";
        }
        // line 82
        echo "            <div class=\"hr hr32 hr-dotted\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->
";
    }

    // line 89
    public function block_plugins($context, array $blocks = array())
    {
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>";
    }

    // line 91
    public function block_script($context, array $blocks = array())
    {
        // line 92
        $this->displayParentBlock("script", $context, $blocks);
        echo "
<script src=\"";
        // line 93
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$(document).ready(function(){
        var elemento=document.getElementById(\"mnunidadpropiedades\");
        elemento.classList.add('active');
        elemento.classList.add('open');
        elemento.parentNode.parentNode.classList.add('open');
        elemento.parentNode.parentNode.classList.add('active');
    });
    \$(function() {    
    ";
        // line 104
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 105
            echo "    \$(\"#bteliminar";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "id", array()), "html", null, true);
            echo "\").on(ace.click_event, function() {
            bootbox.confirm(\"Estas seguro de eliminar registro?\", function(result) {
                if(result){
                    location.href=\"";
            // line 108
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad_eliminar", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\";
                }
            });
    });
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "});
\$(function() {var oTable1 = \$('#sample-table-2').dataTable( {\"aoColumns\": [null, null,null, null,null, null,null,null,{ \"bSortable\": false }]} );});
</script>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:UnidadPropiedad:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 113,  239 => 108,  232 => 105,  228 => 104,  215 => 94,  211 => 93,  207 => 92,  204 => 91,  196 => 89,  187 => 82,  179 => 76,  174 => 73,  161 => 66,  155 => 63,  149 => 60,  143 => 57,  139 => 56,  135 => 55,  131 => 54,  127 => 53,  123 => 52,  119 => 51,  113 => 50,  110 => 49,  106 => 48,  87 => 32,  79 => 27,  69 => 19,  66 => 18,  55 => 10,  49 => 6,  46 => 5,  40 => 3,  11 => 1,);
    }
}
