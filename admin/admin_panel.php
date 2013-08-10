<?php 
	/*
	 * En este archivo creo la pagina  de administrador desde la que se podra 
	 * actualizar el contenido de manera facil
	 * 
	 */
	 
	 include('config.php');
	 session_start(); 
?>
	<html>
	<head>
		<title>my web page</title>
		<meta charset = "utf-8">
		<link rel="stylesheet" type="text/css" href="css_admin_panel.css">
	</head>

	<body>
		<div class="wrap">
			<header>
				<div id="top">
					<div class="left">
						<p>Bienvenido, 
							<strong><?php echo $_SESSION['usuario']  ?></strong> 
							[ <a href="">logout</a> ]
						</p>
					</div>
					<div class="right">
						<div class="aling-right">
							<p><?php echo date("d-m-Y H:i:s"); ?></p>
						</div>
					</div>
				</div>
				<nav>
					<ul>
						<li class="upp"><a href="">panel principal</a></li>
						<li class="upp"><a href="">contenido</a></li>
						<li class="upp"><a href="">otros</a></li>
					</ul>
				</nav>
			</header>
			<div id="content">
				<div id="main">
					<div class="full_w">
						<div class="h_title"> 
							insertar nueva entrada en el blog
						</div>
						<form action ="procesar_publicacion.php"method="post">
							<div class="element">
								<label for="name">
									titulo de la nueva entrada(obligado ponerlo)
								</label>
								<input id="name" name="titulo_articulo" class="text err">
							</div>
							<div class="element">
								<label for="content">
									contenido de la pagina
								</label>
								<textarea id = "contenido" name="contenido_articulo" class="textarea" rows="10">
									
								</textarea>
							</div>
							<div class="entry">
								<button type="submit" class="add">publicar</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>