<?php
class BaseMySql
{
  static public function conexion(){
    $dsn="mysql:host=localhost;dbname=hervdb;port=3306;charset=utf8mb4";
    $usuario="root";
    $password="";
    $options=[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

    try {
      $bd=new PDO($dsn,$usuario,$password,$options);
      return $bd;
    }
    catch (PDOException $error){
      echo "<h2>Error al conectarse a la hervDB </h2>" .$error->getMessage();
    }
  }
  static public function close($BD){
     $BD=null;
  }
}
?>