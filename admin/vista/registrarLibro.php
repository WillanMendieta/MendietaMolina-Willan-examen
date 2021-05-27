<!-- 
    Author: Willan Mendieta 
    Date:   27/05/2021
    
-->
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" language="es">
        <meta http-equiv="content-type" content="text/html1; charset-=iso-8859-1"/>
    <title>Home</title>

    <link href="../../../config/css/index.css"  rel="stylesheet"/>
    <link href="../../../config/css/textos.css" rel="stylesheet"/>
    <script type="text/javascript" src="../../../config/validaciones.js"></script>

	<head>




        <header>
        <a href= "crear_usuarioA.php"> <img id="logo" src="../../../config/imagenes/telefono.png"/></a>
            <h1>Agenda Telefonica</h1>

            </nav>
            <nav> 
                <ul id="navUsuariosAdmi"> 
                <li><a href="crear_usuarioA.php">Agregar libro</a></li> 
                <li><a href="../usuario/buscarCedula/buscar.html">Listar libros</a></li> 
                <li><a href="listar_usuarioA.php">Buscar libro</a></li>  
                </ul> 
            </nav>
        </header>
          
		<body>
            <section>
            
                <article id="BloqueDeBajoMenu">
                    <form id="formulario01" method="POST" action="../../controladores/usuario/crear_usuarioA.php" onkeyup="return validarCamposObligatorios(this)">
                    
                    <label for="nombres">Nombres (*)</label>
                    <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres ..." onkeyup="return validarLetras(this) "required/>
                    <span id="mensajeNombres" class="error"></span>
                    <br>
                    
                    <label for="isbn">ISBN (*)</label>
                    <input type="text" id="isbn" name="isbn" value="" placeholder="Ingrese el isbn ..." onkeyup="return validarLetras(this) "required/>
                    <span id="mensajeApellidos" class="error"></span>
                    <br>

                    <label for="numbpa">numero de paguinas (*)</label>
                    <input type="text" id="numbpa" name="numbpa" value="" placeholder="Ingrese su numero de paguinas ..."required/>
                    <br>



        <footer id="Pie">
            Integrantes:Willan Mendieta  Correo:<a href="mailto: wmendietam@est.ups.edu.ec">wmendietam@est.ups.edu.ec</a> tel: <a href="tel: 0980158835 "> 0998113193 </a></p>
            Darwin Leon Correo: <a href="mailto: dleont@est.ups.edu.ec">dleont@est.ups.edu.ec</a> tel: <a href="tel: 0998113193"> 0998113193 </a></p>
            <div id="copyright">Copyright&copy; 2021 - Página creada por Willan Mendieta y Darwin Leon - Todos los derechos reservados</div>
           
         </footer>
		</body>
</html>