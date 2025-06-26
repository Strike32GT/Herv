<?php
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");
require_once(__DIR__."/../../Modelo/Habilidad.php");
require_once(__DIR__."/../../Metodos/HabilidadDB.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database = BaseMySql::conexion();
    $habilidadDB = new HabilidadDB();

    $habilidadEditada = new Habilidad(
        intval($_POST["id_habilidad"]),        
        $_POST["Nombre"],
        $_POST["Estado"]
    );

    $resultado = $habilidadDB->editar($database, $habilidadEditada);

    if ($resultado == 1) {
        header("Location: /Proyecto Final/WEB_ADMIN/Lista_habilidad.php"); 
        exit(); 
    } else {
        echo "Error al editar el empleado.";
    }

    BaseMySql::close($database);
}
?>
