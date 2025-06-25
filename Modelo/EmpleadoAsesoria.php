<?php
class EmpleadoAs{
    private $_id_empleado;
    private $_Nombre;
    private $_Apellido;
    private $_Usuario;
    private $_Password;
    private $_Fecha_incorporacion;
    private $_Admin_id_admin;

    public function __construct($id_empleado,$Nombre,$Apellido,$Usuario,$Password,$Fecha_incorporacion,$Admin_id_admin)
    { 
        $this->_id_empleado=$id_empleado;
        $this->_Nombre=$Nombre;
        $this->_Apellido=$Apellido;
        $this->_Usuario=$Usuario;
        $this->_Password=$Password;
        $this->_Fecha_incorporacion=$Fecha_incorporacion;
        $this->_Admin_id_admin=$Admin_id_admin;
    }

    //GETTER
    public function getId(){
        return $this->_id_empleado;
    }

    public function getNombre(){
        return $this->_Nombre;
    }
     
    public function getApellido(){
        return $this->_Apellido;
    }

    public function getUsuario(){
        return $this->_Usuario;
    }

    public function getPassword(){
        return $this->_Password;
    }

    public function getFecha_Incorporacion(){
        return $this->_Fecha_incorporacion;
    }

    public function getAdmin_id_Admin(){
        return $this->_Admin_id_admin;
    }



    //SETTER
    public function setId($id_empleado){
        $this->_id_empleado=$id_empleado;
    }

    public function setNombre($Nombre){
        $this->_Nombre=$Nombre;
    }

    public function setApellido($Apellido){
        $this->_Apellido=$Apellido;
    }

    public function setUsuario($Usuario){
        $this->_Usuario=$Usuario;
    }

    public function setPassword($Password){
        $this->_Password=$Password;
    }
    
    public function setFecha_Incorporacion($Fecha_incorporacion){
        $this->_Fecha_incorporacion=$Fecha_incorporacion;
    }

    public function setAdmin_id_Admin($Admin_id_admin){
        $this->_Admin_id_admin=$Admin_id_admin;
    }
}
?>
