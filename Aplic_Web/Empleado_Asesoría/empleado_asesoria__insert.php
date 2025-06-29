<?php
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");
require_once(__DIR__."/../../Modelo/EmpleadoAsesoria.php");
require_once(__DIR__."/../../Metodos/EmpleadoAsesoriaDB.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $database=BaseMySql::conexion();

    $empleadoAsesoriaDB=new EmpleadoAsesoriaDB;
    
    $empleadoAs= new EmpleadoAs(
        null,
        $_POST["Nombre"],
        $_POST["Apellido"],
        $_POST["Usuario"],
        $_POST["Password"],
        null,
        $_POST["Admin_id_admin"]
    );
    $resultado=$empleadoAsesoriaDB->agregar($database,$empleadoAs);

    if($resultado==1){
        header("Location: /ProyectoFinal/WEB_ADMIN/Lista_empleados.php"); 
    }
    else{
        echo "Error al agregar";
    }
    BaseMySql::close($database);
}
?>