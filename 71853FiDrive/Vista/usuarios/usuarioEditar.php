<?php
include_once '../../configuracion.php';


$obj = new Abmrol();
$losRoles =$obj->buscarRoles('');


$sesion=new Session();
error_reporting(0);

if ($sesion->esAdmin()){


?>
<?php
$objAbmTabla = new AbmUsuario();
$datos = data_submitted();
//print_r($datos);//id es igual a 2
$obj =NULL;
    if (isset($datos['id'])){
        //echo "entro";
        $listaTabla = $objAbmTabla->buscarUnUsuario($datos);
        if (count($listaTabla)==1){
            $obj= $listaTabla[0];
        }
    }

?>	

	
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/all.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    
    <!-- Javascript JS -->
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="../js/bootstrapValidator.js"></script>-->
    <script type="text/javascript" src="../js/validator.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    
    <!--Links de iconos fontawesome-->
    <script src="https://kit.fontawesome.com/5ac3481a85.js" crossorigin="anonymous"></script>
    <!--Plugins (archivos)-->
    <link rel="stylesheet" href="../css/strength.css">
    <script src="../js/password_strength.js"></script>
    <script src="../js/jquery-strength.js"></script> 

<title>Modificar</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<h2>Modificacion de Usuario:</h2><br>
<div class="container-fluid">
	<?php if ($obj!=null){?>
		<form method="post" action="accion.php">
			<!--<label>ID</label><br/>-->
			<input id="id:" readonly name ="idusuario" width="80" type="hidden" value="<?php echo $obj->getIdusuario()?>"><br/>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="usnombre" name="usnombre" value="<?php echo $obj->getUsnombre()?>" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputapellido">Apellido</label>
                        <input type="text" class="form-control" id="usapellido" name="usapellido" value="<?php echo $obj->getUsapellido()?>" required>
                    </div>
            </div>
            <div class="form-row">
            <div class="form-group col-md-6">
                        <label for="inputapellido">Usuario</label>
                        <input type="text" class="form-control" id="uslogin" name="uslogin" value="<?php echo $obj->getUslogin()?>" required>
                    </div>
                <div class="form-group col-md-6">
                        <label for="validationCustom2">Contraseña:</label>
                        <input type="password" class="form-control col-md-6 check-seguridad" onchange="return validatePassword()" name="usclave" id="usclave" value="<?php echo $obj->getUsclave()?>">
                </div>
                <div>
                <label>Rol: </label><br>
                <select name="idrol" id="idrol" required>
                    <option value="" disable selected>Elija una opcion:</option>
                    <?php foreach ($losRoles as $unRol) {?>
                    <option value="<?php echo $unRol->getIdrol()?>"><?php echo $unRol->getRodescripcion()?></option>    
                    <?php }?>
                </select><br><br>
            </div>
            </div>
            
        
            <div class="form-group">
                <input id="accion" name ="accion" value="editar" type="hidden">
                <input id="usactivo" name ="usactivo" value="1" type="hidden">
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
    $NOVALIDA;
}
?>

