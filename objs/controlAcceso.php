<?php
//incluimos el archivo donde tenemos la clase
include './bbdd.php';


$usuario=$_POST["usuario"];
echo " sin encriptar: ".$usuario;
$usuario=CRYPT($usuario.'$2a$07$marianorajoyparvodelculo!$');
echo " encriptado: ".$usuario;

$bbdd= new Conexion();
$bbdd->usuario($usuario, $_POST['clave']);

