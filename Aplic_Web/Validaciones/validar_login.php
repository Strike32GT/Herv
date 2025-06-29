<?php
session_start();
require_once(__DIR__."/../../Conexion/ConexionMySQL.php");

require_once(__DIR__."/../../Modelo/Admin.php");
require_once(__DIR__."/../../Metodos/AdminBD.php");

require_once(__DIR__."/../../Modelo/Usuario.php");
require_once(__DIR__."/../../Metodos/UsuarioDB.php");

require_once(__DIR__."/../../Modelo/EmpleadoAsesoria.php");
require_once(__DIR__."/../../Metodos/EmpleadoAsesoriaDB.php");

$email=$_POST["email"];
$password=$_POST["password"];
$BD=BaseMySql::conexion();

$usuarioDB= new UsuarioDB();
$usuario=$usuarioDB->listar($BD);

foreach($usuario as $user){
    if ($user->Email === $email && $user->Password === $password){
        $_SESSION["rol"]="usuario";
        $_SESSION["nombre"]= $user->Nombre;
        header("Location: /ProyectoFinal/WEB/Principal.php");
        exit();
    }
}


$EmpleadoAsesoriaDB=new EmpleadoAsesoriaDB();
$empleado= $EmpleadoAsesoriaDB->listar($BD);
foreach($empleado as $emp){
    if ($emp->Usuario === $email && $emp->Password === $password){
        $_SESSION["rol"]="empleado";
        $_SESSION["nombre"]= $emp->Nombre;
        header("Location: /ProyectoFinal/WEB_ADMIN/Lista_usuarios.php");
        exit();
    }
}

$AdminBD=new AdminBD();
$Admin= $AdminBD->listar($BD);
foreach($Admin as $adm){
    if ($adm->Email === $email && $adm->Password === $password){
        $_SESSION["rol"]="admin";
        $_SESSION["nombre"]= $adm->Nombre;
        header("Location: /ProyectoFinal/WEB_ADMIN/Lista_usuarios.php");
        exit();
    }
}



?>