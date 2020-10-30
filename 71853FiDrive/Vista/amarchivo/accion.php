<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
include_once '../estructura/cabeceraBT.php';
include_once '../../utiles/funciones.php';
include_once '../../Control/AbmArchivoCargado.php';
include_once '../../Control/AbmArchivoCargadoEstado.php';
include_once '../../Control/controlGral.php';
include_once '../../Modelo/archivoCargado.php';
include_once '../../Modelo/archivoCargadoEstado.php';
include_once '../../Modelo/estadoTipos.php';
include_once '../../Modelo/conector/BaseDatos.php';
include_once '../../Control/AbmEstadoTipos.php';
?>
<body>
<div class="container-fluid">    
    <?php
        $datos = data_submitted();
        $resp=false;
        $obj2=new AbmArchivoCargado();
        if ($_POST['clave']=='0'){ //alta de archivo
            $_POST['id']=null;
            $obj=new controlGral();
            $cargarArch=$obj->cargar_archivo($_FILES);
            $resp= $obj2->verificarAMarchivo($_POST);
        
        }
        else if ($_POST['clave']='1'){ //modificacion de archivo
            if($obj2->modificacion($datos)){
                $resp = true;
            }
        }
        if ($resp){
            echo "archivo cargado correctamente en la base de datos";
        }
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>