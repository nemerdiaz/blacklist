	<?php require 'header.php'; ?>

	<div class="container"> 		
			<!-- <div class="row">
				<div class="col"> -->
					<h2>SUBIR EXCEL</h2>	

					<?php 
					if (isset($_POST['enviar']))
					{
						
					  $filename=$_FILES["file"]["name"];
					  $info = new SplFileInfo($filename);
					  $extension = pathinfo($info->getFilename(), PATHINFO_EXTENSION);
					
					   if($extension == 'csv')
					   {
						$filename = $_FILES['file']['tmp_name'];
						$handle = fopen($filename, "r");
					
						while( ($data = fgetcsv($handle, 1000, ";") ) !== FALSE )
						{
						   $q = "INSERT INTO black (NUMERO, DESCRIPCION) VALUES (
							'$data[0]', 
							'$data[1]'
						)";
					
						$conexion->query($q);
					   }					
						  fclose($handle);
					   }
					}
					?>
					<form enctype="multipart/form-data" method="post" action="">
						CSV File: <input type="file" name="file" id="file">
						<input type="submit" value="Enviar" name="enviar">
					</form>
					<!-- https://www.baulphp.com/importar-archivo-de-excel-a-mysql-usando-php/ -->
	</div>
	<?php require 'footer.php'; ?>

	