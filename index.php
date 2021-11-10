<?php session_start();
require 'models/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
	# code...
	/*echo "Error";*/
}

// if (isset($_SESSION['usuario_correo'])) {
// 	header('Location: models/listar.php');
// } else {
// 	header('Location: models/registrar.php');
// }

if (isset($_SESSION['usuario_correo'])) {
	require 'views/index.views.php';
} else {
	header('Location: models/login.php');
}
