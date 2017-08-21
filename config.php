<?php

require 'environment.php';


define("BASE_URL", "http://localhost/testes");




global $config;
$config = array();

if(ENVIRONMENT == "development"){
	$config['dbname'] = 'setember';// to define the name of database.
	$config['host'] = 'localhost'; 
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123';
}else{

	/*
	here we will put the informatios of the external server
	because, the config informations of external database
	is other
	*/
	$config['dbname'] = 'setember';  // define the name of database when you create the project.
	$config['host'] = 'localhost'; 
	$config['dbuser'] = 'root';
	$config['dbpass'] = '123';
}

?>