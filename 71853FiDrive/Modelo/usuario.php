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
}


?>