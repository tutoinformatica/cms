<?php  
	/**
	 * esta funcion crea la base de datos mysql de usuarios con los campos:
	 * id 
	 * nombre_usuario
	 * password
	 */
	function crearBaseDatosUsuarios(){
		try{
			$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql=$conexion->prepare("CREATE TABLE IF NOT EXISTS usuarios (
		  						ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		  						nombre_usuario varchar(60) NOT NULL DEFAULT '',
		  						password varchar(64) NOT NULL DEFAULT '',
								 PRIMARY KEY (ID)
							 )");
			$sql->execute();
			$conexion = null;
		}
		catch(PDOException $e){
			echo "error al connectar con la base de datos" .$e->getMessage();
		}
  }
  /**
   * esta funcion sirve para crear la tabla de @contenido
   * parametros por momento de esta base de datos:
   * id
   * titulo_articulo
   * texto
   *
   * esta funcion esta hecha para que la base de datos sea facilmente modificable
   */
  function crearBaseDatosContenido(){
  	try{
			$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
			$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			$sql=$conexion->prepare("CREATE TABLE IF NOT EXISTS articulo (
		  						ID bigint(20) unsigned NOT NULL AUTO_INCREMENT,
		  						titulo_articulo varchar(60) NOT NULL DEFAULT '',
		  						texto text NOT NULL DEFAULT '',
								 PRIMARY KEY (ID)
							 )");
			$sql->execute();
			$conexion = null;
		}
		catch(PDOException $e){
			echo "error al connectar con la base de datos" .$e->getMessage();
		}
  }
  /**
   * esta funcion recibe dos parametros:
   * nombreUsuario
   * password
   * comprueba si existe este usuario en la base de datos
   * @return true si existe
   * @return   [description]false si no existe
   * alerta!! en esta version de la funcion solo accepta password sin numeros
   */
  function validarUsuario($nombreUsuario,$password){
  		$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$consulta = "SELECT * FROM usuarios WHERE password='$password' and nombre_usuario ='$nombreUsuario'";
		$sql=$conexion->prepare($consulta);
		$sql->execute();
		if($sql->rowCount() == 1)return true;
		else return false;
  }
  /**
   * esta funcion recibe como parametros los 
   * campos te un articulo
   * de momento un articulo solo podra tener dos campos
   * titulo del articulo
   * texto del articulo
   * 
   */
  function insertarNuevaEntrada($titulo_articulo,$texto_articulo){
  	$texto_articulo = addslashes($texto_articulo);
  	$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$consulta = "INSERT into articulo (id,titulo_articulo,texto) VALUES
				 ('','$titulo_articulo','$texto_articulo') ;";
	$sql=$conexion->prepare($consulta);
	$sql->execute();

  }
  /**
   * esta funcion sirve para obtener todos los articulos de la bases de datos
   * devuelve el resultado de una consulta select* usando pdo
   * de momento los campos que hay en la base de datos son :
   * titulo
   * texto
   */
  function obtenerArticulos(){
  	$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
	$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$sql = "SELECT * FROM articulo";
	$stmt = $conexion->prepare($sql);
	$stmt->execute();
	$result = $stmt->fetchAll();
	return $result;

  }
  

  /*function setNuevoUsuario($nombreUsuario,$password){
	try{
		$passwordEncriptado = md5($password);
		$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
		$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		/*$sql=$conexion->prepare("INSERT INTO usuarios ('ID','nombre_usuario','password') 
								VALUES('', '.$nombreUsuario', '.$password')
								");
		$sql->execute();
		$conexion = null;
	}
	catch(PDOException $e){
		echo "error al connectar con la base de datos" .$e->getMessage();
	}
  }*/

?>