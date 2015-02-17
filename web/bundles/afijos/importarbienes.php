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
        $agencia=$_POST['impagencia'];
        $canton=$_POST['impcanton'];
        $area=$_POST['imparea'];
        $cuenta=$_POST['impcuenta'];
        $plan=$_POST['implan'];
        $dependencia=$_POST['impdependencia'];        
        //echo $subtrans."  ".$canton;        
        // Llenamos el arreglo con los datos  del archivo xlsx        
        $nfilas=1;
        foreach ($objWorksheet->getRowIterator() as $row) {
            $nfilas++;
        }
        for($i=1;$i<$nfilas;$i++){
            //COMBOS
            $_DATOS_EXCEL[$i]['agencia'] =$agencia;
            $_DATOS_EXCEL[$i]['canton'] =$canton;
            $_DATOS_EXCEL[$i]['area'] =$area;
            $_DATOS_EXCEL[$i]['cuenta'] =$cuenta;
            $_DATOS_EXCEL[$i]['plan'] =$plan;
            $_DATOS_EXCEL[$i]['dependencia'] =$dependencia;
            //ACTIVOS
            $_DATOS_EXCEL[$i]['codigo'] = $objPHPExcel->getActiveSheet()->getCell('B' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['tipo_doc'] = $objPHPExcel->getActiveSheet()->getCell('K' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['numero_doc'] = $objPHPExcel->getActiveSheet()->getCell('L' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['fecha_doc'] = $objPHPExcel->getActiveSheet()->getCell('M' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['unidad_propiedad'] = $objPHPExcel->getActiveSheet()->getCell('N' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['bien_asegurable'] = $objPHPExcel->getActiveSheet()->getCell('Q' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['estado'] = $objPHPExcel->getActiveSheet()->getCell('W' . $i)->getCalculatedValue();
            //BIENES
            $_DATOS_EXCEL[$i]['descripcion'] = $objPHPExcel->getActiveSheet()->getCell('H' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['serie'] = $objPHPExcel->getActiveSheet()->getCell('I' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['marca'] = $objPHPExcel->getActiveSheet()->getCell('J' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['cedula_resp'] = $objPHPExcel->getActiveSheet()->getCell('O' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['nombre_resp'] = $objPHPExcel->getActiveSheet()->getCell('P' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['oficina'] = $objPHPExcel->getActiveSheet()->getCell('S' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['direccion'] = $objPHPExcel->getActiveSheet()->getCell('T' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['departamento'] = $objPHPExcel->getActiveSheet()->getCell('U' . $i)->getCalculatedValue();
            $_DATOS_EXCEL[$i]['seccion'] = $objPHPExcel->getActiveSheet()->getCell('V' . $i)->getCalculatedValue();
        }
        
        for ($i=1;$i<$nfilas;$i++) {            
            $sqlactivo="INSERT INTO activos (actv_id, udp_id, ag_id, ap_id, ctn_id, cc_id, dpto_id, dpd_id, "
                    . "actv_codigo, actv_etiqueta, actv_estado, actv_fecha_adquisicion, "
                    . "actv_tipo_documento, actv_numero_documento, actv_bien_asegurable, activo, pln_id, emp_id) "
                    . "VALUES ("
                    .$_DATOS_EXCEL[$i]['codigo'].",'"
                    .$_DATOS_EXCEL[$i]['unidad_propiedad']."',"
                    .$_DATOS_EXCEL[$i]['agencia'].","
                    .$_DATOS_EXCEL[$i]['area'].","
                    .$_DATOS_EXCEL[$i]['canton'].","
                    .$_DATOS_EXCEL[$i]['cuenta'].", '34','"
                    .$_DATOS_EXCEL[$i]['dependencia']."','"
                    .$_DATOS_EXCEL[$i]['codigo']."','"
                    .$_DATOS_EXCEL[$i]['codigo']."','"
                    .$_DATOS_EXCEL[$i]['estado']."','"
                    .$_DATOS_EXCEL[$i]['fecha_doc']."','"
                    .$_DATOS_EXCEL[$i]['tipo_doc']."','"
                    .$_DATOS_EXCEL[$i]['numero_doc']."','"
                    .$_DATOS_EXCEL[$i]['bien_asegurable']."', 'bienescustodio',"
                    .$_DATOS_EXCEL[$i]['plan']. ", '"
                    .$_DATOS_EXCEL[$i]['cedula_resp']."')";
            echo $sqlactivo;
            $result = mysqli_query($cn, $sqlactivo);
            if (!$result) {
                echo "Error al insertar activo ";// . $campo;
                $errores+=1;
            }     
        }
        
        for ($i=1;$i<$nfilas;$i++) {
            $sqlbienes="INSERT INTO bienes_custodio(actv_id, bc_descripcion, bc_marca, bc_seccion, bc_oficina, bc_direccion, "
                    . "bc_serie, bc_departamento) "
                    . "VALUES ("
                    .$_DATOS_EXCEL[$i]['codigo'].",'"
                    .$_DATOS_EXCEL[$i]['descripcion']."','"
                    .$_DATOS_EXCEL[$i]['marca']."','"
                    .$_DATOS_EXCEL[$i]['seccion']."','"
                    .$_DATOS_EXCEL[$i]['oficina']."','"
                    .$_DATOS_EXCEL[$i]['direccion']."','"          
                    .$_DATOS_EXCEL[$i]['serie']."','"
                    .$_DATOS_EXCEL[$i]['departamento']."')";           
                        
            $result2 = mysqli_query($cn, $sqlbienes);
            if (!$result2) {
                echo "Error al insertar bienes ";// . $campo;
                $errores2+=1;
            }     
        }
        //echo $i;
        header('Location: ' . getenv('HTTP_REFERER'));
    }
    //si por algo no cargo el archivo bak_ 
    else {
        echo "Necesitas primero importar el archivo";
    }
    $errores = 0;        
    $errores2 = 0;    
    
    echo "<strong><center>ARCHIVO IMPORTADO CON EXITO, EN TOTAL $i REGISTROS , $errores ERRORES DE ACTIVOS y  ERRORES DE BIENES</center></strong>";
    //una vez terminado el proceso borramos el archivo que esta en el servidor el bak_
    unlink($destino);
}
