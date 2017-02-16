<?php

class SuggestActivity_Model extends Model {

	function __construct() {
		parent::__construct();
	}

	function run() {
		$username = htmlspecialchars($_POST['ime']);
		$email = htmlspecialchars($_POST['email']);
		$name = htmlspecialchars($_POST['tema']);
		$description = htmlspecialchars($_POST['opis']);
		$date = htmlspecialchars($_POST['datum']);


		$statement = "INSERT INTO activities ( `username`, `email`, `name`, `description`, `date`) VALUES (:username,:email,:name,:description,:date)";
		$q = $this->db->prepare($statement);
		$q->bindParam(':name', $name, PDO::PARAM_STR);
		$q->bindParam(':email', $email, PDO::PARAM_STR);
		$q->bindParam(':username', $username, PDO::PARAM_STR);
		$q->bindParam(':description', $description, PDO::PARAM_STR);
		$q->bindParam(':date', $date, PDO::PARAM_STR);
		$q->execute();
		
		header('location:' .URL.'activities');
	} 

}