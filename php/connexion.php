<?php
$user='aissatou';
$pass='password';
try {
	$db = new PDO ('mysql:host=localhost;dbname=banque',$user,$pass);
	foreach ($db->query('SELECT * FROM administration') as $row) 
	{
		print_r($row);
	}
} catch (Exception $e) {
	print("Erreur :". $e->getMessage(). "<br/>");
	die;
}