<?php
extract($_POST);
if (isset($_FILES['excel'])) {
    //cargamos el archivo al servidor con el mismo nombre
    //solo le agregue el sufijo bak_ 
    $archivo = $_FILES['excel']['name'];
    $tipo = $_FILES['excel']['type'];
    $destino = "bak_" . $archivo;
    if (copy($_FILES['excel']['tmp_name'], $destino)){
        echo "Archivo Cargado Con Éxito";
    }
    else{
        echo "Error Al Cargar el Archivo";
    }
    if (file_exists("bak_" . $archivo)) {
        /** Clases necesarias */
        require_once('Classes/PHPExcel.php');
        require_once('Classes/PHPExcel/Reader/Excel2007.php');
        // Cargando la hoja de cálculo
        $objReader = new PHPExcel_Reader_Excel2007();
        $objPHPExcel = $objReader->load("bak_" . $archivo);
        $objFecha = new PHPExcel_Shared_Date();
        // Asignar hoja de excel activa
        $objPHPExcel->setActiveSheetIndex(0);
        //conectamos con la base de datos 
        $cn = mysqli_connect("localhost", "afijos", "afijos","afijos") or die("ERROR EN LA CONEXION");
        $db = mysqli_select_db($cn,"afijos") or die("ERROR AL CONECTAR A LA BD");
        $objWorksheet=$objPHPExcel->getActiveSheet(); 
        //CAPTURAMOS LOS VALORES DE LOS COMBOS
        $subtrans=$_POST['importarsubtrans'];
        $canton=$_POST['importarcanton'];
        //echo $subtrans."  ".$canton;        
        // Llenamos el arreglo con los datos  del archivo xlsx        
        $nfilas=1;
        foreach ($objWorksheet->getRowIterator() as $row) {
            $nfilas++;
        }
        for($i=1;$i<$nfilas;$i++){
            //DATOS GENERALES
            $_DATOS_EXCEL[$i]['id_canton'] = $canton;
            $_DATOS_EXCEL[$i]['id_subtransmision'] = $subtrans;
            $_DATOS_EXCEL[$i]['etapa_funcional'] = $objPHPExcel->getActiveSheet()->getCell('E' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['posteria'] = $objPHPExcel->getActiveSheet()->getCell('F' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['codigo'] = $objPHPExcel->getActiveSheet()->getCell('G' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['voltaje'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['coord_este'] = $objPHPExcel->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['coord_norte'] = $objPHPExcel->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['tipo'] = $objPHPExcel->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['material'] = $objPHPExcel->getActiveSheet()->getCell('O' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['altura'] = $objPHPExcel->getActiveSheet()->getCell('P' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['fecha_fabric'] = $objPHPExcel->getActiveSheet()->getCell('Q' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['estado'] = $objPHPExcel->getActiveSheet()->getCell('R' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['obser'] = $objPHPExcel->getActiveSheet()->getCell('S' . $i)->getCalculatedValue();
            //ESTRUCTURA
            $_DATOS_EXCEL[$i]['tipo_estructura'] = $objPHPExcel->getActiveSheet()->getCell('T' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['nomb_estructura'] = $objPHPExcel->getActiveSheet()->getCell('U' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['estado_estructura'] = $objPHPExcel->getActiveSheet()->getCell('V' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['obser_estructura'] = $objPHPExcel->getActiveSheet()->getCell('W' . $i)->getCalculatedValue();
            //PUESTA TIERRA
            $_DATOS_EXCEL[$i]['tipo_ptierra'] = $objPHPExcel->getActiveSheet()->getCell('X' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['desc_ptierra'] = $objPHPExcel->getActiveSheet()->getCell('Y' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['calibre_ptierra'] = $objPHPExcel->getActiveSheet()->getCell('Z' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['estado_ptierra'] = $objPHPExcel->getActiveSheet()->getCell('AA' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['obser_ptierra'] = $objPHPExcel->getActiveSheet()->getCell('AB' . $i)->getCalculatedValue();
            //TENSOR
            $_DATOS_EXCEL[$i]['tipo_tensor'] = $objPHPExcel->getActiveSheet()->getCell('AC' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['cantidad_tensor'] = $objPHPExcel->getActiveSheet()->getCell('AD' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['calibre_tensor'] = $objPHPExcel->getActiveSheet()->getCell('AE' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['estado_tensor'] = $objPHPExcel->getActiveSheet()->getCell('AF' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['obser_tensor'] = $objPHPExcel->getActiveSheet()->getCell('AG' . $i)->getCalculatedValue();
            //CONDUCTOR FASE
            $_DATOS_EXCEL[$i]['longitud_cfase'] = $objPHPExcel->getActiveSheet()->getCell('AH' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['tipo_cfase'] = $objPHPExcel->getActiveSheet()->getCell('AI' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['mat_cfase'] = $objPHPExcel->getActiveSheet()->getCell('AJ' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['calibre_cfase'] = $objPHPExcel->getActiveSheet()->getCell('AK' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['estado_cfase'] = $objPHPExcel->getActiveSheet()->getCell('AL' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['obser_cfase'] = $objPHPExcel->getActiveSheet()->getCell('AM' . $i)->getCalculatedValue();
            //CABLE GUARDIA
            $_DATOS_EXCEL[$i]['longitud_cguardia'] = $objPHPExcel->getActiveSheet()->getCell('AN' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['tipo_cguardia'] = $objPHPExcel->getActiveSheet()->getCell('AO' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['mat_cguardia'] = $objPHPExcel->getActiveSheet()->getCell('AP' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['calibre_cguardia'] = $objPHPExcel->getActiveSheet()->getCell('AQ' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['estado_cguardia'] = $objPHPExcel->getActiveSheet()->getCell('AR' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['obser_cguardia'] = $objPHPExcel->getActiveSheet()->getCell('AS' . $i)->getCalculatedValue();          
        }
        
        for ($i=1;$i<$nfilas;$i++) {
            $sql="INSERT INTO lineas_subtransmision VALUES (NULL, "
                    .$_DATOS_EXCEL[$i]['id_canton'].","
                    . "'".$_DATOS_EXCEL[$i]['codigo']."',"
                    . "'".$_DATOS_EXCEL[$i]['coord_este']."',"
                    . "'".$_DATOS_EXCEL[$i]['coord_norte']."',"
                    . "'".$_DATOS_EXCEL[$i]['altura']."',"
                    .$_DATOS_EXCEL[$i]['fecha_fabric'].","
                    . "'".$_DATOS_EXCEL[$i]['estado']."',"
                    . "'".$_DATOS_EXCEL[$i]['obser']."',"
                    . "'".$_DATOS_EXCEL[$i]['nomb_estructura']."',"
                    . "'".$_DATOS_EXCEL[$i]['estado_estructura']."',"
                    . "'".$_DATOS_EXCEL[$i]['obser_estructura']."',"
                    . "'".$_DATOS_EXCEL[$i]['tipo_estructura']."',"
                    . "'".$_DATOS_EXCEL[$i]['estado_ptierra']."',"
                    . "'".$_DATOS_EXCEL[$i]['obser_ptierra']."',"
                    . "'".$_DATOS_EXCEL[$i]['cantidad_tensor']."',"
                    . "'".$_DATOS_EXCEL[$i]['estado_tensor']."',"
                    . "'".$_DATOS_EXCEL[$i]['obser_tensor']."',"
                    . "'".$_DATOS_EXCEL[$i]['longitud_cfase']."',"
                    . "'".$_DATOS_EXCEL[$i]['estado_cfase']."',"
                    . "'".$_DATOS_EXCEL[$i]['obser_cfase']."',"
                    . "'".$_DATOS_EXCEL[$i]['longitud_cguardia']."',"
                    . "'".$_DATOS_EXCEL[$i]['estado_cguardia']."',"
                    . "'".$_DATOS_EXCEL[$i]['obser_cguardia']."',"
                    . "'".$_DATOS_EXCEL[$i]['tipo_ptierra']."',"
                    . "'".$_DATOS_EXCEL[$i]['desc_ptierra']."',"
                    . "'".$_DATOS_EXCEL[$i]['calibre_ptierra']."',"
                    . "'".$_DATOS_EXCEL[$i]['tipo_tensor']."',"
                    . "'".$_DATOS_EXCEL[$i]['calibre_tensor']."',"
                    . "'".$_DATOS_EXCEL[$i]['tipo_cfase']."',"
                    . "'".$_DATOS_EXCEL[$i]['mat_cfase']."',"
                    . "'".$_DATOS_EXCEL[$i]['calibre_cfase']."',"
                    . "'".$_DATOS_EXCEL[$i]['tipo_cguardia']."',"
                    . "'".$_DATOS_EXCEL[$i]['mat_cguardia']."',"
                    . "'".$_DATOS_EXCEL[$i]['calibre_cguardia']."',"
                    . "'".$_DATOS_EXCEL[$i]['etapa_funcional']."',"
                    . "'".$_DATOS_EXCEL[$i]['voltaje']."',"
                    . "'".$_DATOS_EXCEL[$i]['posteria']."',"
                    . "'".$_DATOS_EXCEL[$i]['material']."',"
                    .$_DATOS_EXCEL[$i]['id_subtransmision'].","
                    . "'".$_DATOS_EXCEL[$i]['tipo']."')";
            
            //echo $sql;    
            $result = mysqli_query($cn,$sql);
            if (!$result) {
                echo "Error al insertar registro " . $campo;
                $errores+=1;
            }            
        }
        //echo $i;
        header('Location:' . getenv('HTTP_REFERER'));
    }
    //si por algo no cargo el archivo bak_ 
    else {
        echo "Necesitas primero importar el archivo";
    }
    $errores = 0;    
    
    echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $i REGISTROS Y $errores ERRORES</center></strong>";
    //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
    unlink($destino);
}
