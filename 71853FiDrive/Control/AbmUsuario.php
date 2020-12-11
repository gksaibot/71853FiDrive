<<<<<<< HEAD
<?php

class AbmUsuario{ 



public function cargarObjeto($param){
        $obj = null;
    
        if( array_key_exists('idusuario',$param) and array_key_exists('usnombre',$param) and array_key_exists('usapellido',$param)
        and array_key_exists('uslogin',$param) and array_key_exists('usclave',$param) and array_key_exists('usactivo',$param)){
            $obj = new usuario();
            $obj->setear($param['idusuario'], $param['usnombre'], $param['usapellido'], $param['uslogin'], $param['usclave'], $param['usactivo']);
        }
        //var_dump($obj);
        return $obj;
    }
private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['id']) ){
            $obj = new usuario();
            $obj->setear($param['idusuario'], $param['usnombre'], $param['usapellido'], $param['uslogin'], $param['usclave'],
            $param['usactivo']);
        }
        return $obj;
    }
    
    
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idusuario']))
            $resp = true;
        return $resp;
    }
    
    public function altaUsuario($param){
        $resp = false;
        $param['idusuario'] =null;
        $param['usactivo']='1';
        $elObjtTabla = $this->cargarObjeto($param);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
             
            $usurol=new AbmUsuariorol();
            $ultimoID=$elObjtTabla->obtenerUltimoID();
            $datos['idusuario']=$ultimoID['0']->getIdusuario();
            $datos['idrol']=$param['idrol'];
            //var_dump($datos);
            $usurol->alta($datos);
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
        $param['usclave']=md5($param['usclave']);
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    public static function validarIniciarSesion($datos){
        $resp=false;
        if (isset($datos)){
            $arregloUsuario = usuario::verificarUsuario($datos['uslogin'],md5($datos['clave']));
            if ($arregloUsuario!=null){
                $id=$arregloUsuario[0]->getIdusuario();
                $usuariorol=new AbmUsuariorol();
                $roles=$usuariorol->buscarRoles($id);
                $nombreLogin=$arregloUsuario[0]->getUslogin();
                $idusuario=$arregloUsuario[0]->getIdusuario();
                $datosSesion=["roles"=>$roles,"NombreLogin"=>$nombreLogin,"Idusuario"=>$idusuario];
                $sesion=new Session();
                if ($sesion->iniciar($datosSesion)){
                    $resp=true;
                }
            }
        }
        return $resp;
    }
    public function buscarUsuarios(){
        $usuarios=new usuario();
        $usu=$usuarios->darUsuarios();
        
        return $usu;
    }
    public function buscarUnUsuario($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['id']))
                $arreglo = usuario::buscarUsuarioCargado($param['id']);
        }
        return $arreglo;
    }
    public function modificarUsuarioActivo($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificarUsuarioAct()){
                $resp = true;
            }
        }
        //return $resp;
    }      
    }
    


=======
<?php

class AbmUsuario{ 



public function cargarObjeto($param){
        $obj = null;
    
        if( array_key_exists('idusuario',$param) and array_key_exists('usnombre',$param) and array_key_exists('usapellido',$param)
        and array_key_exists('uslogin',$param) and array_key_exists('usclave',$param) and array_key_exists('usactivo',$param)){
            $obj = new usuario();
            $obj->setear($param['idusuario'], $param['usnombre'], $param['usapellido'], $param['uslogin'], $param['usclave'], $param['usactivo']);
        }
        //var_dump($obj);
        return $obj;
    }
private function cargarObjetoConClave($param){
        $obj = null;
        
        if( isset($param['id']) ){
            $obj = new usuario();
            $obj->setear($param['idusuario'], $param['usnombre'], $param['usapellido'], $param['uslogin'], $param['usclave'],
            $param['usactivo']);
        }
        return $obj;
    }
    
    
    
    private function seteadosCamposClaves($param){
        $resp = false;
        if (isset($param['idusuario']))
            $resp = true;
        return $resp;
    }
    
    public function altaUsuario($param){
        $resp = false;
        $param['idusuario'] =null;
        $param['usactivo']='1';
        $elObjtTabla = $this->cargarObjeto($param);
        if ($elObjtTabla!=null and $elObjtTabla->insertar()){
            $resp = true;
             
            $usurol=new AbmUsuariorol();
            $ultimoID=$elObjtTabla->obtenerUltimoID();
            $datos['idusuario']=$ultimoID['0']->getIdusuario();
            $datos['idrol']=$param['idrol'];
            //var_dump($datos);
            $usurol->alta($datos);
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
        $param['usclave']=md5($param['usclave']);
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    public static function validarIniciarSesion($datos){
        $resp=false;
        if (isset($datos)){
            $arregloUsuario = usuario::verificarUsuario($datos['uslogin'],md5($datos['clave']));
            if ($arregloUsuario!=null){
                $id=$arregloUsuario[0]->getIdusuario();
                $usuariorol=new AbmUsuariorol();
                $roles=$usuariorol->buscarRoles($id);
                $nombreLogin=$arregloUsuario[0]->getUslogin();
                $idusuario=$arregloUsuario[0]->getIdusuario();
                $datosSesion=["roles"=>$roles,"NombreLogin"=>$nombreLogin,"Idusuario"=>$idusuario];
                $sesion=new Session();
                if ($sesion->iniciar($datosSesion)){
                    $resp=true;
                }
            }
        }
        return $resp;
    }
    public function buscarUsuarios(){
        $usuarios=new usuario();
        $usu=$usuarios->darUsuarios();
        
        return $usu;
    }
    public function buscarUnUsuario($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['id']))
                $arreglo = usuario::buscarUsuarioCargado($param['id']);
        }
        return $arreglo;
    }
    public function modificarUsuarioActivo($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificarUsuarioAct()){
                $resp = true;
            }
        }
        //return $resp;
    }      
    }
    


>>>>>>> 28c027ada06c4c0f4e651fb25b83b97930bab892
?>