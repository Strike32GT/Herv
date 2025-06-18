<?php
require_once("./Modelo/Convenio.php");
class ConvenioDB
{
    public function listar($BD){
        $sql="SELECT convenio.id_universidad,convenio.Nombre,
        convenio.Lugar,convenio.Sede
        FROM convenio";
    $query=$BD->prepare($sql); 
    $query->execute();
    return $query->fetchAll(PDO::FETCH_OBJ);
    }

 public function agregar($BD,$convenio){
    $sql="INSERT INTO habilidad(Nombre,Lugar,Sede)
    VALUES (:Nombre,:Lugar,:Sede)";
    $query=$BD->prepare($sql);
    $query->bindValue(":Nombre",$convenio->getNombre());
    $query->bindValue(":Estado",$convenio->getEstado());
    $query->bindValue(":sede",$convenio->getSede());
    try{
        $query->execute();
        return 1;
    }
    catch(PDOException $err){
        echo $err->getMessage();
        return -1;
    }
 } 
}
?>