<!DOCTYPE html>

<?php require_once '../modelo/ClaseLogin.php'; 
$usuario = new ClaseLogin();
if (isset($_POST['grabar']) and $_POST['grabar']=='si')
{
	$usuario->Administrador();
}else{

}
?>

<html>

<head>
	<meta charset="utf-8" />

	<title>Acceso administrativo</title>

	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<link rel="stylesheet" href="../vista/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../vista/css/bootstrap-theme.min.css" />
    <link rel="stylesheet" href="../vista/css/jquery-ui.min.css" />
    <link rel="stylesheet" href="../vista/css/jquery-ui.theme.min.css" />
    <link rel="stylesheet" href="../vista/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../fonts.css">
</head>

<body>

	<!-- Iniciar sesión !-->

	<div class="container">
        <div class="row">
            <div class="col-xs-12">
    			<center>
					<br>

					<a href="http://localhost/bimo/index.php"><img src="../uploads/logo2.png" title="Página principal" style="width: 98%;"></a>

					<br><br>

					<img src="../uploads/linea.png" style="width: 100%;">

					<br><br><br><br><br><br><br>
				</center>

				<table border="0" style="width: 70%;" align="center">
					<tr>
						<td style="width: 50%;">

							<h4 style="color: #1C5E55;">Administrador</h4>

							<form action="" method="post">

								<div class="form-group">
				                	<label style="color: #1C5E55;"><span class="icon-user"></span> Cuenta de usuario</label>
				                	<input style="width: 80%;" type="email" name="correo" class="form-control" placeholder="Correo electrónico" required/>
				            	</div>

				            	<input type="hidden" name="grabar" value="si">

				            	<div class="form-group">
				                	<label style="color: #1C5E55;"><span class="icon-key"></span> Contraseña</label>
				                	<input style="width: 80%;" type="password" name="pass" placeholder="Contraseña" class="form-control" title="Caracteres minimos aceptados (8) - Simbolos aceptados por el sistema(¿?=$#/_-)" pattern="[a-zA-Z0-9_¿?=$#/_-]{8,50}" required/>
				            	</div>

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

												<a href="#"><img src="../uploads/error_estado.png" title="Consultar estado si el error persiste"></a>
											 	
											 	<br><br>
											<?php
										}
									}
									?>
								</font>

				            	<b><input type="submit" value="Iniciar sesión" style="color: #1C5E55; background-color: white; border: white;"></b>
    						</form>
						</td>

						<td style="width: 50%;">
							<a href="../vista/login_supervisor.php">
								<img src="../uploads/supervisor.png" title="Acceder al sistema como Supervisor">
							</a>

							<a href="../vista/login_guarda.php">
								<img src="../uploads/guarda.png" title="Acceder al sistema como Supervisor">
							</a>
						</td>
					</tr>
				</table>
    		</div>
    	</div>
	</div>
</body>
</html>