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
    $sql="INSERT INTO usuario(Nombre,Email,professor_id)
    VALUES (:name,:credits,:professor_id)";
    $query=$BD->prepare($sql);
    $query->bindValue(":name",$cursos->getName());
    $query->bindValue(":credits",$cursos->getCredits());
    $query->bindValue(":professor_id",$cursos->getProfessor_id());
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