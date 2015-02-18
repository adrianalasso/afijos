<?php

/* MainBundle:LSubestacion:reporte.html.twig */
class __TwigTemplate_07ec1ee2d9c40244201b2ba5be0b8f7608c1267c6199ade0ae6b44fdecc10502 extends Twig_Template
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
        echo "<br><br>
";
        // line 2
        if ((isset($context["entities"]) ? $context["entities"] : null)) {
            echo "       
            <table  id=\"sample-table-2\" class=\"table table-striped table-bordered table-hover\">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Categoría</th>
                        <th>Descripción</th>
                        <th>Tipo</th>
                        <th>Año</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Serie</th>
                        <th>Color</th>
                        <th>Productividad</th>
                        <th>Capacidad</th>
                        <th>Unidades</th>
                        <th>Cantidad</th>
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 23
                echo "                        <tr>
                            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcion", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "anio", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "marca", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "modelo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "serie", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "color", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "material", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "productividad", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "capacidad", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "unidades", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 36
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidad", array()), "html", null, true);
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
        echo "            <div class=\"hr hr32 hr-dotted\"></div>";
    }

    public function getTemplateName()
    {
        return "MainBundle:LSubestacion:reporte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 48,  114 => 42,  109 => 39,  100 => 36,  96 => 35,  92 => 34,  88 => 33,  84 => 32,  80 => 31,  76 => 30,  72 => 29,  68 => 28,  64 => 27,  60 => 26,  56 => 25,  52 => 24,  49 => 23,  45 => 22,  22 => 2,  19 => 1,);
    }
}
