<?php
require_once(__DIR__."/../Modelo/Admin.php");
class AdminBD
{
    public function listar($BD){
        $sql="SELECT admin.id_admin,admin.Nombre,admin.Apellido,
        admin.Email,admin.Password
        FROM admin";
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


}
?>