<?php
include_once '../../configuracion.php';


$obj = new Abmrol();
$losRoles =$obj->buscarRoles('');
//print_r($losRoles);

?>
<?php
$sesion=new Session();
error_reporting(0);


if ($sesion->esAdmin()){

?>	

<?php
include_once '../estructura/cabeceraBT.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
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

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo Usuario</title>
</head>
<body>
        
    <div class="container">
        
        <form   method="POST" action="accionAltaUsuario.php">
            <h1>Nuevo Usuario:</h1>
            <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputName">Nombre</label>
                        <input type="text" class="form-control" id="usnombre" name="usnombre" placeholder="Ingrese nombre" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputapellido">Apellido</label>
                        <input type="text" class="form-control" id="usapellido" name="usapellido" placeholder="Ingrese apellido" required>
                    </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                        <label for="validationCustom2">Usuario:</label>
                        <input type="text" class="form-control col-md-6" placeholder="Nombre de usuario" id="uslogin" name="uslogin" required>
                </div>
                <div class="form-group col-md-6">
                        <label for="validationCustom2">Contrase&ntildea:</label>
                        <input type="password" class="form-control col-md-6 check-seguridad" onchange="return validatePassword()" name="usclave" id="usclave" placeholder="Ingrese una contrasena" required>
                </div>
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
        
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
    
            
        </form>
    </div>
    <script>
        $(document).ready(function(){
            $('#subscribe').on('change',function(){
                if (this.checked) {
                    $("#acprotegidoclave").show();
                } 
                else {
                    $("#acprotegidoclave").hide();
                }  
            })
        });
    </script>
    <script>
    $('.check-seguridad').strength({
        templates: {
            toggle: '<span class="input-group-addon"><span class="glyphicon glyphicon-eye-open {toggleclass}"></span>'
        },

        scoreLables: {
            empty: 'Vacio',
            invalid: 'Invalido',
            weak: 'Debil',
            good: 'Normal',
            strong: 'Fuerte',
        }
    });
    </script>

</body>
<?php
include_once '../estructura/pieBT.php';
?>
<?php
    }
    else{
        $NOVALIDA;
    }
    ?>

</html>