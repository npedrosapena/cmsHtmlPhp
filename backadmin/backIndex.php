<?php
session_start();
if(isset($_SESSION['usuario']))
    {
?>
<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="../css/admin.css" />
        <title>Administraci&oacute;n</title>
    </head>
    <body>
        <div id="contentWrapper">
            <div id="wrapper">
                <div id="superior">
                    
                </div>
                <div id="cuerpo">
                    <ul class="categorias">
                        <li class="ElementosCategorias" id="config">
                            <a href="#" class="content">
                                <img src="../icos/appbar.cog.png" alt="Configuraci&oacute;n"/>
                                <h3>Configuraci&oacute;n</h3>
                                <p class="sumary"> Acceder a la configuraci&oacute;n</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
<?php
    }else
        {
        echo 'acceso no permitido';
        }
?>
