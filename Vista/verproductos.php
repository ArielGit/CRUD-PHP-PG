<?php
require_once '../ruta.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Ver Productos</title>
  </head>
  <body>
    <h1>Mi lista de productos</h1>
    <a href="insertar.php"> Insertar Nuevos Productos</a>
    <br>
    <br>    
    <div class="">
      <form method="GET">
          <input type="text" name="buscar" value="">
          <input type="submit" value="Buscar">
      </form>
    </div>

    <div class="">
      <?php
      if (isset($_GET['buscar'])) {
        buscar($_GET['buscar']);
      }else{
        cargar();
      }
       ?>
    </div>
     
  </body>
</html>
