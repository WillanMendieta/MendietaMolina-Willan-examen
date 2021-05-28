
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
                        <th>Titulo del capitulo </th>
                        <th>Numero de capitulo</th>
                        
                        <th>Nombre del libro</th>
                        <th>ISBN</th>
                        <th>Numeros de pagina</th>
                        </tr>";
 if ($result->num_rows > 0) { 
    while($row = $result->fetch_assoc()) {
    echo "<tr>";
        echo " <td>" . $row['au_nombre'] ."</td>";
        echo " <td>" . $row['au_nacionalidad'] ."</td>";


        $sql2 = "SELECT * FROM capitulos where cap_autor =". $row['au_id']." ";
        $result2 = $conn->query($sql2);
        if ($result2->num_rows > 0) {
           
            while($row2 = $result2->fetch_assoc()) {
               
              echo " <td>" . $row2['cap_titulo'] . "</td>";
                echo " <td>" . $row2['cap_numero'] ."</td>";



                $sql3 = "SELECT * FROM libro where lib_id =". $row2['cap_libro']." ";
                        $result3 = $conn->query($sql3);
                        
                        if ($result3->num_rows > 0) {
                        
                            while($row3 = $result3->fetch_assoc()) {

                                echo " <td>" . $row3['lib_nombre'] ."</td>";
                                echo " <td>" . $row3['lib_isbn'] . "</td>";
                                echo " <td>" . $row3['lib_numPa'] . "</td>";
                                echo "</tr>";
                            }
                        }
                                        echo " <td></td>";
                                        echo " <td></td>";
                
            }
            
            
        }



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

