<?php
require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/UsuarioDB.php");
require_once("../Modelo/Usuario.php");
$database=BaseMySql::conexion();

if(!isset($_POST["id_usuario"])){
    echo "ID no recibido";
    exit();
}

$id=intval($_POST["id_usuario"]);
$UsuarioDB=new UsuarioDB;
$Usuario=$UsuarioDB->buscarPorId($database, $id);

if(!$Usuario){
 echo "Usuario no encontrado";
 exit();   
}

BaseMySql::close($database);

?>


<div class="fs-1 text-start">Editar Usuario</div>
<form action="../Aplic_Web/Usuario/usuario_edit.php" method="post">
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" value="<?php echo $Usuario->Nombre;?>" required class="form-control w-50">
        <input type="hidden" name="id_usuario" value="<?php echo $Usuario->id_usuario;?>">
    </div>

    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Apellido</label>
            <input type="text" name="Apellido" id="Apellido" value="<?php echo $Usuario->Apellido;?>" required class="form-control w-50">
            
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Email</label>
            <input type="email" name="Email" id="Email" value="<?php echo $Usuario->Email?>" required class="form-control w-50">
            
        </div>
    </div>

    
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Contraseña</label>
            <input type="password" name="Password" id="Password" value="<?php echo $Usuario->Password;?>" required class="form-control w-50">
        </div>
    </div>
    

    <div class="d-flex justify-content gap-2">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="Lista_usuarios.php" class="btn btn-danger">Cancelar</a>
    </div>


</form>

<?php
require_once("../Layout/footer.php");
?>