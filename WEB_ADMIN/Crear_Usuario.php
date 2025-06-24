<?php

require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/UsuarioDB.php");
require_once("../Modelo/Usuario.php");
$database=BaseMySql::conexion();
$UsuarioDB=new UsuarioDB;
$Usuario=$UsuarioDB->listar($database);


BaseMySql::close($database);





?>
<div class="fs-1 text-start">Registro Usuario</div>
<form action="../Aplic_Web/Usuario/usuario_insert.php" method="post">
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" maxlength="500" required class="form-control w-50">
    </div>
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Email</label>
            <input type="email" name="Email" id="Email"  required class="form-control w-50">
        </div>
    </div>
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Password</label>
            <input type="password" name="Password" id="Password" required class="form-control w-50">
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