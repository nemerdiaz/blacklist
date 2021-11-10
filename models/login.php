<?php session_start();
require 'config.php';
require '../functions.php';
comprobar_session();

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
	# code...
	/*echo "Error";*/
}

$errores = '';

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    // $idc_cliente = $_POST['idc_usuario'];
    $usuario_correo = filter_var(strtolower($_POST['usuario_correo']), FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	$password = hash('sha512', $password);

    $sql = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario_correo AND pass = :pass');
    $sql->execute(array(
        // 'idc_cliente' => $idc_cliente,
        ':usuario_correo' => $usuario_correo,
        'pass' => $password
    ));

    $resultado = $sql->fetch();
    // var_dump($resultado);
    
    // print_r($idc);
    if ($resultado !== false){
        $_SESSION['usuario_correo'] = $usuario_correo;
        $_SESSION['idc'] = $resultado['IDC'];
        $_SESSION['perfil_usuario'] = $resultado['PERFIL'];
        // echo $_SESSION['perfil_usuario'];
        header('Location: listar.php');
    } else {
        $errores .= '<li> Datos incorrectos </li>';
    }
}

require '../views/login.views.php';
?>