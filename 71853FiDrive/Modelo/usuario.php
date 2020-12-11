<<<<<<< HEAD
<?php

class usuario{

    private $idusuario;
    private $usnombre;
    private $usapellido;
    private $uslogin;
    private $usclave;
    private $usactivo;

    public function __construct(){
        $idusuario='';
        $usnombre='';
        $usapellido='';
        $uslogin='';
        $usclave='';
        $usactivo='';
        
    }
    public function setear($idusuario, $usnombre, $usapellido, $uslogin, $usclave, $usactivo)    {
        $this->setIdusuario($idusuario);
        $this->setUsnombre($usnombre);
        $this->setUsapellido($usapellido);
        $this->setUslogin($uslogin);
        $this->setUsclave($usclave);
        $this->setUsactivo($usactivo);
        
    }
    public static function verificarUsuario($nombreLogin,$contraseña){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario WHERE '$nombreLogin' = uslogin AND usclave ='$contraseña'";
        //echo $sql;
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], $row['uslogin'], $row['usclave']
                    , $row['usactivo']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $arreglo;
    }

    public static function darUsuarios($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], $row['uslogin'], $row['usclave']
                    , $row['usactivo']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        
        return $arreglo;
    }
    
    /**
     * Get the value of idusuario
     */ 
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @return  self
     */ 
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get the value of usnombre
     */ 
    public function getUsnombre()
    {
        return $this->usnombre;
    }

    /**
     * Set the value of usnombre
     *
     * @return  self
     */ 
    public function setUsnombre($usnombre)
    {
        $this->usnombre = $usnombre;

        return $this;
    }

    /**
     * Get the value of usapellido
     */ 
    public function getUsapellido()
    {
        return $this->usapellido;
    }

    /**
     * Set the value of usapellido
     *
     * @return  self
     */ 
    public function setUsapellido($usapellido)
    {
        $this->usapellido = $usapellido;

        return $this;
    }

    /**
     * Get the value of uslogin
     */ 
    public function getUslogin()
    {
        return $this->uslogin;
    }

    /**
     * Set the value of uslogin
     *
     * @return  self
     */ 
    public function setUslogin($uslogin)
    {
        $this->uslogin = $uslogin;

        return $this;
    }

    /**
     * Get the value of usclave
     */ 
    public function getUsclave()
    {
        return $this->usclave;
    }

    /**
     * Set the value of usclave
     *
     * @return  self
     */ 
    public function setUsclave($usclave)
    {
        $this->usclave = $usclave;

        return $this;
    }

    /**
     * Get the value of usactivo
     */ 
    public function getUsactivo()
    {
        return $this->usactivo;
    }

    /**
     * Set the value of usactivo
     *
     * @return  self
     */ 
    public function setUsactivo($usactivo)
    {
        $this->usactivo = $usactivo;

        return $this;
    }
    public function obtenerUltimoID(){
        $arreglo = array();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM usuario WHERE idusuario = (SELECT MAX( idusuario ) FROM usuario )";
        //if ($parametro!="") {
        //    $sql.='WHERE acnombre ='."$parametro";
        //}
        //echo "$sql";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], 
                    $row['uslogin'], $row['usclave'], $row['usactivo']);
                    array_push($arreglo, $obj);
                }
            
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    
    }
    public function insertar(){
        $resp = false;
    $base=new BaseDatos();
    $sql="INSERT INTO usuario(idusuario,usnombre,usapellido,uslogin,usclave,usactivo) VALUES('".$this->getIdusuario()."','".$this->getUsnombre()."', '".$this->getUsapellido()."',
     '".$this->getUslogin()."', '".md5($this->getUsclave())."', '".$this->getUsactivo()."');";
    if ($base->Iniciar()) {
        if ($elid = $base->Ejecutar($sql)) {
            $this->setIdusuario($elid);
            $resp = true;
        } else {
            echo "error";
            //$this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
    } else {
        echo "error 2";
        //$this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
    }
    
    return $resp;
    }
    public function modificar(){
        $resp = false;
    $base=new BaseDatos();
    $sql="UPDATE usuario SET usnombre='".$this->getUsnombre()."',usapellido='".$this->getUsapellido()."',
    idusuario='".$this->getIdusuario()."',uslogin='".$this->getUslogin()."',usclave='".$this->getUsclave()."' WHERE idusuario=".$this->getIdusuario();
    //echo "$sql";
    
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
    }
    return $resp;
    }
    public function modificarUsuarioAct(){
        $resp = false;
    $base=new BaseDatos();
    $sql="UPDATE usuario SET usactivo='".$this->getUsactivo()."' WHERE idusuario=".$this->getIdusuario();
    //echo "$sql";
    
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
    }
    return $resp;
    }
    
    public function eliminar(){
        $resp = false;
    $base=new BaseDatos();
    $sql="DELETE FROM usuario WHERE idusuario=".$this->getIdusuario();
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            return true;
        } else {
            //$this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
    }
    return $resp;
    }
    public static function buscarUsuarioCargado($idusuariocargado){
        $arreglo = array();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM `usuario` WHERE idusuario = '$idusuariocargado'";
        //if ($parametro!="") {
        //    $sql.='WHERE acnombre ='."$parametro";
        //}
        //echo "$sql";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], 
                    $row['uslogin'], $row['usclave'], $row['usactivo']);
                    array_push($arreglo, $obj);
                }
            
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    }
}
    

=======
<?php

class usuario{

    private $idusuario;
    private $usnombre;
    private $usapellido;
    private $uslogin;
    private $usclave;
    private $usactivo;

    public function __construct(){
        $idusuario='';
        $usnombre='';
        $usapellido='';
        $uslogin='';
        $usclave='';
        $usactivo='';
        
    }
    public function setear($idusuario, $usnombre, $usapellido, $uslogin, $usclave, $usactivo)    {
        $this->setIdusuario($idusuario);
        $this->setUsnombre($usnombre);
        $this->setUsapellido($usapellido);
        $this->setUslogin($uslogin);
        $this->setUsclave($usclave);
        $this->setUsactivo($usactivo);
        
    }
    public static function verificarUsuario($nombreLogin,$contraseña){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario WHERE '$nombreLogin' = uslogin AND usclave ='$contraseña'";
        //echo $sql;
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], $row['uslogin'], $row['usclave']
                    , $row['usactivo']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $arreglo;
    }

    public static function darUsuarios($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM usuario ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], $row['uslogin'], $row['usclave']
                    , $row['usactivo']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        
        return $arreglo;
    }
    
    /**
     * Get the value of idusuario
     */ 
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Set the value of idusuario
     *
     * @return  self
     */ 
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;

        return $this;
    }

    /**
     * Get the value of usnombre
     */ 
    public function getUsnombre()
    {
        return $this->usnombre;
    }

    /**
     * Set the value of usnombre
     *
     * @return  self
     */ 
    public function setUsnombre($usnombre)
    {
        $this->usnombre = $usnombre;

        return $this;
    }

    /**
     * Get the value of usapellido
     */ 
    public function getUsapellido()
    {
        return $this->usapellido;
    }

    /**
     * Set the value of usapellido
     *
     * @return  self
     */ 
    public function setUsapellido($usapellido)
    {
        $this->usapellido = $usapellido;

        return $this;
    }

    /**
     * Get the value of uslogin
     */ 
    public function getUslogin()
    {
        return $this->uslogin;
    }

    /**
     * Set the value of uslogin
     *
     * @return  self
     */ 
    public function setUslogin($uslogin)
    {
        $this->uslogin = $uslogin;

        return $this;
    }

    /**
     * Get the value of usclave
     */ 
    public function getUsclave()
    {
        return $this->usclave;
    }

    /**
     * Set the value of usclave
     *
     * @return  self
     */ 
    public function setUsclave($usclave)
    {
        $this->usclave = $usclave;

        return $this;
    }

    /**
     * Get the value of usactivo
     */ 
    public function getUsactivo()
    {
        return $this->usactivo;
    }

    /**
     * Set the value of usactivo
     *
     * @return  self
     */ 
    public function setUsactivo($usactivo)
    {
        $this->usactivo = $usactivo;

        return $this;
    }
    public function obtenerUltimoID(){
        $arreglo = array();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM usuario WHERE idusuario = (SELECT MAX( idusuario ) FROM usuario )";
        //if ($parametro!="") {
        //    $sql.='WHERE acnombre ='."$parametro";
        //}
        //echo "$sql";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], 
                    $row['uslogin'], $row['usclave'], $row['usactivo']);
                    array_push($arreglo, $obj);
                }
            
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    
    }
    public function insertar(){
        $resp = false;
    $base=new BaseDatos();
    $sql="INSERT INTO usuario(idusuario,usnombre,usapellido,uslogin,usclave,usactivo) VALUES('".$this->getIdusuario()."','".$this->getUsnombre()."', '".$this->getUsapellido()."',
     '".$this->getUslogin()."', '".md5($this->getUsclave())."', '".$this->getUsactivo()."');";
    if ($base->Iniciar()) {
        if ($elid = $base->Ejecutar($sql)) {
            $this->setIdusuario($elid);
            $resp = true;
        } else {
            echo "error";
            //$this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
    } else {
        echo "error 2";
        //$this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
    }
    
    return $resp;
    }
    public function modificar(){
        $resp = false;
    $base=new BaseDatos();
    $sql="UPDATE usuario SET usnombre='".$this->getUsnombre()."',usapellido='".$this->getUsapellido()."',
    idusuario='".$this->getIdusuario()."',uslogin='".$this->getUslogin()."',usclave='".$this->getUsclave()."' WHERE idusuario=".$this->getIdusuario();
    //echo "$sql";
    
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
    }
    return $resp;
    }
    public function modificarUsuarioAct(){
        $resp = false;
    $base=new BaseDatos();
    $sql="UPDATE usuario SET usactivo='".$this->getUsactivo()."' WHERE idusuario=".$this->getIdusuario();
    //echo "$sql";
    
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
    }
    return $resp;
    }
    
    public function eliminar(){
        $resp = false;
    $base=new BaseDatos();
    $sql="DELETE FROM usuario WHERE idusuario=".$this->getIdusuario();
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            return true;
        } else {
            //$this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
    }
    return $resp;
    }
    public static function buscarUsuarioCargado($idusuariocargado){
        $arreglo = array();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM `usuario` WHERE idusuario = '$idusuariocargado'";
        //if ($parametro!="") {
        //    $sql.='WHERE acnombre ='."$parametro";
        //}
        //echo "$sql";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new usuario();
                    $obj->setear($row['idusuario'], $row['usnombre'], $row['usapellido'], 
                    $row['uslogin'], $row['usclave'], $row['usactivo']);
                    array_push($arreglo, $obj);
                }
            
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    }
}
    

>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
?>