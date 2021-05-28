<!-- 
    Author: Willan Mendieta 
    Date:   20/05/2021
    
-->
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" language="es">
        <meta http-equiv="content-type" content="text/html1; charset-=iso-8859-1"/>
    <title>Listar Libros</title>

    <link href="../../config/css/index.css"  rel="stylesheet"/>
    <link href="../../config/css/textos.css" rel="stylesheet"/>

	<head>
      


        <header>
        <a href= "registrarLibro.php"> <img id="logo" src="../../config/imagenes/fondo.png"/></a>
            <h1>Libreria</h1>

            <nav> 
            <ul id="navUsuariosAdmi"> 
                <li><a href="registrarLibro.php">Agregar libro</a></li> 
                <li><a href="listarLibros.php">Listar libros</a></li> 
                <li><a href="listarLibros2.php">Buscar libro</a></li>  
                </ul> 
            </nav>
        </header>
          
		<body>
            <section>
            
                <article id="BloqueDeBajoMenu">

                        <table id="tablaUsuarios" style="width:50%">
                        <tr>
                        <th>Numero de capitulo</th>
                        <th>Titulo</th>
                        <th>Nombre Autor</th>
                        <th>Nombre Nacionalidad</th>
                        <th> </th>
                        </tr>

                        <?php
                        include '../../config/conexionBD.php'; 
                        $sql3 = "SELECT * FROM capitulos";
                        $result3 = $conn->query($sql3);

                        
                        if ($result3->num_rows > 0) {
                        
                            while($row3 = $result3->fetch_assoc()) {
                                echo "<tr>";

                                echo " <td>" . $row3['cap_numero'] ."</td>";
                                echo " <td>" . $row3['cap_titulo'] . "</td>";
                                
                               $sql2 = "SELECT * FROM autor where au_id =". $row['cap_autor']." ";
                                  $result2 = $conn->query($sql2);

                                    if ($result2->num_rows > 0) {
                                      while($row2 = $result2->fetch_assoc()) {
                                       
                                        echo " <td>" . $row2['au_nombre'] ."</td>";
                                        echo " <td>" . $row2['au_nacionalidad'] ."</td>";
                                        echo "<td> <a href='Acapitulos.php?codigoT=" . $row3['cap_libro'] . "'>Agregar Capitulos</a> </td>";
                                        }
                                    }
                                echo "</tr>";
                            }

                            
                        } else {
                        echo "<tr>";
                        echo " <td colspan='7'> No existen usuarios registradas en el sistema </td>";
                        echo "</tr>";
                        }
                        #echo " <td> <a href='../../../config/cerrar_sesion.php'>Cerrar Sesion</a> </td>";

                        

                        $conn->close();
                        ?>
                        </table>
    	        </article>
            </section>

        <footer id="Pie">
        Integrantes:Willan Mendieta  Correo:<a href="mailto: wmendietam@est.ups.edu.ec">wmendietam@est.ups.edu.ec</a> tel: <a href="tel: 0980158835 "> 0998113193 </a></p>
            <div id="copyright">Copyright&copy; 2021 - Página creada por Willan Mendieta - Todos los derechos reservados</div>
         
         </footer>
		</body>
</html>