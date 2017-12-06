<?php
session_start();
require_once("Conexion.php");
class NuevoUsuario
{
	public function AgregarUsuario($nombre,$tipo_documento,$no_documento,$telefono,$email,$contrasena)
	{
		$sql="insert into usuario values('','$nombre','$tipo_documento','$no_documento','4','$telefono','$email','$contrasena','2');";
		$res=mysql_query($sql,Conexion::Conectar());
		echo"<script type='text/javascript'>
		alert('Se ha registrado satisfactoriamente en el sistema');
		window.location='http://localhost/bimo/index.php';
		</script>";
	}	
}
?>