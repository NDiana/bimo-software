<?php
session_start();
require_once("Conexion.php");
class ClaseLogin
{
	public function Usuario()
	{
		$correo = $_POST['correo'];
		$pass = md5($_POST['pass']);

		//Acceso Usuario común

		$query = "SELECT 
		* 
		FROM
		usuario
		WHERE email='".strip_tags($correo)."' 
		AND
		contrasena='".strip_tags($pass)."'
		AND
		rol='".strip_tags(4)."'
		AND
		estado='".strip_tags(1)."';";
		
		$resultado = mysql_query($query,Conexion::Conectar());
		
		if ($reg=mysql_num_rows($resultado) == 0)
		{
			header("Location:index.php?e=login");
		}else{
			
		}
		if($reg=mysql_fetch_array($resultado))
		{
			$_SESSION['User'] = $reg['nombre'];
			header("Location:http://localhost/bimo/vista/index_usuario.php");
		}
	}

	public function Administrador()
	{
		$correo = $_POST['correo'];
		$pass = md5($_POST['pass']);

		//Acceso Administrador

		$query = "SELECT 
		* 
		FROM
		usuario
		WHERE email='".strip_tags($correo)."' 
		AND
		contrasena='".strip_tags($pass)."'
		AND
		rol='".strip_tags(1)."'
		AND
		estado='".strip_tags(1)."';";
		
		$resultado = mysql_query($query,Conexion::Conectar());
		
		if ($reg=mysql_num_rows($resultado) == 0)
		{
			header("Location:http://localhost/bimo/vista/login_admin.php?e=login");
		}else{
			
		}
		if($reg=mysql_fetch_array($resultado))
		{
			$_SESSION['Admin'] = $reg['nombre'];
			$_SESSION['Id1'] = $reg['id'];
			$_SESSION['Tipo_Doc1'] = $reg['tipo_documento'];
			$_SESSION['Num_Doc1'] = $reg['no_documento'];
			$_SESSION['Contacto1'] = $reg['telefono'];
			$_SESSION['Correo1'] = $reg['email'];
			$_SESSION['Estado1'] = $reg['estado'];
			header("Location:http://localhost/bimo/vista/index_admin.php");
		}
	}

	public function Supervisor()
	{
		$correo = $_POST['correo'];
		$pass = md5($_POST['pass']);

		//Acceso Supervisor

		$query = "SELECT 
		* 
		FROM
		usuario
		WHERE email='".strip_tags($correo)."' 
		AND
		contrasena='".strip_tags($pass)."'
		AND
		rol='".strip_tags(2)."'
		AND
		estado='".strip_tags(1)."';";
		
		$resultado = mysql_query($query,Conexion::Conectar());
		
		if ($reg=mysql_num_rows($resultado) == 0)
		{
			header("Location:http://localhost/bimo/vista/login_supervisor.php?e=login");
		}else{
			
		}
		if($reg=mysql_fetch_array($resultado))
		{
			$_SESSION['Super'] = $reg['nombre'];
			header("Location:http://localhost/bimo/vista/index_supervisor.php");
		}
	}

	public function Guarda()
	{
		$correo = $_POST['correo'];
		$pass = md5($_POST['pass']);

		//Acceso Guarda

		$query = "SELECT 
		* 
		FROM
		usuario
		WHERE email='".strip_tags($correo)."' 
		AND
		contrasena='".strip_tags($pass)."'
		AND
		rol='".strip_tags(3)."'
		AND
		estado='".strip_tags(1)."';";
		
		$resultado = mysql_query($query,Conexion::Conectar());
		
		if ($reg=mysql_num_rows($resultado) == 0)
		{
			header("Location:http://localhost/bimo/vista/login_guarda.php?e=login");
		}else{
			
		}
		if($reg=mysql_fetch_array($resultado))
		{
			$_SESSION['Guarda'] = $reg['nombre'];
			header("Location:http://localhost/bimo/vista/index_guarda.php");
		}
	}
}
?>
