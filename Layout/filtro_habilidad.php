<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["depart"])){
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/HabilidadDB.php");
require_once("../Modelo/Habilidad.php");


$database=BaseMySql::conexion();

$habilidadDB=new ConvenioDB();
$habilidad=$habilidadDB->listar($database);



BaseMySql::close($database);
?>
    

        <table class="table table-striped">
                <thead class="table-success">
                        <tr>
                                <th class="col md-4">N° Actividad</th>
                                <th class="col md-2">Nombre</th>
                        </tr>
                </thead>
                <tbody>
                <?php foreach($habilidad as $hab) {
                        
                        foreach($professor as $profes){
                                if($curso->professor_id==$profes->professor_id &&  
                                $profes->department_id==$idDepartamento){
                                
                               echo "<tr>";
                               echo "<td>".htmlspecialchars($curso->name)."</td>";
                               echo "<td>".htmlspecialchars($curso->credits)."</td>";
                               echo "<td>".htmlspecialchars($profes->name)."</td>";
                               echo "<td>"."&nbsp"."</td>";
                               echo "<tr>";          
                                }
                        }
                        }?>      
                </tbody>
        </table>
<?php
}
?>
</body>
</html>