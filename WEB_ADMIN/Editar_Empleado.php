<?php
require_once('../Layout/header.php');
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/EmpleadoAsesoriaDB.php");
require_once("../Modelo/EmpleadoAsesoria.php");
require_once("../Metodos/AdminBD.php");
require_once("../Modelo/Admin.php");
$database=BaseMySql::conexion();

if(!isset($_POST["id_empleado"])){
    echo "ID no recibido";
    exit();
}

$id=intval($_POST["id_empleado"]);
$EmpleadoDB=new EmpleadoAsesoriaDB;
$Empleado=$EmpleadoDB->buscarPorId($database, $id);

if(!$Empleado){
 echo "Empleado no encontrado";
 exit();   
}

$AdminDB=new AdminBD;
$administrador=$AdminDB->listar($database);

BaseMySql::close($database);

?>


<div class="fs-1 text-start">Editar Empleado//Asesoría</div>
<form action="../Aplic_Web/Empleado_Asesoría/empleado_asesoria__edit.php" method="post">
    <div class="form-group mb-3">
        <label for="">Nombre</label>
        <input type="text" name="Nombre" id="Nombre" value="<?php echo $Empleado->Nombre;?>" required class="form-control w-50">
        <input type="hidden" name="id_empleado" value="<?php echo $Empleado->id_empleado;?>">
    </div>

    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Apellido</label>
            <input type="text" name="Apellido" id="Apellido" value="<?php echo $Empleado->Apellido;?>" required class="form-control w-50">
            
        </div>
    </div>
    
    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Usuario</label>
            <input type="text" name="Usuario" id="Usuario" value="<?php echo $Empleado->Usuario?>" required class="form-control w-50">
            
        </div>
    </div>

    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Administrador</label>
            <select name="Admin_id_admin" id="Admin_id_admin" class="form-control" required>
                <?php foreach($administrador as $admin){?>
                    <option value="<?php echo $admin->id_admin;?>"
                        <?php if($admin->id_admin==$Empleado->Admin_id_admin) echo "selected";?>>
                        <?php echo htmlspecialchars($admin->Nombre);?>
                    </option>
                <?php } ?>
            </select>
        </div>
    </div>



    <div class="row mb-3">
        <div class="col md-6">
            <label for="">Contraseña</label>
            <input type="password" name="Password" id="Password" value="<?php echo $Empleado->Password;?>" required class="form-control w-50">
        </div>
    </div>
    
    <div class="d-flex justify-content gap-2">
        <button type="submit" class="btn btn-success">Guardar</button>
        <a href="Lista_empleados.php" class="btn btn-danger">Cancelar</a>
    </div>

</form>

<?php
require_once("../Layout/footer.php");
?>