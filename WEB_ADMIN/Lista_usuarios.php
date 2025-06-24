<?php
require_once('../Conexion/ConexionMySQL.php');
require_once('../Modelo/Usuario.php');
require_once('../Metodos/UsuarioDB.php');
$database= BaseMySql::conexion();
$usuarioDB = new UsuarioDB($database);
$usuario=$usuarioDB->listar($database);



require_once('../Layout/header.php');
?>
<div class="fs-1 text-start">Usuarios</div>
        <div class="text-end mb-3">
            <a href="Crear_Usuario.php" class="btn btn-success">Agregar</a>    
        </div>
        <table class="table table-striped">
                <thead class="table-info">
                        <tr>
                                <th class="col md-4">Nombre</th>
                                <th class="col md-2">Email</th>
                                <th class="col md-2">Password</th>
                                <th class="col md-2">Fecha de Creación</th>
                                <th class="col md-4">&nbsp;</th>
                        </tr>
                </thead>
                <tbody>
                        <?php
                        foreach($usuario as $user)
                        { 
                            
                        ?>
                        <tr>
                                <td><?php echo $user->Nombre;?></td>
                                <td><?php echo $user->Email;?></td>
                                <td><?php echo $user->Password;?></td>       
                                <td><?php echo $user->Fecha_creacion;?></td>       
                                

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