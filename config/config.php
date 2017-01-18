<?php

$host = 'localhost';
$dbname = 'exo1';
$user = 'root';
$pass = 'root';


try{
	$db = new PDO('mysql:host='.$host.';dbname='.$dbname, $user, $pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
}
catch(Exception $e)
{
	echo 'Erreur : '.$e->getMessage().'<br />';
	echo 'N° : '.$e->getCode();
}