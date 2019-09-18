<?php


$usuario = $_POST['usuario'];
$password = $_POST['password'];

if (empty($usuario) || empty($password)) {
	echo "usuario o password mal ingresados";
}else{
	echo "Bienvenido"+ $usuario + "!";
}

?>