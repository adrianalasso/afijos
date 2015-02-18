<?php

/* MainBundle:Bajas:aprobacion.html.twig */
class __TwigTemplate_66ef56220104196f90845845d6e335bc7951e6d9933e45fb20b5e5188d26b025 extends Twig_Template
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
        <div>
            <h1><p>C E N E L   E P </p></h1>
        </div>
        <div>
            <p>Machala, ";
        // line 9
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "d/m/Y", "America/Guayaquil"), "html", null, true);
        echo "</p>
        </div>
        <div>
            <p>
                
            </p>
            <p>
                <div>Ing. Milena Peñaloza</div>
                <div>RESPONSABLE DE LA ADMINISTRACIÓN DE ACTIVOS FIJOS</div>
            </p>
        </div>
        <div>
            <p>
                
            </p>
            <p>
                <div>ADMINISTRACIÓN DE ACTIVOS FIJOS</div>
            </p>
        </div>
        <div>
            <p>
                AUTORIZO:
            </p>
        </div>
        <div>
            <p>
                Que el equipo:
            </p>
        </div>        
        <div>
            ";
        // line 39
        if ((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity"))) {
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
                </tr>
                    <tr>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "codigo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "descripcion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "trabajador", array()), "departamento", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "trabajador", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "numeroDocumento", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 59
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "fechAdquisicion", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "marca", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "serie", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "estado", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAprobado", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    </tr>
            </table>
            ";
        }
        // line 67
        echo "        </div>
        <div>
            <p>
                Con los siguientes problemas: ";
        // line 70
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "detalle", array()), "html", null, true);
        echo "
            </p>
            <p>
                Tiene la debida aprobación para darlo de baja, quitando de toda responsabilidad al Sr (a) ";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "trabajador", array()), "html", null, true);
        echo ".
            </p>
            <p>
                Es todo en cuanto puedo autorizar.
            </p>
            <p>
                
            </p>
        </div>        
    </dynamic-page>
</pdf>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Bajas:aprobacion.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  134 => 73,  128 => 70,  123 => 67,  116 => 63,  112 => 62,  108 => 61,  104 => 60,  100 => 59,  96 => 58,  92 => 57,  88 => 56,  84 => 55,  80 => 54,  62 => 39,  29 => 9,  19 => 1,);
    }
}
