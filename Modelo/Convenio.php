<?php
class Convenio{
    private $_id_universidad;
    private $_nombre;
    private $_lugar;
    private $_sede;

    public function __construct($id_universidad,$nombre,$lugar,$sede)
    { 
        $this->_id_universidad=$id_universidad;
        $this->_nombre=$nombre;
        $this->_lugar=$lugar;
        $this->_sede=$sede;
    }

    //GETTER
    public function getId(){
        return $this->_id_universidad;
    }

    public function getNombre(){
        return $this->_nombre;
    }
     
    public function getLugar(){
        return $this->_lugar;
    }

    public function getSede(){
        return $this->_sede;
    }
    



    //SETTER
    public function setId($id_universidad){
        $this->_id_universidad=$id_universidad;
    }

    public function setNombre($nombre){
        $this->_nombre=$nombre;
    }

    public function setLugar($lugar){
        $this->_lugar=$lugar;
    }

    public function setSede($sede){
        $this->_sede=$sede;
    }

}
?>
