<<<<<<< HEAD
<?php


class archivoCargado{

    private $idarchivocargado;
    private $acnombre;
    private $acdescripcion;
    private $acicono;
    private $idusuario;
    private $aclinkacceso;
    private $accantidaddescarga;
    private $accantidadusada;
    private $acfechainiciocompartir;
    private $acefechafincompartir;
    private $acprotegidoclave;


    
    
    public function __construct(){
        $idarchivocargado='';
        $acnombre='';
        $acdescripcion='';
        $acicono='';
        $idusuario='';
        $aclinkacceso='';
        $accantidaddescarga='';
        $accantidadusada='';
        $acfechainiciocompartir='';
        $acefechafincompartir='';
        $acprotegidoclave='';

    }
    public function setear($idarchivocargado, $acnombre, $acdescripcion, $acicono, $idusuario, $aclinkacceso, 
                            $accantidaddescarga, $accantidadusada, $acefechafincompartir, 
                            $acfechainiciocompartir, $acprotegidoclave )    {
        $this->setIdarchivocargado($idarchivocargado);
        $this->setAcnombre($acnombre);
        $this->setAcdescripcion($acdescripcion);
        $this->setAcicono($acicono);
        $this->setIdusuario($idusuario);
        $this->setAclinkacceso($aclinkacceso);
        $this->setAccantidaddescarga($accantidaddescarga);
        $this->setAccantidadusada($accantidadusada);
        $this->setAcefechafincompartir($acefechafincompartir);
        $this->setAcfechainiciocompartir($acfechainiciocompartir);
        $this->setAcprotegidoclave($acprotegidoclave);
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

    /**
     * Get the value of acnombre
     */ 
    public function getAcnombre()
    {
        return $this->acnombre;
    }

    /**
     * Set the value of acnombre
     *
     * @return  self
     */ 
    public function setAcnombre($acnombre)
    {
        $this->acnombre = $acnombre;

        return $this;
    }

    

    /**
     * Get the value of acdescripcion
     */ 
    public function getAcdescripcion()
    {
        return $this->acdescripcion;
    }

    /**
     * Set the value of acdescripcion
     *
     * @return  self
     */ 
    public function setAcdescripcion($acdescripcion)
    {
        $this->acdescripcion = $acdescripcion;

        return $this;
    }

    /**
     * Get the value of acicono
     */ 
    public function getAcicono()
    {
        return $this->acicono;
    }

    /**
     * Set the value of acicono
     *
     * @return  self
     */ 
    public function setAcicono($acicono)
    {
        $this->acicono = $acicono;

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
     * Get the value of aclinkacceso
     */ 
    public function getAclinkacceso()
    {
        return $this->aclinkacceso;
    }

    /**
     * Set the value of aclinkacceso
     *
     * @return  self
     */ 
    public function setAclinkacceso($aclinkacceso)
    {
        $this->aclinkacceso = $aclinkacceso;

        return $this;
    }

    /**
     * Get the value of accantidaddescarga
     */ 
    public function getAccantidaddescarga()
    {
        return $this->accantidaddescarga;
    }

    /**
     * Set the value of accantidaddescarga
     *
     * @return  self
     */ 
    public function setAccantidaddescarga($accantidaddescarga)
    {
        $this->accantidaddescarga = $accantidaddescarga;

        return $this;
    }

    /**
     * Get the value of accantidadusada
     */ 
    public function getAccantidadusada()
    {
        return $this->accantidadusada;
    }

    /**
     * Set the value of accantidadusada
     *
     * @return  self
     */ 
    public function setAccantidadusada($accantidadusada)
    {
        $this->accantidadusada = $accantidadusada;

        return $this;
    }

    /**
     * Get the value of acfechainiciocompartir
     */ 
    public function getAcfechainiciocompartir()
    {
        return $this->acfechainiciocompartir;
    }

    /**
     * Set the value of acfechainiciocompartir
     *
     * @return  self
     */ 
    public function setAcfechainiciocompartir($acfechainiciocompartir)
    {
        $this->acfechainiciocompartir = $acfechainiciocompartir;

        return $this;
    }

    /**
     * Get the value of acefechafincompartir
     */ 
    public function getAcefechafincompartir()
    {
        return $this->acefechafincompartir;
    }

    /**
     * Set the value of acefechafincompartir
     *
     * @return  self
     */ 
    public function setAcefechafincompartir($acefechafincompartir)
    {
        $this->acefechafincompartir = $acefechafincompartir;

        return $this;
    }

    /**
     * Get the value of acprotegidoclave
     */ 
    public function getAcprotegidoclave()
    {
        return $this->acprotegidoclave;
    }

    /**
     * Set the value of acprotegidoclave
     *
     * @return  self
     */ 
    public function setAcprotegidoclave($acprotegidoclave)
    {
        $this->acprotegidoclave = $acprotegidoclave;

        return $this;
    }
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM archivocargado WHERE idarchivocargado = ".$this->getIdarchivocargado();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idarchivocargado'], $row['acnombre'], $row['acdescripcion'], 
                    $row['acicono'], $row['idusuario'], $row['aclinkacceso'], $row['accantidaddescarga'], $row['accantidadusada'],
                    $row['acfechainiciocompartir'],$row['acefechafincompartir'],$row['acprotegidoclave']);
                    
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
    $sql="INSERT INTO archivocargado(idarchivocargado,acnombre,acdescripcion,acicono,idusuario,aclinkacceso,accantidaddescarga,accantidadusada,acfechainiciocompartir,acefechafincompartir,acprotegidoclave)
      VALUES('".$this->getIdarchivocargado()."','".$this->getAcnombre()."', '".$this->getAcdescripcion()."', '".$this->getAcicono()."', '".$this->getIdusuario()."', '".$this->getAclinkacceso()."', 
      '".$this->getAccantidaddescarga()."', '".$this->getAccantidadusada()."', '".$this->getAcfechainiciocompartir()."', '".$this->getAcefechafincompartir()."', '".$this->getAcprotegidoclave()."');";
    if ($base->Iniciar()) {
        if ($elid = $base->Ejecutar($sql)) {
            $this->setIdarchivocargado($elid);
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
public function compartirmodificar(){
    $resp = false;
    
    $base=new BaseDatos();
    $sql="UPDATE archivocargado SET aclinkacceso='".$this->getAclinkacceso()."',accantidaddescarga='".$this->getAccantidaddescarga()."',
    acefechafincompartir='".$this->getAcefechafincompartir()."',accantidadusada='".$this->getAccantidadusada()."' WHERE idarchivocargado=".$this->getIdarchivocargado();
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
    }
    //var_dump($resp);
    return $resp;
}

public function modificar(){
    $resp = false;
    $base=new BaseDatos();
    $sql="UPDATE archivocargado SET acnombre='".$this->getAcnombre()."',acdescripcion='".$this->getAcdescripcion()."',
    idusuario='".$this->getIdusuario()."',acicono='".$this->getAcicono()."',acfechainiciocompartir='0000-00-00 00:00' WHERE idarchivocargado=".$this->getIdarchivocargado();
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
    $sql="DELETE FROM auto WHERE idarchivocargado=".$this->getIdarchivocargado();
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
public static function listadoArchivosCargadosE($datos){
    $idusuario=$datos['idusuario'];
    $estadocargado=$datos['estado1'];
    $estadonocompartido=$datos['estado3'];
    $arreglo = array();
    $base=new BaseDatos();
    $sql="SELECT archivocargado.idarchivocargado,acnombre,usuario.uslogin,archivocargado.idusuario FROM `archivocargado` INNER JOIN archivocargadoestado 
    ON archivocargadoestado.idarchivocargado=archivocargado.idarchivocargado AND acefechafin='0000-00-00 00:00' AND idestadotipos IN ($estadocargado,$estadonocompartido) 
    INNER JOIN usuario ON archivocargado.idusuario=usuario.idusuario AND usuario.idusuario=$idusuario";
    //if ($parametro!="") {
    //    $sql.='WHERE acnombre ='."$parametro";
    //}
    //echo "$sql";
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivoCargado();
                $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['uslogin'], null, $row['idusuario'] 
                , null, null, null, null, null, null);
                array_push($arreglo, $obj);
            }
        
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}

public static function listadoArchivosCargadosEstado($datos){
    $idusuario=$datos['idusuario'];
    $estadocompartido=$datos['estado2'];
    //var_dump($datos);
    $arreglo = array();
    $base=new BaseDatos();
    
    $sql="SELECT archivocargado.idarchivocargado,acnombre,archivocargado.idusuario,usuario.uslogin,archivocargadoestado.idestadotipos FROM `archivocargado` INNER JOIN archivocargadoestado 
    ON archivocargadoestado.idarchivocargado=archivocargado.idarchivocargado AND idestadotipos=$estadocompartido AND acefechafin='0000-00-00 00:00'
    INNER JOIN usuario ON archivocargado.idusuario=usuario.idusuario AND usuario.idusuario=$idusuario";
    //if ($parametro!="") {
    //    $sql.='WHERE acnombre ='."$parametro";
    //}
    //echo "$sql";
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivoCargado();
                $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['uslogin'], null, $row['idusuario'] 
                , null, null, null, null, null, null);
                array_push($arreglo, $obj);
            }
        
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}


public static function listar($parametro=""){
    $arreglo = array();
    $base=new BaseDatos();
    $sql="SELECT * FROM archivocargado ";
    if ($parametro!="") {
        $sql.='WHERE '.$parametro;
    }
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivocargado();
                $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['acdescripcion'], $row['acicono'], $row['idusuario']
                , $row['aclinkacceso'], $row['accantidaddescarga'], $row['accantidadusada'], $row['acefechafincompartir'], $row['acfechainiciocompartir'], $row['acprotegidoclave']);
                array_push($arreglo, $obj);
            }
           
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}

    public static function buscarArchivoCargado($idarchivocargado){
        $arreglo = array();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM `archivocargado` WHERE idarchivocargado = '$idarchivocargado'";
        //if ($parametro!="") {
        //    $sql.='WHERE acnombre ='."$parametro";
        //}
        //echo "$sql";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new archivoCargado();
                    $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['acdescripcion'], 
                    $row['acicono'], $row['idusuario'], $row['aclinkacceso'], $row['accantidaddescarga'], $row['accantidadusada'],
                    $row['acfechainiciocompartir'],$row['acefechafincompartir'],$row['acprotegidoclave']);
                    array_push($arreglo, $obj);
                }
            
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    }
    


public static function buscar($idarchivocargado){
    $base= new BaseDatos();
    $consulta="SELECT * FROM archivocargado WHERE `idarchivocargado` = '$idarchivocargado'";
    
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



=======
<?php


class archivoCargado{

    private $idarchivocargado;
    private $acnombre;
    private $acdescripcion;
    private $acicono;
    private $idusuario;
    private $aclinkacceso;
    private $accantidaddescarga;
    private $accantidadusada;
    private $acfechainiciocompartir;
    private $acefechafincompartir;
    private $acprotegidoclave;


    
    
    public function __construct(){
        $idarchivocargado='';
        $acnombre='';
        $acdescripcion='';
        $acicono='';
        $idusuario='';
        $aclinkacceso='';
        $accantidaddescarga='';
        $accantidadusada='';
        $acfechainiciocompartir='';
        $acefechafincompartir='';
        $acprotegidoclave='';

    }
    public function setear($idarchivocargado, $acnombre, $acdescripcion, $acicono, $idusuario, $aclinkacceso, 
                            $accantidaddescarga, $accantidadusada, $acefechafincompartir, 
                            $acfechainiciocompartir, $acprotegidoclave )    {
        $this->setIdarchivocargado($idarchivocargado);
        $this->setAcnombre($acnombre);
        $this->setAcdescripcion($acdescripcion);
        $this->setAcicono($acicono);
        $this->setIdusuario($idusuario);
        $this->setAclinkacceso($aclinkacceso);
        $this->setAccantidaddescarga($accantidaddescarga);
        $this->setAccantidadusada($accantidadusada);
        $this->setAcefechafincompartir($acefechafincompartir);
        $this->setAcfechainiciocompartir($acfechainiciocompartir);
        $this->setAcprotegidoclave($acprotegidoclave);
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

    /**
     * Get the value of acnombre
     */ 
    public function getAcnombre()
    {
        return $this->acnombre;
    }

    /**
     * Set the value of acnombre
     *
     * @return  self
     */ 
    public function setAcnombre($acnombre)
    {
        $this->acnombre = $acnombre;

        return $this;
    }

    

    /**
     * Get the value of acdescripcion
     */ 
    public function getAcdescripcion()
    {
        return $this->acdescripcion;
    }

    /**
     * Set the value of acdescripcion
     *
     * @return  self
     */ 
    public function setAcdescripcion($acdescripcion)
    {
        $this->acdescripcion = $acdescripcion;

        return $this;
    }

    /**
     * Get the value of acicono
     */ 
    public function getAcicono()
    {
        return $this->acicono;
    }

    /**
     * Set the value of acicono
     *
     * @return  self
     */ 
    public function setAcicono($acicono)
    {
        $this->acicono = $acicono;

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
     * Get the value of aclinkacceso
     */ 
    public function getAclinkacceso()
    {
        return $this->aclinkacceso;
    }

    /**
     * Set the value of aclinkacceso
     *
     * @return  self
     */ 
    public function setAclinkacceso($aclinkacceso)
    {
        $this->aclinkacceso = $aclinkacceso;

        return $this;
    }

    /**
     * Get the value of accantidaddescarga
     */ 
    public function getAccantidaddescarga()
    {
        return $this->accantidaddescarga;
    }

    /**
     * Set the value of accantidaddescarga
     *
     * @return  self
     */ 
    public function setAccantidaddescarga($accantidaddescarga)
    {
        $this->accantidaddescarga = $accantidaddescarga;

        return $this;
    }

    /**
     * Get the value of accantidadusada
     */ 
    public function getAccantidadusada()
    {
        return $this->accantidadusada;
    }

    /**
     * Set the value of accantidadusada
     *
     * @return  self
     */ 
    public function setAccantidadusada($accantidadusada)
    {
        $this->accantidadusada = $accantidadusada;

        return $this;
    }

    /**
     * Get the value of acfechainiciocompartir
     */ 
    public function getAcfechainiciocompartir()
    {
        return $this->acfechainiciocompartir;
    }

    /**
     * Set the value of acfechainiciocompartir
     *
     * @return  self
     */ 
    public function setAcfechainiciocompartir($acfechainiciocompartir)
    {
        $this->acfechainiciocompartir = $acfechainiciocompartir;

        return $this;
    }

    /**
     * Get the value of acefechafincompartir
     */ 
    public function getAcefechafincompartir()
    {
        return $this->acefechafincompartir;
    }

    /**
     * Set the value of acefechafincompartir
     *
     * @return  self
     */ 
    public function setAcefechafincompartir($acefechafincompartir)
    {
        $this->acefechafincompartir = $acefechafincompartir;

        return $this;
    }

    /**
     * Get the value of acprotegidoclave
     */ 
    public function getAcprotegidoclave()
    {
        return $this->acprotegidoclave;
    }

    /**
     * Set the value of acprotegidoclave
     *
     * @return  self
     */ 
    public function setAcprotegidoclave($acprotegidoclave)
    {
        $this->acprotegidoclave = $acprotegidoclave;

        return $this;
    }
    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM archivocargado WHERE idarchivocargado = ".$this->getIdarchivocargado();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['idarchivocargado'], $row['acnombre'], $row['acdescripcion'], 
                    $row['acicono'], $row['idusuario'], $row['aclinkacceso'], $row['accantidaddescarga'], $row['accantidadusada'],
                    $row['acfechainiciocompartir'],$row['acefechafincompartir'],$row['acprotegidoclave']);
                    
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
    $sql="INSERT INTO archivocargado(idarchivocargado,acnombre,acdescripcion,acicono,idusuario,aclinkacceso,accantidaddescarga,accantidadusada,acfechainiciocompartir,acefechafincompartir,acprotegidoclave)
      VALUES('".$this->getIdarchivocargado()."','".$this->getAcnombre()."', '".$this->getAcdescripcion()."', '".$this->getAcicono()."', '".$this->getIdusuario()."', '".$this->getAclinkacceso()."', 
      '".$this->getAccantidaddescarga()."', '".$this->getAccantidadusada()."', '".$this->getAcfechainiciocompartir()."', '".$this->getAcefechafincompartir()."', '".$this->getAcprotegidoclave()."');";
    if ($base->Iniciar()) {
        if ($elid = $base->Ejecutar($sql)) {
            $this->setIdarchivocargado($elid);
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
public function compartirmodificar(){
    $resp = false;
    
    $base=new BaseDatos();
    $sql="UPDATE archivocargado SET aclinkacceso='".$this->getAclinkacceso()."',accantidaddescarga='".$this->getAccantidaddescarga()."',
    acefechafincompartir='".$this->getAcefechafincompartir()."',accantidadusada='".$this->getAccantidadusada()."' WHERE idarchivocargado=".$this->getIdarchivocargado();
    if ($base->Iniciar()) {
        if ($base->Ejecutar($sql)) {
            $resp = true;
        } else {
            //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
    } else {
        //$this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
    }
    //var_dump($resp);
    return $resp;
}

public function modificar(){
    $resp = false;
    $base=new BaseDatos();
    $sql="UPDATE archivocargado SET acnombre='".$this->getAcnombre()."',acdescripcion='".$this->getAcdescripcion()."',
    idusuario='".$this->getIdusuario()."',acicono='".$this->getAcicono()."',acfechainiciocompartir='0000-00-00 00:00' WHERE idarchivocargado=".$this->getIdarchivocargado();
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
    $sql="DELETE FROM auto WHERE idarchivocargado=".$this->getIdarchivocargado();
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
public static function listadoArchivosCargadosE($datos){
    $idusuario=$datos['idusuario'];
    $estadocargado=$datos['estado1'];
    $estadonocompartido=$datos['estado3'];
    $arreglo = array();
    $base=new BaseDatos();
    $sql="SELECT archivocargado.idarchivocargado,acnombre,usuario.uslogin,archivocargado.idusuario FROM `archivocargado` INNER JOIN archivocargadoestado 
    ON archivocargadoestado.idarchivocargado=archivocargado.idarchivocargado AND acefechafin='0000-00-00 00:00' AND idestadotipos IN ($estadocargado,$estadonocompartido) 
    INNER JOIN usuario ON archivocargado.idusuario=usuario.idusuario AND usuario.idusuario=$idusuario";
    //if ($parametro!="") {
    //    $sql.='WHERE acnombre ='."$parametro";
    //}
    //echo "$sql";
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivoCargado();
                $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['uslogin'], null, $row['idusuario'] 
                , null, null, null, null, null, null);
                array_push($arreglo, $obj);
            }
        
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}

public static function listadoArchivosCargadosEstado($datos){
    $idusuario=$datos['idusuario'];
    $estadocompartido=$datos['estado2'];
    //var_dump($datos);
    $arreglo = array();
    $base=new BaseDatos();
    
    $sql="SELECT archivocargado.idarchivocargado,acnombre,archivocargado.idusuario,usuario.uslogin,archivocargadoestado.idestadotipos FROM `archivocargado` INNER JOIN archivocargadoestado 
    ON archivocargadoestado.idarchivocargado=archivocargado.idarchivocargado AND idestadotipos=$estadocompartido AND acefechafin='0000-00-00 00:00'
    INNER JOIN usuario ON archivocargado.idusuario=usuario.idusuario AND usuario.idusuario=$idusuario";
    //if ($parametro!="") {
    //    $sql.='WHERE acnombre ='."$parametro";
    //}
    //echo "$sql";
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivoCargado();
                $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['uslogin'], null, $row['idusuario'] 
                , null, null, null, null, null, null);
                array_push($arreglo, $obj);
            }
        
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}


public static function listar($parametro=""){
    $arreglo = array();
    $base=new BaseDatos();
    $sql="SELECT * FROM archivocargado ";
    if ($parametro!="") {
        $sql.='WHERE '.$parametro;
    }
    $res = $base->Ejecutar($sql);
    if($res>-1){
        if($res>0){
            
            while ($row = $base->Registro()){
                $obj= new archivocargado();
                $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['acdescripcion'], $row['acicono'], $row['idusuario']
                , $row['aclinkacceso'], $row['accantidaddescarga'], $row['accantidadusada'], $row['acefechafincompartir'], $row['acfechainiciocompartir'], $row['acprotegidoclave']);
                array_push($arreglo, $obj);
            }
           
        }
        
    } else {
        //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
    }
    return $arreglo;
}

    public static function buscarArchivoCargado($idarchivocargado){
        $arreglo = array();
        $base=new BaseDatos();
        
        $sql="SELECT * FROM `archivocargado` WHERE idarchivocargado = '$idarchivocargado'";
        //if ($parametro!="") {
        //    $sql.='WHERE acnombre ='."$parametro";
        //}
        //echo "$sql";
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new archivoCargado();
                    $obj->setear($row['idarchivocargado'], $row['acnombre'], $row['acdescripcion'], 
                    $row['acicono'], $row['idusuario'], $row['aclinkacceso'], $row['accantidaddescarga'], $row['accantidadusada'],
                    $row['acfechainiciocompartir'],$row['acefechafincompartir'],$row['acprotegidoclave']);
                    array_push($arreglo, $obj);
                }
            
            }
            
        } else {
            //$this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        //print_r($arreglo);
        return $arreglo;
    }
    


public static function buscar($idarchivocargado){
    $base= new BaseDatos();
    $consulta="SELECT * FROM archivocargado WHERE `idarchivocargado` = '$idarchivocargado'";
    
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



>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
?>