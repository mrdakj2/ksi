<?php

class Controller {

	function __construct() {
		
		$this->view = new View();
	}

	//ove funkcije se mogu pozivati iz bilo kog kontorlera

	public function loadModel($name) {
		$path = 'models/' .$name. '_model.php';
		if (file_exists($path)) {
			require $path;
			$modelName = $name. '_Model';
			$this->model = new $modelName();
		}
	}

	public function sayHello() {
		echo "helloo";
	}

}