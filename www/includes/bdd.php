<?php
function crearConexion() {
	$config = parse_ini_file('database.ini');
	$conexion = new mysqli ($config['SERVIDOR'],$config['USUARIO'],$config['PASSWORD'],$config['NOMBREBDD']);
	if ($conexion->connect_errno > 0)
		die ( "Error en la conexión" );
	return $conexion;
}