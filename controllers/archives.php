<?php

/**
* 
*/
class Archives extends Controller
{
	
	function __construct()
	{
		parent::__construct();
	}

	function index() {
		$this->view->render('archives/index');
	}
}