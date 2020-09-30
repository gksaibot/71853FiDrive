<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta, modificacion de archivo</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap/bootstrapValidator.min.css">

</head>
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<div class="container-fluid">
    <h1>Alta, Modificacion de archivo:</h1>
    <form class="form-group" method="POST" action="accion.php">
            <div class="form-group">
                <label for="validationCustom1">Nombre:</label>
                <input type="text" class="form-control col-md-3" id="validationCustom1" name="nombre" value="1234.png" required>
            </div>
        <div class="form-group">
            Descripcion: <input type="text" name="desc" id="desc" class="form-control col-md-6">
        </div>
        
        <div>
            <label>Usuario: </label><br>
            <select name="usuario" id="usuario">
                <option value="" disable selected>Seleccione un operacion</option>
                <option value="admin">Admin</option>
                <option value="visitante">Visitante</option>
                <option value="Root">Root</option>
            </select><br><br>
        </div>
        <div>
            <label for="">Seleccione icono que se va a utilizar:</label><br>
            <label><input type="checkbox" name="tipo1" value="imagen"> Imagen</label>
            <label><input type="checkbox" name="tipo2" value="zip"> Zip</label>
            <label><input type="checkbox" name="tipo3" value="doc"> Doc</label>
            <label><input type="checkbox" name="tipo4" value="pdf"> Pdf</label>
            <label><input type="checkbox" name="tipo5" value="xls"> Xls</label>
        </div><br>
        <div class="form-group">
            <label for="">Ingrese una contraseña:</label>
            <input type="password" class="form control col-md-4" pattern=".{6,}">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    
    </form>
</div>
</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>