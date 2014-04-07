<!DOCTYPE html>
<html>
    <head>
        <?php include_once '../templates/metas.php'; ?>
        <link type="text/css" rel="stylesheet" href="../css/configuracion.css" />
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script> 
        <title>Configuraci&oacute;n</title>
    </head>
    <body>
        <div id="titulo">
            <h3>Configuraci&oacute;n</h3>
        </div>
        <div id="formularioConfiguracion">
            <div id="menuConfig">
                <ul class="categorias">
                    <li class="ElementosCategorias" id="meta">
                        <a href="javascript:lector('meta')" class="content">
                            <img src="../icos/appbar.list.check.png" alt="Configuraci&oacute;n"/>
                            <h3>Metaetiquetas</h3>
                            <p class="sumary"> Acceder a las Metaetiquetas</p>
                        </a></li>
                    <li class="ElementosCategorias" id="users">
                        <a href="javascript:lector('users')" class="content">
                            <img src="../icos/appbar.group.png" alt="Configuraci&oacute;n"/>
                             <h3>Usuarios</h3>
                             <p class="sumary"> Acceder la configuraci&oacute;n de los usuarios</p>
                        </a></li>
                    <li class="ElementosCategorias" id="title">
                        <a href="javascript:lector('title')" class="content">
                            <img src="../icos/appbar.list.add.above.png" alt="Configuraci&oacute;n"/>
                             <h3>T&iacute;tulo de la web</h3>
                             <p class="sumary"> Acceder al t&iacute;tulo de la web</p>
                        </a></li>
                </ul>
            </div>
        </div>
        <div id="divmeta">
            <h1>Metaetiquetas</h1>
        </div>
        <div id="divusers">
            <h1>Usuarios</h1>
        </div>
        <div id="divtitle">
            <h1>Titulo de la web</h1>
        </div>
        <script src="../js/configuracion.js"></script> 
    </body>
    
</html>