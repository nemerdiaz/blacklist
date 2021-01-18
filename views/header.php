<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	
 	
	<title>Pagina pulentosky</title>
</head>
<body>
	<header>

		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			<div class="container">
				<a href="<?php echo RUTA; ?>index.php" class="navbar-brand">INICIO</a>
					
				<div class="collapse navbar-collapse" id="menuNavegacion">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a href="<?php echo RUTA; ?>admin/registrar.php" class="nav-link">NUEVO</a>
						</li>
					</ul>
				</div>
				
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuNavegacion" aria-expanded="false" aria-label="Alternar Menu"> 
						<span class="navbar-toggler-icon"></span>
					</button>
			</div>
		</nav>
	</header>