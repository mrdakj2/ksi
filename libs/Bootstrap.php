<?php

class Bootstrap {

	function __construct() {


		$url = isset($_GET['url']) ? $_GET['url'] : null;
		$url = rtrim($url, '/');
		$url = explode('/', $url);

		//	print_r($url);

		//ovo ako je samo /mvc
		if (empty($url[0])) {
			require 'controllers/index.php';
			$controller = new Index();
			$controller->index();
			return false;
		}

		//ulazi ako mu damo /mvc/index, /mvc/help ...
		$file = 'controllers/' . $url[0] . '.php';
		if (file_exists($file)) {
			require $file;
		} else {
			require 'controllers/error.php';
			$controller = new Error();
			$controller->index('The page doesnt exist');
			return false;
		}
		
		$controller = new $url[0];
		$controller->loadModel($url[0]);
	//	$controller->sayHello();

		//calling methods
		//ako imamo other argument i to za help
		if (isset($url[2])) {
			//poziva f-ju other sa argumentom
			if (method_exists($controller, $url[1]))
				$controller->{$url[1]}($url[2]);
			else {
				require 'controllers/error.php';
				$controller = new Error();
				$controller->index('Method doesnt exist');
				return false;
			}
		} else {
			if (isset($url[1])) {
		        //poziva funkciju other is helpa
			  if (method_exists($controller, $url[1]))
				$controller->{$url[1]}();
		   	  else {
				require 'controllers/error.php';
				$controller = new Error();
				$controller->index('Method doesnt exist');
				return false;
		    	}
			}//nema othera i slicnog 	
			else {
				//iscrtava
				$controller->index();
			}
		}
	}

}