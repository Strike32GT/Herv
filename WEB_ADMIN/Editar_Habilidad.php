<?php
require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/HabilidadDB.php");
require_once("../Modelo/Habilidad.php");
$database=BaseMySql::conexion();

if(!isset($_POST["id_habilidad"])){
    echo "ID no recibido";
    exit();
}

$id=intval($_POST["id_habilidad"]);
$HabilidadDB=new HabilidadDB;
$Habilidad=$HabilidadDB->buscarPorId($database, $id);

if(!$Habilidad){
 echo "Habilidad no encontrada";
 exit();   
}

$opcion_est=$HabilidadDB->ActividadEnumEstado($database);

BaseMySql::close($database);

?>


<div class="fs-1 text-start">Editar Habilidad</div>
<form action="../Aplic_Web/Habilidad/habilidad_edit.php" method="post">
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" value="<?php echo $Habilidad->Nombre;?>" required class="form-control w-50">
        <input type="hidden" name="id_habilidad" value="<?php echo $Habilidad->id_habilidad;?>">
    </div>


    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Estado</label>
            <select name="Estado" id="Estado" class="form-control" required>
                <?php foreach ($opcion_est as $estado): ?>
                    <option value="<?php echo $estado; ?>" 
                        <?php if ($Habilidad->Estado == $estado) echo 'selected'; ?>>
                        <?php echo $estado; ?>
                    </option>
                <?php endforeach; ?>
            </select>
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