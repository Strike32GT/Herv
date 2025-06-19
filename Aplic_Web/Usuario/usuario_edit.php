<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/Usuario.php");
require_once("./Metodos/UsuarioDB.php");

// Si se envió el formulario por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database = BaseMySql::conexion();
    $usuarioDB = new UsuarioDB();

    $usuarioEditado = new Usuario(
        $_POST["id_usuario"],        
        $_POST["Nombre"],
        $_POST["Email"],
        $_POST["Password"],
        null
    );

    $resultado = $usuarioDB->editar($database, $usuarioEditado);

    if ($resultado == 1) {
        header("Location: courses_list.php"); #Esto si lo debo de cambiar 
        exit(); 
    } else {
        echo "Error al editar el empleado.";
    }

    BaseMySql::close($database);
}
?>
