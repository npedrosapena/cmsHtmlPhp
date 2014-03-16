<?php include_once 'objs/bbdd.php';

$BD=new Conexion();
$meta1=$BD->categoriasMeta(1);
$meta2=$BD->consultas(1);
$contador=$BD->contadorRows("categoriametas");

for($c=1;$c<=($contador[0]);$c++):
    $name=$BD->categoriasMeta($c);
    $content=$BD->descripcionMetas($name["name"]);
    echo '<meta name="'.$name["name"].'" aaaaaacontent="'.$content["content"].'"/>';
endfor;

echo '<meta charset="UTF-8" >';
?>
