<?php


class Database extends PDO
{
	
	public function __construct()
	{
		parent::__construct('mysql:hostname=127.0.0.1;dbname=activities','root','');
		
	}
}