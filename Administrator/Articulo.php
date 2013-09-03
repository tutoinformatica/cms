<?php 
	/**
	 * Esta clase sera la clase padre de todos los articulos 
	 * es decir de ella extenderan los diversos articulos de cada clase
	 * Un articulo basico tendra estos campos
	 * id , titulo , Abstract
	 */
	class Articulo{
		private $_idArticulo;
		private $_tituloArticulo;
		private $_abstract;
		function __construct($_tituloArticulo,$_abstract,$_idArticulo = ''){
			$this->_idArticulo = $_idArticulo;
			$this->_tituloArticulo = $_tituloArticulo;
			$this->_abstract = $_abstract;
		}
		function getIdArticulo(){
			return $this->_idArticulo;
		}
		function getTituloArticulo(){
			return $this->_tituloArticulo;
		}
		function getAbstractArticulo(){
			return $this->_abstract;
		}
		function setTituloArticulo($titulo){
			$this->_tituloArticulo = $titulo;
		}
		function setAbstract($abstract){
			$this->_abstract = $abstract;
		}

	}





 ?>