<?php

/* 
    clase que nos ofrece métodos para encriptar y desencriptar datos
 */

class Encriptar
{
    private static $LLAVE="BrE3Ve3Y6T1F7J5g0a7R3gy,";//patrón de encriptación
    
    
  public function Codificar($texto)
  {
      return base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5(Encriptar::$LLAVE), $texto, MCRYPT_MODE_CBC,  md5(md5(Encriptar::$LLAVE)))); 
  }
  
  public function Descodificar($texto)
  {
      return (rtrim(mcrypt_decrypt(MCRYPT_RIJNDAEL_256, md5(Encriptar::$LLAVE), base64_decode($texto), MCRYPT_MODE_CBC, md5(md5(Encriptar::$LLAVE))), "\0"));
  }
            
}
