<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <!-- <link href="css/estilos_footer.css" rel="stylesheet"> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	

	<!-- <link href="css/style.css" rel="stylesheet"> -->
	
	 	
<title>Pagina pulentosky</title>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a href="<?php echo RUTA; ?>index.php" class="navbar-brand">INICIO</a>
					
				<div class="collapse navbar-collapse" id="menuNavegacion">
					<ul class="navbar-nav mr-auto">
					<?php if(isset($_SESSION['perfil_usuario'])):?>
						<?php if($_SESSION['perfil_usuario'] == 'cliente'):?>
						<li class="nav-item">
							<a href="<?php echo RUTA;?>models/cargar_csv.php" class="nav-link">CARGAR</a>
						</li>						
						<li class="nav-item">
							<a href="<?php echo RUTA;?>models/listar.php" class="nav-link">LISTADO</a>
						</li> 
						<?php else: ?>
							<li class="nav-item">
								<a href="<?php echo RUTA;?>models/cargar_csv.php" class="nav-link">CARGAR</a>
							</li>						
							<li class="nav-item">
								<a href="<?php echo RUTA;?>models/listar.php" class="nav-link">LISTADO</a>
							</li>
							<li class="nav-item">
								<a href="<?php echo RUTA;?>models/registrar.php" class="nav-link">REGISTRO</a>
							</li>
						<?php endif?>
					<?php endif?>
						<li class="nav-item">
							<a href="<?php echo RUTA;?>models/login.php" class="nav-link">LOGIN</a>
						</li>
					</ul>
					<li class="btn btn-outline-dark">
						<a class="nav-link active" href="">
							<span><?php echo $_SESSION["perfil_usuario"]; ?> - <?php echo $_SESSION["usuario_correo"]; ?> </span>
						</a>
                	</li>	
					<li class="nav-item nav">
						<a class="nav-link active" href="<?php echo RUTA;?>models/cerrar.php">
							<span>Cerrar Sesión</span>
						</a>
                	</li>
				</div>				
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alternar Menu"> 
						<span class="navbar-toggler-icon"></span>
					</button>
			</div>

		</nav>
	</header>
