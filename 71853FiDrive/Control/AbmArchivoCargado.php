<?php

class AbmArchivoCargado{



    public function cargarObjeto($row){
        $obj = null;
        if( array_key_exists('nombre',$row) and array_key_exists('desc',$row) and array_key_exists('tipo',$row)
         and array_key_exists('clave',$row)){
            $obj = new archivoCargado();
            $obj->setear($row['id'], $row['nombre'], $row['desc'], 
            $row['tipo'], 1, null,null, null,
            null,null,$row['clave']);
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
            $objarchivoc= $this->cargarObjeto($datos); //cargamos el objeto AbmArchivoCargado
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
            print_r($param);
            $elObjtTabla = $this->cargarObjeto($param);
            if($elObjtTabla!=null and $elObjtTabla->modificar()){
                $resp = true;
            }
        }
        return $resp;
    }
    
    public function compartirArchivo($param){
        $resp = false;
        if ($this->seteadosCamposClaves($param)){
            print_r($param);
            $objarchivoc = $this->cargarObjeto($param);
            if($objarchivoc!=null and $objarchivoc->modificar()){
                $resp = true;
            }
        
                $objAbmEstadoTipos=new AbmEstadoTipos();//creamos el objeto AbmEstadoTipos 
                $datosEstado['idestadotipos']= 2; //seteamos el id = 1 de estado compartido 
                $estadoNuevo=$objAbmEstadoTipos->buscar($datosEstado); //lo buscamos en la tabla estadotipos de la base de datos
                $arregloNuevoAce=array ("objarchivo"=>$objarchivoc, "objEstado"=>$estadoNuevo[0], "accion"=>"alta");
                $resp= $this->modificarEstado($arregloNuevoAce);
            
                echo "entro y modifico";


                //$objAbmEstadoTipos=new AbmEstadoTipos();//creamos el objeto AbmEstadoTipos 
                //$datosEstado['idestadotipos']= 1; //seteamos el id = 1 de estado cargado 
                //$estadoNuevo=$objAbmEstadoTipos->buscar($datosEstado); //lo buscamos en la tabla estadotipos de la base de datos
                //$arregloNuevoAce=array ("objarchivo"=>$objarchivoc, "objEstado"=>$estadoNuevo[0], "accion"=>"alta");
                //$resp= $this->modificarEstado($arregloNuevoAce);
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

        $estado=$param['objEstado'];
        $accion=$param['accion'];
        if ($accion=='alta'){
            $descripcion= "archivo cargado por el usuario";
            $fechaFin=null;
        }else if($accion=="modificar"){

        }else if ($accion=="borrar"){
            

        }
        $arreglo_archivoCargadoEstado= array ("idarchivocargadoestado"=>null,"idestadotipos"=>$estado->getIdestadotipos(),"acedescripcion"=>$descripcion,
        "idusuario"=>$usuario, "acefechaingreso"=>$fechaActual, "acefechafin"=>$fechaFin, "idarchivocargado"=>$objArchivo->getIdarchivocargado());
        $archivoCargadoEstado= new AbmArchivoCargadoEstado();
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