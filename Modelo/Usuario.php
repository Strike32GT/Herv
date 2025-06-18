<?php
class Usuario{
    private $_id_usuario;
    private $_nombre;
    private $_email;
    private $_password;
    private $_fecha_creacion;

    public function __construct($id_usuario,$nombre,$email,$password,$fecha_creacion)
    { 
        $this->_id_usuario=$id_usuario;
        $this->_nombre=$nombre;
        $this->_email=$email;
        $this->_password=$password;
        $this->_fecha_creacion=$fecha_creacion;
    }

    //GETTER
    public function getId(){
        return $this->_id_usuario;
    }

    public function getNombre(){
        return $this->_nombre;
    }
     
    public function getEmail(){
        return $this->_email;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function getFecha_Creacion(){
        return $this->_fecha_creacion;
    }

    //SETTER
    public function setId($id_usuario){
        $this->_id_usuario=$id_usuario;
    }

    public function setNombre($nombre){
        $this->_nombre=$nombre;
    }

    public function setEmail($email){
        $this->_email=$email;
    }

    public function setPassword($password){
        $this->_password=$password;
    }

    public function setFecha_Creacion($fecha_creacion){
        $this->_fecha_creacion=$fecha_creacion;
    }
}
?>
