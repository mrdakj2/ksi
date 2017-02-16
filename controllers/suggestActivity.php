<?php

class SuggestActivity extends Controller {

	function __construct() {
		parent::__construct();

		$this->view->css = array('suggestActivity/css/default.css');
	}

	function index() {
		$this->view->render('suggestActivity/index');
	}

	function run() {
		$this->model->run();
	}

}