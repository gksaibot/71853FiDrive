<?php

class controlGral {

    public function verificarAMarchivo($datos){

        $nom=$datos['nombre'];
        $desc=$datos['desc'];
        $user=$datos['usuario'];
        $formato= '';

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
        
        return $resp=$nom.$desc.$user.$formato;
        
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
}
?>