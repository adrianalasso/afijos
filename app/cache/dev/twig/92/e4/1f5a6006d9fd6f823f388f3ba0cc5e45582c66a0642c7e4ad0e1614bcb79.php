<?php

/* MainBundle:Reportes:reporte1.html.twig */
class __TwigTemplate_92e41f5a6006d9fd6f823f388f3ba0cc5e45582c66a0642c7e4ad0e1614bcb79 extends Twig_Template
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
        echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>
<!DOCTYPE pdf SYSTEM \"%resources%/dtd/doctype.dtd\">
<pdf>
    <dynamic-page>
        <div class=\"page-content\">    
            <div class=\"page-header position-relative\">
                <div class=\"row-fluid\">
                    <div class=\"span12\">
                        <div class=\"well well-small\">
                            <table>
                                <tr>
                                    <td width=\"80%\">
                                        <h1>C E N E L   E P </h1>
                                        <h2>Reporte de Bajas entre el ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fechdesde"]) ? $context["fechdesde"] : $this->getContext($context, "fechdesde")), "d/m/Y", "America/Guayaquil"), "html", null, true);
        echo " al ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, (isset($context["fechasta"]) ? $context["fechasta"] : $this->getContext($context, "fechasta")), "d/m/Y", "America/Guayaquil"), "html", null, true);
        echo "</h2>                                    
                                    </td>
                                    <td>
                                        <div>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y", "America/Guayaquil"), "html", null, true);
        echo "</div>
                                        <div>";
        // line 18
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", " H:i:s", "America/Guayaquil"), "html", null, true);
        echo "</div>
                                        <div>";
        // line 19
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array())), "html", null, true);
        echo "</div>
                                    </td>
                                </tr>
                            </table>
                        </div>    
                    </div>
                </div>
            </div><!--/.page-header-->
            <div height=\"20px\"></div>
            <div class=\"row-fluid\">
                <div class=\"span12\">
                    <div class=\"space-10\"></div>
                    <!--PAGE CONTENT BEGINS-->   
                    ";
        // line 32
        if ((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities"))) {
            echo "       
                    <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                            <tr>
                                <td width=\"6%\">Código</td>
                                <td width=\"16%\">Descripción</td>
                                <td width=\"14%\">Departamento</td>
                                <td width=\"14%\">Responsable</td>
                                <td width=\"5%\">Nº de Documento</td>
                                <td width=\"10%\">Fecha de Documento</td>
                                <td width=\"10%\">Marca</td>
                                <td width=\"10%\">Serie</td>
                                <td width=\"6%\">Estado</td>
                                <td width=\"9%\">Fecha de baja</td>
                                <td width=\"9%\">Valor de Adquisición</td>
                            </tr>
                            ";
            // line 47
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 48
                echo "                                <tr>
                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "codigo", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "descripcion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "trabajador", array()), "departamento", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "trabajador", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "numeroDocumento", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "fechAdquisicion", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "marca", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "serie", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "estado", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 58
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaAprobado", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>-";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "bienesCustodio", array()), "valorAdquisicion", array()), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "                    </table>
                    ";
        }
        // line 63
        echo "                    
                    <div height=\"20px\"></div>            
                    <div>Total de Gastos: ";
        // line 65
        echo twig_escape_filter($this->env, (isset($context["gastos"]) ? $context["gastos"] : $this->getContext($context, "gastos")), "html", null, true);
        echo "</div>                    
                    <!--PAGE CONTENT ENDS-->
                </div><!--/.span-->
            </div><!--/.row-fluid-->
        </div><!--/.page-content-->
    </dynamic-page>
</pdf>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Reportes:reporte1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 65,  144 => 63,  140 => 62,  131 => 59,  127 => 58,  123 => 57,  119 => 56,  115 => 55,  111 => 54,  107 => 53,  103 => 52,  99 => 51,  95 => 50,  91 => 49,  88 => 48,  84 => 47,  66 => 32,  50 => 19,  46 => 18,  42 => 17,  34 => 14,  19 => 1,);
    }
}
