<?php
require_once("./Conexion/ConexionMySQL.php");
require_once("./Modelo/Convenio.php");
require_once("./Metodos/ConvenioDB.php");

if($_SERVER["REQUEST_METHOD"]=="POST"){
    
    $database=BaseMySql::conexion();

    $convenioDB=new ConvenioDB;
    
    $convenio= new Convenio(
        null,
        $_POST["Nombre"],
        $_POST["Lugar"],
        $_POST["Sede"]
    );
    $resultado=$convenioDB->agregar($database,$convenio);

    if($resultado==1){
        header("Location: courses_list.php"); #Esto si tengo que cambiar
    }
    else{
        echo "Error al agregar";
    }
    BaseMySql::close($database);
}
?>