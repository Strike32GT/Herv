<?php
class Usuario{
    private $_id_usuario;
    private $_Nombre;
    private $_Apellido;
    private $_Email;
    private $_Password;
    private $_Fecha_creacion;

    public function __construct($id_usuario,$Nombre,$Apellido,$Email,$Password,$Fecha_creacion)
    { 
        $this->_id_usuario=$id_usuario;
        $this->_Nombre=$Nombre;
        $this->_Apellido=$Apellido;
        $this->_Email=$Email;
        $this->_Password=$Password;
        $this->_Fecha_creacion=$Fecha_creacion;
    }

    //GETTER
    public function getId(){
        return $this->_id_usuario;
    }

    public function getNombre(){
        return $this->_Nombre;
    }

    public function getApellido(){
        return $this->_Apellido;
    }
     
    public function getEmail(){
        return $this->_Email;
    }

    public function getPassword(){
        return $this->_Password;
    }

    public function getFecha_Creacion(){
        return $this->_Fecha_creacion;
    }

    //SETTER
    public function setId($id_usuario){
        $this->_id_usuario=$id_usuario;
    }

    public function setNombre($Nombre){
        $this->_Nombre=$Nombre;
    }

    public function setApellido($Apellido){
        $this->_Apellido=$Apellido;
    }

    public function setEmail($Email){
        $this->_Email=$Email;
    }

    public function setPassword($Password){
        $this->_Password=$Password;
    }

    public function setFecha_Creacion($Fecha_creacion){
        $this->_Fecha_creacion=$Fecha_creacion;
    }
}
?>
