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
include './Encriptar.php';

//instancia de objetos
$seguridad= new Encriptar();
$bbdd= new Conexion();

//recogida y encriptación de datos
$usuario=$seguridad->Codificar($_POST["usuario"]);
$clave=$seguridad->Codificar($_POST["clave"]);

//acceso a bd
$acceso=$bbdd->usuario($usuario, $clave);

if($acceso!=NULL)
    {
        echo "Bienvenido";
    }else
        {
        echo 'el usuario o la clave no son v&aacute;lidos, por favor, compruebe que los datos introducidos son correctos';
        }

