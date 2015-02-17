<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="utf-8" />
                <title>Ver Imágenes | Activos Fijos</title>
                <link rel="icon" href="/afijos/web/cnel.ico">

                <meta name="description" content="responsive photo gallery using colorbox" />
                <meta name="viewport" content="width=device-width, initial-scale=1.0" />

                <!--basic styles-->

                <link href="/afijos/web/bundles/ace/assets/css/bootstrap.min.css" rel="stylesheet" />
                <link href="/afijos/web/bundles/ace/assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
                <link rel="stylesheet" href="/afijos/web/bundles/ace/assets/css/font-awesome.min.css" />

                <!--[if IE 7]>
                  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
                <![endif]-->

                <!--page specific plugin styles-->

                <link rel="stylesheet" href="/afijos/web/bundles/ace/assets/css/colorbox.css" />

                <!--fonts-->

                <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />

                <!--ace styles-->

                <link rel="stylesheet" href="/afijos/web/bundles/ace/assets/css/ace.min.css" />
                <link rel="stylesheet" href="/afijos/web/bundles/ace/assets/css/ace-responsive.min.css" />
                <link rel="stylesheet" href="/afijos/web/bundles/ace/assets/css/ace-skins.min.css" />

                <!--[if lte IE 8]>
                  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
                <![endif]-->

                <!--inline styles related to this page-->
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

        <body>            
                <div class="navbar">
                    <div class="navbar-inner">
                        <div class="container-fluid">
                            <a href="#" class="brand"><small><i class=""></i>Activos Fijos</small></a><!--/.brand-->
                                <ul class="nav ace-nav pull-right">
                                    <li class="light-blue">
                                        <a data-toggle="dropdown" href="" class="dropdown-toggle">
                                            <!--img class="nav-user-photo" src="{{asset('bundles/ace/assets/avatars/user.jpg')}}" alt="Jason's Photo"/-->
                                            <span class="user-info"><small>Bienvenido,</small>
                                                <div id="iduser"><?php echo $_GET["usa"]." ".$_GET["usn"];?></div>
                                            </span><i class="icon-caret-down"></i>
                                        </a>
                                        <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                                            <li><a href="#"><i class="icon-user"></i>Perfil</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#"><i class="icon-off"></i>Cerrar sesión</a></li>
                                        </ul>
                                    </li>
                                </ul><!--/.ace-nav-->
                        </div><!--/.container-fluid-->
                    </div><!--/.navbar-inner-->
                </div>
                <div class="main-container container-fluid">
                        <a class="menu-toggler" id="menu-toggler" href="#">
                                <span class="menu-text"></span>
                        </a>
<div class="sidebar" id="sidebar">
                <ul class="nav nav-list">
                    <li  id="mninicio">
                        <a href="http://localhost/AFijos/web/app_dev.php/index"><i class="icon-home"></i><span class="menu-text"> Página principal</span></a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-exchange"></i>
                            <span class="menu-text"> Líneas de Subtransmisión</span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        <ul class="submenu">
                            <li class="" id="mnlevant">
                                    <a href="#" class="dropdown-toggle">
                                            <i class="icon-double-angle-right"></i>
                                            Levantamiento Geográfico
                                            <b class="arrow icon-angle-down"></b>
                                    </a>

                                    <ul class="submenu" id="sbsubtrans">   
                                        
                                    </ul>
                            </li>
                            
                            <li>
                                    <a href="#" class="dropdown-toggle">
                                            <i class="icon-double-angle-right"></i>
                                            Valoración económica
                                            <b class="arrow icon-angle-down"></b>
                                    </a>

                                    <ul class="submenu">
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i ></i>
                                                            Base de datos Materiales
                                                    </a>
                                            </li>
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i ></i>
                                                            Materiales y precios de estructuras
                                                    </a>
                                            </li>                                            
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i></i>
                                                            Codificación unidades de obra constructiva
                                                    </a>
                                            </li>
                                            
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i ></i>
                                                            Equipos y Herramientas
                                                    </a>
                                            </li>
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i ></i>
                                                            Transporte Postes y Torres
                                                    </a>
                                            </li>
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i ></i>
                                                            Salario-Personal subtransmisión
                                                    </a>
                                            </li>
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i ></i>
                                                            Grupos de trabajo en subtrasnsmisión                                                            
                                                    </a>
                                            </li>                                            
                                            <li id="mnitem1">
                                                    <a href="#">
                                                            <i ></i>
                                                            Valoración de las líneas del sistema
                                                    </a>
                                            </li>
                                            <li>
                                                    <a href="#" class="dropdown-toggle">
                                                            <i class="icon-pencil"></i>
                                                            Resumen final
                                                            <b class="arrow icon-angle-down"></b>
                                                    </a>

                                                    <ul class="submenu">
                                                            <li id="mnagregar">
                                                                    <a href="#">
                                                                            <i class="icon-plus"></i>
                                                                            Add Product
                                                                    </a>
                                                            </li>

                                                            <li id="mnver">
                                                                    <a href="#">
                                                                            <i class="icon-eye-open"></i>
                                                                            View Products
                                                                    </a>
                                                            </li>
                                                    </ul>
                                            </li>
                                    </ul>
                            </li>
                            <li id="">
                                <a href="#"><i class="icon-double-angle-right"></i> Opción 1</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-bolt"></i>
                            <span class="menu-text"> Subestaciones</span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        <ul class="submenu" id="sbsubest">
                            
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-group"></i>
                            <span class="menu-text"> Bienes en Custodio</span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        <ul class="submenu">
                            <li id="">
                                <a href="#"><i class="icon-double-angle-right"></i> Opción 1</a>
                            </li>
                        </ul>
                    </li>
                    <li  id="mncatalogo">
                        <a href=""><i class="icon-picture"></i><span class="menu-text"> Catálogo </span></a>
                    </li>
                    <li>
                        <a href="#" class="dropdown-toggle"><i class="icon-cogs"></i>
                            <span class="menu-text"> Configuración</span>
                            <b class="arrow icon-angle-down"></b>
                        </a>
                        <ul class="submenu">
                            <li id="mnprovincias">
                                <a href="/AFijos/web/app.php/lsub/provincia/"><i class="icon-double-angle-right"></i> Provincias</a>
                            </li>
                            <li id="mncantones">
                                <a href="/AFijos/web/app.php/lsub/canton/"><i class="icon-double-angle-right"></i> Cantones</a>
                            </li>
                            <li id="mnsubtransmisiones">
                                <a href="/AFijos/web/app.php/lsub/subtransmision/"><i class="icon-double-angle-right"></i> Líneas de Subtransmisión</a>
                            </li>
                            <li id="mnsubestaciones">
                                <a href="/AFijos/web/app.php/lsub/subestacion/"><i class="icon-double-angle-right"></i> Subestaciones</a>
                            </li>
                            <li id="mndepartamentos">
                                <a href="#"><i class="icon-double-angle-right"></i> Departamentos</a>
                            </li>
                            <li id="mnempleados">
                                <a href="#"><i class="icon-double-angle-right"></i> Empleados</a>
                            </li>
                        </ul>
                    </li>
                </ul><!--/.nav-list-->
                <div class="sidebar-collapse" id="sidebar-collapse">
                    <i class="icon-double-angle-left"></i>
                </div>
            </div>
                        <div class="main-content">
                                <div class="breadcrumbs" id="breadcrumbs">
                                        <ul class="breadcrumb">
                                                <li>
                                                        <i class="icon-home home-icon"></i>
                                                        <a href="#">Home</a>

                                                        <span class="divider">
                                                                <i class="icon-angle-right arrow-icon"></i>
                                                        </span>
                                                </li>
                                                <li class="active">Gallery</li>
                                        </ul><!--.breadcrumb-->

                                        <div class="nav-search" id="nav-search">
                                        </div><!--#nav-search-->
                                </div>

                                <div class="page-content">
                                        <div class="page-header position-relative">
                                                <h1>
                                                        Gallery
                                                        <small>
                                                                <i class="icon-double-angle-right"></i>
                                                                responsive photo gallery using colorbox
                                                        </small>
                                                </h1>
                                        </div><!--/.page-header-->

                                        <div class="row-fluid">
                                                <div class="span12">
                                                        <!--PAGE CONTENT BEGINS-->

                                                        <div class="row-fluid">
                                                                <ul class="ace-thumbnails">
                                                                        <?php
                                                                        $modulo=$_GET["md"];
                                                                        if($modulo=='ls')$modulo="lineas_subtransmision";
                                                                        if($modulo=='s')$modulo="subestaciones";
                                                                        if($modulo=='bc')$modulo="bienes_custodio";
                                                                        $codigo=$_GET["co"];
                                                                        $dir='galeria/'.$modulo.'/'.$codigo.'/';
                                                                        if (@opendir($dir) === false)
                                                                            echo "No se han encontrado imagenes para este ítem..!";
                                                                        else{
                                                                            $directorio=opendir($dir); 
                                                                            while ($archivo = readdir($directorio)){    
                                                                                if($archivo == '.')echo "";
                                                                                elseif($archivo == '..')echo "";
                                                                                elseif(is_dir("$dir/$archivo"))echo "";
                                                                                else echo '<li><a href="'.$dir.$archivo.'" data-rel="colorbox"><img src="'.$dir.$archivo.'" width="150px"/></a></li>';
                                                                            }
                                                                            closedir($directorio); 
                                                                        }
                                                                        ?>
                                                                </ul>
                                                        </div><!--PAGE CONTENT ENDS-->
                                                </div><!--/.span-->
                                        </div><!--/.row-fluid-->
                                </div><!--/.page-content-->
                        </div><!--/.main-content-->
                </div><!--/.main-container-->

                <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
                        <i class="icon-double-angle-up icon-only bigger-110"></i>
                </a>

                <!--basic scripts-->

                <!--[if !IE]>-->

                <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>

                <!--<![endif]-->

                <!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

                <!--[if !IE]>-->

                <script type="text/javascript">
                        window.jQuery || document.write("<script src='/afijos/web/bundles/ace/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
                </script>

                <!--<![endif]-->

                <!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

                <script type="text/javascript">
                        if("ontouchend" in document) document.write("<script src='/afijos/web/bundles/ace/assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
                </script>
                <script src="/afijos/web/bundles/ace/assets/js/bootstrap.min.js"></script>

                <!--page specific plugin scripts-->

                <script src="/afijos/web/bundles/ace/assets/js/jquery.colorbox-min.js"></script>

                <!--ace scripts-->

                <script src="/afijos/web/bundles/ace/assets/js/ace-elements.min.js"></script>
                <script src="/afijos/web/bundles/ace/assets/js/ace.min.js"></script>

                <!--inline scripts related to this page-->

                <script type="text/javascript">
                        $(function() {
                        var colorbox_params = {
                                reposition:true,
                                scalePhotos:true,
                                scrolling:false,
                                previous:'<i class="icon-arrow-left"></i>',
                                next:'<i class="icon-arrow-right"></i>',
                                close:'&times;',
                                current:'{current} of {total}',
                                maxWidth:'100%',
                                maxHeight:'100%',
                                onOpen:function(){
                                        document.body.style.overflow = 'hidden';
                                },
                                onClosed:function(){
                                        document.body.style.overflow = 'auto';
                                },
                                onComplete:function(){
                                        $.colorbox.resize();
                                }
                        };

                        $('.ace-thumbnails [data-rel="colorbox"]').colorbox(colorbox_params);
                        $("#cboxLoadingGraphic").append("<i class='icon-spinner orange'></i>");//let's add a custom loading icon
                })
                </script>
        </body>
</html>