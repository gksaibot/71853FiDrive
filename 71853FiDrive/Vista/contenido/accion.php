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

        //$datos=data_submitted();
        //var_dump($_POST);
        
        $obj=new controlGral();
        $resp= $obj->crearCarpeta($_POST);
        echo $resp;
        ?>
        <a class='nav-link' href='/PWD2020/71853FiDrive/Vista/contenido/contenido.php'><i class="fas fa-long-arrow-alt-left"></i>   Volver atras al Contenido</a>
    

</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>



