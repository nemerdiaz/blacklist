<?php session_start();
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
	# code...
	/*echo "Error";*/
}

$conexionDB = connectDB($bd_config);
if (!$conexionDB) {
	header('Location: error.php');
	# code...
	/*echo "Error";*/
}

// $numeros_obtenidos = obtener_numeros($conexion);
// // print_r($numeros_obtenidos);

// if (!$numeros_obtenidos){
// 	header('Location: ../error.php');
// 	echo "no trae datos de numeros";
// }

//numeros obtenidos con filtro de usuario_correo
$u_correo = $_SESSION['usuario_correo'];
$perfil_usuario = $_SESSION['perfil_usuario'];
// echo $perfil_usuario;

// $u_correo = "emerson.diaz@netuno.cl";
$sql ='';

// $sql = "SELECT black.IDC as blackidc, black.NUMERO, black.DESCRIPCION, black.FECHA, usuarios.ID, usuarios.IDC, usuarios.USUARIO as user, usuarios.PASS 
// 	FROM black 
// 	left JOIN usuarios ON black.IDC=usuarios.IDC WHERE usuarios.USUARIO = '$u_correo'";


$sql = "SELECT black.IDC as blackidc, black.NUMERO, black.DESCRIPCION, black.FECHA, usuarios.ID, usuarios.IDC, usuarios.USUARIO as user, usuarios.PASS 
 	FROM black 
 	left JOIN usuarios ON black.IDC=usuarios.IDC WHERE ";
if($perfil_usuario == 'cliente'){
    $sql.= "usuarios.USUARIO = '$u_correo'";
} elseif($perfil_usuario == 'admin') {
    $sql = "SELECT black.IDC as blackidc, cliente.CLIENTE AS nombre, black.NUMERO, black.DESCRIPCION, black.FECHA, usuarios.ID, usuarios.IDC, usuarios.USUARIO as user, usuarios.PASS
	FROM black 
   RIGHT JOIN usuarios ON black.IDC=usuarios.IDC
   LEFT JOIN cliente ON black.IDC=cliente.IDC";
};
$sql.= ";";

// echo "$sql";
// echo "$u_correo";



if (isset($_SESSION['usuario_correo'])) {
    require '../views/listar.views.php';
} else {
    header('Location: login.php');
}

?>