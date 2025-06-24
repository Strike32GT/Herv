<?php
require_once('../Conexion/ConexionMySQL.php');
require_once('../Modelo/Convenio.php');
require_once('../Metodos/ConvenioDB.php');
$database= BaseMySql::conexion();
$convenioDB = new ConvenioDB($database);
$convenio=$convenioDB->listar($database);



require_once('../Layout/header.php');
?>
<div class="fs-1 text-start">Convenios</div>
        <div class="text-end mb-3">
            <a href="#" class="btn btn-success">Agregar</a>
            <a href="#" class="btn btn-info">Buscar por Sede</a>    
        </div>
        <table class="table table-striped">
                <thead class="table-info">
                        <tr>
                                <th class="col md-4">Nombre</th>
                                <th class="col md-2">Lugar</th>
                                <th class="col md-2">Sede</th>
                                <th class="col md-4">Métodos</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        foreach($convenio as $conv)
                        { 
                            
                        ?>
                        <tr>
                                <td><?php echo $conv->Nombre;?></td>
                                <td><?php echo $conv->Lugar;?></td>
                                <td><?php echo $conv->Sede;?></td>       

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