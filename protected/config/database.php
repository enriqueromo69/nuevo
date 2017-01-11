<?php

// This is the database connection configuration.
return array(
	//'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database

	'connectionString' => 'mysql:host=localhost;dbname=bdDiarios',
	'emulatePrepare' => true,
	'username' => 'root',
	'password' => '',
	'charset' => 'utf8',


/*
	'connectionString' => 'mysql:host=localhost;dbname=u700087275_diari',
	'emulatePrepare' => true,
	'username' => 'u700087275_diari',
	'password' => '',
	'charset' => 'utf8',

*/	
);