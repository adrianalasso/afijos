<?php

/* ::base.html.twig */
class __TwigTemplate_2e41709cbdb573459189794f900b8d5b4331684a3185d786363c9d062af9ace1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titulo' => array($this, 'block_titulo'),
            'pluginstyle' => array($this, 'block_pluginstyle'),
            'styleinline' => array($this, 'block_styleinline'),
            'mapasitio' => array($this, 'block_mapasitio'),
            'pagecontent' => array($this, 'block_pagecontent'),
            'plugins' => array($this, 'block_plugins'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
    <head>
        <meta charset=\"utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('titulo', $context, $blocks);
        echo " | Activos Fijos</title>
        <meta name=\"description\" content=\"overview &amp; stats\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <!--basic styles-->
        <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link rel=\"icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("cnel.ico"), "html", null, true);
        echo "\">
        <!--page specific plugin styles-->
        ";
        // line 15
        echo "        ";
        $this->displayBlock('pluginstyle', $context, $blocks);
        // line 16
        echo "        ";
        // line 17
        echo "        <!--fonts-->
        <link rel=\"stylesheet\" href=\"http://fonts.googleapis.com/css?family=Open+Sans:400,300\" />
        <!--ace styles-->
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-responsive.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/css/ace-skins.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        <!--inline styles related to this page-->
        ";
        // line 25
        echo "        ";
        $this->displayBlock('styleinline', $context, $blocks);
        // line 26
        echo "        ";
        // line 27
        echo "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    </head>
    <body>
        <div class=\"navbar\">
            <div class=\"navbar-inner\">
                <div class=\"container-fluid\">
                    <a href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\" class=\"brand\"><small><i class=\"icon-desktop white\"></i> SICACNEL</small></a><!--/.brand-->
                        <ul class=\"nav ace-nav pull-right\">
                            <li class=\"light-blue\">
                                <a data-toggle=\"dropdown\" href=\"\" class=\"dropdown-toggle\">
                                    <!--img class=\"nav-user-photo\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/avatars/user.jpg"), "html", null, true);
        echo "\" alt=\"Jason's Photo\"/-->
                                    <span class=\"user-info\"><small>Bienvenido,</small>
                                        <div id=\"iduser\">";
        // line 39
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "apellidos", array()) . " ") . $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nombres", array())), "html", null, true);
        echo "</div>
                                    </span><i class=\"icon-caret-down\"></i>
                                </a>
                                <ul class=\"user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer\">
                                    <li><a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_perfil", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\"><i class=\"icon-user\"></i>Perfil</a></li>
                                    <li><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_editpass", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
        echo "\"><i class=\"icon-key\"></i>Cambiar Contraseña</a></li>
                                    <li class=\"divider\"></li>
                                    <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_logout"), "html", null, true);
        echo "\"><i class=\"icon-off\"></i>Cerrar sesión</a></li>
                                </ul>
                            </li>
                        </ul><!--/.ace-nav-->
                </div><!--/.container-fluid-->
            </div><!--/.navbar-inner-->
        </div>
        
        <div class=\"main-container container-fluid\">
            <a class=\"menu-toggler\" id=\"menu-toggler\" href=\"#\"><span class=\"menu-text\"></span></a>
            <div class=\"sidebar\" id=\"sidebar\">
                <ul class=\"nav nav-list\">
                    <li  id=\"mninicio\">
                        <a href=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario_index"), "html", null, true);
        echo "\"><i class=\"icon-home\"></i><span class=\"menu-text\"> Página principal</span></a>
                    </li>
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\"><i class=\"icon-exchange\"></i>
                            <span class=\"menu-text\"> Líneas de Subtransmisión</span>
                            <b class=\"arrow icon-angle-down\"></b>
                        </a>
                        <ul class=\"submenu\">
                            <li id=\"mnsubtransmisiones\">
                                <a href=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subtransmision"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Categorías</a>
                            </li>  
                            <li id=\"mnlsubtransmisiones\">
                                <a href=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubtransmision"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Líneas de Subtransmisión</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\"><i class=\"icon-bolt\"></i>
                            <span class=\"menu-text\"> Subestaciones</span>
                            <b class=\"arrow icon-angle-down\"></b>
                        </a>
                        <ul class=\"submenu\" id=\"sbsubest\">
                            <li id=\"mnsubestaciones\">
                                <a href=\"";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subestacion"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Categorías</a>
                            </li>
                            <li id=\"mnlsubestaciones\">
                                <a href=\"";
        // line 85
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("lsubestacion"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Subestaciones</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\"><i class=\"icon-group\"></i>
                            <span class=\"menu-text\"> Bienes en custodio</span>
                            <b class=\"arrow icon-angle-down\"></b>
                        </a>
                        <ul class=\"submenu\">
                            <li id=\"mnbienes\">
                                <a href=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bienescustodio"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Enlistar </a>
                            </li>                    
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\"><i class=\"icon-desktop\"></i>
                            <span class=\"menu-text\"> Activos</span>
                            <b class=\"arrow icon-angle-down\"></b>
                        </a>
                        <ul class=\"submenu\">
                            <li id=\"mnbajas\">
                                <a href=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("bajas"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Dar de baja</a>
                            </li>    
                            <li id=\"mnabajas\">
                                <a href=\"";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("abajas"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Aprobacion de Bajas</a>
                            </li>    
                            <li id=\"mnunidadpropiedades\">
                                <a href=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("unidadpropiedad"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Unidad de Propiedad</a>
                            </li>    
                            <li id=\"mncuentacontables\">
                                <a href=\"";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("cuentacontable"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Cuentas Contables</a>
                            </li>
                            <li id=\"mnplan\">
                                <a href=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plan"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Plan o Programa</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\"><i class=\"icon-file-text\"></i>
                            <span class=\"menu-text\"> Reportes</span>
                            <b class=\"arrow icon-angle-down\"></b>
                        </a>
                        <ul class=\"submenu\" id=\"sbsubest\">
                            <li id=\"mnrp1\">
                                <a href=\"";
        // line 130
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform1"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Bajas por rango de fechas</a>
                            </li>
                            <li id=\"mnrp2\">
                                <a href=\"";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform2"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Altas por rango de fechas</a>
                            </li>
                            <li id=\"mnrp3\">
                                <a href=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform3"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Equipos en mal estado por departamento</a>
                            </li>
                            <li id=\"mnrp4\">
                                <a href=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform4"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Equipos en mal estado por línea de subtransmisión</a>
                            </li>
                            <li id=\"mnrp5\">
                                <a href=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform5"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Equipos en mal estado por subestación</a>
                            </li>
                            <li id=\"mnrp6\">
                                <a href=\"";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform6"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Activos por Empleado</a>
                            </li>
                            <li id=\"mnrp7\">
                                <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform7"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Activos por Departamento</a>
                            </li>
                            <li id=\"mnrp8\">
                                <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform8"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Ubicación física del Activo</a>
                            </li>
                            <li id=\"mnrp9\">
                                <a href=\"";
        // line 154
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_reporte9"), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"icon-double-angle-right\"></i> Bienes sujetos de control</a>
                            </li>
                            <li id=\"mnrp10\">
                                <a href=\"";
        // line 157
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_reporte10"), "html", null, true);
        echo "\" target=\"_blank\"><i class=\"icon-double-angle-right\"></i> Bienes depreciados</a>
                            </li>
                            <li id=\"mnrp11\">
                                <a href=\"";
        // line 160
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("reportes_rform11"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Valor en libros de bienes depreciados</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\"><i class=\"icon-building\"></i>
                            <span class=\"menu-text\"> Empresa</span>
                            <b class=\"arrow icon-angle-down\"></b>
                        </a>
                        <ul class=\"submenu\">
                            <li id=\"mnsubsistemas\">
                                <a href=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("subsistema"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Direcciones</a>
                            </li>
                            <li id=\"mndepartamentos\">
                                <a href=\"";
        // line 174
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("departamento"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Departamentos</a>
                            </li>
                            <li id=\"mntrabajadores\">
                                <a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("trabajador"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Empleados</a>
                            </li>
                            <li id=\"mnagencias\">
                                <a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("agencia"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Agencias</a>
                            </li>                            
                            <li id=\"mnareaoperativas\">
                                <a href=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("areaoperativa"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Áreas Operativas</a>
                            </li>
                            <li id=\"mndependencias\">
                                <a href=\"";
        // line 186
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("dependencia"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Dependencias</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href=\"#\" class=\"dropdown-toggle\"><i class=\"icon-cogs\"></i>
                            <span class=\"menu-text\"> Sistema</span>
                            <b class=\"arrow icon-angle-down\"></b>
                        </a>
                        <ul class=\"submenu\">
                            <li id=\"mnprovincias\">
                                <a href=\"";
        // line 197
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("provincia"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Provincias</a>
                            </li>
                            <li id=\"mncantones\">
                                <a href=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("canton"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Cantones</a>
                            </li>
                            <li id=\"mnusuarios\">
                                <a href=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("usuario"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Usuarios</a>
                            </li>                            
                            <li id=\"mnroles\">
                                <a href=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("rol"), "html", null, true);
        echo "\"><i class=\"icon-double-angle-right\"></i> Roles</a>
                            </li>
                        </ul>
                    </li>
                </ul><!--/.nav-list-->
                <div class=\"sidebar-collapse\" id=\"sidebar-collapse\">
                    <i class=\"icon-double-angle-left\"></i>
                </div>
            </div>
            <div class=\"main-content\">
            ";
        // line 217
        echo "            ";
        $this->displayBlock('mapasitio', $context, $blocks);
        // line 218
        echo "            ";
        // line 219
        echo "            ";
        $this->displayBlock('pagecontent', $context, $blocks);
        // line 220
        echo "            ";
        echo "  
            </div><!--/.main-content-->
        </div><!--/.main-container-->
        <a href=\"#\" id=\"btn-scroll-up\" class=\"btn-scroll-up btn btn-small btn-inverse\">
        <i class=\"icon-double-angle-up icon-only bigger-110\"></i>
        </a>
        <!--basic scripts-->
        <!--[if !IE]>-->
            <!--script src=\"http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js\"></script-->
            <script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-1.10.2.min.js"), "html", null, true);
        echo "\"></script>
        <!--<![endif]-->
        <!--[if IE]>
            <script src=\"http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
        <![endif]-->
        <!--[if !IE]>-->\t\t
        <script type=\"text/javascript\">
            window.jQuery || document.write(\"<script src='";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery-2.0.3.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
    </script>
        <!--<![endif]-->\t
        <!--[if IE]>
        <script type=\"text/javascript\">
                window.jQuery || document.write(\"<script src='assets/js/jquery-1.10.2.min.js'>\"+\"<\"+\"/script>\");
        </script>
        <![endif]-->
        <script type=\"text/javascript\">
\t\tif(\"ontouchend\" in document) document.write(\"<script src='";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/jquery.mobile.custom.min.js"), "html", null, true);
        echo "'>\"+\"<\"+\"/script>\");
\t</script>
        <script src=\"";
        // line 247
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!--page specific plugin scripts-->
\t\t
        <!--[if lte IE 8]-->
            <!--script src=\"";
        // line 251
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/excanvas.min.js"), "html", null, true);
        echo "\"></script-->
        <!--[endif]-->
\t\t
        ";
        // line 255
        echo "\t\t
        ";
        // line 256
        $this->displayBlock('plugins', $context, $blocks);
        echo "        
        ";
        // line 258
        echo "\t<!--ace scripts-->  
\t<script src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace-elements.min.js"), "html", null, true);
        echo "\"></script>       
\t<script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ace/assets/js/ace.min.js"), "html", null, true);
        echo "\"></script>\t 
        ";
        // line 261
        echo "\t\t
        ";
        // line 262
        $this->displayBlock('script', $context, $blocks);
        // line 300
        echo "\t
        ";
        // line 302
        echo "    </body>
</html>";
    }

    // line 5
    public function block_titulo($context, array $blocks = array())
    {
        echo "Bienvenido";
    }

    // line 15
    public function block_pluginstyle($context, array $blocks = array())
    {
    }

    // line 25
    public function block_styleinline($context, array $blocks = array())
    {
    }

    // line 217
    public function block_mapasitio($context, array $blocks = array())
    {
    }

    // line 219
    public function block_pagecontent($context, array $blocks = array())
    {
        echo "  ";
    }

    // line 256
    public function block_plugins($context, array $blocks = array())
    {
    }

    // line 262
    public function block_script($context, array $blocks = array())
    {
        echo "\t
        <script type=\"text/javascript\">
            \$(\"#btactualizar\").click(function(){
                \$(\"#btactualizar\").hide();
                \$(\"#btregresar\").hide();
                \$(\"#bteliminar\").hide();
            });
            \$(\"#btcrear\").click(function(){
                \$(\"#btcrear\").hide();
                \$(\"#btregresar\").hide();
            });
        
            /*
            \$(document).ready(function(){
                verSubtrans();
                //verSubest();                
            });
            function verSubtrans(){                
                \$.post(\"";
        // line 280
        echo "\", function(resultado){
                    for(var i=0; i<resultado.length;i++){
                        var url=\"";
        // line 282
        echo "\";
                        url = url.replace('id', resultado[i].id);
                        document.getElementById(\"sbsubtrans\").innerHTML+=\"<li id='mnsubtrans1' class=''><a href=\"+url+\"><i class=''></i> \"+resultado[i].nomb+\"</a></li>\";                        
                    }
                    document.getElementById(\"sbsubtrans\").innerHTML+='<li><a href=\"#\" class=\"dropdown-toggle\">'+
                            '<i class=\"icon-pencil\"></i>Resumen final<b class=\"arrow icon-angle-down\"></b></a><ul class=\"submenu\"><li id=\"mnagregar\"><a href=\"#\">'+
                            '<i class=\"icon-plus\"></i>Add Product</a></li><li id=\"mnver\"><a href=\"#\"><i class=\"icon-eye-open\"></i>View Products</a></li></ul></li>';
                });
            }
            function verSubest(){                
                \$.post(\"";
        // line 292
        echo "\", function(resultado){
                    for(var i=0; i<resultado.length;i++){                        
                        document.getElementById(\"sbsubest\").innerHTML+=\"<li id=''><a href='#'><i ></i> \"+resultado[i].nomb+\"</a></li>\";
                    }
                });
            }
            */
          </script>\t\t  
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 292,  538 => 282,  534 => 280,  512 => 262,  507 => 256,  501 => 219,  496 => 217,  491 => 25,  486 => 15,  480 => 5,  475 => 302,  472 => 300,  470 => 262,  467 => 261,  463 => 260,  459 => 259,  456 => 258,  452 => 256,  449 => 255,  443 => 251,  436 => 247,  431 => 245,  419 => 236,  409 => 229,  397 => 220,  394 => 219,  392 => 218,  389 => 217,  376 => 206,  370 => 203,  364 => 200,  358 => 197,  344 => 186,  338 => 183,  332 => 180,  326 => 177,  320 => 174,  314 => 171,  300 => 160,  294 => 157,  288 => 154,  282 => 151,  276 => 148,  270 => 145,  264 => 142,  258 => 139,  252 => 136,  246 => 133,  240 => 130,  226 => 119,  220 => 116,  214 => 113,  208 => 110,  202 => 107,  188 => 96,  174 => 85,  168 => 82,  154 => 71,  148 => 68,  136 => 59,  120 => 46,  115 => 44,  111 => 43,  104 => 39,  99 => 37,  92 => 33,  84 => 27,  82 => 26,  79 => 25,  74 => 22,  70 => 21,  66 => 20,  61 => 17,  59 => 16,  56 => 15,  51 => 12,  47 => 11,  43 => 10,  39 => 9,  32 => 5,  26 => 1,);
    }
}
