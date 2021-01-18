<?php
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
	# code...
	/*echo "Error";*/
}




require 'views/index.views.php';