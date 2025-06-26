<?php
require_once('../Conexion/ConexionMySQL.php');
require_once('../Modelo/EmpleadoAsesoria.php');
require_once('../Metodos/EmpleadoAsesoriaDB.php');
$database= BaseMySql::conexion();
$empleadoDB = new EmpleadoAsesoriaDB($database);
$empleado=$empleadoDB->listar($database);



require_once('../Layout/header.php');
?>
<div class="fs-1 text-start">Empleados Asesoría</div>
        <div class="text-end mb-3">
            <a href="Crear_Empleado.php" class="btn btn-success">Agregar</a>    
        </div>
        <table class="table table-striped">
                <thead class="table-info">
                        <tr>
                                <th class="col md-4">N°Empleado</th>
                                <th class="col md-4">Nombre</th>
                                <th class="col md-2">Apellido</th>
                                <th class="col md-2">Usuario</th>
                                <th class="col md-2">Contraseña</th>
                                <th class="col md-2">Fecha de Incorporacion</th>
                                <th class="col md-4">Métodos</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        foreach($empleado as $emp)
                        { 
                            
                        ?>
                        <tr>
                                <td><?php echo $emp->id_empleado;?></td>
                                <td><?php echo $emp->Nombre;?></td>
                                <td><?php echo $emp->Apellido;?></td>
                                <td><?php echo $emp->Usuario;?></td>
                                <td><?php echo $emp->Password;?></td>
                                <td><?php echo $emp->Fecha_incorporacion;?></td>     
                                         
                                <td class="d-flex gap-2">

                                <form action="Editar_Empleado.php" method="post">
                                        <input type="hidden" name="id_empleado" value="<?php echo $emp->id_empleado;?>">
                                        <button type="submit" class="btn btn-outline-info">Editar</button>
                                </form>

                                <form action="../Aplic_Web/Empleado_Asesoría/empleado_asesoria__delete.php" method="post">
                                        <input type="hidden" name="id_empleado" value="<?php echo $emp->id_empleado;?>">
                                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                                </td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
        </table>