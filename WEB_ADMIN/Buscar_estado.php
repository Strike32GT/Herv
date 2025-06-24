<?php
require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/HabilidadDB.php");
require_once("../Modelo/Habilidad.php");

$database=BaseMySql::conexion();
$habilidadDB=new HabilidadDB;
$habilidad=$habilidadDB->listar($database);

BaseMySql::close($database);

?>
<div class="fs-1 text-start mb-3">Buscar por Estado</div>
<form action="" method="post">
    <div class="form-group">
        <select name="sede" id="sede" class="form-control mb-4 w-50" required>
            <option value="" disabled selected>Seleccione...</option>
            <?php foreach($habilidad as $hab){?>
                <option value="<?php echo $hab->id_habilidad;?>">
                    <?php echo htmlspecialchars($hab->Estado);?>
                </option>
            <?php }?>    
        </select>
    </div>

    <?php require_once("../Layout/filtro_convenio.php"); ?>
    
    <div class="d-flex justify-content gap-2">
        <button type="submit" class="btn btn-outline-primary">Buscar</button>
        <a href="Lista_habilidad.php" class="btn btn-outline-danger">Volver</a>
    </div>

</form>
<?php
require_once("../Layout/footer.php");
?>