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
 $codigo = $_POST["codigo"]; 
 $Ncapitulo = isset($_POST["Ncapitulo"]) ? trim($_POST["Ncapitulo"]) : null;
 $titulo = isset($_POST["titulo"]) ? mb_strtoupper(trim($_POST["titulo"]), 'UTF-8') : null;
 $autor1 = isset($_POST["select"])? mb_strtoupper(trim($_POST["select"]), 'UTF-8') : null;

 $sql = "SELECT * FROM autor where au_nombre = '$autor1'";
 $resultId2 = $conn->query($sql);

 while($row=$resultId2->fetch_assoc()){
     $id2=$row['au_id'];
 }
 if ($id2 !== 0) {
    echo "<p>Se ha creado el capitulo correctamemte!!!</p>"; 
    $sql2 = "INSERT INTO capitulos VALUES (0, '$Ncapitulo', '$titulo', $id2, $codigo)"; 
    
    if ($conn->query($sql2) === TRUE) {
        echo "<p>Se ha creado el capitulo correctamemte!!!</p>"; 

    } else {
    if($conn->errno == 1062){
    echo "<p class='error'>?? </p>"; 
    }else{
    echo "<p class='error'>Error: " . mysqli_error($conn) . "</p>";
    } 
    }
 }
  //cerrar la base de datos
  $conn->close();
  echo "<a href='../vista/registrarLibro.php'>Menu principal</a>";
  echo "<a href='../vista/Acapitulos.php?codigoT=" .$codigo. "'>Agregar mas capitulos</a>";
  ?>
 </body>
 </html>