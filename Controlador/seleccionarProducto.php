<?php

  function seleccionar(){
    if (isset($_GET['id_producto'])) {
      $consulta = New Consulta();
      $id_producto = $_GET['id_producto'];
      $filas = $consulta->filtrarProductoID($id_producto);
      foreach ($filas as $fila) {
        echo '<div class="">
          <form action="../Controlador/modificarproducto.php" method="post">
            <table>
              <tr>
                <td>
                  Nombre:
                </td>
                <td>
                  <input type="text" name="nombre" value="' . $fila['nombre'] . '">
                </td>
              </tr>
              <tr>
                <td>
                  Dedscripción:
                </td>
                <td>
                  <textarea name="descripcion" rows="10" cols="31">' . $fila['descripcion'] . '</textarea>
                </td>
              </tr>
              <tr>
                <td>
                  Categoría:
                </td>
                <td>
                  <input type="text" name="categoria" value="' . $fila['categoria'] . '">
                </td>
              </tr>
              <tr>
                <td>
                  Precio:
                </td>
                <td>
                  <input type="text" name="precio" value="' . $fila['precio'] . '">
                </td>
              </tr>
              <tr>
                <td>
                </td>
                <td>
                  <input type="hidden" name="id_producto" value="' . $id_producto . '">
                </td>
              </tr>
              <tr>
                <td>
                </td>
                <td>
                  <input type="submit" name="" value="Modificar Producto">
                </td>
              </tr>

            </table>
          </form>
        </div>';
      }


    }

  }


?>
