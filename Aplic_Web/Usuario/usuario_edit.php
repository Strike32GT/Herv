<?php
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");
require_once(__DIR__."/../../Modelo/Usuario.php");
require_once(__DIR__."/../../Metodos/UsuarioDB.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $database = BaseMySql::conexion();
    $usuarioDB = new UsuarioDB();

    $usuarioEditado = new Usuario(
        intval($_POST["id_usuario"]),        
        $_POST["Nombre"],
        $_POST["Apellido"],
        $_POST["Email"],
        $_POST["Password"],
        null
    );

    $resultado = $usuarioDB->editar($database, $usuarioEditado);

    if ($resultado == 1) {
        header("Location: /Proyecto Final/WEB_ADMIN/Lista_usuarios.php"); 
        exit(); 
    } else {
        echo "Error al editar el empleado.";
    }

    BaseMySql::close($database);
}
?>
