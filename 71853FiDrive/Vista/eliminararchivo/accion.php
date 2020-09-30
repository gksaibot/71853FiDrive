<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion de compartir archivo compartido</title>
</head>
<?php
include_once '../estructura/cabeceraBT.php';
include_once '../../Control/controlGral.php';
?>
<body>
<div class="container-fluid">    
    <?php

        $obj=new controlGral();
        $resp= $obj->verificarEliminarArchivo($_POST);
        echo $resp;
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>