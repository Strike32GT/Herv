<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Metodos/ConvenioDB.php");

if (isset($_GET["id_universidad"])){
    $BD=BaseMySql::conexion();
    $convenioDB=new ConvenioDB;
    $id=intval($_GET["id_universidad"]);

    $resultado=$convenioDB->eliminar($BD,$id);

    if($resultado == 1){
        header("Location: aquí tengo que cambiar");
        exit();
    }
    else{
        echo "Error al eliminar al convenio";
    }
    BaseMySql::close($BD);    
}
?>