<?php

/* MainBundle:BienesCustodio:reporte.html.twig */
class __TwigTemplate_3274668591e0e05b69323c1165ac9a8dfc2b68bae5cd778f6e00c944736300ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"page-content\">
    <div class=\"page-header position-relative\">
        <h1>Bienes en Custodio<small><i class=\"icon-double-angle-right\"></i> Reporte de Bienes</small></h1>
    </div><!--/.page-header-->
    <div class=\"row-fluid\">
        <div class=\"span10\">
            <!--PAGE CONTENT BEGINS-->                
            ";
        // line 8
        if ((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) {
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
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 25
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 26
                echo "                        <tr>
                            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trabajador", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marca", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "oficina", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "direccion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "depart", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "seccion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "componentes", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "serie", array()), "html", null, true);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "                </tbody>                
            </table>
            ";
        } else {
            // line 42
            echo "            <div class=\"alert alert-error\"> 
                <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                No se han encontrado items para esta línea.
                <br>
            </div>
            ";
        }
        // line 48
        echo "            <div class=\"hr hr32 hr-dotted\"></div>
            <!--PAGE CONTENT ENDS-->
        </div><!--/.span-->
    </div><!--/.row-fluid-->
</div><!--/.page-content-->";
    }

    public function getTemplateName()
    {
        return "MainBundle:BienesCustodio:reporte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 48,  105 => 42,  100 => 39,  91 => 36,  87 => 35,  83 => 34,  79 => 33,  75 => 32,  71 => 31,  67 => 30,  63 => 29,  59 => 28,  55 => 27,  52 => 26,  48 => 25,  28 => 8,  19 => 1,);
    }
}
