<?php
include_once '../../configuracion.php';

$obj = new AbmUsuario();
$listaUsuarios =$obj->buscarUsuarios('');

?>
<?php
$sesion=new Session();
error_reporting(0);

if ($sesion->esAdmin()){

?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<?php
include_once '../estructura/cabeceraBT.php';
?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <form class="form-group" method="POST" action="../usuarios/usuario.php">
                    <button type="submit" class="btn btn-primary" value="Cargar Usuario Nuevo"><i class="fas fa-user"></i>   Cargar Usuario Nuevo</button>
                </form>
            </div>
            
        </div>
        <h3>Listado de Usuarios Cargados:</h3>
        <table class="table">
    <?php	
    
    $usuariorol=new AbmUsuariorol();
    $cadena="";
    echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">ID</th>';        
        echo '<th scope="col">Usuario</th>';
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Rol</th>';
        echo '<th scope="col">Estado</th>';
        echo '<th scope="col">Operaciones</th>';
        echo '<th scope="col"></th>';
        echo '</tr>';
        echo '</thead>';
                    
    if( count($listaUsuarios)>0){
        foreach ($listaUsuarios as $objUC) { 
            echo '<div class="row">';
                echo "<div class='form-group col-md-12'>";
                        $roles=$usuariorol->buscarRoles($objUC->getIdusuario());
                        $a=0;
                        while ($a < count($roles)) {
                            $cadena=$cadena."-".$roles[$a]->getRodescripcion(); 
                            $a++;
                        }
                        echo '<tr><td style="width:500px;">'.$objUC->getIdusuario().'</td>';
                        echo      '<td style="width:500px;">'.$objUC->getUslogin().'</td>';
                        echo      '<td style="width:500px;">'.$objUC->getUsnombre().'</td>';
                        echo       '<td style="width:500px;">'.$cadena.'</td>';
                        echo      '<td style="width:500px;">'.$objUC->getUsactivo().'</td>';
                        echo '<td><button class="btn btn-outline-info"><a href="usuarioEditar.php?accion=modificar&id='.$objUC->getIdusuario().'">Modificar</a></button></td>';
                        if ($objUC->getUsactivo()=='1'){
                            echo '<td><button class="btn btn-outline-warning"><a href="accion.php?accion=eliminar&idusuario='.$objUC->getIdusuario().'">Deshabilitar</a></button></td></tr>'; 
                        }
                        else{
                            echo '<td><button class="btn btn-outline-warning"><a href="accion.php?accion=habilitar&idusuario='.$objUC->getIdusuario().'">Habilitar</a></button></td></tr>';
                        }    
                echo "</div>";
            echo "</div>";
            $cadena="";
        }
    }else{
        
    }

    ?>
    </table>

        
    </div>
    
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