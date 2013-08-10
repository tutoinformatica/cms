<?php 
	include("config.php");
	class Articulo{

		//atributos
		
		public $id = null;
		public $fechaPublicacion = null;
		public $tituloArticulo = null;
		public $abstract = null;
		public $contenido = null;

		//contructor
		public function __construct($data = array()){
			if(isset($data['id']))$this->id = (int)$data['id'];
			if(isset($data['fechaPublicacion']))$this->fechaPublicacion = (int)$data['publicationDate'];
			if ( isset( $data['tituloArticulo'] ) ) $this->tituloArticulo = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['tituloArticulo'] );
    		if ( isset( $data['abstract'] ) ) $this->abstract = preg_replace ( "/[^\.\,\-\_\'\"\@\?\!\:\$ a-zA-Z0-9()]/", "", $data['abstract'] );
    		if ( isset( $data['contenido'] ) ) $this->contenido = $data['contenido'];
		}
		/* funciones para tratar con los datos de la base de datos */

		/*public function guardarValoresFormulario($params){
			// Guardamos todos los parametros
		    $this->__construct( $params );
		    //parseamos la fecha 
		    if(isset($params['fechaPublicacion'])){
		    	$fechaPublicacion = explode(('-'),$params['fechaPublicacion']);
			    if($count($fechaPublicacion) == 3){
			    	list($y , $m , $d) = $fechaPublicacion;
			    	$this->fechaPublicacion = mktime(0,0,0,$m,$d,$y);
			    }
			}	
		}*/
		
		public static function getById($id){
			try{
				$conexion = new PDO(DB_DSN,DB_USUARIO,DB_PASSWORD);
				$conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEMPTION);
				$sql = $conexion->prepare( "SELECT *  FROM usuarios ");
				$sql->execute();
				$consulta = $sql->fetchAll(PDO::FETCH_ASSOC);
				$conexion = null;
				if($consulta)return new Articulo($fila);
				else{
					return null;
				}
			}
			catch(PDOException $e){
				echo "error al connectar con la base de datos en la funcion getByID".$e->getMessage();

			}
		}
			/*foreach($consulta as $con){
				echo $con['Nombre'];
			}
*/
	}
 ?>