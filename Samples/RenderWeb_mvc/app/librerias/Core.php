<?php

	/*=======================================
	Mapear la url ingresada en el navegador,
	1- controlador
	2- método
	3- parámetro
	Ejemplo: /articulos/actualizar/4
	========================================*/

	class Core{
		protected $controladorActual ='paginas';
		protected $metodoActual ='index';
		protected $parametros = [];

		//constructor
		public function __construct(){
			//print_r($this->getUrl());
			$url = $this->getUrl();
			//Buscar en controladores si el controlador existe
			if (file_exists('../app/controladores/'. ucwords($url[0]) . '.php')) {
				//si existe se configura como controlador por defecto
				$this->controladorActual = ucwords($url[0]);

				//unset indice
				unset($url[0]);
			}

			//requerir el controlador
			require_once '../app/controladores/'. $this->controladorActual .'.php';
			$this->controladorActual = new $this->controladorActual;


			//Checar la segunda parte de la url que seria el metodo
			if (isset($url[1])) {
				if (method_exists($this->controladorActual, $url[1])) {
				//checa el metodo
				$this->metodoActual = $url[1];
				//unset indice
				unset($url[1]);
				}
			}
			//probar traer metodo
			//echo $this->metodoActual;

			//obtener los posibles parametros
			$this->parametros = $url ? array_values($url) :[];

			//llamar callback con parametros array
			call_user_func_array([$this->controladorActual, $this->metodoActual], $this->parametros);

		}

		public function getUrl(){
			//echo $_GET['url'];

			if (isset($_GET['url'])){
				$url = rtrim($_GET['url'], '/');
				$url = filter_var($url, FILTER_SANITIZE_URL);
				$url = explode('/', $url);
				return $url;
			}

		}
	}







?>