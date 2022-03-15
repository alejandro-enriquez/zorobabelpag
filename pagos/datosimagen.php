<?php
// reibe los datos de los pagos
    $nombre_imagen=$_FILES['imagen'] ['name'];

    $tipo_imagen=$_FILES['imagen'] ['type'];

    $tamango_imagen=$_FILES['imagen'] ['size'];


//echo $FILES['imagen'] ['size'];     mostrar el tamaño del archivo

    if($tamango_imagen<=1000000){
        
        if($tipo_imagen=="image/jpeg"|| $tipo_imagen=="image/jpg"|| $tipo_imagen=="image/png"|| $tipo_imagen=="image/gif"){

        $carpeta_destino=$_SERVER['DOCUMENT_ROOT']. '/diseñoweb/pagos/recibodepago/'; //Ruta de la carpeta destino donde llegan las imgs
        move_uploaded_file($_FILES['imagen'] ['tmp_name'], $carpeta_destino.$nombre_imagen);} //movemos la imagen del directorio temporal al directorio elegido
        else{
            echo "Solo se admite imagenes formato jpeg/jpg/png/gif";
        }

    } else{
        echo "el tamaño es muy grande";
    }

?>
