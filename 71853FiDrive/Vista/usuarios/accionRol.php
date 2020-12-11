<?php
include_once '../../configuracion.php';

$sesion=new Session();
error_reporting(0);


if ($sesion->esAdmin()){


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accion Alta Rol</title>
</head>
<?php
include_once '../estructura/cabeceraBT.php';
include_once '../../configuracion.php';
?>
<body>
<div class="container-fluid">    
    <?php
        $datos = data_submitted();
        $resp=false;
        $obj2=new AbmRol();
        
        //var_dump($datos);
        if (isset($datos)){ //deshabilito usuarios
            if ($obj2->altaRol($datos));
                $resp=true ;
        
        }
        if ($resp){
            echo "<h1>Rol cargado correctamente</h1>";
        }
        else{
            echo "<h1>No se pudo cargar el rol</h1>";
        }
        
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>
<?php
}
else{
    $NOVALIDA;
}
?>