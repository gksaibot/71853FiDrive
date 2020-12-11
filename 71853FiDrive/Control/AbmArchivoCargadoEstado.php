<<<<<<< HEAD
<?php

class AbmArchivoCargadoEstado{ 


public function cargarObjeto($param){
        $obj = null;
    
        if( array_key_exists('idarchivocargadoestado',$param) and array_key_exists('idestadotipos',$param) and array_key_exists('acedescripcion',$param)
        and array_key_exists('idusuario',$param) and array_key_exists('acefechaingreso',$param) and array_key_exists('acefechafin',$param) and array_key_exists('idarchivocargado',$param)){
            $obj = new archivoCargadoEstado();
            $obj->setear($param['idarchivocargadoestado'], $param['idestadotipos'], $param['acedescripcion'], $param['idusuario'], $param['acefechaingreso'], $param['acefechafin'], $param['idarchivocargado']);
            //echo "###cargar objetooooo";
            //print_r($obj);
            //echo "###";
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return 
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['id']) ){
            $obj = new archivoCargadoEstado();
            $obj->setear($param['idarchivocargadoestado'], $param['idestadotipos'], $param['acedescripcion'], $param['idusuario'], $param['acefechaingreso'],
            $param['acefechafin'],$param['idarchivocargado']);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idarchivocargadoestado']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $param['idarchivocargadoestado'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    public function modificacionFechaFin($param){
        $resp = false;
        //echo "##entro modificacionFechaFin";
        if ($this->seteadosCamposClaves($param)){
            $param['acefechafin']=date("Y-m-d");
            $elObjtTabla = $this->cargarObjeto($param);
            //echo"modificacion fecha fin";
            //var_dump($elObjtTabla);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    public function buscarUnEstadotipo($param){
        $where = " true ";
        $resp=false;
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargadoEstado::buscarEstadoTipo($param);  
        if ($arreglo<>null)
            $resp=true;
        else{
            $resp=false;
            //echo "<br> entro a false <br>";
        }
        
            
    return $arreglo;
        
    }

    public function buscarUnarchivoCargadoEstado($param, $idestadotipos){
        $where = " true ";
        $resp=false;
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargadoEstado::buscarArchivoCargadoEstado($param, $idestadotipos);  
        if ($arreglo<>null)
            $resp=true;
        else{
            $resp=false;
            //echo "<br> entro a false <br>";
        }
        
            
    return $arreglo;
        
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargadoEstado::listar($where);  
        return $arreglo;
            
            
      
        
    }






}
=======
<?php

class AbmArchivoCargadoEstado{ 


public function cargarObjeto($param){
        $obj = null;
    
        if( array_key_exists('idarchivocargadoestado',$param) and array_key_exists('idestadotipos',$param) and array_key_exists('acedescripcion',$param)
        and array_key_exists('idusuario',$param) and array_key_exists('acefechaingreso',$param) and array_key_exists('acefechafin',$param) and array_key_exists('idarchivocargado',$param)){
            $obj = new archivoCargadoEstado();
            $obj->setear($param['idarchivocargadoestado'], $param['idestadotipos'], $param['acedescripcion'], $param['idusuario'], $param['acefechaingreso'], $param['acefechafin'], $param['idarchivocargado']);
            //echo "###cargar objetooooo";
            //print_r($obj);
            //echo "###";
        }
        return $obj;
    }
    
    /**
     * Espera como parametro un arreglo asociativo donde las claves coinciden con los nombres de las variables instancias del objeto que son claves
     * @param array $param
     * @return 
     */
    private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['id']) ){
            $obj = new archivoCargadoEstado();
            $obj->setear($param['idarchivocargadoestado'], $param['idestadotipos'], $param['acedescripcion'], $param['idusuario'], $param['acefechaingreso'],
            $param['acefechafin'],$param['idarchivocargado']);
        }
        return $obj;
    }
    
    
    /**
     * Corrobora que dentro del arreglo asociativo estan seteados los campos claves
     * @param array $param
     * @return boolean
     */
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idarchivocargadoestado']))
            $resp = true;
        return $resp;
    }
    
    /**
     * 
     * @param array $param
     */
    public function alta($param){
        $resp = false;
        $param['idarchivocargadoestado'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
//        verEstructura($elObjtTabla);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
        }
        return $resp;
        
    }
    /**
     * permite eliminar un objeto 
     * @param array $param
     * @return boolean
     */
    public function baja($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjetoConClave($param);
            if ($elObjtTabla!=null and $elObjtTabla->eliminar()){
                $resp = true;
            }
        }
        
        return $resp;
    }
    
    /**
     * permite modificar un objeto
     * @param array $param
     * @return boolean
     */
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    public function modificacionFechaFin($param){
        $resp = false;
        //echo "##entro modificacionFechaFin";
        if ($this->seteadosCamposClaves($param)){
            $param['acefechafin']=date("Y-m-d");
            $elObjtTabla = $this->cargarObjeto($param);
            //echo"modificacion fecha fin";
            //var_dump($elObjtTabla);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    public function buscarUnEstadotipo($param){
        $where = " true ";
        $resp=false;
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargadoEstado::buscarEstadoTipo($param);  
        if ($arreglo<>null)
            $resp=true;
        else{
            $resp=false;
            //echo "<br> entro a false <br>";
        }
        
            
    return $arreglo;
        
    }

    public function buscarUnarchivoCargadoEstado($param, $idestadotipos){
        $where = " true ";
        $resp=false;
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargadoEstado::buscarArchivoCargadoEstado($param, $idestadotipos);  
        if ($arreglo<>null)
            $resp=true;
        else{
            $resp=false;
            //echo "<br> entro a false <br>";
        }
        
            
    return $arreglo;
        
    }

    /**
     * permite buscar un objeto
     * @param array $param
     * @return boolean
     */
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargadoEstado::listar($where);  
        return $arreglo;
            
            
      
        
    }






}
>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
?>