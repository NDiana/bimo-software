<?php
class Conexion
{
	public static function Conectar()
	{
		$conexion = mysql_connect("localhost","root","");
		mysql_query("SET NAMES 'utf8'");
		mysql_select_db("bimo");
		return $conexion;
	}
}
?>
