<?php

/* MainBundle:LSubtransmision:reporte.html.twig */
class __TwigTemplate_72385002ce1c242cd45dba5ddbf6b98c0cf4a05d156f7de42f018ed8bbf45d33 extends Twig_Template
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
                        <th>Coodenada este</th>
                        <th>Coordenada norte</th>
                        <th>Etapa funcional</th>
                        <th>Altura</th>
                        <th>Año de fabricación</th>
                        <th>Voltaje</th>
                        <th>Postería</th>
                        <th>Material</th>
                        <th>Tipo</th>
                        <th>Herramientas</th>
                    </tr>
                 </thead>                
                <tbody>
                    ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
                // line 22
                echo "                        <tr>
                            <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "codigo", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "subtransmision", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coordeEste", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "coordeNorte", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "etapaFuncional", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "altura", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 29
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "anioFabricacion", array()), "Y"), "html", null, true);
                echo "</td>
                            <td>";
                // line 30
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "voltaje", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 31
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "posteria", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "material", array()), "html", null, true);
                echo "</td>
                            <td>";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipo", array()), "html", null, true);
                echo "</td>
                            <td>
                                <span class=\"btn btn-info btn-mini tooltip-info btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Estructura\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Nombre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nombrEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 53
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observEstructura", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Estructura</span>
                                <span class=\"btn btn-mini btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Puesta Tierra\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Descripción</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 77
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "descripcionPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Calibre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 83
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibrePTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 89
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 95
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observPTierra", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Puesta Tierra</span>
                                <span class=\"btn btn-warning btn-mini tooltip-warning btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Tensor\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 107
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Cantidad</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 113
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cantidadTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Calibre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 119
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibreTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 125
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 131
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observTensor", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Tensor</span>
                                <span class=\"btn btn-success btn-mini tooltip-success btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Conductur Fase\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Longitud</div>
                                                        <div class='profile-info-value'>
                                                                <span >";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "longitudCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Tipo</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 149
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Material</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 155
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "materialCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Calibre</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 161
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibreCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 167
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 173
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observCFase", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Conductor Fase</span>
                                <span class=\"btn btn-danger btn-mini tooltip-error btn-block\" data-rel=\"popover\" data-placement=\"left\" title=\"Cable Guardia\" 
                                      data-content=\"
                                      <div class='profile-user-info profile-user-striped'>
                                        <div class='profile-info-row'>
                                            <div class='profile-info-name'> Longitud</div>
                                                <div class='profile-info-value'>
                                                        <span >";
                // line 185
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "longitudCGuardia", array()), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class='profile-info-row'>
                                                <div class='profile-info-name'> Tipo</div>
                                                <div class='profile-info-value'>
                                                    <span>";
                // line 191
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tipoCGuardia", array()), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class='profile-info-row'>
                                                <div class='profile-info-name'> Material</div>
                                                <div class='profile-info-value'>
                                                    <span>";
                // line 197
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "materialCGuardia", array()), "html", null, true);
                echo "</span>
                                                </div>
                                            </div>
                                            <div class='profile-info-row'>
                                                <div class='profile-info-name'> Calibre</div>
                                                    <div class='profile-info-value'>
                                                        <span>";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "calibreCGuardia", array()), "html", null, true);
                echo "</span>
                                                    </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Estado</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 209
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "estadoCGuardia", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                                <div class='profile-info-row'>
                                                        <div class='profile-info-name'> Observación</div>
                                                        <div class='profile-info-value'>
                                                            <span>";
                // line 215
                echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "observCGuardia", array()), "html", null, true);
                echo "</span>
                                                        </div>
                                                </div>
                                            </div>
                                            \">
                                    Cable Guardia</span></td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 223
            echo "                </tbody>                
            </table>
            ";
        } else {
            // line 226
            echo "            <div class=\"alert alert-error\"> 
                <strong><i class=\"icon-remove\"></i>  Opps!</strong>
                No se han encontrado items para esta línea.
                <br>
            </div>
            ";
        }
        // line 232
        echo "            <div class=\"hr hr32 hr-dotted\"></div>
            
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootbox.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    \$('[data-rel=popover]').popover({html:true});
</script>";
    }

    public function getTemplateName()
    {
        return "MainBundle:LSubtransmision:reporte.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  382 => 234,  378 => 232,  370 => 226,  365 => 223,  351 => 215,  342 => 209,  333 => 203,  324 => 197,  315 => 191,  306 => 185,  291 => 173,  282 => 167,  273 => 161,  264 => 155,  255 => 149,  246 => 143,  231 => 131,  222 => 125,  213 => 119,  204 => 113,  195 => 107,  180 => 95,  171 => 89,  162 => 83,  153 => 77,  144 => 71,  129 => 59,  120 => 53,  111 => 47,  102 => 41,  91 => 33,  87 => 32,  83 => 31,  79 => 30,  75 => 29,  71 => 28,  67 => 27,  63 => 26,  59 => 25,  55 => 24,  51 => 23,  48 => 22,  44 => 21,  22 => 2,  19 => 1,);
    }
}
