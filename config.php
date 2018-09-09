<?php

require 'environment.php';
$config = array();

if(ENVIRONMENT == 'development'){
	define("BASE_URL", "http://localhost/projetos/helptask/helpcontrol/");
	$config['dbname'] = 'contaazul';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'master';
	$config['dbpass'] = '1qwe2asd3zxc';
}else{
	define("BASE_URL", "http://localhost/areaadministrativa/dn/");
	$config['dbname'] = 'admindn';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'master'; 
	$config['dbpass'] = '1qwe2asd3zxc';	
}

global $db;

try{

	$db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);

}catch(PDOException $e){
	echo "ERRO: ".$e->getMessage();
	exit;
}