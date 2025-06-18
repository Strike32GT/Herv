<?php
require_once("./Modelo/Usuarios.php");
class UsuarioDB
{
    public function listar($BD){
        $sql="SELECT usuario.id_usuario,usuario.Nombre,
        usuario.Email,usuario.Password,usuario.Fecha_creacion
        FROM usuario";
    $query=$BD->prepare($sql); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    }

 public function agregar($BD,$usuario){
    $sql="INSERT INTO usuario(Nombre,Email,Password)
    VALUES (:Nombre,:Email,:Password)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$usuario->getNombre());
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
}
?>