<?php

class Error extends Controller {

	function __construct() {
		parent::__construct();
	}

	function index($error) {
		$this->view->msg = $error;
		$this->view->render('error/index');
	}

}