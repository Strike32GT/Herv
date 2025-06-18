<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/Habilidad.php");
require_once("./Metodos/HabilidadDB.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $database=BaseMySql::conexion();

    $habilidadDB=new HabilidadDB();
    
    $habilidad= new Habilidad(
        null,
        $_POST["nombre"],
        $_POST["estado"]
    );
    $resultado=$habilidadDB->agregar($database,$habilidad);

    if($resultado==1){
        header("Location: courses_list.php"); #Esto si tengo que cambiar
    }
    else{
        echo "Error al agregar";
    }
    BaseMySql::close($database);
}
?>