<?php 
/**
 * en este archivo se crean los esquemas de  las bases de datos 
 * 
 */
 include('conexion.php');
    
	try{
		$conexion = new conexion();
		$PDO = new PDO($conexion->dsn,$conexion->admin_user,$conexion->pass);
		$PDO->exec("CREATE TABLE IF NOT EXISTS usuarios (
		  						ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		  						nombre_usuario varchar(60) NOT NULL DEFAULT '',
		  						password varchar(64) NOT NULL DEFAULT '',
								 PRIMARY KEY (ID)
				)");
		unset($PDO);
	}
	catch(PDOException $e){echo "No se ha podido crear la tabla usuarios: " .$e->getMessage();}
	try{
		$PDO = new PDO($conexion->dsn,$conexion->admin_user,$conexion->pass);
		$PDO->exec("CREATE TABLE IF NOT EXISTS articulo (
		  						ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		  						titulo_articulo varchar(60) NOT NULL DEFAULT '',
		  						abstract text NOT NULL DEFAULT '',
		  						content text NOT NULL DEFAULT '',
		  						tags text NOT NULL DEFAULT '',
								PRIMARY KEY (ID)
				)");
	    unset($PDO);
	}catch(PDOException $e){echo "No se ha podido crear la tabla articulos: " .$e->getMessage();}
	


 ?>