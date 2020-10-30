<?php

include_once '../../configuracion.php';
include_once '../../Control/AbmArchivoCargado.php';
include_once '../../Modelo/archivoCargado.php';
include_once '../../Modelo/usuario.php';
include_once '../../Modelo/conector/BaseDatos.php';

$objAbmTabla = new AbmArchivoCargado();
$datos = data_submitted();
print_r($datos);//id es igual a 2
$obj1 =NULL;
    if (isset($datos['id'])){
        //echo "entro";
        $listaTabla = $objAbmTabla->buscarUnarchivoCargado($datos);
        if (count($listaTabla)==1){
            $obj1= $listaTabla[0];
        }
    }

?>	
<?php
$obj = new usuario();
$losUsuarios =$obj->darUsuarios('');
print_r($losUsuarios);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compartir Archivo</title>
    <!--<scr src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>-->
    
</head>

<script>
        function generarHash(){
            var nro=Math.floor(Math.random()*101);
            var cant=document.getElementById("cant").value;
            var cant2=document.getElementById("cantdesc").value;
            var cadena= nro + cant + cant2;
            console.log
            var cadena1="9007199254740991";
            if ((cant=='') && (cant2=='')){
                var hash=0;
                for (i = 0; i< cadena1.length; i++){
                    char =cadena1.charCodeAt(i);
                    hash=((hash << 5) - hash) + char;
                    hash = hash & hash;
                }
            }
            else{
                var hash=0;
                for (i = 0; i< cadena.length; i++){
                    char =cadena.charCodeAt(i);
                    hash=((hash << 5) - hash) + char;
                    hash = hash & hash;
                }
            }
            document.getElementById("inputText").value=hash;
        }
    </script>
    
<?php
include_once '../estructura/cabeceraBT.php';
?>
<body>
<div class="container-fluid">
    <h1>Compartir Archivo:</h1>
    <form class="form-group" method="POST" action="accion.php">
    		<input id="id:" readonly name ="id" width="80" type="text" value="<?php echo $obj1->getIdarchivocargado()?>"><br/>
            <div class="form-group">
                <label for="validationCustom1">Nombre:</label>
                <input type="text" class="form-control col-md-3" id="validationCustom1" name="nombre" value="<?php echo $obj1->getAcnombre()?>" required>
            </div>
        <div class="form-group">
            Ingresar Cantidad de dias que se comparte el archivo: <input type="number" name="cant" id="cant" class="form-control col-md-6">
        </div>
        <div class="form-group">
            Ingrese Cantidad de descargas posibles: <input type="number" name="cantdesc" id="cantdesc" class="form-control col-md-6">
        </div>
        
        <div>
            <label>Usuario: </label><br>
            <select name="usuario" id="usuario" required>
                <option value="" disable selected>Elija una opcion:</option>
                <?php foreach ($losUsuarios as $unUsuario) {?>
                <option value="<?php echo $unUsuario->getIdusuario()?>"><?php echo $unUsuario->getUsnombre()?></option>    
                <?php }?>
            </select><br><br>
        </div>
        
            <label>
                <input type="checkbox" name="subscribe" id="subscribe" checked> Proteger con Contraseña
            </label>
        
        <div class="form-group">
            <input type="password" class="form-control col-md-6 check-seguridad" onchange="return validatePassword()" name="password" id="password" placeholder="Ingrese una contraseña" >
        </div>
        <div>
            <label for="">Link de compartir generado:</label>
            <div class="form-group">
                <button type="button" class="btn btn-success" onclick="generarHash()">Generar Hash</button>
                <input type="text" id="inputText" class="form-control col-md-6" readonly="readonly">
            </div>
        </div>
        
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
    
    </form>
    <script>
        $(document).ready(function(){
            $('#subscribe').on('change',function(){
                if (this.checked) {
                    $("#password").show();
                } 
                else {
                    $("#password").hide();
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

</div>
</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>