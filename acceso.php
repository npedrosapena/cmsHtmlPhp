<!DOCTYPE html>
<html>
    <head>
        <?php include_once './templates/metas.php'; ?>
        <link type="text/css" rel="stylesheet" href="css/acceso.css" />
        <title></title>
    </head>
    <body>
        <div id="contentWrapper">
            <div id="content">
                <form action="objs/controlAcceso.php" method="POST" id="myform4">
                    <div id="formulario">
                        <label for="usuario">Usuario: </label>
                        <input type="text" id="usuario" name="usuario" maxlength="5" required/>
                        <br/>
                        <label for="pass">Clave: </label>
                        <input type="password" id="pass" name="clave" maxlength="5" required />
                        <br/>
                        <a href="#"><img src="icos/appbar.undo.curve.png" class="botones" id="volver" onclick="history.back()" alt="Login"/></a>
                        <input type="image" src="icos/appbar.power.png" class="botones"/>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
<?php ?>

