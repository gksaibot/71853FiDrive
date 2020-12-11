<<<<<<< HEAD
<?php
include_once "../../configuracion.php";
$sesion=new Session();
error_reporting(0);

if ($sesion->activa()){

$objAbmTabla = new AbmArchivoCargado();
$objAbmArchivoCargadoEstado= new AbmArchivoCargado();
$listaTabla = $objAbmTabla->buscar(null);
$datos['estado1']='1';
$datos['estado3']='3';
$datos['idusuario']=$sesion->getIdusuario();
$listaCargados= $objAbmArchivoCargadoEstado->listarArchivosCargadosE($datos);

//$arreglo= array();
/*if( count($listaTabla)>0){
    foreach ($listaTabla as $objTabla) { 
            if ($objAbmArchivoCargadoEstado->buscarUnarchivoCargadoEstado($objTabla->getIdarchivocargado(),1)){
                    $arregloAC=array_push($arreglo,$objTabla);//filtramos solo los Arch cargados
                    echo "<br>entro a X<br>";
                    
            }
            else{
                echo "<br> entro a Y <br>";
            }
    }
    echo "<br>$arregloAC[0]";
    echo "------------";
}*/
?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
<?php
include_once '../estructura/cabeceraBT.php';
?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <form class="form-group" method="POST" action="../amarchivo/amarchivo.php">
                    <button type="submit" class="btn btn-primary" value="Cargar Archivo"><i class="fas fa-file-upload"></i>   Cargar Archivo</button>
                </form>
            </div>
            <form class="form-group" method="POST" action="accion.php">
                    <div class="row">
                        <div class="col-sm">  
                            <button type="submit" class="btn btn-primary"><i class="fas fa-folder-plus"> Nueva Carpeta</i></button>
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control col-md-12" id="carpeta" name="carpeta" placeholder="Nombre de la carpeta..." required><br>
                            
                        </div>
                    </div>
            </form>
            
        </div>
        <h3>Listado de Archivos Cargados:</h3>
        <table class="table">
    <?php	
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">ID</th>';        
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Usuario</th>';
        echo '<th scope="col">    </th>';
        echo '<th scope="col">Tipo</th>';
        echo '<th scope="col">    </th>';
        echo '</tr>';
        echo '</thead>';

    if( count($listaCargados)>0){
        foreach ($listaCargados as $objAC) { 
            //var_dump($objAC);
            //echo '<div class="row">';
            //    echo "<div class='form-group col-md-12'>";
                        echo '<tr><td style="width:500px;">'.$objAC->getIdarchivocargado().'</td>';
                        echo '<td style="width:500px;">'.$objAC->getAcnombre().'</td>';
                        echo '<td style="width:500px;">'.$objAC->getAcdescripcion().'</td>';
                        echo '<td><button class="btn btn-outline-info"><a href="../amarchivo/archivoCargadoEditar.php?accion=modificar&id='.$objAC->getIdarchivocargado().'">Modificar</a></button></td>';
                        echo '<td><button class="btn btn-outline-success"><a href="../compartirarchivo/compartirarchivo.php?$datos&id='.$objAC->getIdarchivocargado().'">Compartir</a></button></td>';
                        echo '<td><button class="btn btn-outline-warning"><a href="../eliminararchivo/eliminararchivo.php?accion=eliminar&id='.$objAC->getIdarchivocargado().'">Eliminar</a></button></td></tr>'; 
            //    echo "</div>";
            //echo "</div>";
        }
    }else{
        
    }

    ?>
    </table>
      <?php
        //$listar=listar_directorios_ruta("../../archivos/");
        ?>
        <?php
        //    function listar_directorios_ruta($ruta){
                // abrir un directorio y listarlo recursivo
          //      if (is_dir($ruta)) {
            //        if ($dh = opendir($ruta)) {
              //          while (($file = readdir($dh)) !== false) {
                         //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
                         //mostraría tanto archivos como directorios
                         //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file);
                //            if ($file!="." && $file!=".." && !(is_dir($ruta . $file))){
                  //              echo "<div class='container-fluid'>
                //                        <div class='row'>
                //                            <div class='form-group col-md-12'>
                //                                <div class='d-flex justify-content-between pt-3 pb-2 border-bottom'>
                //                                    $file
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                /*                                    <button class='btn btn-outline-info'><a class='' href='amarchivo.php'>          Modificar</a></button>
                                                    <button class='btn btn-outline-success'><a class='' href='../compartirarchivo/compartirarchivo.php'>          Compartir</a></button>
                                                    <button class='btn btn-outline-warning'><a class='' href='../eliminararchivo/eliminararchivo.php'>          Eliminar</a></button>
                                                </div>
                                            </div>
                                        </div>
                                      </div>";
                            }
                            if (is_dir($ruta . $file) && $file!="." && $file!=".."){
                                //solo si el archivo es un directorio, distinto que "." y ".."
                                //echo "<br>Directorio: $ruta$file";
                                listar_directorios_ruta($ruta . $file . "/");
                            }
                        }
                        closedir($dh);
                    }
                }else
                    echo "<br>No es ruta valida";
            }*/
            ?>

    </div>
</body>
<?php
include_once '../estructura/pieBT.php';

?>
</html>
<?php
}
else{
    header($NOVALIDA);
    
}
?>
=======
<?php
include_once "../../configuracion.php";
$sesion=new Session();
error_reporting(0);

if ($sesion->activa()){

$objAbmTabla = new AbmArchivoCargado();
$objAbmArchivoCargadoEstado= new AbmArchivoCargado();
$listaTabla = $objAbmTabla->buscar(null);
$datos['estado1']='1';
$datos['estado3']='3';
$datos['idusuario']=$sesion->getIdusuario();
$listaCargados= $objAbmArchivoCargadoEstado->listarArchivosCargadosE($datos);

//$arreglo= array();
/*if( count($listaTabla)>0){
    foreach ($listaTabla as $objTabla) { 
            if ($objAbmArchivoCargadoEstado->buscarUnarchivoCargadoEstado($objTabla->getIdarchivocargado(),1)){
                    $arregloAC=array_push($arreglo,$objTabla);//filtramos solo los Arch cargados
                    echo "<br>entro a X<br>";
                    
            }
            else{
                echo "<br> entro a Y <br>";
            }
    }
    echo "<br>$arregloAC[0]";
    echo "------------";
}*/
?>	

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contenido</title>
<?php
include_once '../estructura/cabeceraBT.php';
?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm">
                <form class="form-group" method="POST" action="../amarchivo/amarchivo.php">
                    <button type="submit" class="btn btn-primary" value="Cargar Archivo"><i class="fas fa-file-upload"></i>   Cargar Archivo</button>
                </form>
            </div>
            <form class="form-group" method="POST" action="accion.php">
                    <div class="row">
                        <div class="col-sm">  
                            <button type="submit" class="btn btn-primary"><i class="fas fa-folder-plus"> Nueva Carpeta</i></button>
                        </div>
                        <div class="col-sm">
                            <input type="text" class="form-control col-md-12" id="carpeta" name="carpeta" placeholder="Nombre de la carpeta..." required><br>
                            
                        </div>
                    </div>
            </form>
            
        </div>
        <h3>Listado de Archivos Cargados:</h3>
        <table class="table">
    <?php	
        echo '<thead class="thead-dark">';
        echo '<tr>';
        echo '<th scope="col">ID</th>';        
        echo '<th scope="col">Nombre</th>';
        echo '<th scope="col">Usuario</th>';
        echo '<th scope="col">    </th>';
        echo '<th scope="col">Tipo</th>';
        echo '<th scope="col">    </th>';
        echo '</tr>';
        echo '</thead>';

    if( count($listaCargados)>0){
        foreach ($listaCargados as $objAC) { 
            //var_dump($objAC);
            //echo '<div class="row">';
            //    echo "<div class='form-group col-md-12'>";
                        echo '<tr><td style="width:500px;">'.$objAC->getIdarchivocargado().'</td>';
                        echo '<td style="width:500px;">'.$objAC->getAcnombre().'</td>';
                        echo '<td style="width:500px;">'.$objAC->getAcdescripcion().'</td>';
                        echo '<td><button class="btn btn-outline-info"><a href="../amarchivo/archivoCargadoEditar.php?accion=modificar&id='.$objAC->getIdarchivocargado().'">Modificar</a></button></td>';
                        echo '<td><button class="btn btn-outline-success"><a href="../compartirarchivo/compartirarchivo.php?$datos&id='.$objAC->getIdarchivocargado().'">Compartir</a></button></td>';
                        echo '<td><button class="btn btn-outline-warning"><a href="../eliminararchivo/eliminararchivo.php?accion=eliminar&id='.$objAC->getIdarchivocargado().'">Eliminar</a></button></td></tr>'; 
            //    echo "</div>";
            //echo "</div>";
        }
    }else{
        
    }

    ?>
    </table>
      <?php
        //$listar=listar_directorios_ruta("../../archivos/");
        ?>
        <?php
        //    function listar_directorios_ruta($ruta){
                // abrir un directorio y listarlo recursivo
          //      if (is_dir($ruta)) {
            //        if ($dh = opendir($ruta)) {
              //          while (($file = readdir($dh)) !== false) {
                         //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
                         //mostraría tanto archivos como directorios
                         //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file);
                //            if ($file!="." && $file!=".." && !(is_dir($ruta . $file))){
                  //              echo "<div class='container-fluid'>
                //                        <div class='row'>
                //                            <div class='form-group col-md-12'>
                //                                <div class='d-flex justify-content-between pt-3 pb-2 border-bottom'>
                //                                    $file
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                //                                    <div class='form-group'><h1></h1></div>
                /*                                    <button class='btn btn-outline-info'><a class='' href='amarchivo.php'>          Modificar</a></button>
                                                    <button class='btn btn-outline-success'><a class='' href='../compartirarchivo/compartirarchivo.php'>          Compartir</a></button>
                                                    <button class='btn btn-outline-warning'><a class='' href='../eliminararchivo/eliminararchivo.php'>          Eliminar</a></button>
                                                </div>
                                            </div>
                                        </div>
                                      </div>";
                            }
                            if (is_dir($ruta . $file) && $file!="." && $file!=".."){
                                //solo si el archivo es un directorio, distinto que "." y ".."
                                //echo "<br>Directorio: $ruta$file";
                                listar_directorios_ruta($ruta . $file . "/");
                            }
                        }
                        closedir($dh);
                    }
                }else
                    echo "<br>No es ruta valida";
            }*/
            ?>

    </div>
</body>
<?php
include_once '../estructura/pieBT.php';

?>
</html>
<?php
}
else{
    header($NOVALIDA);
    
}
?>
>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
