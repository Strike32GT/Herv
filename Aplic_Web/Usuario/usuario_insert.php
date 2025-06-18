<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/Usuario.php");
require_once("./Metodos/UsuarioDB.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $database=BaseMySql::conexion();

    $usuarioDB=new UsuarioDB();
    
    $usuario= new Usuario(
        null,
        $_POST["nombre"],
        $_POST["email"],
        $_POST["password"],
        null
    );
    $resultado=$usuarioDB->agregar($database,$usuario);

    if($resultado==1){
        header("Location: courses_list.php");
    }
    else{
        echo "Error al agregar";
    }
    BaseMySql::close($database);
}
?>