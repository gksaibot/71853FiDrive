<?php

class controlGral {

    public function verificarAMarchivo($datos){

        $nom=$datos['nombre'];
        $desc=$datos['desc'];
        $user=$datos['usuario'];
        $formato= '';
        $acc=$datos['accion'];

        if(isset($datos['tipo1'])){
            
            $formato=$formato.$datos['tipo1'];
        }
        if(isset($datos['tipo2'])){
            $formato=$formato.$datos['tipo2'];
        }
        if(isset($datos['tipo3'])){
            $formato=$formato.$datos['tipo3'];
        }
        if(isset($datos['tipo4'])){
            $formato=$formato.$datos['tipo4'];
        }
        

        return $resp=$nom.$desc.$user."<br>".$formato." Accion:  ".$acc;
        
    }
    public function verificarCompartirarchivo($datos){
        $contraseña='';
        $nom=$datos['nombre'];
        $cant=$datos['cant'];
        $cantdesc=$datos['cantdesc'];
        $user=$datos['usuario'];
        if ($datos['password']!=''){
            $contraseña=$contraseña.$datos['password'];
        }
        return $resp=$nom.$cant.$cantdesc.$user.$contraseña;
        
    }
    public function verificarEliminarCompartirarchivo($datos){
        $nom=$datos['nombre'];
        $cant=$datos['cant'];
        $motivo=$datos['motivo'];
        $user=$datos['usuario'];
        return $resp=$nom.$cant.$motivo.$user;
    }
    public function verificarEliminarArchivo($datos){
        $nom=$datos['nombre'];
        $motivo=$datos['motivo'];
        $user=$datos['usuario'];
        return $resp=$nom.$motivo.$user;
    
    }
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
        $dir= '../Vista/archivos/';
        $resp='';

        if ($archivo['miArchivo']['error'] <= 0){
            echo "Nombre: ".$nombre_archivo."<br>";
            echo "Tipo:".$tipo_archivo."<br>";
            echo "Tamaño:  ".$tamaño_archivo."b<br>";
            echo "Carpeta Temporal".$archivo['miArchivo']['tmp_name']."<br>";
            //intentamos copiar el archivo al servidor
            $extension = substr(strrchr($nombre_archivo, "."), 1);    // Extraemos la extension del archivo
            echo $extension .' <br>';
            if ($extension=='txt'){
                if(!copy($archivo['miArchivo']['tmp_name'],$dir.$nombre_archivo)){
                        echo "ERROR: no se pudo cargar el archivo";
                    
                }
                else{
                    $handle = fopen($dir.$nombre_archivo, "r"); // Abris el archivo
                    $contenido = fread ($handle, filesize ($dir.$nombre_archivo)); //Lees el archivo
                    echo "El archivo".$archivo['miArchivo']['name'].
                    "  Se ha copiado con EXITO <br>";
                    $resp=$contenido;                    
                }
            }
            else{
                echo 'ERROR: el archivo no tiene el formato .txt';
            }

        }
        return $resp;
    }
}
    

?>