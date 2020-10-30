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
include_once '../../Control/AbmArchivoCargado.php';
include_once '../../Modelo/archivoCargado.php';
include_once '../../Modelo/usuario.php';
include_once '../../Modelo/conector/BaseDatos.php';
?>
<body>
<div class="container-fluid">    
    <?php

        $datos=data_submitted();
        echo"##";
        print_r($_POST);
        echo "##";
        $obj=new AbmArchivoCargado();
        //print_r($datos);
        $resp= $obj->compartirArchivo($datos);
        
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>