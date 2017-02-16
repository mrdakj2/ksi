<?php

class Activities_Model extends Model {

	function __construct() {
		parent::__construct();
	}

	function ajaxGet() {
		$statement = "SELECT * FROM activities ORDER BY id DESC";
		$query = $this->db->prepare($statement);
		$query->execute();
		$result = $query->fetchAll();
		echo json_encode($result);
	}

}