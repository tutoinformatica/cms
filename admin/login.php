<?php 
include('config.php');
include('baseDatos.php');
crearBaseDatosUsuarios();
?>

<html>
<head>

	<title>pagina de login</title>
	<style type="text/css">
	body{
		font-family: Arial, Helvetica, sans-serif;
		background:url(img/bgnoise_lg.png);
		font-size: 14px;
		color: #3a2127;
		}
		.container header h1 , .existe{
			font-family: 'Open Sans Condensed','Arial Narrow', Arial, sans-serif;
			padding: 0px 5px 0px 5px;
			line-height: 35px;
			color: #275973;
			text-align: center;
			font-size: 28px;
			text-transform: uppercase;

		}
		.existe{
			font-size: 12px;
			text-align: left;
			font-weight: bold;
		}
		.form{
			background:#f1f1f1; 
			width:40%; 
			margin:0 auto; 
			padding-left:10%; 
			padding-top:5%;
			padding-bottom: 10%;
			border-radius: 10px;
			-webkit-border-radius: 10px;
			-moz-border-radius: 10px;
			height:40%;

		}
		.form label {
			color: #000;
			font-weight: bold;
			font-size: 12px;
			font-family: Arial, Helvetica;
		}
		.form p.contact{
			font-size: 12px;
			margin:0px 0px 2px 0;
			line-height: 14px;
			font-family:Arial, Helvetica;
		}
		.form input[type="text"] {
			 width: 70%; 
		}
		.form input[type="password"]{
			width:70%;
		}
		.form input , textarea{
			background-color: rgba(255, 255, 255, 0.4);
			border: 1px solid rgba(122, 192, 0, 0.15);
			padding: 5px;
			font-family: Keffeesatz, Arial; 
			color: #4b4b4b;
			font-size: 14px;
			border-radius: 5px;
			-moz-border-radius:5px;
			-webkit-border-radius: 5px;
			margin-bottom: 15px; margin-top: 2px;
		}
		.form input:focus , textarea:focus{
			border: 1px solid #ff5400;
			background-color: rgba(255, 255, 255, 1);
		}
		.form input.button{
			text-transform: uppercase;
			position: relative;
			background: #4b8df9;
			display: inline-block;
			padding: 5px 10px 6px;
			color: #fbf7f7;
			text-decoration: none;
			font-weight: bold;
			border-radius: 5px;
			-webkit-border-radius: 5px;
			-moz-border-radius: 5px;
			box-shadow: 0 1px 3px #999;	
			webkit-box-shadow: 0 1px 3px #999;
			moz-box-shadow: 0 1px 3px #999;
			text-shadow: 0 -1px 1px #222;
			border: none;
			position: relative;
			cursor: pointer;
			font-size: 14px;
			font-family: Verdana, Geneva, sans-serif;
		}
		
	</style>
</head>
<body>
	<div class="container">
		<header>
			<h1>
				<strong>LOGIN</strong>
			</h1>
		</header>
	 <div class="form">
	 	<form action="../validar_login.php" id="contactform" method="post">
	 		<p class="contact">
	 			<label for="name">Nombre</label>
	 		</p>
	 		<input id="nombre" name="nombre" placeholder = "Nombre"type="text" required>
	 		<p class="contact">
	 			<label for="name">Password</label>
	 		</p>
	 		<input id="password" name="password_usuario" type ="password" required>
	 		<br>
	 		<input class="button" name="submit" id="submit" tabindex="5" value="acceder" type="submit">
	 	</form> 

	 </div>
	
	</div>
</body>
</html>
 