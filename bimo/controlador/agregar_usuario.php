<?php
require_once("../modelo/NuevoUsuario.php");

$query = "SELECT 
* 
FROM
usuario
WHERE email='".strip_tags($_POST['correo'])."';";
		
$resultado = mysql_query($query,Conexion::Conectar());
		
if ($reg=mysql_num_rows($resultado) == 0)
{
	$nuevo = new NuevoUsuario();
	$nuevo->AgregarUsuario(strtoupper($_POST["nombre"]),$_POST["tipo_documento"],$_POST["no_documento"],$_POST["telefono"],$_POST['correo'],md5($_POST['pass']));
}else{
			
}
if($reg=mysql_fetch_array($resultado))
{
	echo"<script type='text/javascript'>
	alert('La cuenta de correo electrónico que acaba de ingresar actualmente esta en uso, por favor intente registrarse nuevamente');
	window.location='http://localhost/bimo/vista/formulario_registro.php';
	</script>";;	
}
?>