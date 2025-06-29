<?php
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");
require_once(__DIR__."/../../Modelo/Usuario.php");
require_once(__DIR__."/../../Metodos/UsuarioDB.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $database=BaseMySql::conexion();

    $usuarioDB=new UsuarioDB();
    
    $usuario= new Usuario(
        null,
        $_POST["Nombre"],
        $_POST["Apellido"],
        $_POST["Email"],
        $_POST["Password"],
        null
    );
    $resultado=$usuarioDB->agregar($database,$usuario);

    if($resultado==1){
        header("Location: /ProyectoFinal/WEB_ADMIN/Lista_usuarios.php");
    }
    else{
        echo "Error al agregar";
    }
    BaseMySql::close($database);
}
?>