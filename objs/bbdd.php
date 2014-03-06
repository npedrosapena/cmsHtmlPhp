<?php
class Conexion
{
    private $USUARIO="usuario";
    private $CLAVE="123";
    private $SERVIDOR="localhost";
    private $BD="ejemplo";
    
    function __contruct()
    {
        
    }
    
    public function usuario($nombre,$clave)
    {
        $consulta="select * from usuario where usuario='$nombre' and clave='$clave'; ";
         echo $consulta;
       
    }
}
        
?>
