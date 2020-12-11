<<<<<<< HEAD
<?php
include_once '../../configuracion.php';

$sesion=new Session();
error_reporting(0);
if ($sesion->activa()){;
//$sesion->session__started();
/*$obj = new usuario();
$losUsuarios =$obj->darUsuarios('');
$comboUsuario = "";
if(!$losUsuarios){
    exit("Error al consultar los usuarios");
 }else{
    echo "entro";
    $comboUsuario = "<select name='usuario' required>"; //Abrimos el SELECT
    $comboUsuario .= "<option value='-1'>Seleccionar...</option>";
    foreach ($losUsuarios as $unUsuario) {
      $comboUsuario.="<option value='".$unUsuario->getIdusuario()."'>".$unUsuario->getUsnombre()."</option>";
      //$comboIdUsuario.=
    }
    $comboUsuario .="</select>"; //Cerramos el Select
  }*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta, modificacion de archivo</title>
    <!--<script src="https://kit.fontawesome.com/7eaf632f42.js" crossorigin="anonymous"></script>-->
    
</head>
<?php
include_once '../estructura/cabeceraBT.php';


?>
<body>
<div class="container-fluid">
    <h2>Alta, Modificacion de archivos:</h2><br>
    
    
    <form class="amarchivo" name="amarchivo" method="POST" data-toggle="validator" action="accion.php" enctype="multipart/form-data">
    
            <input type="file" name="miArchivo" id="miArchivo"><br><br>      
            
    
    
        <div class="form-group">
                <label for="validationCustom1">Nombre:</label>
                <input type="text" class="form-control col-md-3" id="acnombre" name="acnombre" value="1234.png" required>
        </div>
        <div class="valid-feedback">Muy Bien
            </div>

        <div class="form-group">
            Descripcion: <textarea name="acdescripcion" class="ckeditor" cols="30" rows="10"><?php echo "Esta es una descripcion generica, si lo necesita la puede cambiar." ?></textarea>
        </div>
        
        <div>
            <label>Usuario: </label><br>
            <select name="idusuario" id="idusuario">
                <option value="<?php echo $sesion->getIdusuario()?>" selected><?php echo $sesion->getUslogin() ?></option>
            </select><br>
            <!--<label>Usuario: </label><br>
            <select name="idusuario" id="idusuario" required>
                <option value="" disable selected>Elija una opcion:</option>
                <?php //foreach ($losUsuarios as $unUsuario) {?>
                <option value="<?php //echo $unUsuario->getIdusuario()?>"><?php //echo $unUsuario->getUsnombre()?></option>    
                <?php //}?>
            </select><br><br>-->
        </div>
        <div>
            <label for="">Seleccione icono que se va a utilizar:</label><br>
            
            <label><input class="tipo" type="radio" name="acicono" value="imagen">  <i class="far fa-image"></i> Imagen</label>
            <label><input class="tipo" type="radio" name="acicono" value="zip">  <i class="far fa-file-archive"></i> Zip</label>
            <label><input class="tipo" type="radio" name="acicono" value="doc">  <i class="far fa-file-word"></i> Doc</label>
            <label><input class="tipo" type="radio" name="acicono" value="pdf">  <i class="far fa-file-pdf"></i> Pdf</label>
            <label><input class="tipo" type="radio" name="acicono" value="xls">  <i class="far fa-file-excel"></i> Xls</label>
        </div><br>
        <div class="form-group">
            <!--<label for="">Ingrese una contraseña:</label>-->
            <input type="hidden" id="clave" name="clave" class="form control col-md-4" value="0">
        </div>
        <div class="form-group">
            <input id="accion" name ="accion" value="alta" type="hidden">
			<input type="submit">
        </div>
    
    </form>
</div>
</body>
<!--<script>
$('form').submit(function(e){
    // si la cantidad de checkboxes "chequeados" es cero,
    // entonces se evita que se envíe el formulario y se
    // muestra una alerta al usuario
    if ($('input[type=checkbox]:checked').length === 0) {
        e.preventDefault();
        alert('Debe seleccionar al menos un valor del checkbox');
    }
});

</script>-->
<?php
include_once '../estructura/pieBT.php';
?>
</html>
<?php 
}
else{
    header($NOVALIDA);
    
}

=======
<?php
include_once '../../configuracion.php';

$sesion=new Session();
error_reporting(0);
if ($sesion->activa()){;
//$sesion->session__started();
/*$obj = new usuario();
$losUsuarios =$obj->darUsuarios('');
$comboUsuario = "";
if(!$losUsuarios){
    exit("Error al consultar los usuarios");
 }else{
    echo "entro";
    $comboUsuario = "<select name='usuario' required>"; //Abrimos el SELECT
    $comboUsuario .= "<option value='-1'>Seleccionar...</option>";
    foreach ($losUsuarios as $unUsuario) {
      $comboUsuario.="<option value='".$unUsuario->getIdusuario()."'>".$unUsuario->getUsnombre()."</option>";
      //$comboIdUsuario.=
    }
    $comboUsuario .="</select>"; //Cerramos el Select
  }*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta, modificacion de archivo</title>
    <!--<script src="https://kit.fontawesome.com/7eaf632f42.js" crossorigin="anonymous"></script>-->
    
</head>
<?php
include_once '../estructura/cabeceraBT.php';


?>
<body>
<div class="container-fluid">
    <h2>Alta, Modificacion de archivos:</h2><br>
    
    
    <form class="amarchivo" name="amarchivo" method="POST" data-toggle="validator" action="accion.php" enctype="multipart/form-data">
    
            <input type="file" name="miArchivo" id="miArchivo"><br><br>      
            
    
    
        <div class="form-group">
                <label for="validationCustom1">Nombre:</label>
                <input type="text" class="form-control col-md-3" id="acnombre" name="acnombre" value="1234.png" required>
        </div>
        <div class="valid-feedback">Muy Bien
            </div>

        <div class="form-group">
            Descripcion: <textarea name="acdescripcion" class="ckeditor" cols="30" rows="10"><?php echo "Esta es una descripcion generica, si lo necesita la puede cambiar." ?></textarea>
        </div>
        
        <div>
            <label>Usuario: </label><br>
            <select name="idusuario" id="idusuario">
                <option value="<?php echo $sesion->getIdusuario()?>" selected><?php echo $sesion->getUslogin() ?></option>
            </select><br>
            <!--<label>Usuario: </label><br>
            <select name="idusuario" id="idusuario" required>
                <option value="" disable selected>Elija una opcion:</option>
                <?php //foreach ($losUsuarios as $unUsuario) {?>
                <option value="<?php //echo $unUsuario->getIdusuario()?>"><?php //echo $unUsuario->getUsnombre()?></option>    
                <?php //}?>
            </select><br><br>-->
        </div>
        <div>
            <label for="">Seleccione icono que se va a utilizar:</label><br>
            
            <label><input class="tipo" type="radio" name="acicono" value="imagen">  <i class="far fa-image"></i> Imagen</label>
            <label><input class="tipo" type="radio" name="acicono" value="zip">  <i class="far fa-file-archive"></i> Zip</label>
            <label><input class="tipo" type="radio" name="acicono" value="doc">  <i class="far fa-file-word"></i> Doc</label>
            <label><input class="tipo" type="radio" name="acicono" value="pdf">  <i class="far fa-file-pdf"></i> Pdf</label>
            <label><input class="tipo" type="radio" name="acicono" value="xls">  <i class="far fa-file-excel"></i> Xls</label>
        </div><br>
        <div class="form-group">
            <!--<label for="">Ingrese una contraseña:</label>-->
            <input type="hidden" id="clave" name="clave" class="form control col-md-4" value="0">
        </div>
        <div class="form-group">
            <input id="accion" name ="accion" value="alta" type="hidden">
			<input type="submit">
        </div>
    
    </form>
</div>
</body>
<!--<script>
$('form').submit(function(e){
    // si la cantidad de checkboxes "chequeados" es cero,
    // entonces se evita que se envíe el formulario y se
    // muestra una alerta al usuario
    if ($('input[type=checkbox]:checked').length === 0) {
        e.preventDefault();
        alert('Debe seleccionar al menos un valor del checkbox');
    }
});

</script>-->
<?php
include_once '../estructura/pieBT.php';
?>
</html>
<?php 
}
else{
    header($NOVALIDA);
    
}

>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
 ?>