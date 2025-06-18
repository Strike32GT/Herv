<?php
require_once("./Modelo/EmpleadoAsesoria.php");
class EmpleadoAsesoriaDB
{
    public function listar($BD){
        $sql="SELECT empleado_asesoria.id_empleado,empleado_asesoria.Nombre,
        empleado_asesoria.Apellido,empleado_asesoria.Fecha_Incorporacion,empleado_asesoria.admin_id_admin
        FROM empleado_asesoria";
    $query=$BD->prepare($sql); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    }

 public function agregar($BD,$empleado){
    $sql="INSERT INTO empleado_asesoria(Nombre,Apellido)
    VALUES (:Nombre,:Apellido)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$empleado->getNombre());
    $query->bindValue(":Apellido",$empleado->getApellido());
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
    $sql="DELETE FROM empleados_asesoria WHERE id_empleado=:id";
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
    $sql="UPDATE empleado_asesoria SET Nombre=:Nombre, Apellido=:Apellido
          WHERE id_empleado=:id";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$empleado->getNombre());      
    $query->bindValue(":Apellido",$empleado->getApellido());
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
 

}
?>