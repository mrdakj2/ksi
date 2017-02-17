<?php

/**
* 
*/
class Register extends Controller
{
	
	function __construct()
	{
		parent::__construct();

		$this->view->css = array('login/css/default.css');
	}

	function index() {
		$this->view->render('register/index');
	}

	function run() {
		$this->model->run();
	}
}