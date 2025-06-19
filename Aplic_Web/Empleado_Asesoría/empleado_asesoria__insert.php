<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/EmpleadoAsesoria.php");
require_once("./Metodos/EmpleadoAsesoriaDB.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $database=BaseMySql::conexion();

    $empleadoAsesoriaDB=new EmpleadoAsesoriaDB;
    
    $empleadoAs= new EmpleadoAs(
        null,
        $_POST["Nombre"],
        $_POST["Apellido"],
        null,
        null
    );
    $resultado=$empleadoAsesoriaDB->agregar($database,$empleadoAs);

    if($resultado==1){
        header("Location: courses_list.php"); #Esto si tengo que cambiar
    }
    else{
        echo "Error al agregar";
    }
    BaseMySql::close($database);
}
?>