<?php

class Activities extends Controller {

	function __construct() {
		parent::__construct();

		$this->view->js = array('activities/js/default.js');
		$this->view->css = array('activities/css/default.css');
	}

 	function index() {
		$this->view->render('activities/index');
	}

	function ajax() {
		$this->model->ajaxGet();
	}
}