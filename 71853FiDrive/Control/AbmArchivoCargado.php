<?php

class AbmArchivoCargado{



    public function cargarObjeto($row){
        $obj = null;
        if( array_key_exists('acnombre',$row) and array_key_exists('acdescripcion',$row) and array_key_exists('acicono',$row)
         and array_key_exists('idusuario',$row) and array_key_exists('aclinkacceso',$row) and array_key_exists('accantidaddescarga',$row)
         and array_key_exists('accantidadusada',$row)and array_key_exists('acfechainiciocompartir',$row)
         and array_key_exists('acefechafincompartir',$row)){
            //echo "##entro cargar objeto ##";
            $obj = new archivoCargado();
            $obj->setear($row['id'], $row['acnombre'], $row['acdescripcion'], 
            $row['acicono'], $row['idusuario'], $row['aclinkacceso'],$row['accantidaddescarga'], $row['accantidadusada'],
            $row['acfechainiciocompartir'],$row['acefechafincompartir'],$row['acprotegidoclave']);
            
        }
        
        return $obj;
    }
    private function seteadosCamposClaves($param){
        $resp = false;
        //print_r($param);
        if (isset($param['id']))
            //echo "entro en seteado";
            $resp = true;
        return $resp;
    }
    
    public function verificarAMarchivo($datos){

            $resp = false;
            //print_r($datos);
            $objarchivoc= $this->cargarObjeto($datos); //cargamos el objeto AbmArchivoCargado
            //echo "###";
            //print_r($objarchivoc);
            //echo "##";
            if ($objarchivoc!=null and $objarchivoc->insertar()){//Insertamos
                $resp = true;
                $objAbmEstadoTipos=new AbmEstadoTipos();//creamos el objeto AbmEstadoTipos 
                $datosEstado['idestadotipos']= 1; //seteamos el id = 1 de estado cargado 
                $estadoNuevo=$objAbmEstadoTipos->buscar($datosEstado); //lo buscamos en la tabla estadotipos de la base de datos
                $arregloNuevoAce=array ("objarchivo"=>$objarchivoc, "objEstado"=>$estadoNuevo[0], "accion"=>"alta");
                $resp= $this->modificarEstado($arregloNuevoAce);
            }
            return $resp;
        
    }
    public function modificacion($param){
        //echo "Estoy en modificacion";
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $elObjtTabla = $this->cargarObjeto($param);
            //echo "   modificacion  ";
            //print_r($elObjtTabla);
            //echo "   modificacion   ";
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    public function verificarEliminarArchivo($param,$idestadotipos){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objarchivoc = $this->cargarObjeto($param);
            //var_dump($objarchivoc);
            $objarchivocestado=new AbmArchivoCargadoEstado();
            if ($objarchivocestado->buscarUnarchivoCargadoEstado($param['id'],$idestadotipos)){
                    //echo "-----eliminar archivo ----";
                    $resp = true;
                    $objAbmEstadoTipos=new AbmEstadoTipos();//creamos el objeto AbmEstadoTipos 
                    $datosEstado['idestadotipos']= 4; //seteamos el id = 4 de estado eliminar 
                    $estadoNuevo=$objAbmEstadoTipos->buscar($datosEstado); //lo buscamos en la tabla estadotipos de la base de datos
                    $arregloNuevoAce=array ("objarchivo"=>$objarchivoc, "objEstado"=>$estadoNuevo[0], "accion"=>"eliminar");
                    $resp= $this->modificarEstado($arregloNuevoAce);

            }
            else{
                echo "el archivo no esta compartido";
            }
        }
        else{
            echo "no se inserto en la base";
            }
            //return $resp;
            
        return $resp;
        
    }
    public function verificarEliminarCompartirarchivo($param,$idestadotipos){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            $objarchivoc = $this->cargarObjeto($param);
            //var_dump($objarchivoc);
            $objarchivocestado=new AbmArchivoCargadoEstado();
            if ($objarchivocestado->buscarUnarchivoCargadoEstado($param['id'],$idestadotipos)){
                    //echo "-----dejar de compartir ----";
                    $resp = true;
                    $objAbmEstadoTipos=new AbmEstadoTipos();//creamos el objeto AbmEstadoTipos 
                    $datosEstado['idestadotipos']= 3; //seteamos el id = 3 de estado dejar de compartir 
                    $estadoNuevo=$objAbmEstadoTipos->buscar($datosEstado); //lo buscamos en la tabla estadotipos de la base de datos
                    $arregloNuevoAce=array ("objarchivo"=>$objarchivoc, "objEstado"=>$estadoNuevo[0], "accion"=>"descompartir");
                    $resp= $this->modificarEstado($arregloNuevoAce);

            }
            else{
                echo "el archivo no esta compartido";
            }
        }
        else{
            echo "no se inserto en la base";
            }
            //return $resp;
            
        return $resp;
        
    }
    
    public function compartirArchivo($param){
        $resp = false;
        
        if ($this->seteadosCamposClaves($param)){
            $objarchivoc = $this->cargarObjeto($param);
            $objarchivocestado=new AbmArchivoCargadoEstado();
            if ($objarchivocestado->buscarUnarchivoCargadoEstado($param['id'],$param['idestadotipos'])){
                //var_dump($objarchivoc);
                if($objarchivoc!=null and $objarchivoc->compartirmodificar()){
                    $resp = true;
                    $objAbmEstadoTipos=new AbmEstadoTipos();//creamos el objeto AbmEstadoTipos 
                    $datosEstado['idestadotipos']= 2; //seteamos el id = 1 de estado compartido 
                    $estadoNuevo=$objAbmEstadoTipos->buscar($datosEstado); //lo buscamos en la tabla estadotipos de la base de datos
                    $arregloNuevoAce=array ("objarchivo"=>$objarchivoc, "objEstado"=>$estadoNuevo[0], "accion"=>"compartir");
                    $resp= $this->modificarEstado($arregloNuevoAce);

                }
                else{
                    echo "el archivo ya esta compartido";
                }
            }
        }
        else{
            echo "no se inserto en la base";
            }
            //return $resp;
            
        return $resp;
        
    }
    
    private function modificarEstado($param){
            
        $objArchivo=$param['objarchivo'];
        $usuario=$objArchivo->getIdusuario();
        $fechaActual=date("Y-m-d");
        $fechaFin=null;
        $estado=$param['objEstado'];
        $accion=$param['accion'];
        if ($accion=='alta'){
            $descripcion= "archivo cargado por el usuario";
            
        }else if($accion=="modificar"){
            $descripcion= "archivo modificado por el usuario";
        }else if ($accion=="eliminar"){
            $descripcion= $objArchivo->getAcdescripcion();

        }else if ($accion=="compartir"){
            $descripcion= "archivo compartido por el usuario";
            
        }else if ($accion=="descompartir"){
            $descripcion= $objArchivo->getAcdescripcion();
        }else if ($accion=="eliminar"){
            $descripcion= "archivo eliminado por el usuario";
        }
        $arreglo_archivoCargadoEstado= array ("idarchivocargadoestado"=>null,"idestadotipos"=>$estado->getIdestadotipos(),"acedescripcion"=>$descripcion,
        "idusuario"=>$usuario, "acefechaingreso"=>$fechaActual, "acefechafin"=>$fechaFin, "idarchivocargado"=>$objArchivo->getIdarchivocargado());
        $archivoCargadoEstado= new AbmArchivoCargadoEstado();
        $param2['idarchivocargadoestado']=1;
        $param2['idestadotipos']=null;
        $param2['acedescripcion']=null;
        $param2['idusuario']=null;
        $param2['acefechaingreso']=null;
        $param2['acefechafin']=null;
        $param2['idarchivocargado']=$objArchivo->getIdarchivocargado();
        $archivoCargadoEstado->modificacionFechaFin($param2); //setea la fecha fin null con la fecha actual
        $objarchivocargadoestado=$archivoCargadoEstado->cargarObjeto($arreglo_archivoCargadoEstado);
        $objarchivocargadoestado->insertar();
        return $objarchivocargadoestado;

    }
    public function buscar($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['idarchivocargado']))
                $where.=" and id =".$param['id'];
            if  (isset($param['acdescripcion']))
                 $where.=" and acdescripcion ='".$param['descrip']."'";
        }
        $arreglo = archivoCargado::listar($where);
        //print_r($arreglo);  
        return $arreglo;
    }
    public function listarArchivosCargadosE($param){
        $where = " true ";
        $resp=false;
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargado::listadoArchivosCargadosE($param);
          
        if ($arreglo<>null)
            $resp=true;
        else{
            $resp=false;
            //echo "<br> entro a false <br>";
        }
        
            
    return $arreglo;
    }
    
    public function listarArchivosCargadosEstado($param){
        $where = " true ";
        $resp=false;
        if ($param<>NULL){
            if  (isset($param['idarchivocargadoestado']))
                $where.=" and idestadotipos =".$param['idestadotipos'];
            if  (isset($param['etdescripcion']))
                 $where.=" and etdescripcion ='".$param['etdescripcion']."'";
        }
        $arreglo = archivoCargado::listadoArchivosCargadosEstado($param);
          
        if ($arreglo<>null)
            $resp=true;
        else{
            $resp=false;
            //echo "<br> entro a false <br>";
        }
        
            
    return $arreglo;
    }
    public function buscarUnarchivoCargado($param){
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['id']))
                $arreglo = archivoCargado::buscarArchivoCargado($param['id']);
        }
        return $arreglo;
    }
    
}
?>