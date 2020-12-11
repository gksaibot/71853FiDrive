<<<<<<< HEAD
<?php
include_once '../../configuracion.php';
//$obj = new usuario();
//$losUsuarios =$obj->darUsuarios('');
$sesion=new Session();
error_reporting(0);
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

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Modificar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<h2>Alta, Modificacion de archivos:</h2><br>
<div class="container-fluid">
	<?php if ($obj!=null){?>
		<form method="post" action="accion.php">
			<!--<label>ID</label><br/>-->
			<input id="id:" readonly name ="id" width="80" type="hidden" value="<?php echo $obj->getIdarchivocargado()?>"><br/>
		<div class="form-group">
			<label>Nombre:</label><br/>
			<input type="text" class="form-control col-md-3" id="acnombre" name="acnombre" value="<?php echo $obj->getAcnombre()?>" required>
		</div>
		<div class="form-group">
				Descripcion: <textarea name="acdescripcion" class="ckeditor" cols="30" rows="10"><?php echo $obj->getAcdescripcion() ?></textarea>
		</div>
		
		<div class="form-group">
        
            <label>Usuario: </label><br>
            <select name="idusuario" id="idusuario" required>
            <option value="<?php echo $sesion->getIdusuario()?>" selected><?php echo $sesion->getUslogin() ?></option>
            </select><br>
            
            <!--<label>Usuario: </label><br>
            <select name="idusuario" id="idusuario" required>
                <option value="" disable selected>Elija una opcion:</option>
                <?php foreach ($losUsuarios as $unUsuario) {?>
                <option value="<?php echo $unUsuario->getIdusuario()?>"><?php echo $unUsuario->getUsnombre()?></option>    
                <?php }?>
            </select><br><br>-->
        </div><br>
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
            <input type="hidden" readonly id="clave" name="clave" class="form control col-md-4" value="1">
        </div>
        
        <div class="form-group">
			<input id="accion" name ="accion" value="editar" type="hidden">
			<input type="submit">
        </div>
	
		</form>
</div>
<?php 
}else {
    
    echo "<p>No se encontro la clave que desea modificar";
}?>
<br><br>
<a href="../contenido/contenido.php">Volver</a>
<?php
include_once '../estructura/pieBT.php';
?>
</body>
</html>
<?php
}
else{
    header($NOVALIDA);
    
}

=======
<?php
include_once '../../configuracion.php';
//$obj = new usuario();
//$losUsuarios =$obj->darUsuarios('');
$sesion=new Session();
error_reporting(0);
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

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Modificar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<h2>Alta, Modificacion de archivos:</h2><br>
<div class="container-fluid">
	<?php if ($obj!=null){?>
		<form method="post" action="accion.php">
			<!--<label>ID</label><br/>-->
			<input id="id:" readonly name ="id" width="80" type="hidden" value="<?php echo $obj->getIdarchivocargado()?>"><br/>
		<div class="form-group">
			<label>Nombre:</label><br/>
			<input type="text" class="form-control col-md-3" id="acnombre" name="acnombre" value="<?php echo $obj->getAcnombre()?>" required>
		</div>
		<div class="form-group">
				Descripcion: <textarea name="acdescripcion" class="ckeditor" cols="30" rows="10"><?php echo $obj->getAcdescripcion() ?></textarea>
		</div>
		
		<div class="form-group">
        
            <label>Usuario: </label><br>
            <select name="idusuario" id="idusuario" required>
            <option value="<?php echo $sesion->getIdusuario()?>" selected><?php echo $sesion->getUslogin() ?></option>
            </select><br>
            
            <!--<label>Usuario: </label><br>
            <select name="idusuario" id="idusuario" required>
                <option value="" disable selected>Elija una opcion:</option>
                <?php foreach ($losUsuarios as $unUsuario) {?>
                <option value="<?php echo $unUsuario->getIdusuario()?>"><?php echo $unUsuario->getUsnombre()?></option>    
                <?php }?>
            </select><br><br>-->
        </div><br>
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
            <input type="hidden" readonly id="clave" name="clave" class="form control col-md-4" value="1">
        </div>
        
        <div class="form-group">
			<input id="accion" name ="accion" value="editar" type="hidden">
			<input type="submit">
        </div>
	
		</form>
</div>
<?php 
}else {
    
    echo "<p>No se encontro la clave que desea modificar";
}?>
<br><br>
<a href="../contenido/contenido.php">Volver</a>
<?php
include_once '../estructura/pieBT.php';
?>
</body>
</html>
<?php
}
else{
    header($NOVALIDA);
    
}

>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
?>