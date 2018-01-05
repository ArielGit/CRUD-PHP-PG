<?php

class Consulta {

  public function insertarProducto ($nombre, $descripcion, $categoria, $precio){
      try {

          $modelo = New Conexion();
          $conexion = $modelo->openConexion();
          $sql = "INSERT INTO productos (id_producto, nombre, descripcion, categoria, precio) values (DEFAULT,?,?,?,?)";
          $statement = $conexion->prepare($sql);
          $statement->bindParam(1,$nombre);
          $statement->bindParam(2,$descripcion);
          $statement->bindParam(3,$categoria);
          $statement->bindParam(4,$precio);
          $statement->execute(); 
          if (!$statement) {
              return 'Error al Crear el Registro';
          } else {
              
              return 'Registro Creado Correctamente';
          }
          $modelo->closeConexion();
      } catch (PDOException $e) {
          $e->getMessage();
      }
  }    

  public function cargarProductos(){
    try {
        $rows = null;
        $modelo = New Conexion();
        $conexion = $modelo->openConexion();
        $sql = "SELECT * FROM productos";
        $statement = $conexion->prepare($sql);
        $statement->execute();
        $modelo->closeConexion();

        return $statement->fetchAll();          
      } catch (PDOException $e) {
          $e->getMessage();
      }     
  }

  public function eliminarProducto($id_producto){
     try {
          $modelo = new Conexion();
          $conexion = $modelo->openConexion();
          $sql = 'DELETE FROM productos WHERE id_producto = ?';
          $statement = $conexion->prepare($sql);
          $statement->bindParam(1, $id_producto);
          $statement->execute();
          if (!$statement) {
            return 'Error al eliminar registro';
          }else{              
            return 'Registro eliminado correctamente';
          }
          $modelo->closeConexion();
      } catch (PDOException $e) {
          $e->getMessage();
      }      
  }

  public function buscarProductos($_nombre){
      try {
          $rows = null;
          $modelo = New Conexion();
          $nombre = '%'.$_nombre.'%';
          $conexion = $modelo->openConexion();
          $sql = 'SELECT * FROM productos WHERE nombre LIKE ?';
          $statement =  $conexion->prepare($sql);
          $statement->bindParam(1,$nombre);
          $statement->execute();
          while ($result = $statement->fetch()) {
            $rows[] = $result;
          }
          //var_dump ($rows);
          return $rows;
          $modelo->closeConexion();
      } catch (PDOException $e) {
          $e->getMessage();
      }
  }

  public function filtrarProductoID($id){
      try {
          $rows = null;
          $modelo = New Conexion();
          $conexion = $modelo->openConexion();
          $sql = 'SELECT * FROM productos WHERE id_producto = ?';
          $statement =  $conexion->prepare($sql);
          $statement->bindParam(1,$id);
          $statement->execute();
          while ($result = $statement->fetch()) {
            $rows[] = $result;
          }
          //var_dump ($rows);
          return $rows;
          $modelo->closeConexion();
      } catch (PDOException $e) {
          $e->getMessage();
      }
  }      

  public function modificarProducto($campo, $valor, $id){
     try {
          $rows = null;
          $modelo = New Conexion();
          $conexion = $modelo->openConexion();
          $sql = "UPDATE productos SET $campo = ? WHERE id_producto = ?";
          $statement = $conexion->prepare($sql);
          $statement->bindParam(1,$valor);
          $statement->bindParam(2,$id);
          if (!$statement) {
            return 'Error al modificar el producto';
          }else{
          $statement->execute();
          return 'Registro Modificado Correctamente';
          }
          $modelo->closeConexion();
      } catch (PDOException $e) {
          $e->getMessage();
      }
  }

}


?>
