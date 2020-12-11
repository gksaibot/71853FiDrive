<<<<<<< HEAD
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
        $datos['acdescripcion']="";
        $datos['acicono']="";
        $datos['acfechainiciocompartir']=$fechaActual;
        $fecha=$datos['accantidadusada'];
        $datos['acefechafincompartir']= date("Y-m-d",strtotime($fechaActual."+ $fecha days"));
        //echo "accion-----------";
        //var_dump($datos);
        $objAbmACE= new AbmArchivoCargadoEstado();
        $objestadotipo=$objAbmACE->buscarUnEstadotipo($datos['id']);
        $datos['idestadotipos']=$objestadotipo['0']->getIdestadotipos();
        //echo "------------accion";
        //var_dump($datos);
        $resp= $obj->compartirArchivo($datos);
        if ($resp){
            echo "<h1>ARCHIVO COMPARTIDO EXITOSAMENTE</h1>";
        }
        else{
            echo "ALGO FALLO NO SE PUDO COMPARTIR EL ARCHIVO";
        }
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
=======
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
        $datos['acdescripcion']="";
        $datos['acicono']="";
        $datos['acfechainiciocompartir']=$fechaActual;
        $fecha=$datos['accantidadusada'];
        $datos['acefechafincompartir']= date("Y-m-d",strtotime($fechaActual."+ $fecha days"));
        //echo "accion-----------";
        //var_dump($datos);
        $objAbmACE= new AbmArchivoCargadoEstado();
        $objestadotipo=$objAbmACE->buscarUnEstadotipo($datos['id']);
        $datos['idestadotipos']=$objestadotipo['0']->getIdestadotipos();
        //echo "------------accion";
        //var_dump($datos);
        $resp= $obj->compartirArchivo($datos);
        if ($resp){
            echo "<h1>ARCHIVO COMPARTIDO EXITOSAMENTE</h1>";
        }
        else{
            echo "ALGO FALLO NO SE PUDO COMPARTIR EL ARCHIVO";
        }
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
</html>