<?php
require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/ConvenioDB.php");
require_once("../Modelo/Convenio.php");
$database=BaseMySql::conexion();

if(!isset($_POST["id_universidad"])){
    echo "ID no recibido";
    exit();
}

$id=intval($_POST["id_universidad"]);
$ConvenioDB=new ConvenioDB;
$Convenio=$ConvenioDB->buscarPorId($database, $id);

if(!$Convenio){
 echo "Convenio no encontrado";
 exit();   
}

$opcion_est=$ConvenioDB->ActividadEnumEstado($database);

BaseMySql::close($database);

?>


<div class="fs-1 text-start">Editar Convenio</div>
<form action="../Aplic_Web/Convenio/convenio_edit.php" method="post">
    
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" value="<?php echo $Convenio->Nombre;?>" required class="form-control w-50">
        <input type="hidden" name="id_universidad" value="<?php echo $Convenio->id_universidad;?>">
    </div>


    <div class="form-group mb-3">
        <label for="">Lugar</label>
        <input type="text" name="Lugar" id="Lugar" value="<?php echo $Convenio->Lugar;?>" required class="form-control w-50">
    </div>



    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Sede</label>
            <select name="Sede" id="Sede" class="form-control" required>
                <?php foreach ($opcion_est as $sede): ?>
                    <option value="<?php echo $sede; ?>" 
                        <?php if ($Convenio->Sede == $sede) echo 'selected'; ?>>
                        <?php echo $sede; ?>
                    </option>
                <?php endforeach; ?>
            </select>
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