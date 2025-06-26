<?php
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");
require_once(__DIR__."/../../Metodos/HabilidadDB.php");

if (isset($_GET["id_habilidad"])){
    $BD=BaseMySql::conexion();
    $habilidadDB=new HabilidadDB;
    $id=intval($_POST["id_habilidad"]);

    $resultado=$habilidadDB->eliminar($BD,$id);

    if($resultado == 1){
        header("Location: /Proyecto Final/WEB_ADMIN/Lista_habilidad.php");
        exit();
    }
    else{
        echo "Error al eliminar la habilidad";
    }
    BaseMySql::close($BD);    
}
?>