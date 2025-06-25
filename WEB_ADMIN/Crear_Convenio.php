<?php

require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/ConvenioDB.php");
require_once("../Modelo/Convenio.php");
$database=BaseMySql::conexion();
$ConvenioDB=new ConvenioDB;
$Convenio=$ConvenioDB->listar($database);


BaseMySql::close($database);





?>
<div class="fs-1 text-start">Registra Convenio</div>
<form action="../Aplic_Web/Habilidad/habilidad_insert.php" method="post">
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" maxlength="500" required class="form-control w-50">
    </div>

    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Lugar</label>
            <input type="text" name="Lugar" id="Lugar"  required class="form-control w-50">
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Sede</label>
            <input type="text" name="Sede" id="Sede"  required class="form-control w-50">
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