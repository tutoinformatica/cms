<?php 
	include('admin/config.php');
	include('admin/baseDatos.php');
	session_start();
	$usuario = $_POST["nombre"];   
	$password = $_POST["password_usuario"];
	if(validarUsuario($usuario,$password)){
		
		$_SESSION['usuario'] = $usuario;
		header('Location: admin/admin_panel.php');


	}else{
		$_SESSION['usuario'] = 1;
		header('Location: admin/login.php');
	}
 ?>