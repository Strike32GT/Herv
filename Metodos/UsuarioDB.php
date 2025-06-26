<?php
require_once(__DIR__."/../Modelo/Usuario.php");
class UsuarioDB
{
    public function listar($BD){
        $sql="SELECT usuario.id_usuario,usuario.Nombre,usuario.Apellido,
        usuario.Email,usuario.Password,usuario.Fecha_creacion
        FROM usuario";
    $query=$BD->prepare($sql); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    }

 public function agregar($BD,$usuario){
    $sql="INSERT INTO usuario(Nombre,Apellido,Email,Password)
    VALUES (:Nombre,:Apellido,:Email,:Password)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$usuario->getNombre());
    $query->bindValue(":Apellido",$usuario->getApellido());
    $query->bindValue(":Email",$usuario->getEmail());
    $query->bindValue(":Password",$usuario->getPassword());
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }

public function editar($BD,$usuario){
    $sql="UPDATE usuario SET Nombre=:Nombre, Apellido=:Apellido, Email=:Email,Password=:Password
          WHERE id_usuario=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$usuario->getNombre());      
    $query->bindValue(":Apellido",$usuario->getApellido());      
    $query->bindValue(":Email",$usuario->getEmail());
    $query->bindValue(":Password",$usuario->getPassword());
    $query->bindValue(":id",$usuario->getId(),PDO::PARAM_INT);      
     
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }

 }


 public function eliminar($BD,$id_usuario){
    $sql="DELETE FROM usuario WHERE id_usuario=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":id",$id_usuario,PDO::PARAM_INT);
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }

 public function buscarPorId($BD, $id_usuario) {
    $sql = "SELECT * FROM usuario WHERE id_usuario = :id";
    $query = $BD->prepare($sql);
    $query->bindValue(":id", $id_usuario, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_OBJ);
 }


}
?>