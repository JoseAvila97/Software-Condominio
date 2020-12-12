<?php
#Codigo Calcular Divisas#
if(isset($_POST["divisas"]) && (is_numeric($_POST["divisas"]) || is_numeric(str_replace(",",".",$_POST["divisas"]))))

{

    $valor1=str_replace(",",".",$_POST["divisas"]);

}else{

    $valor1=0;

}



# valor a convertir

if(isset($_POST["bolivares"]) && (is_numeric($_POST["bolivares"]) || is_numeric(str_replace(",",".",$_POST["bolivares"]))))

{

    $valor2=str_replace(",",".",$_POST["bolivares"]);

}else{

    $valor2=0;

}
$calcular = $valor1 * $valor2;


#funcion conectar formulario en la base de datos#
require 'admin/conexionadmin.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $descripcion = limpiarDatos($_POST['descripcion']);
    $costo = limpiarDatos ($_POST['costo']);
    $resultado = limpiarDatos($_POST['resultado']);
    $factura = limpiarDatos($_POST['factura']);
    $fecha = limpiarDatos ($_POST['fecha']);
$errores = '';
}
else {
  $titulo = 0;
  $descripcion = 0;
  $costo = 0;
  $resultado = 0;
  $factura = 0;
  $fecha = 0;
}


  if($errores == ''){
        $conexion = conexion($bd_config);
        $statement = $conexion->prepare('INSERT INTO `facturas`  (id, titulo, descripcion, costo, resultado, factura, fecha) VALUES(null, :titulo, :descripcion, :costo, :resultado, :factura, :fecha)');
        $statement->execute(
            array(
                ':titulo' => $titulo,
                ':descripcion' => $descripcion,
                ':costo' => $costo,
                ':resultado' => $resultado,
                ':factura' => $factura,
                ':fecha' => $fecha
            )
          );



    }


 ?>
