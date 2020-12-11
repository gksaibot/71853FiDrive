<?php

class estadoTipos{

    private $idestadotipos;
    private $etdescripcion;
    private $etactivo;

    public function __construct(){
        $idestadotipos='';
        $etdescripcion='';
        $etactivo='';
        
    }
    public function setear($idestadotipos, $etdescripcion, $etactivo)    {
        $this->setIdestadotipos($idestadotipos);
        $this->setEtdescripcion($etdescripcion);
        $this->setEtactivo($etactivo);
        
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
     * Get the value of etdescripcion
     */ 
    public function getEtdescripcion()
    {
        return $this->etdescripcion;
    }

    /**
     * Set the value of etdescripcion
     *
     * @return  self
     */ 
    public function setEtdescripcion($etdescripcion)
    {
        $this->etdescripcion = $etdescripcion;

        return $this;
    }

    /**
     * Get the value of etactivo
     */ 
    public function getEtactivo()
    {
        return $this->etactivo;
    }

    /**
     * Set the value of etactivo
     *
     * @return  self
     */ 
    public function setEtactivo($etactivo)
    {
        $this->etactivo = $etactivo;

        return $this;
    }
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM estadotipos WHERE idestadotipos = ".$this->getIdestadotipos();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idestadotipos'], $row['etdescripcion'], $row['etactivo']);
                    
                }
            }
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $resp;
          
    }

    
    
public function insertar(){
    $resp = false;
    $base=new BaseDatos();
    $sql="INSERT INTO estadotipos(idestadotipos,etdescripcion,etactivo)
      VALUES('".$this->getIdestadotipos()."', '".$this->getEtdescripcion()."', '".$this->getEtactivo()."';";
    if ($base->Iniciar()) {
        if ($elid = $base->Ejecutar($sql)) {
            $this->setIdestadotipos($elid);
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
    $sql="UPDATE estadotipos SET etdescripcion='".$this->getEtdescripcion()."' WHERE idestadotipos=".$this->getIdestadotipos();
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
    $sql="DELETE FROM auto WHERE idestadotipos=".$this->getIdestadotipos();
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
    $sql="SELECT * FROM estadotipos ";
    if ($parametro!="") {
        $sql.='WHERE '.$parametro;
    }
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new estadoTipos();
                $obj->setear($row['idestadotipos'], $row['etdescripcion'], $row['etactivo']);
                array_push($arreglo, $obj);
            }
           
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}

public static function buscar($idestadotipos){
    $base= new BaseDatos();
    $consulta="SELECT * FROM estadotipos WHERE `idestadotipos` = '$idestadotipos'";
    
    if($base->getConec()){
        $resul=$base->Ejecutar($consulta);
        if(!$resul){
            echo "<p>Error en la consulta</p>";   
        }else{
            $datos=$resul->fetchAll(PDO::FETCH_ASSOC);
            foreach ($datos as $valor){
                echo "<p>$valor[etdescripcion] $valor[etactivo]</p>";
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