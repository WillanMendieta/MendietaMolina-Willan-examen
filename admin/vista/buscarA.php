
<?php
 //incluir conexión a la base de datos
 include '../../config/conexionBD.php';
 $autor = $_GET['autor']; 

 $sql = "SELECT * FROM autor where au_nombre = '$autor'";

 $result = $conn->query($sql);
 echo " <table>
 <tr>
                        <th>Nombre Autor</th>
                        <th>Nombre Nacionalidad</th>

                        </tr>";
 if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo " <td>" . $row['au_nombre'] ."</td>";
        echo " <td>" . $row['au_nacionalidad'] ."</td>";




    echo "</tr>";
    }
 } else { 
 echo "<tr>";
 echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
 echo "</tr>"; 
 }
 echo "</table>";
 $conn->close(); 
 
?>

