<?php
/*
 * el nombre del usuario está limitado a 8 caracteres desde la entrada
 * en el html.
 * 
 * La clave se limitará a 8 caracteres también, en principio, como máximo
 * sin ningún tipo de minimo (de momento)
 */


//incluimos el archivo donde tenemos la clase
include './bbdd.php';


$usuario=$_POST["usuario"];
echo " sin encriptar: ".$usuario;
$usuario=CRYPT($usuario.'$2a$07$marianorajoyparvodelculo!$');
echo " encriptado: ".$usuario;

$bbdd= new Conexion();
$bbdd->usuario($usuario, $_POST['clave']);

