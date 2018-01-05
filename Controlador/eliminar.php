<?php
require_once '../ruta.php';

if (isset($_GET['id_producto'])) {
  $id_producto = $_GET['id_producto'];
  $consulta = new Consulta();
  $resultado = $consulta->eliminarProducto($id_producto);
  echo $resultado;
  echo "<div> <a href= '../Vista/verproductos.php'> Listado de Productos </a></div>";
}



?>
