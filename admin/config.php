		
<?php  

ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Madrid" );
define("NOMBRE_BASE_DATOS","cms");
define("DB_USUARIO","root");
define( "DB_DSN", "mysql:host=localhost;dbname=".NOMBRE_BASE_DATOS);
define( "DB_PASSWORD", "" );//de momento esta vacio por seguridad habria que ponerle contraseña
define( "TABLA_USUARIO", "usuarios" );
define( "CLASS_PATH", "classes" );
define( "TEMPLATE_PATH", "templates" );
define( "NUM_ARTICULOS", 5 );
define( "ADMIN_USUARIO", "admin" );
define( "ADMIN_PASSWORD", "mypass" );
//require( CLASS_PATH . "/Article.php" );
function handleException( $exception ) {
  echo "Lo siento no funciona temporalmente el cms ".$exception->getMessage();
  error_log( $exception->getMessage() );
}

set_exception_handler( 'handleException' );
?>
