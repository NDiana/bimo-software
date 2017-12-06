<!DOCTYPE html>

<html>

<head>
	<meta charset="utf-8">

	<title>Registrarse</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" type="text/css" href="../fonts.css">
	<link rel="stylesheet" type="text/css" href="../vista/css/formulario.css">

	<script type="text/javascript" src="../vista/js/soloLetras.js"></script>
	<script type="text/javascript" src="../vista/js/soloNumeros.js"></script>
</head>

<body style="font-family: 'calibri light';">

	<div class="contenedor-formulario">
		<div class="wrap">

			<a href="http://localhost/bimo/index.php"><h6 style="text-align: right;"><img src="../uploads/eliminar.png" style="width: 7%;" title="Cancelar registro"></h6></a>

			<form action="../controlador/agregar_usuario.php" class="formulario" name="formulario_registro" method="post">
				<div>
					<div class="input-group">
						<input type="text" onkeypress="return soloLetras(event)" id="nombre" name="nombre" title="No se aceptan números ni simbolos">
						<label class="label" for="nombre"><span class="icon-user"></span>&nbsp Nombres y apellidos</label>
					</div>

					<font face="calibri light" color="#1C5E55">Tipo de documento</font>

					<br><br>

					<div class="input-group radio">
						<input type="radio" name="tipo_documento" id="1" value="1">
						<label for="1">Cédula de ciudadania</label>
						<input type="radio" name="tipo_documento" id="2" value="2">
						<label for="2">Tarjeta de identidad</label>

						<br><br>

						<input type="radio" name="tipo_documento" id="3" value="3">
						<label for="3">Cédula extranjera</label>
					</div>

					<div class="input-group">
						<input type="text" pattern="[0-9]{8,11}" onkeypress="return soloNumeros(event)" id="no_documento" name="no_documento" title="No se aceptan letras ni simbolos, minimo 8 números - maximo 11 números aceptados">
						<label class="label" for="no_documento"><span class="icon-profile"></span>&nbsp Número de documento</label>
					</div>

					<div class="input-group">
						<input type="text" pattern="[0-9]{10}" onkeypress="return soloNumeros(event)" id="telefono" name="telefono" title="No se aceptan letras ni simbolos, minimo 10 números - maximo 10 números aceptados">
						<label class="label" for="telefono"><span class="icon-phone"></span>&nbsp Teléfono celular</label>
					</div>

					<div class="input-group">
						<input type="text" id="correo" name="correo" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@misena.edu.co" title="Por favor introduzca la dirección de correo electrónico requerida. Ejemplo: tucuenta@misena.edu.co">
						<label class="label" for="correo"><span class="icon-envelop"></span>&nbsp Correo electrónico</label>
					</div>

					<div class="input-group">
						<input type="password" id="pass" name="pass" title="Para mayor seguridad su contraseña debe contener (Letras, números y simbolos) - Caracteres minimos aceptados (8) - Simbolos aceptados por el sistema(¿?=$#/_-)" pattern="[a-zA-Z0-9_¿?=$#/_-]{8,50}">
						<label class="label" for="pass"><span class="icon-key"></span>&nbsp Contraseña</label>
					</div>
					
					<div class="input-group checkbox">
						<input type="checkbox" name="terminos" id="terminos" value="true">
						<label for="terminos">Acepto los términos y condiciones</label>
					</div>
						
					<input type="submit" id="btn-submit" style="font-family: 'calibri light';" value="Registrarse">
				</div>
			</form>
		</div>
	</div>

	<script src="../vista/js/formulario.js"></script>

</body>

</html>