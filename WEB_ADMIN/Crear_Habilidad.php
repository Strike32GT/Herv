<?php

require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/HabilidadDB.php");
require_once("../Modelo/Habilidad.php");
$database=BaseMySql::conexion();
$HabilidadDB=new HabilidadDB;
$Habilidad=$HabilidadDB->listar($database);


BaseMySql::close($database);





?>
<div class="fs-1 text-start">Registra Habilidad</div>
<form action="../Aplic_Web/Habilidad/habilidad_insert.php" method="post">
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" maxlength="500" required class="form-control w-50">
    </div>
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Estado</label>
            <input type="text" name="Estado" id="Estado"  required class="form-control w-50">
        </div>
    </div>
    
     

    
    <div class="d-flex justify-content gap-2">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="Lista_habilidad.php" class="btn btn-danger">Cancelar</a>
    </div>

</form>

<?php
require_once("../Layout/footer.php");
?>