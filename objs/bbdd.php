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
        $row=array();
        
        //comprobamos si tenemos conexión con la bd
        if($conexion->connect_error)
            {
                die('Se ha producido un error en la conexi&oacute;n con la base de datos.<br /> C&oacute;digo de error:'.$conexion->connect_errno.' - '.$conexion->connect_error);
            }else
                {
                    $query="select * from usuarios where nomusr='".$nombre."' and clausr='".$clave."';";
                    $consulta=$conexion->query($query);
                    $row=$consulta->fetch_array(MYSQLI_ASSOC);
                }
                    $conexion->close();
                    
                    return $row;
    }
    
    public function devolverValores($datos)
    {
        $campos=null;
            
            for($c=0;$c<=count($datos)-1;$c++)://recorremos el array de los datos
                
                $var=(str_replace("\'","",$datos[$c]));//le quito las comillas
  
                if(is_null($var))//si es un null
                    {
                        if($c<1)//para el primer valor
                            {
                                $campos="null";
                            }else//para otras posiciones
                                {
                                    $campos=$campos.",null,";
                                }
                    }
                $campos=$campos."'".$datos[$c]."',";
            endfor;

            $campos=trim($campos,',');//quito la última , que queda al final
            return $campos;//devolvemos la cadena con todos los valores
     }
     
    public function DbEscribir($datos, $tabla)
     {
        $conexion= new mysqli($this->SERVIDOR,$this->USUARIO,  $this->CLAVE, $this->BD);//configuración conexión a bd
        
                $query="insert into `".$tabla."` (`codusr`, `nomusr`, `clausr`)VALUES (".$this->devolverValores($datos).");";
                echo '<br />Datos:',$query."<br />";
               // $consulta=$conexion->query($query);
                $conexion->close();
     }
}
        
?>
