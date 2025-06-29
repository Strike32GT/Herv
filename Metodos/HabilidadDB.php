<?php
require_once(__DIR__."/../Modelo/Habilidad.php");
class HabilidadDB
{
    public function listar($BD){
        $sql="SELECT habilidad.id_habilidad,habilidad.Nombre,
        habilidad.Estado
        FROM habilidad LIMIT 8";
    $query=$BD->prepare($sql); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    }

 public function agregar($BD,$habilidad){
    $sql="INSERT INTO habilidad(Nombre,Estado)
    VALUES (:Nombre,:Estado)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$habilidad->getNombre());
    $query->bindValue(":Estado",$habilidad->getEstado());
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 } 

 public function editar($BD,$habilidad){
    $sql="UPDATE habilidad SET Nombre=:Nombre, Estado=:Estado
          WHERE id_habilidad=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$habilidad->getNombre());      
    $query->bindValue(":Estado",$habilidad->getEstado());
    $query->bindValue(":id",$habilidad->getId(),PDO::PARAM_INT);      
     
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }

 }
 
  public function eliminar($BD,$id_habilidad){
    $sql="DELETE FROM habilidad WHERE id_habilidad=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":id",$id_habilidad,PDO::PARAM_INT);
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }

  public function buscarPorId($BD, $id_habilidad) {
    $sql = "SELECT * FROM habilidad WHERE id_habilidad = :id";
    $query = $BD->prepare($sql);
    $query->bindValue(":id", $id_habilidad, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_OBJ);
 } 


  public function ActividadEnumEstado($BD){
    $sql="SHOW COLUMNS FROM habilidad LIKE 'Estado'";
    $query=$BD->prepare($sql);
    $query->execute();
    $column=$query->fetch(PDO::FETCH_ASSOC);

    if (!$column || stripos($column['Type'], 'enum') === false) {
    return [];
}

    preg_match_all("/'([^']+)'/", $column['Type'], $matches);
    return $matches[1];
  }  

}
?>