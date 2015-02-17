<?php
//{{entity.codigoLSubtrans}}
$dir='c:/wamp/www/AFijos/web/bundles/afijos/lsubbundle/img/102-000580/';
$directorio=opendir($dir); 
//echo "<b>Directorio actual:</b><br>$dir<br>"; 
//echo "<b>Archivos:</b><br>"; 
while ($archivo = readdir($directorio)){    
    if($archivo == '.')
        //echo "<a href=\"?dir=.\">$archivo</a><br>"; 
        echo "";
    elseif($archivo == '..'){ 
        echo "";
        /*if($dir != '.'){ 
            $carpetas = split("/",$dir); 
            array_pop($carpetas); 
            $dir2 = join("/",$carpetas); 
            echo "<a href=\"?dir=$dir2\">$archivo</a><br>"; 
        } */
    }
    elseif(is_dir("$dir/$archivo"))
        echo "";
        //echo "<a href=\"?dir=$dir/$archivo\">$archivo</a><br>"; 
    else 
        echo '<a href="/AFijos/web/bundles/afijos/lsubbundle/img/102-000580/'.$archivo.'" data-rel="colorbox"><img src="/AFijos/web/bundles/afijos/lsubbundle/img/102-000580/'.$archivo.'" width="150px"/></a>';
}
closedir($directorio); 
?>