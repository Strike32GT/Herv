<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/Habilidad.php");
require_once("./Metodos/HabilidadDB.php");

// Si se envió el formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database = BaseMySql::conexion();
    $habilidadDB = new HabilidadDB();

    $habilidadEditada = new Habilidad(
        $_POST["id_habilidad"],        
        $_POST["Nombre"],
        $_POST["Estado"]
    );

    $resultado = $habilidadDB->editar($database, $habilidadEditada);

    if ($resultado == 1) {
        header("Location: courses_list.php"); #Esto si lo debo de cambiar 
        exit(); 
    } else {
        echo "Error al editar el empleado.";
    }

    BaseMySql::close($database);
}
?>
