<?php session_start();

require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
	# code...
	/*echo "Error";*/
}
// TRAE LOS CLIENTES PARA LISTARLOS EN EL SELECT
$clientes_obtenidos = obtener_clientes($conexion);
// print_r($clientes_obtenidos);
if (!$clientes_obtenidos){
	header('Location: error.php');
	echo "no trae datos de numeros";
}

// SI HAY USUARIO ENVIARLO A LA PAGINA LISTAR

// TRAER LOS DATOS DEL MISMO REGISTRAR
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$usuario_correo = filter_var(strtolower($_POST['usuario_correo']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$idc_cliente = $_POST['idc_usuario'];
	
	$errores='';

	// VALIDAR USUARIO SI EXISTE
	if(empty($usuario_correo) or empty($password) or empty($idc_cliente)){
		$errores .= '<li> Faltan llenar datos </li>';
	}else{
		$sql = $conexion->prepare('SELECT * FROM usuarios WHERE USUARIO = :usuario_correo LIMIT 1');
		$sql->execute(array(':usuario_correo' => $usuario_correo));
		$resultado = $sql->fetch();
		if($resultado != false){
			$errores .= '<li> El usuario ya existe </li>';
		}

		$password = hash('sha512', $password);
		// echo "$usuario_correo . $password .$idc_cliente";
	}

	if ($errores == ''){
		$sql = $conexion->prepare('INSERT INTO usuarios (id, idc, usuario, pass ) VALUES (null, :idc_cliente, :usuario_correo, :pass )');
		$sql->execute(array(
			':idc_cliente' => $idc_cliente,
			':usuario_correo' => $usuario_correo,
			':pass' => $password
		));
		// echo "asdsa";


	}
}
if (isset($_SESSION['usuario_correo'])){
	require '../views/registrar.views.php';
}else{
	header('Location: login.php');
}
// require '../views/registrar.views.php';
?>