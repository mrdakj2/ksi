<?php

class Register_Model extends Model
{

	public function __construct() {
		parent::__construct();
	}

	public function run() {
		$name=htmlspecialchars($_POST['username']);
	  	$pass=htmlspecialchars($_POST['password']);
	  	$passwordHash = password_hash($pass, PASSWORD_DEFAULT);

		 if (!empty($name) && !empty($pass)){

		  		$statement = "SELECT * FROM users WHERE username=:name";
		    	$q = $this->db->prepare($statement);
		    	$q->bindParam(':name', $name, PDO::PARAM_STR);
		    	$q->execute();
			
		    	if ($q->rowCount() != 0) {
		    	 	require 'controllers/error.php';
					$controller = new Error();
					$controller->index('Username already exists');

					return false;
		    	}
				else {
			  		$statement = "INSERT INTO users ( `username`, `password`) VALUES (:username,:password)";
		      		$q = $this->db->prepare($statement);
			      	$q->bindParam(':username', $name, PDO::PARAM_STR);
			      	$q->bindParam(':password', $passwordHash, PDO::PARAM_STR);
		       		$q->execute();	 

		       		header('location:'.URL.'login');
		 		}   
		 }
		 else {
		 	header('location:'.URL.'register');
		 }

	}
}