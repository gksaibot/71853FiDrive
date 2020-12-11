<?php
/**
 * recibe el nombre de usuario y clave desde el formulario de  login
 * inicia el objeto Login y lo intenta validar
 *   si valida redirige a paginaSegura1.php
 *   si no muestra el error
 */
include_once '../../configuracion.php';

echo "estoy en verificar login";
$datos=data_submitted();
$oLogin=new AbmUsuario();
$resp=false;
$iniciosesion=$oLogin->ValidarIniciarSesion($datos);

if ($iniciosesion==true){
	$resp=true;
}
//print_r($resp);
//print_r($INICIO);
if ($resp){
	header($INICIO);
	//header("location:http://localhost/PWD2020/71853FiDrive/Vista/contenido/contenido.php");
}else{
	header($NOVALIDA);
	//header("location:http://localhost/PWD2020/71853FiDrive/Vista/login/login.php");
}
	
?>