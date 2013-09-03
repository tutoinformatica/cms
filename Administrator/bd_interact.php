<?php 
	/**
	 * en esta clase se crean las funciones basicas para realizar las 
	 * consultas a las bases de datos y retornar los datos 
	 */
	include('Articulo.php');
	/**
	 * [mostrarArticulos devuelve todos los articulos de la base de datos]
	 * @return [object ] [objeto en el que se encuentran todos los articulos]
	 */
	function mostrarArticulos(){
		try{
			$conexion = new conexion();
			$conexion = new PDO($conexion->dsn,$conexion->admin_user,$conexion->pass);
			$sql = "SELECT * FROM articulo";
			$articulos = $conexion->query($sql);
			return $articulos;
		}
		catch(PDOException $e){echo "No se ha podido obtener el articulo " .$e->getMessage();}
	}
	/**
	 * [getArticleByTitle a partir de un titulo nos devuelve los objetos con ese titulo]
	 * @param  [string] $titulo [es el titulo del articulo a buscar]
	 * @return [object]         [articulo o articulos en concreto que se han buscado]
	 */
	function getArticleByTitle($titulo){
		try{
			$conexion = new conexion();
			$conexion = new PDO($conexion->dsn,$conexion->admin_user,$conexion->pass);
			$sql = "SELECT * FROM articulo where titulo_articulo like '%$titulo%'";
			$articulos = $conexion->query($sql);
			return $articulos;
		}
		catch(PDOException $e){echo "No se ha podido obtener el articulo " .$e->getMessage();}
	}
	



 ?>