<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/EmpleadoAsesoria.php");
require_once("./Metodos/EmpleadoAsesoriaDB.php");

// Si se envió el formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database = BaseMySql::conexion();
    $empleadoAsesoriaDB = new EmpleadoAsesoriaDB();

    $empleadoEditado = new EmpleadoAs(
        $_POST["id_empleado"],        
        $_POST["Nombre"],
        $_POST["Apellido"],
        null,
        null
    );

    $resultado = $empleadoAsesoriaDB->editar($database, $empleadoEditado);

    if ($resultado == 1) {
        header("Location: courses_list.php"); #Esto si lo debo de cambiar 
        exit(); 
    } else {
        echo "Error al editar el empleado.";
    }

    BaseMySql::close($database);
}
?>
