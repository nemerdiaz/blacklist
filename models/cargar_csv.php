<?php session_start();
require 'config.php';
require '../functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
	# code...
	/*echo "Error";*/
}

if (isset($_POST['cbox1'])){
    $sql = "TRUNCATE TABLE black";
    $conexion->query ($sql);
}
if (isset($_POST['enviar'])){
	$filename=$_FILES["file"]["name"];
	$info = new SplFileInfo($filename);
	$extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
    				
		if($extension == 'csv'||'txt')
		{
            $filename = $_FILES['file']['tmp_name'];
            $handle = fopen($filename, "r");
            $idc_usuario = $_SESSION['idc'];
            echo $idc_usuario;
            while( ($data = fgetcsv($handle, 1000, ";") ) !== FALSE )
                {
                
                
                $q = "INSERT INTO black (IDC, NUMERO, DESCRIPCION) VALUES (
                        '$idc_usuario',
                        '$data[0]', 
                        '$data[1]'
                    )";
                    echo $q;
            $conexion->query($q);
            }
            fclose($handle);
		}				   
	}
if (isset($_SESSION['usuario_correo'])) {
    require '../views/cargar_csv.views.php';
} else {
    header('Location: login.php');
}
    
?>