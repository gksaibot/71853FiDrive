<?php


class usuariorol{


	private $idusuario;
	private $idrol;


	public function __construct(){
		$idusuario='';
		$idrol='';
	}

	public function getIdusuario()
	{
	    return $this->idusuario;
	}
	public function setIdusuario($idusuario)
	{
	    $this->idusuario = $idusuario;
	    return $this;
	}
	public function getIdrol()
	{
	    return $this->idrol;
	}
	public function setIdrol($idrol)
	{
	    $this->idrol = $idrol;
	    return $this;
	}

	public function setear($idusuario, $idrol)    {
        $this->setIdusuario($idusuario);
        $this->setIdrol($idrol);
        
    }
	public static function listarRoles($idusuario){
		$arreglo = array();
		$base=new BaseDatos();
		$sql="SELECT * FROM rol INNER JOIN usuariorol ON usuariorol.idrol=rol.idrol WHERE usuariorol.idusuario=$idusuario";
		//echo $sql;
		$res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Rol();
                    $obj->setear($row['idrol'], $row['rodescripcion']);
                    array_push($arreglo, $obj);
                }
                
            }
            
        } else {
            // $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        
        return $arreglo;
    }
    public function eliminar(){

	}
	public function insertar(){
			$resp = false;
		$base=new BaseDatos();
		$sql="INSERT INTO usuariorol(idusuario,idrol) VALUES('".$this->getIdusuario()."','".$this->getIdrol()."');";
		if ($base->Iniciar()) {
			if ($elid = $base->Ejecutar($sql)) {
				$this->setIdusuario($elid);
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
		
	}


	



  ?>