<?php
require_once(__DIR__ . "/../../Conexion/ConexionMySQL.php");
require_once(__DIR__ . "/../../Modelo/Usuario.php");
require_once(__DIR__ . "/../../Metodos/UsuarioDB.php");


if (isset($_POST["id_usuario"])){
    $BD=BaseMySql::conexion();
    $usuarioDB=new UsuarioDB;   
    $id=intval($_POST["id_usuario"]);

    $resultado=$usuarioDB->eliminar($BD,$id);

    if($resultado == 1){
        header("Location: /Proyecto Final/WEB_ADMIN/Lista_usuarios.php");
        exit();
    }
    else{
        echo "Error al eliminar al usuario";
    }
    BaseMySql::close($BD);    
}
?>