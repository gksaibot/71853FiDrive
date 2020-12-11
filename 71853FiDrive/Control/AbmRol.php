<?php

class AbmRol{ 



public function cargarObjeto($param){
        $obj = null;
    
        if( array_key_exists('idrol',$param) and array_key_exists('rodescripcion',$param)){
            $obj = new rol();
            $obj->setear($param['idrol'], $param['rodescripcion']);
        }
        return $obj;
    }
private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['id']) ){
            $obj = new rol();
            $obj->setear($param['idrol'], $param['rodescripcion']);
        }
        return $obj;
    }
    
    
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idrol']))
            $resp = true;
        return $resp;
    }
    
    public function altaRol($param){
        $resp = false;
        $param['idrol'] =null;
        $elObjtTabla = $this->cargarObjeto($param);
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
    public function buscarRoles(){
        $roles=new rol();
        $arreglorol=$roles->listar();
        
        return $arreglorol;
    }
    }
    


?>