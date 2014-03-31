<?php 
    @include 'objs/bbdd.php';
    @include '../objs/bbdd.php';

$BD=new Conexion();
$contador=$BD->contadorRows("categoriametas");

for($c=1;$c<=($contador[0]);$c++):
    $name=$BD->categoriasMeta($c);
    $content=$BD->descripcionMetas($name["name"]);
    echo '<meta name="'.$name["name"].'" content="'.$content["content"].'"/>';
endfor;

echo '<meta charset="UTF-8" >';
?>
