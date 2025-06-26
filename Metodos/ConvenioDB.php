<?php
require_once(__DIR__."/../Modelo/Convenio.php");
class ConvenioDB
{
    public function listar($BD){
        $sql="SELECT convenio.id_universidad,convenio.Nombre,
        convenio.Lugar,convenio.Sede
        FROM convenio";
    $query=$BD->prepare($sql); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    }

 public function agregar($BD,$convenio){
    $sql="INSERT INTO habilidad(Nombre,Lugar,Sede)
    VALUES (:Nombre,:Lugar,:Sede)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$convenio->getNombre());
    $query->bindValue(":Estado",$convenio->getEstado());
    $query->bindValue(":sede",$convenio->getSede());
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }
 
 public function editar($BD,$convenio){
    $sql="UPDATE convenio SET Nombre=:Nombre, Lugar=:Lugar,Sede=:Sede
          WHERE id_universidad=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$convenio->getNombre());      
    $query->bindValue(":Lugar",$convenio->getLugar());
    $query->bindValue(":Sede",$convenio->getSede());
    $query->bindValue(":id",$convenio->getId(),PDO::PARAM_INT);      
     
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }

 }

 public function eliminar($BD,$id_universidad){
    $sql="DELETE FROM convenio WHERE id_universidad=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":id",$id_universidad,PDO::PARAM_INT);
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }

 public function buscarPorId($BD, $id_universidad) {
    $sql = "SELECT * FROM convenio WHERE id_universidad = :id";
    $query = $BD->prepare($sql);
    $query->bindValue(":id", $id_universidad, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_OBJ);
 }

 public function ActividadEnumEstado($BD){
    $sql="SHOW COLUMNS FROM convenio LIKE 'Sede'";
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