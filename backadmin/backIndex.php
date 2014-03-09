<?php
session_start();
if(isset($_SESSION['usuario']))
    {
        echo 'est&aacute;s en el backend '.$_SESSION['usuario'];
       // session_destroy();
?>
<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        
    </body>
</html>
<?php
    }else
        {
        echo 'acceso no permitido';
        }
?>
