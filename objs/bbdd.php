<?php
/*
 * codusr -> código del usuario, autoincremental, no nulo
 * nomusr -> nombre de usuario, 60 de longitud
 * clausr -> clave del usuario, 60 de longitud
 * 
 * tanto la clave como el nombre están encriptados
 */
class Conexion
{
    private $USUARIO="nelson";
    private $CLAVE="nel1234";
    private $SERVIDOR="localhost";
    private $BD="cms";
    
    function __contruct()
    {
        
    }
    
    public function usuario($nombre,$clave)
    {
        $conexion= new mysqli($this->SERVIDOR,$this->USUARIO,  $this->CLAVE, $this->BD);//configuración conexión a bd
        
        //comprobamos si tenemos conexión con la bd
        if($conexion->connect_error)
            {
                die('Se ha producido un error en la conexi&oacute;n con la base de datos.<br /> C&oacute;digo de error:'.$conexion->connect_errno.' - '.$conexion->connect_error);
            }else
                {
                echo 'conexi&oacute;n establecida con la base de datos correctamente '.$conexion->host_info;
                $consulta=$conexion->query("select * from usuarios where nomusr='.$nombre.' and clausr='.$clave.';");
                var_dump($consulta);
                }
            
                $conexion->close();
        
       
    }
}
        
?>
