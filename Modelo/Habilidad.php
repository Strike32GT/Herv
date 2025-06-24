<?php
class Habilidad{
    private $_id_habilidad;
    private $_Nombre;
    private $_Estado;

    public function __construct($id_habilidad,$Nombre,$Estado)
    { 
        $this->_id_habilidad=$id_habilidad;
        $this->_Nombre=$Nombre;
        $this->_Estado=$Estado;
    }

    //GETTER
    public function getId(){
        return $this->_id_habilidad;
    }

    public function getNombre(){
        return $this->_Nombre;
    }
     
    public function getEstado(){
        return $this->_Estado;
    }

    



    //SETTER
    public function setId($id_habilidad){
        $this->_id_habilidad=$id_habilidad;
    }

    public function setNombre($Nombre){
        $this->_Nombre=$Nombre;
    }

    public function setEstado($Estado){
        $this->_Estado=$Estado;
    }

    
}
?>
