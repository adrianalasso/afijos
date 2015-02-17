<?php

/* MainBundle:Bajas:solicitud.html.twig */
class __TwigTemplate_53b71216fecdf8eb3ed14c4e7a6e0d274c89828cf6271edac9da74511eaae211 extends Twig_Template
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
            <div>
                Ing. Milena Peñaloza
            </div>
            <div>                
                RESPONSABLE DE LA ADMINISTRACIÓN DE ACTIVOS FIJOS
            </div>
            <div>                
                Presente.-
            </div>
        </div>
        <div>
            <p>
                De mi consideración:
            </p>
        </div>
        <div>
            <p>
                Por el presente solicito de manera comedida autorice a la persona que corresponda, se proceda a dar de baja el siguiente equipo:
            </p>
        </div>        
        <div>
            ";
        // line 33
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
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "codigo", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "descripcion", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "trabajador", array()), "departamento", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 51
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "trabajador", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "numeroDocumento", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 53
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "fechAdquisicion", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "marca", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "serie", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "bienesCustodio", array()), "estado", array()), "html", null, true);
            echo "</td>
                        <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "fechaAprobado", array()), "d/m/Y"), "html", null, true);
            echo "</td>
                    </tr>
            </table>
            ";
        }
        // line 61
        echo "        </div>
        <div>
            <p>
                Este equipo presenta problemas ";
        // line 64
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "detalle", array()), "html", null, true);
        echo "
            </p>
            <p>
                Sin otro particular que comunicarle, me es grato suscribirme.
            </p>
            <p>
                
            </p>
            <p>
                Atentamente,
            </p>
            <p>
                
            </p>
            <p>
                <div>";
        // line 79
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array())), "html", null, true);
        echo "</div>
                <div>COLABORADOR DE LA ADMINISTRACIÓN DE ACTIVOS FIJOS</div>
            </p>
        </div>        
    </dynamic-page>
</pdf>
";
    }

    public function getTemplateName()
    {
        return "MainBundle:Bajas:solicitud.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 79,  122 => 64,  117 => 61,  110 => 57,  106 => 56,  102 => 55,  98 => 54,  94 => 53,  90 => 52,  86 => 51,  82 => 50,  78 => 49,  74 => 48,  56 => 33,  29 => 9,  19 => 1,);
    }
}
