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
        <h3>Listado de archivos compartidos:</h3>
        <?php
        $listar=listar_directorios_ruta("../../archivos/");
        ?>
        <?php
            function listar_directorios_ruta($ruta){
                // abrir un directorio y listarlo recursivo
                if (is_dir($ruta)) {
                    if ($dh = opendir($ruta)) {
                        while (($file = readdir($dh)) !== false) {
                         //esta línea la utilizaríamos si queremos listar todo lo que hay en el directorio
                         //mostraría tanto archivos como directorios
                         //echo "<br>Nombre de archivo: $file : Es un: " . filetype($ruta . $file);
                            if ($file!="." && $file!=".." && !(is_dir($ruta . $file))){
                                echo "<div class='container-fluid'>
                                        <div class='row'>
                                            <div class='form-group col-md-12'>
                                                <div class='d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom'>
                                                    $file
                                                    <button class='btn btn-warning'><a class='' href='../eliminararchivocompartido/eliminararchivocompartido.php'>          Dejar de compartir</a></button>
                                                    
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
            }
        ?>

    </div>
</body>
<?php
include_once '../estructura/pieBT.php';
?>
</html>