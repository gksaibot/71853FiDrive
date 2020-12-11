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
    <title>Accion Alta Usuario</title>
</head>
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<div class="container-fluid">    
    <?php
        $datos = data_submitted();
        $resp=false;
        $obj2=new AbmUsuario();
        
        //var_dump($datos);
        if (isset($datos)){ //deshabilito usuarios
            if ($obj2->altaUsuario($datos));
                $resp=true ;
        
        }
        if ($resp){
            echo "<h1>Usuario cargado correctamente</h1>";
        }
        else{
            echo "<h1>No se pudo cargar el usuario</h1>";
        }

        
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>
<?php
}else{
    $NOVALIDA;
}
?>