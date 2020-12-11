<?php

class controlGral {

    public function crearCarpeta($datos){
        $nomdirectorio=$datos['carpeta'];
        $msj=null;
        if (isset($_POST['carpeta'])){
            $carpeta= htmlspecialchars($nomdirectorio);
            $ruta= "../archivos/";
            $directorio=$ruta.$carpeta;
            
            if (!is_dir($directorio)){
                $crear= mkdir($directorio,0777,true);
                if ($crear){
                    $msj= "Carpeta $directorio creado correctamente";
                }
                else{
                    $msj= "Ha ocurrido un error al crear el directorio";
                    
                }
            }
            else{
                $msj= "El directorio que intentas crear ya existe";
            } 

        }
        return $msj;
    }
    public function cargar_archivo($archivo){
            $nombre_archivo=$archivo['miArchivo']['name'];
            $tamaño_archivo=(($archivo['miArchivo']['size']));
            $tipo_archivo=$archivo['miArchivo']['type'];
            $dir= '../archivos/';
    
            if ($archivo['miArchivo']['error'] <= 0){
                echo "Nombre: ".$nombre_archivo."<br>";
                echo "Tipo:".$tipo_archivo."<br>";
                echo "Tamaño:  ".$tamaño_archivo."b<br>";
                echo "Carpeta Temporal".$archivo['miArchivo']['tmp_name']."<br>";
                //intentamos copiar el archivo al servidor
                $vol_archi = round($tamaño_archivo / 1024, 2);    // Volumen archivo en Kb redondeado a dos decimales
                $extension = substr(strrchr($nombre_archivo, "."), 1);    // Extraemos la extension del archivo
                $volumen_max = "2000000";       // volumen maximo en bit - 5120000 = 5 MB
                echo $extension .' <br>';
                if (($tamaño_archivo <= $volumen_max) AND ($extension=='docx' OR $extension == 'pdf' OR $extension == 'jpg')){
                    if(!copy($archivo['miArchivo']['tmp_name'],$dir.$archivo['miArchivo']['name'])){
                            echo "ERROR: no se pudo cargar el archivo";
                        
                    }
                    else{
                        echo "El archivo".$archivo['miArchivo']['name'].
                        "  Se ha copiado con EXITO <br>". "<a href='/PWD2020/71853FiDrive/Vista/archivos/$nombre_archivo'>Acceda al archivo desde aqui</a>";
                    }
                }
                else{
                    echo 'ERROR: el archivo es mayor a 2MB o no tiene el formato .doc o .pdf';
                }
    
            }
        }

}?>