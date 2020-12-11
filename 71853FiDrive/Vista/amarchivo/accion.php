<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        $obj2=new AbmArchivoCargado();
        $datos['aclinkacceso']=0;
        $datos['accantidaddescarga']=0;
        $datos['accantidadusada']=0;
        $datos['acfechainiciocompartir']=null;
        $datos['acefechafincompartir']=null;
        $datos['acprotegidoclave']=0;
        
        //var_dump($datos);
        if ($datos['clave']=='0'){ //alta de archivo
            $datos['id']=null;
            $obj=new controlGral();
            $cargarArch=$obj->cargar_archivo($_FILES);
            
            $resp= $obj2->verificarAMarchivo($datos);
        
        }
        else if ($datos['clave']='1'){ //modificacion de archivo
            if($obj2->modificacion($_POST)){
                $resp = true;
            }
        }
        if ($resp){
            echo "<h1>ARCHIVO CARGADO EXITOSAMENTE</h1>";
        }
        else{
            echo "<h1>NO SE PUDO CARGAR EL ARCHIVO</h1>";
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
    <title>Document</title>
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
        $obj2=new AbmArchivoCargado();
        $datos['aclinkacceso']=0;
        $datos['accantidaddescarga']=0;
        $datos['accantidadusada']=0;
        $datos['acfechainiciocompartir']=null;
        $datos['acefechafincompartir']=null;
        $datos['acprotegidoclave']=0;
        
        //var_dump($datos);
        if ($datos['clave']=='0'){ //alta de archivo
            $datos['id']=null;
            $obj=new controlGral();
            $cargarArch=$obj->cargar_archivo($_FILES);
            
            $resp= $obj2->verificarAMarchivo($datos);
        
        }
        else if ($datos['clave']='1'){ //modificacion de archivo
            if($obj2->modificacion($_POST)){
                $resp = true;
            }
        }
        if ($resp){
            echo "<h1>ARCHIVO CARGADO EXITOSAMENTE</h1>";
        }
        else{
            echo "<h1>NO SE PUDO CARGAR EL ARCHIVO</h1>";
        }
    ?>


</div>


</body>
<?php
include_once '../estructura/pieBT.php';
?>
>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
</html>