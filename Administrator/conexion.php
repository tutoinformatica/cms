
<?php  
/**
 * en este archivo se estableceran los parametros de configuracion de la base de datos
 */
ini_set( "display_errors", true );
date_default_timezone_set( "Europe/Madrid" );
class conexion{
	public $dsn;
	public $admin_user;
	public $pass;
	function __construct(){
		$this->dsn = 'mysql:dbname=cms;host=localhost';
		$this->admin_user ='root';
		$this->pass='';
	}
}


?>
