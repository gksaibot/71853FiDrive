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
        $datos['acfechainiciocompartir']=$fechaActual;
        $datos['acefechafincompartir']=null;
        $datos['acprotegidoclave']="";
        //echo "accion-----------";
        //print_r($datos);
        //echo "------------accion";
        
        $resp= $obj->verificarEliminarCompartirarchivo($datos,2);
        
        if ($resp){
            echo "<h1>El archivo se dejo de compartir</h1>";
        }
        else{
            echo "<h1>No se pudo dejar de compartir</h1>";
        }
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>