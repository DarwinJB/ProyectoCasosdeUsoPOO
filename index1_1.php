<?php

//enlace base de datos
$conn_pgsql = "host=localhost port=5432 dbname=servidor1 user=postgres password=groot options'--client_encoding=UTF8";
$ dbconn = pg_connect($conn_pgsql);

if (!$dbconn) {
	echo "Error de conexcion";
} else {
	echo "Conexion exitosa"

}




$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (empty($usuario) || empty($password)) {
	echo "usuario o password mal ingresados";
}else{
	echo "Bienvenido"+ $usuario + "!";
	$query = "SELECT id_usuario, password, SELECT usuario"
	http_response_code(200)
	header("Content -type/Aprendamos/index");

}





?>