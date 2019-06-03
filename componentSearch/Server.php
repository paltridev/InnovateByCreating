<?php

	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	
	require_once('DbConnect.class.php');
	require_once('Component.class.php');
	
	//Create Database Connection
	DbConnect::initialise();
	
	//Disable caching and set up Soap Server.
    ini_set("soap.wsdl_cache_enabled","0");
    $server = new SoapServer('WS/component.wsdl');
    
	//Register class (and functions) with server
    $server->setClass('Component');
    $server->setPersistence(SOAP_PERSISTENCE_REQUEST);

	$server->handle();

    DbConnect::close();
?>