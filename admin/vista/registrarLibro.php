<!-- 
    Author: Willan Mendieta 
    Date:   27/05/2021
    
-->
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8" language="es">
        <meta http-equiv="content-type" content="text/html1; charset-=iso-8859-1"/>
    <title>Agregar Libros</title>

    <link href="../../config/css/index.css"  rel="stylesheet"/>
    <link href="../../config/css/textos.css" rel="stylesheet"/>
    <script type="text/javascript" src="../../../config/validaciones.js"></script>

	<head>




        <header>
        <a href= "registrarLibro.php"> <img id="logo" src="../../config/imagenes/fondo.png"/></a>
            <h1>Libreria</h1>

            </nav>
            <nav> 
                <ul id="navUsuariosAdmi"> 
                <li><a href="registrarLibro.php">Agregar libro</a></li> 
                <li><a href="listarLibros.php">Listar libros</a></li> 
                <li><a href="listar_usuarioA.php">Buscar libro</a></li>  
                </ul> 
            </nav>
        </header>
          
		<body>
            <section>
            
                <article id="BloqueDeBajoMenu">
                    <form id="formulario01" method="POST" action="../controladores/registrarLibro.php" onkeyup="return validarCamposObligatorios(this)">
                    
                    <label for="nombres">Nombres (*)</label>
                    <input type="text" id="nombres" name="nombres" value="" placeholder="Ingrese sus dos nombres ..." onkeyup="return validarLetras(this) "required/>
                    <span id="mensajeNombres" class="error"></span>
                    <br>
                    
                    <label for="isbn">ISBN (*)</label>
                    <input type="text" id="isbn" name="isbn" value="" placeholder="Ingrese el isbn ..." onkeyup="return validarISBN(this) "required/>
                    <span id="mensajeisbn" class="error"></span>
                    <br>

                    <label for="numbpa">numero de paguinas (*)</label>
                    <input type="text" id="numbpa" name="numbpa" value="" placeholder="Ingrese su numero de paguinas ..."required/>
                    <br>

                    <label for="Ncapitulo">Numero de Capitulo (*)</label>
                    <input type="text" id="Ncapitulo" name="Ncapitulo" value="" placeholder="Ingrese el numero del capitulo ..." required/>
                    <br>

                    <label for="titulo">Ingrese el titulo (*)</label>
                    <input type="text" id="titulo" name="titulo" value="" placeholder="Ingrese su numero de titulo ..."required/>
                    <br>

                    <label for="rol">Selecione un autor(*)</label>
                    <select id="select" name="select" onsubmit="rol()">
                        <option value="1" selected>Seleccione un rol</option>
                        <option value="A">Admin</option>
                        <option value="U">Usuario</option>
                    </select>
                    <span id="mensajeRol" class="error"></span>
                    <br>

                    <input id="boton_aceptar" type="submit" id="crear" name="crear" value="Agregar libro" />
                    <input id="boton_cancelar" type="reset" id="cancelar" name="cancelar" value="Cancelar" />


                </section>

        <footer id="Pie">
            Integrantes:Willan Mendieta  Correo:<a href="mailto: wmendietam@est.ups.edu.ec">wmendietam@est.ups.edu.ec</a> tel: <a href="tel: 0980158835 "> 0998113193 </a></p>
            <div id="copyright">Copyright&copy; 2021 - Página creada por Willan Mendieta - Todos los derechos reservados</div>
           
         </footer>
		</body>
</html>