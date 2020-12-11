<?php
include_once '../../configuracion.php';
$sesion=new Session();
error_reporting(0);

//$obj = new usuario();
//$losUsuarios =$obj->darUsuarios('');
if ($sesion->activa()){

?>

<?php
$objAbmTabla = new AbmArchivoCargado();
$datos = data_submitted();
//print_r($datos);//id es igual a 2
$obj =NULL;
    if (isset($datos['id'])){
        //echo "entro";
        $listaTabla = $objAbmTabla->buscarUnarchivoCargado($datos);
        if (count($listaTabla)==1){
            $obj= $listaTabla[0];
        }
    }

?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar archivo Compartido</title>

</head>
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<div class="container-fluid">
    <h1>Eliminar Archivo Compartido:</h1>
    <form class="form-group" method="POST" action="accion.php">
        <input id="id:" readonly name ="id" width="80" type="hidden" value="<?php echo $obj->getIdarchivocargado()?>"><br/>
        <div class="form-group">
                <label for="validationCustom1">Nombre:</label>
                <input type="text" readonly class="form-control col-md-3" id="validationCustom1" name="acnombre" value="<?php echo $obj->getAcnombre()?>">
        </div>
        <div class="form-group">
            Cantidad de veces que se compartio el archivo: <input type="number" readonly name="accantidaddescarga" value="<?php echo $obj->getAccantidaddescarga()?>" id="cant" class="form-control col-md-6">
        </div>
        <div class="form-group">
            Motivo de ya no compartir el archivo: <input type="text" name="acdescripcion" id="acdescripcion" class="form-control col-md-6" required>
        </div>
        
        <div>
            <label>Usuario: </label><br>
            <select name="idusuario" id="idusuario" required>
                    <option value="<?php echo $sesion->getIdusuario()?>" selected><?php echo $sesion->getUslogin() ?></option>
            </select><br><br>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    
    </form>

    
</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>
<?php
}
else{
    header($NOVALIDA);
    
}

?>