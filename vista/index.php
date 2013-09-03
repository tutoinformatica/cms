<?php 
	include('../Administrator/schema-mysql.php');
	include('../Administrator/bd_interact.php');
	session_start();
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>tutoinformatica</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<!--CABECERA PRINCIPAL-->
	<?php include('header.php'); ?>
	<!--FINAL CABECERA PRINCIPAL-->
	<!--CONTENEDOR PRINCIPAL DEL CONTENIDO-->
	<div class="container">
		<!-- BARRA LATERAL DERECHA-->
		<aside id="columna_derecha">
				
				<div id = "twitter"class = "cont_redes_sociales">
					<div class="widget_red_social">
						<a href="#">Siguenos en twitter</a>
						<img src="../img/redes_sociales/twitter.png" alt="sigueme en twitter" tittle="Sigueme en twitter">
					</div>
				</div>
				<div id = "facebook" class = "cont_redes_sociales">
					<div class="widget_red_social">
						<a href="#">Sigueme en facebook</a>
						<img src="../img/redes_sociales/facebook.png" alt="sigueme en facebook" tittle="Sigueme en facebook">
					</div>
				</div>

				<nav class="etiquetas">	
					<h2>etiquetas</h2>
					
					<ul>
						<li><a href="#">kasdklasld</a></li>
						<li><a href="#">kamsdmaskd</a></li>
						<li><a href="#">asklmdkasmd</a></li>
					</ul>
				</nav>
				<nav>
					<h2>enlaces externos</h2>
					<ul>
						<li><a href="#">kasdklasld</a></li>
						<li><a href="#">kamsdmaskd</a></li>
						<li><a href="#">asklmdkasmd</a></li>
					</ul>
				</nav>
		</aside>
		<!-- FINAL BARRA LATERAL -->
		<!--- CONTENIDO -->
		<div id="contenido">

			<section>
				<?php 
					$articulos = mostrarArticulos();
					foreach ($articulos as $articulo):
				?>
				<article class = "articulo_tipo1">
					<h2><?php echo $articulo['titulo_articulo']?></h2>
					<time datetime="2012-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2012 @08:15:00</time>
					
					<p><?php echo $articulo['abstract']?></p>
					
					<div class = "leer_mas"><a href="#">leer mas ...</a>
					</div>
					<div class="tags">
						<?php $tags = explode(",", $articulo['tags']);
							  foreach ($tags as $tag):
						?>
						<a href="#"><?php echo $tag ?></a> 
						<?php endforeach; ?>
					</div>
				</article>
				<?php endforeach; ?>
				
				<!--<article class = "articulo_tipo1">
					<h2>titulo del articulo</h2>
					<time datetime="2012-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2012 @08:15:00</time>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, in, 
						aliquam, odit, totam consectetur incidunt voluptates eveniet mollitia ipsum 
						dolores quaerat ipsa sit architecto inventore odio quis soluta dolore. Quod.
					</p>
					<div class = "leer_mas">
						<a href="#">leer mas ...</a>
					</div>
					<div class="tags">
						<a href="#">#algoritmos</a> 
						<a href="#">#a estrella</a>
						<a href="#">#robotica</a> 
						<a href="#">#tag 2</a>
						<a href="#">#tag 1</a> 	
						<a href="#">#tag 2</a>
						<a href="#">#tag 1</a> 
					</div>
				</article>
				<article class = "articulo_tipo1">
					<h2>titulo del articulo</h2>
					<time datetime="2012-04-06T08:15+00:00">Friday, 6<sup>th</sup> April 2012 @08:15:00</time>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, in, 
						aliquam, odit, totam consectetur incidunt voluptates eveniet mollitia ipsum 
						dolores quaerat ipsa sit architecto inventore odio quis soluta dolore. Quod.
					</p>
					<div class = "leer_mas">
						<a href="#">leer mas ...</a>
					</div>
					<div class="tags">
						<a href="#">#algoritmos</a> 
						<a href="#">#a estrella</a>
						<a href="#">#robotica</a> 
						<a href="#">#tag 2</a>
						<a href="#">#tag 1</a> 	
						<a href="#">#tag 2</a>
						<a href="#">#tag 1</a> 
					</div>
				</article>-->
			</section>
		</div>
		<!-- FINAL DEL CONTENIDO -->
	</div>
	
</body>
</html>
	