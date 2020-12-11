<?php

$PROYECTO ="/PWD2020/71853FiDrive/";

$INICIO = "Location:http://".$_SERVER['HTTP_HOST'].$PROYECTO."vista/contenido/contenido.php";

$NOVALIDA = "Location:http://".$_SERVER['HTTP_HOST'].$PROYECTO."vista/login/login.php";

$GLOBALS [ 'ROOT' ] = $_SERVER [ 'DOCUMENT_ROOT' ]. "PWD2020/71853FiDrive/" ;

include_once 'utiles/funciones.php';

?>