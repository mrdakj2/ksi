<?php

class Login_Model extends Model
{

	public function __construct() {
		parent::__construct();
	}

	public function run() {
		$login = $_POST['login'];
		$password = htmlspecialchars($_POST['password']);

		$query = $this->db->query("SELECT * FROM users WHERE username='$login'");
		
		$query->execute();
		

		$count = $query->rowCount();
		if ($count > 0) {
			$r = $query->fetchAll();
			for ($i=0; $i<$count; $i++)     
		      	if (password_verify($password, $r[$i]['password'])) {
					Session::init();
					Session::set('loggedIn', 1);
					Session::set('user', $login);
					header('location:'.URL.'index');
					exit();
				}
		}
	
		require 'controllers/error.php';
		$controller = new Error();
		$controller->index('Error occured. Plese try again.');
		return false;

	}
}