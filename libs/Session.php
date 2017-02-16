<?php

class Session
{
	
	private static $_sessionStart = false;

	public static function init() {
		if (self::$_sessionStart == false) {
		//	$trace = debug_backtrace();
   		//	 $name = $trace[2]['function'];
   		//	 echo $name;
			session_start();
			self::$_sessionStart = true;
		}
	}

	public static function set($key, $value) {
		$_SESSION[$key] = $value;
	}

	public static function get($key) {
		if (isset($_SESSION[$key]))
			return $_SESSION[$key];
		else
			return false;
	}

	public static function destroy() {
		session_destroy();
	}
}