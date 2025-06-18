<?php
class EmpleadoAs{
    private $_id_empleado;
    private $_nombre;
    private $_apellido;
    private $_fecha_incorporacion;
    private $_admin_id_admin;

    public function __construct($id_empleado,$nombre,$apellido,$fecha_incorporacion,$admin_id_admin)
    { 
        $this->_id_empleado=$id_empleado;
        $this->_nombre=$nombre;
        $this->_apellido=$apellido;
        $this->_fecha_incorporacion=$fecha_incorporacion;
        $this->_admin_id_admin=$admin_id_admin;
    }

    //GETTER
    public function getId(){
        return $this->_id_empleado;
    }

    public function getNombre(){
        return $this->_nombre;
    }
     
    public function getApellido(){
        return $this->_apellido;
    }

    public function getFecha_Incorporacion(){
        return $this->_fecha_incorporacion;
    }

    public function getAdmin_id_Admin(){
        return $this->_admin_id_admin;
    }



    //SETTER
    public function setId($id_empleado){
        $this->_id_empleado=$id_empleado;
    }

    public function setNombre($nombre){
        $this->_nombre=$nombre;
    }

    public function setApellido($apellido){
        $this->_apellido=$apellido;
    }

    public function setFecha_Incorporacion($fecha_incorporacion){
        $this->_fecha_incorporacion=$fecha_incorporacion;
    }

    public function setAdmin_id_Admin($admin_id_admin){
        $this->_admin_id_admin=$admin_id_admin;
    }
}
?>
