<?php

require_once '../ruta.php';

$mensaje = null;

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$categoria = $_POST['categoria'];
$precio = str_replace(',','.',$_POST['precio']);

 if (strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($precio) > 0 ) {
   //echo 'Llego asta aqui';
  $consulta = new Consulta();
  $mensaje = $consulta->insertarProducto($nombre,$descripcion,$categoria,$precio);
  echo "<a href ='../Vista/insertar.php'> Nuevo Producto </a> </br>";
  echo "<a href ='../Vista/verproductos.php'> Ver mis productos </a> </br>";
}else{
  echo 'Complete todos los campos';
}
echo $mensaje;
?>
