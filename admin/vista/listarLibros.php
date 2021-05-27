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
                        <th>Nombres</th>
                        <th>ISBN</th>
                        <th>Numeros de pagina</th>
                        </tr>

                        <?php
                        include '../../config/conexionBD.php'; 
                        $sql = "SELECT * FROM libro";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                        
                            while($row = $result->fetch_assoc()) {
                                echo "<tr>";

                                echo " <td>" . $row['lib_nombre'] ."</td>";
                                echo " <td>" . $row['lib_isbn'] . "</td>";
                                echo " <td>" . $row['lib_numPa'] . "</td>";
                                echo " <td> <a href='capitulos.php?codigo=" . $row['lib_id'] . "'>Capitulos</a> </td>";
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