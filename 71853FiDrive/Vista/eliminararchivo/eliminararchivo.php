<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar archivo</title>
    
</head>
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<div class="container-fluid">
    <h1>Eliminar Archivo:</h1>
    
    <form class="form-group" method="POST" action="accion.php">
            <div class="form-group">
                <label for="validationCustom1">Nombre:</label>
                <input type="text" class="form-control col-md-3" id="validationCustom1" name="nombre" value="1234.png" required>
            </div>
        <div class="form-group">
            Motivo de ya no compartir el archivo: <input type="text" name="motivo" id="motivo" class="form-control col-md-6" required>
        </div>
        
        <div>
            <label>Usuario: </label><br>
            <select name="usuario" id="usuario" required>
                <option value="" disable selected>Elija una opcion:</option>
                <option value="admin">Admin</option>
                <option value="visitante">Visitante</option>
                <option value="Root">Root</option>
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