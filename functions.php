<?php

function conexion($bd_config){

	try {
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		return $conexion;
	} catch (PDOException $e) {
        return false;
		echo "Error: " . $e->getMessage();
    }
}

function connectDB($bd_config){
$server = "localhost";
$user = "root";
$pass = "";
$bd = "clientesblack";
	// $conexion = mysqli_connect( $bd_config['server'], $bd_config['usuario'], $bd_config['pass'],$bd_config['basedatos'])
	$conexion = mysqli_connect( $server, $user, $pass, $bd)
		or die("Ha sucedido un error inexperado en la conexion de la base de datos");
	return $conexion;
    }


// function obtener_numeros($conexion){
// 	//  $sql = $conexion->prepare("SELECT * FROM black");
// 	 $sql = $conexion->prepare("SELECT black.IDC as blackidc, black.NUMERO, black.DESCRIPCION, black.FECHA, usuarios.ID, usuarios.IDC, usuarios.USUARIO as user, usuarios.PASS 
// 	 FROM black 
// 	 left JOIN usuarios ON black.IDC=usuarios.IDC"); 
// 	 $sql -> execute();
// 	 return $sql->fetchAll();
// }

function obtener_clientes($conexion){
	$sql = $conexion->prepare("SELECT * FROM cliente ORDER BY 1 ASC"); 
	$sql -> execute();
	return $sql->fetchAll();
}

function comprobar_session(){
	if(isset($_SESSION ['usuario_correo'])){
		header('Location: cargar_csv.php');
	}
}
