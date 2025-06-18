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
    $sql="INSERT INTO usuario(Nombre,Apellido,Password)
    VALUES (:Nombre,:Email,:Password)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$empleado->getNombre());
    $query->bindValue(":Email",$empleado->getEmail());
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