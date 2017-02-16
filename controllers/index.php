<?php

class Index extends Controller {

	function __construct() {
		parent::__construct();

		$this->view->css = array('index/css/default.css');
	}

	function index() {
		$this->view->render('index/index');
	}

}