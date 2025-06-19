<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/Convenio.php");
require_once("./Metodos/ConvenioDB.php");

// Si se envió el formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database = BaseMySql::conexion();
    $convenioDB = new ConvenioDB();

    $convenioEditado = new Convenio(
        $_POST["id_universidad"],        
        $_POST["Nombre"],
        $_POST["Lugar"],
        $_POST["Sede"]
    );

    $resultado = $convenioDB->editar($database, $convenioEditado);

    if ($resultado == 1) {
        header("Location: courses_list.php"); #Esto si lo debo de cambiar 
        exit(); 
    } else {
        echo "Error al editar el empleado.";
    }

    BaseMySql::close($database);
}
?>
