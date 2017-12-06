<!DOCTYPE html>

<?php require_once 'modelo/ClaseLogin.php'; 
$usuario = new ClaseLogin();
if (isset($_POST['grabar']) and $_POST['grabar']=='si')
{
	$usuario->Usuario();
}else{

}
?>

<html lang="es">

<head>
	<meta charset="utf-8">

	<title>Sistema de parqueadero BiMo</title>
	
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="vista/css/login.css">

	<style>
	body {
	    font-family: "Segoe UI", sans-serif;
	    font-size:100%;
	}

	.sidebar {
	    position: fixed;
	    height: 100%;
	    width: 0;
	    top: 0;
	    left: 0;
	    z-index: 1;
	    background-color: #1C5E55;
	    overflow-x: hidden;
	    transition: 0.4s;
	    padding: 1rem 0;
	    box-sizing:border-box;
	}

	.sidebar .boton-cerrar {
	    position: absolute;
	    top: 0.5rem;
	    right: 1rem;
	    font-size: 2rem;
	    display: block;
	    padding: 0;
	    line-height: 1.5rem;
	    margin: 0;
	    height: 32px;
	    width: 32px;
	    text-align: center;
	    vertical-align: top;
	}

	.sidebar ul, .sidebar li{
	    margin:0;
	    padding:0;
	    list-style:none inside;
	}

	.sidebar ul {
	    margin: 4rem auto;
	    display: block;
	    width: 80%;
	    min-width:200px;
	}

	.sidebar a {
	    display: block;
	    font-size: 120%;
	    color: #eee;
	    text-decoration: none;
	    
	}

	.sidebar a:hover{
	    color:#fff;
	    background-color: #FF9933;

	}

	h1 {
	    color:#FF9933;
	    font-size:180%;
	    font-weight:normal;
	}
	#contenido {
	    transition: margin-left .4s;
	    padding: 1rem;
	}

	.abrir-cerrar {
	    color: #1C5E55;
	    font-size:1rem;   
	}

	#abrir {
	    
	}
	#cerrar {
	    display:none;
	}

	/* Ampliar imagen */

	#myImg {
	    border-radius: 5px;
	    cursor: pointer;
	    transition: 0.3s;
	}

	#myImg:hover {opacity: 0.7;}

	/* The Modal (background) */
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    padding-top: 100px; /* Location of the box */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
	}

	/* Modal Content (image) */
	.modal-content {
	    margin: auto;
	    display: block;
	    width: 90%;
	    max-width: 800px;
	}

	/* Caption of Modal Image */
	#caption {
	    margin: auto;
	    display: block;
	    width: 80%;
	    max-width: 700px;
	    text-align: center;
	    color: #ccc;
	    padding: 10px 0;
	    height: 150px;
	}

	/* Add Animation */
	.modal-content, #caption {    
	    -webkit-animation-name: zoom;
	    -webkit-animation-duration: 0.6s;
	    animation-name: zoom;
	    animation-duration: 0.6s;
	}

	@-webkit-keyframes zoom {
	    from {-webkit-transform:scale(0)} 
	    to {-webkit-transform:scale(1)}
	}

	@keyframes zoom {
	    from {transform:scale(0)} 
	    to {transform:scale(1)}
	}

	/* The Close Button */
	.close {
	    position: absolute;
	    top: 15px;
	    right: 35px;
	    color: #f1f1f1;
	    font-size: 40px;
	    font-weight: bold;
	    transition: 0.3s;
	}

	.close:hover,
	.close:focus {
	    color: #bbb;
	    text-decoration: none;
	    cursor: pointer;
	}

	/* 100% Image Width on Smaller Screens */
	@media only screen and (max-width: 700px){
	    .modal-content {
	        width: 100%;
	    }
	}
	</style>
</head>

<body>
	
	<!-- Menú principal !-->

	<div id="sidebar" class="sidebar">
	    <a href="#" class="boton-cerrar" onclick="ocultar()">&times;</a>
	<ul class="menu">
		<h1>Iniciar sesión</h1>
	    <li>
	    	<a href="vista/login_guarda.php">
	    		<font face="Calibri Light" style="font-size: 18px;">Acceso administrativo &nbsp &nbsp<span class="icon-user-tie"></span></font>
	    	</a>
	    </li>
	    <h1>Ayuda al usuario</h1>
	    <li>
	    	<a href="vista/como_crear_cuenta.php">
	    		<font face="Calibri Light" style="font-size: 18px;">Crear una cuenta &nbsp &nbsp<span class="icon-user"></span></font>
	    	</a>
	    </li>
	    <br>
	    <li>
	    	<a href="vista/como_recuperar_contrasena.php">
	    		<font face="Calibri Light" style="font-size: 18px;">Recuperar contraseña &nbsp &nbsp<span class="icon-key"></span></font>
	    	</a>
	    </li>
	    <h1>Echar un vistazo</h1>
	    <li>
	    	<a href="vista/noticias.php">
	    		<font face="Calibri Light" style="font-size: 18px;">Noticias &nbsp &nbsp<span class="icon-bullhorn"></span></font>
	    	</a>
	    </li>
	    <br>
	    <li>
	    	<a href="vista/acerca_de_nosotros.php">
	    		<font face="Calibri Light" style="font-size: 18px;">Acerca de nosotros &nbsp &nbsp<span class="icon-pushpin"></span></font>
	    	</a>
	    </li>
	</ul>
	  
	</div>

	<div id="contenido">
	  <a id="abrir" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()"><img src="uploads/menu2.png" title="Abrir menú"></a><a id="cerrar" class="abrir-cerrar" href="#" onclick="ocultar()"></a>
	</div>

	<script>
	function mostrar() {
	    document.getElementById("sidebar").style.width = "300px";
	    document.getElementById("contenido").style.marginLeft = "300px";
	    document.getElementById("abrir").style.display = "none";
	    document.getElementById("cerrar").style.display = "inline";
	}

	function ocultar() {
	    document.getElementById("sidebar").style.width = "0";
	    document.getElementById("contenido").style.marginLeft = "0";
	    document.getElementById("abrir").style.display = "inline";
	    document.getElementById("cerrar").style.display = "none";
	}
	</script>

	<!-- Imagen Logo !-->

	<center>
		<a href="http://localhost/bimo/index.php"><img src="uploads/logo.png" style="width: 75%;" title="Página principal"></a>

		<br><br>

		<img src="uploads/linea.png" style="width: 93%;">
	</center>

	<!-- Iniciar sesión !-->

	<center>

		<table style="width: 55%;" border="0">
			<tr>
				<td style="width: 50%;">

					<br><br><br><br><br><br>

					<center>
						<!-- <img src="uploads/avatar.png" style="width: 18%;">	!-->					
					</center>

					<div class="form" style="text-align: left;">

					  	<form action="" class="login-form" method="post">

					  		<font face="Calibri Light" style="color: #1C5E55; font-size: 20px;"><b>Usuario BiMo</b></font>

					  		<br><br>

					    	<font face="Calibri Light" style="font-size: 16px;" color="#1C5E55"><span class="icon-user"></span><b> Cuenta de usuario</b></font>

					    	<br><br>

					    	<input type="email" name="correo" placeholder="Correo electrónico" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@misena.edu.co" title="Por favor introduzca la dirección de correo electrónico requerida. Ejemplo: tucuenta@misena.edu.co" required/>

					    	<font face="Calibri Light" style="font-size: 16px;" color="#1C5E55"><span class="icon-key"></span><b> Contraseña</b></font>

					    	<br><br>

					    	<input type="hidden" name="grabar" value="si">

					    	<input type="password" placeholder="Contraseña" name="pass" title="Caracteres minimos aceptados (8) - Simbolos aceptados por el sistema(¿?=$#/_-)" pattern="[a-zA-Z0-9_¿?=$#/_-]{8,50}" required/>

							<?php
							if(isset($_GET['e']))
							{
							?>

							<font face="Calibri Light" style="font-size: 18px; color: red;">

								<?php
									switch($_GET['e'])
									{
										case 'login':
										?>
											<b><span class="icon-warning"></span> &nbsp Usuario o contraseña incorrecto</b>

											<br><br>

											<a href="#"><img src="uploads/error_estado.png" title="Consultar estado si el error persiste"></a>
										 	
										 	<br><br>
										<?php
									}
								}
								?>
							</font>

					    	<button><font face="Calibri Light" style="font-size: 18px;">Iniciar sesión</font></button>

					    	<p class="message">

					    		<font face="Calibri Light" style="font-size: 16px;">¿Aún no te has registrado?</font>
					    		
					    		<a href="vista/formulario_registro.php">
					    			<font face="Calibri Light" style="font-size: 16px;">Crear una cuenta</font>
					    		</a>
					    	</p>
					  	</form>
					</div>
				</td>
				<td align="center" style="width: 1%;">
					<img id="myImg" src="uploads/aviso.png" alt="¿Cumples con todos los requisitos? Si tu respuesta es si (Registrate), que estas esperando." title="Ver recomendación" width="350" height="200">

					<!-- The Modal -->
					<div id="myModal" class="modal">
					  <span class="close">&times;</span>
					  <img class="modal-content" id="img01">
					  <div id="caption"></div>
					</div>

					<script>
					// Get the modal
					var modal = document.getElementById('myModal');

					// Get the image and insert it inside the modal - use its "alt" text as a caption
					var img = document.getElementById('myImg');
					var modalImg = document.getElementById("img01");
					var captionText = document.getElementById("caption");
					img.onclick = function(){
					    modal.style.display = "block";
					    modalImg.src = this.src;
					    captionText.innerHTML = this.alt;
					}

					// Get the <span> element that closes the modal
					var span = document.getElementsByClassName("close")[0];

					// When the user clicks on <span> (x), close the modal
					span.onclick = function() { 
					    modal.style.display = "none";
					}
					</script>
				</td>
			</tr>
		</table>
	</center>
</body>
</html>