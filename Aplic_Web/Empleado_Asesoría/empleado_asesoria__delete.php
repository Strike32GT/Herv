<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Metodos/EmpleadoAsesoriaDB.php");

if (isset($_GET["id_empleado"])){
    $BD=BaseMySql::conexion();
    $empleadoAsesoriaDB=new EmpleadoAsesoriaDB;
    $id=intval($_GET["id_empleado"]);

    $resultado=$empleadoAsesoriaDB->eliminar($BD,$id);

    if($resultado == 1){
        header("Location: aquí tengo que cambiar");
        exit();
    }
    else{
        echo "Error al eliminar al empleado";
    }
    BaseMySql::close($BD);    
}
?>