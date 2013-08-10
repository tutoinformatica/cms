<?php 
/**
 * en este archivo se procesaran todas las peticiones que se quieran
 * publicar para actualizar el contenido de la pagina web 
 * Este codigo tiene como finalidad facilitar al usuario el hecho de 
 * actualizar la pagina
 */

/**
 * vectores_errores es un vector que guardara todos los posibles errores 
 * que vayan ocurriendo al intentar publicar un archivo
 */

	include('config.php');
 	include('baseDatos.php');
	session_start();
	$vector_errores = array ();

	if(!isset($_POST['titulo_articulo']))
		$vector_errores[] = 'no se ha recubido ningun titulo';
	if(!isset($_POST['contenido_articulo']))
		$vector_errores[] = 'no se ha recibido ningun campo de texto';
	
	crearBaseDatosContenido();
	if(count($vector_errores < 1)){
		insertarNuevaEntrada($_POST['titulo_articulo'],$_POST['contenido_articulo']);
	}
	/**
	 * si todo a ido bien lo llevamos al index principal
	 */
	header('Location: ../index.php');



	 
/*	$_POST['vector_errores'] = ; 
	$vector_errores[] = 'no se ha recibido ningun campo de texto';
	$my_array[] = "pascual";
	echo $my_array[2];
*/



 ?>