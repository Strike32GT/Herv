<?php
require_once('../Conexion/ConexionMySQL.php');
require_once('../Modelo/Habilidad.php');
require_once('../Metodos/HabilidadDB.php');
$database= BaseMySql::conexion();
$habilidadDB = new HabilidadDB($database);
$habilidad=$habilidadDB->listar($database);



require_once('../Layout/header.php');
?>
<div class="fs-1 text-start">Habilidad</div>
        <div class="text-end mb-3">
            <a href="Crear_Habilidad.php" class="btn btn-success">Agregar</a>
            <a href="Buscar_estado.php" class="btn btn-info">Buscar por Estado</a>    
        </div>
        <table class="table table-striped">
                <thead class="table-info">
                        <tr>
                                <th class="col md-4">Número de Actividad</th>
                                <th class="col md-2">Nombre</th>
                                <th class="col md-2">Estado</th>
                                <th class="col md-4">Métodos</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        foreach($habilidad as $hab)
                        { 
                            
                        ?>
                        <tr>
                                <td><?php echo $hab->id_habilidad;?></td>
                                <td><?php echo $hab->Nombre;?></td>
                                <td><?php echo $hab->Estado;?></td>       
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