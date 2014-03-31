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
//filtrado de datos para evitar mysqlinjections

$usuario=$seguridad->Codificar(filter_var($_POST["usuario"],FILTER_SANITIZE_FULL_SPECIAL_CHARS));
$clave=$seguridad->Codificar(filter_var($_POST["clave"],FILTER_SANITIZE_FULL_SPECIAL_CHARS));


$datos=array(null,$usuario,$clave);

$bbdd->DbEscribir($datos,"usuarios");


//acceso a bd
if(($bbdd->usuario($usuario, $clave))!=NULL)
    {
        if(session_start())
            {
            echo 'sesion iniciada';
            }
        $_SESSION['usuario']=$seguridad->Descodificar($usuario);
        echo "Bienvenido";
        header('Location:../backadmin/backIndex.php');
    }else
        {
        echo 'el usuario o la clave no son v&aacute;lidos, por favor, compruebe que los datos introducidos son correctos';
        }

