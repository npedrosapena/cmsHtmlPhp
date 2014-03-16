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
    
    /**Selecciona un usuario y una clave de la base de datos y devuelve 
     * un array asociativo con los datos del usuario
     * 
     * @param type $nombre
     * @param type $clave
     * @return type
     */
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
    
    /**En esta primera versión, devuelve un String con la cadena completa para 
     * introducir los datos en una consulta insert sin importar la longitud de esta
     * 
     * @param type $datos
     * @return type
     */
    public function devolverValores($datos)
    {//posible nuevo nombre devolverCampos
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
     
     /**Inserta los datos en la bd, pasandole un array de datos y el nombre de la tabla
      * 
      * @param type $datos
      * @param type $tabla
      */
    public function DbEscribir($datos, $tabla)
     {
        $conexion= new mysqli($this->SERVIDOR,$this->USUARIO,  $this->CLAVE, $this->BD);//configuración conexión a bd
        
                $query="insert into `".$tabla."` (`codusr`, `nomusr`, `clausr`)VALUES (".$this->devolverValores($datos).");";
                echo '<br />Datos:',$query."<br />";
                //$consulta=$conexion->query($query);
                $conexion->close();
     }
     
     /**
      * 
      * @param type $id
      * @return type
      */
     public function consultas($id)
     {
         $conexion= new mysqli($this->SERVIDOR,$this->USUARIO,  $this->CLAVE, $this->BD);//configuración conexión a bd
         $query="select `content` from `metas` where `categoriameta` in (select `idcategoria` from `categoriametas` where `catmetaid`='".$id."');";
 
         $consulta=$conexion->query($query);
         $conexion->close();
         $row=$consulta->fetch_array(MYSQLI_ASSOC);
     
        return $row;
         
     }
     /**Pasándole un Id, nos devuelve el nombre de la categoria
      * 
      * @param type $id
      * @return type
      */
     public function categoriasMeta($id)
     {
        $conexion= new mysqli($this->SERVIDOR,$this->USUARIO,  $this->CLAVE, $this->BD);//configuración conexión a bd
        $query="select `name`from `categoriametas` where idcategoria='".$id."';";
        $consulta=$conexion->query($query);
        $conexion->close();
        $row=$consulta->fetch_array(MYSQLI_ASSOC);
        return $row;
     }
     
     /**Pasándole un campo, devuelve el valor de su contenido
      * 
      * @param type $campo
      * @return type
      */
     public function descripcionMetas($campo)
     {
         $query="select `content` from `metas` where `categoriameta`in(select `idcategoria` from `categoriametas` where `name`='".$campo."');";
         $conexion= new mysqli($this->SERVIDOR,$this->USUARIO,  $this->CLAVE, $this->BD);
         $consulta=$conexion->query($query);
         $conexion->close();
         $row=$consulta->fetch_array(MYSQLI_ASSOC);
         return $row;
     }
     
     /**Nos devuelve el numero de filas en una tabla
      * 
      * @param type $tabla
      * @return type
      */
     public function contadorRows($tabla)
     {
          $conexion= new mysqli($this->SERVIDOR,$this->USUARIO,  $this->CLAVE, $this->BD);//configuración conexión a bd
          $query="select count(*) from `".$tabla."`;";
          $consulta=$conexion->query($query);
          $conexion->close();
          $row=$consulta->fetch_array(MYSQLI_NUM);
          return $row;
     }
}
        
?>
