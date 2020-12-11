<?php
include_once '../../configuracion.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/bootstrapValidator.min.css"/>
    <link rel="stylesheet" href="../css/cabecera.css"/>

    <!-- Javascript JS -->
    <script type="text/javascript" src="../js/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="../js/jquery/jquery-3.5.1.slim.min.js"></script>
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!--<script type="text/javascript" src="../js/bootstrapValidator.js"></script>-->
    <script type="text/javascript" src="../js/validator.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

    
</head>
<body>

<div class="container">
        <div class="row">
                <form class="col-3" action="verificarLogin.php" method="POST">
                            <h1>Sistema FiDrive</h1>
                            <div class="form-group" id="user-group">
                                    <p>Usuario <input type="text" class="form-control" placeholder="Nombre de usuario" name="uslogin"/></p>
                            </div>
                            <div class="form-group" id="contrasena-group">
                                    <p>Contraseña <input type="password" class="form-control" placeholder="Contrasena" name="clave"/></p>
                            </div>
                    
                            <button type="submit" class="btn btn-primary"><i class="fas fa-sign-in-alt"></i>  Ingresar </button>
                            <!--<p>¿No tienes una cuenta? <a href="register.php">Regístrate ahora</a>.</p>-->
                </form>
           <!--FALTA HACER UN JAVASCRIPT QUE ENCRIPTE LA CONTRASEÑA ANTES DE ENVIAR EL FORM-->
                <form  class="col-3" action="acciondescarga.php" method="POST">
                        <Label>Ingrese su codigo para descarga:</Label>
                        <input type="text" class="form-control" placeholder="Ingrese su codigo aqui" id="cod" name="cod">
                </form>
        </div>
</div=>    
</body>
</html>