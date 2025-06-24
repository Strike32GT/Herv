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
            <a href="#" class="btn btn-success">Agregar</a>    
        </div>
        <table class="table table-striped">
                <thead class="table-info">
                        <tr>
                                <th class="col md-4">N°Empleado</th>
                                <th class="col md-4">Nombre</th>
                                <th class="col md-2">Apellido</th>
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
                                <td><?php echo $emp->Fecha_incorporacion;?></td>     
                                         
                                <td class="d-flex gap-2">
                                <button href="#" class="btn btn-outline-info">Editar</button>

                                <form action="">
                                        <input type="hidden" name="id" value="aca coloco lo del php">
                                        <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                                </form>

                                </td>
                        </tr>
                        <?php
                        }
                        ?>
                </tbody>
        </table>