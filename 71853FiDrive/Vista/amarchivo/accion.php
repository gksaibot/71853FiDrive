<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $resp= $obj->verificarAMarchivo($_POST);
        echo $resp;
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>