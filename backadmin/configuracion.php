<!DOCTYPE html>
<html>
    <head>
        <?php 
            include_once '../templates/metas.php'; 
            include_once '../objs/bbdd.php';
            
            $objeto = new Conexion();
        ?>
        <link type="text/css" rel="stylesheet" href="../css/configuracion.css" />
         <script src="//code.jquery.com/jquery-1.11.0.min.js"></script> 
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
        <div id="divmeta" class="box effect2">
            <h1>Metaetiquetas</h1>
            <div id="divMetas">
                Meta: 
                <select>
                    
                    <?php
                        $resultado=$objeto->contadorRows("categoriametas");
                        
                        for($c=1;$c<=$resultado[0];$c++)
                        {
                         $nombres=   $objeto->categoriasMeta($c);
                         echo "<option>".$nombres['name']."</option>";   
                        }
                       
                    ?>
                    
                </select>
                
               
               
                Introduzca valores:<input type="text" value="<?php echo $objeto->categoriasMeta(1)?>" />
            </div>
        </div>
        <div id="divusers" class="box effect2">
            <h1>Usuarios</h1>
        </div>
        <div id="divtitle" class="box effect2">
            <h1>Titulo de la web</h1>
        </div>
        <script src="../js/configuracion.js"></script> 
    </body>
    
</html>