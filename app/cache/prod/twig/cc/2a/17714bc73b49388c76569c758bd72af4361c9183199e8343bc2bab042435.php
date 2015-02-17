<?php

/* MainBundle:Reportes:reporte8.html.twig */
class __TwigTemplate_cc2a17714bc73b49388c76569c758bd72af4361c9183199e8343bc2bab042435 extends Twig_Template
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
                                        <h2>Reporte de Ubicación del activo ";
        // line 14
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array"), "codigo", array()) . " - ") . $this->getAttribute($this->getAttribute((isset($context["entities"]) ? $context["entities"] : null), 0, array(), "array"), "descripcion", array())), "html", null, true);
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
                    ";
            // line 34
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 35
                echo "                            <tr>
                                <td width=\"30%\">Código</td>
                                <td>";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Descripción</td>
                                <td>";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Departamento</td>
                                <td>";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["entity"], "trabajador", array()), "departamento", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Responsable</td>
                                <td>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "trabajador", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Nº de Documento</td>
                                <td>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "numeroDocumento", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Fecha de Documento</td>
                                <td>";
                // line 57
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechAdquisicion", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Marca</td>
                                <td>";
                // line 61
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marca", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Serie</td>
                                <td>";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "serie", array()), "html", null, true);
                echo "</td>
                            </tr>
                            <tr>
                                <td>Estado</td>
                                <td>";
                // line 69
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estado", array()), "html", null, true);
                echo "</td>
                            </tr>                                
                            <tr>
                                <td>Fecha de Alta</td>
                                <td>";
                // line 73
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "fechaRegistro", array()), "d/m/Y"), "html", null, true);
                echo "</td>
                            </tr>                             
                            <tr>
                                <td>Precio de Adquisición</td>
                                <td>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "valorAdquisicion", array()), "html", null, true);
                echo "</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "                    </table>
                    ";
        }
        // line 82
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
        return "MainBundle:Reportes:reporte8.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 82,  158 => 80,  149 => 77,  142 => 73,  135 => 69,  128 => 65,  121 => 61,  114 => 57,  107 => 53,  100 => 49,  93 => 45,  86 => 41,  79 => 37,  75 => 35,  71 => 34,  68 => 33,  66 => 32,  50 => 19,  46 => 18,  42 => 17,  34 => 14,  19 => 1,);
    }
}