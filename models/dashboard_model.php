<?php

class Dashboard_Model extends Model
{
	
	function __construct()
	{
		parent::__construct();
	}

	function ajaxInsert() {
		$ime = $_POST['ime'];
	//	echo $_POST['prezime'];
		$query = $this->db->prepare("SELECT * FROM users WHERE name = (:ime)");
		$query->execute(array(':ime'=> $ime));

		$count = $query->rowCount();
		echo $count;
	}

}