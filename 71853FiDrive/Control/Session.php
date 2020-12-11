<?php

class Session {

    public function __construct(){
        session_start();
    }
    
    public function session__started() {
        if (!(isset($_SESSION))) {
                session_start();
        } 
    }
    
    private function setClaveUsuario($clave){
        $_SESSION['usclave']= $clave;
    }
    public function getClaveUsuario(){
        return $_SESSION['usclave'];
    }
    private function setUsnombre($usnombre){
        $_SESSION['usnombre']=$usnombre;
    }
    public function getUsnombre(){
        return $_SESSION['usnombre'];
    }
    private function setUslogin($uslogin){
        $_SESSION['uslogin']=$uslogin;
    }
    public function getUslogin(){
        return $_SESSION['uslogin'];
    }
    private function setIdusuario($idusuario){
        $_SESSION['idusuario']=$idusuario;
    }
    public function getIdusuario(){
        return $_SESSION['idusuario'];
    }
    
    
    public function iniciar($datos){
        //$this->session__started();
        $this->setUslogin($datos['NombreLogin']);
        $this->setRol($datos['roles']);
        $this->setIdusuario($datos['Idusuario']);
        $resp=$this->validar();
        
        return $resp;
    }
    public function validar(){
        $resp=true;
        if (!(isset($_SESSION['uslogin']))){
            $resp=false;
        }    
        return $resp;
    }

    /**
     * Devuelve el verdadero si hay una sesión activa y falso en caso contrario
     * 
     * @return boolean activa y false si no está activa o no se encuetra seteado*/

    public function activa(){
        if ($_SESSION['uslogin']==''){
            echo "#####";
            return false;
        }
        else{
            return true;
        }
    }
    private function setRol($rol){
        $_SESSION['ROL']=$rol;
        //var_dump($_SESSION['ROL']['0']);
        //$this->esAdmin();
    }
    public function getRol(){
        return $_SESSION['ROL'];
    }
    public function cerrarSession(){
        return session_destroy();
    }
    public function getError() {
        return $this->ERROR;
    }
    public function esAdmin(){
        $a=0;
        $resp=false;
        $losRoles=$_SESSION['ROL'];
        while ($a < count($losRoles)) {
            if ($losRoles[$a]->getRodescripcion()=='administrador'){
                $resp=true;
                //var_dump($losRoles[$a]->getRodescripcion());
            }
            $a++;
        }
        return $resp;
        
    }

}



?>