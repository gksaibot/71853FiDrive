<?php

class archivoCargadoEstado{

    private $idarchivocargadoestado;
    private $idestadotipos;
    private $acedescripcion;
    private $idusuario;
    private $acefechaingreso;
    private $acefechafin;
    private $idarchivocargado;

    public function __construct(){
        $idarchivocargadoestado='';
        $idestadotipos='';
        $acedescripcion='';
        $idusuario='';
        $acefechaingreso='';
        $acefechafin='';
        $idarchivocargado='';

    }
    public function setear($idarchivocargadoestado, $idestadotipos, $acedescripcion, $idusuario, $acefechaingreso, 
                            $acefechafin, $idarchivocargado)    {
        $this->setIdarchivocargadoestado($idarchivocargadoestado);
        $this->setIdestadotipos($idestadotipos);
        $this->setAcedescripcion($acedescripcion);
        $this->setIdusuario($idusuario);
        $this->setAcefechaingreso($acefechaingreso);
        $this->setAcefechafin($acefechafin);
        $this->setIdarchivocargado($idarchivocargado);
        
    }

    /**
     * Get the value of idarchivocargadoestado
     */ 
    public function getIdarchivocargadoestado()
    {
        return $this->idarchivocargadoestado;
    }

    /**
     * Set the value of idarchivocargadoestado
     *
     * @return  self
     */ 
    public function setIdarchivocargadoestado($idarchivocargadoestado)
    {
        $this->idarchivocargadoestado = $idarchivocargadoestado;

        return $this;
    }

    /**
     * Get the value of idestadotipos
     */ 
    public function getIdestadotipos()
    {
        return $this->idestadotipos;
    }

    /**
     * Set the value of idestadotipos
     *
     * @return  self
     */ 
    public function setIdestadotipos($idestadotipos)
    {
        $this->idestadotipos = $idestadotipos;

        return $this;
    }

    /**
     * Get the value of acedescripcion
     */ 
    public function getAcedescripcion()
    {
        return $this->acedescripcion;
    }

    /**
     * Set the value of acedescripcion
     *
     * @return  self
     */ 
    public function setAcedescripcion($acedescripcion)
    {
        $this->acedescripcion = $acedescripcion;

        return $this;
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
     * Get the value of acefechaingreso
     */ 
    public function getAcefechaingreso()
    {
        return $this->acefechaingreso;
    }

    /**
     * Set the value of acefechaingreso
     *
     * @return  self
     */ 
    public function setAcefechaingreso($acefechaingreso)
    {
        $this->acefechaingreso = $acefechaingreso;

        return $this;
    }

    /**
     * Get the value of acefechafin
     */ 
    public function getAcefechafin()
    {
        return $this->acefechafin;
    }

    /**
     * Set the value of acefechafin
     *
     * @return  self
     */ 
    public function setAcefechafin($acefechafin)
    {
        $this->acefechafin = $acefechafin;

        return $this;
    }

    /**
     * Get the value of idarchivocargado
     */ 
    public function getIdarchivocargado()
    {
        return $this->idarchivocargado;
    }

    /**
     * Set the value of idarchivocargado
     *
     * @return  self
     */ 
    public function setIdarchivocargado($idarchivocargado)
    {
        $this->idarchivocargado = $idarchivocargado;

        return $this;
    }
    
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM archivocargadoestado WHERE idarchivocargadoestado = ".$this->getIdarchivocargadoestado();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idarchivocargadoestado'], $row['idestadotipos'], $row['acedescripcion'], 
                    $row['idusuario'], $row['acefechaingreso'], $row['acefechafin'], $row['idarchivocargado']);
                    
                }
            }
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $resp;
          
    }

    
public function insertar(){
    $resp = false;
    $base=new BaseDatos();//'".$this->getIdarchivocargadoestado()."'
    $sql="INSERT INTO archivocargadoestado(idarchivocargadoestado,idestadotipos,acedescripcion,idusuario,acefechaingreso,acefechafin,idarchivocargado)
      VALUES('".$this->getIdarchivocargadoestado()."','".$this->getIdestadotipos()."', '".$this->getAcedescripcion()."', '".$this->getIdusuario()."', '".$this->getAcefechaingreso()."', 
      '".$this->getAcefechafin()."', '".$this->getIdarchivocargado()."');";
      //echo $sql;
    if ($base->Iniciar()) {
        if ($elid = $base->Ejecutar($sql)) {
            //echo "entro a set id ace";
            $this->setIdarchivocargadoestado($elid);
            $resp = true;
        } else {
            echo "error";
            //$this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
    } else {
        echo "error 2";
        //$this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
    }
    echo $elid;
    return $resp;
}

public function modificar(){
    $resp = false;
    $base=new BaseDatos();
    $sql="UPDATE archivocargadoestado SET acefechafin='".$this->getAcefechafin()."' WHERE idarchivocargado=".$this->getIdarchivocargado();
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
    $sql="DELETE FROM auto WHERE idarchivocargadoestado=".$this->getIdarchivocargadoestado();
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
    
public static function listar($parametro=""){
    $arreglo = array();
    $base=new BaseDatos();
    $sql="SELECT * FROM archivocargadoestado ";
    if ($parametro!="") {
        $sql.='WHERE '.$parametro;
    }
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivocargadoestado();
                $obj->setear($row['idarchivocargadoestado'], $row['idestadotipos'], $row['acedescripcion'], $row['idusuario']
                , $row['acefechaingreso'], $row['acefechafin'], $row['idarchivocargado']);
                array_push($arreglo, $obj);
            }
           
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}
public static function buscarArchivoCargadoEstado($idarchivocargado,$idestadotipos){
    $arreglo = array();
    $base=new BaseDatos();
    //var_dump($idestadotipos);
    $sql="SELECT * FROM `archivocargadoestado` WHERE acefechafin = '0000-00-00 00:00:00' AND idestadotipos = '$idestadotipos' 
    AND idarchivocargado='$idarchivocargado'";
    //if ($parametro!="") {
    //    $sql.='WHERE acnombre ='."$parametro";
    //}
    //echo "$sql";
    //echo "buscarArchivoCargadoEstado";
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivoCargadoEstado();
                $obj->setear($row['idarchivocargadoestado'], $row['idestadotipos'], $row['acedescripcion'], 
                $row['idusuario'], $row['acefechaingreso'], $row['acefechafin'], $row['idarchivocargado']);
                array_push($arreglo, $obj);
            }
        
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    //print_r($arreglo);
    return $arreglo;
}
public static function buscarestadotipo($idarchivocargado){
    
    $arreglo = array();
    $base=new BaseDatos();
    //var_dump($idestadotipos);
    $sql="SELECT * FROM archivocargadoestado WHERE acefechafin='0000-00-00 00:00:00' AND idarchivocargado = '$idarchivocargado'";
    //if ($parametro!="") {
    //    $sql.='WHERE acnombre ='."$parametro";
    //}
    //echo "$sql";
    //echo "buscarArchivoCargadoEstado";
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivoCargadoEstado();
                $obj->setear($row['idarchivocargadoestado'], $row['idestadotipos'], $row['acedescripcion'], 
                $row['idusuario'], $row['acefechaingreso'], $row['acefechafin'], $row['idarchivocargado']);
                array_push($arreglo, $obj);
            }
        
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    //print_r($arreglo);
    return $arreglo;


}

public static function buscar($idarchivocargadoestado){
    $base= new BaseDatos();
    $consulta="SELECT * FROM archivocargadoestado WHERE `idarchivocargadoestado` = '$idarchivocargadoestado'";
    
    if($base->getConec()){
        $resul=$base->Ejecutar($consulta);
        if(!$resul){
            echo "<p>Error en la consulta</p>";   
        }else{
            $datos=$resul->fetchAll(PDO::FETCH_ASSOC);
            foreach ($datos as $valor){
                echo "<p>$valor[acnombre] $valor[acdescripcion]</p>";
            }    

        }
    }else{
        $base->getError();
        $salida=false;
    }
    return $salida;

}
}


?>