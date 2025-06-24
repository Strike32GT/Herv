<?php
require_once("../Modelo/Habilidad.php");
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
}
?>