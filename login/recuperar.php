<html>
	<head>
		<title>Cambiar contraseña</title>
		<link rel="shortcut icon" href="../img/logoTieOut.ico" type="image/x-icon" /> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/login.css">
		<link rel="stylesheet" type="text/css" href="../css/encabezados.css">
		<?php include_once("../imports.php"); ?>
	</head>
	<body>
		<?php  include_once("../header.php"); ?>
		<!--Contenido de la página de Login-->
		<div class="content">
			<div class="center-block">
				<h3 class="encabezado">Cambiar contraseña</h3><br>
				<div class="row">
					<form class="form-horizontal col-xs-offset-1 col-xs-10 col-xs-offset-1 col-sm-offset-1 col-sm-10 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6" role="form">
						<div class="form-group">
							<label for="correo" >Correo </label>
								<input id="correo" class="form-control" type="email" placeholder="alguien@ejemplo.com" />			
						</div>						
						<div class="form-group text-center">
								<a id="login" class="btn btn-default" href="<?php echo ROOTPATH ?>/login/login.php">Iniciar sesión</a>
								<button id="recuperar" class="btn btn-primary" type="submit">Enviar</button>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		<?php include_once('../footer.php'); ?>
	</body>
</html>