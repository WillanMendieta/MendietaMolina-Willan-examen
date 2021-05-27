<!-- 
    Author: Willan Mendieta
    Date:   20/05/2021
    
-->

<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
 <title>Crear Nuevo Usuario</title>
 <style type="text/css" rel="stylesheet">
 .error{
 color: red;
 }
 </style>
</head>

<body>
 <?php 
 //incluir conexión a la base de datos
 include '../../config/conexionBD.php'; 

 $nombre = isset($_POST["nombres"]) ? mb_strtoupper(trim($_POST["nombres"]), 'UTF-8') : null;
 $isbn = isset($_POST["isbn"]) ? mb_strtoupper(trim($_POST["isbn"]), 'UTF-8') : null;
 $numbpa = isset($_POST["numbpa"]) ? mb_strtoupper(trim($_POST["numbpa"]), 'UTF-8') : null;


 //$rol = $_POST["select"];
 $sql = "INSERT INTO libro VALUES (0, '$nombre', '$isbn', '$numbpa')"; 

  if ($conn->query($sql) === TRUE) {
  echo "<p>Se ha creado los datos personales correctamemte!!!</p>"; 

                $idTel= "SELECT MAX(lib_id) AS lib_id FROM libro";
                $resultId = $conn->query($idTel);
                while($row=$resultId->fetch_assoc()){
                    $id=$row['lib_id'];
                }

                $Ncapitulo = isset($_POST["Ncapitulo"]) ? trim($_POST["Ncapitulo"]) : null;
                $titulo = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null;


                $sql2 = "INSERT INTO capitulos VALUES (0, '$Ncapitulo', '$titulo', 1, $id)"; 
                
                                if ($conn->query($sql2) === TRUE) {
                                    echo "<p>Se ha creado el telefono correctamemte!!!</p>"; 
                                }else {
                                    echo "<p aun no registra</p>"; 
                                    }

  } else {
  if($conn->errno == 1062){
  echo "<p class='error'>El isbn del libro ya existe $isbn  o ya esta registrada en el sistema </p>"; 
  }else{
  echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
  } 
  }
  
  //cerrar la base de datos
  $conn->close();
  echo "<a href='../vista/registrarLibro.php'>Regresar</a>";
  ?>
 </body>
 </html>