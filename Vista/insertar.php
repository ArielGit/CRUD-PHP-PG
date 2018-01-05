<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Insertar Productos </title>
  </head>
  <body>
    <h1> PURO CODIGO</h1>
    <h2>Insertar Productos</h2>
    <div class="">
      <form action="../Controlador/insertar.php" method="post">
        <table>
          <tr>
            <td>
              Nombre:
            </td>
            <td>
              <input type="text" name="nombre" value="">
            </td>
          </tr>
          <tr>
            <td>
              Dedscripción:
            </td>
            <td>
              <textarea name="descripcion" rows="10" cols="31"></textarea>
            </td>
          </tr>
          <tr>
            <td>
              Categoría:
            </td>
            <td>
              <input type="text" name="categoria" value="">
            </td>
          </tr>
          <tr>
            <td>
              Precio:
            </td>
            <td>
              <input type="text" name="precio" value="">
            </td>
          </tr>
          <tr>
            <td>
            </td>
            <td>
              <input type="submit" name="" value="Registrar Producto">
            </td>
          </tr>

        </table>
      </form>
    </div>
    <div class="">
      <a href="verproductos.php"> Ver mis Productos</a>

    </div>
  </body>
</html>
