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
    <h2>Alta, Modificacion de archivo:</h2><br>
    
    
    <form class="amarchivo" name="amarchivo" method="POST" data-toggle="validator" action="accion.php" enctype="multipart/form-data">
    
            <input type="file" name="miArchivo" id="miArchivo"><br><br>      
            
    
    
        <div class="form-group">
                <label for="validationCustom1">Nombre:</label>
                <input type="text" class="form-control col-md-3" id="nombre" name="nombre" value="1234.png" required>
        </div>
        <div class="valid-feedback">Muy Bien
            </div>

        <div class="form-group">
            Descripcion: <textarea name="desc" class="ckeditor" cols="30" rows="10"><?php echo "Esta es una descripcion generica, si lo necesita la puede cambiar." ?></textarea>
        </div>
        
        <div>
            <label>Usuario: </label><br>
            <select name="usuario" id="usuario" required>
                <option value="" disable selected>Seleccione un operacion</option>
                <option value="admin">Admin</option>
                <option value="visitante">Visitante</option>
                <option value="Root">Root</option>
            </select><br><br>
        </div>
        <div>
            <label for="">Seleccione icono que se va a utilizar:</label><br>
            
            <label><input class="tipo" type="checkbox" name="tipo1" value="imagen">  <i class="far fa-image"></i> Imagen</label>
            <label><input class="tipo" type="checkbox" name="tipo2" value="zip">  <i class="far fa-file-archive"></i> Zip</label>
            <label><input class="tipo" type="checkbox" name="tipo3" value="doc">  <i class="far fa-file-word"></i> Doc</label>
            <label><input class="tipo" type="checkbox" name="tipo4" value="pdf">  <i class="far fa-file-pdf"></i> Pdf</label>
            <label><input class="tipo" type="checkbox" name="tipo5" value="xls">  <i class="far fa-file-excel"></i> Xls</label>
        </div><br>
        <div class="form-group">
            <label for="">Ingrese una contraseña:</label>
            <input type="text" id="clave" name="clave" class="form control col-md-4" value="0">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    
    </form>
</div>
</body>
<script>
$('form').submit(function(e){
    // si la cantidad de checkboxes "chequeados" es cero,
    // entonces se evita que se envíe el formulario y se
    // muestra una alerta al usuario
    if ($('input[type=checkbox]:checked').length === 0) {
        e.preventDefault();
        alert('Debe seleccionar al menos un valor del checkbox');
    }
});

</script>
<?php
include_once '../estructura/pieBT.php';
?>
</html>