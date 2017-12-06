<!DOCTYPE html>

<?php require_once("../modelo/ClaseLogin.php");
if(!isset($_SESSION["Admin"]))
{
?>
<script type='text/javascript'>
    alert('Inicia sesión para ver tu contenido');
    window.location='http://localhost/bimo/index.php';
</script> 
<?php
}else{
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

	<!-- Opciones principales !-->

	<div class="container">
        <div class="row">
            <div class="col-xs-12">
    			<center>

    				<br><br>

					<table border="0" style="width: 99%;">
					    <tr>
					        <td style="width: 50%;">
					            <img src="../uploads/logo.png" style="width: 70%;">
					        </td>
					        <td style="width: 20%;">
					            <div class="form-group">
					                <select name="forma" onchange="location = this.value;" class="form-control" />
					                    <option value="../vista/perfil_admin.php">Bienvenido(a) <?php echo $_SESSION['Admin'];?></option>
					                    <option value="#">Cambiar contraseña</option>
					                    <option value="#">Cambiar rol de usuario</option>
					                </select>
					            </div>
					        </td>
					    </tr>
					</table>
				</center>

				<br>

				<!-- Imagen linea horizontal de colores !-->

				<img src="../uploads/linea.png" width="100%">

				<h1 class="page-header" style="color: #1C5E55;">
					Editar perfil <font face="calibri light" style="font-size: 20px;">(<?php echo $_SESSION['Admin'];?>)</font>
				</h1>

				<label style="color: #1C5E55; font-size: 90%;">Los cambios realizados a su perfil de usuario tendran efecto cuando inicie sesión nuevamente </label>

				<br><br>

				<div class="well well-sm text-right">
					<a class="btn" style="color: #1CA794" href="http://localhost/bimo/vista/index_admin.php?c=Usuario&a=Crud&id=<?php echo $_SESSION['Id1'];?>" title="Editar perfil"><span class="icon-pencil"></span></a>

				    <a class="btn" href="../vista/index_admin.php" title="Cancelar actualización" style="color: red;"><span class="icon-cross"></span></a>
				</div>

				<br>
    
			    <div class="form-group">
			        <label style="color: #1C5E55;"><span class="icon-user"></span> Nombres y apellidos</label>
			        <input type="text" value="<?php echo $_SESSION['Admin'];?>" class="form-control" disabled />
			    </div>
			    
			    <div class="form-group">
			        <label style="color: #1C5E55;">Tipo de documento</label>
			        <input type="text" value="<?php echo $_SESSION['Tipo_Doc1'];?>" class="form-control" disabled />
			    </div>

			    <div class="form-group">
			        <label style="color: #1C5E55;"><span class="icon-profile"></span> Número de documento</label>
			        <input type="text" value="<?php echo $_SESSION['Num_Doc1'];?>" class="form-control" disabled />
			    </div>
			    
			    <div class="form-group">
			        <label style="color: #1C5E55;"><span class="icon-phone"></span> Telefono celular</label>
			        <input type="text" value="<?php echo $_SESSION['Contacto1'];?>" class="form-control" disabled />
			    </div>

			    <div class="form-group">
			        <label style="color: #1C5E55;"><span class="icon-envelop"></span> Correo electrónico</label>
			        <input type="text" value="<?php echo $_SESSION['Correo1'];?>" class="form-control" disabled />
			    </div>

			    <div class="form-group">
			        <label style="color: #1C5E55;">Estado</label>
			        <input type="text" value="<?php echo $_SESSION['Estado1'];?>" class="form-control" disabled />
			    </div>

			    <br><br>
    		</div>
    	</div>
	</div>
</body>
</html>

<?php
}
?>