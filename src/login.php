<?php
$login = [
	'usuario' => 'admin',
	'pass' => '1234'
];

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if ($usuario == $login['usuario'] && $pass == $login['pass']) {

	header('Location: ../public/index.html');
	
} else {
	print "Usuario o contraseña incorrectos";
}


