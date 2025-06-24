<?php
class Convenio{
    private $_id_universidad;
    private $_Nombre;
    private $_Lugar;
    private $_Sede;

    public function __construct($id_universidad,$Nombre,$Lugar,$Sede)
    { 
        $this->_id_universidad=$id_universidad;
        $this->_Nombre=$Nombre;
        $this->_Lugar=$Lugar;
        $this->_Sede=$Sede;
    }

    //GETTER
    public function getId(){
        return $this->_id_universidad;
    }

    public function getNombre(){
        return $this->_Nombre;
    }
     
    public function getLugar(){
        return $this->_Lugar;
    }

    public function getSede(){
        return $this->_Sede;
    }
    



    //SETTER
    public function setId($id_universidad){
        $this->_id_universidad=$id_universidad;
    }

    public function setNombre($Nombre){
        $this->_Nombre=$Nombre;
    }

    public function setLugar($Lugar){
        $this->_Lugar=$Lugar;
    }

    public function setSede($Sede){
        $this->_Sede=$Sede;
    }

}
?>
