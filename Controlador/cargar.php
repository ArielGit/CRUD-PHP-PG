<?php
  function cargar(){
    $consulta = new Consulta();
    $filas = $consulta->cargarProductos();
    echo '<table>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Precio</th>
            <th>Acciones</th>
          </tr>';
    foreach ($filas as $fila) {
      echo '<tr>';
      echo '<td>'. $fila['id_producto'] .'</td>';
      echo '<td>'. $fila['nombre'] .'</td>';
      echo '<td>'. $fila['descripcion'] .'</td>';
      echo '<td>'. $fila['categoria'] .'</td>';
      echo '<td>'. $fila['precio'] .'</td>';      
      echo "<td><a href='modificar.php?id_producto=". $fila['id_producto'] ."'> Modificar  </td>";
      echo "<td><a href='../Controlador/eliminar.php?id_producto=". $fila['id_producto'] ."'> Eliminar  </td>";
      echo '</tr>';
    }
    echo '</table>';
  }

  function buscar($nombre){
    $consulta = new Consulta();
    $filas = $consulta->buscarProductos($nombre);
    echo '<table>
          <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Categoria</th>
            <th>Precio</th>            
          </tr>';
    if (isset($filas)) {
      foreach ($filas as $fila) {
        echo '<tr>';
        echo '<td>'. $fila['id_producto'] .'</td>';
        echo '<td>'. $fila['nombre'] .'</td>';
        echo '<td>'. $fila['descripcion'] .'</td>';
        echo '<td>'. $fila['categoria'] .'</td>';
        echo '<td>'. $fila['precio'] .'</td>';        
        echo "<td><a href='modificar.php?id_producto=". $fila['id_producto'] ."'> Modificar  </td>";
        echo "<td><a href='../Controlador/eliminar.php?id_producto=". $fila['id_producto'] ."'> Eliminar  </td>";
        echo '</tr>';
      }
    }
    echo '</table>';

  }

?>
