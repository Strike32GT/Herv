<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Metodos/UsuarioDB.php");

if (isset($_GET["id"])){
    $BD=BaseMySql::conexion();
    $usuarioDB=new UsuarioDB;
    $id=intval($_GET["id"]);

    $resultado=$usuarioDB->eliminar($BD,$id);

    if($resultado == 1){
        header("Location: aquí tengo que cambiar");
        exit();
    }
    else{
        echo "Error al eliminar al usuario";
    }
    BaseMySql::close($BD);    
}
?>