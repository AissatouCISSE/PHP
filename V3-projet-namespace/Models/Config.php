<?php
namespace Models;
require_once "../config/autoload.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);

class Config{
	public static  function param(){
		return array('localhost', 'banque' , 'aissatou', 'password');
	}
}
?>