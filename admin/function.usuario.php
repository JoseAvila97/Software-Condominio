<?php

//Ejemplo aprenderaprogramar.com

function mostrarDatos ($resultados) {

if ($resultados !=NULL) {

echo "- titulo: ".$resultados['titulo']."<br/> ";

echo "- descripcion: ".$resultados['descripcion']."<br/>";

echo "- costo: ".$resultados['costo']."<br/>";

echo "- resultado: ".$resultados['resultado']."<br/>";

echo "- factura: ".$resultados['factura']."<br/>";

echo "- fecha: ".$resultados['fecha']."<br/>";}

else {echo "<br/>No hay más datos: <br/>".$resultados;}

}

$link = mysqli_connect("localhost", "root", "");

mysqli_select_db($link, "proyecto");

$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente

$result = mysqli_query($link, "SELECT * FROM `facturas`");

while ($fila = mysqli_fetch_array($result)){

    mostrarDatos($fila);
    
    }
    
    mysqli_free_result($result);
    
    mysqli_close($link);

?>
