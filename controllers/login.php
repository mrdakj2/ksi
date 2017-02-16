<?php

class Login extends Controller {
	function __construct() {
		parent::__construct();

		$this->view->css = array('login/css/default.css');
	}

	function index() {
		$this->view->render('login/index');
	}

	function run() {
		$this->model->run();
	}
}