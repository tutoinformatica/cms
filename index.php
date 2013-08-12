<?php 
	include('admin/config.php');
	include('admin/baseDatos.php');
	session_start();
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mi pagina web</title>
</head>
<body>
	<style>
	*{margin:0;}
	/****************** cabecera ********************/
		header{
			background: yellow;
			width:100%;
			height: 150px;
		}
		.titulo_y_logo{
			background: purple;
			color:white;
			float:left;
			width:50%;
			height: 100px;
		}
		.logo{
			background: white;
			width:50%;
			color:black;
			float:left;
		}
		.titulo{
			background: black;
			color:white;
			width:50%;
			float:right;
		}
		.redes_sociales_y_buscador{
			background: red;
			color:white;
			float:right;
			width:50%;
			height: 100px;
		}
		.redes_sociales{
			width:100%;
			background: blue;
		}
		.buscador{
			width:100%;
			background: yellow;	
		}
		.menu{
			width:100%;
			height: 50px;
			background: orange;
		}
		/************** contenido ***********/
		.contenedor_contenido{
			background: blue;
			width:100%;
			overflow: hidden;
		}
		.contenido{
			float:left;
			width:70%;
			margin:0 auto;
			background: orange;
			
		}
		.barra_lateral{
			float:right;
			background: purple;
			width: 30%;
		}
		/****************** pie de pagina*************/
		footer{
			background: red;
		}

	</style>
	<!-- contenedor o wapper de la pagina-->
	<div class="wrap">
			<!--- cabecera de la pagina-->
			<header>
				<div class="titulo_y_logo">
					<div class="logo">
						logo</br>
						logo
						logo
						logo
						logo
						logo
						logo

					</div>
					<div class="titulo">
						titulo de la web
					</div>
				</div>
				<div class="redes_sociales_y_buscador">
					<div class="redes_sociales">
						redes sociales
					</div>
					<div class="buscador">
						buscador
					</div>
				</div>
				<nav class="menu">
					Menu
				</nav>
			</header>
			<!--contenido de la pagina-->
			<div class="contenedor_contenido">
				<div class="contenido">
					
					<article class="articulo_simple">
						<section>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, 
								voluptatibus, a iusto consectetur maxime minus minima sit animi nesciunt 
								blanditiis omnis natus 
								mollitia reprehenderit necessitatibus aut molestias nihil ut dolor!</p>
						</section>
					</article>
					<article class="articulo_simple">
						<section>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora, 
								voluptatibus, a iusto consectetur maxime minus minima sit animi nesciunt 
								blanditiis omnis natus 
								mollitia reprehenderit necessitatibus aut molestias nihil ut dolor!</p>
						</section>
					</article>
					
				</div>
				<aside class="barra_lateral">
					<aside class="tags">
						<h1>tags</h1>
						<ul>
							<li>kasdmaskmd</li>
							<li>algo</li>
							<li>algo</li>
							<li>algo</li>
							<li>algo</li>
						</ul>
					</aside>
					<aside class="enlaces_externos">
						<h1>enlaces a otras webs</h1>
						<ul>
							<li>kasdmaskmd</li>
							<li>algo</li>
							<li>algo</li>
							<li>algo</li>
							<li>algo</li>
						</ul>
					</aside>
				</aside>
			</div>
			<footer>pie de pagina</footer>
	</div>


	
</body>
</html>