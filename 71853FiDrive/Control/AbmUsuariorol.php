<?php

class AbmUsuariorol{ 



public function cargarObjeto($param){
        $obj = null;
    
        if( array_key_exists('idusuario',$param) and array_key_exists('idrol',$param)){
            $obj = new usuariorol();
            $obj->setear($param['idusuario'], $param['idrol']);
        }
        //var_dump($obj);
        return $obj;
    }
private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['id']) ){
            $obj = new usuariorol();
            $obj->setear($param['idusuario'], $param['idrol']);
        }
        return $obj;
    }
    
    
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idusuario']))
            $resp = true;
        return $resp;
    }
    
    public function alta($param){
        $resp = false;
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
    

    public function buscarRoles($datos){
            $where = " true ";
            if ($datos<>NULL){
                $arreglo = usuariorol::listarRoles($datos);  
            
            }
            return $arreglo;
                
                
          
            
        }
    }
    
    

?>