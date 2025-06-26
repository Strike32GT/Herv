<?php
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");
require_once(__DIR__."/../../Metodos/EmpleadoAsesoriaDB.php");
require_once(__DIR__."/../../Modelo/EmpleadoAsesoria.php");


if (isset($_POST["id_empleado"])){
    $BD=BaseMySql::conexion();
    $empleadoAsesoriaDB=new EmpleadoAsesoriaDB;
    $id=intval($_POST["id_empleado"]);

    $resultado=$empleadoAsesoriaDB->eliminar($BD,$id);

    if($resultado == 1){
        header("Location: /Proyecto Final/WEB_ADMIN/Lista_empleados.php");
        exit();
    }
    else{
        echo "Error al eliminar al empleado";
    }
    BaseMySql::close($BD);    
}
?>