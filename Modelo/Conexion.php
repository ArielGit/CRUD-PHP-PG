<?php

class Conexion{

  public function openConexion(){
    try {
      $user = 'xxxxx';
      $pass = 'xxxxx';
      $host = 'localhost';
      $bd = 'tutorialpdo';
      $port= 5432;

      $conexion = new PDO('pgsql:host='.$host.';port='.$port.';dbname=' .$bd,$user,$pass);     
      return $conexion;
    } catch (Exception $e) {
      die($e->getMessage());
    }
  }

  public function closeConexion(){
      
      $conexion = null;
  }
}

?>
