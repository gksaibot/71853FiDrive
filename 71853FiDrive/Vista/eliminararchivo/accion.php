<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion de compartir archivo compartido</title>
</head>
<?php
include_once '../estructura/cabeceraBT.php';
include_once '../../configuracion.php';
?>
<body>
<div class="container-fluid">    
    <?php
        $datos=data_submitted();
        $fechaActual=date("Y-m-d");
        $obj=new AbmArchivoCargado();
        $datos['acicono']="";
        $datos['aclinkacceso']="";
        $datos['accantidadusada']="";
        $datos['accantidaddescarga']="";
        $datos['acfechainiciocompartir']=$fechaActual;
        $datos['acefechafincompartir']=null;
        $datos['acprotegidoclave']="";
        //echo "accion-----------";
        //print_r($datos);
        //echo "------------accion";
        
        $resp= $obj->verificarEliminarArchivo($datos,1);
        if ($resp){
            echo "<h1> Archivo eliminado exitosamente</h1>";
        }
        else{
            echo "<h1>Algo fallo en la eliminacion</h1>";
        }
        
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>