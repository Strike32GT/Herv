<?php
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");
require_once(__DIR__."/../../Modelo/EmpleadoAsesoria.php");
require_once(__DIR__."/../../Metodos/EmpleadoAsesoriaDB.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database = BaseMySql::conexion();
    $empleadoAsesoriaDB = new EmpleadoAsesoriaDB();

    $empleadoEditado = new EmpleadoAs(
        intval($_POST["id_empleado"]),        
        $_POST["Nombre"],
        $_POST["Apellido"],
        $_POST["Usuario"],
        $_POST["Password"],
        null,
        $_POST["Admin_id_admin"],
    );

    $resultado = $empleadoAsesoriaDB->editar($database, $empleadoEditado);

    if ($resultado == 1) {
        header("Location: /Proyecto Final/WEB_ADMIN/Lista_empleados.php");  
        exit(); 
    } else {
        echo "Error al editar el empleado.";
    }

    BaseMySql::close($database);
}
?>
