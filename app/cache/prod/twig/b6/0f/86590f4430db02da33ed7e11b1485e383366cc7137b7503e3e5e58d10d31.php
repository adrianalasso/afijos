<?php

/* MainBundle:Reportes:reporte6.html.twig */
class __TwigTemplate_b60f86590f4430db02da33ed7e11b1485e383366cc7137b7503e3e5e58d10d31 extends Twig_Template
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
                                        <h2>Reporte de Activos al custodio de ";
        // line 14
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array"), "trabajador", array()), "html", null, true);
        }
        echo " en el departamento de ";
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array"), "trabajador", array()), "departamento", array()), "html", null, true);
        }
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
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "apellidos", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()), "nombres", array())), "html", null, true);
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
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            // line 33
            echo "                    <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                            <tr>
                                <td width=\"10%\">Código</td>
                                <td width=\"20%\">Descripción</td>
                                <td width=\"10%\">Nº de Documento</td>
                                <td width=\"10%\">Fecha de Documento</td>
                                <td width=\"10%\">Marca</td>
                                <td width=\"10%\">Serie</td>
                                <td width=\"10%\">Estado</td>
                                <td width=\"10%\">Fecha de Alta</td>
                                <td width=\"10%\">Precio de Adquisición</td>
                            </tr>
                            ";
            // line 45
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 46
                echo "                                <tr>
                                    <td>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 48
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numeroDocumento", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 50
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechAdquisicion", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marca", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "serie", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
                echo "</td>
                                    <td>";
                // line 54
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaRegistro", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                                    <td>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "valorAdquisicion", array()), "html", null, true);
                echo "</td>
                                </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "                    </table>
                    ";
        }
        // line 60
        echo "                    <!--PAGE CONTENT ENDS-->
                </div><!--/.span-->
            </div><!--/.row-fluid-->
        </div><!--/.page-content-->
    </dynamic-page>
</pdf>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Reportes:reporte6.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 60,  134 => 58,  125 => 55,  121 => 54,  117 => 53,  113 => 52,  109 => 51,  105 => 50,  101 => 49,  97 => 48,  93 => 47,  90 => 46,  86 => 45,  72 => 33,  70 => 32,  54 => 19,  50 => 18,  46 => 17,  34 => 14,  19 => 1,);
    }
}
