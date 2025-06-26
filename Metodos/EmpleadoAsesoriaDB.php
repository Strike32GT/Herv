<?php
require_once(__DIR__."/../Modelo/EmpleadoAsesoria.php");
class EmpleadoAsesoriaDB
{
    public function listar($BD){
        $sql="SELECT empleado_asesoria.id_empleado,empleado_asesoria.Nombre,
        empleado_asesoria.Apellido,empleado_asesoria.Usuario,empleado_asesoria.Password,
        empleado_asesoria.Fecha_incorporacion,empleado_asesoria.Admin_id_admin
        FROM empleado_asesoria";
    $query=$BD->prepare($sql); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    }

 public function agregar($BD,$empleado){
    $sql="INSERT INTO empleado_asesoria(Nombre,Apellido,Usuario,Password,Admin_id_admin)
    VALUES (:Nombre,:Apellido,:Usuario,:Password,:Admin_id_admin)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$empleado->getNombre());
    $query->bindValue(":Apellido",$empleado->getApellido());
    $query->bindValue(":Usuario",$empleado->getUsuario());
    $query->bindValue(":Password",$empleado->getPassword());
    $query->bindValue(":Admin_id_admin",$empleado->getAdmin_id_admin());
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }
 
 public function eliminar($BD,$id_empleado){
    $sql="DELETE FROM empleado_asesoria WHERE id_empleado=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":id",$id_empleado,PDO::PARAM_INT);
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }


 public function editar($BD,$empleado){
    $sql="UPDATE empleado_asesoria SET Nombre=:Nombre, Apellido=:Apellido, Usuario=:Usuario, Password=:Password
          WHERE id_empleado=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$empleado->getNombre());      
    $query->bindValue(":Apellido",$empleado->getApellido());
    $query->bindValue(":Usuario",$empleado->getUsuario());
    $query->bindValue(":Password",$empleado->getPassword());
    $query->bindValue(":id",$empleado->getId(),PDO::PARAM_INT);      
     
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 }
 
 public function buscarPorId($BD, $id_empleado) {
    $sql = "SELECT * FROM empleado_asesoria WHERE id_empleado = :id";
    $query = $BD->prepare($sql);
    $query->bindValue(":id", $id_empleado, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_OBJ);
 }

}
?>