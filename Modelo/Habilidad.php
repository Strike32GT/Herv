<?php
class Habilidad{
    private $_id_habilidad;
    private $_nombre;
    private $_estado;

    public function __construct($id_habilidad,$nombre,$estado)
    { 
        $this->_id_habilidad=$id_habilidad;
        $this->_nombre=$nombre;
        $this->_estado=$estado;
    }

    //GETTER
    public function getId(){
        return $this->_id_habilidad;
    }

    public function getNombre(){
        return $this->_nombre;
    }
     
    public function getEstado(){
        return $this->_estado;
    }

    



    //SETTER
    public function setId($id_habilidad){
        $this->_id_habilidad=$id_habilidad;
    }

    public function setNombre($nombre){
        $this->_nombre=$nombre;
    }

    public function setEstado($estado){
        $this->_estado=$estado;
    }

    
}
?>
