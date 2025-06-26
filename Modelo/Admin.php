<?php
class Usuario{
    private $_id_admin;
    private $_Nombre;
    private $_Apellido;
    private $_Email;
    private $_Password;

    public function __construct($id_admin,$Nombre,$Apellido,$Email,$Password)
    { 
        $this->_id_admin=$id_admin;
        $this->_Nombre=$Nombre;
        $this->_Apellido=$Apellido;
        $this->_Email=$Email;
        $this->_Password=$Password;
    }

    //GETTER
    public function getId(){
        return $this->_id_admin;
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
}
?>
