<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Metodos/HabilidadDB.php");

if (isset($_GET["id_habilidad"])){
    $BD=BaseMySql::conexion();
    $habilidadDB=new HabilidadDB;
    $id=intval($_GET["id_habilidad"]);

    $resultado=$habilidadDB->eliminar($BD,$id);

    if($resultado == 1){
        header("Location: aquí tengo que cambiar");
        exit();
    }
    else{
        echo "Error al eliminar la habilidad";
    }
    BaseMySql::close($BD);    
}
?>