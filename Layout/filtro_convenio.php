<?php
if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["depart"])){
require_once("../Conexion/ConexionMySQL.php");
require_once("../Metodos/ConvenioDB.php");
require_once("../Modelo/Convenio.php");


$database=BaseMySql::conexion();

$convenioDB=new ConvenioDB();
$convenio=$convenioDB->listar($database);


$idDepartamento=$_POST["depart"];
BaseMySql::close($database);
?>
    

        <table class="table table-striped">
                <thead class="table-success">
                        <tr>
                                <th class="col md-4">Nombre</th>
                                <th class="col md-2">Lugar</th>
                                <th class="col md-2">Sede</th>
                        </tr>
                </thead>
                <tbody>
                <?php foreach($convenio as $curso) {
                        
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