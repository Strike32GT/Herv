<?php
require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/EmpleadoAsesoriaDB.php");
require_once("../Modelo/EmpleadoAsesoria.php");
$database=BaseMySql::conexion();
$EmpleadoDB=new EmpleadoAsesoriaDB;
$Empleado=$EmpleadoDB->listar($database);


BaseMySql::close($database);





?>
<div class="fs-1 text-start">Registra Empleado//Asesoría</div>
<form action="../Aplic_Web/Empleado_Asesoría/empleado_asesoria__insert.php" method="post">
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" maxlength="500" required class="form-control w-50">
    </div>

    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Apellido</label>
            <input type="text" name="Apellido" id="Apellido"  required class="form-control w-50">
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Usuario</label>
            <input type="text" name="Usuario" id="Usuario"  required class="form-control w-50">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Contraseña</label>
            <input type="password" name="Password" id="Password"  required class="form-control w-50">
        </div>
    </div>
    
    <div class="d-flex justify-content gap-2">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="Lista_convenios.php" class="btn btn-danger">Cancelar</a>
    </div>

</form>

<?php
require_once("../Layout/footer.php");
?>