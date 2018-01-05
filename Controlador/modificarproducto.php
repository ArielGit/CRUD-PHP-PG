<?php
  require_once '../ruta.php';
  //echo 'Estoy en modificar producto';
  $consulta = new Consulta();
  $nombre= $_POST['nombre'];
  $descripcion= $_POST['descripcion'];
  $categoria= $_POST['categoria'];
  $precio= $_POST['precio'];
  $id_producto = $_POST['id_producto'];

  if (strlen($nombre) > 0 && strlen($descripcion) > 0 && strlen($categoria) > 0 && strlen($precio) > 0 && strlen($id_producto)) {
    $respuesta = $consulta->modificarProducto('descripcion',$descripcion,$id_producto);
    $respuesta = $consulta->modificarProducto('nombre',$nombre,$id_producto);
    $respuesta = $consulta->modificarProducto('categoria',$nombre,$id_producto);
    $respuesta = $consulta->modificarProducto('precio',$precio,$id_producto);
    echo $respuesta;
    echo "<a href ='../Vista/verproductos.php'> Ver mis productos </a> </br>";
  }else{
    echo 'Todos los campos son requeridos';
  }

?>
