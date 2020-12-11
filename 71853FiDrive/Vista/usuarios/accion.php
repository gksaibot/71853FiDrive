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
    <title>Accion Modificar Usuario</title>
</head>
<?php
include_once '../estructura/cabeceraBT.php';
include_once '../../configuracion.php';
?>
<body>
<div class="container-fluid">    
    <?php
        $datos = data_submitted();
        $resp1=false;
        $resp2=false;
        $resp3=false;
        $obj2=new AbmUsuario();
        
        
        if ($datos['accion']=='eliminar'){ //deshabilito usuarios
            $datos['usactivo']='0';
            $datos['usnombre']='';
            $datos['usapellido']='';
            $datos['uslogin']='';
            $datos['usclave']='';
            if ($obj2->modificarUsuarioActivo($datos));
                $resp1=true ;
                if ($resp1){
                    echo "<h1>Usuario deshabilitado</h1>";
                }
                else{
                    echo "<h1>No se pudo deshabilitar el usuario</h1>";
                }
                        
        }
        if ($datos['accion']=='habilitar'){ //deshabilito usuarios
            $datos['usactivo']='1';
            $datos['usnombre']='';
            $datos['usapellido']='';
            $datos['uslogin']='';
            $datos['usclave']='';
            if ($obj2->modificarUsuarioActivo($datos));{
                $resp2=true ;
                if ($resp2){
                    echo "<h1>Usuario habilitado</h1>";
                }
                else{
                    echo "<h1>No se pudo habilitar el usuario</h1>";
                }
            }
        }
        if ($datos['accion']=='editar'){ //modificacion de archivo
            //var_dump($datos);
            if($obj2->modificacion($datos)){
                $resp3= true;
                if ($resp3){
                    echo "<h1>El usuario fue modificado exitosamente</h1>";
                }
                else{
                    echo "<h1>No se pudo modificar el usuario</h1>";
                }
            }
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